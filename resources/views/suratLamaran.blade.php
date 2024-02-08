@extends('navbar')
@section('navbar')
    @parent
    <div class="surat mt-28">
        <div class="surat-body md:px-[100px] mt-28 bg-white shadow-lg mx-4 rounded-[30px] mt-4 flex-col md:flex font cursor-default px-8 py-8 md:mx-8 top-16">
            <h5 class="font-bold">FORMULIR DATA PRIBADI</h5>
            <hr style="color:blue">

            <form method="post" action="{{ url('/proses-lamaran-docx') }}" class="php-email-form mt-4">
                {{ csrf_field() }}
                <div class="row pt-2">
                    <div class="form-group">
                        <label for="name">Nama Lengkap <span class="text-danger">*<span></span></span></label>
                        <input type="text" name="nama" value="" class="form-control border"
                            placeholder="Contoh : Luwis Wiryanto" required="">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="name">Tempat Lahir <span class="text-danger">*<span></span></span></label>
                        <input type="text" class="form-control" name="tplahir" value=""
                            placeholder="Contoh : Bener Meriah" required="">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Tanggal Lahir <span class="text-danger">*<span></span></span></label>
                        <input type="date" class="form-control" name="tanggal-lahir" value="" placeholder=""
                            required="">
                    </div>
                    <div class="form-group mt-3">
                        <label for="message">Alamat <span class="text-danger">*<span></span></span></label>
                        <textarea name="alamat" rows="3" class="form-control" placeholder="Contoh : Jalan xxxxxx Kampung xxxxxxx"
                            required=""></textarea>
                    </div>

                </div>
                <div class="row pt-2">
                    <div class="col-md-6 form-group">
                        <label for="">Agama </label>
                        <input type="text" class="form-control" name="agama" value=""
                            placeholder="Contoh : Islam">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Kota / Kabupaten <span class="text-danger">*<span></span></span></label>
                        <input type="text" class="form-control" name="kabupaten" value=""
                            placeholder="Contoh : Bener Meriah" required="">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Provinsi <span class="text-danger">*<span></span></span></label>
                        <input type="text" class="form-control" name="provinsi" value=""
                            placeholder="Contoh : Aceh" required="">
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-md-6 form-group">
                        <label for="">Jenis Kelamin <span class="text-danger">*<span></span></span></label>
                        <select class="form-control" name="kelamin" aria-label="Default select example" required="">
                            <option selected="" value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <div class="col-md-6 form-group">
                            <label for="">Pendidikan Terakhir <span
                                    class="text-danger">*<span></span></span></label>
                            <input type="text" class="form-control" name="pendidikan" value=""
                                placeholder="Contoh : S1 Informatika" required="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">No Handphone <span class="text-danger">*<span></span></span></label>
                            <input type="text" class="form-control" name="nohp" value=""
                                placeholder="Contoh : 0822xxxxxxxxxx" required="">
                        </div>
                    </div>
                </div>

        </div>
    </div>
    <div class="surat md:px-[100px] mt-28 bg-white shadow-lg mx-4 rounded-[30px] mt-4 flex-col md:flex font cursor-default px-8 py-8 md:mx-8">
        <div class="surat-body">
            <h5 class="">FORMULIR DATA LAMARAN</h5>
            <hr style="color:blue">
            <div class="form-group">
                <label for="name">Nama Perusahaan <span class="text-danger">*<span></span></span></label>
                <input type="text" class="form-control" name="perusahaan" id="namaPerusahaan"
                    placeholder="Contoh : PT. Shopee">

                <div class="col-md-6  form-group">
                    <label for="">Posisi / Jabatan <span class="text-danger">*<span></span></span></label>
                    <input type="text" class="form-control" name="posisi" value=""
                        placeholder="Contoh : Arsitek Engineer / Software Engineer / Programmer" required="">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Tanggal Pengajuan Lamaran <span
                            class="text-danger">*<span></span></span></label>
                    <input type="date" class="form-control" name="tglsurat" value="" placeholder=""
                        required="">
                </div>
            </div>
            <div class="form-group mt-3">
                <label for="message">Lampiran <span class="text-danger">*<span></span></span></label>
                <textarea name="lampiran" rows="5" class="form-control"></textarea>
            </div>
        </div>
    </div>

    <div class="surat mt-28 md:px-[100px] mt-28 bg-white shadow-lg mx-4 rounded-[30px] mt-4 flex-col md:flex font cursor-default px-8 py-8 md:mx-8">
        <div class="surat-body">
            <div class="form-group mt-2">
                <input type="checkbox" id="check" name="check" value="" required="">
                <label for="check"> Saya Setuju Dengan <a target="_blank" href="/#syarat">Syarat dan Ketentuan</a>
                    Yang
                    Berlaku</label><br>
            </div>
            <div class="form-group mt-2 text-end">
                <input type="submit" value="Download Surat" name="submit" class="flex w-[150px] mt-[20px] mx-auto px-auto bg-gradient-to-r from-yellow-600 to-yellow-300 rounded-lg p-2 hover:from-blue-500 hover:to-blue-200 md:w-[140px] md:text-sm md:mx-auto md:mx-0 md:mb-8 md:mt-8 text-white  ">
            </div>

        </div>
        </form>
    </div>

