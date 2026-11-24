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
 * 提示词模板规格参数（创建/修改）
 *
 * @method string getCategoryKey() 获取分类标识
 * @method void setCategoryKey(string $CategoryKey) 设置分类标识
 * @method array getCustomVariableList() 获取自定义变量列表
 * @method void setCustomVariableList(array $CustomVariableList) 设置自定义变量列表
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method array getLabelIdList() 获取标签ID列表
 * @method void setLabelIdList(array $LabelIdList) 设置标签ID列表
 * @method string getName() 获取模板名称
 * @method void setName(string $Name) 设置模板名称
 * @method string getPromptContent() 获取提示词内容
 * @method void setPromptContent(string $PromptContent) 设置提示词内容
 */
class PromptTemplateSpec extends AbstractModel
{
    /**
     * @var string 分类标识
     */
    public $CategoryKey;

    /**
     * @var array 自定义变量列表
     */
    public $CustomVariableList;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var array 标签ID列表
     */
    public $LabelIdList;

    /**
     * @var string 模板名称
     */
    public $Name;

    /**
     * @var string 提示词内容
     */
    public $PromptContent;

    /**
     * @param string $CategoryKey 分类标识
     * @param array $CustomVariableList 自定义变量列表
     * @param string $Description 描述
     * @param array $LabelIdList 标签ID列表
     * @param string $Name 模板名称
     * @param string $PromptContent 提示词内容
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
        if (array_key_exists("CategoryKey",$param) and $param["CategoryKey"] !== null) {
            $this->CategoryKey = $param["CategoryKey"];
        }

        if (array_key_exists("CustomVariableList",$param) and $param["CustomVariableList"] !== null) {
            $this->CustomVariableList = $param["CustomVariableList"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("LabelIdList",$param) and $param["LabelIdList"] !== null) {
            $this->LabelIdList = $param["LabelIdList"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PromptContent",$param) and $param["PromptContent"] !== null) {
            $this->PromptContent = $param["PromptContent"];
        }
    }
}
