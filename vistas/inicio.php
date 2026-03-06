<?php
    $controlador = new Controlador();
    $resultado = $controlador->index();
?>



<table border="1">
    <thead>
        <tr>
            <th>idUsuario</th>
            <th>nombres</th>
            <th>apellidos</th>
            <th>cedula</th>
            <th>usuario</th>
            <th>password</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Carlos</td>
            <td>Ramirez</td>
            <td>100000001</td>
            <td>cramirez</td>
            <td>123456</td>
            <td>
                <a href="?cargar=consultar">Consultar</a> |
                <a href="?cargar=editar">Editar</a> |
                <a href="?cargar=eliminar">Eliminar</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Ana</td>
            <td>Gomez</td>
            <td>100000002</td>
            <td>agomez</td>
            <td>123456</td>
            <td>
                <a href="?cargar=consultar">Consultar</a> |
                <a href="?cargar=editar">Editar</a> |
                <a href="?cargar=eliminar">Eliminar</a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Luis</td>
            <td>Martinez</td>
            <td>100000003</td>
            <td>lmartinez</td>
            <td>123456</td>
            
             <td>
                <a href="?cargar=consultar">Consultar</a> 
                <a href="?cargar=editar">Editar</a> 
                <a href="?cargar=eliminar">Eliminar</a>
            </td>
            
        </tr>
        <tr>
            <td>4</td>A
            <td>Laura</td>
            <td>Fernandez</td>
            <td>100000004</td>
            <td>lfernandez</td>
            <td>123456</td>
            
             <td>
                <a href="?cargar=consultar">Consultar</a> |
                <a href="?cargar=editar">Editar</a> |
                <a href="?cargar=eliminar">Eliminar</a>
            
            </td>
        </tr>
        <tr>
            <td>5</td>
            <td>Jorge</td>
            <td>Castro</td>
            <td>100000005</td>
            <td>jcastro</td>
            <td>123456</td>
            
             <td>
                <a href="?cargar=consultar">Consultar</a> |
                <a href="?cargar=editar">Editar</a> |
                <a href="?cargar=eliminar">Eliminar</a>
            
            </td>
        </tr>
    </tbody>
</table>