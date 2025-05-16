package microservice.apirest.dao;

import microservice.apirest.entity.*;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface SocioDao extends JpaRepository <Socio, Long>{

}
