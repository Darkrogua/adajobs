<?php namespace Vdomah\Employ\Classes;

use Carbon\Carbon;

class Criteria
{
    public static function createdAtCriteria($query, $filter)
    {
        if (is_array($filter)) {
        } elseif (is_string($filter)) {
            $filter = [$filter];
        }
        foreach ($filter as $item) {
            $item = str_replace('%20', ' ', $item);
            $query = $query->orWhereDate('created_at', '>', Carbon::parse('- ' . $item));
        }

        return $query;
    }

    public static function typeCriteria($query, $filter)
    {
        if (is_array($filter))
            $query = $query->whereIn('type_id', $filter);

        return $query;
    }

    public static function salaryCriteria($query, $filter)
    {
        if (is_array($filter)){
            if (isset($filter['salary_min']) && $filter['salary_min']) {
                $query = $query->where('salary_min', '>=', $filter['salary_min']);
            }
            if (isset($filter['salary_max']) && $filter['salary_max']) {
                $query = $query->where('salary_max', '<=', $filter['salary_max']);
            }
        }

        return $query;
    }

    public static function categoryCriteria($query, $filter)
    {
        if (is_array($filter))
            $query = $query->whereHas('categories', function ($q) use ($filter) {
                $q->whereIn('id', $filter);
            });

        return $query;
    }

    public static function cityCriteria($query, $filter)
    {
        if (is_array($filter))
            $query = $query->whereHas('user', function ($q) use ($filter) {
                $q->whereHas('city', function ($q) use ($filter) {
                    $q->whereIn('id', $filter);
                });//dd($q->toSql());
            });

        return $query;
    }

    public static function titleCriteria($query, $value)
    {
        $query = $query->where(function ($q) use ($value) {
            $q->where('name', 'LIKE', '%' . $value . '%')
                ->orWhereHas('user', function ($q) use ($value) {
                    $q->where('name', 'LIKE', '%' . $value . '%');
                })
                ;
        });

        return $query;
    }

    public static function locationCriteria($query, $value)
    {
        $query = $query->where(function ($q) use ($value) {
            $q->where('location', 'LIKE', '%' . $value . '%')
                ->orWhereHas('user', function ($q) use ($value) {
                    $q->whereHas('city', function ($q) use ($value) {
                        $q->where('name', 'LIKE', '%' . $value . '%')
                            ->orWhereHas('state', function ($q) use ($value) {
                                $q->where('name', 'LIKE', '%' . $value . '%');
                            });
                    })
                    ;
                })
            ;
        });

        return $query;
    }
}