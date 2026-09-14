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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义变量详情。
 *
 * @method string getName() 获取<p>变量名称。需填写完整前缀：user.zone.* 表示站点级自定义变量，user.rule.* 表示规则级自定义变量。前缀后的自定义部分仅支持大小写字母、数字和下划线。变量名称区分大小写，长度不能超过 50 个字符。变量创建成功后，名称不可修改。</p>
 * @method void setName(string $Name) 设置<p>变量名称。需填写完整前缀：user.zone.* 表示站点级自定义变量，user.rule.* 表示规则级自定义变量。前缀后的自定义部分仅支持大小写字母、数字和下划线。变量名称区分大小写，长度不能超过 50 个字符。变量创建成功后，名称不可修改。</p>
 * @method string getInitialValue() 获取<p>变量初始值。支持使用常量字符串、变量以及公式。长度不能超过 255 个字符。</p>
 * @method void setInitialValue(string $InitialValue) 设置<p>变量初始值。支持使用常量字符串、变量以及公式。长度不能超过 255 个字符。</p>
 * @method string getDescription() 获取<p>变量描述。长度限制不超过 60 个字符。</p>
 * @method void setDescription(string $Description) 设置<p>变量描述。长度限制不超过 60 个字符。</p>
 */
class CustomVariable extends AbstractModel
{
    /**
     * @var string <p>变量名称。需填写完整前缀：user.zone.* 表示站点级自定义变量，user.rule.* 表示规则级自定义变量。前缀后的自定义部分仅支持大小写字母、数字和下划线。变量名称区分大小写，长度不能超过 50 个字符。变量创建成功后，名称不可修改。</p>
     */
    public $Name;

    /**
     * @var string <p>变量初始值。支持使用常量字符串、变量以及公式。长度不能超过 255 个字符。</p>
     */
    public $InitialValue;

    /**
     * @var string <p>变量描述。长度限制不超过 60 个字符。</p>
     */
    public $Description;

    /**
     * @param string $Name <p>变量名称。需填写完整前缀：user.zone.* 表示站点级自定义变量，user.rule.* 表示规则级自定义变量。前缀后的自定义部分仅支持大小写字母、数字和下划线。变量名称区分大小写，长度不能超过 50 个字符。变量创建成功后，名称不可修改。</p>
     * @param string $InitialValue <p>变量初始值。支持使用常量字符串、变量以及公式。长度不能超过 255 个字符。</p>
     * @param string $Description <p>变量描述。长度限制不超过 60 个字符。</p>
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

        if (array_key_exists("InitialValue",$param) and $param["InitialValue"] !== null) {
            $this->InitialValue = $param["InitialValue"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
