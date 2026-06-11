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
 * VPC防火墙实例卡片信息
 *
 * @method string getFwInsName() 获取<p>VPC防火墙实例名称</p>
 * @method void setFwInsName(string $FwInsName) 设置<p>VPC防火墙实例名称</p>
 * @method string getFwInsId() 获取<p>VPC防火墙实例ID</p>
 * @method void setFwInsId(string $FwInsId) 设置<p>VPC防火墙实例ID</p>
 * @method integer getFwMode() 获取<p>VPC防火墙实例模式 0: 旧VPC模式防火墙 1: CCN模式防火墙</p>
 * @method void setFwMode(integer $FwMode) 设置<p>VPC防火墙实例模式 0: 旧VPC模式防火墙 1: CCN模式防火墙</p>
 * @method integer getJoinInsNum() 获取<p>VPC防火墙接入网络实例个数</p>
 * @method void setJoinInsNum(integer $JoinInsNum) 设置<p>VPC防火墙接入网络实例个数</p>
 * @method integer getFwSwitchNum() 获取<p>VPC防火墙开关个数</p>
 * @method void setFwSwitchNum(integer $FwSwitchNum) 设置<p>VPC防火墙开关个数</p>
 * @method integer getStatus() 获取<p>VPC防火墙状态 0:正常 ， 1：创建中 2: 变更中</p>
 * @method void setStatus(integer $Status) 设置<p>VPC防火墙状态 0:正常 ， 1：创建中 2: 变更中</p>
 * @method string getTime() 获取<p>VPC防火墙创建时间</p>
 * @method void setTime(string $Time) 设置<p>VPC防火墙创建时间</p>
 * @method array getCcnId() 获取<p>VPC 相关云联网ID列表</p>
 * @method void setCcnId(array $CcnId) 设置<p>VPC 相关云联网ID列表</p>
 * @method array getCcnName() 获取<p>VPC 相关云联网名称列表</p>
 * @method void setCcnName(array $CcnName) 设置<p>VPC 相关云联网名称列表</p>
 * @method array getPeerConnectionId() 获取<p>VPC 相关对等连接ID列表</p>
 * @method void setPeerConnectionId(array $PeerConnectionId) 设置<p>VPC 相关对等连接ID列表</p>
 * @method array getPeerConnectionName() 获取<p>VPC 相关对等连接名称列表</p>
 * @method void setPeerConnectionName(array $PeerConnectionName) 设置<p>VPC 相关对等连接名称列表</p>
 * @method array getFwCvmLst() 获取<p>VPC防火墙CVM的列表</p>
 * @method void setFwCvmLst(array $FwCvmLst) 设置<p>VPC防火墙CVM的列表</p>
 * @method array getJoinInsLst() 获取<p>VPC防火墙接入网络实例类型列表</p>
 * @method void setJoinInsLst(array $JoinInsLst) 设置<p>VPC防火墙接入网络实例类型列表</p>
 * @method array getFwGateway() 获取<p>防火墙网关信息</p>
 * @method void setFwGateway(array $FwGateway) 设置<p>防火墙网关信息</p>
 * @method string getFwGroupId() 获取<p>防火墙(组)ID</p>
 * @method void setFwGroupId(string $FwGroupId) 设置<p>防火墙(组)ID</p>
 * @method integer getRuleUsed() 获取<p>已使用规则数</p>
 * @method void setRuleUsed(integer $RuleUsed) 设置<p>已使用规则数</p>
 * @method integer getRuleMax() 获取<p>最大规则数</p>
 * @method void setRuleMax(integer $RuleMax) 设置<p>最大规则数</p>
 * @method integer getWidth() 获取<p>防火墙实例带宽</p>
 * @method void setWidth(integer $Width) 设置<p>防火墙实例带宽</p>
 * @method integer getUserVpcWidth() 获取<p>用户VPC墙总带宽</p>
 * @method void setUserVpcWidth(integer $UserVpcWidth) 设置<p>用户VPC墙总带宽</p>
 * @method array getJoinInsIdLst() 获取<p>接入的vpc列表</p>
 * @method void setJoinInsIdLst(array $JoinInsIdLst) 设置<p>接入的vpc列表</p>
 * @method integer getFlowMax() 获取<p>内网间峰值带宽 (单位 bps )</p>
 * @method void setFlowMax(integer $FlowMax) 设置<p>内网间峰值带宽 (单位 bps )</p>
 * @method string getEngineVersion() 获取<p>实例引擎版本</p>
 * @method void setEngineVersion(string $EngineVersion) 设置<p>实例引擎版本</p>
 * @method integer getUpdateEnable() 获取<p>引擎是否可升级：0，不可升级；1，可升级</p>
 * @method void setUpdateEnable(integer $UpdateEnable) 设置<p>引擎是否可升级：0，不可升级；1，可升级</p>
 * @method string getTrafficMode() 获取<p>引擎运行模式，Normal:正常, OnlyRoute:透明模式</p>
 * @method void setTrafficMode(string $TrafficMode) 设置<p>引擎运行模式，Normal:正常, OnlyRoute:透明模式</p>
 * @method string getReserveTime() 获取<p>引擎预约升级时间</p>
 * @method void setReserveTime(string $ReserveTime) 设置<p>引擎预约升级时间</p>
 * @method string getReserveVersion() 获取<p>预约引擎升级版本</p>
 * @method void setReserveVersion(string $ReserveVersion) 设置<p>预约引擎升级版本</p>
 * @method string getReserveVersionState() 获取<p>引擎预约升级版本状态</p>
 * @method void setReserveVersionState(string $ReserveVersionState) 设置<p>引擎预约升级版本状态</p>
 * @method integer getElasticSwitch() 获取<p>弹性开关 1打开 0关闭</p>
 * @method void setElasticSwitch(integer $ElasticSwitch) 设置<p>弹性开关 1打开 0关闭</p>
 * @method integer getElasticBandwidth() 获取<p>弹性带宽，单位Mbps</p>
 * @method void setElasticBandwidth(integer $ElasticBandwidth) 设置<p>弹性带宽，单位Mbps</p>
 * @method integer getIsFirstAfterPay() 获取<p>是否首次开通按量付费<br>1 是<br>0 不是</p>
 * @method void setIsFirstAfterPay(integer $IsFirstAfterPay) 设置<p>是否首次开通按量付费<br>1 是<br>0 不是</p>
 * @method integer getElasticTrafficSwitch() 获取<p>按流量弹性开关</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
 * @method void setElasticTrafficSwitch(integer $ElasticTrafficSwitch) 设置<p>按流量弹性开关</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
 */
class VpcFwInstanceInfo extends AbstractModel
{
    /**
     * @var string <p>VPC防火墙实例名称</p>
     */
    public $FwInsName;

    /**
     * @var string <p>VPC防火墙实例ID</p>
     */
    public $FwInsId;

    /**
     * @var integer <p>VPC防火墙实例模式 0: 旧VPC模式防火墙 1: CCN模式防火墙</p>
     */
    public $FwMode;

    /**
     * @var integer <p>VPC防火墙接入网络实例个数</p>
     */
    public $JoinInsNum;

    /**
     * @var integer <p>VPC防火墙开关个数</p>
     */
    public $FwSwitchNum;

    /**
     * @var integer <p>VPC防火墙状态 0:正常 ， 1：创建中 2: 变更中</p>
     */
    public $Status;

    /**
     * @var string <p>VPC防火墙创建时间</p>
     */
    public $Time;

    /**
     * @var array <p>VPC 相关云联网ID列表</p>
     */
    public $CcnId;

    /**
     * @var array <p>VPC 相关云联网名称列表</p>
     */
    public $CcnName;

    /**
     * @var array <p>VPC 相关对等连接ID列表</p>
     */
    public $PeerConnectionId;

    /**
     * @var array <p>VPC 相关对等连接名称列表</p>
     */
    public $PeerConnectionName;

    /**
     * @var array <p>VPC防火墙CVM的列表</p>
     */
    public $FwCvmLst;

    /**
     * @var array <p>VPC防火墙接入网络实例类型列表</p>
     */
    public $JoinInsLst;

    /**
     * @var array <p>防火墙网关信息</p>
     */
    public $FwGateway;

    /**
     * @var string <p>防火墙(组)ID</p>
     */
    public $FwGroupId;

    /**
     * @var integer <p>已使用规则数</p>
     */
    public $RuleUsed;

    /**
     * @var integer <p>最大规则数</p>
     */
    public $RuleMax;

    /**
     * @var integer <p>防火墙实例带宽</p>
     */
    public $Width;

    /**
     * @var integer <p>用户VPC墙总带宽</p>
     */
    public $UserVpcWidth;

    /**
     * @var array <p>接入的vpc列表</p>
     */
    public $JoinInsIdLst;

    /**
     * @var integer <p>内网间峰值带宽 (单位 bps )</p>
     */
    public $FlowMax;

    /**
     * @var string <p>实例引擎版本</p>
     */
    public $EngineVersion;

    /**
     * @var integer <p>引擎是否可升级：0，不可升级；1，可升级</p>
     */
    public $UpdateEnable;

    /**
     * @var string <p>引擎运行模式，Normal:正常, OnlyRoute:透明模式</p>
     */
    public $TrafficMode;

    /**
     * @var string <p>引擎预约升级时间</p>
     */
    public $ReserveTime;

    /**
     * @var string <p>预约引擎升级版本</p>
     */
    public $ReserveVersion;

    /**
     * @var string <p>引擎预约升级版本状态</p>
     */
    public $ReserveVersionState;

    /**
     * @var integer <p>弹性开关 1打开 0关闭</p>
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
     * @var integer <p>按流量弹性开关</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
     */
    public $ElasticTrafficSwitch;

    /**
     * @param string $FwInsName <p>VPC防火墙实例名称</p>
     * @param string $FwInsId <p>VPC防火墙实例ID</p>
     * @param integer $FwMode <p>VPC防火墙实例模式 0: 旧VPC模式防火墙 1: CCN模式防火墙</p>
     * @param integer $JoinInsNum <p>VPC防火墙接入网络实例个数</p>
     * @param integer $FwSwitchNum <p>VPC防火墙开关个数</p>
     * @param integer $Status <p>VPC防火墙状态 0:正常 ， 1：创建中 2: 变更中</p>
     * @param string $Time <p>VPC防火墙创建时间</p>
     * @param array $CcnId <p>VPC 相关云联网ID列表</p>
     * @param array $CcnName <p>VPC 相关云联网名称列表</p>
     * @param array $PeerConnectionId <p>VPC 相关对等连接ID列表</p>
     * @param array $PeerConnectionName <p>VPC 相关对等连接名称列表</p>
     * @param array $FwCvmLst <p>VPC防火墙CVM的列表</p>
     * @param array $JoinInsLst <p>VPC防火墙接入网络实例类型列表</p>
     * @param array $FwGateway <p>防火墙网关信息</p>
     * @param string $FwGroupId <p>防火墙(组)ID</p>
     * @param integer $RuleUsed <p>已使用规则数</p>
     * @param integer $RuleMax <p>最大规则数</p>
     * @param integer $Width <p>防火墙实例带宽</p>
     * @param integer $UserVpcWidth <p>用户VPC墙总带宽</p>
     * @param array $JoinInsIdLst <p>接入的vpc列表</p>
     * @param integer $FlowMax <p>内网间峰值带宽 (单位 bps )</p>
     * @param string $EngineVersion <p>实例引擎版本</p>
     * @param integer $UpdateEnable <p>引擎是否可升级：0，不可升级；1，可升级</p>
     * @param string $TrafficMode <p>引擎运行模式，Normal:正常, OnlyRoute:透明模式</p>
     * @param string $ReserveTime <p>引擎预约升级时间</p>
     * @param string $ReserveVersion <p>预约引擎升级版本</p>
     * @param string $ReserveVersionState <p>引擎预约升级版本状态</p>
     * @param integer $ElasticSwitch <p>弹性开关 1打开 0关闭</p>
     * @param integer $ElasticBandwidth <p>弹性带宽，单位Mbps</p>
     * @param integer $IsFirstAfterPay <p>是否首次开通按量付费<br>1 是<br>0 不是</p>
     * @param integer $ElasticTrafficSwitch <p>按流量弹性开关</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
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
        if (array_key_exists("FwInsName",$param) and $param["FwInsName"] !== null) {
            $this->FwInsName = $param["FwInsName"];
        }

        if (array_key_exists("FwInsId",$param) and $param["FwInsId"] !== null) {
            $this->FwInsId = $param["FwInsId"];
        }

        if (array_key_exists("FwMode",$param) and $param["FwMode"] !== null) {
            $this->FwMode = $param["FwMode"];
        }

        if (array_key_exists("JoinInsNum",$param) and $param["JoinInsNum"] !== null) {
            $this->JoinInsNum = $param["JoinInsNum"];
        }

        if (array_key_exists("FwSwitchNum",$param) and $param["FwSwitchNum"] !== null) {
            $this->FwSwitchNum = $param["FwSwitchNum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("CcnName",$param) and $param["CcnName"] !== null) {
            $this->CcnName = $param["CcnName"];
        }

        if (array_key_exists("PeerConnectionId",$param) and $param["PeerConnectionId"] !== null) {
            $this->PeerConnectionId = $param["PeerConnectionId"];
        }

        if (array_key_exists("PeerConnectionName",$param) and $param["PeerConnectionName"] !== null) {
            $this->PeerConnectionName = $param["PeerConnectionName"];
        }

        if (array_key_exists("FwCvmLst",$param) and $param["FwCvmLst"] !== null) {
            $this->FwCvmLst = [];
            foreach ($param["FwCvmLst"] as $key => $value){
                $obj = new VpcFwCvmInsInfo();
                $obj->deserialize($value);
                array_push($this->FwCvmLst, $obj);
            }
        }

        if (array_key_exists("JoinInsLst",$param) and $param["JoinInsLst"] !== null) {
            $this->JoinInsLst = [];
            foreach ($param["JoinInsLst"] as $key => $value){
                $obj = new VpcFwJoinInstanceType();
                $obj->deserialize($value);
                array_push($this->JoinInsLst, $obj);
            }
        }

        if (array_key_exists("FwGateway",$param) and $param["FwGateway"] !== null) {
            $this->FwGateway = [];
            foreach ($param["FwGateway"] as $key => $value){
                $obj = new FwGateway();
                $obj->deserialize($value);
                array_push($this->FwGateway, $obj);
            }
        }

        if (array_key_exists("FwGroupId",$param) and $param["FwGroupId"] !== null) {
            $this->FwGroupId = $param["FwGroupId"];
        }

        if (array_key_exists("RuleUsed",$param) and $param["RuleUsed"] !== null) {
            $this->RuleUsed = $param["RuleUsed"];
        }

        if (array_key_exists("RuleMax",$param) and $param["RuleMax"] !== null) {
            $this->RuleMax = $param["RuleMax"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("UserVpcWidth",$param) and $param["UserVpcWidth"] !== null) {
            $this->UserVpcWidth = $param["UserVpcWidth"];
        }

        if (array_key_exists("JoinInsIdLst",$param) and $param["JoinInsIdLst"] !== null) {
            $this->JoinInsIdLst = $param["JoinInsIdLst"];
        }

        if (array_key_exists("FlowMax",$param) and $param["FlowMax"] !== null) {
            $this->FlowMax = $param["FlowMax"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("UpdateEnable",$param) and $param["UpdateEnable"] !== null) {
            $this->UpdateEnable = $param["UpdateEnable"];
        }

        if (array_key_exists("TrafficMode",$param) and $param["TrafficMode"] !== null) {
            $this->TrafficMode = $param["TrafficMode"];
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
