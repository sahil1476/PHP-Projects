
@props(['job'])

<x-panel class="flex gap-x-6 mt-4 mb-8">
<div>
        <x-employer-logo :employer="$job->employer" />
        </div>
        <div class="flex-1 flex flex-col">
            <a class="self-start text-sm text-green-500">{{ $job->employer->name }}</a>
            
                <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-600">
                <a href="{{ $job->url }}" target="_blank">
                   {{ $job->title }}
                   </a>
                </h3>
                <p class="text-sm text-green-600 mt-auto">{{ $job->salary }}</p>
        </div>    
                  <div>
                  @foreach($job->tags as $tag)
                      <x-tag :$tag />
                  @endforeach
                  </div>
                
</div>  
</x-panel>
