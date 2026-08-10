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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务复杂度路由参数
 *
 * @method float getComplexityBias() 获取<p>倾向度</p><p>取值范围：[0, 1]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComplexityBias(float $ComplexityBias) 设置<p>倾向度</p><p>取值范围：[0, 1]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSimpleTargetModels() 获取<p>简单模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSimpleTargetModels(array $SimpleTargetModels) 设置<p>简单模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getComplexTargetModels() 获取<p>复杂模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComplexTargetModels(array $ComplexTargetModels) 设置<p>复杂模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskComplexityRouteDTO extends AbstractModel
{
    /**
     * @var float <p>倾向度</p><p>取值范围：[0, 1]</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComplexityBias;

    /**
     * @var array <p>简单模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SimpleTargetModels;

    /**
     * @var array <p>复杂模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComplexTargetModels;

    /**
     * @param float $ComplexityBias <p>倾向度</p><p>取值范围：[0, 1]</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SimpleTargetModels <p>简单模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ComplexTargetModels <p>复杂模型</p>
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
        if (array_key_exists("ComplexityBias",$param) and $param["ComplexityBias"] !== null) {
            $this->ComplexityBias = $param["ComplexityBias"];
        }

        if (array_key_exists("SimpleTargetModels",$param) and $param["SimpleTargetModels"] !== null) {
            $this->SimpleTargetModels = [];
            foreach ($param["SimpleTargetModels"] as $key => $value){
                $obj = new TargetModelDTO();
                $obj->deserialize($value);
                array_push($this->SimpleTargetModels, $obj);
            }
        }

        if (array_key_exists("ComplexTargetModels",$param) and $param["ComplexTargetModels"] !== null) {
            $this->ComplexTargetModels = [];
            foreach ($param["ComplexTargetModels"] as $key => $value){
                $obj = new TargetModelDTO();
                $obj->deserialize($value);
                array_push($this->ComplexTargetModels, $obj);
            }
        }
    }
}
