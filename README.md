# Quiz Arena

**Meno a priezvisko študenta:** Matúš Kicák  
**Študijná skupina:** *5ZYI34*

## Stručný opis projektu

Quiz Arena je dynamická webová aplikácia určená na vytváranie a hranie vedomostných kvízov. Používateľ si môže vybrať kvíz podľa kategórie, odpovedať na jednotlivé otázky a po dokončení získať výsledné skóre. Aplikácia bude obsahovať rôzne kategórie, napríklad informatiku, matematiku a ďalšie.

Súčasťou aplikácie bude aj správa otázok a kategórií prostredníctvom administrátorského rozhrania. Administrátor bude môcť vytvárať, upravovať a odstraňovať otázky, pridávať k nim obrázky a spravovať jednotlivé kategórie. Registrovaní používatelia budú mať k dispozícii históriu svojich výsledkov a rebríček najlepších hráčov.

## Role v projekte

### Návštevník

- prezerá dostupné kategórie,
- môže si zobraziť základné informácie o aplikácii,
- môže sa zaregistrovať alebo prihlásiť.

### Používateľ

- prihlasuje sa do aplikácie,
- vyberá a hrá dostupné kvízy,
- odpovedá na otázky,
- zobrazuje výsledok svojho pokusu,
- prezerá si históriu svojich výsledkov.

### Administrátor

- vytvára, upravuje a odstraňuje kvízy,
- vytvára, upravuje a odstraňuje otázky,
- spravuje kategórie,
- pridáva a spravuje obrázky pri otázkach.

## Prípady použitia podľa rolí

### Návštevník

- zobrazí kategórie kvízov,
- zobrazí rebríček hráčov,
- zaregistruje sa,
- prihlási sa do aplikácie.

### Používateľ

- prihlási sa do aplikácie,
- vyberie si kvíz,
- spustí kvíz,
- odpovie na otázky,
- dokončí kvíz,
- zobrazí svoje skóre,
- zobrazí históriu svojich pokusov,
- zobrazí rebríček hráčov.

### Administrátor

- vytvorí nový kvíz,
- upraví alebo odstráni kvíz,
- vytvorí novú otázku,
- upraví alebo odstráni otázku,
- pridá obrázok k otázke,
- vytvorí alebo upraví kategóriu,
- spravuje používateľov,
- zobrazí výsledky hráčov.

## Plánované entity

### Users

Obsahuje registrovaných používateľov aplikácie. Uchováva napríklad email, heslo a rolu používateľa.

### Categories

Predstavuje kategórie, do ktorých sú otázky zaradené. Uchováva názov a popis kategórie, napríklad informatika, matematika a ďalšie.

### Questions

Obsahuje jednotlivé otázky spolu s možnými odpoveďami a označením správnej odpovede. Otázka môže obsahovať text a voliteľný obrázok a je zaradená do konkrétnej kategórie.

### Attempts

Eviduje jednotlivé pokusy používateľov o absolvovanie kvízu. Obsahuje používateľa, kategóriu kvízu a získané skóre.

## Vzťahy medzi entitami

Používateľ môže mať viacero pokusov o absolvovanie kvízov, ide teda o vzťah **1:N medzi Users a Attempts**.

Jedna kategória môže obsahovať viacero otázok, pričom každá otázka patrí do jednej kategórie. Ide o vzťah **1:N medzi Categories a Questions**.

Jedna kategória môže mať viacero pokusov používateľov. Ide o vzťah **1:N medzi Categories a Attempts**.

## Hlavné stránky aplikácie

1. **Domovská stránka** – základné informácie o aplikácii a prehľad dostupných kvízov.
2. **Detail kvízu** – informácie o vybranom kvíze a možnosť jeho spustenia.
3. **Hranie kvízu** – zobrazovanie otázok a zaznamenávanie odpovedí používateľa.
4. **Výsledok kvízu** – zobrazenie získaného skóre a výsledku pokusu.
5. **Rebríček** – zobrazenie najlepších hráčov podľa získaného skóre.
6. **Administrácia** – správa kvízov, otázok, kategórií a používateľov.

## Rozdelenie funkcionality

### Základné funkcie

- registrácia a prihlasovanie používateľov,
- vytváranie, čítanie, úprava a mazanie kvízov,
- vytváranie, čítanie, úprava a mazanie otázok,
- správa kategórií,
- pridávanie obrázkov k otázkam,
- hranie kvízov,
- vyhodnotenie odpovedí a výpočet skóre,
- evidencia pokusov používateľov,
- zobrazenie histórie výsledkov,
- rebríček hráčov,
- filtrovanie a načítavanie údajov pomocou AJAX.

### Rozširujúce funkcie

- časový limit pre jednotlivé kvízy,
- vizualizácia výsledkov pomocou grafov,
- import otázok z externého API,
- použitie JavaScript frameworku.