<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取实例 ID，形如：tdsql-ow728lmc。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，形如：tdsql-ow728lmc。
 * @method array getConfig() 获取参数修改结果
 * @method void setConfig(array $Config) 设置参数修改结果
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *ModifyDBParameters返回参数结构体
 */
class ModifyDBParametersResponse extends AbstractModel
{
    /**
     * @var string 实例 ID，形如：tdsql-ow728lmc。
     */
    public $InstanceId;

    /**
     * @var array 参数修改结果
     */
    public $Config;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param string $InstanceId 实例 ID，形如：tdsql-ow728lmc。
     * @param array $Config 参数修改结果
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = [];
            foreach ($param["Config"] as $key => $value){
                $obj = new ParamModifyResult();
                $obj->deserialize($value);
                array_push($this->Config, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
