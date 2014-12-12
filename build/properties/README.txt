Override order (from less important to most important):
  1. All properties from phing base directory in "build/properties/[group].prop"
     files. These are defaults. Please don't ever change defaults. Use
     override files if you want to make any changes.
  2. All properties from phing base directory in
     "build/properties/[group].override.prop" files.
  3. All properties from project root directory in
     "build/properties/[group].prop" files.
  4. All properties from project root directory in
     "build/properties/[group].override.prop" files.

"build/properties/[group].override.prop" files ignored by git. So they should be
used to override vaiables for single machine. All common properties should be 
placed in "[group].prop" files.

Each instance, which use Drupal Phing as submodule, should have own prop files
in project root directory and should not change anything in Phing repository
itself.

So properties in phing base directory will be overridden by properties in
all other locations. And properties from project root directory in
"[group].override.prop" files have highest precedence.

So if you use Drupal Phing as git submodule then change properties in project
root directory. Common for all machines properties go to "[group].prop" files
and unique for each single machine properties go to "[group].override.prop".

