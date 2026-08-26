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
 * LLM 审计告警数据结构
 *
 * @method integer getID() 获取<p>告警记录 ID</p>
 * @method void setID(integer $ID) 设置<p>告警记录 ID</p>
 * @method string getBelongAssetType() 获取<p>归属资产类型<br>枚举值：<br>HOST：主机<br>CONTAINER：容器</p>
 * @method void setBelongAssetType(string $BelongAssetType) 设置<p>归属资产类型<br>枚举值：<br>HOST：主机<br>CONTAINER：容器</p>
 * @method integer getRuleID() 获取<p>命中的用户规则 ID</p>
 * @method void setRuleID(integer $RuleID) 设置<p>命中的用户规则 ID</p>
 * @method string getRuleName() 获取<p>命中的用户规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>命中的用户规则名称</p>
 * @method string getSystemRuleName() 获取<p>命中的 LLM 审计系统规则名称</p>
 * @method void setSystemRuleName(string $SystemRuleName) 设置<p>命中的 LLM 审计系统规则名称</p>
 * @method string getInstanceId() 获取<p>实例 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getClusterId() 获取<p>集群 ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID</p>
 * @method string getContainerId() 获取<p>容器 ID</p>
 * @method void setContainerId(string $ContainerId) 设置<p>容器 ID</p>
 * @method string getContainerName() 获取<p>容器名称</p>
 * @method void setContainerName(string $ContainerName) 设置<p>容器名称</p>
 * @method string getHitPayload() 获取<p>命中风险描述</p>
 * @method void setHitPayload(string $HitPayload) 设置<p>命中风险描述</p>
 * @method string getRuleAction() 获取<p>命中动作<br>枚举值：<br>PASS：加白<br>BLOCK：拦截并告警<br>MONITOR：告警</p>
 * @method void setRuleAction(string $RuleAction) 设置<p>命中动作<br>枚举值：<br>PASS：加白<br>BLOCK：拦截并告警<br>MONITOR：告警</p>
 * @method string getLevel() 获取<p>告警级别<br>枚举值：<br>INFO：提示<br>LOW：低危<br>MEDIUM：中危<br>HIGH：高危<br>CRITICAL：严重</p>
 * @method void setLevel(string $Level) 设置<p>告警级别<br>枚举值：<br>INFO：提示<br>LOW：低危<br>MEDIUM：中危<br>HIGH：高危<br>CRITICAL：严重</p>
 * @method string getStatus() 获取<p>处理状态<br>枚举值：<br>PENDING：未处理<br>HANDLED：已处理<br>IGNORE：已忽略<br>PASS：已加白<br>BLOCK：已拦截</p>
 * @method void setStatus(string $Status) 设置<p>处理状态<br>枚举值：<br>PENDING：未处理<br>HANDLED：已处理<br>IGNORE：已忽略<br>PASS：已加白<br>BLOCK：已拦截</p>
 * @method string getFirstAlertTime() 获取<p>首次告警时间</p>
 * @method void setFirstAlertTime(string $FirstAlertTime) 设置<p>首次告警时间</p>
 * @method string getLastAlertTime() 获取<p>最后告警时间</p>
 * @method void setLastAlertTime(string $LastAlertTime) 设置<p>最后告警时间</p>
 */
class TrafficSandboxLLMAuditAlertInfo extends AbstractModel
{
    /**
     * @var integer <p>告警记录 ID</p>
     */
    public $ID;

    /**
     * @var string <p>归属资产类型<br>枚举值：<br>HOST：主机<br>CONTAINER：容器</p>
     */
    public $BelongAssetType;

    /**
     * @var integer <p>命中的用户规则 ID</p>
     */
    public $RuleID;

    /**
     * @var string <p>命中的用户规则名称</p>
     */
    public $RuleName;

    /**
     * @var string <p>命中的 LLM 审计系统规则名称</p>
     */
    public $SystemRuleName;

    /**
     * @var string <p>实例 ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>集群 ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>容器 ID</p>
     */
    public $ContainerId;

    /**
     * @var string <p>容器名称</p>
     */
    public $ContainerName;

    /**
     * @var string <p>命中风险描述</p>
     */
    public $HitPayload;

    /**
     * @var string <p>命中动作<br>枚举值：<br>PASS：加白<br>BLOCK：拦截并告警<br>MONITOR：告警</p>
     */
    public $RuleAction;

    /**
     * @var string <p>告警级别<br>枚举值：<br>INFO：提示<br>LOW：低危<br>MEDIUM：中危<br>HIGH：高危<br>CRITICAL：严重</p>
     */
    public $Level;

    /**
     * @var string <p>处理状态<br>枚举值：<br>PENDING：未处理<br>HANDLED：已处理<br>IGNORE：已忽略<br>PASS：已加白<br>BLOCK：已拦截</p>
     */
    public $Status;

    /**
     * @var string <p>首次告警时间</p>
     */
    public $FirstAlertTime;

    /**
     * @var string <p>最后告警时间</p>
     */
    public $LastAlertTime;

    /**
     * @param integer $ID <p>告警记录 ID</p>
     * @param string $BelongAssetType <p>归属资产类型<br>枚举值：<br>HOST：主机<br>CONTAINER：容器</p>
     * @param integer $RuleID <p>命中的用户规则 ID</p>
     * @param string $RuleName <p>命中的用户规则名称</p>
     * @param string $SystemRuleName <p>命中的 LLM 审计系统规则名称</p>
     * @param string $InstanceId <p>实例 ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $ClusterId <p>集群 ID</p>
     * @param string $ContainerId <p>容器 ID</p>
     * @param string $ContainerName <p>容器名称</p>
     * @param string $HitPayload <p>命中风险描述</p>
     * @param string $RuleAction <p>命中动作<br>枚举值：<br>PASS：加白<br>BLOCK：拦截并告警<br>MONITOR：告警</p>
     * @param string $Level <p>告警级别<br>枚举值：<br>INFO：提示<br>LOW：低危<br>MEDIUM：中危<br>HIGH：高危<br>CRITICAL：严重</p>
     * @param string $Status <p>处理状态<br>枚举值：<br>PENDING：未处理<br>HANDLED：已处理<br>IGNORE：已忽略<br>PASS：已加白<br>BLOCK：已拦截</p>
     * @param string $FirstAlertTime <p>首次告警时间</p>
     * @param string $LastAlertTime <p>最后告警时间</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("BelongAssetType",$param) and $param["BelongAssetType"] !== null) {
            $this->BelongAssetType = $param["BelongAssetType"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("SystemRuleName",$param) and $param["SystemRuleName"] !== null) {
            $this->SystemRuleName = $param["SystemRuleName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("HitPayload",$param) and $param["HitPayload"] !== null) {
            $this->HitPayload = $param["HitPayload"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FirstAlertTime",$param) and $param["FirstAlertTime"] !== null) {
            $this->FirstAlertTime = $param["FirstAlertTime"];
        }

        if (array_key_exists("LastAlertTime",$param) and $param["LastAlertTime"] !== null) {
            $this->LastAlertTime = $param["LastAlertTime"];
        }
    }
}
