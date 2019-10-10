## Table of Contents

1. Template Literals

## 1. Template Literals

Use backticks to define a template literal:
  ```js
  let message = `Hello world!`;
  
  console.log(message);         // "Hello world!"
  console.log(typeof message);  // "string"
  console.log(message.length);  // 14
  ```
A proper multiline:
  ```js
  let message = `Multiline
  string`;
  
  console.log(message);         // "Multiline
                                //  string"
  console.log(message.length);  // 16
  ```
How to keep your HTML strings neat:
  ```js
  let html = `
  <div>
      <h1>Title</h1>
  </div>`.trim();
  
  console.log(html);            // <div>
                                //     <h1>Title</h1>
                                // </div>
  ```
Substitutions:
  ```js
  let name = "Abufrank";
      message = `Hello, ${name}.`;
      
  console.log(message);         // "Hello, Abufrank."
  ```
Calculations:
  ```js
  let count = 10,
      price = 0.25,
      message = `${count} items cost $${(count * price).toFixed(2)}.`;
      
  console.log(message);         // "10 items cost $2.50."
  ```
The first `$` in `$${count}` is kept literal because there is no `{` following it
