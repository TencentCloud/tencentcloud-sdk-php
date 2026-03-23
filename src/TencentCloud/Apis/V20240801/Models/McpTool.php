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
 * mcp工具
 *
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method McpInputOutSchema getInputSchema() 获取入参参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputSchema(McpInputOutSchema $InputSchema) 设置入参参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method McpToolAnnotation getAnnotations() 获取注释
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnnotations(McpToolAnnotation $Annotations) 设置注释
注意：此字段可能返回 null，表示取不到有效值。
 * @method McpInputOutSchema getOutputSchema() 获取出参参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputSchema(McpInputOutSchema $OutputSchema) 设置出参参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class McpTool extends AbstractModel
{
    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var McpInputOutSchema 入参参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputSchema;

    /**
     * @var McpToolAnnotation 注释
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Annotations;

    /**
     * @var McpInputOutSchema 出参参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputSchema;

    /**
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param McpInputOutSchema $InputSchema 入参参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param McpToolAnnotation $Annotations 注释
注意：此字段可能返回 null，表示取不到有效值。
     * @param McpInputOutSchema $OutputSchema 出参参数
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InputSchema",$param) and $param["InputSchema"] !== null) {
            $this->InputSchema = new McpInputOutSchema();
            $this->InputSchema->deserialize($param["InputSchema"]);
        }

        if (array_key_exists("Annotations",$param) and $param["Annotations"] !== null) {
            $this->Annotations = new McpToolAnnotation();
            $this->Annotations->deserialize($param["Annotations"]);
        }

        if (array_key_exists("OutputSchema",$param) and $param["OutputSchema"] !== null) {
            $this->OutputSchema = new McpInputOutSchema();
            $this->OutputSchema->deserialize($param["OutputSchema"]);
        }
    }
}
