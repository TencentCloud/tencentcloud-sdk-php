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
 * IPS规则展示字段相关结构
 *
 * @method string getRuleID() 获取<p>规则ID</p>
 * @method void setRuleID(string $RuleID) 设置<p>规则ID</p>
 * @method string getEventName() 获取<p>规则名称</p>
 * @method void setEventName(string $EventName) 设置<p>规则名称</p>
 * @method string getEventNameDesc() 获取<p>规则描述</p>
 * @method void setEventNameDesc(string $EventNameDesc) 设置<p>规则描述</p>
 * @method string getCategory() 获取<p>规则类型</p>
 * @method void setCategory(string $Category) 设置<p>规则类型</p>
 * @method string getConfidence() 获取<p>置信度</p>
 * @method void setConfidence(string $Confidence) 设置<p>置信度</p>
 * @method integer getId() 获取<p>自增id</p>
 * @method void setId(integer $Id) 设置<p>自增id</p>
 * @method string getVulTarget() 获取<p>漏洞对象</p>
 * @method void setVulTarget(string $VulTarget) 设置<p>漏洞对象</p>
 * @method string getCve() 获取<p>漏洞编号</p>
 * @method void setCve(string $Cve) 设置<p>漏洞编号</p>
 * @method integer getStatus() 获取<p>状态 0 关闭 1打开</p>
 * @method void setStatus(integer $Status) 设置<p>状态 0 关闭 1打开</p>
 * @method integer getAction() 获取<p>0观察, 1阻断</p>
 * @method void setAction(integer $Action) 设置<p>0观察, 1阻断</p>
 * @method integer getDefaultAction() 获取<p>默认策略</p>
 * @method void setDefaultAction(integer $DefaultAction) 设置<p>默认策略</p>
 * @method integer getRuleType() 获取<p>基础防御/虚拟补丁</p>
 * @method void setRuleType(integer $RuleType) 设置<p>基础防御/虚拟补丁</p>
 * @method string getLevel() 获取<p>危险等级</p>
 * @method void setLevel(string $Level) 设置<p>危险等级</p>
 * @method integer getFwType() 获取<p>FwType字段 1 border 2 nat 4 vpc</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFwType(integer $FwType) 设置<p>FwType字段 1 border 2 nat 4 vpc</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class IpsRuleDetailNew extends AbstractModel
{
    /**
     * @var string <p>规则ID</p>
     */
    public $RuleID;

    /**
     * @var string <p>规则名称</p>
     */
    public $EventName;

    /**
     * @var string <p>规则描述</p>
     */
    public $EventNameDesc;

    /**
     * @var string <p>规则类型</p>
     */
    public $Category;

    /**
     * @var string <p>置信度</p>
     */
    public $Confidence;

    /**
     * @var integer <p>自增id</p>
     */
    public $Id;

    /**
     * @var string <p>漏洞对象</p>
     */
    public $VulTarget;

    /**
     * @var string <p>漏洞编号</p>
     */
    public $Cve;

    /**
     * @var integer <p>状态 0 关闭 1打开</p>
     */
    public $Status;

    /**
     * @var integer <p>0观察, 1阻断</p>
     */
    public $Action;

    /**
     * @var integer <p>默认策略</p>
     */
    public $DefaultAction;

    /**
     * @var integer <p>基础防御/虚拟补丁</p>
     */
    public $RuleType;

    /**
     * @var string <p>危险等级</p>
     */
    public $Level;

    /**
     * @var integer <p>FwType字段 1 border 2 nat 4 vpc</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FwType;

    /**
     * @param string $RuleID <p>规则ID</p>
     * @param string $EventName <p>规则名称</p>
     * @param string $EventNameDesc <p>规则描述</p>
     * @param string $Category <p>规则类型</p>
     * @param string $Confidence <p>置信度</p>
     * @param integer $Id <p>自增id</p>
     * @param string $VulTarget <p>漏洞对象</p>
     * @param string $Cve <p>漏洞编号</p>
     * @param integer $Status <p>状态 0 关闭 1打开</p>
     * @param integer $Action <p>0观察, 1阻断</p>
     * @param integer $DefaultAction <p>默认策略</p>
     * @param integer $RuleType <p>基础防御/虚拟补丁</p>
     * @param string $Level <p>危险等级</p>
     * @param integer $FwType <p>FwType字段 1 border 2 nat 4 vpc</p>
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventNameDesc",$param) and $param["EventNameDesc"] !== null) {
            $this->EventNameDesc = $param["EventNameDesc"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("VulTarget",$param) and $param["VulTarget"] !== null) {
            $this->VulTarget = $param["VulTarget"];
        }

        if (array_key_exists("Cve",$param) and $param["Cve"] !== null) {
            $this->Cve = $param["Cve"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("DefaultAction",$param) and $param["DefaultAction"] !== null) {
            $this->DefaultAction = $param["DefaultAction"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }
    }
}
