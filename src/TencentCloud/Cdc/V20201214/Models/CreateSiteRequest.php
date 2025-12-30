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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSite请求参数结构体
 *
 * @method string getName() 获取<p>站点名称</p>
 * @method void setName(string $Name) 设置<p>站点名称</p>
 * @method string getCountry() 获取<p>站点所在国家</p>
 * @method void setCountry(string $Country) 设置<p>站点所在国家</p>
 * @method string getProvince() 获取<p>站点所在省份</p>
 * @method void setProvince(string $Province) 设置<p>站点所在省份</p>
 * @method string getCity() 获取<p>站点所在城市</p>
 * @method void setCity(string $City) 设置<p>站点所在城市</p>
 * @method string getAddressLine() 获取<p>站点所在地区的详细地址信息</p>
 * @method void setAddressLine(string $AddressLine) 设置<p>站点所在地区的详细地址信息</p>
 * @method string getDescription() 获取<p>站点描述</p>
 * @method void setDescription(string $Description) 设置<p>站点描述</p>
 * @method string getNote() 获取<p>注意事项</p>
 * @method void setNote(string $Note) 设置<p>注意事项</p>
 * @method string getFiberType() 获取<p>您将使用光纤类型将CDC设备连接到网络。有单模和多模两种选项。取值范围："MM","SM"</p>
 * @method void setFiberType(string $FiberType) 设置<p>您将使用光纤类型将CDC设备连接到网络。有单模和多模两种选项。取值范围："MM","SM"</p>
 * @method string getOpticalStandard() 获取<p>您将CDC连接到网络时采用的光学标准。此字段取决于上行链路速度、光纤类型和到上游设备的距离。</p>
 * @method void setOpticalStandard(string $OpticalStandard) 设置<p>您将CDC连接到网络时采用的光学标准。此字段取决于上行链路速度、光纤类型和到上游设备的距离。</p>
 * @method string getPowerConnectors() 获取<p>电源连接器类型</p>
 * @method void setPowerConnectors(string $PowerConnectors) 设置<p>电源连接器类型</p>
 * @method string getPowerFeedDrop() 获取<p>从机架上方还是下方供电。取值范围：["UP","DOWN"]</p>
 * @method void setPowerFeedDrop(string $PowerFeedDrop) 设置<p>从机架上方还是下方供电。取值范围：["UP","DOWN"]</p>
 * @method integer getMaxWeight() 获取<p>最大承重(KG)</p>
 * @method void setMaxWeight(integer $MaxWeight) 设置<p>最大承重(KG)</p>
 * @method integer getPowerDrawKva() 获取<p>功耗(KW)</p>
 * @method void setPowerDrawKva(integer $PowerDrawKva) 设置<p>功耗(KW)</p>
 * @method integer getUplinkSpeedGbps() 获取<p>网络到腾讯云Region区域的上行链路速度(Gbps)</p>
 * @method void setUplinkSpeedGbps(integer $UplinkSpeedGbps) 设置<p>网络到腾讯云Region区域的上行链路速度(Gbps)</p>
 * @method integer getUplinkCount() 获取<p>将CDC连接到网络时，每台CDC网络设备(每个机架 2 台设备)使用的上行链路数量。</p>
 * @method void setUplinkCount(integer $UplinkCount) 设置<p>将CDC连接到网络时，每台CDC网络设备(每个机架 2 台设备)使用的上行链路数量。</p>
 * @method boolean getConditionRequirement() 获取<p>是否满足下面环境条件：1、场地没有材料要求或验收标准会影响 CDC 设备配送和安装。2、确定的机架位置包含:温度范围为 41 到 104°F (5 到 40°C)。湿度范围为 10°F (-12°C)和 8% RH (相对湿度)到 70°F(21°C)和 80% RH。机架位置的气流方向为从前向后，且应具有足够的 CFM (每分钟立方英尺)。CFM 必须是 CDC 配置的 kVA 功耗值的 145.8 倍。</p>
 * @method void setConditionRequirement(boolean $ConditionRequirement) 设置<p>是否满足下面环境条件：1、场地没有材料要求或验收标准会影响 CDC 设备配送和安装。2、确定的机架位置包含:温度范围为 41 到 104°F (5 到 40°C)。湿度范围为 10°F (-12°C)和 8% RH (相对湿度)到 70°F(21°C)和 80% RH。机架位置的气流方向为从前向后，且应具有足够的 CFM (每分钟立方英尺)。CFM 必须是 CDC 配置的 kVA 功耗值的 145.8 倍。</p>
 * @method boolean getDimensionRequirement() 获取<p>是否满足下面的尺寸条件：您的装货站台可以容纳一个机架箱(高 x 宽 x 深 = 94" x 54" x 48")。您可以提供从机架(高 x 宽 x 深 = 80" x 24" x 48")交货地点到机架最终安置位置的明确通道。测量深度时，应包括站台、走廊通道、门、转弯、坡道、货梯，并将其他通道限制考虑在内。在最终的 CDC安置位置，前部间隙可以为 48" 或更大，后部间隙可以为 24" 或更大。</p>
 * @method void setDimensionRequirement(boolean $DimensionRequirement) 设置<p>是否满足下面的尺寸条件：您的装货站台可以容纳一个机架箱(高 x 宽 x 深 = 94" x 54" x 48")。您可以提供从机架(高 x 宽 x 深 = 80" x 24" x 48")交货地点到机架最终安置位置的明确通道。测量深度时，应包括站台、走廊通道、门、转弯、坡道、货梯，并将其他通道限制考虑在内。在最终的 CDC安置位置，前部间隙可以为 48" 或更大，后部间隙可以为 24" 或更大。</p>
 * @method boolean getRedundantNetworking() 获取<p>是否提供冗余的上游设备(交换机或路由器)，以便两台  网络设备都能连接到网络设备。</p>
 * @method void setRedundantNetworking(boolean $RedundantNetworking) 设置<p>是否提供冗余的上游设备(交换机或路由器)，以便两台  网络设备都能连接到网络设备。</p>
 * @method integer getPostalCode() 获取<p>站点所在地区的邮编</p>
 * @method void setPostalCode(integer $PostalCode) 设置<p>站点所在地区的邮编</p>
 * @method string getOptionalAddressLine() 获取<p>站点所在地区的详细地址信息（补充）</p>
 * @method void setOptionalAddressLine(string $OptionalAddressLine) 设置<p>站点所在地区的详细地址信息（补充）</p>
 * @method boolean getNeedHelp() 获取<p>是否需要腾讯云团队协助完成机架支撑工作</p>
 * @method void setNeedHelp(boolean $NeedHelp) 设置<p>是否需要腾讯云团队协助完成机架支撑工作</p>
 * @method boolean getRedundantPower() 获取<p>是否电源冗余</p>
 * @method void setRedundantPower(boolean $RedundantPower) 设置<p>是否电源冗余</p>
 * @method boolean getBreakerRequirement() 获取<p>上游断路器是否具备</p>
 * @method void setBreakerRequirement(boolean $BreakerRequirement) 设置<p>上游断路器是否具备</p>
 */
class CreateSiteRequest extends AbstractModel
{
    /**
     * @var string <p>站点名称</p>
     */
    public $Name;

    /**
     * @var string <p>站点所在国家</p>
     */
    public $Country;

    /**
     * @var string <p>站点所在省份</p>
     */
    public $Province;

    /**
     * @var string <p>站点所在城市</p>
     */
    public $City;

    /**
     * @var string <p>站点所在地区的详细地址信息</p>
     */
    public $AddressLine;

    /**
     * @var string <p>站点描述</p>
     */
    public $Description;

    /**
     * @var string <p>注意事项</p>
     */
    public $Note;

    /**
     * @var string <p>您将使用光纤类型将CDC设备连接到网络。有单模和多模两种选项。取值范围："MM","SM"</p>
     */
    public $FiberType;

    /**
     * @var string <p>您将CDC连接到网络时采用的光学标准。此字段取决于上行链路速度、光纤类型和到上游设备的距离。</p>
     */
    public $OpticalStandard;

    /**
     * @var string <p>电源连接器类型</p>
     */
    public $PowerConnectors;

    /**
     * @var string <p>从机架上方还是下方供电。取值范围：["UP","DOWN"]</p>
     */
    public $PowerFeedDrop;

    /**
     * @var integer <p>最大承重(KG)</p>
     */
    public $MaxWeight;

    /**
     * @var integer <p>功耗(KW)</p>
     */
    public $PowerDrawKva;

    /**
     * @var integer <p>网络到腾讯云Region区域的上行链路速度(Gbps)</p>
     */
    public $UplinkSpeedGbps;

    /**
     * @var integer <p>将CDC连接到网络时，每台CDC网络设备(每个机架 2 台设备)使用的上行链路数量。</p>
     */
    public $UplinkCount;

    /**
     * @var boolean <p>是否满足下面环境条件：1、场地没有材料要求或验收标准会影响 CDC 设备配送和安装。2、确定的机架位置包含:温度范围为 41 到 104°F (5 到 40°C)。湿度范围为 10°F (-12°C)和 8% RH (相对湿度)到 70°F(21°C)和 80% RH。机架位置的气流方向为从前向后，且应具有足够的 CFM (每分钟立方英尺)。CFM 必须是 CDC 配置的 kVA 功耗值的 145.8 倍。</p>
     */
    public $ConditionRequirement;

    /**
     * @var boolean <p>是否满足下面的尺寸条件：您的装货站台可以容纳一个机架箱(高 x 宽 x 深 = 94" x 54" x 48")。您可以提供从机架(高 x 宽 x 深 = 80" x 24" x 48")交货地点到机架最终安置位置的明确通道。测量深度时，应包括站台、走廊通道、门、转弯、坡道、货梯，并将其他通道限制考虑在内。在最终的 CDC安置位置，前部间隙可以为 48" 或更大，后部间隙可以为 24" 或更大。</p>
     */
    public $DimensionRequirement;

    /**
     * @var boolean <p>是否提供冗余的上游设备(交换机或路由器)，以便两台  网络设备都能连接到网络设备。</p>
     */
    public $RedundantNetworking;

    /**
     * @var integer <p>站点所在地区的邮编</p>
     */
    public $PostalCode;

    /**
     * @var string <p>站点所在地区的详细地址信息（补充）</p>
     */
    public $OptionalAddressLine;

    /**
     * @var boolean <p>是否需要腾讯云团队协助完成机架支撑工作</p>
     */
    public $NeedHelp;

    /**
     * @var boolean <p>是否电源冗余</p>
     */
    public $RedundantPower;

    /**
     * @var boolean <p>上游断路器是否具备</p>
     */
    public $BreakerRequirement;

    /**
     * @param string $Name <p>站点名称</p>
     * @param string $Country <p>站点所在国家</p>
     * @param string $Province <p>站点所在省份</p>
     * @param string $City <p>站点所在城市</p>
     * @param string $AddressLine <p>站点所在地区的详细地址信息</p>
     * @param string $Description <p>站点描述</p>
     * @param string $Note <p>注意事项</p>
     * @param string $FiberType <p>您将使用光纤类型将CDC设备连接到网络。有单模和多模两种选项。取值范围："MM","SM"</p>
     * @param string $OpticalStandard <p>您将CDC连接到网络时采用的光学标准。此字段取决于上行链路速度、光纤类型和到上游设备的距离。</p>
     * @param string $PowerConnectors <p>电源连接器类型</p>
     * @param string $PowerFeedDrop <p>从机架上方还是下方供电。取值范围：["UP","DOWN"]</p>
     * @param integer $MaxWeight <p>最大承重(KG)</p>
     * @param integer $PowerDrawKva <p>功耗(KW)</p>
     * @param integer $UplinkSpeedGbps <p>网络到腾讯云Region区域的上行链路速度(Gbps)</p>
     * @param integer $UplinkCount <p>将CDC连接到网络时，每台CDC网络设备(每个机架 2 台设备)使用的上行链路数量。</p>
     * @param boolean $ConditionRequirement <p>是否满足下面环境条件：1、场地没有材料要求或验收标准会影响 CDC 设备配送和安装。2、确定的机架位置包含:温度范围为 41 到 104°F (5 到 40°C)。湿度范围为 10°F (-12°C)和 8% RH (相对湿度)到 70°F(21°C)和 80% RH。机架位置的气流方向为从前向后，且应具有足够的 CFM (每分钟立方英尺)。CFM 必须是 CDC 配置的 kVA 功耗值的 145.8 倍。</p>
     * @param boolean $DimensionRequirement <p>是否满足下面的尺寸条件：您的装货站台可以容纳一个机架箱(高 x 宽 x 深 = 94" x 54" x 48")。您可以提供从机架(高 x 宽 x 深 = 80" x 24" x 48")交货地点到机架最终安置位置的明确通道。测量深度时，应包括站台、走廊通道、门、转弯、坡道、货梯，并将其他通道限制考虑在内。在最终的 CDC安置位置，前部间隙可以为 48" 或更大，后部间隙可以为 24" 或更大。</p>
     * @param boolean $RedundantNetworking <p>是否提供冗余的上游设备(交换机或路由器)，以便两台  网络设备都能连接到网络设备。</p>
     * @param integer $PostalCode <p>站点所在地区的邮编</p>
     * @param string $OptionalAddressLine <p>站点所在地区的详细地址信息（补充）</p>
     * @param boolean $NeedHelp <p>是否需要腾讯云团队协助完成机架支撑工作</p>
     * @param boolean $RedundantPower <p>是否电源冗余</p>
     * @param boolean $BreakerRequirement <p>上游断路器是否具备</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("AddressLine",$param) and $param["AddressLine"] !== null) {
            $this->AddressLine = $param["AddressLine"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
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

        if (array_key_exists("PostalCode",$param) and $param["PostalCode"] !== null) {
            $this->PostalCode = $param["PostalCode"];
        }

        if (array_key_exists("OptionalAddressLine",$param) and $param["OptionalAddressLine"] !== null) {
            $this->OptionalAddressLine = $param["OptionalAddressLine"];
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
