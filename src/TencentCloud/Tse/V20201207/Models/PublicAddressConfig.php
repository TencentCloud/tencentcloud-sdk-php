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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 公网地址信息
 *
 * @method string getVip() 获取公网 ip
 * @method void setVip(string $Vip) 设置公网 ip
 * @method integer getInternetMaxBandwidthOut() 获取公网最大带宽
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置公网最大带宽
 * @method string getGroupId() 获取公网所属分组 id
 * @method void setGroupId(string $GroupId) 设置公网所属分组 id
 * @method string getGroupName() 获取公网所属分组名
 * @method void setGroupName(string $GroupName) 设置公网所属分组名
 * @method string getNetworkId() 获取公网负载均衡 id
 * @method void setNetworkId(string $NetworkId) 设置公网负载均衡 id
 * @method string getDescription() 获取公网负载均衡描述
 * @method void setDescription(string $Description) 设置公网负载均衡描述
 */
class PublicAddressConfig extends AbstractModel
{
    /**
     * @var string 公网 ip
     */
    public $Vip;

    /**
     * @var integer 公网最大带宽
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string 公网所属分组 id
     */
    public $GroupId;

    /**
     * @var string 公网所属分组名
     */
    public $GroupName;

    /**
     * @var string 公网负载均衡 id
     */
    public $NetworkId;

    /**
     * @var string 公网负载均衡描述
     */
    public $Description;

    /**
     * @param string $Vip 公网 ip
     * @param integer $InternetMaxBandwidthOut 公网最大带宽
     * @param string $GroupId 公网所属分组 id
     * @param string $GroupName 公网所属分组名
     * @param string $NetworkId 公网负载均衡 id
     * @param string $Description 公网负载均衡描述
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
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("NetworkId",$param) and $param["NetworkId"] !== null) {
            $this->NetworkId = $param["NetworkId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
