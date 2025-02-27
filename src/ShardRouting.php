<?php declare(strict_types=1);

namespace ElasticScoutDriverPlus;

/**
 * Use this trait to enable custom Elasticsearch routing functionality.
 * https://www.elastic.co/guide/en/elasticsearch/reference/current/mapping-routing-field.html
 */
trait ShardRouting
{
    /**
     * Override this method to specify the document field,
     * which value will be used to route the document to a shard.
     */
    abstract public function getRoutingPath(): string;
}
