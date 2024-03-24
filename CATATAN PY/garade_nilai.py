while True:
    name_siswa = input("masukan nama anda: ")
    nilai_harian = int(input("masukan nilai harian : "))
    nilai_uts = int(input("masukan nilai uts : "))
    nilai_uas = int(input("masukan nilai uas : "))
    nilai_akhir = int(nilai_harian*40/100)+(nilai_uts*30/100)+(nilai_uas*30/100)

    if nilai_akhir >= 85:
        predikat_nilai = 'amat baik'
        print("Nama lengkap anda = ", name_siswa )
        print("nilai akhir lengkap anda = ", nilai_akhir )
        print("predikat lengkap anda = ", predikat_nilai )
    elif nilai_akhir >= 75:
        predikat_nilai = 'baik'  
        print("Nama lengkap anda = ", name_siswa )
        print("nilai akhir lengkap anda = ", nilai_akhir )
        print("predikat lengkap anda = ", predikat_nilai ) 
    elif nilai_akhir >= 65:
        predikat_nilai = 'cukup'  
        print("Nama lengkap anda = ", name_siswa )
        print("nilai akhir lengkap anda = ", nilai_akhir )
        print("predikat lengkap anda = ", predikat_nilai ) 
    elif nilai_akhir >= 55:
        predikat_nilai = 'kurang'  
        print("Nama lengkap anda = ", name_siswa )
        print("nilai akhir lengkap anda = ", nilai_akhir )
        print("predikat lengkap anda = ", predikat_nilai ) 
    else:
        predikat_nilai = 'kurang sekali'  
        print("Nama lengkap anda = ", name_siswa )
        print("nilai akhir lengkap anda = ", nilai_akhir )
        print("predikat lengkap anda = ", predikat_nilai ) 
