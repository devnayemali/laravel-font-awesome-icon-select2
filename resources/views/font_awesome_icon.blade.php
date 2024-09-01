<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Font Awesome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-">
                <h1 class="border-bottom pb-3 mt-3 text-danger">Laravel Font Awesome</h1>
                <label for="select2-font">Select Font</label>
                <select name="select2-font" class="form-select select2" id="select2-font">
                    @foreach ($faIcons as $class => $icon)
                        <option data-icon="{{ $class }}" value="{{ $icon }}">
                            {{ $icon }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {

            let iformat = (icon) => $('<span><i class="fa ' + $(icon.element).data('icon') + '"></i> ' + icon.text +
                '</span>');

            $('.select2').select2({
                width: "100%",
                templateSelection: iformat,
                templateResult: iformat,
                allowHtml: true
            });

        });
    </script>
</body>

</html>
