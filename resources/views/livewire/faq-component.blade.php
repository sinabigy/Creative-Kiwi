@foreach (\App\Models\Faq::all() as $faq)
<li data-aos="fade-up" data-aos="fade-up" data-aos-delay="{{ ($faq->id) * 100}}">
    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-{{$faq->id}}">{{ $faq->title }} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
    <div id="faq-list-{{$faq->id}}" class="collapse show" data-bs-parent=".faq-list">
      <p>
        {{ $faq->body }}
      </p>
    </div>
  </li>
@endforeach

