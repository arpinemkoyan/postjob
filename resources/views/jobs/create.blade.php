@extends('layout')
@section('content')
    <div class="row justify-content-center w-100">
        <div class="row g-15" style="width: 72%">
            <div class="page-login-form box" id="login-form">
                <h3 class="text-left">Post a new Job</h3>
                <form class="post-form" method="post" action="{{ route('jobs.store') }}">
                    @csrf
                    <div class="form-group mb-3 col-12">
                        <div class="form-group">
                            <label for="title">Job Title</label>
                            <input type="text" class="form-control" id='title' name='title'
                                   placeholder="Write job title">
                            @if ($errors->has('title'))--}}
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="location">Location(optional)</label>
                            <input type="text" class="form-control" name='location' id="location"
                                   placeholder="Location e.g. London">
                            @if ($errors->has('location'))--}}
                            <span class="text-danger">{{ $errors->first('location') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <div class="search-category-container">
                                <select class="form-select" aria-label="Default select example" name="category_id"
                                        id="category">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="job_tag">Job Title</label>
                            <input type="text" class="form-control" name='job_tag' id="job_tag"
                                   placeholder="e.g.PHP,Social Media,Management">
                            <p class="text-left">Comma separate tags, such as required skills or technologies, for this
                                job.</p>
                            @if ($errors->has('job_tag'))--}}
                            <span class="text-danger">{{ $errors->first('job_tag ') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                        </div>
                        <section id="editor">
                            <div id="summernote" style="display: none;"><p>Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Rem quia aut modi fugit, ratione saepe perferendis odio optio
                                    repellat dolorum voluptas excepturi possimus similique veritatis nobis. Provident
                                    cupiditate delectus, optio?</p></div>
                            <div class="note-editor note-frame panel">
                                <div class="note-dropzone">
                                    <div class="note-dropzone-message"></div>
                                </div>
                                <div class="note-toolbar-wrapper panel-default" style="height: 72px;">
                                    <div class="note-toolbar panel-heading"
                                         style="position: relative; top: 0px; width: 100%;">
                                        <div class="note-btn-group btn-group note-style">
                                            <div class="note-btn-group btn-group">
                                                <button type="button"
                                                        class="note-btn btn btn-default btn-sm dropdown-toggle"
                                                        tabindex="-1" data-toggle="dropdown" title=""
                                                        data-original-title="Style"><i class="note-icon-magic"></i>
                                                    <span class="note-icon-caret"></span></button>
                                                <div class="dropdown-menu dropdown-style">
                                                    <li><a href="#" data-value="p"><p>Normal</p></a></li>
                                                    <li><a href="#" data-value="blockquote">
                                                            <blockquote>Quote</blockquote>
                                                        </a></li>
                                                    <li><a href="#" data-value="pre">
                                                            <pre>Code</pre>
                                                        </a></li>
                                                    <li><a href="#" data-value="h1"><h1>Header 1</h1></a></li>
                                                    <li><a href="#" data-value="h2"><h2>Header 2</h2></a></li>
                                                    <li><a href="#" data-value="h3"><h3>Header 3</h3></a></li>
                                                    <li><a href="#" data-value="h4"><h4>Header 4</h4></a></li>
                                                    <li><a href="#" data-value="h5"><h5>Header 5</h5></a></li>
                                                    <li><a href="#" data-value="h6"><h6>Header 6</h6></a></li>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="note-btn-group btn-group note-font">
                                            <button type="button" class="note-btn btn btn-default btn-sm note-btn-bold"
                                                    tabindex="-1" title="" data-original-title="Bold (CTRL+B)"><i
                                                    class="note-icon-bold"></i></button>
                                            <button type="button"
                                                    class="note-btn btn btn-default btn-sm note-btn-underline"
                                                    tabindex="-1" title="" data-original-title="Underline (CTRL+U)"><i
                                                    class="note-icon-underline"></i></button>
                                            <button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"
                                                    title="" data-original-title="Remove Font Style (CTRL+\)"><i
                                                    class="note-icon-eraser"></i></button>
                                        </div>
                                        <div class="note-btn-group btn-group note-fontname">
                                            <div class="note-btn-group btn-group">
                                                <button type="button"
                                                        class="note-btn btn btn-default btn-sm dropdown-toggle"
                                                        tabindex="-1" data-toggle="dropdown" title=""
                                                        data-original-title="Font Family"><span
                                                        class="note-current-fontname" style="font-family: sans-serif;">sans-serif</span>
                                                    <span class="note-icon-caret"></span></button>
                                                <div class="dropdown-menu note-check dropdown-fontname">
                                                    <li><a href="#" data-value="Arial"><i
                                                                class="note-icon-menu-check"></i> <span
                                                                style="font-family: 'Arial'">Arial</span></a></li>
                                                    <li><a href="#" data-value="Arial Black"><i
                                                                class="note-icon-menu-check"></i> <span
                                                                style="font-family: 'Arial Black'">Arial Black</span></a>
                                                    </li>
                                                    <li><a href="#" data-value="Comic Sans MS"><i
                                                                class="note-icon-menu-check"></i> <span
                                                                style="font-family: 'Comic Sans MS'">Comic Sans MS</span></a>
                                                    </li>
                                                    <li><a href="#" data-value="Courier New"><i
                                                                class="note-icon-menu-check"></i> <span
                                                                style="font-family: 'Courier New'">Courier New</span></a>
                                                    </li>
                                                    <li><a href="#" data-value="Helvetica"><i
                                                                class="note-icon-menu-check"></i> <span
                                                                style="font-family: 'Helvetica'">Helvetica</span></a>
                                                    </li>
                                                    <li><a href="#" data-value="Impact"><i
                                                                class="note-icon-menu-check"></i> <span
                                                                style="font-family: 'Impact'">Impact</span></a></li>
                                                    <li><a href="#" data-value="Tahoma"><i
                                                                class="note-icon-menu-check"></i> <span
                                                                style="font-family: 'Tahoma'">Tahoma</span></a></li>
                                                    <li><a href="#" data-value="Times New Roman"><i
                                                                class="note-icon-menu-check"></i> <span
                                                                style="font-family: 'Times New Roman'">Times New Roman</span></a>
                                                    </li>
                                                    <li><a href="#" data-value="Verdana"><i
                                                                class="note-icon-menu-check"></i> <span
                                                                style="font-family: 'Verdana'">Verdana</span></a></li>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="note-btn-group btn-group note-color">
                                            <div class="note-btn-group btn-group note-color">
                                                <button type="button"
                                                        class="note-btn btn btn-default btn-sm note-current-color-button"
                                                        tabindex="-1" title="" data-original-title="Recent Color"
                                                        data-backcolor="#FFFF00"><i
                                                        class="note-icon-font note-recent-color"
                                                        style="background-color: rgb(255, 255, 0);"></i></button>
                                                <button type="button"
                                                        class="note-btn btn btn-default btn-sm dropdown-toggle"
                                                        tabindex="-1" data-toggle="dropdown" title=""
                                                        data-original-title="More Color"><span
                                                        class="note-icon-caret"></span></button>
                                                <div class="dropdown-menu">
                                                    <div class="note-palette">
                                                        <div class="note-palette-title">Background Color</div>
                                                        <div>
                                                            <button type="button" class="note-color-reset btn btn-light"
                                                                    data-event="backColor" data-value="inherit">
                                                                Transparent
                                                            </button>
                                                        </div>
                                                        <div class="note-holder" data-event="backColor">
                                                            <div class="note-color-palette">
                                                                <div class="note-color-row">
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#000000"
                                                                            data-event="backColor" data-value="#000000"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#000000"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#424242"
                                                                            data-event="backColor" data-value="#424242"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#424242"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#636363"
                                                                            data-event="backColor" data-value="#636363"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#636363"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#9C9C94"
                                                                            data-event="backColor" data-value="#9C9C94"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#9C9C94"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#CEC6CE"
                                                                            data-event="backColor" data-value="#CEC6CE"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#CEC6CE"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#EFEFEF"
                                                                            data-event="backColor" data-value="#EFEFEF"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#EFEFEF"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#F7F7F7"
                                                                            data-event="backColor" data-value="#F7F7F7"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#F7F7F7"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FFFFFF"
                                                                            data-event="backColor" data-value="#FFFFFF"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FFFFFF"></button>
                                                                </div>
                                                                <div class="note-color-row">
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FF0000"
                                                                            data-event="backColor" data-value="#FF0000"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FF0000"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FF9C00"
                                                                            data-event="backColor" data-value="#FF9C00"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FF9C00"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FFFF00"
                                                                            data-event="backColor" data-value="#FFFF00"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FFFF00"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#00FF00"
                                                                            data-event="backColor" data-value="#00FF00"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#00FF00"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#00FFFF"
                                                                            data-event="backColor" data-value="#00FFFF"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#00FFFF"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#0000FF"
                                                                            data-event="backColor" data-value="#0000FF"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#0000FF"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#9C00FF"
                                                                            data-event="backColor" data-value="#9C00FF"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#9C00FF"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FF00FF"
                                                                            data-event="backColor" data-value="#FF00FF"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FF00FF"></button>
                                                                </div>
                                                                <div class="note-color-row">
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#F7C6CE"
                                                                            data-event="backColor" data-value="#F7C6CE"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#F7C6CE"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FFE7CE"
                                                                            data-event="backColor" data-value="#FFE7CE"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FFE7CE"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FFEFC6"
                                                                            data-event="backColor" data-value="#FFEFC6"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FFEFC6"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#D6EFD6"
                                                                            data-event="backColor" data-value="#D6EFD6"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#D6EFD6"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#CEDEE7"
                                                                            data-event="backColor" data-value="#CEDEE7"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#CEDEE7"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#CEE7F7"
                                                                            data-event="backColor" data-value="#CEE7F7"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#CEE7F7"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#D6D6E7"
                                                                            data-event="backColor" data-value="#D6D6E7"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#D6D6E7"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#E7D6DE"
                                                                            data-event="backColor" data-value="#E7D6DE"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#E7D6DE"></button>
                                                                </div>
                                                                <div class="note-color-row">
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#E79C9C"
                                                                            data-event="backColor" data-value="#E79C9C"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#E79C9C"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FFC69C"
                                                                            data-event="backColor" data-value="#FFC69C"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FFC69C"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FFE79C"
                                                                            data-event="backColor" data-value="#FFE79C"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FFE79C"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#B5D6A5"
                                                                            data-event="backColor" data-value="#B5D6A5"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#B5D6A5"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#A5C6CE"
                                                                            data-event="backColor" data-value="#A5C6CE"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#A5C6CE"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#9CC6EF"
                                                                            data-event="backColor" data-value="#9CC6EF"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#9CC6EF"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#B5A5D6"
                                                                            data-event="backColor" data-value="#B5A5D6"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#B5A5D6"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#D6A5BD"
                                                                            data-event="backColor" data-value="#D6A5BD"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#D6A5BD"></button>
                                                                </div>
                                                                <div class="note-color-row">
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#E76363"
                                                                            data-event="backColor" data-value="#E76363"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#E76363"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#F7AD6B"
                                                                            data-event="backColor" data-value="#F7AD6B"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#F7AD6B"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FFD663"
                                                                            data-event="backColor" data-value="#FFD663"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FFD663"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#94BD7B"
                                                                            data-event="backColor" data-value="#94BD7B"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#94BD7B"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#73A5AD"
                                                                            data-event="backColor" data-value="#73A5AD"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#73A5AD"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#6BADDE"
                                                                            data-event="backColor" data-value="#6BADDE"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#6BADDE"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#8C7BC6"
                                                                            data-event="backColor" data-value="#8C7BC6"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#8C7BC6"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#C67BA5"
                                                                            data-event="backColor" data-value="#C67BA5"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#C67BA5"></button>
                                                                </div>
                                                                <div class="note-color-row">
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#CE0000"
                                                                            data-event="backColor" data-value="#CE0000"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#CE0000"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#E79439"
                                                                            data-event="backColor" data-value="#E79439"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#E79439"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#EFC631"
                                                                            data-event="backColor" data-value="#EFC631"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#EFC631"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#6BA54A"
                                                                            data-event="backColor" data-value="#6BA54A"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#6BA54A"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#4A7B8C"
                                                                            data-event="backColor" data-value="#4A7B8C"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#4A7B8C"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#3984C6"
                                                                            data-event="backColor" data-value="#3984C6"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#3984C6"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#634AA5"
                                                                            data-event="backColor" data-value="#634AA5"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#634AA5"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#A54A7B"
                                                                            data-event="backColor" data-value="#A54A7B"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#A54A7B"></button>
                                                                </div>
                                                                <div class="note-color-row">
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#9C0000"
                                                                            data-event="backColor" data-value="#9C0000"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#9C0000"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#B56308"
                                                                            data-event="backColor" data-value="#B56308"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#B56308"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#BD9400"
                                                                            data-event="backColor" data-value="#BD9400"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#BD9400"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#397B21"
                                                                            data-event="backColor" data-value="#397B21"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#397B21"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#104A5A"
                                                                            data-event="backColor" data-value="#104A5A"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#104A5A"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#085294"
                                                                            data-event="backColor" data-value="#085294"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#085294"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#311873"
                                                                            data-event="backColor" data-value="#311873"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#311873"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#731842"
                                                                            data-event="backColor" data-value="#731842"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#731842"></button>
                                                                </div>
                                                                <div class="note-color-row">
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#630000"
                                                                            data-event="backColor" data-value="#630000"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#630000"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#7B3900"
                                                                            data-event="backColor" data-value="#7B3900"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#7B3900"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#846300"
                                                                            data-event="backColor" data-value="#846300"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#846300"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#295218"
                                                                            data-event="backColor" data-value="#295218"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#295218"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#083139"
                                                                            data-event="backColor" data-value="#083139"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#083139"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#003163"
                                                                            data-event="backColor" data-value="#003163"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#003163"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#21104A"
                                                                            data-event="backColor" data-value="#21104A"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#21104A"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#4A1031"
                                                                            data-event="backColor" data-value="#4A1031"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#4A1031"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="note-palette">
                                                        <div class="note-palette-title">Foreground Color</div>
                                                        <div>
                                                            <button type="button" class="note-color-reset btn btn-light"
                                                                    data-event="removeFormat" data-value="foreColor">
                                                                Reset to default
                                                            </button>
                                                        </div>
                                                        <div class="note-holder" data-event="foreColor">
                                                            <div class="note-color-palette">
                                                                <div class="note-color-row">
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#000000"
                                                                            data-event="foreColor" data-value="#000000"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#000000"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#424242"
                                                                            data-event="foreColor" data-value="#424242"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#424242"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#636363"
                                                                            data-event="foreColor" data-value="#636363"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#636363"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#9C9C94"
                                                                            data-event="foreColor" data-value="#9C9C94"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#9C9C94"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#CEC6CE"
                                                                            data-event="foreColor" data-value="#CEC6CE"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#CEC6CE"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#EFEFEF"
                                                                            data-event="foreColor" data-value="#EFEFEF"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#EFEFEF"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#F7F7F7"
                                                                            data-event="foreColor" data-value="#F7F7F7"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#F7F7F7"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FFFFFF"
                                                                            data-event="foreColor" data-value="#FFFFFF"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FFFFFF"></button>
                                                                </div>
                                                                <div class="note-color-row">
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FF0000"
                                                                            data-event="foreColor" data-value="#FF0000"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FF0000"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FF9C00"
                                                                            data-event="foreColor" data-value="#FF9C00"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FF9C00"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FFFF00"
                                                                            data-event="foreColor" data-value="#FFFF00"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FFFF00"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#00FF00"
                                                                            data-event="foreColor" data-value="#00FF00"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#00FF00"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#00FFFF"
                                                                            data-event="foreColor" data-value="#00FFFF"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#00FFFF"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#0000FF"
                                                                            data-event="foreColor" data-value="#0000FF"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#0000FF"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#9C00FF"
                                                                            data-event="foreColor" data-value="#9C00FF"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#9C00FF"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FF00FF"
                                                                            data-event="foreColor" data-value="#FF00FF"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FF00FF"></button>
                                                                </div>
                                                                <div class="note-color-row">
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#F7C6CE"
                                                                            data-event="foreColor" data-value="#F7C6CE"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#F7C6CE"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FFE7CE"
                                                                            data-event="foreColor" data-value="#FFE7CE"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FFE7CE"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FFEFC6"
                                                                            data-event="foreColor" data-value="#FFEFC6"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FFEFC6"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#D6EFD6"
                                                                            data-event="foreColor" data-value="#D6EFD6"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#D6EFD6"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#CEDEE7"
                                                                            data-event="foreColor" data-value="#CEDEE7"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#CEDEE7"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#CEE7F7"
                                                                            data-event="foreColor" data-value="#CEE7F7"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#CEE7F7"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#D6D6E7"
                                                                            data-event="foreColor" data-value="#D6D6E7"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#D6D6E7"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#E7D6DE"
                                                                            data-event="foreColor" data-value="#E7D6DE"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#E7D6DE"></button>
                                                                </div>
                                                                <div class="note-color-row">
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#E79C9C"
                                                                            data-event="foreColor" data-value="#E79C9C"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#E79C9C"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FFC69C"
                                                                            data-event="foreColor" data-value="#FFC69C"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FFC69C"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FFE79C"
                                                                            data-event="foreColor" data-value="#FFE79C"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FFE79C"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#B5D6A5"
                                                                            data-event="foreColor" data-value="#B5D6A5"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#B5D6A5"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#A5C6CE"
                                                                            data-event="foreColor" data-value="#A5C6CE"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#A5C6CE"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#9CC6EF"
                                                                            data-event="foreColor" data-value="#9CC6EF"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#9CC6EF"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#B5A5D6"
                                                                            data-event="foreColor" data-value="#B5A5D6"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#B5A5D6"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#D6A5BD"
                                                                            data-event="foreColor" data-value="#D6A5BD"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#D6A5BD"></button>
                                                                </div>
                                                                <div class="note-color-row">
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#E76363"
                                                                            data-event="foreColor" data-value="#E76363"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#E76363"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#F7AD6B"
                                                                            data-event="foreColor" data-value="#F7AD6B"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#F7AD6B"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#FFD663"
                                                                            data-event="foreColor" data-value="#FFD663"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#FFD663"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#94BD7B"
                                                                            data-event="foreColor" data-value="#94BD7B"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#94BD7B"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#73A5AD"
                                                                            data-event="foreColor" data-value="#73A5AD"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#73A5AD"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#6BADDE"
                                                                            data-event="foreColor" data-value="#6BADDE"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#6BADDE"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#8C7BC6"
                                                                            data-event="foreColor" data-value="#8C7BC6"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#8C7BC6"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#C67BA5"
                                                                            data-event="foreColor" data-value="#C67BA5"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#C67BA5"></button>
                                                                </div>
                                                                <div class="note-color-row">
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#CE0000"
                                                                            data-event="foreColor" data-value="#CE0000"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#CE0000"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#E79439"
                                                                            data-event="foreColor" data-value="#E79439"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#E79439"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#EFC631"
                                                                            data-event="foreColor" data-value="#EFC631"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#EFC631"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#6BA54A"
                                                                            data-event="foreColor" data-value="#6BA54A"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#6BA54A"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#4A7B8C"
                                                                            data-event="foreColor" data-value="#4A7B8C"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#4A7B8C"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#3984C6"
                                                                            data-event="foreColor" data-value="#3984C6"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#3984C6"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#634AA5"
                                                                            data-event="foreColor" data-value="#634AA5"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#634AA5"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#A54A7B"
                                                                            data-event="foreColor" data-value="#A54A7B"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#A54A7B"></button>
                                                                </div>
                                                                <div class="note-color-row">
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#9C0000"
                                                                            data-event="foreColor" data-value="#9C0000"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#9C0000"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#B56308"
                                                                            data-event="foreColor" data-value="#B56308"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#B56308"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#BD9400"
                                                                            data-event="foreColor" data-value="#BD9400"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#BD9400"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#397B21"
                                                                            data-event="foreColor" data-value="#397B21"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#397B21"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#104A5A"
                                                                            data-event="foreColor" data-value="#104A5A"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#104A5A"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#085294"
                                                                            data-event="foreColor" data-value="#085294"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#085294"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#311873"
                                                                            data-event="foreColor" data-value="#311873"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#311873"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#731842"
                                                                            data-event="foreColor" data-value="#731842"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#731842"></button>
                                                                </div>
                                                                <div class="note-color-row">
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#630000"
                                                                            data-event="foreColor" data-value="#630000"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#630000"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#7B3900"
                                                                            data-event="foreColor" data-value="#7B3900"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#7B3900"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#846300"
                                                                            data-event="foreColor" data-value="#846300"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#846300"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#295218"
                                                                            data-event="foreColor" data-value="#295218"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#295218"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#083139"
                                                                            data-event="foreColor" data-value="#083139"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#083139"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#003163"
                                                                            data-event="foreColor" data-value="#003163"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#003163"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#21104A"
                                                                            data-event="foreColor" data-value="#21104A"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#21104A"></button>
                                                                    <button type="button" class="note-color-btn"
                                                                            style="background-color:#4A1031"
                                                                            data-event="foreColor" data-value="#4A1031"
                                                                            title="" data-toggle="button" tabindex="-1"
                                                                            data-original-title="#4A1031"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="note-btn-group btn-group note-para">
                                            <button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"
                                                    title="" data-original-title="Unordered list (CTRL+SHIFT+NUM7)"><i
                                                    class="note-icon-unorderedlist"></i></button>
                                            <button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"
                                                    title="" data-original-title="Ordered list (CTRL+SHIFT+NUM8)"><i
                                                    class="note-icon-orderedlist"></i></button>
                                            <div class="note-btn-group btn-group">
                                                <button type="button"
                                                        class="note-btn btn btn-default btn-sm dropdown-toggle"
                                                        tabindex="-1" data-toggle="dropdown" title=""
                                                        data-original-title="Paragraph"><i
                                                        class="note-icon-align-left"></i> <span
                                                        class="note-icon-caret"></span></button>
                                                <div class="dropdown-menu">
                                                    <div class="note-btn-group btn-group note-align">
                                                        <button type="button" class="note-btn btn btn-default btn-sm"
                                                                tabindex="-1" title=""
                                                                data-original-title="Align left (CTRL+SHIFT+L)"><i
                                                                class="note-icon-align-left"></i></button>
                                                        <button type="button" class="note-btn btn btn-default btn-sm"
                                                                tabindex="-1" title=""
                                                                data-original-title="Align center (CTRL+SHIFT+E)"><i
                                                                class="note-icon-align-center"></i></button>
                                                        <button type="button" class="note-btn btn btn-default btn-sm"
                                                                tabindex="-1" title=""
                                                                data-original-title="Align right (CTRL+SHIFT+R)"><i
                                                                class="note-icon-align-right"></i></button>
                                                        <button type="button" class="note-btn btn btn-default btn-sm"
                                                                tabindex="-1" title=""
                                                                data-original-title="Justify full (CTRL+SHIFT+J)"><i
                                                                class="note-icon-align-justify"></i></button>
                                                    </div>
                                                    <div class="note-btn-group btn-group note-list">
                                                        <button type="button" class="note-btn btn btn-default btn-sm"
                                                                tabindex="-1" title=""
                                                                data-original-title="Outdent (CTRL+[)"><i
                                                                class="note-icon-align-outdent"></i></button>
                                                        <button type="button" class="note-btn btn btn-default btn-sm"
                                                                tabindex="-1" title=""
                                                                data-original-title="Indent (CTRL+])"><i
                                                                class="note-icon-align-indent"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="note-btn-group btn-group note-table">
                                            <div class="note-btn-group btn-group">
                                                <button type="button"
                                                        class="note-btn btn btn-default btn-sm dropdown-toggle"
                                                        tabindex="-1" data-toggle="dropdown" title=""
                                                        data-original-title="Table"><i class="note-icon-table"></i>
                                                    <span class="note-icon-caret"></span></button>
                                                <div class="dropdown-menu note-table">
                                                    <div class="note-dimension-picker">
                                                        <div class="note-dimension-picker-mousecatcher"
                                                             data-event="insertTable" data-value="1x1"
                                                             style="width: 10em; height: 10em;"></div>
                                                        <div class="note-dimension-picker-highlighted"></div>
                                                        <div class="note-dimension-picker-unhighlighted"></div>
                                                    </div>
                                                    <div class="note-dimension-display">1 x 1</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="note-btn-group btn-group note-insert">
                                            <button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"
                                                    title="" data-original-title="Link (CTRL+K)"><i
                                                    class="note-icon-link"></i></button>
                                            <button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"
                                                    title="" data-original-title="Picture"><i
                                                    class="note-icon-picture"></i></button>
                                            <button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1"
                                                    title="" data-original-title="Video"><i class="note-icon-video"></i>
                                            </button>
                                        </div>
                                        <div class="note-btn-group btn-group note-view">
                                            <button type="button" class="note-btn btn btn-default btn-sm btn-fullscreen"
                                                    tabindex="-1"><i class="note-icon-arrows-alt"></i></button>
                                            <button type="button" class="note-btn btn btn-default btn-sm btn-codeview"
                                                    tabindex="-1"><i class="note-icon-code"></i></button>
                                            <button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1">
                                                <i class="note-icon-question"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="note-editing-area">
                                    <div class="note-handle">
                                        <div class="note-control-selection">
                                            <div class="note-control-selection-bg"></div>
                                            <div class="note-control-holder note-control-nw"></div>
                                            <div class="note-control-holder note-control-ne"></div>
                                            <div class="note-control-holder note-control-sw"></div>
                                            <div class="note-control-sizing note-control-se"></div>
                                            <div class="note-control-selection-info"></div>
                                        </div>
                                    </div>
                                    <textarea class="note-codable"></textarea>
                                    <div class="note-editable" contenteditable="true" style="height: 250px;"><p>Lorem
                                            ipsum dolor sit amet, consectetur adipisicing elit. Rem quia aut modi fugit,
                                            ratione saepe perferendis odio optio repellat dolorum voluptas excepturi
                                            possimus similique veritatis nobis. Provident cupiditate delectus,
                                            optio?</p></div>
                                </div>
                                <div class="note-statusbar">
                                    <div class="note-resizebar">
                                        <div class="note-icon-bar"></div>
                                        <div class="note-icon-bar"></div>
                                        <div class="note-icon-bar"></div>
                                    </div>
                                </div>
                                <div class="modal link-dialog" aria-hidden="false" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title">Insert Link</h4></div>
                                            <div class="modal-body">
                                                <div class="form-group note-form-group"><label class="note-form-label">Text
                                                        to display</label><input
                                                        class="note-link-text form-control note-form-control  note-input"
                                                        type="text"></div>
                                                <div class="form-group note-form-group"><label class="note-form-label">To
                                                        what URL should this link go?</label><input
                                                        class="note-link-url form-control note-form-control note-input"
                                                        type="text" value="http://"></div>
                                                <div class="checkbox"><label for="sn-checkbox-open-in-new-window">
                                                        <input type="checkbox" id="sn-checkbox-open-in-new-window"
                                                               checked="">Open in new window</label></div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" href="#"
                                                        class="btn btn-primary note-btn note-btn-primary note-link-btn"
                                                        disabled="">Insert Link
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal" aria-hidden="false" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title">Insert Image</h4></div>
                                            <div class="modal-body">
                                                <div class="form-group note-form-group note-group-select-from-files">
                                                    <label class="note-form-label">Select from files</label><input
                                                        class="note-image-input note-form-control note-input"
                                                        type="file" name="files" accept="image/*" multiple="multiple">
                                                </div>
                                                <div class="form-group note-group-image-url" style="overflow:auto;">
                                                    <label class="note-form-label">Image URL</label><input
                                                        class="note-image-url form-control note-form-control note-input  col-md-12"
                                                        type="text"></div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" href="#"
                                                        class="btn btn-primary note-btn note-btn-primary note-image-btn"
                                                        disabled="">Insert Image
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal" aria-hidden="false" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title">Insert Video</h4></div>
                                            <div class="modal-body">
                                                <div class="form-group note-form-group row-fluid"><label
                                                        class="note-form-label">Video URL <small class="text-muted">(YouTube,
                                                            Vimeo, Vine, Instagram, DailyMotion or
                                                            Youku)</small></label><input
                                                        class="note-video-url form-control note-form-control note-input"
                                                        type="text"></div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" href="#"
                                                        class="btn btn-primary note-btn note-btn-primary note-video-btn"
                                                        disabled="">Insert Video
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal" aria-hidden="false" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title">Help</h4></div>
                                            <div class="modal-body" style="max-height: 300px; overflow: scroll;">
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>ENTER</kbd></label><span>Insert Paragraph</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+Z</kbd></label><span>Undoes the last command</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+Y</kbd></label><span>Redoes the last command</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+B</kbd></label><span>Set a bold style</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+I</kbd></label><span>Set a italic style</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+U</kbd></label><span>Set a underline style</span>
                                                <div class="help-list-item"></div>
                                                <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+S</kbd></label><span>Set a strikethrough style</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+BACKSLASH</kbd></label><span>Clean a style</span>
                                                <div class="help-list-item"></div>
                                                <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+L</kbd></label><span>Set left align</span>
                                                <div class="help-list-item"></div>
                                                <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+E</kbd></label><span>Set center align</span>
                                                <div class="help-list-item"></div>
                                                <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+R</kbd></label><span>Set right align</span>
                                                <div class="help-list-item"></div>
                                                <label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+J</kbd></label><span>Set full align</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM7</kbd></label><span>Toggle unordered list</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM8</kbd></label><span>Toggle ordered list</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+LEFTBRACKET</kbd></label><span>Outdent on current paragraph</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+RIGHTBRACKET</kbd></label><span>Indent on current paragraph</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM0</kbd></label><span>Change current block's format as a paragraph(P tag)</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM1</kbd></label><span>Change current block's format as H1</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM2</kbd></label><span>Change current block's format as H2</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM3</kbd></label><span>Change current block's format as H3</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM4</kbd></label><span>Change current block's format as H4</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM5</kbd></label><span>Change current block's format as H5</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM6</kbd></label><span>Change current block's format as H6</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+ENTER</kbd></label><span>Insert horizontal rule</span>
                                                <div class="help-list-item"></div>
                                                <label
                                                    style="width: 180px; margin-right: 10px;"><kbd>CTRL+K</kbd></label><span>Show Link Dialog</span>
                                            </div>
                                            <div class="modal-footer"><p class="text-center"><a
                                                        href="http://summernote.org/" target="_blank">Summernote
                                                        0.8.9</a> · <a href="https://github.com/summernote/summernote"
                                                                       target="_blank">Project</a> · <a
                                                        href="https://github.com/summernote/summernote/issues"
                                                        target="_blank">Issues</a></p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="form-group">
                            <label for="url">Application email / URL</label>
                            <input type="text" class="form-control" name='email_url' id="url"
                                   placeholder="Enter an email address or website URL">
                            @if ($errors->has('email_url'))--}}
                            <span class="text-danger">{{ $errors->first('email_url') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="deadline">Closing date(optional)</label>
                            <input type="text" class="form-control" name='deadline' id="deadline"
                                   placeholder="yyyy-mm-dd">
                            @if ($errors->has('deadline'))--}}
                            <span class="text-danger">{{ $errors->first('deadline') }}</span>
                            @endif
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-dark btn-block" id="job-btn">Submit Your Job</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/summernote.js"></script>

@endsection
