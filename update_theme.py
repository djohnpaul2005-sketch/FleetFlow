import os
import re

directories = ['admin', 'manager', 'driver']
base_path = r'c:\xampp\htdocs\project1'

# Template parts
font_awesome = '    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">'
theme_script = '    <script src="../assets/js/theme.js"></script>'

def update_file(filepath):
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    modified = False
    
    # 1. Add FontAwesome if missing
    if 'font-awesome' not in content:
        # Try finding dashboard.css
        if 'href="../assets/css/dashboard.css">' in content:
            content = content.replace('href="../assets/css/dashboard.css">', 'href="../assets/css/dashboard.css">\n' + font_awesome)
            modified = True
    
    # 2. Add Theme Script if missing
    if 'theme.js' not in content and '</body>' in content:
        content = content.replace('</body>', theme_script + '\n</body>')
        modified = True

    # 3. Add Theme Button if missing
    if 'id="theme-toggle"' not in content:
        # Regex to match <div class="user-info" ...> ... </div>
        # We capture:
        # 1: Indentation
        # 2: Attributes after class="user-info" (like style="...")
        # 3: Inner content
        pattern = re.compile(r'(\s*)<div class="user-info"([^>]*)>(.*?)</div>', re.DOTALL)
        
        match = pattern.search(content)
        if match:
            indent = match.group(1)
            attrs = match.group(2)
            inner = match.group(3)
            
            # Button HTML
            btn_html = f'{indent}    <button class="theme-btn" id="theme-toggle" style="margin-right: 15px; font-size: 1.2rem; cursor: pointer; background:none; border:none; color: var(--text-color);"><i class="fas fa-moon"></i></button>'
            
            # Replacement: Wrap in flex div
            # We keep the original user-info div intact, just wrap it and prepend button
            replacement = (
                f'{indent}<div style="display: flex; align-items: center;">\n'
                f'{btn_html}\n'
                f'{indent}    <div class="user-info"{attrs}>{inner}</div>\n'
                f'{indent}</div>'
            )
            
            content = pattern.sub(replacement, content, count=1)
            modified = True
            
    if modified:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"Updated {filepath}")
    else:
        print(f"Skipped {filepath} (no changes needed)")

for d in directories:
    dir_path = os.path.join(base_path, d)
    if os.path.exists(dir_path):
        for filename in os.listdir(dir_path):
            if filename.endswith(".php"):
                update_file(os.path.join(dir_path, filename))
