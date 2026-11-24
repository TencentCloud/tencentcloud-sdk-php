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
 * 提示词模板标签
 *
 * @method string getContent() 获取标签内容
 * @method void setContent(string $Content) 设置标签内容
 * @method string getPromptTemplateLabelId() 获取标签ID
 * @method void setPromptTemplateLabelId(string $PromptTemplateLabelId) 设置标签ID
 * @method integer getPromptTemplateLabelType() 获取标签类型。1-系统标签, 2-自定义标签
 * @method void setPromptTemplateLabelType(integer $PromptTemplateLabelType) 设置标签类型。1-系统标签, 2-自定义标签
 */
class PromptTemplateLabel extends AbstractModel
{
    /**
     * @var string 标签内容
     */
    public $Content;

    /**
     * @var string 标签ID
     */
    public $PromptTemplateLabelId;

    /**
     * @var integer 标签类型。1-系统标签, 2-自定义标签
     */
    public $PromptTemplateLabelType;

    /**
     * @param string $Content 标签内容
     * @param string $PromptTemplateLabelId 标签ID
     * @param integer $PromptTemplateLabelType 标签类型。1-系统标签, 2-自定义标签
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("PromptTemplateLabelId",$param) and $param["PromptTemplateLabelId"] !== null) {
            $this->PromptTemplateLabelId = $param["PromptTemplateLabelId"];
        }

        if (array_key_exists("PromptTemplateLabelType",$param) and $param["PromptTemplateLabelType"] !== null) {
            $this->PromptTemplateLabelType = $param["PromptTemplateLabelType"];
        }
    }
}
