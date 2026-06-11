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
 * Nat实例卡片详细信息
 *
 * @method string getNatinsId() 获取<p>nat实例id</p>
 * @method void setNatinsId(string $NatinsId) 设置<p>nat实例id</p>
 * @method string getNatinsName() 获取<p>nat实例名称</p>
 * @method void setNatinsName(string $NatinsName) 设置<p>nat实例名称</p>
 * @method string getRegion() 获取<p>实例所在地域</p>
 * @method void setRegion(string $Region) 设置<p>实例所在地域</p>
 * @method integer getFwMode() 获取<p>0: 新增模式，1:接入模式</p>
 * @method void setFwMode(integer $FwMode) 设置<p>0: 新增模式，1:接入模式</p>
 * @method integer getBandWidth() 获取<p>实例带宽大小 Mbps</p>
 * @method void setBandWidth(integer $BandWidth) 设置<p>实例带宽大小 Mbps</p>
 * @method integer getInFlowMax() 获取<p>入向带宽峰值 bps</p>
 * @method void setInFlowMax(integer $InFlowMax) 设置<p>入向带宽峰值 bps</p>
 * @method integer getOutFlowMax() 获取<p>出向带宽峰值 bps</p>
 * @method void setOutFlowMax(integer $OutFlowMax) 设置<p>出向带宽峰值 bps</p>
 * @method string getRegionZh() 获取<p>地域中文信息</p>
 * @method void setRegionZh(string $RegionZh) 设置<p>地域中文信息</p>
 * @method array getEipAddress() 获取<p>公网ip数组</p>
 * @method void setEipAddress(array $EipAddress) 设置<p>公网ip数组</p>
 * @method array getVpcIp() 获取<p>内外使用ip数组</p>
 * @method void setVpcIp(array $VpcIp) 设置<p>内外使用ip数组</p>
 * @method array getSubnets() 获取<p>实例关联子网数组</p>
 * @method void setSubnets(array $Subnets) 设置<p>实例关联子网数组</p>
 * @method integer getStatus() 获取<p>0 :正常 1：正在初始化</p>
 * @method void setStatus(integer $Status) 设置<p>0 :正常 1：正在初始化</p>
 * @method string getRegionDetail() 获取<p>地域区域信息</p>
 * @method void setRegionDetail(string $RegionDetail) 设置<p>地域区域信息</p>
 * @method string getZoneZh() 获取<p>实例所在可用区</p>
 * @method void setZoneZh(string $ZoneZh) 设置<p>实例所在可用区</p>
 * @method string getZoneZhBak() 获取<p>实例所在可用区</p>
 * @method void setZoneZhBak(string $ZoneZhBak) 设置<p>实例所在可用区</p>
 * @method integer getRuleUsed() 获取<p>已使用规则数</p>
 * @method void setRuleUsed(integer $RuleUsed) 设置<p>已使用规则数</p>
 * @method integer getRuleMax() 获取<p>实例的规则限制最大规格数</p>
 * @method void setRuleMax(integer $RuleMax) 设置<p>实例的规则限制最大规格数</p>
 * @method string getEngineVersion() 获取<p>实例引擎版本</p>
 * @method void setEngineVersion(string $EngineVersion) 设置<p>实例引擎版本</p>
 * @method integer getUpdateEnable() 获取<p>引擎是否可升级：0，不可升级；1，可升级</p>
 * @method void setUpdateEnable(integer $UpdateEnable) 设置<p>引擎是否可升级：0，不可升级；1，可升级</p>
 * @method integer getNeedProbeEngineUpdate() 获取<p>是的需要升级引擎 支持 nat拨测 1需要 0不需要</p>
 * @method void setNeedProbeEngineUpdate(integer $NeedProbeEngineUpdate) 设置<p>是的需要升级引擎 支持 nat拨测 1需要 0不需要</p>
 * @method string getTrafficMode() 获取<p>引擎运行模式，Normal:正常, OnlyRoute:透明模式</p>
 * @method void setTrafficMode(string $TrafficMode) 设置<p>引擎运行模式，Normal:正常, OnlyRoute:透明模式</p>
 * @method string getZone() 获取<p>实例主所在可用区</p>
 * @method void setZone(string $Zone) 设置<p>实例主所在可用区</p>
 * @method string getZoneBak() 获取<p>实例备所在可用区</p>
 * @method void setZoneBak(string $ZoneBak) 设置<p>实例备所在可用区</p>
 * @method string getReserveTime() 获取<p>引擎预约升级时间</p>
 * @method void setReserveTime(string $ReserveTime) 设置<p>引擎预约升级时间</p>
 * @method string getReserveVersion() 获取<p>引擎预约升级版本</p>
 * @method void setReserveVersion(string $ReserveVersion) 设置<p>引擎预约升级版本</p>
 * @method string getReserveVersionState() 获取<p>引擎预约升级版本状态 stable:稳定版；previewed:预览版</p>
 * @method void setReserveVersionState(string $ReserveVersionState) 设置<p>引擎预约升级版本状态 stable:稳定版；previewed:预览版</p>
 * @method integer getElasticSwitch() 获取<p>弹性开关<br>1 打开<br>0 关闭</p>
 * @method void setElasticSwitch(integer $ElasticSwitch) 设置<p>弹性开关<br>1 打开<br>0 关闭</p>
 * @method integer getElasticBandwidth() 获取<p>弹性带宽，单位Mbps</p>
 * @method void setElasticBandwidth(integer $ElasticBandwidth) 设置<p>弹性带宽，单位Mbps</p>
 * @method integer getIsFirstAfterPay() 获取<p>是否首次开通按量付费<br>1 是<br>0 不是</p>
 * @method void setIsFirstAfterPay(integer $IsFirstAfterPay) 设置<p>是否首次开通按量付费<br>1 是<br>0 不是</p>
 * @method integer getElasticTrafficSwitch() 获取<p>按流量弹性开关</p><p>默认值：0</p>
 * @method void setElasticTrafficSwitch(integer $ElasticTrafficSwitch) 设置<p>按流量弹性开关</p><p>默认值：0</p>
 */
class NatInstanceInfo extends AbstractModel
{
    /**
     * @var string <p>nat实例id</p>
     */
    public $NatinsId;

    /**
     * @var string <p>nat实例名称</p>
     */
    public $NatinsName;

    /**
     * @var string <p>实例所在地域</p>
     */
    public $Region;

    /**
     * @var integer <p>0: 新增模式，1:接入模式</p>
     */
    public $FwMode;

    /**
     * @var integer <p>实例带宽大小 Mbps</p>
     */
    public $BandWidth;

    /**
     * @var integer <p>入向带宽峰值 bps</p>
     */
    public $InFlowMax;

    /**
     * @var integer <p>出向带宽峰值 bps</p>
     */
    public $OutFlowMax;

    /**
     * @var string <p>地域中文信息</p>
     */
    public $RegionZh;

    /**
     * @var array <p>公网ip数组</p>
     */
    public $EipAddress;

    /**
     * @var array <p>内外使用ip数组</p>
     */
    public $VpcIp;

    /**
     * @var array <p>实例关联子网数组</p>
     */
    public $Subnets;

    /**
     * @var integer <p>0 :正常 1：正在初始化</p>
     */
    public $Status;

    /**
     * @var string <p>地域区域信息</p>
     */
    public $RegionDetail;

    /**
     * @var string <p>实例所在可用区</p>
     */
    public $ZoneZh;

    /**
     * @var string <p>实例所在可用区</p>
     */
    public $ZoneZhBak;

    /**
     * @var integer <p>已使用规则数</p>
     */
    public $RuleUsed;

    /**
     * @var integer <p>实例的规则限制最大规格数</p>
     */
    public $RuleMax;

    /**
     * @var string <p>实例引擎版本</p>
     */
    public $EngineVersion;

    /**
     * @var integer <p>引擎是否可升级：0，不可升级；1，可升级</p>
     */
    public $UpdateEnable;

    /**
     * @var integer <p>是的需要升级引擎 支持 nat拨测 1需要 0不需要</p>
     */
    public $NeedProbeEngineUpdate;

    /**
     * @var string <p>引擎运行模式，Normal:正常, OnlyRoute:透明模式</p>
     */
    public $TrafficMode;

    /**
     * @var string <p>实例主所在可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>实例备所在可用区</p>
     */
    public $ZoneBak;

    /**
     * @var string <p>引擎预约升级时间</p>
     */
    public $ReserveTime;

    /**
     * @var string <p>引擎预约升级版本</p>
     */
    public $ReserveVersion;

    /**
     * @var string <p>引擎预约升级版本状态 stable:稳定版；previewed:预览版</p>
     */
    public $ReserveVersionState;

    /**
     * @var integer <p>弹性开关<br>1 打开<br>0 关闭</p>
     */
    public $ElasticSwitch;

    /**
     * @var integer <p>弹性带宽，单位Mbps</p>
     */
    public $ElasticBandwidth;

    /**
     * @var integer <p>是否首次开通按量付费<br>1 是<br>0 不是</p>
     */
    public $IsFirstAfterPay;

    /**
     * @var integer <p>按流量弹性开关</p><p>默认值：0</p>
     */
    public $ElasticTrafficSwitch;

    /**
     * @param string $NatinsId <p>nat实例id</p>
     * @param string $NatinsName <p>nat实例名称</p>
     * @param string $Region <p>实例所在地域</p>
     * @param integer $FwMode <p>0: 新增模式，1:接入模式</p>
     * @param integer $BandWidth <p>实例带宽大小 Mbps</p>
     * @param integer $InFlowMax <p>入向带宽峰值 bps</p>
     * @param integer $OutFlowMax <p>出向带宽峰值 bps</p>
     * @param string $RegionZh <p>地域中文信息</p>
     * @param array $EipAddress <p>公网ip数组</p>
     * @param array $VpcIp <p>内外使用ip数组</p>
     * @param array $Subnets <p>实例关联子网数组</p>
     * @param integer $Status <p>0 :正常 1：正在初始化</p>
     * @param string $RegionDetail <p>地域区域信息</p>
     * @param string $ZoneZh <p>实例所在可用区</p>
     * @param string $ZoneZhBak <p>实例所在可用区</p>
     * @param integer $RuleUsed <p>已使用规则数</p>
     * @param integer $RuleMax <p>实例的规则限制最大规格数</p>
     * @param string $EngineVersion <p>实例引擎版本</p>
     * @param integer $UpdateEnable <p>引擎是否可升级：0，不可升级；1，可升级</p>
     * @param integer $NeedProbeEngineUpdate <p>是的需要升级引擎 支持 nat拨测 1需要 0不需要</p>
     * @param string $TrafficMode <p>引擎运行模式，Normal:正常, OnlyRoute:透明模式</p>
     * @param string $Zone <p>实例主所在可用区</p>
     * @param string $ZoneBak <p>实例备所在可用区</p>
     * @param string $ReserveTime <p>引擎预约升级时间</p>
     * @param string $ReserveVersion <p>引擎预约升级版本</p>
     * @param string $ReserveVersionState <p>引擎预约升级版本状态 stable:稳定版；previewed:预览版</p>
     * @param integer $ElasticSwitch <p>弹性开关<br>1 打开<br>0 关闭</p>
     * @param integer $ElasticBandwidth <p>弹性带宽，单位Mbps</p>
     * @param integer $IsFirstAfterPay <p>是否首次开通按量付费<br>1 是<br>0 不是</p>
     * @param integer $ElasticTrafficSwitch <p>按流量弹性开关</p><p>默认值：0</p>
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
        if (array_key_exists("NatinsId",$param) and $param["NatinsId"] !== null) {
            $this->NatinsId = $param["NatinsId"];
        }

        if (array_key_exists("NatinsName",$param) and $param["NatinsName"] !== null) {
            $this->NatinsName = $param["NatinsName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("FwMode",$param) and $param["FwMode"] !== null) {
            $this->FwMode = $param["FwMode"];
        }

        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            $this->BandWidth = $param["BandWidth"];
        }

        if (array_key_exists("InFlowMax",$param) and $param["InFlowMax"] !== null) {
            $this->InFlowMax = $param["InFlowMax"];
        }

        if (array_key_exists("OutFlowMax",$param) and $param["OutFlowMax"] !== null) {
            $this->OutFlowMax = $param["OutFlowMax"];
        }

        if (array_key_exists("RegionZh",$param) and $param["RegionZh"] !== null) {
            $this->RegionZh = $param["RegionZh"];
        }

        if (array_key_exists("EipAddress",$param) and $param["EipAddress"] !== null) {
            $this->EipAddress = $param["EipAddress"];
        }

        if (array_key_exists("VpcIp",$param) and $param["VpcIp"] !== null) {
            $this->VpcIp = $param["VpcIp"];
        }

        if (array_key_exists("Subnets",$param) and $param["Subnets"] !== null) {
            $this->Subnets = $param["Subnets"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RegionDetail",$param) and $param["RegionDetail"] !== null) {
            $this->RegionDetail = $param["RegionDetail"];
        }

        if (array_key_exists("ZoneZh",$param) and $param["ZoneZh"] !== null) {
            $this->ZoneZh = $param["ZoneZh"];
        }

        if (array_key_exists("ZoneZhBak",$param) and $param["ZoneZhBak"] !== null) {
            $this->ZoneZhBak = $param["ZoneZhBak"];
        }

        if (array_key_exists("RuleUsed",$param) and $param["RuleUsed"] !== null) {
            $this->RuleUsed = $param["RuleUsed"];
        }

        if (array_key_exists("RuleMax",$param) and $param["RuleMax"] !== null) {
            $this->RuleMax = $param["RuleMax"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("UpdateEnable",$param) and $param["UpdateEnable"] !== null) {
            $this->UpdateEnable = $param["UpdateEnable"];
        }

        if (array_key_exists("NeedProbeEngineUpdate",$param) and $param["NeedProbeEngineUpdate"] !== null) {
            $this->NeedProbeEngineUpdate = $param["NeedProbeEngineUpdate"];
        }

        if (array_key_exists("TrafficMode",$param) and $param["TrafficMode"] !== null) {
            $this->TrafficMode = $param["TrafficMode"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneBak",$param) and $param["ZoneBak"] !== null) {
            $this->ZoneBak = $param["ZoneBak"];
        }

        if (array_key_exists("ReserveTime",$param) and $param["ReserveTime"] !== null) {
            $this->ReserveTime = $param["ReserveTime"];
        }

        if (array_key_exists("ReserveVersion",$param) and $param["ReserveVersion"] !== null) {
            $this->ReserveVersion = $param["ReserveVersion"];
        }

        if (array_key_exists("ReserveVersionState",$param) and $param["ReserveVersionState"] !== null) {
            $this->ReserveVersionState = $param["ReserveVersionState"];
        }

        if (array_key_exists("ElasticSwitch",$param) and $param["ElasticSwitch"] !== null) {
            $this->ElasticSwitch = $param["ElasticSwitch"];
        }

        if (array_key_exists("ElasticBandwidth",$param) and $param["ElasticBandwidth"] !== null) {
            $this->ElasticBandwidth = $param["ElasticBandwidth"];
        }

        if (array_key_exists("IsFirstAfterPay",$param) and $param["IsFirstAfterPay"] !== null) {
            $this->IsFirstAfterPay = $param["IsFirstAfterPay"];
        }

        if (array_key_exists("ElasticTrafficSwitch",$param) and $param["ElasticTrafficSwitch"] !== null) {
            $this->ElasticTrafficSwitch = $param["ElasticTrafficSwitch"];
        }
    }
}
