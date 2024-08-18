package com.example.demo;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;
import java.util.Optional;

@Service
public class ProyekService {

    @Autowired
    private ProyekRepository proyekRepository;

    public List<Proyek> findAll() {
        return proyekRepository.findAll();
    }

    public Optional<Proyek> findById(Integer id) {
        return proyekRepository.findById(id);
    }

    @Transactional
    public Proyek save(Proyek proyek) {
        return proyekRepository.save(proyek);
    }

    @Transactional
    public Proyek update(Proyek existingProyek, Proyek newProyek) {
        existingProyek.setNamaProyek(newProyek.getNamaProyek());
        existingProyek.setCustomer(newProyek.getCustomer());
        existingProyek.setTglMulai(newProyek.getTglMulai());
        existingProyek.setTglSelesai(newProyek.getTglSelesai());
        existingProyek.setPimpinanProyek(newProyek.getPimpinanProyek());
        existingProyek.setLokasi(newProyek.getLokasi());
        return proyekRepository.save(existingProyek);
    }

    @Transactional
    public void deleteById(Integer id) {
        proyekRepository.deleteById(id);
    }
}
