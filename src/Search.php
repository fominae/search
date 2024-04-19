<?php
namespace Search;

use Collect\Collect;
use function Collect\collection;

class Search {
    public function search($query, $data): array
    {
        $dataCollection = collection($data);
        $results = collection();
        $dataCollection->each(function ($item) use ($query, $results) {
            if (strpos($item, $query) !== false) {
                $results->push($item);
            }
        });
        return $results->toArray();
    }
}
