<?php
include('vista/superior.php');

?>
<link rel="stylesheet" href="css/style.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body id="body">
    <main>
        <h1 class="title"> Facturación </h1>
        <form>
        
            <section class="cuadrado">
                <div class="field">
                    <label>Fecha</label>
                    <input type="date"  name="Fecha" id="fecha" placeholder="" readonly> 
                    <script>
                        // Obtener la fecha actual en formato YYYY-MM-DD
                        var fechaActual = new Date().toISOString().slice(0, 10);
                        // Establece la fecha actual como valor predeterminado del campo de entrada
                        document.getElementById("fecha").value = fechaActual;
                    </script>
                </div>
                
                <div class="field">
                    <label>Ruc</label>
                    <input type="number"  name="Ruc" id="ruc" placeholder="Numero de 11 Digitos" required>
                </div>
                
                <div class="field">
                    <label>Cliente</label>
                    <input type="text"  name="cliente" id="cliente" readonly>
                </div>
                
                <div class="field">
                    <label>N° Comprobante</label>
                    <input type="text"  name="Ruc" id="ruc" placeholder="se hara de forma automatica" readonly>
                </div>
                
                <div class="field">
                    <label >Metodo de Pago</label>
                    <div class="radio-option">
                        <input type="radio" name="metodoPago" value="soles" id="radio_soles">
                        <label for="radio_soles">Soles</label>
                        <input type="radio" name="metodoPago" value="dolares" id="radio_dolares">
                        <label for="radio_dolares">Dólares</label>
                    </div>
                    
                </div>
                
                <div class="field">
                    <label>Usuario</label>
                    <input type="text"  name="user" id="user" value="<?php echo htmlspecialchars($usuario_obtener); ?>"  readonly>
                </div>
                
                <div class="field">
                    <label>Total de Cuenta</label>
                    <input type="number"  name="total_factura" id="total_factura" placeholder="" required>
                </div>
                
                <button> Emitir Factura </button>
            </section>
        </form>
        
        
    </main>
</body>
    <?php
include('vista/inferior.php');
?>