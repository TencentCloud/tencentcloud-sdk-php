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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Flink Job 运行图的边信息
 *
 * @method integer getSource() 获取边的起始节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(integer $Source) 设置边的起始节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTarget() 获取边的目标节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTarget(integer $Target) 设置边的目标节点ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class JobGraphEdge extends AbstractModel
{
    /**
     * @var integer 边的起始节点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var integer 边的目标节点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Target;

    /**
     * @param integer $Source 边的起始节点ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Target 边的目标节点ID
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }
    }
}
