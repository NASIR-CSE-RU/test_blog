<div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>


                            <div class="col-md-6">
                                <div class="form-check-inline">
                                    <label class="form-check-label col-form-label">
                                        <input type="radio" class="form-check-input" value="post"  name="type">Post
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label col-form-label">
                                        <input type="radio" class="form-check-input" value="video" name="type"> Video
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="section" class="col-md-4 col-form-label text-md-right">{{ __('Section') }}</label>

                            <div class="col-md-6">
                                <div class="form-check-inline">
                                    <label class="form-check-label col-form-label">
                                        <input type="radio" class="form-check-input" value="1" name="section">section 1
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label col-form-label">
                                        <input type="radio" class="form-check-input" value="2" name="section"> section 2
                                    </label>
                                </div>
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="image">Image</label>
                                <div class="col-md-6">
                                    <input type="file" name="image" class="form-control">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="message" class="col-md-4 col-form-label text-md-right">Message</label>
                            <div class="col-md-6">
                            <textarea name="body" id="body" cols="30" rows="5" class="form-control  @error('body') is-invalid @enderror"></textarea>
                                @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Post') }}
                                </button>
                            </div>
                        </div>