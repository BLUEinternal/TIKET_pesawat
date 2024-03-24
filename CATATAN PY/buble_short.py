def urutasc(mylist):
    for i in range(len(mylist)-1, 0, -1):
        for j in range(i):
            if mylist[j] > mylist[j+1]:
                simpan = mylist[j]
                mylist[j] = mylist[j+1]
                mylist[j+1] = simpan
    print(mylist)
    

def urutdsc(mylist):
    for i in range(len(mylist)-1, 0, -1):
        for j in range(i):
            if mylist[j] < mylist[j+1]:
                simpan = mylist[j]
                mylist[j] = mylist[j+1]
                mylist[j+1] = simpan
    print(mylist)
    


print("Program Mengurutkan Data Dengan Metode Bubble Sort")

angka1 = int(input('Masukan Bilangan ke 1 : '))
angka2 = int(input('Masukan Bilangan ke 2 : '))
angka3 = int(input('Masukan Bilangan ke 3 : '))
angka4 = int(input('Masukan Bilangan ke 4 : '))
angka5 = int(input('Masukan Bilangan ke 5 : '))
angka6 = int(input('Masukan Bilangan ke 6 : '))
angka7 = int(input('Masukan Bilangan ke 7 : '))
angka8 = int(input('Masukan Bilangan ke 8 : '))
angka9 = int(input('Masukan Bilangan ke 9 : '))
angka10 = int(input('Masukan Bilangan ke 10 : '))


angka = [angka1,angka2,angka3,angka4,angka5,angka6,angka7,angka8,angka9,angka10]

print('==============================================')
print('Pilih metode pengurutan :')
print('1.sorting ascending \n2.sorting descending')
Pilih = input('metode yg di pilih : ')

print('==============================================')
print('Data sebelum di urutkan :')
print(angka)
print('Data setelah diuruskan : ')


if Pilih == ('1'):
    urutasc(angka)
elif Pilih == ('2'):
    urutdsc(angka)
else:
    print("angka yg di tulis salah")

home = input('kembali ke menu utama(Y/N)?')
text = print('Program mengurutkan data dengan metode bubble short ')
back = print('')
garis = input('=============================')
if home == ('Y'):
    garis
    text
    angka1 = int(input('Masukan Bilangan ke 1 : '))
    angka2 = int(input('Masukan Bilangan ke 2 : '))
    angka3 = int(input('Masukan Bilangan ke 3 : '))
    angka4 = int(input('Masukan Bilangan ke 4 : '))
    angka5 = int(input('Masukan Bilangan ke 5 : '))
    angka6 = int(input('Masukan Bilangan ke 6 : '))
    angka7 = int(input('Masukan Bilangan ke 7 : '))
    angka8 = int(input('Masukan Bilangan ke 8 : '))
    angka9 = int(input('Masukan Bilangan ke 9 : '))
    angka10 = int(input('Masukan Bilangan ke 10 : '))
    garis
    print("==================================")
    print("pilih metode pengaturan")
    print("1. sorting Ascending")
    print("2. sorting Descending")
    Pilih = input("Metode yg dipilih :")
    print("==================================")
    print("Data sebelum diurutkan : ")
    print(angka)
    print("data setelah diurutkan :")
    if Pilih == ('1'):
        urutasc(angka)
    else:
        urutdsc(angka)
        home = input("kembali ke menu utama (Y/N)")
else:
    back


