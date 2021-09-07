<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 17
 *
 * Used with <ContributorRole> <b035>
 *
 * @see https://ns.editeur.org/onix/en/17
 */
class CodeList17 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 17 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/17
	 */
	protected static $en = [
		'A01' => 'By (author)',
		'A02' => 'With',
		'A03' => 'Screenplay by',
		'A04' => 'Libretto by',
		'A05' => 'Lyrics by',
		'A06' => 'By (composer)',
		'A07' => 'By (artist)',
		'A08' => 'By (photographer)',
		'A09' => 'Created by',
		'A10' => 'From an idea by',
		'A11' => 'Designed by',
		'A12' => 'Illustrated by',
		'A13' => 'Photographs by',
		'A14' => 'Text by',
		'A15' => 'Preface by',
		'A16' => 'Prologue by',
		'A17' => 'Summary by',
		'A18' => 'Supplement by',
		'A19' => 'Afterword by',
		'A20' => 'Notes by',
		'A21' => 'Commentaries by',
		'A22' => 'Epilogue by',
		'A23' => 'Foreword by',
		'A24' => 'Introduction by',
		'A25' => 'Footnotes by',
		'A26' => 'Memoir by',
		'A27' => 'Experiments by',
		'A29' => 'Introduction and notes by',
		'A30' => 'Software written by',
		'A31' => 'Book and lyrics by',
		'A32' => 'Contributions by',
		'A33' => 'Appendix by',
		'A34' => 'Index by',
		'A35' => 'Drawings by',
		'A36' => 'Cover design or artwork by',
		'A37' => 'Preliminary work by',
		'A38' => 'Original author',
		'A39' => 'Maps by',
		'A40' => 'Inked or colored by',
		'A41' => 'Paper engineering by',
		'A42' => 'Continued by',
		'A43' => 'Interviewer',
		'A44' => 'Interviewee',
		'A45' => 'Comic script by',
		'A46' => 'Inker',
		'A47' => 'Colorist',
		'A48' => 'Letterer',
		'A51' => 'Research by',
		'A99' => 'Other primary creator',
		'B01' => 'Edited by',
		'B02' => 'Revised by',
		'B03' => 'Retold by',
		'B04' => 'Abridged by',
		'B05' => 'Adapted by',
		'B06' => 'Translated by',
		'B07' => 'As told by',
		'B08' => 'Translated with commentary by',
		'B09' => 'Series edited by',
		'B10' => 'Edited and translated by',
		'B11' => 'Editor-in-chief',
		'B12' => 'Guest editor',
		'B13' => 'Volume editor',
		'B14' => 'Editorial board member',
		'B15' => 'Editorial coordination by',
		'B16' => 'Managing editor',
		'B17' => 'Founded by',
		'B18' => 'Prepared for publication by',
		'B19' => 'Associate editor',
		'B20' => 'Consultant editor',
		'B21' => 'General editor',
		'B22' => 'Dramatized by',
		'B23' => 'General rapporteur',
		'B24' => 'Literary editor',
		'B25' => 'Arranged by (music)',
		'B26' => 'Technical editor',
		'B27' => 'Thesis advisor or supervisor',
		'B28' => 'Thesis examiner',
		'B29' => 'Scientific editor',
		'B30' => 'Historical advisor',
		'B31' => 'Original editor',
		'B99' => 'Other adaptation by',
		'C01' => 'Compiled by',
		'C02' => 'Selected by',
		'C03' => 'Non-text material selected by',
		'C04' => 'Curated by',
		'C99' => 'Other compilation by',
		'D01' => 'Producer',
		'D02' => 'Director',
		'D03' => 'Conductor',
		'D04' => 'Choreographer',
		'D99' => 'Other direction by',
		'E01' => 'Actor',
		'E02' => 'Dancer',
		'E03' => 'Narrator',
		'E04' => 'Commentator',
		'E05' => 'Vocal soloist',
		'E06' => 'Instrumental soloist',
		'E07' => 'Read by',
		'E08' => 'Performed by (orchestra, band, ensemble)',
		'E09' => 'Speaker',
		'E10' => 'Presenter',
		'E99' => 'Performed by',
		'F01' => 'Filmed/photographed by',
		'F02' => 'Editor (film or video)',
		'F99' => 'Other recording by',
		'Z01' => 'Assisted by',
		'Z02' => 'Honored/dedicated to',
		'Z03' => 'Enacting jurisdiction',
		'Z04' => 'Peer reviewed',
		'Z98' => '(Various roles)',
		'Z99' => 'Other',
	];

	/**
	 * Code List 17 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/17
	 */
	protected static $es = [
		'A01' => 'Autor',
		'A02' => 'Con',
		'A03' => 'Guión de',
		'A04' => 'Libreto de',
		'A05' => 'Letra de',
		'A06' => 'Compositor',
		'A07' => 'Por… (Artista)',
		'A08' => 'De… (fotógrafo)',
		'A09' => 'Creado por',
		'A10' => 'A partir de una idea de',
		'A11' => 'Diseñado por',
		'A12' => 'Ilustrado por',
		'A13' => 'Fotografías de',
		'A14' => 'Textos de',
		'A15' => 'Prefacio de',
		'A16' => 'Prólogo de',
		'A17' => 'Resumen de',
		'A18' => 'Suplemento de',
		'A19' => 'Posfacio de',
		'A20' => 'Notas de',
		'A21' => 'Comentarios de',
		'A22' => 'Epílogo de',
		'A23' => 'Nota introductora de',
		'A24' => 'Introducción de',
		'A25' => 'Notas a pie de página de',
		'A26' => 'Biografía de',
		'A27' => 'Experimentos de',
		'A29' => 'Introducción y notas de',
		'A30' => 'Software escrito por',
		'A31' => 'Libreto y letra de',
		'A32' => 'Contribuciones de',
		'A33' => 'Apéndice de',
		'A34' => 'Índice compilado por',
		'A35' => 'Dibujos de',
		'A36' => 'Diseño o ilustración de cubierta de',
		'A37' => 'Trabajo preliminar de',
		'A38' => 'Autor original',
		'A39' => 'Mapas de',
		'A40' => 'Entintado o coloreado por',
		'A41' => 'Ingeniería de papel por',
		'A42' => 'Continuado por',
		'A43' => 'Entrevistador',
		'A44' => 'Entrevistado',
		'A45' => 'Guionista del cómic',
		'A46' => 'Entintador',
		'A47' => 'Colorista',
		'A48' => 'Rotulista',
		'A51' => 'Investigador',
		'A99' => 'Otro creador principal',
		'B01' => 'Editado por',
		'B02' => 'Revisado por',
		'B03' => 'Contado por',
		'B04' => 'Compendiado por',
		'B05' => 'Adaptado por',
		'B06' => 'Traducido por',
		'B07' => 'Según relato de',
		'B08' => 'Traducción y comentario de',
		'B09' => 'Edición de la colección a cargo de',
		'B10' => 'Edición y traducción de',
		'B11' => 'Director del equipo editorial',
		'B12' => 'Editor invitado',
		'B13' => 'Editor del volumen',
		'B14' => 'Miembro del equipo editorial',
		'B15' => 'Coordinación editorial de',
		'B16' => 'Director editorial',
		'B17' => 'Fundado por',
		'B18' => 'Preparado para publicación por',
		'B19' => 'Editor adjunto',
		'B20' => 'Editor consultor',
		'B21' => 'Editor general',
		'B22' => 'Adaptación teatral de',
		'B23' => 'Coordinación general de',
		'B24' => 'Editor literario',
		'B25' => 'Arreglo musical de',
		'B26' => 'Editor técnico',
		'B27' => 'Director de tesis o de investigación',
		'B28' => 'Miembro del tribunal de tesis',
		'B29' => 'Editor científico',
		'B30' => 'Asesor histórico',
		'B31' => 'Editor original',
		'B99' => 'Otra adaptación de',
		'C01' => 'Compilado por',
		'C02' => 'Seleccionado por',
		'C03' => 'Material no textual seleccionado por',
		'C04' => 'Curaduría de',
		'C99' => 'Otra compilación de',
		'D01' => 'Productor',
		'D02' => 'Director',
		'D03' => 'Director de orquesta',
		'D04' => 'Coreógrafo',
		'D99' => 'Otra dirección de',
		'E01' => 'Actor',
		'E02' => 'Bailarín',
		'E03' => 'Narrador',
		'E04' => 'Comentador',
		'E05' => 'Solista (voz)',
		'E06' => 'Solista (instrumento)',
		'E07' => 'Leído por',
		'E08' => 'Interpretado por (orquesta, banda, grupo musical)',
		'E09' => 'Locutor',
		'E10' => 'Presentador',
		'E99' => 'Interpretado por',
		'F01' => 'Filmado/fotografiado por',
		'F02' => 'Editor (película o grabación)',
		'F99' => 'Otra grabación de',
		'Z01' => 'Asistido por',
		'Z02' => 'En honor de / Dedicado a',
		'Z03' => 'Autoridad legislativa',
		'Z04' => 'Peer reviewed',
		'Z98' => 'Varios roles',
		'Z99' => 'Otro',
	];

	/**
	 * Code List 17 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/17
	 */
	protected static $de = [
		'A01' => 'Autor / Autorin',
		'A02' => 'Zusammen mit',
		'A03' => 'Drehbuch von',
		'A04' => 'Libretto von',
		'A05' => 'Liedtext von',
		'A06' => 'Komponiert von',
		'A07' => 'Künstler / Künstlerin',
		'A08' => 'Fotograf / Fotografin',
		'A09' => 'Erschaffen von',
		'A10' => 'Nach einer Idee von',
		'A11' => 'Designed von',
		'A12' => 'Illustriert von',
		'A13' => 'Fotos von',
		'A14' => 'Bildbeschreibung von',
		'A15' => 'Einführung von',
		'A16' => 'Prolog von',
		'A17' => 'Zusammenfassung von',
		'A18' => 'Ergänzungen von',
		'A19' => 'Nachwort von',
		'A20' => 'Anmerkungen von',
		'A21' => 'Kommentiert von',
		'A22' => 'Epilog von',
		'A23' => 'Vorwort von',
		'A24' => 'Einleitung von',
		'A25' => 'Fußnoten von',
		'A26' => 'Erinnerungen von',
		'A27' => 'Experimente von',
		'A29' => 'Einleitung und Anmerkungen von',
		'A30' => 'Programmiert von',
		'A31' => 'Text und Liedtext von',
		'A32' => 'Beiträge von',
		'A33' => 'Anhang von',
		'A34' => 'Register von',
		'A35' => 'Zeichnungen von',
		'A36' => 'Covergestaltung von',
		'A37' => 'Vorarbeiten von',
		'A38' => 'Erstausgabe verfasst von',
		'A39' => 'Landkarten von',
		'A40' => 'Koloriert von',
		'A41' => 'Papiertechnik von',
		'A42' => 'Fortgeführt von',
		'A43' => 'Interview von',
		'A44' => 'Interview mit',
		'A45' => 'Comic-Skript von',
		'A46' => 'Comic-Zeichnungen von',
		'A47' => 'Comic-Kolorierung von',
		'A48' => 'Comic-Text von',
		'A51' => 'Forschung von',
		'A99' => 'Verfasser / Verfasserin (sonstige)',
		'B01' => 'Herausgegeben von',
		'B02' => 'Überarbeitet von',
		'B03' => 'Nacherzählt von',
		'B04' => 'Gekürzt von',
		'B05' => 'Adaptiert von',
		'B06' => 'Übersetzt von',
		'B07' => 'Nach einer Erzählung von',
		'B08' => 'Kommentierte Übersetzung von',
		'B09' => 'Reihe herausgegeben von',
		'B10' => 'Herausgegeben und übersetzt von',
		'B11' => 'Chefredaktion',
		'B12' => 'Gastredaktion',
		'B13' => 'Band herausgegeben von',
		'B14' => 'Redaktion',
		'B15' => 'Redaktionelle Koordination',
		'B16' => 'Chef vom Dienst',
		'B17' => 'Begründet von',
		'B18' => 'Für die Veröffentlichung vorbereitet von',
		'B19' => 'Mitherausgegeben von',
		'B20' => 'Redaktionelle Beratung',
		'B21' => 'Leitender Herausgeber / leitende Herausgeberin',
		'B22' => 'Dramaturgie von',
		'B23' => 'Juristische Redaktion',
		'B24' => 'Literarische Redaktion',
		'B25' => 'Musik arrangiert von',
		'B26' => 'Technische Redaktion',
		'B27' => 'Betreut von',
		'B28' => 'Geprüft durch',
		'B29' => 'Wissenschaftliche Redaktion',
		'B30' => 'Historische Beratung',
		'B31' => 'Erstausgabe herausgegeben von',
		'B99' => 'Sonstige Bearbeitung von',
		'C01' => 'Zusammengestellt von',
		'C02' => 'Textauswahl von',
		'C03' => 'Sonstiges Material ausgewählt von',
		'C04' => 'Kuratiert von',
		'C99' => 'Sonstige Zusammenstellung von',
		'D01' => 'Produktion',
		'D02' => 'Regie',
		'D03' => 'Dirigiert von',
		'D04' => 'Choreographie von',
		'D99' => 'Sonstige Leitung',
		'E01' => 'Schauspieler / Schauspielerin',
		'E02' => 'Tänzer / Tänzerin',
		'E03' => 'Erzähler / Erzählerin',
		'E04' => 'Kommentator / Kommentatorin',
		'E05' => 'Vokalsolist / Vokalsolistin',
		'E06' => 'Instrumentalsolist / Instrumentalsolistin',
		'E07' => 'Gelesen von',
		'E08' => 'Gespielt von',
		'E09' => 'Sprecher / Sprecherin',
		'E10' => 'Präsentiert von',
		'E99' => 'Aufgeführt von',
		'F01' => 'Kamera',
		'F02' => 'Filmschnitt',
		'F99' => 'Sonstige Aufnahmen von',
		'Z01' => 'Unterstützt von',
		'Z02' => 'Zu Ehren von',
		'Z03' => 'Enacting jurisdiction',
		'Z04' => 'Peer reviewed',
		'Z98' => 'Unter Mitarbeit von',
		'Z99' => 'Sonstige Mitwirkung',
	];

	/**
	 * Code List 17 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/17
	 */
	protected static $fr = [
		'A01' => 'De (auteur)',
		'A02' => 'Avec',
		'A03' => 'Scénario de',
		'A04' => 'Livret de',
		'A05' => 'Paroles de',
		'A06' => 'De (compositeur)',
		'A07' => 'De (artiste)',
		'A08' => 'De (photographe)',
		'A09' => 'Créé par',
		'A10' => 'D’après une idée de',
		'A11' => 'Conçu par',
		'A12' => 'Illustré par',
		'A13' => 'Photographies de',
		'A14' => 'Texte de',
		'A15' => 'Préface de',
		'A16' => 'Prologue de',
		'A17' => 'Résumé de',
		'A18' => 'Supplément de',
		'A19' => 'Postface de',
		'A20' => 'Notes de',
		'A21' => 'Commentaires de',
		'A22' => 'Epilogue de',
		'A23' => 'Avant-propos de',
		'A24' => 'Introduction de',
		'A25' => 'Notes de bas de page de',
		'A26' => 'Etude de',
		'A27' => 'Expériences de',
		'A29' => 'Introduction et notes de',
		'A30' => 'Logiciel conçu par',
		'A31' => 'Livret et paroles de',
		'A32' => 'Contributions de',
		'A33' => 'Annexes de',
		'A34' => 'Index de',
		'A35' => 'Dessins de',
		'A36' => 'Maquette ou illustration de couverture de',
		'A37' => 'Œuvre préliminaire de',
		'A38' => 'Auteur de l’idée originale',
		'A39' => 'Cartes de',
		'A40' => 'Mis en encre ou mis en couleur par',
		'A41' => 'Ingénierie de papier par',
		'A42' => 'Continué par',
		'A43' => 'Intervieweur',
		'A44' => 'Personne interviewée',
		'A45' => 'Scénariste de bande dessinée',
		'A46' => 'Encreur',
		'A47' => 'Coloriste',
		'A48' => 'Lettreur',
		'A51' => 'Recherches par',
		'A99' => 'Autre',
		'B01' => 'Edité par',
		'B02' => 'Révisé par',
		'B03' => 'Raconté par',
		'B04' => 'Abrégé par',
		'B05' => 'Adapté par',
		'B06' => 'Traduit par',
		'B07' => 'Tel que raconté par',
		'B08' => 'Traduit et commenté par',
		'B09' => 'Collection dirigée par',
		'B10' => 'Edité et traduit par',
		'B11' => 'Editeur en chef',
		'B12' => 'Editeur invité',
		'B13' => 'Editeur du volume',
		'B14' => 'Membre du comité éditorial',
		'B15' => 'Coordination éditoriale de',
		'B16' => 'Directeur éditorial',
		'B17' => 'Fondé par',
		'B18' => 'Préparé pour la publication par',
		'B19' => 'Editeur associé',
		'B20' => 'Editeur conseil',
		'B21' => 'Editeur général',
		'B22' => 'Scénarisé par',
		'B23' => 'Rapporteur général',
		'B24' => 'Rédacteur littéraire',
		'B25' => 'Arrangements musicaux de',
		'B26' => 'Rédacteur technique',
		'B27' => 'Directeur de thèse ou de recherche',
		'B28' => 'Examinateur de thèse',
		'B29' => 'Editeur scientifique',
		'B30' => 'Conseiller historique',
		'B31' => 'Editeur original',
		'B99' => 'Autre adaptation par',
		'C01' => 'Compilé par',
		'C02' => 'Sélection de',
		'C03' => 'Contenu non-textuel sélectionné par',
		'C04' => 'Organisé par',
		'C99' => 'Autre compilation par',
		'D01' => 'Producteur',
		'D02' => 'Réalisateur',
		'D03' => 'Sous la direction de',
		'D04' => 'Chorégraphe',
		'D99' => 'Autre',
		'E01' => 'Acteur',
		'E02' => 'Danseur',
		'E03' => 'Narrateur',
		'E04' => 'Commentateur',
		'E05' => 'Soliste vocal',
		'E06' => 'Soliste instrumental',
		'E07' => 'Lu par',
		'E08' => 'Interprété par (orchestre, groupe, ensemble)',
		'E09' => 'Orateur',
		'E10' => 'Présentateur',
		'E99' => 'Interprété par',
		'F01' => 'Filmé / photographié par',
		'F02' => 'Editeur (film ou vidéo)',
		'F99' => 'Autre',
		'Z01' => 'Assisté par',
		'Z02' => 'Honoré par / consacré à',
		'Z03' => 'Enacting jurisdiction',
		'Z04' => 'Peer reviewed',
		'Z98' => '(Rôles divers)',
		'Z99' => 'Autre',
	];

	/**
	 * Code List 17 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/17
	 */
	protected static $it = [
		'A01' => 'Di (autore)',
		'A02' => 'Con',
		'A03' => 'Sceneggiatura di',
		'A04' => 'Libretto di',
		'A05' => 'Parole di',
		'A06' => 'Di (compositore)',
		'A07' => 'Di (artista)',
		'A08' => 'Di (fotografo)',
		'A09' => 'Creato da',
		'A10' => 'Da un’idea di',
		'A11' => 'Disegnato da',
		'A12' => 'Illustrato da',
		'A13' => 'Fotografie di',
		'A14' => 'Testo di',
		'A15' => 'Prefazione di',
		'A16' => 'Prologo di',
		'A17' => 'Sommario di',
		'A18' => 'Supplemento di',
		'A19' => 'Postfazione di',
		'A20' => 'Note di',
		'A21' => 'Commento di',
		'A22' => 'Epilogo di',
		'A23' => 'Presentazione di',
		'A24' => 'Introduzione di',
		'A25' => 'Note a pie’ di pagina',
		'A26' => 'Biografia di',
		'A27' => 'Esperimenti di',
		'A29' => 'Introduzione e note di',
		'A30' => 'Software scritto da',
		'A31' => 'Libretto e parole di',
		'A32' => 'Contributi di',
		'A33' => 'Appendice di',
		'A34' => 'Indice compilato da',
		'A35' => 'Disegni di',
		'A36' => 'Copertina di',
		'A37' => 'Lavoro preliminare di',
		'A38' => 'Autore originale',
		'A39' => 'Autore delle carte geografiche',
		'A40' => 'Inchiostri o colori di',
		'A41' => 'Ingegneria cartotecnica di',
		'A42' => 'Continuato da',
		'A43' => 'Intervistatore',
		'A44' => 'Intervistato',
		'A45' => 'Sceneggiatura del fumetto di',
		'A46' => 'Inchiostri di',
		'A47' => 'Colori di',
		'A48' => 'Lettering di',
		'A51' => 'Ricerca di',
		'A99' => 'Altro autore principale',
		'B01' => 'A cura di',
		'B02' => 'Riveduto da',
		'B03' => 'Raccontato da',
		'B04' => 'Ridotto da',
		'B05' => 'Adattato da',
		'B06' => 'Tradotto da',
		'B07' => 'Come raccontato da',
		'B08' => 'Tradotto con commento sulla traduzione di',
		'B09' => 'Serie curata da',
		'B10' => 'Curato e tradotto da',
		'B11' => 'Sotto la supervisione di',
		'B12' => 'Curatore aggiunto',
		'B13' => 'Volume a cura di',
		'B14' => 'Membro del comitato editoriale',
		'B15' => 'Coordinamento editoriale di',
		'B16' => 'Caporedattore',
		'B17' => 'Fondato da',
		'B18' => 'Preparato per la pubblicazione da',
		'B19' => 'Curatore associato',
		'B20' => 'Consulente editoriale',
		'B21' => 'Direzione generale di',
		'B22' => 'Adattato per il teatro da',
		'B23' => 'Relatore generale',
		'B24' => 'Curatore letterario',
		'B25' => 'Arrangiato da (musica)',
		'B26' => 'Curatore tecnico',
		'B27' => 'Relatore di tesi',
		'B28' => 'Correlatore di tesi',
		'B29' => 'Curatore scientifico',
		'B30' => 'Consulente storico',
		'B31' => 'Curatore originale',
		'B99' => 'Altro adattamento di',
		'C01' => 'Compilato da',
		'C02' => 'Selezionato da',
		'C03' => 'Materiale non testuale selezionato da',
		'C04' => 'Curato da',
		'C99' => 'Altra raccolta di',
		'D01' => 'Produttore',
		'D02' => 'Regista',
		'D03' => 'Direttore d’orchestra',
		'D04' => 'Coreografo',
		'D99' => 'Altra direzione di',
		'E01' => 'Attore',
		'E02' => 'Ballerino',
		'E03' => 'Voce narrante',
		'E04' => 'Commentatore',
		'E05' => 'Solista alla voce',
		'E06' => 'Solista allo strumento',
		'E07' => 'Letto da',
		'E08' => 'Eseguito da (orchestra, band, gruppo musicale)',
		'E09' => 'Oratore',
		'E10' => 'Presentatore',
		'E99' => 'Eseguito da',
		'F01' => 'Direttore della fotografia',
		'F02' => 'Montatore (film o video)',
		'F99' => 'Altra ripresa di',
		'Z01' => 'Assistente',
		'Z02' => 'In onore di/dedicato a',
		'Z03' => 'Autorità emanante',
		'Z04' => 'Peer reviewed',
		'Z98' => 'Ruoli vari',
		'Z99' => 'Altro',
	];

	/**
	 * Code List 17 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/17
	 */
	protected static $nb = [
		'A01' => 'Av (forfatter)',
		'A02' => 'Med',
		'A03' => 'Manus av',
		'A04' => 'Libretto av',
		'A05' => 'Sangtekst av',
		'A06' => 'Av (komponist)',
		'A07' => 'Av (kunstner)',
		'A08' => 'Av (fotograf)',
		'A09' => 'Skapt av',
		'A10' => 'Etter ide av',
		'A11' => 'Designet av',
		'A12' => 'Illustrert av',
		'A13' => 'Fotografier av',
		'A14' => 'Tekst av',
		'A15' => 'Innledning av',
		'A16' => 'Prolog av',
		'A17' => 'Sammendrag av',
		'A18' => 'Tillegg av',
		'A19' => 'Etterord av',
		'A20' => 'Noter ved',
		'A21' => 'Kommentarer av',
		'A22' => 'Epilog av',
		'A23' => 'Forord av',
		'A24' => 'Introduksjon av',
		'A25' => 'Fotnoter av',
		'A26' => 'Biografi av',
		'A27' => 'Eksperimenter av',
		'A29' => 'Introduksjon og noter av',
		'A30' => 'Programvare utviklet av',
		'A31' => 'Bok og sangtekst av',
		'A32' => 'Bidrag av',
		'A33' => 'Appendiks av',
		'A34' => 'Indeks av',
		'A35' => 'Tegninger av',
		'A36' => 'Omslag av',
		'A37' => 'Forarbeid av',
		'A38' => 'Opprinnelig forfatter',
		'A39' => 'Kart av',
		'A40' => 'Fargelagt av',
		'A41' => 'Papireffekter ved',
		'A42' => 'Videreført av',
		'A43' => 'Intervjuer',
		'A44' => 'Intervjuobjekt',
		'A45' => 'Tegneseriemanus av',
		'A46' => 'Inker',
		'A47' => 'Fargelegging av',
		'A48' => 'Håndtekstet av',
		'A51' => 'Forskning av',
		'A99' => 'Annen hovedbidragsyter',
		'B01' => 'Redigert av',
		'B02' => 'Revidert av',
		'B03' => 'Gjenfortalt av',
		'B04' => 'Forkortet av',
		'B05' => 'Tilpasset av',
		'B06' => 'Oversatt av',
		'B07' => 'Som fortalt av',
		'B08' => 'Oversatt med kommentarer av',
		'B09' => 'Serien redigert av',
		'B10' => 'Redigert og oversatt av',
		'B11' => 'Hovedredaktør',
		'B12' => 'Gjesteredaktør',
		'B13' => 'Bindredaktør',
		'B14' => 'Redaksjonsmedlem',
		'B15' => 'Redaksjonskoordinator',
		'B16' => 'Sjefredaktør',
		'B17' => 'Grunnlagt av',
		'B18' => 'Tilrettelagt for publisering av',
		'B19' => 'Assisterende redaktør',
		'B20' => 'Konsulent/redaktør',
		'B21' => 'Generell redaktør',
		'B22' => 'Dramatisert av',
		'B23' => 'Juridisk redaktør',
		'B24' => 'Litterær redaktør',
		'B25' => 'Arrangert av (musikk)',
		'B26' => 'Teknisk redaktør',
		'B27' => 'Avhandling, veileder',
		'B28' => 'Avhandling, opponent',
		'B29' => 'Vitenskaplig redaktør',
		'B30' => 'Historisk rådgiver',
		'B31' => 'Opprinnelig redaktør',
		'B99' => 'Andre tilpasninger av',
		'C01' => 'Samlet av',
		'C02' => 'Utvalgt av',
		'C03' => 'Ikke-tekstlig materiale utvalgt av',
		'C04' => 'Kurator',
		'C99' => 'Andre utvalg av',
		'D01' => 'Produsent',
		'D02' => 'Regissør',
		'D03' => 'Dirigent',
		'D04' => 'Koreograf',
		'D99' => 'Annen ledelse av',
		'E01' => 'Skuespiller',
		'E02' => 'Danser',
		'E03' => 'Forteller',
		'E04' => 'Kommentator',
		'E05' => 'Solist (vokal)',
		'E06' => 'Solist (instrumental)',
		'E07' => 'Lest av',
		'E08' => 'Framført av (orkester, band, ensemble)',
		'E09' => 'Taler',
		'E10' => 'Presentert av',
		'E99' => 'Framført av',
		'F01' => 'Filmet/fotografert av',
		'F02' => 'Redaktør (film eller video)',
		'F99' => 'Andre opptak av',
		'Z01' => 'Assistert av',
		'Z02' => 'Dedikert til',
		'Z03' => 'Lovgiver',
		'Z04' => 'Peer reviewed',
		'Z98' => '(Ulike roller)',
		'Z99' => 'Annet',
	];

	/**
	 * Code List 17 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/17
	 */
	protected static $tr = [
		'A01' => 'Yazar',
		'A02' => 'Eş yazar',
		'A03' => 'Senaryo',
		'A04' => 'Libretto',
		'A05' => 'Söz',
		'A06' => 'Beste',
		'A07' => 'Sanatçı',
		'A08' => 'Fotoğraf sanatçısı',
		'A09' => 'Eser',
		'A10' => 'Eser fikri',
		'A11' => 'Tasarım',
		'A12' => 'Resimleyen',
		'A13' => 'Fotoğraflar',
		'A14' => 'Metin yazarı',
		'A15' => 'Önsöz',
		'A16' => 'Prolog',
		'A17' => 'Özetleyen',
		'A18' => 'Ek',
		'A19' => 'Sonsöz',
		'A20' => 'Notlar',
		'A21' => 'Açıklamalar',
		'A22' => 'Epilog',
		'A23' => 'Önsöz',
		'A24' => 'Sunuş',
		'A25' => 'Dipnotlar',
		'A26' => 'Anılar',
		'A27' => 'Yaşantı',
		'A29' => 'Sunuş ve notlar',
		'A30' => 'Yazılım',
		'A31' => 'Metin ve sözler',
		'A32' => 'Katkıda bulunan',
		'A33' => 'Ek yazarı',
		'A34' => 'Dizin',
		'A35' => 'Çizen',
		'A36' => 'Kapak tasarımı ya da çalışması',
		'A37' => 'Ön hazırlık',
		'A38' => 'İlk yazar',
		'A39' => 'Haritalar',
		'A40' => 'Tarayan veya renklendiren',
		'A41' => 'Kağıt mühendisliği tasarımcısı',
		'A42' => 'Devam yazarı',
		'A43' => 'Söyleşi',
		'A44' => 'Söyleşi yapılan',
		'A45' => 'Çizgi Roman senaryo yazarı',
		'A46' => 'Taramacı',
		'A47' => 'Renklendirici',
		'A48' => 'Kaligraf',
		'A51' => 'Araştıran',
		'A99' => 'Diğer birincil yaratıcı',
		'B01' => 'Editör',
		'B02' => 'Gözden geçiren',
		'B03' => 'Yeniden anlatan',
		'B04' => 'Kısaltan',
		'B05' => 'Uyarlayan',
		'B06' => 'Çeviren',
		'B07' => 'Aktaran',
		'B08' => 'Açıklamalı çeviren',
		'B09' => 'Dizi editörü',
		'B10' => 'Editör ve çeviren',
		'B11' => 'Baş editör',
		'B12' => 'Konuk editör',
		'B13' => 'Cilt editörü',
		'B14' => 'Yayın kurulu üyesi',
		'B15' => 'Editoryal eşgüdüm',
		'B16' => 'Yönetici editör',
		'B17' => 'Kurucu',
		'B18' => 'Yayına hazırlayan',
		'B19' => 'Yardımcı editör',
		'B20' => 'Danışman editör',
		'B21' => 'Genel editör',
		'B22' => 'Oyunlaştıran',
		'B23' => 'Genel raportör',
		'B24' => 'Edebi editör',
		'B25' => 'Düzenleyen (müzik)',
		'B26' => 'Teknik editör',
		'B27' => 'Tez danışmanı veya gözetmeni',
		'B28' => 'Tez jürisi',
		'B29' => 'Bilimsel editör',
		'B30' => 'Geçmişteki danışman',
		'B31' => 'Orijinal editör',
		'B99' => 'Diğer uyarlama',
		'C01' => 'Derleyen',
		'C02' => 'Seçen',
		'C03' => 'Non-text material selected by',
		'C04' => 'Curated by',
		'C99' => 'Diğer derleyen',
		'D01' => 'Yapımcı',
		'D02' => 'Yönetmen',
		'D03' => 'Şef',
		'D04' => 'Koreograf',
		'D99' => 'Diğer yöneten',
		'E01' => 'Oyuncu',
		'E02' => 'Dansçı',
		'E03' => 'Anlatıcı',
		'E04' => 'Yorumlayan',
		'E05' => 'Vokal solist',
		'E06' => 'Enstrümantal solist',
		'E07' => 'Okuyan',
		'E08' => 'İcra eden (orkestra, grup, topluluk)',
		'E09' => 'Konuşmacı',
		'E10' => 'Sunucu',
		'E99' => 'İcra eden',
		'F01' => 'Filme alan/fotoğraflayan',
		'F02' => 'Editör (film ya da video)',
		'F99' => 'Diğer türde kaydeden',
		'Z01' => 'Yardım eden',
		'Z02' => 'Armağan edildiği/adandığı kişi',
		'Z03' => 'Enacting jurisdiction',
		'Z04' => 'Peer reviewed',
		'Z98' => '(Çeşitli roller)',
		'Z99' => 'Diğer',
	];
}