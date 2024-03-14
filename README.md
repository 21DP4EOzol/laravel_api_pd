    • Kas ir API?-
    Tu (klients) izvēlies ko gribi no ēdienkartes, un pavārs (dators vai interneta serviss) to sagatavo. Tā vietā, lai tu pats gatavotu ēdienu, pavārs to dara tavā vietā.

    • Kā deklarēt mainīgo PHP valodā?-
    Izmantojot $

    • Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
    Laravel izmanto MVC, satur info, parāda to un savieno.

    • Kas ir ORM, kāpēc to izmanto tīra SQL vietā?-
    Objektu-relacionālā kartēšana (ORM) ir veids, kā saskaņot programmēšanas kodu ar datubāzes struktūrām.

       • Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:

username
VARCHAR(255)
email
VARCHAR(255)
password
VARCHAR(255)
rating
DECIMAL(8, 2)
created_at
TIMESTAMP
updated_at
TIMESTAMP

$users = User::where('rating', '>', 4)->get();

^Pieprasijums^
    

