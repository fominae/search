<?php
namespace Search;

class Search {
    public function search($query, $data): array
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