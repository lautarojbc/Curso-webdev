SELECT nombre as 'Nombre' FROM telefonia.usuario;
/*  Ejercicio 2*/
SELECT MAX(saldo) FROM telefonia.usuario WHERE 30;
/*Ejercicio 3 */
SELECT nombre as 'Nombre', telefono as 'Telefono' from telefonia.usuario WHERE marca IN ('NOKIA',' BLACKBERRY','SONY');
/*Ejercicio 4 */
SELECT COUNT(usuario) as 'Usuarios inactivos o sin saldo' FROM telefonia.usuario WHERE saldo = 0 OR activo = 0;
/*Ejercicio 5*/
SELECT telefono as 'Telefono' FROM telefonia.usuario WHERE saldo <= 300;
/*Ejercico 6 INC*/
SELECT SUM(saldo) as 'Saldo total de NEXTEL' FROM telefonia.usuario WHERE marca='NEXTEL';
/*Ejercico 7*/
SELECT COUNT(id), compa�ia FROM telefonia.usuario GROUP BY(compa�ia);
/*Ejercico 8*/
SELECT COUNT(usuario) as 'Numero de personas', nivel as 'Nivel' FROM telefonia.usuario GROUP BY(nivel);
/*Ejercico 9*/
SELECT COUNT(nivel) as "Usuarios de nivel 2" FROM telefonia.usuario WHERE nivel = 2;
/*Ejercico 10*/
SELECT email as "Usuarios de gmail" FROM telefonia.usuario WHERE email LIKE '%@gmail.com';
/*Ejercico 11*/
SELECT nombre as 'Nombre', telefono as 'Telefono' from telefonia.usuario WHERE marca IN ('LG','SAMSUNG','MOTOROLA');