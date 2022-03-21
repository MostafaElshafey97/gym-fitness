<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateTaffaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Taffaire', function (Blueprint $table) {
            $table->string('Code_Affaire', 13)->primary();
            $table->string('IntituleAffaire');
            $table->string('code_agence', 3);
            $table->dateTime('dent_dem')->nullable();
            $table->dateTime('DateEtablConv')->nullable();
            $table->dateTime('dapprob_conv')->nullable();
            $table->text('descript_projet')->nullable();
            $table->string('MaitreOuvrage', 7);
            $table->string('Typeouvrage', 3)->nullable();
            $table->string('TypeSousouvrage', 3)->nullable();
            $table->char('TypeCocontractant', 1)->nullable();
            $table->string('Cocontractant', 7);
            $table->integer('statut_aff')->nullable();
            $table->integer('statut_ouv')->nullable();
            $table->char('chargedaffaire', 5)->nullable();
            $table->decimal('MntTrvSoumis', 18)->nullable();
            $table->dateTime('RefRapport')->nullable();
            $table->boolean('ClotureREP')->nullable();
            $table->boolean('ClotureFicheOuvProjet')->nullable();
            $table->dateTime('DateCreationAffaire')->nullable();
            $table->dateTime('DateDerniereModifAffaire')->nullable();
            $table->char('UserCreationAffaire', 5)->nullable();
            $table->char('UserDerniereModifAffaire', 5)->nullable();
            $table->char('Multisite', 1);
            $table->boolean('SaisieIngenieur')->nullable();
            $table->dateTime('DatePriseChargerAffActuel')->nullable();
            $table->string('MarcheN', 100)->nullable();
            $table->boolean('ValidRensAffaireDir')->nullable();
            $table->boolean('TraiteParRCTC')->nullable()->default(true);
            $table->string('TypeConvention', 20)->nullable();
            $table->decimal('MontantContrat', 18)->nullable();
            $table->decimal('DelaiContrat', 18)->nullable();
            $table->decimal('PeriodeGrace', 18)->nullable();
            $table->boolean('ExistCaution')->nullable()->default(false);
            $table->decimal('MontantCaution', 18)->nullable();
            $table->char('MotifLiberCaution', 3)->nullable();
            $table->char('SiReceptCaution', 3)->nullable()->default('Non');
            $table->dateTime('DateReceptCaution')->nullable();
            $table->boolean('ValidationEcheance')->nullable();
            $table->boolean('VerrouillageEcheance')->nullable();
            $table->string('NumeroCaution', 50)->nullable();
            $table->decimal('MONTANTFACTURE', 18)->nullable();
            $table->decimal('CREANCES', 18)->nullable();
            $table->decimal('RESTEAFACTURER', 18)->nullable();
            $table->string('MainLeveRecup', 4)->nullable();
            $table->dateTime('MainLeveDateRecup')->nullable();
            $table->boolean('InfoExiste')->nullable();
            $table->boolean('DispPlanExe')->nullable();
            $table->boolean('DispPlanConcept')->nullable();
            $table->boolean('DispRapSol')->nullable();
            $table->boolean('DispNotCal')->nullable();
            $table->boolean('DispCvtFac')->nullable();
            $table->boolean('DispCorrespond')->nullable();
            $table->boolean('DispPVchantier')->nullable();
            $table->boolean('DispRapCtrl')->nullable();
            $table->boolean('DispPVEssaiMat')->nullable();
            $table->boolean('DispPVReunion')->nullable();
            $table->string('SituationCommerciale', 5)->nullable();
            $table->string('NumEnregsitrementCVT', 30)->nullable();
            $table->string('CodeDossier', 10)->nullable();
            $table->string('NbBoite', 5)->nullable();
            $table->string('nbPlan', 5)->nullable();
            $table->string('entreposage', 50)->nullable();
            $table->boolean('ValideArchive')->nullable();
            $table->boolean('EtatArchive')->nullable();
            $table->string('filiale', 1)->nullable();
            $table->string('typedossier', 3)->nullable();
            $table->dateTime('DateEnregistrement')->nullable();
            $table->integer('AnneeCvt')->nullable();
            $table->string('EtenduCtrl', 200)->nullable();
            $table->string('Observation', 250)->nullable();
            $table->string('AgenceDorigine', 3)->nullable();
            $table->boolean('VisibleGCPRO')->nullable()->default(true);
            $table->dateTime('DateModif')->nullable();
            $table->boolean('TraiterRCTCexe')->nullable();
            $table->dateTime('DateVersementSrvCentral')->nullable();
            $table->string('MaitreOuvrageNom')->nullable();
            $table->string('MaitreOuvrageAdresse')->nullable();
            $table->string('CodeWilaya', 2)->nullable();
            $table->string('CodeCommune', 5)->nullable();
            $table->string('MaitreOuvrageTel')->nullable();
            $table->string('MaitreOuvrageFax')->nullable();
            $table->string('MaitreOuvrageMail')->nullable();
            $table->dateTime('datePrevTrvOLD')->nullable();
            $table->dateTime('datePrevCtrlOLD')->nullable();
            $table->decimal('MontantPrevTrvOLD', 18)->nullable();
            $table->decimal('DelaiPrevTrvOLD', 18)->nullable();
            $table->string('code_agenceGuichet', 3)->nullable();
            $table->boolean('VisibleTraitement')->nullable();
            $table->string('TypeContratAff', 50)->nullable();
            $table->string('IntituleOperation')->nullable();
            $table->string('CodeAntenne', 2)->nullable();
            $table->integer('NbrSite')->nullable()->default(1);
            $table->string('Nom_DR', 4)->nullable();
            $table->decimal('MontantContratTotal', 18)->nullable();
            $table->decimal('DelaiTotal', 18)->nullable();
            $table->decimal('TVA', 18)->nullable();
            $table->string('EtatActivite', 20)->nullable();
            $table->string('IntituleAffaireArb')->nullable();
            $table->string('IntituleOperationArb')->nullable();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Taffaire');
    }
}