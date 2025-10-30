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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent采集器状态统计
 *
 * @method integer getRunning() 获取运行中的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunning(integer $Running) 设置运行中的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAbnormal() 获取异常的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbnormal(integer $Abnormal) 设置异常的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInOperation() 获取操作中的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInOperation(integer $InOperation) 设置操作中的数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentStatus extends AbstractModel
{
    /**
     * @var integer 运行中的数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Running;

    /**
     * @var integer 异常的数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Abnormal;

    /**
     * @var integer 操作中的数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InOperation;

    /**
     * @param integer $Running 运行中的数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Abnormal 异常的数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InOperation 操作中的数量
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
        if (array_key_exists("Running",$param) and $param["Running"] !== null) {
            $this->Running = $param["Running"];
        }

        if (array_key_exists("Abnormal",$param) and $param["Abnormal"] !== null) {
            $this->Abnormal = $param["Abnormal"];
        }

        if (array_key_exists("InOperation",$param) and $param["InOperation"] !== null) {
            $this->InOperation = $param["InOperation"];
        }
    }
}
