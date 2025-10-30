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
 * @method string getInstanceName() 获取NAT防火墙实例名称
 * @method void setInstanceName(string $InstanceName) 设置NAT防火墙实例名称
 * @method string getNatInstanceId() 获取NAT防火墙实例ID
 * @method void setNatInstanceId(string $NatInstanceId) 设置NAT防火墙实例ID
 */
class ModifyNatInstanceRequest extends AbstractModel
{
    /**
     * @var string NAT防火墙实例名称
     */
    public $InstanceName;

    /**
     * @var string NAT防火墙实例ID
     */
    public $NatInstanceId;

    /**
     * @param string $InstanceName NAT防火墙实例名称
     * @param string $NatInstanceId NAT防火墙实例ID
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
