<?php

use function Pest\Laravel\get;

it('has a entrypoint page', function () {
    get(route('slice.index'))->assertStatus(200);
});
