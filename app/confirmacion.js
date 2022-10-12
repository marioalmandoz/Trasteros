function eliminar(id) {
    if (confirm("¿Está seguro de que desea eliminar este trastero?")){
        window.location.href='procesar_eliminar.php?id=' +id+'';
        return true;
    }
}
/*<script language="javascript">
function eliminar(id) {
    if (confirm("¿Está seguro de que desea eliminar este trastero?")){
        window.location.href='procesar_eliminar.php?id=' +id+'';
        return true;
    }
}
</script>
*/