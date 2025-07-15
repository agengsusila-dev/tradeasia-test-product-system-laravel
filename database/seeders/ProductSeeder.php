<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::truncate();

        $products = [
            [
                'name' => ['en' => 'Sodium Chloride', 'id' => 'Natrium Klorida'],
                'hs_code' => '2501.00',
                'cas_number' => '7647-14-5',
                'image' => 'images/sodium-chloride.jpg',
                'description' => [
                    'en' => 'Used in food and industrial applications.',
                    'id' => 'Digunakan dalam makanan dan aplikasi industri.'
                ],
                'application' => [
                    'en' => 'Food industry, Water treatment',
                    'id' => 'Industri makanan, Pengolahan air'
                ],
                'meta_title' => ['en' => 'Sodium Chloride', 'id' => 'Natrium Klorida'],
                'meta_keyword' => ['en' => 'salt, sodium', 'id' => 'garam, natrium'],
                'meta_description' => [
                    'en' => 'A common salt used in various industries.',
                    'id' => 'Garam umum yang digunakan dalam berbagai industri.'
                ]
            ],
            [
                'name' => ['en' => 'Sulfuric Acid', 'id' => 'Asam Sulfat'],
                'hs_code' => '2807.00',
                'cas_number' => '7664-93-9',
                'image' => 'images/sulfuric-acid.jpg',
                'description' => [
                    'en' => 'Highly corrosive strong mineral acid.',
                    'id' => 'Asam mineral kuat yang sangat korosif.'
                ],
                'application' => [
                    'en' => 'Fertilizers, Batteries',
                    'id' => 'Pupuk, Baterai'
                ],
                'meta_title' => ['en' => 'Sulfuric Acid', 'id' => 'Asam Sulfat'],
                'meta_keyword' => ['en' => 'acid, H2SO4', 'id' => 'asam, H2SO4'],
                'meta_description' => [
                    'en' => 'Widely used in chemical industry.',
                    'id' => 'Banyak digunakan di industri kimia.'
                ]
            ],
            [
                'name' => ['en' => 'Hydrogen Peroxide', 'id' => 'Hidrogen Peroksida'],
                'hs_code' => '2847.00',
                'cas_number' => '7722-84-1',
                'image' => 'images/hydrogen-peroxide.jpg',
                'description' => [
                    'en' => 'Powerful oxidizing agent used as disinfectant.',
                    'id' => 'Agen pengoksidasi kuat untuk desinfektan.'
                ],
                'application' => [
                    'en' => 'Bleaching, Disinfection',
                    'id' => 'Pemutihan, Desinfeksi'
                ],
                'meta_title' => ['en' => 'Hydrogen Peroxide', 'id' => 'Hidrogen Peroksida'],
                'meta_keyword' => ['en' => 'oxidizer, H2O2', 'id' => 'oksidator, H2O2'],
                'meta_description' => [
                    'en' => 'Used in cleaning and bleaching.',
                    'id' => 'Digunakan dalam pembersihan dan pemutihan.'
                ]
            ],
            [
                'name' => ['en' => 'Acetic Acid', 'id' => 'Asam Asetat'],
                'hs_code' => '2915.21',
                'cas_number' => '64-19-7',
                'image' => 'images/acetic-acid.jpg',
                'description' => [
                    'en' => 'Organic acid used in food and chemical industry.',
                    'id' => 'Asam organik untuk industri makanan dan kimia.'
                ],
                'application' => [
                    'en' => 'Food additive, Solvent',
                    'id' => 'Aditif makanan, Pelarut'
                ],
                'meta_title' => ['en' => 'Acetic Acid', 'id' => 'Asam Asetat'],
                'meta_keyword' => ['en' => 'vinegar, CH3COOH', 'id' => 'cuka, CH3COOH'],
                'meta_description' => [
                    'en' => 'Common acid found in vinegar.',
                    'id' => 'Asam umum yang ditemukan dalam cuka.'
                ]
            ],
            [
                'name' => ['en' => 'Citric Acid', 'id' => 'Asam Sitrat'],
                'hs_code' => '2918.14',
                'cas_number' => '77-92-9',
                'image' => 'images/citric-acid.jpg',
                'description' => [
                    'en' => 'Natural preservative found in citrus fruits.',
                    'id' => 'Pengawet alami dari buah sitrus.'
                ],
                'application' => [
                    'en' => 'Food, Beverage, Cosmetics',
                    'id' => 'Makanan, Minuman, Kosmetik'
                ],
                'meta_title' => ['en' => 'Citric Acid', 'id' => 'Asam Sitrat'],
                'meta_keyword' => ['en' => 'citrus, acid', 'id' => 'sitrus, asam'],
                'meta_description' => [
                    'en' => 'Widely used in food & cosmetic products.',
                    'id' => 'Sering digunakan di produk makanan dan kosmetik.'
                ]
            ],
            [
                'name' => ['en' => 'Calcium Carbonate', 'id' => 'Kalsium Karbonat'],
                'hs_code' => '2836.50',
                'cas_number' => '471-34-1',
                'image' => 'images/calcium-carbonate.jpg',
                'description' => [
                    'en' => 'Common filler in industrial and pharmaceutical uses.',
                    'id' => 'Filler umum dalam industri dan farmasi.'
                ],
                'application' => [
                    'en' => 'Paper, Plastic, Medicine',
                    'id' => 'Kertas, Plastik, Obat'
                ],
                'meta_title' => ['en' => 'Calcium Carbonate', 'id' => 'Kalsium Karbonat'],
                'meta_keyword' => ['en' => 'CaCO3, filler', 'id' => 'CaCO3, pengisi'],
                'meta_description' => [
                    'en' => 'White powder widely used as filler.',
                    'id' => 'Bubuk putih yang umum digunakan sebagai pengisi.'
                ]
            ],
            [
                'name' => ['en' => 'Ammonia', 'id' => 'Amonia'],
                'hs_code' => '2814.10',
                'cas_number' => '7664-41-7',
                'image' => 'images/ammonia.jpg',
                'description' => [
                    'en' => 'Colorless gas with pungent smell.',
                    'id' => 'Gas tak berwarna dengan bau menyengat.'
                ],
                'application' => [
                    'en' => 'Fertilizers, Cleaning agents',
                    'id' => 'Pupuk, Pembersih'
                ],
                'meta_title' => ['en' => 'Ammonia', 'id' => 'Amonia'],
                'meta_keyword' => ['en' => 'NH3, cleaning', 'id' => 'NH3, pembersih'],
                'meta_description' => [
                    'en' => 'Used in cleaning and agriculture.',
                    'id' => 'Digunakan dalam kebersihan dan pertanian.'
                ]
            ],
            [
                'name' => ['en' => 'Magnesium Sulfate', 'id' => 'Magnesium Sulfat'],
                'hs_code' => '2833.21',
                'cas_number' => '7487-88-9',
                'image' => 'images/magnesium-sulfate.jpg',
                'description' => [
                    'en' => 'Commonly known as Epsom salt.',
                    'id' => 'Dikenal sebagai garam Epsom.'
                ],
                'application' => [
                    'en' => 'Medical, Agriculture',
                    'id' => 'Medis, Pertanian'
                ],
                'meta_title' => ['en' => 'Magnesium Sulfate', 'id' => 'Magnesium Sulfat'],
                'meta_keyword' => ['en' => 'MgSO4, epsom', 'id' => 'MgSO4, epsom'],
                'meta_description' => [
                    'en' => 'Used for therapeutic baths and soil improvement.',
                    'id' => 'Dipakai untuk mandi terapi dan perbaikan tanah.'
                ]
            ],
            [
                'name' => ['en' => 'Sodium Bicarbonate', 'id' => 'Sodium Bikarbonat'],
                'hs_code' => '2836.30',
                'cas_number' => '144-55-8',
                'image' => 'images/sodium-bicarbonate.jpg',
                'description' => [
                    'en' => 'Also known as baking soda.',
                    'id' => 'Dikenal sebagai soda kue.'
                ],
                'application' => [
                    'en' => 'Baking, Cleaning, Fire Extinguisher',
                    'id' => 'Kue, Pembersih, Pemadam Api'
                ],
                'meta_title' => ['en' => 'Sodium Bicarbonate', 'id' => 'Sodium Bikarbonat'],
                'meta_keyword' => ['en' => 'NaHCO3, baking soda', 'id' => 'NaHCO3, soda kue'],
                'meta_description' => [
                    'en' => 'Versatile compound used in daily life.',
                    'id' => 'Senjata serbaguna dalam kehidupan sehari-hari.'
                ]
            ],
            [
                'name' => ['en' => 'Ethanol', 'id' => 'Etanol'],
                'hs_code' => '2207.10',
                'cas_number' => '64-17-5',
                'image' => 'images/ethanol.jpg',
                'description' => [
                    'en' => 'Alcohol used in fuel and sanitation.',
                    'id' => 'Alkohol untuk bahan bakar dan sanitasi.'
                ],
                'application' => [
                    'en' => 'Fuel, Antiseptic',
                    'id' => 'Bahan bakar, Antiseptik'
                ],
                'meta_title' => ['en' => 'Ethanol', 'id' => 'Etanol'],
                'meta_keyword' => ['en' => 'alcohol, ethanol', 'id' => 'alkohol, etanol'],
                'meta_description' => [
                    'en' => 'Used for fuel and hygiene purposes.',
                    'id' => 'Dipakai untuk bahan bakar dan kebersihan.'
                ]
            ],
        ];

        foreach ($products as $data) {
            Product::create($data);
        }
    }
}
