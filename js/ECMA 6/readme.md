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
