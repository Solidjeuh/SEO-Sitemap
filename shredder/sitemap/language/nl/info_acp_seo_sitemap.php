<?php

/**
*
* info_acp_seo_sitemap [English]
*
* @package phpBB3 SEO Sitemap
* @copyright (c) 2014 www.phpbb-work.ru
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'SEOMAP'						=> 'SEO Sitemap',
	'SEOMAP_VERSION'				=> 'Extensie versie: %s. Zie <a style="font-weight: bold;" href="https://www.phpbb.com/customise/db/extension/seo_sitemap/" onclick="window.open(this.href);return false;">extensie pagina</a> voor de nieuwste versie of om hulp te krijgen met deze extensie.',
	'SEOMAP_EXPLAIN'				=> 'Let erop dat het gebruik van optionele Prioriteit en Wijzigingsfrequentie instellingen voor u een aantal positieve resultaten kan opleveren, maar raad ze aan ze samen te gebruiken en echt te analyseren welke pagina’s belangrijker moeten worden gevonden dan andere voordat u beslissingen neemt. Als u niet weet of niet zeker bent, is het beter om deze opties uit te schakelen. <a href="http://www.sitemaps.org/protocol.html#xmlTagDefinitions" onclick="window.open(this.href);return false;">Klik hier</a> voor meer informatie over prioriteit en wijzigingsfrequentie. Voer 0 in als u prioriteit wilt uitschakelen.',
	'SEOMAP_SETTINGS'				=> 'SEO Sitemap Instellingen',
	'SEOMAP_SETTINGS_UPDATED'		=> '<strong>SEO Sitemap instellingen bijgewerkt.</strong>',
	'SEOMAP_SAVED'					=> 'Sitemap instellingen succesvol bijgewerkt.',
	'SEOMAP_EXCLUDED'				=> 'Uitgesloten forums',
	'SEOMAP_EXCLUDED_EXPLAIN'		=> 'Hier geselecteerde fora en onderwerpen daarbinnen worden uitgesloten van de sitemap.<br><strong>Opgelet:</strong> Categorieën en forums zonder onderwerpen zijn standaard uitgesloten.',
	'SEOMAP_CACHE_TIME'				=> 'Cache tijd',
	'SEOMAP_CACHE_TIME_EXPLAIN'		=> 'Om het laden van de server te verminderen, wordt de sitemap enige tijd in de cache opgeslagen. Na deze tijd zal het opnieuw worden gemaakt. Voer het aantal uren in waarvoor de sitemap wordt gecached of voer 0 in om caching uit te schakelen.',
	'SEOMAP_URL'					=> 'Sitemap URL: <a href="%s" onclick="window.open(this.href);return false;">%s</a>',
	'SEOMAP_URL_COUNT'				=> 'Totaal aantal URL’s in sitemap: %s',
	'SEOMAP_URL_LIMIT'				=> 'URL limiet',
	'SEOMAP_URL_LIMIT_EXPLAIN'		=> 'Maximum aantal URL’s in sitemapbestand, maximaal 50000 volgens sitemaps protocol. Verlaag deze waarde als u problemen ondervindt met overschrijdingen. Als het aantal URL’s op uw forum dit aantal overschrijdt, wordt de sitemap automatisch opgesplitst in meerdere bestandenfiles.',
	'SEOMAP_BATCH_SIZE'				=> 'Voorkeur batch verwerkingsgrootte',
	'SEOMAP_BATCH_SIZE_EXPLAIN'		=> 'Verlaag de batchgrootte bij PHP geheugenlimietfouten bij het genereren van sitegegevens. Merk op dat de tijd die nodig is voor het genereren van de sitemap aanzienlijk zal stijgen bij elke verlaging van de waarde van de batchgrootte.',
	'SEOMAP_PRIORITY_0'				=> 'Prioriteit voor standaardonderwerpen',
	'SEOMAP_PRIORITY_1'				=> 'Prioriteit voor sticky onderwerpen',
	'SEOMAP_PRIORITY_2'				=> 'Prioriteit voor aankondigingen',
	'SEOMAP_PRIORITY_3'				=> 'Prioriteit voor globale aankondigingen',
	'SEOMAP_PRIORITY_4'				=> 'Prioriteit voor artikelonderwerpen',
	'SEOMAP_PRIORITY_F'				=> 'Prioriteit voor forums',
	'SEOMAP_FREQ_0'					=> 'wijzigingsfrequentie voor standaardonderwerpen',
	'SEOMAP_FREQ_1'					=> 'wijzigingsfrequentie voor sticky onderwerpen',
	'SEOMAP_FREQ_2'					=> 'wijzigingsfrequentie voor aankondigingen',
	'SEOMAP_FREQ_3'					=> 'wijzigingsfrequentie voor globale aankondigingen',
	'SEOMAP_FREQ_4'					=> 'wijzigingsfrequentie voor artikelonderwerpen',
	'SEOMAP_FREQ_F'					=> 'wijzigingsfrequentie voor forums',
	'SEOMAP_FREQ_NEVER'				=> 'Nooit',
	'SEOMAP_FREQ_YEARLY'			=> 'Jaarlijks',
	'SEOMAP_FREQ_MONTHLY'			=> 'Maandelijks',
	'SEOMAP_FREQ_WEEKLY'			=> 'Wekelijks',
	'SEOMAP_FREQ_DAILY'				=> 'Dagelijks',
	'SEOMAP_FREQ_HOURLY'			=> 'Ieder uur',
	'SEOMAP_FREQ_ALWAYS'			=> 'Altijd',
	'SEOMAP_NO_DATA'				=> 'Geen gegevens voor sitemap.',
	'SEOMAP_NO_FILE'				=> 'Kan bestand niet openen:<br><strong>%s</strong>',
	'SEOMAP_CANT_WRITE'				=> 'Map <strong>%s</strong> bestaat niet of is niet beschrijfbaar. Repareer het handmatig met behulp van FTP cliënt.',
	'SEOMAP_COPYRIGHT'				=> 'phpBB MODs en extensies',

// Sync section
	'SEOMAP_SYNC_COMPLETE' 			=> 'Synchronisatie is voltooid.<br><br><a style="font-weight: bold;" href="%s">« Ga terug naar instellingen</a>',
	'SEOMAP_SYNC_PROCESS'			=> '<strong>Bezig met synchroniseren. Sluit deze pagina niet en onderbreek het script niet voordat alle acties zijn voltooid.</strong><br><br><strong>%1$s%%</strong> voltooid. Verwerking <strong>%2$s</strong> van alle berichten. Totaal berichten: <strong>%3$s</strong>.',
	'SEOMAP_SYNC_REQ' 				=> 'U moet de wijzigingsdatums van berichten synchroniseren voordat u deze sitemap gebruikt. Dit is nodig om de laatste wijzigingstijd van de forumpagina’s te genereren. <a style="font-weight: bold;" href="%s">Klik hier om te synchroniseren</a>.',
));
