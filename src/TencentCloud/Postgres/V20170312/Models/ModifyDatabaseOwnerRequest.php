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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDatabaseOwner请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID
 * @method string getDatabaseName() 获取数据库名称
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
 * @method string getDatabaseOwner() 获取数据库新所有者
 * @method void setDatabaseOwner(string $DatabaseOwner) 设置数据库新所有者
 */
class ModifyDatabaseOwnerRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $DBInstanceId;

    /**
     * @var string 数据库名称
     */
    public $DatabaseName;

    /**
     * @var string 数据库新所有者
     */
    public $DatabaseOwner;

    /**
     * @param string $DBInstanceId 实例ID
     * @param string $DatabaseName 数据库名称
     * @param string $DatabaseOwner 数据库新所有者
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DatabaseOwner",$param) and $param["DatabaseOwner"] !== null) {
            $this->DatabaseOwner = $param["DatabaseOwner"];
        }
    }
}
