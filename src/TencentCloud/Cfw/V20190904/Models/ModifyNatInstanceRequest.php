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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNatInstance请求参数结构体
 *
 * @method string getInstanceName() 获取<p>NAT防火墙实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>NAT防火墙实例名称</p>
 * @method string getNatInstanceId() 获取<p>NAT防火墙实例ID</p>
 * @method void setNatInstanceId(string $NatInstanceId) 设置<p>NAT防火墙实例ID</p>
 */
class ModifyNatInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>NAT防火墙实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>NAT防火墙实例ID</p>
     */
    public $NatInstanceId;

    /**
     * @param string $InstanceName <p>NAT防火墙实例名称</p>
     * @param string $NatInstanceId <p>NAT防火墙实例ID</p>
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("NatInstanceId",$param) and $param["NatInstanceId"] !== null) {
            $this->NatInstanceId = $param["NatInstanceId"];
        }
    }
}
