<?php
namespace Search;
use function Collect\collection;

class Search {
    public function search($query, $data): array|object
    {
        $results = collection();
        foreach ($data as $item) {
            if (strpos($item, $query) !== false) {
                $results->push($item);
            }
        }
        return $results->toArray();
    }
}
?>
