<?php
namespace Search;

use Collect\Collect;

class Search {
    public function search($query, $data): Collect
    {
        $collection = new Collect($data);
        return $collection->map(function ($item) use ($query) {
            return strpos($item, $query) !== false ? $item : null;
        });
    }
}
?>
