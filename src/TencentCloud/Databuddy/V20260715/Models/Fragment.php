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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 代码片段
 *
 * @method string getName() 获取字段名称
 * @method void setName(string $Name) 设置字段名称
 * @method string getType() 获取字段类型
 * @method void setType(string $Type) 设置字段类型
 * @method string getComment() 获取表字段描述
 * @method void setComment(string $Comment) 设置表字段描述
 * @method string getContent() 获取片段内容
 * @method void setContent(string $Content) 设置片段内容
 * @method string getLang() 获取片段语言
 * @method void setLang(string $Lang) 设置片段语言
 */
class Fragment extends AbstractModel
{
    /**
     * @var string 字段名称
     */
    public $Name;

    /**
     * @var string 字段类型
     */
    public $Type;

    /**
     * @var string 表字段描述
     */
    public $Comment;

    /**
     * @var string 片段内容
     */
    public $Content;

    /**
     * @var string 片段语言
     */
    public $Lang;

    /**
     * @param string $Name 字段名称
     * @param string $Type 字段类型
     * @param string $Comment 表字段描述
     * @param string $Content 片段内容
     * @param string $Lang 片段语言
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }
    }
}
