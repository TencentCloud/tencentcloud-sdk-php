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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档解析模型参数
 *
 * @method string getAlias() 获取模型别名
 * @method void setAlias(string $Alias) 设置模型别名
 * @method string getDescription() 获取模型描述
 * @method void setDescription(string $Description) 设置模型描述
 * @method string getEnhancementMode() 获取增强模式
 * @method void setEnhancementMode(string $EnhancementMode) 设置增强模式
 * @method string getModelId() 获取模型唯一ID
 * @method void setModelId(string $ModelId) 设置模型唯一ID
 * @method string getModelProviderType() 获取模型类型
 * @method void setModelProviderType(string $ModelProviderType) 设置模型类型
 * @method boolean getEnableFormulaEnhancement() 获取是否启用公式增强
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableFormulaEnhancement(boolean $EnableFormulaEnhancement) 设置是否启用公式增强
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableLLMEnhancement() 获取是否启用 LLM 增强
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableLLMEnhancement(boolean $EnableLLMEnhancement) 设置是否启用 LLM 增强
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getOutputHtmlTable() 获取是否输出 HTML 表格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputHtmlTable(boolean $OutputHtmlTable) 设置是否输出 HTML 表格
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSupportedFileList() 获取支持的文件类型列表
 * @method void setSupportedFileList(array $SupportedFileList) 设置支持的文件类型列表
 */
class FileParseModel extends AbstractModel
{
    /**
     * @var string 模型别名
     */
    public $Alias;

    /**
     * @var string 模型描述
     */
    public $Description;

    /**
     * @var string 增强模式
     */
    public $EnhancementMode;

    /**
     * @var string 模型唯一ID
     */
    public $ModelId;

    /**
     * @var string 模型类型
     */
    public $ModelProviderType;

    /**
     * @var boolean 是否启用公式增强
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableFormulaEnhancement;

    /**
     * @var boolean 是否启用 LLM 增强
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableLLMEnhancement;

    /**
     * @var boolean 是否输出 HTML 表格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputHtmlTable;

    /**
     * @var array 支持的文件类型列表
     */
    public $SupportedFileList;

    /**
     * @param string $Alias 模型别名
     * @param string $Description 模型描述
     * @param string $EnhancementMode 增强模式
     * @param string $ModelId 模型唯一ID
     * @param string $ModelProviderType 模型类型
     * @param boolean $EnableFormulaEnhancement 是否启用公式增强
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableLLMEnhancement 是否启用 LLM 增强
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $OutputHtmlTable 是否输出 HTML 表格
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SupportedFileList 支持的文件类型列表
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EnhancementMode",$param) and $param["EnhancementMode"] !== null) {
            $this->EnhancementMode = $param["EnhancementMode"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelProviderType",$param) and $param["ModelProviderType"] !== null) {
            $this->ModelProviderType = $param["ModelProviderType"];
        }

        if (array_key_exists("EnableFormulaEnhancement",$param) and $param["EnableFormulaEnhancement"] !== null) {
            $this->EnableFormulaEnhancement = $param["EnableFormulaEnhancement"];
        }

        if (array_key_exists("EnableLLMEnhancement",$param) and $param["EnableLLMEnhancement"] !== null) {
            $this->EnableLLMEnhancement = $param["EnableLLMEnhancement"];
        }

        if (array_key_exists("OutputHtmlTable",$param) and $param["OutputHtmlTable"] !== null) {
            $this->OutputHtmlTable = $param["OutputHtmlTable"];
        }

        if (array_key_exists("SupportedFileList",$param) and $param["SupportedFileList"] !== null) {
            $this->SupportedFileList = [];
            foreach ($param["SupportedFileList"] as $key => $value){
                $obj = new SupportedFileType();
                $obj->deserialize($value);
                array_push($this->SupportedFileList, $obj);
            }
        }
    }
}
