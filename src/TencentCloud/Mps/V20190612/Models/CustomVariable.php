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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义描述变量
 *
 * @method string getType() 获取<p>用户自定义变量类型。</p><p>参数格式：PascalCase格式。</p><p>不能为UserPrompt。默认平台模板未适配自定义内容，如需适配需提交工单。</p>
 * @method void setType(string $Type) 设置<p>用户自定义变量类型。</p><p>参数格式：PascalCase格式。</p><p>不能为UserPrompt。默认平台模板未适配自定义内容，如需适配需提交工单。</p>
 * @method string getDescription() 获取<p>自定义变量描述。</p>
 * @method void setDescription(string $Description) 设置<p>自定义变量描述。</p>
 */
class CustomVariable extends AbstractModel
{
    /**
     * @var string <p>用户自定义变量类型。</p><p>参数格式：PascalCase格式。</p><p>不能为UserPrompt。默认平台模板未适配自定义内容，如需适配需提交工单。</p>
     */
    public $Type;

    /**
     * @var string <p>自定义变量描述。</p>
     */
    public $Description;

    /**
     * @param string $Type <p>用户自定义变量类型。</p><p>参数格式：PascalCase格式。</p><p>不能为UserPrompt。默认平台模板未适配自定义内容，如需适配需提交工单。</p>
     * @param string $Description <p>自定义变量描述。</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
