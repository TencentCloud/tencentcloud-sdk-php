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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流SPARK_SQL参数
 *
 * @method string getType() 获取通用任务参数类型,目前只支持SPARK_SQL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置通用任务参数类型,目前只支持SPARK_SQL
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取通用任务参数内容, 不同参数用;
分割
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置通用任务参数内容, 不同参数用;
分割
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowGeneralTaskParam extends AbstractModel
{
    /**
     * @var string 通用任务参数类型,目前只支持SPARK_SQL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 通用任务参数内容, 不同参数用;
分割
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $Type 通用任务参数类型,目前只支持SPARK_SQL
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 通用任务参数内容, 不同参数用;
分割
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
