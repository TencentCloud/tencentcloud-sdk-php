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
 * prometheus 报警规则集
 *
 * @method string getRuleId() 获取<p>规则 ID</p>
 * @method void setRuleId(string $RuleId) 设置<p>规则 ID</p>
 * @method string getRuleName() 获取<p>规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>规则名称</p>
 * @method integer getRuleState() 获取<p>规则状态码</p>
 * @method void setRuleState(integer $RuleState) 设置<p>规则状态码</p>
 * @method string getType() 获取<p>规则类别</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>规则类别</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取<p>规则标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置<p>规则标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAnnotations() 获取<p>规则注释列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnnotations(array $Annotations) 设置<p>规则注释列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpr() 获取<p>规则表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpr(string $Expr) 设置<p>规则表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDuration() 获取<p>规则报警持续时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(string $Duration) 设置<p>规则报警持续时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReceivers() 获取<p>报警接收组列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceivers(array $Receivers) 设置<p>报警接收组列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHealth() 获取<p>规则运行健康状态，取值如下：</p><li>unknown 未知状态</li><li>pending 加载中</li><li>ok 运行正常</li><li>err 运行错误</li>
 * @method void setHealth(string $Health) 设置<p>规则运行健康状态，取值如下：</p><li>unknown 未知状态</li><li>pending 加载中</li><li>ok 运行正常</li><li>err 运行错误</li>
 * @method string getCreatedAt() 获取<p>规则创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置<p>规则创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取<p>规则更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>规则更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusRuleSet extends AbstractModel
{
    /**
     * @var string <p>规则 ID</p>
     */
    public $RuleId;

    /**
     * @var string <p>规则名称</p>
     */
    public $RuleName;

    /**
     * @var integer <p>规则状态码</p>
     */
    public $RuleState;

    /**
     * @var string <p>规则类别</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var array <p>规则标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var array <p>规则注释列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Annotations;

    /**
     * @var string <p>规则表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Expr;

    /**
     * @var string <p>规则报警持续时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var array <p>报警接收组列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Receivers;

    /**
     * @var string <p>规则运行健康状态，取值如下：</p><li>unknown 未知状态</li><li>pending 加载中</li><li>ok 运行正常</li><li>err 运行错误</li>
     */
    public $Health;

    /**
     * @var string <p>规则创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string <p>规则更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @param string $RuleId <p>规则 ID</p>
     * @param string $RuleName <p>规则名称</p>
     * @param integer $RuleState <p>规则状态码</p>
     * @param string $Type <p>规则类别</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels <p>规则标签列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Annotations <p>规则注释列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Expr <p>规则表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Duration <p>规则报警持续时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Receivers <p>报警接收组列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Health <p>规则运行健康状态，取值如下：</p><li>unknown 未知状态</li><li>pending 加载中</li><li>ok 运行正常</li><li>err 运行错误</li>
     * @param string $CreatedAt <p>规则创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt <p>规则更新时间</p>
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleState",$param) and $param["RuleState"] !== null) {
            $this->RuleState = $param["RuleState"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new PrometheusRuleKV();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Annotations",$param) and $param["Annotations"] !== null) {
            $this->Annotations = [];
            foreach ($param["Annotations"] as $key => $value){
                $obj = new PrometheusRuleKV();
                $obj->deserialize($value);
                array_push($this->Annotations, $obj);
            }
        }

        if (array_key_exists("Expr",$param) and $param["Expr"] !== null) {
            $this->Expr = $param["Expr"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("Health",$param) and $param["Health"] !== null) {
            $this->Health = $param["Health"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
