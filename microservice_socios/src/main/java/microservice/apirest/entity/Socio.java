package microservice.apirest.entity;


import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;
import jakarta.persistence.Column;

@Entity
@Table(name = "socio")
public class Socio {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id_socio")
    private Long idSocio;

    @Column(name = "nombre_socio", nullable = false, length = 100)
    private String nombreSocio;

    @Column(name = "apellidos_socio", nullable = false, length = 50)
    private String apellidosSocio;

    @Column(name = "num_contacto", nullable = false)
    private Integer numContacto;

    // Getters y Setters
    public Long getIdSocio() {
        return idSocio;
    }

    public void setIdSocio(Long idSocio) {
        this.idSocio = idSocio;
    }

    public String getNombreSocio() {
        return nombreSocio;
    }

    public void setNombreSocio(String nombreSocio) {
        this.nombreSocio = nombreSocio;
    }

    public String getApellidosSocio() {
        return apellidosSocio;
    }

    public void setApellidosSocio(String apellidosSocio) {
        this.apellidosSocio = apellidosSocio;
    }

    public Integer getNumContacto() {
        return numContacto;
    }

    public void setNumContacto(Integer numContacto) {
        this.numContacto = numContacto;
    }
}