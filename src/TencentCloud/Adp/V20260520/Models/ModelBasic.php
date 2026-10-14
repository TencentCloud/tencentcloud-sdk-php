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
 * <p>模型基本信息（已弃用，请使用 ModelProfile）</p>
 *
 * @method string getDescription() 获取<p>模型描述</p>
 * @method void setDescription(string $Description) 设置<p>模型描述</p>
 * @method string getIconUrl() 获取<p>模型图标地址</p>
 * @method void setIconUrl(string $IconUrl) 设置<p>模型图标地址</p>
 * @method string getModelId() 获取<p>模型ID</p>
 * @method void setModelId(string $ModelId) 设置<p>模型ID</p>
 * @method integer getModelType() 获取<p>模型类型</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODEL_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>MODEL_TYPE_LLM</td><td>1</td><td>LLM模型</td></tr><tr><td>MODEL_TYPE_RERANK</td><td>2</td><td>Rerank模型</td></tr><tr><td>MODEL_TYPE_EMBEDDING</td><td>3</td><td>Embedding模型</td></tr><tr><td>MODEL_TYPE_FILE_PARSE</td><td>4</td><td>文档解析模型</td></tr></table>
 * @method void setModelType(integer $ModelType) 设置<p>模型类型</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODEL_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>MODEL_TYPE_LLM</td><td>1</td><td>LLM模型</td></tr><tr><td>MODEL_TYPE_RERANK</td><td>2</td><td>Rerank模型</td></tr><tr><td>MODEL_TYPE_EMBEDDING</td><td>3</td><td>Embedding模型</td></tr><tr><td>MODEL_TYPE_FILE_PARSE</td><td>4</td><td>文档解析模型</td></tr></table>
 * @method string getName() 获取<p>模型名称</p>
 * @method void setName(string $Name) 设置<p>模型名称</p>
 */
class ModelBasic extends AbstractModel
{
    /**
     * @var string <p>模型描述</p>
     */
    public $Description;

    /**
     * @var string <p>模型图标地址</p>
     */
    public $IconUrl;

    /**
     * @var string <p>模型ID</p>
     */
    public $ModelId;

    /**
     * @var integer <p>模型类型</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODEL_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>MODEL_TYPE_LLM</td><td>1</td><td>LLM模型</td></tr><tr><td>MODEL_TYPE_RERANK</td><td>2</td><td>Rerank模型</td></tr><tr><td>MODEL_TYPE_EMBEDDING</td><td>3</td><td>Embedding模型</td></tr><tr><td>MODEL_TYPE_FILE_PARSE</td><td>4</td><td>文档解析模型</td></tr></table>
     */
    public $ModelType;

    /**
     * @var string <p>模型名称</p>
     */
    public $Name;

    /**
     * @param string $Description <p>模型描述</p>
     * @param string $IconUrl <p>模型图标地址</p>
     * @param string $ModelId <p>模型ID</p>
     * @param integer $ModelType <p>模型类型</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODEL_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>MODEL_TYPE_LLM</td><td>1</td><td>LLM模型</td></tr><tr><td>MODEL_TYPE_RERANK</td><td>2</td><td>Rerank模型</td></tr><tr><td>MODEL_TYPE_EMBEDDING</td><td>3</td><td>Embedding模型</td></tr><tr><td>MODEL_TYPE_FILE_PARSE</td><td>4</td><td>文档解析模型</td></tr></table>
     * @param string $Name <p>模型名称</p>
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
