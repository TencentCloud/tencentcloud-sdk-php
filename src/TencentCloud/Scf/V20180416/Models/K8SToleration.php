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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kubernetes污点容忍，使用时请注意您的Kubernetes版本所支持的字段情况。
可参考 https://kubernetes.io/zh-cn/docs/concepts/scheduling-eviction/taint-and-toleration/
 *
 * @method string getKey() 获取匹配的污点名
 * @method void setKey(string $Key) 设置匹配的污点名
 * @method string getOperator() 获取匹配方式，默认值为: Equal
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置匹配方式，默认值为: Equal
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEffect() 获取执行策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEffect(string $Effect) 设置执行策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取匹配的污点值，当Operator为Equal时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置匹配的污点值，当Operator为Equal时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTolerationSeconds() 获取当污点不被容忍时，Pod还能在节点上运行多久
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTolerationSeconds(integer $TolerationSeconds) 设置当污点不被容忍时，Pod还能在节点上运行多久
注意：此字段可能返回 null，表示取不到有效值。
 */
class K8SToleration extends AbstractModel
{
    /**
     * @var string 匹配的污点名
     */
    public $Key;

    /**
     * @var string 匹配方式，默认值为: Equal
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var string 执行策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Effect;

    /**
     * @var string 匹配的污点值，当Operator为Equal时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var integer 当污点不被容忍时，Pod还能在节点上运行多久
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TolerationSeconds;

    /**
     * @param string $Key 匹配的污点名
     * @param string $Operator 匹配方式，默认值为: Equal
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Effect 执行策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 匹配的污点值，当Operator为Equal时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TolerationSeconds 当污点不被容忍时，Pod还能在节点上运行多久
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Effect",$param) and $param["Effect"] !== null) {
            $this->Effect = $param["Effect"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("TolerationSeconds",$param) and $param["TolerationSeconds"] !== null) {
            $this->TolerationSeconds = $param["TolerationSeconds"];
        }
    }
}
