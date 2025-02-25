<?php declare(strict_types=1);

namespace ElasticScoutDriverPlus\Tests\App;

use ElasticScoutDriverPlus\QueryDsl;
use Illuminate\Database\Eloquent\Model as BaseModel;
use Laravel\Scout\Searchable;

abstract class Model extends BaseModel
{
    use Searchable;
    use QueryDsl;

    public $timestamps = false;

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {
        return $this->attributesToArray();
    }
}
