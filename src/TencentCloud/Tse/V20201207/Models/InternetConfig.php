<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 公网负载均衡配置
 *
 * @method string getInternetAddressVersion() 获取公网地址版本，可选："IPV4" | "IPV6" 。不填默认 IPV4 。
 * @method void setInternetAddressVersion(string $InternetAddressVersion) 设置公网地址版本，可选："IPV4" | "IPV6" 。不填默认 IPV4 。
 * @method string getInternetPayMode() 获取公网付费类型，当前仅可选："BANDWIDTH"。不填默认为 "BANDWIDTH"
 * @method void setInternetPayMode(string $InternetPayMode) 设置公网付费类型，当前仅可选："BANDWIDTH"。不填默认为 "BANDWIDTH"
 * @method integer getInternetMaxBandwidthOut() 获取公网带宽。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置公网带宽。
 * @method string getDescription() 获取负载均衡描述
 * @method void setDescription(string $Description) 设置负载均衡描述
 * @method string getSlaType() 获取负载均衡的规格类型，传 "SLA" 表示性能容量型，不传为共享型。
 * @method void setSlaType(string $SlaType) 设置负载均衡的规格类型，传 "SLA" 表示性能容量型，不传为共享型。
 * @method boolean getMultiZoneFlag() 获取负载均衡是否多可用区
 * @method void setMultiZoneFlag(boolean $MultiZoneFlag) 设置负载均衡是否多可用区
 * @method string getMasterZoneId() 获取主可用区
 * @method void setMasterZoneId(string $MasterZoneId) 设置主可用区
 * @method string getSlaveZoneId() 获取备可用区
 * @method void setSlaveZoneId(string $SlaveZoneId) 设置备可用区
 */
class InternetConfig extends AbstractModel
{
    /**
     * @var string 公网地址版本，可选："IPV4" | "IPV6" 。不填默认 IPV4 。
     */
    public $InternetAddressVersion;

    /**
     * @var string 公网付费类型，当前仅可选："BANDWIDTH"。不填默认为 "BANDWIDTH"
     */
    public $InternetPayMode;

    /**
     * @var integer 公网带宽。
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string 负载均衡描述
     */
    public $Description;

    /**
     * @var string 负载均衡的规格类型，传 "SLA" 表示性能容量型，不传为共享型。
     */
    public $SlaType;

    /**
     * @var boolean 负载均衡是否多可用区
     */
    public $MultiZoneFlag;

    /**
     * @var string 主可用区
     */
    public $MasterZoneId;

    /**
     * @var string 备可用区
     */
    public $SlaveZoneId;

    /**
     * @param string $InternetAddressVersion 公网地址版本，可选："IPV4" | "IPV6" 。不填默认 IPV4 。
     * @param string $InternetPayMode 公网付费类型，当前仅可选："BANDWIDTH"。不填默认为 "BANDWIDTH"
     * @param integer $InternetMaxBandwidthOut 公网带宽。
     * @param string $Description 负载均衡描述
     * @param string $SlaType 负载均衡的规格类型，传 "SLA" 表示性能容量型，不传为共享型。
     * @param boolean $MultiZoneFlag 负载均衡是否多可用区
     * @param string $MasterZoneId 主可用区
     * @param string $SlaveZoneId 备可用区
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
        if (array_key_exists("InternetAddressVersion",$param) and $param["InternetAddressVersion"] !== null) {
            $this->InternetAddressVersion = $param["InternetAddressVersion"];
        }

        if (array_key_exists("InternetPayMode",$param) and $param["InternetPayMode"] !== null) {
            $this->InternetPayMode = $param["InternetPayMode"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SlaType",$param) and $param["SlaType"] !== null) {
            $this->SlaType = $param["SlaType"];
        }

        if (array_key_exists("MultiZoneFlag",$param) and $param["MultiZoneFlag"] !== null) {
            $this->MultiZoneFlag = $param["MultiZoneFlag"];
        }

        if (array_key_exists("MasterZoneId",$param) and $param["MasterZoneId"] !== null) {
            $this->MasterZoneId = $param["MasterZoneId"];
        }

        if (array_key_exists("SlaveZoneId",$param) and $param["SlaveZoneId"] !== null) {
            $this->SlaveZoneId = $param["SlaveZoneId"];
        }
    }
}
