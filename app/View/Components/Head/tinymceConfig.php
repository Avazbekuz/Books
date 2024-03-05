<?php

namespace App\View\Components\Head;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tinymceConfig extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view("<script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy='origin'></script>
 <script>
   tinymce.init({
     selector: 'textarea#myeditorinstance',
     plugins: 'code table lists',
     toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
   });
</script>");
    }
}
