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

| Options | Example of a byte value |
| :---         |     :---:      |
| maxFileSize         : "" | 10000000 |
| maxFileCount        : "" | 10 |
| postMaxSize         : "" | 8000000 |

**Directory path**

| Options | Content |
| :---         |     :---:      |
| imgpath             : "img/" | Contains images of different file types |
| jspath              : "js/" | Function of the plugin |
| phppath             : "php/" | Php script which allows the loading of files |
| targetpath          : "nest/" | File destination directory |  

**List of accepted file types**

| Options | Restrict file types |
| :---         |     :---:      |
| acceptFiles         : "*"  | By default any type of file |

>Example :
```javascript
$("#example").swallow({ 
        acceptFiles:"application/msword,text/csv,image/jpeg"
    })
``` 

**the image that will appear by default if the file type is unknown**

>In the "img" folder, find an image collection that associates with files that you can replace by keeping the name of the original file.

| Options | Wording possible |
| :---         |     :---:      |
| defaultImg          : "file.png" | True |

**Choose the language you want by redefining the labels**

| Options | Wording possible |
| :---         |     :---:      |
| labelInput1         : "Add your files" | True |
| labelInput2         : "Number of files"| True |
| labelType           : "Type file"| True |
| labelModified       : "Modified"| True |
| labelSize           : "Size"| True |
| labelSaveBtn        : "Save"| True |
| labelDeleteBtn      : "Delete",| True |
| labelSuccess        : "File upload successful"| True |
| labelAcceptFiles    : "Accepted formats"| True|
| labelMaxFileSize    : "Max size accept"| True |
| labelMaxFileCount   : "Max files accept"| True |
| labelAllDenied      : "Denied !"| True |

**Functions of callback**

>Example :
```javascript
    $("#example").swallow({ 
        onSuccess : function (response, statut){
            console.log(response);
        },
        onError : function (response, statut, erreur){
            console.log(erreur);
        }
    })
``` 

## Licenses
- Bootstrap is released under the MIT license and is copyright 2020 Twitter
- jQuery [MIT license](https:- tldrlegal.com/license/mit-license)

