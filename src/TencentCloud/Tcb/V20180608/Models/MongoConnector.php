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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MongoDB连接器配置
 *
 * @method string getInstanceId() 获取连接器实例ID
 * @method void setInstanceId(string $InstanceId) 设置连接器实例ID
 * @method string getDatabaseName() 获取MongoDB数据库名
 * @method void setDatabaseName(string $DatabaseName) 设置MongoDB数据库名
 */
class MongoConnector extends AbstractModel
{
    /**
     * @var string 连接器实例ID
     */
    public $InstanceId;

    /**
     * @var string MongoDB数据库名
     */
    public $DatabaseName;

    /**
     * @param string $InstanceId 连接器实例ID
     * @param string $DatabaseName MongoDB数据库名
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }
    }
}
