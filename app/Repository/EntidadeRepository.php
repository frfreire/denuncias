<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 16/04/2018
 * Time: 15:40
 */

namespace App\Repository;


use App\Model\Entidade;

class EntidadeRepository
{
    protected $entidade;


    public function __construct(Entidade $entidade)
    {
        $this->entidade = $entidade;
    }

    public function listarEntidades()
    {
        return $this->entidade::all();
    }


    /**
     * Remove all items from the cache.
     *
     * @return bool
     */
    public function flush()
    {
        // TODO: Implement flush() method.
    }

    /**
     * Get the cache key prefix.
     *
     * @return string
     */
    public function getPrefix()
    {
        // TODO: Implement getPrefix() method.
    }
}