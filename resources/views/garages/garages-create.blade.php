@include('partiels.header')

<div class="container">
    <h2>Créer le garage</h2>
</div>
<div class="container">
    <form action="{{ route('garages.store')}}" method="POST">
        @csrf
        <table class="table table-hover">
            <tr>
                <th><label for="adresse" class="form-label">Adresse</label></th>
                <td>
                    <input type="text" name="adresse" id="adresse" class="form-control" required>
                    @error('adresse')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <th><label for="montant_charges" class="form-label">Montant des Charges</label></th>
                <td>
                    <input type="number" name="montant_charges" id="montant_charges" class="form-control" required>
                    @error('montant_charges')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <th><label for="prix_particulier" class="form-label">Prix Particulier</label></th>
                <td>
                    <input type="number" name="prix_particulier" id="prix_particulier" class="form-control" required>
                    @error('prix_particulier')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <th><label for="prix_entreprise" class="form-label">Prix Entreprise</label></th>
                <td>
                    <input type="number" name="prix_entreprise" id="prix_entreprise" class="form-control" required>
                    @error('prix_entreprise')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <th><label for="remboursement_emprunt_mois" class="form-label">Remboursement Emprunt par Mois</label></th>
                <td>
                    <input type="number" name="remboursement_emprunt_mois" id="remboursement_emprunt_mois" class="form-control" required>
                    @error('remboursement_emprunt_mois')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <th><label for="date_achat" class="form-label">Date d'Achat</label></th>
                <td>
                    <input type="date" name="date_achat" id="date_achat" class="form-control" required>
                    @error('date_achat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <th><label for="date_fin_remboursement_emprunt" class="form-label">Date de Fin de Remboursement de l'Emprunt</label></th>
                <td>
                    <input type="date" name="date_fin_remboursement_emprunt" id="date_fin_remboursement_emprunt" class="form-control"required>
                    @error('date_fin_remboursement_emprunt')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" class="btn btn-block btn-primary">Créer le garage</button></td>
            </tr>
        </table>
    </form>

    <a class="btn btn-block btn-secondary" href="{{ route('garages.index') }}">Retour à la liste</a>
</div>

@include('partiels.footer')
