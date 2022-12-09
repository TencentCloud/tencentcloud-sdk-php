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
 * @method string getInstanceId() 获取id
 * @method void setInstanceId(string $InstanceId) 设置id
 * @method string getInstanceName() 获取name
 * @method void setInstanceName(string $InstanceName) 设置name
 * @method string getResourceIds() 获取资源id
 * @method void setResourceIds(string $ResourceIds) 设置资源id
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method integer getPayMode() 获取付费模式
 * @method void setPayMode(integer $PayMode) 设置付费模式
 * @method integer getRenewFlag() 获取自动续费
 * @method void setRenewFlag(integer $RenewFlag) 设置自动续费
 * @method integer getMode() 获取弹性计费
 * @method void setMode(integer $Mode) 设置弹性计费
 * @method integer getLevel() 获取套餐版本
 * @method void setLevel(integer $Level) 设置套餐版本
 * @method string getValidTime() 获取过期时间
 * @method void setValidTime(string $ValidTime) 设置过期时间
 * @method string getBeginTime() 获取开始时间
 * @method void setBeginTime(string $BeginTime) 设置开始时间
 * @method integer getDomainCount() 获取已用
 * @method void setDomainCount(integer $DomainCount) 设置已用
 * @method integer getSubDomainLimit() 获取上限
 * @method void setSubDomainLimit(integer $SubDomainLimit) 设置上限
 * @method integer getMainDomainCount() 获取已用
 * @method void setMainDomainCount(integer $MainDomainCount) 设置已用
 * @method integer getMainDomainLimit() 获取上限
 * @method void setMainDomainLimit(integer $MainDomainLimit) 设置上限
 * @method integer getMaxQPS() 获取峰值
 * @method void setMaxQPS(integer $MaxQPS) 设置峰值
 * @method QPSPackageNew getQPS() 获取qps套餐
 * @method void setQPS(QPSPackageNew $QPS) 设置qps套餐
 * @method DomainPackageNew getDomainPkg() 获取域名套餐
 * @method void setDomainPkg(DomainPackageNew $DomainPkg) 设置域名套餐
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
 * @method integer getMaxBandwidth() 获取带宽峰值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxBandwidth(integer $MaxBandwidth) 设置带宽峰值
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string id
     */
    public $InstanceId;

    /**
     * @var string name
     */
    public $InstanceName;

    /**
     * @var string 资源id
     */
    public $ResourceIds;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var integer 付费模式
     */
    public $PayMode;

    /**
     * @var integer 自动续费
     */
    public $RenewFlag;

    /**
     * @var integer 弹性计费
     */
    public $Mode;

    /**
     * @var integer 套餐版本
     */
    public $Level;

    /**
     * @var string 过期时间
     */
    public $ValidTime;

    /**
     * @var string 开始时间
     */
    public $BeginTime;

    /**
     * @var integer 已用
     */
    public $DomainCount;

    /**
     * @var integer 上限
     */
    public $SubDomainLimit;

    /**
     * @var integer 已用
     */
    public $MainDomainCount;

    /**
     * @var integer 上限
     */
    public $MainDomainLimit;

    /**
     * @var integer 峰值
     */
    public $MaxQPS;

    /**
     * @var QPSPackageNew qps套餐
     */
    public $QPS;

    /**
     * @var DomainPackageNew 域名套餐
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
     * @var integer 带宽峰值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxBandwidth;

    /**
     * @param string $InstanceId id
     * @param string $InstanceName name
     * @param string $ResourceIds 资源id
     * @param string $Region 地域
     * @param integer $PayMode 付费模式
     * @param integer $RenewFlag 自动续费
     * @param integer $Mode 弹性计费
     * @param integer $Level 套餐版本
     * @param string $ValidTime 过期时间
     * @param string $BeginTime 开始时间
     * @param integer $DomainCount 已用
     * @param integer $SubDomainLimit 上限
     * @param integer $MainDomainCount 已用
     * @param integer $MainDomainLimit 上限
     * @param integer $MaxQPS 峰值
     * @param QPSPackageNew $QPS qps套餐
     * @param DomainPackageNew $DomainPkg 域名套餐
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
     * @param integer $MaxBandwidth 带宽峰值
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
    }
}
