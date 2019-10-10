## Table of Contents
1. Log network passes
2. Memorize results for more efficient recursive functions

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
