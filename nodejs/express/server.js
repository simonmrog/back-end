var express = require("express");
var app = express();
var port = 8080;

app.get ("/", hello);

function hello (req, res) {
  res.send ("Hello World");
}

app.listen (port);
