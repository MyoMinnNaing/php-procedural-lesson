<?php

class QueryBuilder
{
    // "SELECT * FROM users WHERE gender = 'female' AND  age > 19 AND nation = 'korea' "
    // "SELECT * FROM users WHERE id = 1 OR id = 2 OR id = 3;
    public $tableName, $where, $orWhere;

    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->where = [];
        $this->orWhere = [];
    }


    public function where($columnName, $operator, $value)
    {
        $this->where[] = "$columnName $operator '$value' ";
        return $this;
    }

    public function orWhere($columnName, $operator, $value)
    {
        $this->orWhere[] = "$columnName $operator '$value' ";
        return $this;
    }

    public function sql()
    {
        $sql = "SELECT * FROM " . $this->tableName;
        if (!empty($this->where)) {
            $sql .= " WHERE " . join(" AND ", $this->where);
            // join function က array  ကနေ string ‌ပြောင်းပေးပီး AND  နှင့်ဆက်ပေးပါတယ်။

        }

        if (!empty($this->orWhere)) {
            $sql .= " OR " . join(" OR ", $this->orWhere);
        }

        $sql .= ";";
        return $sql;
    }
}
