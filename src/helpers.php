<?php
namespace Search;

function search_in_data(string $query = '', array $data = []): Search
{
    return new Search($query, $data);
}
