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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 一个实例的详细信息
 *
 * @method string getInstanceId() 获取实例唯一ID
 * @method void setInstanceId(string $InstanceId) 设置实例唯一ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getResourceIds() 获取实例对应资源ID，计费使用
 * @method void setResourceIds(string $ResourceIds) 设置实例对应资源ID，计费使用
 * @method string getRegion() 获取实例所属地域
 * @method void setRegion(string $Region) 设置实例所属地域
 * @method integer getPayMode() 获取付费模式
 * @method void setPayMode(integer $PayMode) 设置付费模式
 * @method integer getRenewFlag() 获取自动续费标识。
0：关闭
1：开启
 * @method void setRenewFlag(integer $RenewFlag) 设置自动续费标识。
0：关闭
1：开启
 * @method integer getMode() 获取弹性计费开关。
0：关闭
1：开启
 * @method void setMode(integer $Mode) 设置弹性计费开关。
0：关闭
1：开启
 * @method integer getLevel() 获取实例套餐版本。
101：小微版
102：超轻版
2：高级版
3：企业版
4：旗舰版
6：独享版
 * @method void setLevel(integer $Level) 设置实例套餐版本。
101：小微版
102：超轻版
2：高级版
3：企业版
4：旗舰版
6：独享版
 * @method string getValidTime() 获取实例过期时间
 * @method void setValidTime(string $ValidTime) 设置实例过期时间
 * @method string getBeginTime() 获取实例开始时间
 * @method void setBeginTime(string $BeginTime) 设置实例开始时间
 * @method integer getDomainCount() 获取已配置域名个数
 * @method void setDomainCount(integer $DomainCount) 设置已配置域名个数
 * @method integer getSubDomainLimit() 获取域名数量上限
 * @method void setSubDomainLimit(integer $SubDomainLimit) 设置域名数量上限
 * @method integer getMainDomainCount() 获取已配置主域名个数
 * @method void setMainDomainCount(integer $MainDomainCount) 设置已配置主域名个数
 * @method integer getMainDomainLimit() 获取主域名数量上限
 * @method void setMainDomainLimit(integer $MainDomainLimit) 设置主域名数量上限
 * @method integer getMaxQPS() 获取实例30天内QPS峰值
 * @method void setMaxQPS(integer $MaxQPS) 设置实例30天内QPS峰值
 * @method QPSPackageNew getQPS() 获取qps扩展包信息
 * @method void setQPS(QPSPackageNew $QPS) 设置qps扩展包信息
 * @method DomainPackageNew getDomainPkg() 获取域名扩展包信息
 * @method void setDomainPkg(DomainPackageNew $DomainPkg) 设置域名扩展包信息
 * @method integer getAppId() 获取用户appid
 * @method void setAppId(integer $AppId) 设置用户appid
 * @method string getEdition() 获取clb或saas
 * @method void setEdition(string $Edition) 设置clb或saas
 * @method FraudPkg getFraudPkg() 获取业务安全包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFraudPkg(FraudPkg $FraudPkg) 设置业务安全包
注意：此字段可能返回 null，表示取不到有效值。
 * @method BotPkg getBotPkg() 获取Bot资源包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBotPkg(BotPkg $BotPkg) 设置Bot资源包
注意：此字段可能返回 null，表示取不到有效值。
 * @method BotQPS getBotQPS() 获取bot的qps详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBotQPS(BotQPS $BotQPS) 设置bot的qps详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getElasticBilling() 获取qps弹性计费上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElasticBilling(integer $ElasticBilling) 设置qps弹性计费上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttackLogPost() 获取攻击日志投递开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackLogPost(integer $AttackLogPost) 设置攻击日志投递开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxBandwidth() 获取带宽峰值，单位为B/s(字节每秒)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxBandwidth(integer $MaxBandwidth) 设置带宽峰值，单位为B/s(字节每秒)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAPISecurity() 获取api安全是否购买
 * @method void setAPISecurity(integer $APISecurity) 设置api安全是否购买
 * @method integer getQpsStandard() 获取购买的qps规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQpsStandard(integer $QpsStandard) 设置购买的qps规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBandwidthStandard() 获取购买的带宽规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidthStandard(integer $BandwidthStandard) 设置购买的带宽规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSandboxQps() 获取实例沙箱qps值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSandboxQps(integer $SandboxQps) 设置实例沙箱qps值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsAPISecurityTrial() 获取是否api 安全试用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAPISecurityTrial(integer $IsAPISecurityTrial) 设置是否api 安全试用
注意：此字段可能返回 null，表示取不到有效值。
 * @method MajorEventsPkg getMajorEventsPkg() 获取重保包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMajorEventsPkg(MajorEventsPkg $MajorEventsPkg) 设置重保包
注意：此字段可能返回 null，表示取不到有效值。
 * @method HybridPkg getHybridPkg() 获取混合云子节点包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHybridPkg(HybridPkg $HybridPkg) 设置混合云子节点包
注意：此字段可能返回 null，表示取不到有效值。
 * @method ApiPkg getApiPkg() 获取API安全资源包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiPkg(ApiPkg $ApiPkg) 设置API安全资源包
注意：此字段可能返回 null，表示取不到有效值。
 * @method MiniPkg getMiniPkg() 获取小程序安全加速包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMiniPkg(MiniPkg $MiniPkg) 设置小程序安全加速包
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMiniQpsStandard() 获取小程序qps规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMiniQpsStandard(integer $MiniQpsStandard) 设置小程序qps规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMiniMaxQPS() 获取小程序qps峰值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMiniMaxQPS(integer $MiniMaxQPS) 设置小程序qps峰值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastQpsExceedTime() 获取最近一次超量时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastQpsExceedTime(string $LastQpsExceedTime) 设置最近一次超量时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method MiniExtendPkg getMiniExtendPkg() 获取小程序安全接入ID数量扩张包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMiniExtendPkg(MiniExtendPkg $MiniExtendPkg) 设置小程序安全接入ID数量扩张包
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillingItem() 获取计费项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingItem(string $BillingItem) 设置计费项
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string 实例唯一ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例对应资源ID，计费使用
     */
    public $ResourceIds;

    /**
     * @var string 实例所属地域
     */
    public $Region;

    /**
     * @var integer 付费模式
     */
    public $PayMode;

    /**
     * @var integer 自动续费标识。
0：关闭
1：开启
     */
    public $RenewFlag;

    /**
     * @var integer 弹性计费开关。
0：关闭
1：开启
     */
    public $Mode;

    /**
     * @var integer 实例套餐版本。
101：小微版
102：超轻版
2：高级版
3：企业版
4：旗舰版
6：独享版
     */
    public $Level;

    /**
     * @var string 实例过期时间
     */
    public $ValidTime;

    /**
     * @var string 实例开始时间
     */
    public $BeginTime;

    /**
     * @var integer 已配置域名个数
     */
    public $DomainCount;

    /**
     * @var integer 域名数量上限
     */
    public $SubDomainLimit;

    /**
     * @var integer 已配置主域名个数
     */
    public $MainDomainCount;

    /**
     * @var integer 主域名数量上限
     */
    public $MainDomainLimit;

    /**
     * @var integer 实例30天内QPS峰值
     */
    public $MaxQPS;

    /**
     * @var QPSPackageNew qps扩展包信息
     */
    public $QPS;

    /**
     * @var DomainPackageNew 域名扩展包信息
     */
    public $DomainPkg;

    /**
     * @var integer 用户appid
     */
    public $AppId;

    /**
     * @var string clb或saas
     */
    public $Edition;

    /**
     * @var FraudPkg 业务安全包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FraudPkg;

    /**
     * @var BotPkg Bot资源包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BotPkg;

    /**
     * @var BotQPS bot的qps详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BotQPS;

    /**
     * @var integer qps弹性计费上限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElasticBilling;

    /**
     * @var integer 攻击日志投递开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackLogPost;

    /**
     * @var integer 带宽峰值，单位为B/s(字节每秒)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxBandwidth;

    /**
     * @var integer api安全是否购买
     */
    public $APISecurity;

    /**
     * @var integer 购买的qps规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QpsStandard;

    /**
     * @var integer 购买的带宽规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BandwidthStandard;

    /**
     * @var integer 实例状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 实例沙箱qps值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SandboxQps;

    /**
     * @var integer 是否api 安全试用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAPISecurityTrial;

    /**
     * @var MajorEventsPkg 重保包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MajorEventsPkg;

    /**
     * @var HybridPkg 混合云子节点包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HybridPkg;

    /**
     * @var ApiPkg API安全资源包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiPkg;

    /**
     * @var MiniPkg 小程序安全加速包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MiniPkg;

    /**
     * @var integer 小程序qps规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MiniQpsStandard;

    /**
     * @var integer 小程序qps峰值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MiniMaxQPS;

    /**
     * @var string 最近一次超量时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastQpsExceedTime;

    /**
     * @var MiniExtendPkg 小程序安全接入ID数量扩张包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MiniExtendPkg;

    /**
     * @var string 计费项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingItem;

    /**
     * @param string $InstanceId 实例唯一ID
     * @param string $InstanceName 实例名称
     * @param string $ResourceIds 实例对应资源ID，计费使用
     * @param string $Region 实例所属地域
     * @param integer $PayMode 付费模式
     * @param integer $RenewFlag 自动续费标识。
0：关闭
1：开启
     * @param integer $Mode 弹性计费开关。
0：关闭
1：开启
     * @param integer $Level 实例套餐版本。
101：小微版
102：超轻版
2：高级版
3：企业版
4：旗舰版
6：独享版
     * @param string $ValidTime 实例过期时间
     * @param string $BeginTime 实例开始时间
     * @param integer $DomainCount 已配置域名个数
     * @param integer $SubDomainLimit 域名数量上限
     * @param integer $MainDomainCount 已配置主域名个数
     * @param integer $MainDomainLimit 主域名数量上限
     * @param integer $MaxQPS 实例30天内QPS峰值
     * @param QPSPackageNew $QPS qps扩展包信息
     * @param DomainPackageNew $DomainPkg 域名扩展包信息
     * @param integer $AppId 用户appid
     * @param string $Edition clb或saas
     * @param FraudPkg $FraudPkg 业务安全包
注意：此字段可能返回 null，表示取不到有效值。
     * @param BotPkg $BotPkg Bot资源包
注意：此字段可能返回 null，表示取不到有效值。
     * @param BotQPS $BotQPS bot的qps详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ElasticBilling qps弹性计费上限
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttackLogPost 攻击日志投递开关
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxBandwidth 带宽峰值，单位为B/s(字节每秒)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $APISecurity api安全是否购买
     * @param integer $QpsStandard 购买的qps规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BandwidthStandard 购买的带宽规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 实例状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SandboxQps 实例沙箱qps值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsAPISecurityTrial 是否api 安全试用
注意：此字段可能返回 null，表示取不到有效值。
     * @param MajorEventsPkg $MajorEventsPkg 重保包
注意：此字段可能返回 null，表示取不到有效值。
     * @param HybridPkg $HybridPkg 混合云子节点包
注意：此字段可能返回 null，表示取不到有效值。
     * @param ApiPkg $ApiPkg API安全资源包
注意：此字段可能返回 null，表示取不到有效值。
     * @param MiniPkg $MiniPkg 小程序安全加速包
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MiniQpsStandard 小程序qps规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MiniMaxQPS 小程序qps峰值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastQpsExceedTime 最近一次超量时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param MiniExtendPkg $MiniExtendPkg 小程序安全接入ID数量扩张包
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillingItem 计费项
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("ValidTime",$param) and $param["ValidTime"] !== null) {
            $this->ValidTime = $param["ValidTime"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("DomainCount",$param) and $param["DomainCount"] !== null) {
            $this->DomainCount = $param["DomainCount"];
        }

        if (array_key_exists("SubDomainLimit",$param) and $param["SubDomainLimit"] !== null) {
            $this->SubDomainLimit = $param["SubDomainLimit"];
        }

        if (array_key_exists("MainDomainCount",$param) and $param["MainDomainCount"] !== null) {
            $this->MainDomainCount = $param["MainDomainCount"];
        }

        if (array_key_exists("MainDomainLimit",$param) and $param["MainDomainLimit"] !== null) {
            $this->MainDomainLimit = $param["MainDomainLimit"];
        }

        if (array_key_exists("MaxQPS",$param) and $param["MaxQPS"] !== null) {
            $this->MaxQPS = $param["MaxQPS"];
        }

        if (array_key_exists("QPS",$param) and $param["QPS"] !== null) {
            $this->QPS = new QPSPackageNew();
            $this->QPS->deserialize($param["QPS"]);
        }

        if (array_key_exists("DomainPkg",$param) and $param["DomainPkg"] !== null) {
            $this->DomainPkg = new DomainPackageNew();
            $this->DomainPkg->deserialize($param["DomainPkg"]);
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("FraudPkg",$param) and $param["FraudPkg"] !== null) {
            $this->FraudPkg = new FraudPkg();
            $this->FraudPkg->deserialize($param["FraudPkg"]);
        }

        if (array_key_exists("BotPkg",$param) and $param["BotPkg"] !== null) {
            $this->BotPkg = new BotPkg();
            $this->BotPkg->deserialize($param["BotPkg"]);
        }

        if (array_key_exists("BotQPS",$param) and $param["BotQPS"] !== null) {
            $this->BotQPS = new BotQPS();
            $this->BotQPS->deserialize($param["BotQPS"]);
        }

        if (array_key_exists("ElasticBilling",$param) and $param["ElasticBilling"] !== null) {
            $this->ElasticBilling = $param["ElasticBilling"];
        }

        if (array_key_exists("AttackLogPost",$param) and $param["AttackLogPost"] !== null) {
            $this->AttackLogPost = $param["AttackLogPost"];
        }

        if (array_key_exists("MaxBandwidth",$param) and $param["MaxBandwidth"] !== null) {
            $this->MaxBandwidth = $param["MaxBandwidth"];
        }

        if (array_key_exists("APISecurity",$param) and $param["APISecurity"] !== null) {
            $this->APISecurity = $param["APISecurity"];
        }

        if (array_key_exists("QpsStandard",$param) and $param["QpsStandard"] !== null) {
            $this->QpsStandard = $param["QpsStandard"];
        }

        if (array_key_exists("BandwidthStandard",$param) and $param["BandwidthStandard"] !== null) {
            $this->BandwidthStandard = $param["BandwidthStandard"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SandboxQps",$param) and $param["SandboxQps"] !== null) {
            $this->SandboxQps = $param["SandboxQps"];
        }

        if (array_key_exists("IsAPISecurityTrial",$param) and $param["IsAPISecurityTrial"] !== null) {
            $this->IsAPISecurityTrial = $param["IsAPISecurityTrial"];
        }

        if (array_key_exists("MajorEventsPkg",$param) and $param["MajorEventsPkg"] !== null) {
            $this->MajorEventsPkg = new MajorEventsPkg();
            $this->MajorEventsPkg->deserialize($param["MajorEventsPkg"]);
        }

        if (array_key_exists("HybridPkg",$param) and $param["HybridPkg"] !== null) {
            $this->HybridPkg = new HybridPkg();
            $this->HybridPkg->deserialize($param["HybridPkg"]);
        }

        if (array_key_exists("ApiPkg",$param) and $param["ApiPkg"] !== null) {
            $this->ApiPkg = new ApiPkg();
            $this->ApiPkg->deserialize($param["ApiPkg"]);
        }

        if (array_key_exists("MiniPkg",$param) and $param["MiniPkg"] !== null) {
            $this->MiniPkg = new MiniPkg();
            $this->MiniPkg->deserialize($param["MiniPkg"]);
        }

        if (array_key_exists("MiniQpsStandard",$param) and $param["MiniQpsStandard"] !== null) {
            $this->MiniQpsStandard = $param["MiniQpsStandard"];
        }

        if (array_key_exists("MiniMaxQPS",$param) and $param["MiniMaxQPS"] !== null) {
            $this->MiniMaxQPS = $param["MiniMaxQPS"];
        }

        if (array_key_exists("LastQpsExceedTime",$param) and $param["LastQpsExceedTime"] !== null) {
            $this->LastQpsExceedTime = $param["LastQpsExceedTime"];
        }

        if (array_key_exists("MiniExtendPkg",$param) and $param["MiniExtendPkg"] !== null) {
            $this->MiniExtendPkg = new MiniExtendPkg();
            $this->MiniExtendPkg->deserialize($param["MiniExtendPkg"]);
        }

        if (array_key_exists("BillingItem",$param) and $param["BillingItem"] !== null) {
            $this->BillingItem = $param["BillingItem"];
        }
    }
}
