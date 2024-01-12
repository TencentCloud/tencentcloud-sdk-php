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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警分组内告警规则信息
 *
 * @method string getRuleName() 获取告警规则名称，同一告警分组下不允许重名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置告警规则名称，同一告警分组下不允许重名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAnnotations() 获取注释列表

告警对象和告警消息是 Prometheus Rule Annotations 的特殊字段，需要通过 annotations 来传递，对应的 Key 分别为summary/description。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnnotations(array $Annotations) 设置注释列表

告警对象和告警消息是 Prometheus Rule Annotations 的特殊字段，需要通过 annotations 来传递，对应的 Key 分别为summary/description。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDuration() 获取规则报警持续时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(string $Duration) 设置规则报警持续时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpr() 获取规则表达式，可参考<a href="https://cloud.tencent.com/document/product/1416/56008">告警规则说明</a>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpr(string $Expr) 设置规则表达式，可参考<a href="https://cloud.tencent.com/document/product/1416/56008">告警规则说明</a>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getState() 获取告警规则状态:
2-启用
3-禁用
为空默认启用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(integer $State) 设置告警规则状态:
2-启用
3-禁用
为空默认启用
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusAlertGroupRuleSet extends AbstractModel
{
    /**
     * @var string 告警规则名称，同一告警分组下不允许重名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var array 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var array 注释列表

告警对象和告警消息是 Prometheus Rule Annotations 的特殊字段，需要通过 annotations 来传递，对应的 Key 分别为summary/description。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Annotations;

    /**
     * @var string 规则报警持续时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var string 规则表达式，可参考<a href="https://cloud.tencent.com/document/product/1416/56008">告警规则说明</a>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Expr;

    /**
     * @var integer 告警规则状态:
2-启用
3-禁用
为空默认启用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @param string $RuleName 告警规则名称，同一告警分组下不允许重名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Annotations 注释列表

告警对象和告警消息是 Prometheus Rule Annotations 的特殊字段，需要通过 annotations 来传递，对应的 Key 分别为summary/description。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Duration 规则报警持续时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Expr 规则表达式，可参考<a href="https://cloud.tencent.com/document/product/1416/56008">告警规则说明</a>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $State 告警规则状态:
2-启用
3-禁用
为空默认启用
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
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

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Expr",$param) and $param["Expr"] !== null) {
            $this->Expr = $param["Expr"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
