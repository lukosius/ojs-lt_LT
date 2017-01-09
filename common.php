<?php
return [

    /**
     * Common replacements for email strings
     */

    '##username##'                      => 'Vartotojo vardas',

    '##email-user##'                    => '##username##: {$username}<br />',
    '##email-author##'                  => '##username##: {$authorUsername}<br />',
    '##email-editor##'                  => '##username##: {$editorUsername}<br />',
    '##email-participant##'             => '##username##: {$participantUsername}<br />',

    '##email-pass##'                    => 'Slaptažodis: {$password}<br />',
    '##email-submission-url##'          => 'Pateikimo adresas: {$submissionUrl}<br />',
    '##email-context-url##'             => '{$contextName} adresas: <a href="{$contextUrl}">{$contextUrl}</a><br />',
    '##email-thanks##'                  => 'Ačiū,<br />',

    '##email-lockss-hello##'            => 'Gerbiamas (-a) [universiteto bibliotekininkas]<br />',
    '##email-lockss-first##'            => '{$contextName} &amp;lt;<a href="{$contextUrl}">{$contextUrl}</a>&amp;gt; yra žurnalas, kuriam priklausantis narys [nario vardas] yra iš jūsų fakulteto padedantis kaip [pareigos pavadinimas]. Žurnalas siekia sukurti su LOCKSS (Lots of Copies Keep Stuff Safe) derantį archyvą su šiuo ir kitomis universitetų bibliotekomis.<br />',

    '##email-have-questions##'          => 'Jei turite klausimų, susisiekite su manimi.',

    '##email-dear-user##'               => 'Gerb. {$userFullName}<br />',
    '##email-dear-author##'             => 'Gerb. {$authorName}:<br />',
    '##email-dear-editorial##'          => 'Gerb. {$editorialContactName}:<br />',
    '##email-dear-reviewer##'           => 'Gerb. {$reviewerName}:<br />',
    '##email-dear-participant##'        => 'Gerb. {$participantName}:<br />',
    '##email-dear-sub##'                => 'Gerb. {$subscriberName}:<br />',

    // review
    '##email-review-request##'          => 'Prašymas recenzuoti straipsnį',
    '##email-review-intro##'            => 'Žurnalui „{$contextName}“ buvo pateiktas rankraštis „{$submissionTitle}“. Tikiu, kad būsite puikus recenzentas šiam straipsniui. Pateikimo santrauka įterpta žemiau. Tikiuosi, kad apsvarstysite priimti šią svarbią užduotį.<br />',
    '##email-review-response-due##'     => 'Prisijunkite prie žurnalo svetainės iki {$responseDueDate}, kad nurodytumėte ar sutinkate recenzuoti, ar nesutinkate. Taip pat prisijungę galėsite prieiti prie pateikimo, pateikti savo recenziją ir rekomendaciją.',
    '##email-review-due##'              => 'Recenzavimo terminas: {$reviewDueDate}.<br />',
    '##email-review-password##'         => 'Jei neturite savo vartotojo vardo ir slaptažodžio, panaudokite šią nuorodą, kad atkurtumėte savo slaptažodį (kuris bus išsiųstas el. paštu su vartotojo vardu). <a href="{$passwordResetUrl}">{$passwordResetUrl}</a><br />',
    '##email-review-url##'              => 'Pateikimo adresas: <a href="{$submissionReviewUrl}">{$submissionReviewUrl}</a><br />',
    '##email-review-thanks##'           => 'Patyrę recenzentai itin svarbūs palaikant aukštos kokybės standartus, todėl norėčiau iš anksto padėkoti už bet kokią jūsų pagalbą.<br />',
    '##email-review-gentle##'           => 'Šis laiškas yra tiesiog priminimas apie mūsų prašymą recenzuoti „{$submissionTitle}“ žurnalui „{$contextName}“.',
    '##email-review-reminder##'         => '##email-review-gentle## Tikėjomės gauti atsakymą iš jūsų iki {$responseDueDate}, o šis laiškas yra automatiškai sugeneruotas ir išsiųstas jums praėjus nurodytą datą.',
    '##email-review-nav-short##'        => 'Nuostatos &gt; Darbo eiga &gt; Recenzavimas',
    '##email-review-nav-options##'      => '(žr. Recenzavimo parinktis puslapyje ##email-review-nav-short##)',
    '##email-review-nav##'              => 'Administravimas &gt; ##email-review-nav-short##',
    '##email-review-section-rev##'      => 'El. laiškas nuo skilties redaktoriaus recenzento prašo priimti arba atmesti recenzavimo užduotį.',
    '##email-review-sec-rev-inf##'      => 'Laiške pateikiama informacija apie pateikimą kaip pavadinimas, santrauka, recenzavimo terminas ir kaip pasiekti patį pateikimą.',
    '##email-review-sec-rev-nav##'      => 'Ši žinutė naudojama standartiniame recenzavimo procese, kuri parenkama puslapyje ##email-review-nav##',
    '##email-review-desc-auto##'        => 'El. laiškas yra automatiškai išsiunčiamas kai recenzentas pavėlavo pateikti savo atsakymą dėl recenzavimo užduoties ##email-review-nav-options##',
    '##email-review-desc-scheduled##'   => 'Suplanuotos užduotys privalo būti įgalintos ir sukonfigūruotos (žr. svetainės konfigūracijos failą).',
    '##email-review-subsequent##'       => 'Žurnalui „{$contextName}“ pakartotinai pateiktas rankraštis „{$submissionTitle}“.<br />',
    '##email-review-subsequent2##'      => 'Po paskutinės rankraščio versijos peržiūros, autoriai pateikė pataisytą straipsnį. Būtume labai dėkingi jei padėtumėte jį įvertinti.<br />',
    '##email-review-subdesc##'          => 'El. laiškas nuo skilties redaktoriaus recenzento prašo priimti arba atmesti recenzavimo užduotį antram ar tolesniems recenzavimo etapams.',
    '##email-review-email##'            => 'Tikiu, kad būsite puikus recenzentas rankraščiui „{$submissionTitle}“. Žemiau pateikti nurodymai recenzavimui, o pateikimas prikabintas prie šio el. laiško. Jūsų recenzija ir rekomendacija turėtų būti išsiųsta atgal el. paštu iki {$reviewDueDate}.<br />',
    '##email-review-email2##'           => 'Prašome el. laišku, iki {$responseDueDate}, nurodyti, ar sutinkate recenzuoti straipsnį.<br />',
    '##email-review-remind##'           => 'Recenzavimo priminimas',
    '##email-review-review-due-date##'  => 'Tikėjomės gauti recenziją iš jūsų iki {$reviewDueDate}',
    '##email-review-remind-hope##'      => '##email-review-review-due-date## ir norėtume gauti atsakymą, kada galėsite ją paruošti.<br />',
    '##email-review-remind-last##'      => 'Prašome patvirtinti ar galite užbaigti recenziją. Nekantriai laukiu žinių iš jūsų.<br />',
    '##email-review-remind-desc-due##'  => 'El. laiškas siunčiamas nuo skilties redaktoriaus recenzentui kaip priminimas, kad vėluojama pateikti recenziją.',
    '##email-review-auto-remind##'      => 'Automatinis recenzavimo priminimas',
    '##email-review-auto-rem-hope##'    => '##email-review-review-due-date##, o šis el. laiškas buvo automatiškai sugeneruotas praėjus terminui. Mes norėtume vis tiek dar gauti ją kai tik galėsite ją paruošti.',

    // editor
    '##email-editor-decision##'         => 'Redaktoriaus sprendimas',
    '##email-editor-reached##'          => 'Priėmėme sprendimą dėl jūsų pateikimo „{$submissionTitle}“ žurnale {$contextName}',
    '##email-editor-our-decision##'     => 'Mūsų sprendimas:',
    '##email-editor-desc##'             => 'El. laiškas siunčiamas nuo redaktoriaus ar skilties redaktoriaus autoriui',

    // sub
    '##email-sub-login-user##'          => 'Prie sistemos galite prisijungti su vartotojo vardu „{$username}“',
    '##email-sub-renew##'               => 'Norėdami pratęsti prenumeratą nueikite į žurnalo svetainę. ##email-sub-login-user##.<br />',
    '##email-sub-desc##'                => 'Laiške pateikiamas žurnalo adresas su instrukcija prieigai',
    '##email-sub-expiry##'              => 'Pabaigos data: {$expiryDate}<br />',
    '##email-sub-url##'                 => 'Prenumeratos adresas: <a href="{$subscriptionUrl}">{$subscriptionUrl}</a><br />',
    '##email-sub-edit##'                => 'Norėdami peržiūrėti ar redaguoti šią prenumeratą, naudokite žemiau nurodytą adresą.<br />',

];
