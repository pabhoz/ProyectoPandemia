# Taller: Patrones de diseño

En el siguiente taller expondremos problemas que deberás abordar proponiendo soluciones que tengan en cuenta tu conocimiento en patrones de diseño.

##¡Pandemia!

Estamos en emergencia de nivel púrpura, se requiere que los mejores ingenieros del mundo trabajen en conjunto y a contra reloj para detenerla (claro está junto con un conjunto de profesionales de distintas áreas), puntualmente los ingenieros deben hacer el sistema de información que permitá  automatizar la solicitud de los servicios de cada centro de atención, lo que hasta ahora han manifestado los organismos de salud es que:

1. Existen multiples **centros de atención** para la cuarentena (de **nivel I, II y III**), todos pueden prestar los mismos servicios de base, pero algunos prestan servicios especiales y cada uno de los servicios podría ser solicitado a través de la plataforma para ganar tiempo, dichos servicios son:
   1. **Solicitar cuarto**: con esto el sistema debe verificar la disponibilidad de un cuarto, los cuartos varían dependiendo del nivel de afectación de los pacientes, los **niveles de afectación** son **I, II y III**. Si el cuarto se encuentra disponible debe crearse la reserva, en el caso en que la reserva no pueda llevarse a cabo el sistema debería emitir una alerta a otros centros de atención del mismo nivel para verificar si alguno tiene disponibilidad.
   2. **Anunciar Liberación de cupo**: En el caso en que un paciente sea dado de alta o muera, el cupo del cuarto debería poder ser liberado y con esto se debería emitir un mensaje a la plataforma para que  esta sepa que existe un cuarto disponible, esto debido a que si todos los centros del mismo tipo no tenían cuartos disponibles durante una solicitud de cuarto, los pacientes entran a una lista de espera.
2. Los centros de atención de nivel II y III pueden:
   1. **Solicitar ventilador**: que básicamente sigue las mismas lógicas de solicitar un cuarto con la diferencia en que los ventiladores tienen prioridad para centros de nivel III, si no hay centros de nivel III esperando un ventilador en la cola, se le puede asignar a un centro de niel II.
   2. **Anunciar Liberación de ventilador**: que básicamente sigue las mismas lógicas de anunciar la liberación de un cupo.
3. Los centros de atención cuentan con la siguente información:
   1. Nombre
   2. Nivel
   3. Capacidad: entre 500 y 1000 personas para el **nivel I**, entre 200 y 499 para el **nivel II** y los centros de nivel III tienen capacidad para 100 personas. Se entenderá que la capacidad es así mismo la cantidad de cuartos para las personas.
   4. Cantidad de cuartos disponibles
   5. lista de pacientes: los pacientes de la lista tienen un estado que define si están enfermos, recuperados o muertos.
4. Dentro del sistema se pueden gestionar también a los **pacientes**, cada paciente que entra en un centro de cuarentena debe ser creado en el sistema previo a la **solicitud de cuarto** para la asignación del mismo según su **nivel de afectación**.
5. Cada **paciente** tiene una ficha que cuenta con su **información**: nombre, tipo de documento, número de documento, nacionalidad, estado, nivel de afectación, fecha de ingreso, fecha de actualización, comentarios del médico.
6. Cada **paciente** puede ser atendido por distintos **médicos** y por esto las notas en la ficha de los pacientes pueden ser de múltiples **médicos** y las **actualizaciones** deben registrar el médico que las efectua.
7. Si la **ficha de un paciente** es actualizada en el **nivel de afectación** a un nivel superior o inferior al del centro en el que se encuentra, el médico podrá solicitar un **traslado** a un centro con el nivel adecuado, y los traslados siempre estáran en la **cola** antes de las solicitudes a nuevos pacientes.
8. Los **médicos** de los **centros** pueden tener **permisos** en el sistema de la siguiente manera: 
   1. **Nivel de acceso I**: los médicos con nivel de acceso I pueden crear nuevos pacientes en el sistema y actualizar sus fichas.
   2. **Nivel de acceso II**: los médicos con nivel de acceso II pueden hacer lo mismo que el nivel anterior, pero además pueden solicitar ventiladores para sus centros.
   3. **Nivel de acceso III**: los médicos con nivel de acceso III pueden hacer lo mismo que el nivel I y II, pero además son los que aprueban las solicitudes de traslado de pacientes, pues deben evaluar la relevancia de la misma.
9. Todos los médicos tienen la siguiente información: nombre, tipo de documento, número de documento, nacionalidad, nivel de acceso, centro al que está asignado.
10. Todos los datos del sistema deberán persisitir en una base de datos.

**Pistas:** Comienza por identificar las entidades del sistema y los problemas que el mismo presenta que puedan ser solucionados con patrónes de diseño.