<h1>Data Processing Architecture</h1>
    
<p>The purpose of this repository is support different type of data type stored into database</p>
 
    
<b>Solutions:</b> 
 
You can Import & Export JSON,CSV files to Database with user Interface
also you can using API to add JSON , XML data to unified Database
     
<b>Technolog:</b>  
<ul>
    <li>PHP framework [Laravel]</li>    
      
<li>maatwebsite/excel   		  package to handle CSV files</li>

<li>mtownsend/response-xml   package to handle XML files</li>   
 
<li>orchestra/parser 		  package to handle XML data</li>
</ul>  


<b>Demo:</b>
https://www.useloom.com/share/717eb9dacccc470f9f768942ac5a6110


<b>Installation:</b>

Development environment requirements:   

php >= 7.1
  


Setting up your development environment on your local machine: 

$ git clone Mahmoud-Italy/data_processor_architecture.git

$ cd data_processor_architecture

$ composer update

$ php artisan make:migrate

$ php artisan serve

now you can access this application via http://localhost:8000


that’s it have fun :)


