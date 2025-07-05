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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryInternalTableWarehouse请求参数结构体
 *
 * @method string getDatabaseName() 获取库名
 * @method void setDatabaseName(string $DatabaseName) 设置库名
 * @method string getTableName() 获取表名
 * @method void setTableName(string $TableName) 设置表名
 */
class QueryInternalTableWarehouseRequest extends AbstractModel
{
    /**
     * @var string 库名
     */
    public $DatabaseName;

    /**
     * @var string 表名
     */
    public $TableName;

    /**
     * @param string $DatabaseName 库名
     * @param string $TableName 表名
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }
    }
}
