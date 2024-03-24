ulang = 'Y'
while ulang =='Y':
    print('program penginapan di hotel')
    print('|   hari    |','| Superior      |','|   Delux     |','|   Premium   |')
    print('|___________|','|_______________|','|_____________|','|_____________|')
    print('|  1-2hari  |','| 110.000/night |','|160.000/night|','|201.000/night|')
    print('|  3-4hari  |','| 110.000/night |','|145.000/night|','|190.000/night|')
    print('|  >5 hari  |','| 110.000/night |','|130.000/night|','|170.000/night|')
    print('|___________|','|_______________|','|_____________|','|_____________|')

    nama = input('masukan nama: ')
    print('Tipe kamar ')
    print('1.Superiror')
    print('2.Deluxe')
    print('3.premium')
    tipe_kamar = int(input('pilih tipe kamar: '))
    Lama_menginap = int(input('Lama menginap: '))
    # harga per malam



    print('=====Pembayaran=====')
    print('nama: '+nama)
    if tipe_kamar == 1 :
        print('Tipe kamar : superior')
    elif tipe_kamar == 2 :
        print('Tipe kamar : delux')
    elif tipe_kamar == 3 :
        print('Tipe kamar : premium')

    print(f"lama menginap: {Lama_menginap}")

    if Lama_menginap == 1 or Lama_menginap == 2:
        if tipe_kamar == 1 :
            total = 110000 * Lama_menginap
            print(f'Total pembayaran{total}')
        elif tipe_kamar == 2 :
            total = 160000 * Lama_menginap
            print(f'Total pembayaran{total}')
        if tipe_kamar == 3 :
            total = 210000 * Lama_menginap
            print(f'Total pembayaran{total}')

    elif Lama_menginap == 3 or Lama_menginap == 4 :
        if tipe_kamar == 1 :
            total = 95000 * Lama_menginap
            print(f'Total pembayaran{total}')
        elif tipe_kamar == 2 :
            total = 145000 * Lama_menginap
            print(f'Total pembayaran{total}')
        if tipe_kamar == 3 :
            total = 190000 * Lama_menginap
            print(f'Total pembayaran{total}')

    elif Lama_menginap >= 5 :
        if tipe_kamar == 1 :
            total = 85000 * Lama_menginap
            print(f'Total pembayaran{total}')
        elif tipe_kamar == 2 :
            total = 130000 * Lama_menginap
            print(f'Total pembayaran{total}')
        if tipe_kamar == 3 :
            total = 170000 * Lama_menginap
            print(f'Total pembayaran{total}')

    ulang = input('Ingin memesan ulang?(Y/N)')
        
    print('Terimakasih telah memesan')


