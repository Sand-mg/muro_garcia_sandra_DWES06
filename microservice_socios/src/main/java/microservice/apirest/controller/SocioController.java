package microservice.apirest.controller;

import microservice.apirest.entity.*;
import microservice.apirest.service.*;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/api/v1/socios")
public class SocioController {

    @Autowired
    private SocioService socioService;

    @GetMapping
    public List<Socio> getAllSocios() {
        return socioService.getAllSocios();
    }
}
