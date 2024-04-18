<?php
namespace Search;

class Search {
    public function search($query, $data): array|object
    {
        $results = [];
        foreach ($data as $item) {
            if (strpos($item, $query) !== false) {
                $results[] = $item;
            }
        }
        return $results;
    }
}
?>