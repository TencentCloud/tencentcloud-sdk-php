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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceAttribute请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getInstanceName() 获取新的实例名称，1-60字符。与 NewPublicIp 至少传入一个。
 * @method void setInstanceName(string $InstanceName) 设置新的实例名称，1-60字符。与 NewPublicIp 至少传入一个。
 * @method string getNewPublicIp() 获取新的公网IP（需从该实例所绑定公网实例的可用IP中选择）。与 InstanceName 至少传入一个。
 * @method void setNewPublicIp(string $NewPublicIp) 设置新的公网IP（需从该实例所绑定公网实例的可用IP中选择）。与 InstanceName 至少传入一个。
 * @method string getIpType() 获取IP类型，ipv4 或 ipv6，默认 ipv4。仅在指定 NewPublicIp 时有效。
 * @method void setIpType(string $IpType) 设置IP类型，ipv4 或 ipv6，默认 ipv4。仅在指定 NewPublicIp 时有效。
 */
class ModifyInstanceAttributeRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 新的实例名称，1-60字符。与 NewPublicIp 至少传入一个。
     */
    public $InstanceName;

    /**
     * @var string 新的公网IP（需从该实例所绑定公网实例的可用IP中选择）。与 InstanceName 至少传入一个。
     * @deprecated
     */
    public $NewPublicIp;

    /**
     * @var string IP类型，ipv4 或 ipv6，默认 ipv4。仅在指定 NewPublicIp 时有效。
     * @deprecated
     */
    public $IpType;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $InstanceName 新的实例名称，1-60字符。与 NewPublicIp 至少传入一个。
     * @param string $NewPublicIp 新的公网IP（需从该实例所绑定公网实例的可用IP中选择）。与 InstanceName 至少传入一个。
     * @param string $IpType IP类型，ipv4 或 ipv6，默认 ipv4。仅在指定 NewPublicIp 时有效。
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("NewPublicIp",$param) and $param["NewPublicIp"] !== null) {
            $this->NewPublicIp = $param["NewPublicIp"];
        }

        if (array_key_exists("IpType",$param) and $param["IpType"] !== null) {
            $this->IpType = $param["IpType"];
        }
    }
}
