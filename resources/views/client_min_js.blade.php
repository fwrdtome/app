var xhr=new XMLHttpRequest;xhr.open("POST",'{{ getenv("APP_URL") }}/send'),xhr.setRequestHeader("Content-Type","application/json"),xhr.onload=function(){200===xhr.status&&alert("Fwrdto.me: Link sent!")},xhr.send(JSON.stringify({apiKey:"{{ $apiKey }}",url:window.location.href,title:document.title}));