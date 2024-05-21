<form action="{{route('generator.create')}}" method="POST">
    @csrf
    @method('PUT')
    <div class="input-group mb-3">

        <input class="form-control" type="text" name="Lowercase letters" value="Lowercase letters" aria-label="Disabled input example" disabled readonly>
        <input class="form-control" type="text" name="examlow" value="a-b-c-d-e-f-g-h-i-j" aria-label="Disabled input example" disabled readonly>
        <div class="input-group-text">
            <input class="form-control" type="number" id="quantitylower" value="3" name="qlower" min="3" max="6">
        </div>
    </div>


    <div class="input-group mb-3">
        <input class="form-control" type="text" name="Capital letters" value="Capital letters" aria-label="Disabled input example" disabled readonly>
        <input class="form-control" type="text" name="examcap" value="A-B-C-D-E-F-G-H-I" aria-label="Disabled input example" disabled readonly>
        <div class="input-group-text">
            <input class="form-control" type="number" id="quantitycapital" value="3" name="qcapital" min="3" max="6">
        </div>
    </div>


    <div class="input-group mb-3">
        <input class="form-control" type="text" name="Numbers" value="Numbers" aria-label="Disabled input example" disabled readonly>
        <input class="form-control" type="text" name="examnum" value="1-2-3-4-5-6-7-8-9-0" aria-label="Disabled input example" disabled readonly>
        <div class="input-group-text">
            <input class="form-control" type="number" id="quantitynumber" value="3" name="qnumber" min="3" max="6">
        </div>
    </div>

    <div class="input-group mb-3">
        <input class="form-control" type="text" name="Special Characters" value="Special Characters" aria-label="Disabled input example" disabled readonly>
        <input class="form-control" type="text" name="examchar" value='!-"-$-%-&-/-(-)-=?' aria-label="Disabled input example" disabled readonly>
        <div class="input-group-text">
            <input class="form-control" type="number" id="quantitycharacter" value="3" name="qcharacter" min="3" max="6">
        </div>
    </div>

    <div class="text-center pt-1 mb-5 pb-1">
        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                type="submit">Create Safe Password
        </button>
    </div>

</form>