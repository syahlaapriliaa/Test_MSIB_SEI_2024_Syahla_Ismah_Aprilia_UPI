package com.example.demo;

import jakarta.persistence.*;
import java.sql.Timestamp;
import java.time.LocalDate;

@Entity
public class Proyek {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Integer id;

    @Column(name = "nama_proyek", nullable = false)
    private String namaProyek;

    @Column(name = "customer", nullable = false)
    private String customer;

    @Column(name = "tgl_mulai", nullable = false)
    private LocalDate tglMulai;

    @Column(name = "tgl_selesai", nullable = false)
    private LocalDate tglSelesai;

    @Column(name = "pimpinan_proyek", nullable = false)
    private String pimpinanProyek;

    @Column(name = "created_at", nullable = false, updatable = false)
    private Timestamp createdAt;

    @ManyToOne
    @JoinColumn(name = "lokasi_id", nullable = false)
    private Lokasi lokasi;

    public Proyek() {
        this.createdAt = new Timestamp(System.currentTimeMillis());
    }

    public Proyek(String namaProyek, String customer, LocalDate tglMulai, LocalDate tglSelesai, String pimpinanProyek, Lokasi lokasi) {
        this.namaProyek = namaProyek;
        this.customer = customer;
        this.tglMulai = tglMulai;
        this.tglSelesai = tglSelesai;
        this.pimpinanProyek = pimpinanProyek;
        this.createdAt = new Timestamp(System.currentTimeMillis());
        this.lokasi = lokasi;
    }

    // Getters and Setters
    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getNamaProyek() {
        return namaProyek;
    }

    public void setNamaProyek(String namaProyek) {
        this.namaProyek = namaProyek;
    }

    public String getCustomer() {
        return customer;
    }

    public void setCustomer(String customer) {
        this.customer = customer;
    }

    public LocalDate getTglMulai() {
        return tglMulai;
    }

    public void setTglMulai(LocalDate tglMulai) {
        this.tglMulai = tglMulai;
    }

    public LocalDate getTglSelesai() {
        return tglSelesai;
    }

    public void setTglSelesai(LocalDate tglSelesai) {
        this.tglSelesai = tglSelesai;
    }

    public String getPimpinanProyek() {
        return pimpinanProyek;
    }

    public void setPimpinanProyek(String pimpinanProyek) {
        this.pimpinanProyek = pimpinanProyek;
    }

    public Timestamp getCreatedAt() {
        return createdAt;
    }

    public Lokasi getLokasi() {
        return lokasi;
    }

    public void setLokasi(Lokasi lokasi) {
        this.lokasi = lokasi;
    }

    @Override
    public String toString() {
        return "Proyek{" +
                "id=" + id +
                ", namaProyek='" + namaProyek + '\'' +
                ", customer='" + customer + '\'' +
                ", tglMulai=" + tglMulai +
                ", tglSelesai=" + tglSelesai +
                ", pimpinanProyek='" + pimpinanProyek + '\'' +
                ", createdAt=" + createdAt +
                ", lokasi=" + lokasi.getNamaLokasi() +
                '}';
    }
}
