package com.example.demo;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/lokasi")
public class LokasiController {

    @Autowired
    private LokasiService lokasiService;

    @PostMapping
    public ResponseEntity<Lokasi> createLokasi(@RequestBody Lokasi lokasi) {
        Lokasi newLokasi = lokasiService.saveLokasi(lokasi);
        return ResponseEntity.ok(newLokasi);
    }

    @GetMapping
    public ResponseEntity<List<Lokasi>> getAllLokasi() {
        List<Lokasi> lokasiList = lokasiService.getAllLokasi();
        return ResponseEntity.ok(lokasiList);
    }

    @PutMapping("/{id}")
    public ResponseEntity<Lokasi> updateLokasi(@PathVariable Integer id, @RequestBody Lokasi lokasiDetails) {
        Lokasi updatedLokasi = lokasiService.updateLokasi(id, lokasiDetails);
        return ResponseEntity.ok(updatedLokasi);
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteLokasi(@PathVariable Integer id) {
        lokasiService.deleteLokasi(id);
        return ResponseEntity.noContent().build();
    }
}
