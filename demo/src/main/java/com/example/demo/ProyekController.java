package com.example.demo;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;
import java.util.Optional;

@RestController
@RequestMapping("/proyek")
public class ProyekController {

    @Autowired
    private ProyekService proyekService;

    @PostMapping
    public ResponseEntity<Proyek> createProyek(@RequestBody Proyek proyek) {
        try {
            Proyek savedProyek = proyekService.save(proyek);
            return new ResponseEntity<>(savedProyek, HttpStatus.CREATED);
        } catch (Exception e) {
            return new ResponseEntity<>(null, HttpStatus.INTERNAL_SERVER_ERROR);
        }
    }

    @GetMapping
    public List<Proyek> getAllProyek() {
        return proyekService.findAll();
    }

    @PutMapping("/{id}")
    public ResponseEntity<Proyek> updateProyek(@PathVariable Integer id, @RequestBody Proyek proyek) {
        Optional<Proyek> existingProyek = proyekService.findById(id);
        if (existingProyek.isPresent()) {
            Proyek updatedProyek = proyekService.update(existingProyek.get(), proyek);
            return new ResponseEntity<>(updatedProyek, HttpStatus.OK);
        } else {
            return new ResponseEntity<>(HttpStatus.NOT_FOUND);
        }
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<HttpStatus> deleteProyek(@PathVariable Integer id) {
        try {
            proyekService.deleteById(id);
            return new ResponseEntity<>(HttpStatus.NO_CONTENT);
        } catch (Exception e) {
            return new ResponseEntity<>(HttpStatus.INTERNAL_SERVER_ERROR);
        }
    }
}
