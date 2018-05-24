select (col1,col2,... con n)
from tabla1 inner join tabla2
on tabla1.columna=tabla2.columna

//mustra todos los datos de la tabla cientes y curl_setopt
SELECT * FROM clientes
INNER JOIN curso
on clientes.id_cliente=curso.id_clientes


SELECT clientes.nombre, clientes.direccion, curso.nom_curso, curso.costo 
from clientes INNER JOIN curso
ON clientes.id_cliente=curso.id_clientes


//con where muestra toso los datos de rodrigo

SELECT * FROM clientes 
INNER JOIN curso on clientes.id_cliente=curso.id_clientes
where clientes.nombre="rodrigo"

//where y and
SELECT * FROM clientes AS cli 
INNER JOIN curso AS cur on cli.id_cliente=cur.id_clientes 
where cli.direccion="polanco" AND cur.nom_curso="php"

//where con or
SELECT * FROM clientes AS cli
INNER JOIN curso AS cur on cli.id_cliente=cur.id_clientes 
where cli.direccion="polanco" OR cur.nom_curso="java"


//con un limite de resultados 
SELECT * FROM clientes AS cli
INNER JOIN curso AS cur on cli.id_cliente=cur.id_clientes 
where cli.direccion="polanco" OR cur.nom_curso="java" LIMIT 1


//ORDENAR DE MANERA DESENDENTE

SELECT * FROM clientes AS cli
INNER JOIN curso AS cur on cli.id_cliente=cur.id_clientes 
where cli.direccion="polanco" OR cur.nom_curso="java"  ORDER BY cur.nom_curso DESC

//ORDENAR DE MANERA ASC 
SELECT * FROM clientes AS cli
INNER JOIN curso AS cur on cli.id_cliente=cur.id_clientes 
where cli.direccion="polanco" OR cur.nom_curso="java"  ORDER BY cur.nom_curso ASC


//COMO USAR LOS LIKE

SELECT * FROM clientes WHERE nombre LIKE '%m%';

En el código superior estamos buscando los clientes que contengan una ‘m’ en el nombre.



SELECT * FROM clientes WHERE nombre LIKE 'M%';

En el código superior estamos buscando los clientes cuyo nombre comienza por ‘M’.


SELECT * FROM clientes WHERE nombre LIKE '%a';

En el código superior estamos buscando los clientes cuyo nombre tiene como segundo caracter la ‘a’.



SELECT * FROM clientes WHERE nombre LIKE '_______';

En el código superior estamos buscando los clientes cuyo nombre tiene 7 caracteres de longitud.


SELECT * FROM clientes WHERE nombre LIKE '%a%' or nombre LIKE '%r%' ;

En el código superior estamos buscando los clientes cuyo nombre tiene una ‘a’ y una ‘r’.


//EJEMPLO BUSCAR LOS CLIENTES QUE TENGAN RO 
SELECT * FROM clientes AS cli
INNER JOIN curso AS cur on cli.id_cliente=cur.id_clientes 
where cli.nombre LIKE '%ro%'


//todos los clientes que tengan de nombre ro o el curso tenga php_check_syntax 
SELECT * FROM clientes AS cli
INNER JOIN curso AS cur on cli.id_cliente=cur.id_clientes 
where cli.nombre LIKE '%ro%' OR cur.nom_curso like '%php%'