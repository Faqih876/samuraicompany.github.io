-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Okt 2021 pada 07.50
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wmsapp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `delivery_order`
--

CREATE TABLE `delivery_order` (
  `po_id` int(10) NOT NULL,
  `po_no` varchar(20) DEFAULT NULL,
  `fleet_type` varchar(15) DEFAULT NULL,
  `tenant` varchar(50) DEFAULT NULL,
  `loading_address` varchar(100) DEFAULT NULL,
  `tenant_phone` int(15) DEFAULT NULL,
  `pickup_date` date DEFAULT NULL,
  `destination_address` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `delivery_order`
--

INSERT INTO `delivery_order` (`po_id`, `po_no`, `fleet_type`, `tenant`, `loading_address`, `tenant_phone`, `pickup_date`, `destination_address`, `status`) VALUES
(1, 'PO-0026999', 'Truck Z21', 'Buah Batu Store', 'jl. Telekomunikasi No.10', 2147483647, '2021-10-14', 'Jl. Dipaitukur', 'In Delivery'),
(2, 'PO-0026', 'Truck Z21', 'Griya Yoyga', 'Jl. Baleendah Gudang 2', 2147483647, '2021-10-06', 'Jl. Bojongsoang no. 25 Rt.3', 'In Process'),
(3, 'PO-0026', 'Truck Box', 'Buah Batu Store', 'jl. Telekomunikasi No.10', 2147483647, '2021-10-08', 'Jl. Bojongsoang no. 25 Rt.3', 'In Delivery'),
(4, 'PO-0027', 'Colt Double Die', 'Borma Bojongsoang', 'Jl. Baleendah Gudang 2', 2147483647, '2021-10-12', 'jl. Telekomunikasi No.10', 'In Delivery');

-- --------------------------------------------------------

--
-- Struktur dari tabel `division`
--

CREATE TABLE `division` (
  `division_id` int(11) NOT NULL,
  `division_name` varchar(20) DEFAULT NULL,
  `division_description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `division`
--

INSERT INTO `division` (`division_id`, `division_name`, `division_description`) VALUES
(1, 'Client', 'Managing Tenant Order '),
(2, 'Warehouse', 'Managing warehouse activities'),
(3, 'Transporter', 'Managing transportation activities');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fleet_status`
--

CREATE TABLE `fleet_status` (
  `plate_id` int(20) NOT NULL,
  `no_plate` varchar(20) DEFAULT NULL,
  `fleet_type` varchar(25) DEFAULT NULL,
  `driver_name` varchar(30) DEFAULT NULL,
  `driver_phone` varchar(20) DEFAULT NULL,
  `fleet_location` varchar(30) DEFAULT NULL,
  `surat_jalan` varchar(20) DEFAULT NULL,
  `flt_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fleet_status`
--

INSERT INTO `fleet_status` (`plate_id`, `no_plate`, `fleet_type`, `driver_name`, `driver_phone`, `fleet_location`, `surat_jalan`, `flt_status`) VALUES
(1, 'B 1234 OKE', 'Truck Z21', 'Mr. Adtif', '085211732810', 'Jl. Telekomunikasi no.3', 'Available', 'In Delivery'),
(2, 'G 4NTENG', 'Truck Box', 'Mr. Santoso', '086239101192', 'Jl. Batunuggal no.50', 'Available', 'Shipped'),
(3, 'B 1235 OKE', 'Truck Box', 'Mr. Abdul', '086239101455', 'Jl. Telekomunikasi no.10', 'Available', 'Shipped');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inbound_mng`
--

CREATE TABLE `inbound_mng` (
  `smu_id` int(10) NOT NULL,
  `smu_no` varchar(20) DEFAULT NULL,
  `shipment_date` date DEFAULT NULL,
  `tenant` varchar(30) DEFAULT NULL,
  `sku_no` varchar(20) DEFAULT NULL,
  `quantity` int(15) DEFAULT NULL,
  `expired_date` date DEFAULT NULL,
  `manufacturing_date` date DEFAULT NULL,
  `order_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inbound_mng`
--

INSERT INTO `inbound_mng` (`smu_id`, `smu_no`, `shipment_date`, `tenant`, `sku_no`, `quantity`, `expired_date`, `manufacturing_date`, `order_status`) VALUES
(2, 'SMU-000256', '2021-10-01', 'Buah Batu Store', 'A21', 8000, '2021-10-13', '2021-10-22', 'Stored'),
(3, 'SMU-000312', '2021-10-11', 'Griya Yoyga', 'A555', 1500, '2023-10-10', '2021-10-05', 'Stored'),
(4, 'SMU-000312', '2021-10-11', 'Buah Batu Store', 'A21', 1500, '2022-06-15', '2021-10-07', 'Stored'),
(5, 'SMU-0058', '2021-10-12', 'Borma Bojongsoang', 'A21', 1500, '2022-06-02', '2021-10-08', 'Stored');

-- --------------------------------------------------------

--
-- Struktur dari tabel `outbound_mng`
--

CREATE TABLE `outbound_mng` (
  `so_id` int(10) NOT NULL,
  `so_no` varchar(20) DEFAULT NULL,
  `tenant` varchar(50) DEFAULT NULL,
  `sku_no` varchar(15) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `quantity` int(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `so_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `outbound_mng`
--

INSERT INTO `outbound_mng` (`so_id`, `so_no`, `tenant`, `sku_no`, `category`, `quantity`, `address`, `so_status`) VALUES
(2, 'S0-0035', 'Deltamart', 'A21', 'Food', 1000, 'Jln. Rumah Teman saya no.2 Rt 10 ', 'Open Sales Order'),
(3, 'S0-00315', 'Griya Yoyga', 'A555', 'Food', 1500, 'Jl. Bojongsoang No.25 Rt 3', 'Checking'),
(4, 'S0-0075', 'Buah Batu Store', 'A21', 'Food', 1500, 'Jl. Bojongsoang No.25 Rt 3', 'Checking'),
(5, 'S0-0045', 'Borma Bojongsoang', 'A21', 'Food', 1500, 'jl. Telekomunikasi No.10', 'Checking');

-- --------------------------------------------------------

--
-- Struktur dari tabel `picking_list`
--

CREATE TABLE `picking_list` (
  `so_id` int(10) NOT NULL,
  `so_no` varchar(20) DEFAULT NULL,
  `tenant` varchar(50) DEFAULT NULL,
  `sku_no` varchar(15) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `quantity` int(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `shipment_status`
--

CREATE TABLE `shipment_status` (
  `shipment_id` int(20) NOT NULL,
  `no_plate` varchar(20) DEFAULT NULL,
  `fleet_type` varchar(25) DEFAULT NULL,
  `no_surat` varchar(20) DEFAULT NULL,
  `po_no` varchar(20) DEFAULT NULL,
  `fleet_location` varchar(30) DEFAULT NULL,
  `surat_jalan` varchar(20) DEFAULT NULL,
  `shp_status` varchar(20) DEFAULT NULL,
  `plate_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `shipment_status`
--

INSERT INTO `shipment_status` (`shipment_id`, `no_plate`, `fleet_type`, `no_surat`, `po_no`, `fleet_location`, `surat_jalan`, `shp_status`, `plate_id`) VALUES
(5, 'B 1234 OKE', 'Truck Z2A', 'SJ-0061000920001', 'PO-0026', 'Jl. Telekomunikasi no.3', 'Available', 'In Delivery', 1),
(6, 'B 1235 OKE', 'Truck Box', 'SJ-0061000922222', 'PO-0026', 'Jl. Telekomunikasi no.10', 'Available', 'Shipped', 3),
(7, 'B 1234 OKE', 'Colt Double Diesel', 'SJ-0061000920002', 'PO-0026', 'Jl. Telekomunikasi no.10', 'Available', 'Shipped', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `account_number` int(16) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `user_bank` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--



--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `delivery_order`
--
ALTER TABLE `delivery_order`
  ADD PRIMARY KEY (`po_id`);

--
-- Indeks untuk tabel `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`division_id`);

--
-- Indeks untuk tabel `fleet_status`
--
ALTER TABLE `fleet_status`
  ADD PRIMARY KEY (`plate_id`);

--
-- Indeks untuk tabel `inbound_mng`
--
ALTER TABLE `inbound_mng`
  ADD PRIMARY KEY (`smu_id`);

--
-- Indeks untuk tabel `outbound_mng`
--
ALTER TABLE `outbound_mng`
  ADD PRIMARY KEY (`so_id`);

--
-- Indeks untuk tabel `picking_list`
--
ALTER TABLE `picking_list`
  ADD PRIMARY KEY (`so_id`);

--
-- Indeks untuk tabel `shipment_status`
--
ALTER TABLE `shipment_status`
  ADD PRIMARY KEY (`shipment_id`),
  ADD KEY `plate_id` (`plate_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `division_id` (`division_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `delivery_order`
--
ALTER TABLE `delivery_order`
  MODIFY `po_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `fleet_status`
--
ALTER TABLE `fleet_status`
  MODIFY `plate_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `inbound_mng`
--
ALTER TABLE `inbound_mng`
  MODIFY `smu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `outbound_mng`
--
ALTER TABLE `outbound_mng`
  MODIFY `so_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `picking_list`
--
ALTER TABLE `picking_list`
  MODIFY `so_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `shipment_status`
--
ALTER TABLE `shipment_status`
  MODIFY `shipment_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `shipment_status`
--
ALTER TABLE `shipment_status`
  ADD CONSTRAINT `shipment_status_ibfk_1` FOREIGN KEY (`plate_id`) REFERENCES `fleet_status` (`plate_id`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`division_id`) REFERENCES `division` (`division_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
