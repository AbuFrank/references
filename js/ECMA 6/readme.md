## Table of Contents

1. Template Literals
2. Destructuring Assignment

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

## 2. Destructuring Assigment
```js

// object of interest
var me = {
  name: 'Khaled222',
  age: 32
}

// function argument
function greet({ name }) {
  console.log('hello ' + name);
}
greet(me);

// variable declaration
var name = me.name;
var age = me.age;

// same as above
var {name, age} = me

var personName = me.name;
var personage = me.age;

// same as above
var {name: personName, age: personAge} = me

var someArr = ['khaled', 32];

var name = someArr[0]
var age = someArr[1]

// same as above
var [name, age] = someArr;
```
