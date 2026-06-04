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
 * 模型基本信息
 *
 * @method string getDescription() 获取模型描述
 * @method void setDescription(string $Description) 设置模型描述
 * @method string getIconUrl() 获取模型图标地址
 * @method void setIconUrl(string $IconUrl) 设置模型图标地址
 * @method string getModelId() 获取模型ID
 * @method void setModelId(string $ModelId) 设置模型ID
 * @method integer getModelType() 获取模型类型。1-LLM模型, 2-Rerank模型, 3-Embedding模型, 4-文档解析模型
 * @method void setModelType(integer $ModelType) 设置模型类型。1-LLM模型, 2-Rerank模型, 3-Embedding模型, 4-文档解析模型
 * @method string getName() 获取模型名称
 * @method void setName(string $Name) 设置模型名称
 */
class ModelBasic extends AbstractModel
{
    /**
     * @var string 模型描述
     */
    public $Description;

    /**
     * @var string 模型图标地址
     */
    public $IconUrl;

    /**
     * @var string 模型ID
     */
    public $ModelId;

    /**
     * @var integer 模型类型。1-LLM模型, 2-Rerank模型, 3-Embedding模型, 4-文档解析模型
     */
    public $ModelType;

    /**
     * @var string 模型名称
     */
    public $Name;

    /**
     * @param string $Description 模型描述
     * @param string $IconUrl 模型图标地址
     * @param string $ModelId 模型ID
     * @param integer $ModelType 模型类型。1-LLM模型, 2-Rerank模型, 3-Embedding模型, 4-文档解析模型
     * @param string $Name 模型名称
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
