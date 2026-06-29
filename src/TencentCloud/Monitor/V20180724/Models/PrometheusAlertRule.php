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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus告警规则
 *
 * @method string getName() 获取<p>规则名称</p>
 * @method void setName(string $Name) 设置<p>规则名称</p>
 * @method string getRule() 获取<p>prometheus语句</p>
 * @method void setRule(string $Rule) 设置<p>prometheus语句</p>
 * @method array getLabels() 获取<p>额外标签</p>
 * @method void setLabels(array $Labels) 设置<p>额外标签</p>
 * @method string getTemplate() 获取<p>告警发送模板</p>
 * @method void setTemplate(string $Template) 设置<p>告警发送模板</p>
 * @method string getFor() 获取<p>持续时间</p>
 * @method void setFor(string $For) 设置<p>持续时间</p>
 * @method string getDescribe() 获取<p>该条规则的描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescribe(string $Describe) 设置<p>该条规则的描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAnnotations() 获取<p>参考prometheus rule中的annotations</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnnotations(array $Annotations) 设置<p>参考prometheus rule中的annotations</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleState() 获取<p>告警规则状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleState(integer $RuleState) 设置<p>告警规则状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusAlertRule extends AbstractModel
{
    /**
     * @var string <p>规则名称</p>
     */
    public $Name;

    /**
     * @var string <p>prometheus语句</p>
     */
    public $Rule;

    /**
     * @var array <p>额外标签</p>
     */
    public $Labels;

    /**
     * @var string <p>告警发送模板</p>
     */
    public $Template;

    /**
     * @var string <p>持续时间</p>
     */
    public $For;

    /**
     * @var string <p>该条规则的描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Describe;

    /**
     * @var array <p>参考prometheus rule中的annotations</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Annotations;

    /**
     * @var integer <p>告警规则状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleState;

    /**
     * @param string $Name <p>规则名称</p>
     * @param string $Rule <p>prometheus语句</p>
     * @param array $Labels <p>额外标签</p>
     * @param string $Template <p>告警发送模板</p>
     * @param string $For <p>持续时间</p>
     * @param string $Describe <p>该条规则的描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Annotations <p>参考prometheus rule中的annotations</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleState <p>告警规则状态</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = $param["Template"];
        }

        if (array_key_exists("For",$param) and $param["For"] !== null) {
            $this->For = $param["For"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("Annotations",$param) and $param["Annotations"] !== null) {
            $this->Annotations = [];
            foreach ($param["Annotations"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Annotations, $obj);
            }
        }

        if (array_key_exists("RuleState",$param) and $param["RuleState"] !== null) {
            $this->RuleState = $param["RuleState"];
        }
    }
}
