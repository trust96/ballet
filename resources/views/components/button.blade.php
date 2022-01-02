<button {{ $attributes->merge(['class' => 'px-4 button button--'.$variant.' button--'.$size]) }} >
  <label class="button__label">{{$slot}}</label>
</button>
