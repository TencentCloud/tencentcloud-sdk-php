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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EDR告警列表信息
 *
 * @method integer getId() 获取<p>告警表id</p>
 * @method void setId(integer $Id) 设置<p>告警表id</p>
 * @method integer getAppId() 获取<p>APPID</p>
 * @method void setAppId(integer $AppId) 设置<p>APPID</p>
 * @method string getAlertId() 获取<p>告警ID</p>
 * @method void setAlertId(string $AlertId) 设置<p>告警ID</p>
 * @method string getAlertCategory() 获取<p>告警大类</p>
 * @method void setAlertCategory(string $AlertCategory) 设置<p>告警大类</p>
 * @method string getAlertSubType() 获取<p>告警子类</p>
 * @method void setAlertSubType(string $AlertSubType) 设置<p>告警子类</p>
 * @method string getRuleId() 获取<p>策略ID</p>
 * @method void setRuleId(string $RuleId) 设置<p>策略ID</p>
 * @method integer getRuleType() 获取<p>策略类型</p>
 * @method void setRuleType(integer $RuleType) 设置<p>策略类型</p>
 * @method string getLevel() 获取<p>告警等级</p>
 * @method void setLevel(string $Level) 设置<p>告警等级</p>
 * @method string getStatus() 获取<p>告警状态</p>
 * @method void setStatus(string $Status) 设置<p>告警状态</p>
 * @method string getAttackStage() 获取<p>攻击阶段</p>
 * @method void setAttackStage(string $AttackStage) 设置<p>攻击阶段</p>
 * @method string getDetectMode() 获取<p>检测模式</p>
 * @method void setDetectMode(string $DetectMode) 设置<p>检测模式</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getQuuid() 获取<p>QUUID</p>
 * @method void setQuuid(string $Quuid) 设置<p>QUUID</p>
 * @method integer getIsProVersion() 获取<p>是否付费</p>
 * @method void setIsProVersion(integer $IsProVersion) 设置<p>是否付费</p>
 * @method string getAlertSource() 获取<p>告警来源</p>
 * @method void setAlertSource(string $AlertSource) 设置<p>告警来源</p>
 * @method string getImageId() 获取<p>镜像ID</p>
 * @method void setImageId(string $ImageId) 设置<p>镜像ID</p>
 * @method string getContainerId() 获取<p>容器id</p>
 * @method void setContainerId(string $ContainerId) 设置<p>容器id</p>
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method integer getEventCount() 获取<p>告警数量</p>
 * @method void setEventCount(integer $EventCount) 设置<p>告警数量</p>
 * @method string getFirstDetectTime() 获取<p>最初发现时间</p>
 * @method void setFirstDetectTime(string $FirstDetectTime) 设置<p>最初发现时间</p>
 * @method string getLatestDetectTime() 获取<p>最近发现时间</p>
 * @method void setLatestDetectTime(string $LatestDetectTime) 设置<p>最近发现时间</p>
 * @method string getRuleName() 获取<p>规则名</p>
 * @method void setRuleName(string $RuleName) 设置<p>规则名</p>
 * @method string getContentType() 获取<p>策略类型</p>
 * @method void setContentType(string $ContentType) 设置<p>策略类型</p>
 * @method string getInstanceName() 获取<p>实例名</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名</p>
 * @method string getPublicIp() 获取<p>公共IP</p>
 * @method void setPublicIp(string $PublicIp) 设置<p>公共IP</p>
 * @method string getPrivateIp() 获取<p>内网IP</p>
 * @method void setPrivateIp(string $PrivateIp) 设置<p>内网IP</p>
 * @method boolean getRaspOpen() 获取<p>该机器是否开启应用防护</p>
 * @method void setRaspOpen(boolean $RaspOpen) 设置<p>该机器是否开启应用防护</p>
 */
class EdrAlertItem extends AbstractModel
{
    /**
     * @var integer <p>告警表id</p>
     */
    public $Id;

    /**
     * @var integer <p>APPID</p>
     */
    public $AppId;

    /**
     * @var string <p>告警ID</p>
     */
    public $AlertId;

    /**
     * @var string <p>告警大类</p>
     */
    public $AlertCategory;

    /**
     * @var string <p>告警子类</p>
     */
    public $AlertSubType;

    /**
     * @var string <p>策略ID</p>
     */
    public $RuleId;

    /**
     * @var integer <p>策略类型</p>
     */
    public $RuleType;

    /**
     * @var string <p>告警等级</p>
     */
    public $Level;

    /**
     * @var string <p>告警状态</p>
     */
    public $Status;

    /**
     * @var string <p>攻击阶段</p>
     */
    public $AttackStage;

    /**
     * @var string <p>检测模式</p>
     */
    public $DetectMode;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>QUUID</p>
     */
    public $Quuid;

    /**
     * @var integer <p>是否付费</p>
     */
    public $IsProVersion;

    /**
     * @var string <p>告警来源</p>
     */
    public $AlertSource;

    /**
     * @var string <p>镜像ID</p>
     */
    public $ImageId;

    /**
     * @var string <p>容器id</p>
     */
    public $ContainerId;

    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>告警数量</p>
     */
    public $EventCount;

    /**
     * @var string <p>最初发现时间</p>
     */
    public $FirstDetectTime;

    /**
     * @var string <p>最近发现时间</p>
     */
    public $LatestDetectTime;

    /**
     * @var string <p>规则名</p>
     */
    public $RuleName;

    /**
     * @var string <p>策略类型</p>
     */
    public $ContentType;

    /**
     * @var string <p>实例名</p>
     */
    public $InstanceName;

    /**
     * @var string <p>公共IP</p>
     */
    public $PublicIp;

    /**
     * @var string <p>内网IP</p>
     */
    public $PrivateIp;

    /**
     * @var boolean <p>该机器是否开启应用防护</p>
     */
    public $RaspOpen;

    /**
     * @param integer $Id <p>告警表id</p>
     * @param integer $AppId <p>APPID</p>
     * @param string $AlertId <p>告警ID</p>
     * @param string $AlertCategory <p>告警大类</p>
     * @param string $AlertSubType <p>告警子类</p>
     * @param string $RuleId <p>策略ID</p>
     * @param integer $RuleType <p>策略类型</p>
     * @param string $Level <p>告警等级</p>
     * @param string $Status <p>告警状态</p>
     * @param string $AttackStage <p>攻击阶段</p>
     * @param string $DetectMode <p>检测模式</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $Quuid <p>QUUID</p>
     * @param integer $IsProVersion <p>是否付费</p>
     * @param string $AlertSource <p>告警来源</p>
     * @param string $ImageId <p>镜像ID</p>
     * @param string $ContainerId <p>容器id</p>
     * @param string $ClusterId <p>集群ID</p>
     * @param integer $EventCount <p>告警数量</p>
     * @param string $FirstDetectTime <p>最初发现时间</p>
     * @param string $LatestDetectTime <p>最近发现时间</p>
     * @param string $RuleName <p>规则名</p>
     * @param string $ContentType <p>策略类型</p>
     * @param string $InstanceName <p>实例名</p>
     * @param string $PublicIp <p>公共IP</p>
     * @param string $PrivateIp <p>内网IP</p>
     * @param boolean $RaspOpen <p>该机器是否开启应用防护</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AlertId",$param) and $param["AlertId"] !== null) {
            $this->AlertId = $param["AlertId"];
        }

        if (array_key_exists("AlertCategory",$param) and $param["AlertCategory"] !== null) {
            $this->AlertCategory = $param["AlertCategory"];
        }

        if (array_key_exists("AlertSubType",$param) and $param["AlertSubType"] !== null) {
            $this->AlertSubType = $param["AlertSubType"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AttackStage",$param) and $param["AttackStage"] !== null) {
            $this->AttackStage = $param["AttackStage"];
        }

        if (array_key_exists("DetectMode",$param) and $param["DetectMode"] !== null) {
            $this->DetectMode = $param["DetectMode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("IsProVersion",$param) and $param["IsProVersion"] !== null) {
            $this->IsProVersion = $param["IsProVersion"];
        }

        if (array_key_exists("AlertSource",$param) and $param["AlertSource"] !== null) {
            $this->AlertSource = $param["AlertSource"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("FirstDetectTime",$param) and $param["FirstDetectTime"] !== null) {
            $this->FirstDetectTime = $param["FirstDetectTime"];
        }

        if (array_key_exists("LatestDetectTime",$param) and $param["LatestDetectTime"] !== null) {
            $this->LatestDetectTime = $param["LatestDetectTime"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("RaspOpen",$param) and $param["RaspOpen"] !== null) {
            $this->RaspOpen = $param["RaspOpen"];
        }
    }
}
