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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扫描规则信息
 *
 * @method string getRuleId() 获取<p>规则id</p>
 * @method void setRuleId(string $RuleId) 设置<p>规则id</p>
 * @method string getName() 获取<p>规则名称</p>
 * @method void setName(string $Name) 设置<p>规则名称</p>
 * @method string getScanDir() 获取<p>扫描目录</p>
 * @method void setScanDir(string $ScanDir) 设置<p>扫描目录</p>
 * @method ExecutionPlan getExecution() 获取<p>执行计划</p>
 * @method void setExecution(ExecutionPlan $Execution) 设置<p>执行计划</p>
 * @method array getPolicyRuleSet() 获取<p>扫描规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyRuleSet(array $PolicyRuleSet) 设置<p>扫描规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableManifest() 获取<p>是否输出清单</p>
 * @method void setEnableManifest(boolean $EnableManifest) 设置<p>是否输出清单</p>
 * @method ManifestAttr getManifest() 获取<p>输出清单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManifest(ManifestAttr $Manifest) 设置<p>输出清单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>任务状态</p><p>枚举值：</p><ul><li>0： 启用（enable）</li><li>1： 禁用（disable）</li></ul><p>默认值：0</p>
 * @method void setStatus(integer $Status) 设置<p>任务状态</p><p>枚举值：</p><ul><li>0： 启用（enable）</li><li>1： 禁用（disable）</li></ul><p>默认值：0</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getModifyTime() 获取<p>修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间</p>
 */
class PolicyRuleTaskAttribute extends AbstractModel
{
    /**
     * @var string <p>规则id</p>
     */
    public $RuleId;

    /**
     * @var string <p>规则名称</p>
     */
    public $Name;

    /**
     * @var string <p>扫描目录</p>
     */
    public $ScanDir;

    /**
     * @var ExecutionPlan <p>执行计划</p>
     */
    public $Execution;

    /**
     * @var array <p>扫描规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyRuleSet;

    /**
     * @var boolean <p>是否输出清单</p>
     */
    public $EnableManifest;

    /**
     * @var ManifestAttr <p>输出清单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Manifest;

    /**
     * @var integer <p>任务状态</p><p>枚举值：</p><ul><li>0： 启用（enable）</li><li>1： 禁用（disable）</li></ul><p>默认值：0</p>
     */
    public $Status;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>修改时间</p>
     */
    public $ModifyTime;

    /**
     * @param string $RuleId <p>规则id</p>
     * @param string $Name <p>规则名称</p>
     * @param string $ScanDir <p>扫描目录</p>
     * @param ExecutionPlan $Execution <p>执行计划</p>
     * @param array $PolicyRuleSet <p>扫描规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableManifest <p>是否输出清单</p>
     * @param ManifestAttr $Manifest <p>输出清单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>任务状态</p><p>枚举值：</p><ul><li>0： 启用（enable）</li><li>1： 禁用（disable）</li></ul><p>默认值：0</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $ModifyTime <p>修改时间</p>
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ScanDir",$param) and $param["ScanDir"] !== null) {
            $this->ScanDir = $param["ScanDir"];
        }

        if (array_key_exists("Execution",$param) and $param["Execution"] !== null) {
            $this->Execution = new ExecutionPlan();
            $this->Execution->deserialize($param["Execution"]);
        }

        if (array_key_exists("PolicyRuleSet",$param) and $param["PolicyRuleSet"] !== null) {
            $this->PolicyRuleSet = [];
            foreach ($param["PolicyRuleSet"] as $key => $value){
                $obj = new PolicyRuleOperator();
                $obj->deserialize($value);
                array_push($this->PolicyRuleSet, $obj);
            }
        }

        if (array_key_exists("EnableManifest",$param) and $param["EnableManifest"] !== null) {
            $this->EnableManifest = $param["EnableManifest"];
        }

        if (array_key_exists("Manifest",$param) and $param["Manifest"] !== null) {
            $this->Manifest = new ManifestAttr();
            $this->Manifest->deserialize($param["Manifest"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
