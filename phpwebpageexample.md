# React build webpages example

## Example Goal

* provide a beginners guide to the concepts behind building a simple website with REACT, in the spirit of this Node.js Tutorial  [Learn Node.js](http://www.nodebeginner.org/)
* Be able to build a two page website

## Beginners guide 

## Introduction to ideas/concept and the example
It is best to start this example by reading Node.js A beginners guide.  It helps if you know JavaScript but the concepts and ideas are universal to those participating in the event driven programming world.  This example is not so detailed or advanced but hopefully it will make it easier to start using REACT PHP.  

## The Server
Where the whole application comes to life.  The require files enable the autoloader of the REACT library and PHP classes that will be talked about more later. (Note: the require __DIR__.'/../../vendor/autoload.php';  will need to be adjusted given how many sub folders from the REACT library this example code is located)  First the non-looping event loop needs to be called, $loop, next the socket $socket and both these are passed to create the http server, $http.  The server comes to life on it being request by a user at a browser, in this example, $http->on is how REACT listener functions are called and in general this is how event listeners are called.  The event listener on the http server pass two arguments,  $request and $response.  Both descriptive names, lets start with the $request object.  The REQUEST class within REACT library gives the functionality to look at the basics that make up a http webpage call, the header, the method, GET POST PUT DELETE, the url path and url query.  In  a traditional PHP webpage environment a $_GET  request would give the web developer the information on the URL called and to find out if any query e.g. ?name=joe.  This functionality is not available in a REACT event based webpage. The $request object give us the functions to access this information:

$inpath['method'] = $request->getMethod();
$inpath['path'] = $request->getPath();
$inpath['query'] = $request->getQuery();

In this example, the $inpath is passed along to the Router Class.

This leaves the $response object.  This class deals with the return of information to the browser.  In a simple example to return a basic hmtl file, the follow would be called, 

$text = "This is request number $i.\n";
$headers = array('Content-Type' => 'text/plain');

$response->writeHead(200, $headers);
$response->end($text);

The first response function writes the type of content, in this case HTTP 200 (success) and the content type.  If the response was to a AJAX request then an JSON content type would be used, for example.  Next the actual content to display on the browser.  However, in this example we do not want to display one webpage, we want to display two.  To achieve this the $request and $response  objects  are passed on to the Router Class.  $newRouter = new reactRouter($request, $response, $inpath);

The Server creation is completed by 

$socket->listen(4001);
$loop->run();

In this example, the website will be presented at the URL   http://localhost:4001.  The example is started by navigating to the directory the example is located in a terminal and typing:    php serverhtmlcode.php . 


## The Router
The Router Class looks at the $input array and matches the request path to a requestHandler function that will contain the appropriate content for each of the two webpages being built.  The ReactRouter Class calls the $this->startRouter();  Note again, the $request and $reponse objects have been passed along, along with the query information to the RequestHandler Class functions.


## The requesHander
This is the end of the line for the $reponse object in this basic example.  Before setting the header information and returning the HTML content the webpage content needs to be made.  A primitive webpage Class contains functions to return HTML code for each of the two pages. First the  LLHeader::thepage();  function is called and this content is passed into the response object,  $response->end($newpage); .  Back at the browser the home page content is presented.  Arrange windows on the desktop to view the browser and the terminal.  On a browser asking (requesting) the URL, the HTTP listener picks up the request, forwards the information to the router, the page method, path, url and printed out to the console, next given the URL path the requestHander is called, e.g. 'page handler for startpage' is echoed to the console.  To complete the demonstration, view the second page, the link presented on the homepage can be clicked.  This starts the process off again, a new listening event has happened, this new request is routed to the corrected handler and the handler calls the content for the second page.

## The webpage HTML class builder.
A basic class containing HTML for two webpages.  In the real world this would be broken out to template, css and JavaScript.  Here the whole webpage contents are sent back but in the real world this will produce snippets of code and/ or content demanded by users on the browser via e.g. AJAX calls.

## Writing Network Application Logic
Even in this basic two page network application using REACT the style of programming is significantly different from normal php script.  Network application programming requires a new culture of thinking and logic when programming.  The next stage is to combine other REACT capabilities, fast downloads, parallel processing to bring new opportunities in website building.