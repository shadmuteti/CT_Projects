var http = require("http");

http.createServer(function(request, response) {
  response.writeHead(200, {"Content-Type": "text/plain"});
  response.write("Hello, This text is from sever.js and it listens to port 8000 and to run type on the browser: localhost:8000");
  response.end();
}).listen(8000);

