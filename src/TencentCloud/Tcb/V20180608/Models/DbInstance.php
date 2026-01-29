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
 * 数据库连接器实例信息
 *
 * @method string getEnvId() 获取云开发环境ID
 * @method void setEnvId(string $EnvId) 设置云开发环境ID
 * @method string getInstanceId() 获取MySQL 连接器实例 ID；`"default"` 或为空表示使用 TCB 环境的默认连接器
 * @method void setInstanceId(string $InstanceId) 设置MySQL 连接器实例 ID；`"default"` 或为空表示使用 TCB 环境的默认连接器
 * @method string getSchema() 获取数据库名；为空时使用连接器配置的默认数据库名
 * @method void setSchema(string $Schema) 设置数据库名；为空时使用连接器配置的默认数据库名
 */
class DbInstance extends AbstractModel
{
    /**
     * @var string 云开发环境ID
     */
    public $EnvId;

    /**
     * @var string MySQL 连接器实例 ID；`"default"` 或为空表示使用 TCB 环境的默认连接器
     */
    public $InstanceId;

    /**
     * @var string 数据库名；为空时使用连接器配置的默认数据库名
     */
    public $Schema;

    /**
     * @param string $EnvId 云开发环境ID
     * @param string $InstanceId MySQL 连接器实例 ID；`"default"` 或为空表示使用 TCB 环境的默认连接器
     * @param string $Schema 数据库名；为空时使用连接器配置的默认数据库名
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }
    }
}
