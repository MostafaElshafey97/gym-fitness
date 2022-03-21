<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateTSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TSites', function (Blueprint $table) {
            $table->string('Code_Affaire', 13);
            $table->string('Code_Site', 20);
            $table->string('code_agence', 3)->nullable();
            $table->dateTime('ddeb_chantier')->nullable();
            $table->dateTime('dfin_chantier')->nullable();
            $table->string('adress_proj', 250)->nullable();
            $table->string('CodeWilaya', 2)->nullable();
            $table->string('CodeCommune', 5)->nullable();
            $table->string('maitre_oeuv', 7)->nullable();
            $table->string('entrep_real', 7)->nullable();
            $table->string('bureau_etud', 7)->nullable();
            $table->decimal('DureeControleplan', 18)->nullable();
            $table->decimal('DureeControletrvChantier', 18)->nullable();
            $table->decimal('Dureecontrolemateriaux', 18)->nullable();
            $table->decimal('Dureeredactionrapports', 18)->nullable();
            $table->decimal('DureeConsultationDocumentaire', 18)->nullable();
            $table->decimal('DureeUtilisationlogicielle', 18)->nullable();
            $table->decimal('DureeReuniontravail', 18)->nullable();
            $table->decimal('DureeActionrecouvrement', 18)->nullable();
            $table->decimal('DureeAutres', 18)->nullable();
            $table->string('DureeAutresPrecisez', 250)->nullable();
            $table->decimal('DureeEssaiprelevBeton', 18)->nullable();
            $table->decimal('DureeEssaiprelevAcier', 18)->nullable();
            $table->decimal('DureeEssaiPrelevAutresmat', 18)->nullable();
            $table->decimal('DureeEssaiAutres', 18)->nullable();
            $table->string('DureeEssaiAutresPrecisez', 250)->nullable();
            $table->integer('statut_aff')->nullable();
            $table->integer('statut_ouv')->nullable();
            $table->decimal('SurfConstruitM2', 18)->nullable();
            $table->boolean('ValidationOuvertureProjet')->nullable();
            $table->dateTime('DateCreationsite')->nullable();
            $table->dateTime('DateDerniereModifsite')->nullable();
            $table->char('UserCreationsite', 5)->nullable();
            $table->char('UserDerniereModifsite', 5)->nullable();
            $table->string('RefCahierClause', 200)->nullable();
            $table->string('CahierClauseRecu', 5)->nullable();
            $table->integer('CahierClauseNrapport')->nullable();
            $table->char('Chargeaffairesite', 5)->nullable();
            $table->string('chargedaffaireHistorise', 5)->nullable();
            $table->boolean('ValidOuvPrjDir')->nullable();
            $table->dateTime('DatePriseChargersiteActuel')->nullable();
            $table->text('AvisCahierDescTechCmt')->nullable();
            $table->text('DescriptSite')->nullable();
            $table->char('IngControleSite', 5)->nullable();
            $table->decimal('NbrePrevVisite', 18)->nullable();
            $table->decimal('NbreBatiments', 18)->nullable();
            $table->decimal('NbreLogts', 18)->nullable();
            $table->decimal('NbreAncienVisit', 18)->nullable();
            $table->decimal('CodeSiteGED', 18)->nullable();
            $table->decimal('NbreRapCtrle', 18)->nullable();
            $table->decimal('NbreRapSynthese', 18)->nullable();
            $table->decimal('AncienArretChantier', 18)->nullable();
            $table->string('nouvoCode_Site', 4)->nullable();
            $table->boolean('AttenteValFO')->nullable();
            $table->boolean('AttenteValRCT')->nullable();
            $table->boolean('AttenteValCourrier')->nullable();
            $table->boolean('AttenteValFF')->nullable();
            $table->decimal('DureeControleConception', 18)->nullable();
            $table->decimal('DureeControleCRCT', 18)->nullable();
            $table->decimal('DureeControleDocumentaire', 18)->nullable();
            $table->decimal('DureeControleRFCT', 18)->nullable();
            $table->dateTime('DateDebutControle')->nullable();
            $table->integer('NbrBlocIntroduit')->nullable();
            $table->dateTime('DateModif')->nullable();
            $table->boolean('AttenteValRecev')->nullable();
            $table->boolean('ValidFeuilTemp')->nullable();
            $table->decimal('Distance', 18)->nullable();
            $table->string('zone_sismique', 50)->nullable();
            $table->string('Projet_C_EtudeStabExca', 50)->nullable();
            $table->string('EtatProjetCesCet', 20)->nullable();
            $table->dateTime('DateDemarrageCesCet')->nullable();
            $table->boolean('AttenteValCRCT')->nullable();
            $table->boolean('AttenteValRCir')->nullable();
            $table->boolean('AttenteValRFCT')->nullable();
            $table->dateTime('programmeliverableDate')->nullable();
            $table->string('programmeliverableTotalPartiel', 20)->nullable();
            $table->integer('programmeliverableUniteLivrable')->nullable();
            $table->string('adress_projArb', 250)->nullable();
            $table->primary(['Code_Affaire', 'Code_Site']);
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TSites');
    }
}