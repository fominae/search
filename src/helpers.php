<?php
namespace Search;

function search_in_data(string $query = '', array $data = []): SearchComponent
{
    return new SearchComponent($query, $data);
}
