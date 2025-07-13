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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 跳过校验的表详情
 *
 * @method string getDb() 获取数据库名
 * @method void setDb(string $Db) 设置数据库名
 * @method string getSchema() 获取schema名
 * @method void setSchema(string $Schema) 设置schema名
 * @method string getTable() 获取表名
 * @method void setTable(string $Table) 设置表名
 * @method string getReason() 获取未发起检查的原因
 * @method void setReason(string $Reason) 设置未发起检查的原因
 */
class SkippedItem extends AbstractModel
{
    /**
     * @var string 数据库名
     */
    public $Db;

    /**
     * @var string schema名
     */
    public $Schema;

    /**
     * @var string 表名
     */
    public $Table;

    /**
     * @var string 未发起检查的原因
     */
    public $Reason;

    /**
     * @param string $Db 数据库名
     * @param string $Schema schema名
     * @param string $Table 表名
     * @param string $Reason 未发起检查的原因
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
        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
