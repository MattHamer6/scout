# How to create new ACF blocks
**This requires ACF 5.8 or greater**

## Registering new blocks
When creating a new block in ACF, it first needs to be registered; otherwise it won't appear in the Gutenberg editor. This can be done in a few simple steps: 

**Step 1:** 
Navigate to __inc/blocks.php__ copy the php array that is used to register a new block (__acf_register_block__), and change the values to represent the newly created block. (The 'title' option will be the name of the block, and filename used in the next step). 

**Step 2:**
Create a new file under __templates/blocks__ with the following name format: __block-lorem-ipsum.php__ (**Very important that the initial block- is in the file name**).

**Step 3:**
Place your custom code to create your block.

**Step 4:**
Now create a normal ACF block in WordPress (which can be named anything) with as many fields as you require. Under the location rules ensure to set it so that it displays when the **block** is equal to your **block name**.