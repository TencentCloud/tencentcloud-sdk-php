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
 * 统一搜索字段信息
 *
 * @method string getName() 获取<p>字段名称</p>
 * @method void setName(string $Name) 设置<p>字段名称</p>
 * @method string getComment() 获取<p>字段描述</p>
 * @method void setComment(string $Comment) 设置<p>字段描述</p>
 * @method string getType() 获取<p>字段类型</p>
 * @method void setType(string $Type) 设置<p>字段类型</p>
 * @method string getLang() 获取<p>语言类型</p>
 * @method void setLang(string $Lang) 设置<p>语言类型</p>
 * @method string getContent() 获取<p>字段内容或代码片段</p>
 * @method void setContent(string $Content) 设置<p>字段内容或代码片段</p>
 * @method array getSampleValues() 获取<p>字段采样值</p>
 * @method void setSampleValues(array $SampleValues) 设置<p>字段采样值</p>
 */
class FieldInfo extends AbstractModel
{
    /**
     * @var string <p>字段名称</p>
     */
    public $Name;

    /**
     * @var string <p>字段描述</p>
     */
    public $Comment;

    /**
     * @var string <p>字段类型</p>
     */
    public $Type;

    /**
     * @var string <p>语言类型</p>
     */
    public $Lang;

    /**
     * @var string <p>字段内容或代码片段</p>
     */
    public $Content;

    /**
     * @var array <p>字段采样值</p>
     */
    public $SampleValues;

    /**
     * @param string $Name <p>字段名称</p>
     * @param string $Comment <p>字段描述</p>
     * @param string $Type <p>字段类型</p>
     * @param string $Lang <p>语言类型</p>
     * @param string $Content <p>字段内容或代码片段</p>
     * @param array $SampleValues <p>字段采样值</p>
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

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("SampleValues",$param) and $param["SampleValues"] !== null) {
            $this->SampleValues = $param["SampleValues"];
        }
    }
}
