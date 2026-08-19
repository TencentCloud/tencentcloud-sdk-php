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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SNAT规则
 *
 * @method string getNatGatewaySnatId() 获取<p>网关SNat ID</p>
 * @method void setNatGatewaySnatId(string $NatGatewaySnatId) 设置<p>网关SNat ID</p>
 * @method string getResourceId() 获取<p>资源ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID</p>
 * @method string getResourceType() 获取<p>资源类型</p>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型</p>
 * @method string getPrivateIpAddress() 获取<p>内网IP地址</p>
 * @method void setPrivateIpAddress(string $PrivateIpAddress) 设置<p>内网IP地址</p>
 * @method string getPublicIpAddresses() 获取<p>公网IP地址</p>
 * @method void setPublicIpAddresses(string $PublicIpAddresses) 设置<p>公网IP地址</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getCreatedTime() 获取<p>创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
 */
class NatSnatRuleItem extends AbstractModel
{
    /**
     * @var string <p>网关SNat ID</p>
     */
    public $NatGatewaySnatId;

    /**
     * @var string <p>资源ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>资源类型</p>
     */
    public $ResourceType;

    /**
     * @var string <p>内网IP地址</p>
     */
    public $PrivateIpAddress;

    /**
     * @var string <p>公网IP地址</p>
     */
    public $PublicIpAddresses;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedTime;

    /**
     * @param string $NatGatewaySnatId <p>网关SNat ID</p>
     * @param string $ResourceId <p>资源ID</p>
     * @param string $ResourceType <p>资源类型</p>
     * @param string $PrivateIpAddress <p>内网IP地址</p>
     * @param string $PublicIpAddresses <p>公网IP地址</p>
     * @param string $Description <p>描述</p>
     * @param string $CreatedTime <p>创建时间</p>
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
        if (array_key_exists("NatGatewaySnatId",$param) and $param["NatGatewaySnatId"] !== null) {
            $this->NatGatewaySnatId = $param["NatGatewaySnatId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
