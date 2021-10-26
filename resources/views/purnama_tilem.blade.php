<!DOCTYPE html>
<html lang="en">

  @include('layouts.landing-page.header')
  @include('layouts.landing-page.navbar')

      <!--Main-->
          <form class="bg-gray-900 w-full shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
              <label class="block text-white py-2 font-bold mb-2 text-center">
                PURNAMA-TILEM
              </label>
            </div>
            <table class="rounded-md table-auto border-separate border-solid border-8 border-white">
              <thead>
                <tr class="text-white bg-blue-400">
                  <th class="w-1">No</th>
                  <th class="w-1/2">Nama</th>
                  <th class="w-1/4">Jumlah</th>
                  <th class="w-1/2">Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-white bg-blue-400">
                  <td>1</td>
                  <td>Dewa Made Artha</td>
                  <td>Rp 10.000</td>
                  <td>Lunas</td>
                </tr>
                <tr class="text-white bg-blue-400">
                  <td>2</td>
                  <td>Dewa Putu Bima Adnyana</td>
                  <td>Rp 8.000</td>
                  <td>Belum Lunas</td>
                </tr>
                <tr class="text-white bg-blue-400">
                  <td>3</td>
                  <td>Dewa Kadek Suparta</td>
                  <td>Rp 10.000</td>
                  <td>Belum Lunas</td>
                </tr>
                <tr class="text-white bg-blue-400">
                  <td>4</td>
                  <td>Dewa Ketut Bagiada</td>
                  <td>Rp 8.000</td>
                  <td>Lunas</td>
                </tr>
                <tr class="text-white bg-blue-400">
                  <td>5</td>
                  <td>Dewa Putu Swastika</td>
                  <td>Rp 8.000</td>
                  <td>Lunas</td>
                </tr>
              </tbody>
            </table>
            <div class="flex items-center justify-between pt-4">
              <a
                class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                href="blank.404">
                Bayar Sekarang
             </a>
            </div>
          </form>

@include('layouts.landing-page.footer')
