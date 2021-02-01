## Table of Contents
1. Log network passes
2. Memorize results for more efficient recursive functions
3. Understanding the event loop and how promise, timeout get called

## 1. log network passes
```js
var oldOpenPrototype = window.XMLHttpRequest.prototype.open;
var requestId = 0;

window.XMLHttpRequest.prototype.open = function(method, url, async, user, password) {
  // you can intercept the outgoing XHR requests here
  console.group('Network Call #' + ++requestId)
  console.log('Request Method:', method)
  console.log('Request URL:', url)
  // when the XHR loads, it triggers a load event, listen to it... it will have the data you want
  this.addEventListener('load', function() {
    console.log('Response Text:', { responseText: this.responseText });
    console.groupEnd()
  });
               
  return oldOpenPrototype.apply(this, arguments);
}
```
To return interface to normal:
```
window.XMLHttpRequest.prototype.open = oldOpenPrototype;
```
## 2. Memorize results for more efficient recursive functions

Memoize function and examples originally by Douglas Crockford in Javascript: the Good Parts
Create memoize function:
  ```js
  var memoizer = function (memo, formula) {
      var recur = function (n) {
          var result - memo[n];
          if (typeof result !== 'number') {
              result = formula(recur, n);
              memo[n] = result;
          }
          return result;
      };
      return recur;
  };
  ```

Insert formulas to create specific recursive functions:

ex 1 - Fibonacci:
  ```js
  var fibonacci = memoizer([0,1], function (recur, n) {
      return recur(n - 1) + recur(n - 2);
  });
  ```
ex 2 - Factorial:
  ```js
  var factorial = memoizer([1,1], function (recur, n) {
      return n * recur(n - 1);
  });
  ```
## 1. Understanding the event loop and how promise, timeout get called
  ```js
  // Line 1
  // executed immediately
  console.log("Synchronous 1");
  
  // Line 2
  // immediately invokes a timeout function
  // that tf runs on the START of the NEXT event loop
  setTimeout(_ => console.log("Timeout 2"), 0);
  
  // Line 3
  // an immediately resolved promise
  // handles the callback function at the END of the CURRENT event loop
  Promise.resolve().then((_ => console.log("Promise 3"));
  
  // Line 4
  // executed immediately
  console.log("Synchronous 4");
  ```
  Expected Output: 
  ```js
  // Synchronous 1
  // Synchronous 4
  // Promise 3
  // Timeout 2
  ```
