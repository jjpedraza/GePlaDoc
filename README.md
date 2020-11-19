# GePlaDoc: Gestor de Plantillas de Word

La aplicacion permite subir un archivo de Word como plantilla (.docx) y sustituir palabras reservadas para variables que se solicitan via API POST 
y respuesta en JSON; para ser utilizado el archivo de la plantilla rellenado con las variables.

![Screenshot](https://github.com/prymecode/GePlaDoc/blob/master/img1.jpg)

Puede utilizar multiple solicitudes, genera un archivo temporal en ws/output/ del archivo final solicitado por el usuario

Es importante que este montado en un dominio para que la url resultado sea valida para el componente de Microsoft Office Live


![Screenshot](https://github.com/prymecode/GePlaDoc/blob/master/img2.jpg)

![Screenshot](https://github.com/prymecode/GePlaDoc/blob/master/img3.jpg)
