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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySiteDeviceInfo请求参数结构体
 *
 * @method string getSiteId() 获取机房ID
 * @method void setSiteId(string $SiteId) 设置机房ID
 * @method string getFiberType() 获取您将使用光纤类型将CDC设备连接到网络。有单模和多模两种选项。
 * @method void setFiberType(string $FiberType) 设置您将使用光纤类型将CDC设备连接到网络。有单模和多模两种选项。
 * @method string getOpticalStandard() 获取您将CDC连接到网络时采用的光学标准。此字段取决于上行链路速度、光纤类型和到上游设备的距离。
 * @method void setOpticalStandard(string $OpticalStandard) 设置您将CDC连接到网络时采用的光学标准。此字段取决于上行链路速度、光纤类型和到上游设备的距离。
 * @method string getPowerConnectors() 获取电源连接器类型
 * @method void setPowerConnectors(string $PowerConnectors) 设置电源连接器类型
 * @method string getPowerFeedDrop() 获取从机架上方还是下方供电。
 * @method void setPowerFeedDrop(string $PowerFeedDrop) 设置从机架上方还是下方供电。
 * @method integer getMaxWeight() 获取最大承重(KG)
 * @method void setMaxWeight(integer $MaxWeight) 设置最大承重(KG)
 * @method integer getPowerDrawKva() 获取功耗(KW)
 * @method void setPowerDrawKva(integer $PowerDrawKva) 设置功耗(KW)
 * @method integer getUplinkSpeedGbps() 获取网络到腾讯云Region区域的上行链路速度
 * @method void setUplinkSpeedGbps(integer $UplinkSpeedGbps) 设置网络到腾讯云Region区域的上行链路速度
 * @method integer getUplinkCount() 获取将CDC连接到网络时，每台CDC网络设备(每个机架 2 台设备)使用的上行链路数量。
 * @method void setUplinkCount(integer $UplinkCount) 设置将CDC连接到网络时，每台CDC网络设备(每个机架 2 台设备)使用的上行链路数量。
 * @method boolean getConditionRequirement() 获取是否满足下面环境条件：
1、场地没有材料要求或验收标准会影响 CDC 设备配送和安装。
2、确定的机架位置包含:
温度范围为 41 到 104°F (5 到 40°C)。
湿度范围为 10°F (-12°C)和 8% RH (相对湿度)到 70°F(21°C)和 80% RH。
机架位置的气流方向为从前向后，且应具有足够的 CFM (每分钟立方英尺)。CFM 必须是 CDC 配置的 kVA 功耗值的 145.8 倍。
 * @method void setConditionRequirement(boolean $ConditionRequirement) 设置是否满足下面环境条件：
1、场地没有材料要求或验收标准会影响 CDC 设备配送和安装。
2、确定的机架位置包含:
温度范围为 41 到 104°F (5 到 40°C)。
湿度范围为 10°F (-12°C)和 8% RH (相对湿度)到 70°F(21°C)和 80% RH。
机架位置的气流方向为从前向后，且应具有足够的 CFM (每分钟立方英尺)。CFM 必须是 CDC 配置的 kVA 功耗值的 145.8 倍。
 * @method boolean getDimensionRequirement() 获取是否满足下面的尺寸条件：
您的装货站台可以容纳一个机架箱(高 x 宽 x 深 = 94" x 54" x 48")。
您可以提供从机架(高 x 宽 x 深 = 80" x 24" x 48")交货地点到机架最终安置位置的明确通道。测量深度时，应包括站台、走廊通道、门、转弯、坡道、货梯，并将其他通道限制考虑在内。
在最终的 CDC安置位置，前部间隙可以为 48" 或更大，后部间隙可以为 24" 或更大。
 * @method void setDimensionRequirement(boolean $DimensionRequirement) 设置是否满足下面的尺寸条件：
您的装货站台可以容纳一个机架箱(高 x 宽 x 深 = 94" x 54" x 48")。
您可以提供从机架(高 x 宽 x 深 = 80" x 24" x 48")交货地点到机架最终安置位置的明确通道。测量深度时，应包括站台、走廊通道、门、转弯、坡道、货梯，并将其他通道限制考虑在内。
在最终的 CDC安置位置，前部间隙可以为 48" 或更大，后部间隙可以为 24" 或更大。
 * @method boolean getRedundantNetworking() 获取是否提供冗余的上游设备(交换机或路由器)，以便两台  网络设备都能连接到网络设备。
 * @method void setRedundantNetworking(boolean $RedundantNetworking) 设置是否提供冗余的上游设备(交换机或路由器)，以便两台  网络设备都能连接到网络设备。
 * @method boolean getNeedHelp() 获取是否需要腾讯云团队协助完成机架支撑工作
 * @method void setNeedHelp(boolean $NeedHelp) 设置是否需要腾讯云团队协助完成机架支撑工作
 * @method boolean getRedundantPower() 获取是否电源冗余
 * @method void setRedundantPower(boolean $RedundantPower) 设置是否电源冗余
 * @method boolean getBreakerRequirement() 获取上游断路器是否具备
 * @method void setBreakerRequirement(boolean $BreakerRequirement) 设置上游断路器是否具备
 */
class ModifySiteDeviceInfoRequest extends AbstractModel
{
    /**
     * @var string 机房ID
     */
    public $SiteId;

    /**
     * @var string 您将使用光纤类型将CDC设备连接到网络。有单模和多模两种选项。
     */
    public $FiberType;

    /**
     * @var string 您将CDC连接到网络时采用的光学标准。此字段取决于上行链路速度、光纤类型和到上游设备的距离。
     */
    public $OpticalStandard;

    /**
     * @var string 电源连接器类型
     */
    public $PowerConnectors;

    /**
     * @var string 从机架上方还是下方供电。
     */
    public $PowerFeedDrop;

    /**
     * @var integer 最大承重(KG)
     */
    public $MaxWeight;

    /**
     * @var integer 功耗(KW)
     */
    public $PowerDrawKva;

    /**
     * @var integer 网络到腾讯云Region区域的上行链路速度
     */
    public $UplinkSpeedGbps;

    /**
     * @var integer 将CDC连接到网络时，每台CDC网络设备(每个机架 2 台设备)使用的上行链路数量。
     */
    public $UplinkCount;

    /**
     * @var boolean 是否满足下面环境条件：
1、场地没有材料要求或验收标准会影响 CDC 设备配送和安装。
2、确定的机架位置包含:
温度范围为 41 到 104°F (5 到 40°C)。
湿度范围为 10°F (-12°C)和 8% RH (相对湿度)到 70°F(21°C)和 80% RH。
机架位置的气流方向为从前向后，且应具有足够的 CFM (每分钟立方英尺)。CFM 必须是 CDC 配置的 kVA 功耗值的 145.8 倍。
     */
    public $ConditionRequirement;

    /**
     * @var boolean 是否满足下面的尺寸条件：
您的装货站台可以容纳一个机架箱(高 x 宽 x 深 = 94" x 54" x 48")。
您可以提供从机架(高 x 宽 x 深 = 80" x 24" x 48")交货地点到机架最终安置位置的明确通道。测量深度时，应包括站台、走廊通道、门、转弯、坡道、货梯，并将其他通道限制考虑在内。
在最终的 CDC安置位置，前部间隙可以为 48" 或更大，后部间隙可以为 24" 或更大。
     */
    public $DimensionRequirement;

    /**
     * @var boolean 是否提供冗余的上游设备(交换机或路由器)，以便两台  网络设备都能连接到网络设备。
     */
    public $RedundantNetworking;

    /**
     * @var boolean 是否需要腾讯云团队协助完成机架支撑工作
     */
    public $NeedHelp;

    /**
     * @var boolean 是否电源冗余
     */
    public $RedundantPower;

    /**
     * @var boolean 上游断路器是否具备
     */
    public $BreakerRequirement;

    /**
     * @param string $SiteId 机房ID
     * @param string $FiberType 您将使用光纤类型将CDC设备连接到网络。有单模和多模两种选项。
     * @param string $OpticalStandard 您将CDC连接到网络时采用的光学标准。此字段取决于上行链路速度、光纤类型和到上游设备的距离。
     * @param string $PowerConnectors 电源连接器类型
     * @param string $PowerFeedDrop 从机架上方还是下方供电。
     * @param integer $MaxWeight 最大承重(KG)
     * @param integer $PowerDrawKva 功耗(KW)
     * @param integer $UplinkSpeedGbps 网络到腾讯云Region区域的上行链路速度
     * @param integer $UplinkCount 将CDC连接到网络时，每台CDC网络设备(每个机架 2 台设备)使用的上行链路数量。
     * @param boolean $ConditionRequirement 是否满足下面环境条件：
1、场地没有材料要求或验收标准会影响 CDC 设备配送和安装。
2、确定的机架位置包含:
温度范围为 41 到 104°F (5 到 40°C)。
湿度范围为 10°F (-12°C)和 8% RH (相对湿度)到 70°F(21°C)和 80% RH。
机架位置的气流方向为从前向后，且应具有足够的 CFM (每分钟立方英尺)。CFM 必须是 CDC 配置的 kVA 功耗值的 145.8 倍。
     * @param boolean $DimensionRequirement 是否满足下面的尺寸条件：
您的装货站台可以容纳一个机架箱(高 x 宽 x 深 = 94" x 54" x 48")。
您可以提供从机架(高 x 宽 x 深 = 80" x 24" x 48")交货地点到机架最终安置位置的明确通道。测量深度时，应包括站台、走廊通道、门、转弯、坡道、货梯，并将其他通道限制考虑在内。
在最终的 CDC安置位置，前部间隙可以为 48" 或更大，后部间隙可以为 24" 或更大。
     * @param boolean $RedundantNetworking 是否提供冗余的上游设备(交换机或路由器)，以便两台  网络设备都能连接到网络设备。
     * @param boolean $NeedHelp 是否需要腾讯云团队协助完成机架支撑工作
     * @param boolean $RedundantPower 是否电源冗余
     * @param boolean $BreakerRequirement 上游断路器是否具备
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
        if (array_key_exists("SiteId",$param) and $param["SiteId"] !== null) {
            $this->SiteId = $param["SiteId"];
        }

        if (array_key_exists("FiberType",$param) and $param["FiberType"] !== null) {
            $this->FiberType = $param["FiberType"];
        }

        if (array_key_exists("OpticalStandard",$param) and $param["OpticalStandard"] !== null) {
            $this->OpticalStandard = $param["OpticalStandard"];
        }

        if (array_key_exists("PowerConnectors",$param) and $param["PowerConnectors"] !== null) {
            $this->PowerConnectors = $param["PowerConnectors"];
        }

        if (array_key_exists("PowerFeedDrop",$param) and $param["PowerFeedDrop"] !== null) {
            $this->PowerFeedDrop = $param["PowerFeedDrop"];
        }

        if (array_key_exists("MaxWeight",$param) and $param["MaxWeight"] !== null) {
            $this->MaxWeight = $param["MaxWeight"];
        }

        if (array_key_exists("PowerDrawKva",$param) and $param["PowerDrawKva"] !== null) {
            $this->PowerDrawKva = $param["PowerDrawKva"];
        }

        if (array_key_exists("UplinkSpeedGbps",$param) and $param["UplinkSpeedGbps"] !== null) {
            $this->UplinkSpeedGbps = $param["UplinkSpeedGbps"];
        }

        if (array_key_exists("UplinkCount",$param) and $param["UplinkCount"] !== null) {
            $this->UplinkCount = $param["UplinkCount"];
        }

        if (array_key_exists("ConditionRequirement",$param) and $param["ConditionRequirement"] !== null) {
            $this->ConditionRequirement = $param["ConditionRequirement"];
        }

        if (array_key_exists("DimensionRequirement",$param) and $param["DimensionRequirement"] !== null) {
            $this->DimensionRequirement = $param["DimensionRequirement"];
        }

        if (array_key_exists("RedundantNetworking",$param) and $param["RedundantNetworking"] !== null) {
            $this->RedundantNetworking = $param["RedundantNetworking"];
        }

        if (array_key_exists("NeedHelp",$param) and $param["NeedHelp"] !== null) {
            $this->NeedHelp = $param["NeedHelp"];
        }

        if (array_key_exists("RedundantPower",$param) and $param["RedundantPower"] !== null) {
            $this->RedundantPower = $param["RedundantPower"];
        }

        if (array_key_exists("BreakerRequirement",$param) and $param["BreakerRequirement"] !== null) {
            $this->BreakerRequirement = $param["BreakerRequirement"];
        }
    }
}
