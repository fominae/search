<?php
namespace Search;

use Collect\Collect;
use function Collect\collection;

class Search {
    public function search($query, $data): Collect
    {
        $results = collection();
        foreach ($data as $item) {
            if (strpos($item, $query) !== false) {
                $results->push($item);
            }
        }
        return $results;
    }
}
?>
