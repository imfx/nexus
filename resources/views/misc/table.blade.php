<div class="card">
	@isset ($title)
	    @include('nexus::misc/card/card-header', ['title' => $title])
	@endisset

	@if (count($items))
		@if (isset($tools) && is_bool($tools) == false)
			<div class="card-header">
				{{ $tools }}
			</div>
		@elseif ((isset($tools) == false || (isset($tools) && $tools != false)))
			<div class="card-header">
				@include('nexus::misc/table-tools')
			</div>
		@endif

		<div class="table-responsive">
			<table class="table table-hover table-striped card-table datatable">

				@isset($thead)
					<thead>
						{{ $thead }}
					</thead>
				@endisset

				@isset($tbody)
					<tbody>
						{{ $tbody }}
					</tbody>
				@endisset

				@isset($tfoot)
					<tfoot>
						{{ $tfoot }}
					</tfoot>
				@endisset

			</table>
			{{-- END datatables --}}
		</div>
		{{-- END table-responsive --}}
	@else
		@include('nexus::layouts/empty')
	@endif
</div>
