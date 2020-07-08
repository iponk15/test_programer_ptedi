<div class="card card-custom card-fit card-border bg-light-success">
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon">
                <i class="flaticon2-pin text-primary"></i>
            </span>
            <h3 class="card-label">
                History Education
                <small></small>
            </h3>
        </div>
    </div>
    <div class="card-body pt-2">
        <div class="card card-custom gutter-b">
            <!-- <div class="card-body"> -->
                <div class="example example-basic">
                    <div class="example-preview">
                        <div class="timeline timeline-2">
                            <div class="timeline-bar"></div>
                            @foreach($records as $value)
                                <div class="timeline-item">
                                    <div class="timeline-badge bg-danger"></div>
                                    <div class="timeline-content d-flex align-items-center justify-content-between">
                                        <span class="mr-3">{{ $value->pendidikan_nama }}</span>
                                        <span class="text-muted text-right">{{ $value->pendidikan_catatan }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </div>
</div>