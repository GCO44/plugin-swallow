# SWALLOW - Plugin upload files
###### Simplified file loading plugin built with jQuery and Bootstrap 4. This one uses the **"FormData"** constructor of javascript in order to pass one to several files.

## Languages ​​used:
- html
- Javascript
- php 

## Framework used:
- jQuery
- Boostrap 4

## Requires the installation of at least versions of:
    <!-- jQuery -->
    <script src="https:- ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https:- cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Bootstrap 4 -->
    <script src="https:- stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
    <link rel="stylesheet" href="https:- stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

## Available options:  

**Server information**
>Automatically limited to data supplied by the server or otherwise you can manually force the value only in bytes. You can also fill in your own values ​​in bytes !

- maxFileSize         : ""
- maxFileCount        : ""
- postMaxSize         : ""

**Directory path**
- imgpath             : "img/"
- jspath              : "js/"
- phppath             : "php/"       
- targetpath          : "nest/"  

**List of accepted file types (by default any type of file)**
- acceptFiles         : "*" 

>Example :
```javascript
$("#example").swallow({ 
        acceptFiles:"application/msword,text/csv,image/jpeg"
    })
``` 

**the image that will appear by default if the file type is unknown**
>In the "img" folder, find an image collection that associates with files that you can replace by keeping the name of the original file.

- defaultImg          : "file.png"

**Choose the language you want by redefining the labels**
- labelInput1         : "Add your files"
- labelInput2         : "Number of files"
- labelName           : "Name"
- labelType           : "Type file"
- labelModified       : "Modified"
- labelSize           : "Size"
- labelSaveBtn        : "Save"
- labelDeleteBtn      : "Delete",
- labelSuccess        : "File upload successful"
- labelAcceptFiles    : "Accepted formats"
- labelMaxFileSize    : "Max size accept"
- labelMaxFileCount   : "Max files accept"
- labelAllDenied      : "Denied !"

**Functions of callback**
- onSuccess           : function (response, statut){console.log(response);}
- onError             : function (response, statut, erreur){console.log(erreur);}


## Licenses
- Bootstrap is released under the MIT license and is copyright 2020 Twitter
- jQuery [MIT license](https:- tldrlegal.com/license/mit-license)

