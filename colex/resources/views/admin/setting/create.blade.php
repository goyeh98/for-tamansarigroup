<form action="{{ url('admin/settings') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="google_analytics" class="form-label">Google Analytics</label>
        <textarea name="google_analytics" id="google_analytics" class="form-control @error('google_analytics') is-invalid @enderror" cols="30" rows="10" required>{{ old('google_analytics') }}</textarea>
        @error('google_analytics')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
</form>
