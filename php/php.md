## **Part Three:**

**1. What is PHP?**

**PHP (Hypertext Preprocessor)** is a **server-side scripting language** widely used for web development. It allows you to create dynamic and interactive web pages that can interact with databases, process user input, and generate customized content. 

Here are some key features of PHP:

* **Embedded:** PHP code is embedded within HTML code using specific tags (e.g., `<?php ?>`). When a PHP script is executed, the server interprets the PHP code and generates the corresponding HTML output before sending it back to the browser.
* **Open source:** PHP is free and open-source software, making it widely accessible and fostering a large developer community.
* **Cross-platform:** PHP can run on various operating systems like Windows, Linux, and macOS, making it versatile for different server environments.

**2. Three Main Error Types in PHP:**

* **Fatal errors:** These are the most severe errors that halt the script execution entirely. They often indicate syntax errors or issues that prevent the code from even attempting to run. Examples include missing semicolons, unclosed parentheses, or syntax errors in function calls.
* **Warnings:** These are less critical but still indicate potential issues that could lead to unexpected behavior or malfunctioning code. They often occur when using deprecated functions, accessing undefined variables, or performing operations that might result in incorrect data.
* **Notices:** These are informational messages that might not necessarily cause immediate problems but highlight potential areas for improvement in the code. Examples include accessing a variable before it's assigned a value or using certain language constructs in a way that could be more efficient.

**3. echo vs. print:**

Both **echo** and **print** are used to output data in PHP. However, they have some subtle differences:

* **Number of arguments:** `echo` can take multiple arguments, allowing you to output several values in a single statement. `print` can only take one argument at a time.
* **Return value:** `echo` doesn't return a value, and its primary purpose is to output data. `print` returns the number of characters it has printed, which can be useful in some specific cases.

In most cases, both `echo` and `print` can be used interchangeably. However, `echo` is generally preferred due to its ability to handle multiple arguments and its lack of a return value, making the code cleaner and more concise.

**4. Sensitivity in PHP:**

**Variable names are case-sensitive in PHP:**

* This means that `$name`, `$Name`, and `$NAME` are considered different variables.
* Function names, keywords, and predefined constants are also case-sensitive.

However, **built-in functions are generally case-insensitive** when called. This means that calling `strtoupper()` or `STRTOUPPER()` will have the same effect.

**Note:** It's essential to maintain consistency in case sensitivity to avoid unexpected behavior and potential errors in your code.