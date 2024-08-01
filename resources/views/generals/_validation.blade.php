 @if (is_object($errors) && $errors->any())
     <div class="alert alert-danger text-left">
         <p>Kesalahan terdeteksi:</p>
         <ol>
             @foreach ($errors->all() as $index => $item)
                 <li> {{ ucFirst($item) }}</li>
             @endforeach
         </ol>
     </div>
 @endif
