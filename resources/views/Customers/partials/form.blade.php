<div class="form-group">
    <label for="my-dropzone">Files</label>
    <div id="my-dropzone" class="dropzone"></div>
</div>
@section('script')
    <script>
        Dropzone.autoDiscover = false;

        var myDropzone = new Dropzone("div#my-dropzone", {
            url: "/files",
        })
        var myDropzone = new Dropzone("div#my-dropzone", {...});

        myDropzone.on("success", function(file, data) {
            $("<input>", {
                type: "hidden",
                name: "attachments[]",
                class: "attachments",
                value: data.id
            }).appendTo(form);
        });
    </script>

@stop
