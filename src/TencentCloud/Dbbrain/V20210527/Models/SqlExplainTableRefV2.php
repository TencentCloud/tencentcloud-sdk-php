<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SQL 涉及的表信息。包含库名与表名，用于在前端展示 SQL 涉及的表清单。
 *
 * @method string getTableName() 获取<p>表名。</p>
 * @method void setTableName(string $TableName) 设置<p>表名。</p>
 * @method string getTableSchema() 获取<p>表所在的数据库名。</p>
 * @method void setTableSchema(string $TableSchema) 设置<p>表所在的数据库名。</p>
 */
class SqlExplainTableRefV2 extends AbstractModel
{
    /**
     * @var string <p>表名。</p>
     */
    public $TableName;

    /**
     * @var string <p>表所在的数据库名。</p>
     */
    public $TableSchema;

    /**
     * @param string $TableName <p>表名。</p>
     * @param string $TableSchema <p>表所在的数据库名。</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableSchema",$param) and $param["TableSchema"] !== null) {
            $this->TableSchema = $param["TableSchema"];
        }
    }
}
