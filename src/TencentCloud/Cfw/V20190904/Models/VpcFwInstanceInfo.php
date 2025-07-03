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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC防火墙实例卡片信息
 *
 * @method string getFwInsName() 获取VPC防火墙实例名称
 * @method void setFwInsName(string $FwInsName) 设置VPC防火墙实例名称
 * @method string getFwInsId() 获取VPC防火墙实例ID
 * @method void setFwInsId(string $FwInsId) 设置VPC防火墙实例ID
 * @method integer getFwMode() 获取VPC防火墙实例模式 0: 旧VPC模式防火墙 1: CCN模式防火墙
 * @method void setFwMode(integer $FwMode) 设置VPC防火墙实例模式 0: 旧VPC模式防火墙 1: CCN模式防火墙
 * @method integer getJoinInsNum() 获取VPC防火墙接入网络实例个数
 * @method void setJoinInsNum(integer $JoinInsNum) 设置VPC防火墙接入网络实例个数
 * @method integer getFwSwitchNum() 获取VPC防火墙开关个数
 * @method void setFwSwitchNum(integer $FwSwitchNum) 设置VPC防火墙开关个数
 * @method integer getStatus() 获取VPC防火墙状态 0:正常 ， 1：创建中 2: 变更中
 * @method void setStatus(integer $Status) 设置VPC防火墙状态 0:正常 ， 1：创建中 2: 变更中
 * @method string getTime() 获取VPC防火墙创建时间
 * @method void setTime(string $Time) 设置VPC防火墙创建时间
 * @method array getCcnId() 获取VPC 相关云联网ID列表
 * @method void setCcnId(array $CcnId) 设置VPC 相关云联网ID列表
 * @method array getCcnName() 获取VPC 相关云联网名称列表
 * @method void setCcnName(array $CcnName) 设置VPC 相关云联网名称列表
 * @method array getPeerConnectionId() 获取VPC 相关对等连接ID列表
 * @method void setPeerConnectionId(array $PeerConnectionId) 设置VPC 相关对等连接ID列表
 * @method array getPeerConnectionName() 获取VPC 相关对等连接名称列表
 * @method void setPeerConnectionName(array $PeerConnectionName) 设置VPC 相关对等连接名称列表
 * @method array getFwCvmLst() 获取VPC防火墙CVM的列表
 * @method void setFwCvmLst(array $FwCvmLst) 设置VPC防火墙CVM的列表
 * @method array getJoinInsLst() 获取VPC防火墙接入网络实例类型列表
 * @method void setJoinInsLst(array $JoinInsLst) 设置VPC防火墙接入网络实例类型列表
 * @method array getFwGateway() 获取防火墙网关信息
 * @method void setFwGateway(array $FwGateway) 设置防火墙网关信息
 * @method string getFwGroupId() 获取防火墙(组)ID
 * @method void setFwGroupId(string $FwGroupId) 设置防火墙(组)ID
 * @method integer getRuleUsed() 获取已使用规则数
 * @method void setRuleUsed(integer $RuleUsed) 设置已使用规则数
 * @method integer getRuleMax() 获取最大规则数
 * @method void setRuleMax(integer $RuleMax) 设置最大规则数
 * @method integer getWidth() 获取防火墙实例带宽
 * @method void setWidth(integer $Width) 设置防火墙实例带宽
 * @method integer getUserVpcWidth() 获取用户VPC墙总带宽
 * @method void setUserVpcWidth(integer $UserVpcWidth) 设置用户VPC墙总带宽
 * @method array getJoinInsIdLst() 获取接入的vpc列表
 * @method void setJoinInsIdLst(array $JoinInsIdLst) 设置接入的vpc列表
 * @method integer getFlowMax() 获取内网间峰值带宽 (单位 bps )
 * @method void setFlowMax(integer $FlowMax) 设置内网间峰值带宽 (单位 bps )
 * @method string getEngineVersion() 获取实例引擎版本
 * @method void setEngineVersion(string $EngineVersion) 设置实例引擎版本
 * @method integer getUpdateEnable() 获取引擎是否可升级：0，不可升级；1，可升级
 * @method void setUpdateEnable(integer $UpdateEnable) 设置引擎是否可升级：0，不可升级；1，可升级
 * @method string getTrafficMode() 获取引擎运行模式，Normal:正常, OnlyRoute:透明模式
 * @method void setTrafficMode(string $TrafficMode) 设置引擎运行模式，Normal:正常, OnlyRoute:透明模式
 * @method string getReserveTime() 获取引擎预约升级时间
 * @method void setReserveTime(string $ReserveTime) 设置引擎预约升级时间
 * @method string getReserveVersion() 获取预约引擎升级版本
 * @method void setReserveVersion(string $ReserveVersion) 设置预约引擎升级版本
 * @method string getReserveVersionState() 获取引擎预约升级版本状态
 * @method void setReserveVersionState(string $ReserveVersionState) 设置引擎预约升级版本状态
 * @method integer getElasticSwitch() 获取弹性开关 1打开 0关闭
 * @method void setElasticSwitch(integer $ElasticSwitch) 设置弹性开关 1打开 0关闭
 * @method integer getElasticBandwidth() 获取弹性带宽，单位Mbps
 * @method void setElasticBandwidth(integer $ElasticBandwidth) 设置弹性带宽，单位Mbps
 * @method integer getIsFirstAfterPay() 获取是否首次开通按量付费
1 是
0 不是
 * @method void setIsFirstAfterPay(integer $IsFirstAfterPay) 设置是否首次开通按量付费
1 是
0 不是
 */
class VpcFwInstanceInfo extends AbstractModel
{
    /**
     * @var string VPC防火墙实例名称
     */
    public $FwInsName;

    /**
     * @var string VPC防火墙实例ID
     */
    public $FwInsId;

    /**
     * @var integer VPC防火墙实例模式 0: 旧VPC模式防火墙 1: CCN模式防火墙
     */
    public $FwMode;

    /**
     * @var integer VPC防火墙接入网络实例个数
     */
    public $JoinInsNum;

    /**
     * @var integer VPC防火墙开关个数
     */
    public $FwSwitchNum;

    /**
     * @var integer VPC防火墙状态 0:正常 ， 1：创建中 2: 变更中
     */
    public $Status;

    /**
     * @var string VPC防火墙创建时间
     */
    public $Time;

    /**
     * @var array VPC 相关云联网ID列表
     */
    public $CcnId;

    /**
     * @var array VPC 相关云联网名称列表
     */
    public $CcnName;

    /**
     * @var array VPC 相关对等连接ID列表
     */
    public $PeerConnectionId;

    /**
     * @var array VPC 相关对等连接名称列表
     */
    public $PeerConnectionName;

    /**
     * @var array VPC防火墙CVM的列表
     */
    public $FwCvmLst;

    /**
     * @var array VPC防火墙接入网络实例类型列表
     */
    public $JoinInsLst;

    /**
     * @var array 防火墙网关信息
     */
    public $FwGateway;

    /**
     * @var string 防火墙(组)ID
     */
    public $FwGroupId;

    /**
     * @var integer 已使用规则数
     */
    public $RuleUsed;

    /**
     * @var integer 最大规则数
     */
    public $RuleMax;

    /**
     * @var integer 防火墙实例带宽
     */
    public $Width;

    /**
     * @var integer 用户VPC墙总带宽
     */
    public $UserVpcWidth;

    /**
     * @var array 接入的vpc列表
     */
    public $JoinInsIdLst;

    /**
     * @var integer 内网间峰值带宽 (单位 bps )
     */
    public $FlowMax;

    /**
     * @var string 实例引擎版本
     */
    public $EngineVersion;

    /**
     * @var integer 引擎是否可升级：0，不可升级；1，可升级
     */
    public $UpdateEnable;

    /**
     * @var string 引擎运行模式，Normal:正常, OnlyRoute:透明模式
     */
    public $TrafficMode;

    /**
     * @var string 引擎预约升级时间
     */
    public $ReserveTime;

    /**
     * @var string 预约引擎升级版本
     */
    public $ReserveVersion;

    /**
     * @var string 引擎预约升级版本状态
     */
    public $ReserveVersionState;

    /**
     * @var integer 弹性开关 1打开 0关闭
     */
    public $ElasticSwitch;

    /**
     * @var integer 弹性带宽，单位Mbps
     */
    public $ElasticBandwidth;

    /**
     * @var integer 是否首次开通按量付费
1 是
0 不是
     */
    public $IsFirstAfterPay;

    /**
     * @param string $FwInsName VPC防火墙实例名称
     * @param string $FwInsId VPC防火墙实例ID
     * @param integer $FwMode VPC防火墙实例模式 0: 旧VPC模式防火墙 1: CCN模式防火墙
     * @param integer $JoinInsNum VPC防火墙接入网络实例个数
     * @param integer $FwSwitchNum VPC防火墙开关个数
     * @param integer $Status VPC防火墙状态 0:正常 ， 1：创建中 2: 变更中
     * @param string $Time VPC防火墙创建时间
     * @param array $CcnId VPC 相关云联网ID列表
     * @param array $CcnName VPC 相关云联网名称列表
     * @param array $PeerConnectionId VPC 相关对等连接ID列表
     * @param array $PeerConnectionName VPC 相关对等连接名称列表
     * @param array $FwCvmLst VPC防火墙CVM的列表
     * @param array $JoinInsLst VPC防火墙接入网络实例类型列表
     * @param array $FwGateway 防火墙网关信息
     * @param string $FwGroupId 防火墙(组)ID
     * @param integer $RuleUsed 已使用规则数
     * @param integer $RuleMax 最大规则数
     * @param integer $Width 防火墙实例带宽
     * @param integer $UserVpcWidth 用户VPC墙总带宽
     * @param array $JoinInsIdLst 接入的vpc列表
     * @param integer $FlowMax 内网间峰值带宽 (单位 bps )
     * @param string $EngineVersion 实例引擎版本
     * @param integer $UpdateEnable 引擎是否可升级：0，不可升级；1，可升级
     * @param string $TrafficMode 引擎运行模式，Normal:正常, OnlyRoute:透明模式
     * @param string $ReserveTime 引擎预约升级时间
     * @param string $ReserveVersion 预约引擎升级版本
     * @param string $ReserveVersionState 引擎预约升级版本状态
     * @param integer $ElasticSwitch 弹性开关 1打开 0关闭
     * @param integer $ElasticBandwidth 弹性带宽，单位Mbps
     * @param integer $IsFirstAfterPay 是否首次开通按量付费
1 是
0 不是
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
    }
}
