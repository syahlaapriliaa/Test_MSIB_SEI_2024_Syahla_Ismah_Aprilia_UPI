package com.example.demo;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Column;
import java.sql.Timestamp;

@Entity
public class Lokasi {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Integer id;

    @Column(name = "nama_lokasi", nullable = false)
    private String namaLokasi;

    @Column(name = "negara", nullable = false)
    private String negara;

    @Column(name = "provinsi", nullable = false)
    private String provinsi;

    @Column(name = "kota", nullable = false)
    private String kota;

    @Column(name = "created_at", nullable = false, updatable = false)
    private Timestamp createdAt;

    // Default constructor
    public Lokasi() {
        this.createdAt = new Timestamp(System.currentTimeMillis());
    }

    // Constructor dengan parameter
    public Lokasi(String namaLokasi, String negara, String provinsi, String kota) {
        this.namaLokasi = namaLokasi;
        this.negara = negara;
        this.provinsi = provinsi;
        this.kota = kota;
        this.createdAt = new Timestamp(System.currentTimeMillis());
    }

    // Getter dan Setter untuk semua atribut
    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getNamaLokasi() {
        return namaLokasi;
    }

    public void setNamaLokasi(String namaLokasi) {
        this.namaLokasi = namaLokasi;
    }

    public String getNegara() {
        return negara;
    }

    public void setNegara(String negara) {
        this.negara = negara;
    }

    public String getProvinsi() {
        return provinsi;
    }

    public void setProvinsi(String provinsi) {
        this.provinsi = provinsi;
    }

    public String getKota() {
        return kota;
    }

    public void setKota(String kota) {
        this.kota = kota;
    }

    public Timestamp getCreatedAt() {
        return createdAt;
    }

    public void setCreatedAt(Timestamp createdAt) {
        this.createdAt = createdAt;
    }

    // Metode untuk mendapatkan lokasi lengkap
    public String getFullLocation() {
        return this.kota + ", " + this.provinsi + ", " + this.negara;
    }

    @Override
    public String toString() {
        return "Lokasi{" +
                "id=" + id +
                ", namaLokasi='" + namaLokasi + '\'' +
                ", negara='" + negara + '\'' +
                ", provinsi='" + provinsi + '\'' +
                ", kota='" + kota + '\'' +
                ", createdAt=" + createdAt +
                '}';
    }
}
