package com.example.demo;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

@Service
public class LokasiService {

    @Autowired
    private LokasiRepository lokasiRepository;

    public List<Lokasi> getAllLokasi() {
        return lokasiRepository.findAll();
    }

    public Lokasi saveLokasi(Lokasi lokasi) {
        return lokasiRepository.save(lokasi);
    }

    public Lokasi updateLokasi(Integer id, Lokasi lokasiDetails) {
        Optional<Lokasi> lokasiOptional = lokasiRepository.findById(id);
        if (lokasiOptional.isPresent()) {
            Lokasi lokasi = lokasiOptional.get();
            lokasi.setNamaLokasi(lokasiDetails.getNamaLokasi());
            lokasi.setNegara(lokasiDetails.getNegara());
            lokasi.setProvinsi(lokasiDetails.getProvinsi());
            lokasi.setKota(lokasiDetails.getKota());
            lokasi.setCreatedAt(lokasiDetails.getCreatedAt());
            return lokasiRepository.save(lokasi);
        } else {
            throw new RuntimeException("Lokasi not found with id " + id);
        }
    }

    public void deleteLokasi(Integer id) {
        lokasiRepository.deleteById(id);
    }
}
