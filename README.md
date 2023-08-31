# biblioteca
Sistema de Gestion de Biblioteca es un sistema desarrollado en PHP con conexion a base de datos Mysql
y sevidor Apache con Xampp.
Se adjunta la base de datos y por aqui los trigger y procedimientos implementados.


Implementación de Triggers 


delimiter $$

create trigger actualizarEstadoLibros after insert on retira

for each row

begin

call actualizar(new.id_libro);

end $$



delimiter $$

create procedure actualizar (in a int)

begin

update libro  set estado = 'no disponible'

where id_libro = a;

end $$

///////////////////////////////////////////////////////////////////////////////////////////////////


delimiter $$

create procedure sumarenovacion8 (in a char(8), b int )

begin

update retira set  veces_renovado=veces_renovado+1 where ci=a and retira.pres_dev =1 and id_libro=b;

end $$

