'use strict';

var express = require('express');
var app = express();
var fs = require("fs");

app.use(function(req, res, next) {
	res.header("Access-Control-Allow-Origin", "*");
	//res.header("")	//i dont think it needs
	//res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");	//for get its not necessary for sure
	next();
});

app.get('/', function (req, res) {
   fs.readFile( "../python/data.json", 'utf8', function (err, data) {
       //console.log(data);
       res.end(data);
   });
})

var server = app.listen(3001, function () {
  var host = server.address().address
  var port = server.address().port
  console.log("Server listening at http://%s:%s", host, port)

})
