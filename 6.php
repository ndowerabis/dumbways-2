
	SELECT 
	biodata_id, biodata_nama_lengkap nama, city_id, biodata_tempat_lahir kota_lahir, biodata_tgl_lahir tgl_lahir, biodata_no_hp no_hp, biodata_alamat alamat, biodata_pendidikan pendidikan, biodata_agama agama, biodata_hobi hobi
	FROM wm_biodata , wm_city where city_id=biodata_tempat_lahir