<div class="flex pt-4 px-6 justify-between">
  <div class="relative">
    <h4 class="absolute -top-6 bg-main py-5 px-10 w-[180px] text-lg font-bold text-center text-white rounded-sm shadow-lg">{{ $mainTitle }}</h4>
  </div>
  @if($addbtn=='y')
  <a class="py-2 px-4 flex items-center justify-center border border-neutral-300 gap-1 text-neutral-500 rounded-sm text-sm hover:border-stone-800 hover:bg-stone-800 hover:text-white" href="{{ URL::asset($active.'_add') }}">
    <svg class="w-[14px] fill-current" viewBox="0 0 24 24">
      <path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"></path>
    </svg>
    新增
  </a>
  @endif
</div>