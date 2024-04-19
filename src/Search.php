<?php
namespace Search;
use function Collect\collection;

class Search {
    public function search($query, $data): array|object
    {
        $dataCollection = collection($data);
        $results = $dataCollection->map(function ($item) use ($query) {
            if (strpos($item, $query) !== false) {
                return $item;
            }
        });
        return $results;
    }
}
?>
