import sys
import os
view_name = sys.argv[1]

views = ["create", "index", "show", "edit"]
os.mkdir(f"resources\\views\\{view_name}")

for view in views:
    with open(f"resources\\views\\{view_name}\\{view}.blade.php", "w"):
        pass 