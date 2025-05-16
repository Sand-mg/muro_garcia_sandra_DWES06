package microservice.apirest.service;

import microservice.apirest.entity.*;
import microservice.apirest.dao.*;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class SocioService {
    @Autowired
    private SocioDao socioDao;

    public List<Socio> getAllSocios() {
        return socioDao.findAll();
    }
}
