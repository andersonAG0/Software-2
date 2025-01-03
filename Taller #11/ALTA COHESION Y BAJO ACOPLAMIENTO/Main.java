import java.util.Date;
import java.util.List;

// Clase Main
public class Main {
    public static void main(String[] args) {
        Cliente cliente = new Cliente(1, "Juan", "Cr 25");
        Producto producto1 = new Producto(1, "Laptop", 1200.00);
        Producto producto2 = new Producto(2, "Mouse", 25.00);
        List<Producto> productos = List.of(producto1, producto2);

        Factura factura = new Factura(cliente, productos, 0.10, new Date());
        FacturaService facturaService = new FacturaService();
        facturaService.procesarFactura(factura, cliente, productos);

        System.out.println("Factura procesada con éxito. Número de factura: " + facturaService.generarNumeroFactura());
    }
}
