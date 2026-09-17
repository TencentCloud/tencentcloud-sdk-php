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
 * 私网实例信息
 *
 * @method string getNetworkInstanceId() 获取私网实例ID
 * @method void setNetworkInstanceId(string $NetworkInstanceId) 设置私网实例ID
 * @method string getNetworkInstanceName() 获取私网实例名称
 * @method void setNetworkInstanceName(string $NetworkInstanceName) 设置私网实例名称
 * @method string getZoneId() 获取可用区ID
 * @method void setZoneId(string $ZoneId) 设置可用区ID
 * @method string getNetwork() 获取网络地址
 * @method void setNetwork(string $Network) 设置网络地址
 * @method integer getMask() 获取网络掩码
 * @method void setMask(integer $Mask) 设置网络掩码
 * @method integer getServerCount() 获取关联物理机数量
 * @method void setServerCount(integer $ServerCount) 设置关联物理机数量
 * @method integer getAvailableIpCount() 获取可用Ip数量
 * @method void setAvailableIpCount(integer $AvailableIpCount) 设置可用Ip数量
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getUpdatedAt() 获取更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
 */
class PrivateNetworkInstanceInfo extends AbstractModel
{
    /**
     * @var string 私网实例ID
     */
    public $NetworkInstanceId;

    /**
     * @var string 私网实例名称
     */
    public $NetworkInstanceName;

    /**
     * @var string 可用区ID
     */
    public $ZoneId;

    /**
     * @var string 网络地址
     */
    public $Network;

    /**
     * @var integer 网络掩码
     */
    public $Mask;

    /**
     * @var integer 关联物理机数量
     */
    public $ServerCount;

    /**
     * @var integer 可用Ip数量
     */
    public $AvailableIpCount;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 更新时间
     */
    public $UpdatedAt;

    /**
     * @param string $NetworkInstanceId 私网实例ID
     * @param string $NetworkInstanceName 私网实例名称
     * @param string $ZoneId 可用区ID
     * @param string $Network 网络地址
     * @param integer $Mask 网络掩码
     * @param integer $ServerCount 关联物理机数量
     * @param integer $AvailableIpCount 可用Ip数量
     * @param string $CreatedAt 创建时间
     * @param string $UpdatedAt 更新时间
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
        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            $this->NetworkInstanceId = $param["NetworkInstanceId"];
        }

        if (array_key_exists("NetworkInstanceName",$param) and $param["NetworkInstanceName"] !== null) {
            $this->NetworkInstanceName = $param["NetworkInstanceName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Network",$param) and $param["Network"] !== null) {
            $this->Network = $param["Network"];
        }

        if (array_key_exists("Mask",$param) and $param["Mask"] !== null) {
            $this->Mask = $param["Mask"];
        }

        if (array_key_exists("ServerCount",$param) and $param["ServerCount"] !== null) {
            $this->ServerCount = $param["ServerCount"];
        }

        if (array_key_exists("AvailableIpCount",$param) and $param["AvailableIpCount"] !== null) {
            $this->AvailableIpCount = $param["AvailableIpCount"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
