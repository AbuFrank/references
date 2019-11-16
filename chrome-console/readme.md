### Copy text from webpage to clipboard
	
```js
copy( document.body.innerText );
```

### Run Jquery in the Chrome console

Paste this code into your chrome console:

	var jqry = document.createElement('script');
	jqry.src = "https://code.jquery.com/jquery-3.3.1.min.js";
	document.getElementsByTagName('head')[0].appendChild(jqry);
	
	jQuery.noConflict();
