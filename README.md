# SWALLOW - Plugin upload files
## Simplified file loading plugin built with jQuery and Bootstrap 4. This one uses the **"FormData"** constructor of javascript in order to pass one to several files.

## Languages ​​used:
- html
- Javascript
- php 

## Framework used:
- jQuery
- Boostrap 4

**Requires minimum or higher loading of the following versions:**

    <!-- jQuery -->
    <script src="https:- ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https:- cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Bootstrap 4 -->
    <script src="https:- stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
    <link rel="stylesheet" href="https:- stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Hirondelle V1 -->
    <script src="js/swallow.js"></script>    

## Plugin initialization

>You can find an example accessible from the "index.html" page

```javascript
    $(function() {
        $("#example").swallow({
            //Options
        })
    })  
```

## Available options:  

**Server information**
>Automatically limited to data supplied by the server or otherwise you can manually force the value only in bytes. You can also fill in your own values ​​in bytes !

| Options | type | Example of a byte value |
| :---         |     :---:      |     :---:      |
| maxFileSize         : "" | Integer | 5000000 or 5000 * 1000|
| maxFileCount        : "" | Integer| 20 or 2 * 10 |

**Directory path**

| Options | Type | Content |
| :---         |     :---:      |     :---:      |
| imgpath             : "img/" | String | Contains images of different file types |
| jspath              : "js/" | String |  Function of the plugin |
| phppath             : "php/" | String |  Php script which allows the loading of files |
| targetpath          : "nest/" | String |  File destination directory |  

**List of accepted file types**

| Options | Type | Restrict file types |
| :---         |     :---:      |     :---:      |
| acceptFiles         : "*"  | String |  By default any type of file |

>Example :

```javascript
$("#example").swallow({ 
        acceptFiles:"application/msword,text/csv,image/jpeg"
    })
``` 

**the image that will appear by default if the file type is unknown**

>In the "img" folder, find an image collection that associates with files that you can replace by keeping the name of the original file.

| Options | Type | Wording possible |
| :---         |     :---:      |     :---:      |
| defaultImg          : "file.png" | String | True |

**Choose the language you want by redefining the labels**

| Options | Type | Wording possible |
| :---         |     :---:      |     :---:      |
| labelInput1         : "Add your files" | String | True |
| labelInput2         : "Number of files" | String | True |
| labelType           : "Type file" | String | True |
| labelModified       : "Modified" |  String |True |
| labelSize           : "Size" | String | True |
| labelSaveBtn        : "Save" | String | True |
| labelDeleteBtn      : "Delete" | String | True |
| labelSuccess        : "File upload successful" | String | True |
| labelAcceptFiles    : "Accepted formats" | String | True |
| labelMaxFileSize    : "Max size accept" | String | True |
| labelMaxFileCount   : "Max files accept" | String | True |
| labelAllDenied      : "Denied !" | String | True |

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
- jQuery [MIT license](https:tldrlegal.com/license/mit-license)

