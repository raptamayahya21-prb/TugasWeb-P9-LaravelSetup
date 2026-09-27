<?php

namespace Tests\Feature;

use Tests\TestCase;

class RequirementTest extends TestCase
{
    /**
     * Kriteria 4: Mengakses rute utama / & respon 200 OK
     */
    public function test_kriteria_4_rute_utama_mengembalikan_respon_200_dan_view_welcome(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('welcome');
    }

    /**
     * Kriteria 4: Mengakses rute /about & respon 200 OK
     */
    public function test_kriteria_4_rute_about_mengembalikan_respon_200_dan_view_about(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
        $response->assertViewIs('about');
    }

    /**
     * Kriteria 4: Mengakses rute /contact & respon 200 OK
     */
    public function test_kriteria_4_rute_contact_mengembalikan_respon_200_dan_view_contact(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertViewIs('contact');
    }

    /**
     * Kriteria 5: Rute /about mengirimkan data dinamis integer random x
     */
    public function test_kriteria_5_rute_about_mengirimkan_data_dinamis_x(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
        $response->assertViewHas('x');

        $x = $response->viewData('x');
        $this->assertIsInt($x);
        $this->assertGreaterThanOrEqual(1, $x);
        $this->assertLessThanOrEqual(10, $x);

        $response->assertSee("Paragraf lorem telah di tampilkan sebanyak {$x} kali.");
        $response->assertSee('About Page');
    }

    /**
     * Kriteria 5: Rute /contact mengirimkan data dinamis array
     */
    public function test_kriteria_5_rute_contact_mengirimkan_data_dinamis_array(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertViewHas('data');

        $data = $response->viewData('data');
        $this->assertIsArray($data);
        $this->assertArrayHasKey('name', $data);
        $this->assertArrayHasKey('class', $data);
        $this->assertArrayHasKey('nim', $data);

        $response->assertSee('Contact Page');
        $response->assertSee('name: ' . $data['name']);
        $response->assertSee('class: ' . $data['class']);
        $response->assertSee('nim: ' . $data['nim']);
    }

    /**
     * Bonus 2: Menguji route parameter /hello/{nama}
     */
    public function test_bonus_2_rute_parameter_hello_nama(): void
    {
        $namaList = ['Rapta', 'Adidtya', 'LaravelSetup'];

        foreach ($namaList as $nama) {
            $response = $this->get("/hello/{$nama}");

            $response->assertStatus(200);
            $response->assertViewIs('hello');
            $response->assertViewHas('nama', $nama);
            $response->assertSee("Hello {$nama}");
        }
    }
}
