@csrf
        

<div class="container">
    <div class="row mt-2">
        <input type="text" name="nom" id="nom" placeholder="nom" class="input" value="{{ old('nom'), $reservation->nom }}">
            @error('nom')
            <div>
                {{ $message }}
            </div>
            @enderror
    </div>

    <div class="row mt-2">
        <input type="tel" name="tel" id="tel" placeholder="tel" class="input" value="{{ old('tel') }}">
            @error('tel')
            <div>
                {{ $message }}
            </div>
            @enderror
    </div>

    <div class="row mt-2">
            <input type="date" name="date" id="date" class="input" value="{{ old('date'), $reservation->date  }}">
            @error('date')
            <div>
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="row mt-2">
            <input type="time" name="heure" id="heure" class="input" value="{{ old('heure') }}">
            @error('heure')
            <div>
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="row mt-2">
            <input type="number" name="personnes" id="personnes" class="input" placeholder="nb personnes" value="{{ old('personnes') }}">
            @error('personne')
            <div>
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="row mt-2">
            <textarea name="commentaires" id="commentaires" cols="30" rows="10" placeholder="commentaires...">{{ old('commentaires') }}</textarea>
        </div>

        <div class="row mt-2">
            <div class="col">
                <label for="confirmation_null">
                    <input type="radio" name="confirmation" id="confirmation_null" value="null" @if (old('confirmation', $reservation->confirmation) == 'null') checked @endif> Non confirmé
                </label>

                <label for="confirmation_1">
                    <input type="radio" name="confirmation" id="confirmation_1" value="1" @if (old('confirmation', $reservation->confirmation) == '1') checked @endif> Confirmé
                </label>

                <label for="confirmation_0">
                    <input type="radio" name="confirmation" id="confirmation_0" value="0" @if (old('confirmation',) == '0') checked @endif> Annulé
                </label>
            </div>
        </div>

        <div class="row mt-2">
            <button type="submit" class="bg-success p-3 w-50 mx-auto">Valider</button>
        </div>
</div>