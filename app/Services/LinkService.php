<?php

namespace App\Services;

use App\Models\Links;
use \Illuminate\Contracts\Pagination\LengthAwarePaginator;


class LinkService
{
    /**
     * Create a new link
     */

    public function index() : LengthAwarePaginator
    {
        // Implementation here
        $query =  Links::latest(); 

        return $query->paginate(Links::PAGINATE);

    }

    public function find(int $id ): Links
    {
        // Implementation here
        return Links::findOrFail($id); 


    }



    public function create(array $data): Links
    {
        // Implementation here
        return Links::create($data); 

    }

    /**
     * Get a link by ID
     */
    public function getById(int $id): ?array
    {
        // Implementation here
        return null;
    }

    /**
     * Update a link
     */
    public function update(int $id, array $data): bool
    {
        // Implementation here
        return Links::where('id', $id)->update($data) > 0;
    }

    /**
     * Delete a link
     */
    public function delete(int $id): bool
    {
        // Implementation here
        return Links::destroy($id) > 0;
        
    }
}