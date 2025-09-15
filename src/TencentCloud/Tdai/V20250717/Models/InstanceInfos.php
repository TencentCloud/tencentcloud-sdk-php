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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例信息
 *
 * @method string getRegion() 获取数据库地域
 * @method void setRegion(string $Region) 设置数据库地域
 * @method string getInstanceId() 获取数据库实例id
 * @method void setInstanceId(string $InstanceId) 设置数据库实例id
 * @method string getDatabaseName() 获取数据库名称
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
 * @method string getTableName() 获取表名称
 * @method void setTableName(string $TableName) 设置表名称
 */
class InstanceInfos extends AbstractModel
{
    /**
     * @var string 数据库地域
     */
    public $Region;

    /**
     * @var string 数据库实例id
     */
    public $InstanceId;

    /**
     * @var string 数据库名称
     */
    public $DatabaseName;

    /**
     * @var string 表名称
     */
    public $TableName;

    /**
     * @param string $Region 数据库地域
     * @param string $InstanceId 数据库实例id
     * @param string $DatabaseName 数据库名称
     * @param string $TableName 表名称
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }
    }
}
