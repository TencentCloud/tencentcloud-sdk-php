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
 * 公网Ip信息
 *
 * @method string getIp() 获取10.100.0.20
 * @method void setIp(string $Ip) 设置10.100.0.20
 * @method string getNetworkInstanceId() 获取epn-asdfghjkl
 * @method void setNetworkInstanceId(string $NetworkInstanceId) 设置epn-asdfghjkl
 * @method string getInstanceId() 获取epm-asdfghjkl
 * @method void setInstanceId(string $InstanceId) 设置epm-asdfghjkl
 * @method string getState() 获取Unbound
 * @method void setState(string $State) 设置Unbound
 * @method string getType() 获取Ipv4
 * @method void setType(string $Type) 设置Ipv4
 * @method string getCreatedAt() 获取2026-04-07T00:00:00
 * @method void setCreatedAt(string $CreatedAt) 设置2026-04-07T00:00:00
 * @method string getUpdatedAt() 获取2026-04-07T00:00:00
 * @method void setUpdatedAt(string $UpdatedAt) 设置2026-04-07T00:00:00
 */
class IpInfo extends AbstractModel
{
    /**
     * @var string 10.100.0.20
     */
    public $Ip;

    /**
     * @var string epn-asdfghjkl
     */
    public $NetworkInstanceId;

    /**
     * @var string epm-asdfghjkl
     */
    public $InstanceId;

    /**
     * @var string Unbound
     */
    public $State;

    /**
     * @var string Ipv4
     */
    public $Type;

    /**
     * @var string 2026-04-07T00:00:00
     */
    public $CreatedAt;

    /**
     * @var string 2026-04-07T00:00:00
     */
    public $UpdatedAt;

    /**
     * @param string $Ip 10.100.0.20
     * @param string $NetworkInstanceId epn-asdfghjkl
     * @param string $InstanceId epm-asdfghjkl
     * @param string $State Unbound
     * @param string $Type Ipv4
     * @param string $CreatedAt 2026-04-07T00:00:00
     * @param string $UpdatedAt 2026-04-07T00:00:00
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            $this->NetworkInstanceId = $param["NetworkInstanceId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
