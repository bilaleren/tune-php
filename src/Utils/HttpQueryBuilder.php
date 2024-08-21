<?php

namespace Tune\Utils;

use RuntimeException;

class HttpQueryBuilder
{

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var array
     */
    protected $query = [];

    /**
     * @var array
     */
    protected $sorts = [];

    /**
     * @var array
     */
    protected $fields = [];

    /**
     * @var array
     */
    protected $filters = [];

    public function __construct(array $fields = [], array $filters = [], array $query = [], array $sorts = [], array $data = [])
    {
        $this->setData($data);
        $this->setFields($fields);
        $this->setFilters($filters);
        $this->setQuery($query);
        $this->setSorts($sorts);
    }

    /**
     * @return $this
     */
    public static function make(): self
    {
        return new self(...func_get_args());
    }

    /**
     * @param int $page
     * @return $this
     */
    public function setPage(int $page): self
    {
        return $this->addQuery('page', $page);
    }

    /**
     * @param int $limit
     * @return $this
     */
    public function setLimit(int $limit = 50): self
    {
        return $this->addQuery('limit', $limit);
    }

    /**
     * @param array $fields
     * @return $this
     */
    public function setFields(array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * @param array $filters
     * @return $this
     */
    public function setFilters(array $filters): self
    {
        $this->filters = $filters;

        return $this;
    }

    /**
     * @param array $sorts
     * @return $this
     */
    public function setSorts(array $sorts): self
    {
        $this->sorts = $sorts;

        return $this;
    }

    /**
     * @param array $data
     * @return $this
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @param array $query
     * @return $this
     */
    public function setQuery(array $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @param string $name
     * @param string $value
     * @return $this
     */
    public function addData(string $name, string $value): self
    {
        $this->data[$name] = $value;

        return $this;
    }

    /**
     * @param string $name
     * @param string $value
     * @return $this
     */
    public function addQuery(string $name, string $value): self
    {
        $this->query[$name] = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addRelation(string $value): self
    {
        $this->query['contain'][] = $value;

        return $this;
    }

    /**
     * @param array $relations
     * @return $this
     */
    public function addRelations(array $relations): self
    {
        foreach ($relations as $relation) {
            $this->addRelation($relation);
        }

        return $this;
    }

    /**
     * @param string $field
     * @param string $direction
     * @return $this
     */
    public function addSort(string $field, string $direction = Operator::ASC): self
    {
        $this->sorts[$field] = $direction;

        return $this;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function addField(string $name): self
    {
        $this->fields[] = $name;

        return $this;
    }

    /**
     * @param string $field
     * @param string|array $value
     * @param string|null $operator
     * @param string|null $condition
     * @return $this
     */
    public function addFilter(string $field, $value, ?string $operator = null, ?string $condition = null): self
    {
        if ($condition === Operator::BETWEEN) {
            if (!is_array($value) || count($value) !== 2) {
                throw new RuntimeException(
                    'At least 2 strings must be entered for the condition between values.'
                );
            }
        }

        if (!empty($operator)) {
            if (is_array($value)) {
                foreach ($value as $item) {
                    $this->filters[$operator][$field][] = $item;
                }
            } else {
                $this->filters[$operator][$field] = $value;
            }
        } else if (!empty($condition)) {
            if (is_array($value)) {
                $this->filters[$field]['conditional'] = $condition;

                foreach ($value as $item) {
                    $this->filters[$field]['values'][] = $item;
                }
            } else {
                $this->filters[$field][$condition] = $value;
            }
        } else {
            if (is_array($value)) {
                foreach ($value as $item) {
                    $this->filters[$field][] = $item;
                }
            } else {
                $this->filters[$field] = $value;
            }
        }

        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_replace([
            'filters' => $this->filters,
            'sort' => $this->sorts,
            'fields' => $this->fields,
            'data' => $this->data
        ], $this->query);
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return http_build_query($this->toArray());
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->toString();
    }

}