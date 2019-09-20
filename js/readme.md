## log network passes
```
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
