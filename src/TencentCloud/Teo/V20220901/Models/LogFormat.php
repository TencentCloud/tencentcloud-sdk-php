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
 * 实时日志投递的输出格式。您可以直接通过 FormatType 参数使用指定预设日志输出格式（JSON Lines / csv），也可以在预设日志输出格式基础上，通过其他参数来自定义变体输出格式。
 *
 * @method string getFormatType() 获取日志投递的预设输出格式类型，取值有：
<li>json：使用预设日志输出格式 JSON Lines，单条日志中的字段以键值对方式呈现；</li>
<li>csv：使用预设日志输出格式 csv，单条日志中仅呈现字段值，不呈现字段名称。</li>
 * @method void setFormatType(string $FormatType) 设置日志投递的预设输出格式类型，取值有：
<li>json：使用预设日志输出格式 JSON Lines，单条日志中的字段以键值对方式呈现；</li>
<li>csv：使用预设日志输出格式 csv，单条日志中仅呈现字段值，不呈现字段名称。</li>
 * @method string getBatchPrefix() 获取在每个日志投递批次之前添加的字符串。每个日志投递批次可能包含多条日志记录。
 * @method void setBatchPrefix(string $BatchPrefix) 设置在每个日志投递批次之前添加的字符串。每个日志投递批次可能包含多条日志记录。
 * @method string getBatchSuffix() 获取在每个日志投递批次后附加的字符串。
 * @method void setBatchSuffix(string $BatchSuffix) 设置在每个日志投递批次后附加的字符串。
 * @method string getRecordPrefix() 获取在每条日志记录之前添加的字符串。
 * @method void setRecordPrefix(string $RecordPrefix) 设置在每条日志记录之前添加的字符串。
 * @method string getRecordSuffix() 获取在每条日志记录后附加的字符串。
 * @method void setRecordSuffix(string $RecordSuffix) 设置在每条日志记录后附加的字符串。
 * @method string getRecordDelimiter() 获取插入日志记录之间作为分隔符的字符串，取值有：
<li>\n：换行符；</li>
<li>\t：制表符；</li>
<li>，：半角逗号。</li>
 * @method void setRecordDelimiter(string $RecordDelimiter) 设置插入日志记录之间作为分隔符的字符串，取值有：
<li>\n：换行符；</li>
<li>\t：制表符；</li>
<li>，：半角逗号。</li>
 * @method string getFieldDelimiter() 获取单条日志记录内，插入字段之间作为分隔符的字符串，取值有：
<li>\t：制表符；</li>
<li>，：半角逗号；</li>
<li>;：半角分号。</li>
 * @method void setFieldDelimiter(string $FieldDelimiter) 设置单条日志记录内，插入字段之间作为分隔符的字符串，取值有：
<li>\t：制表符；</li>
<li>，：半角逗号；</li>
<li>;：半角分号。</li>
 */
class LogFormat extends AbstractModel
{
    /**
     * @var string 日志投递的预设输出格式类型，取值有：
<li>json：使用预设日志输出格式 JSON Lines，单条日志中的字段以键值对方式呈现；</li>
<li>csv：使用预设日志输出格式 csv，单条日志中仅呈现字段值，不呈现字段名称。</li>
     */
    public $FormatType;

    /**
     * @var string 在每个日志投递批次之前添加的字符串。每个日志投递批次可能包含多条日志记录。
     */
    public $BatchPrefix;

    /**
     * @var string 在每个日志投递批次后附加的字符串。
     */
    public $BatchSuffix;

    /**
     * @var string 在每条日志记录之前添加的字符串。
     */
    public $RecordPrefix;

    /**
     * @var string 在每条日志记录后附加的字符串。
     */
    public $RecordSuffix;

    /**
     * @var string 插入日志记录之间作为分隔符的字符串，取值有：
<li>\n：换行符；</li>
<li>\t：制表符；</li>
<li>，：半角逗号。</li>
     */
    public $RecordDelimiter;

    /**
     * @var string 单条日志记录内，插入字段之间作为分隔符的字符串，取值有：
<li>\t：制表符；</li>
<li>，：半角逗号；</li>
<li>;：半角分号。</li>
     */
    public $FieldDelimiter;

    /**
     * @param string $FormatType 日志投递的预设输出格式类型，取值有：
<li>json：使用预设日志输出格式 JSON Lines，单条日志中的字段以键值对方式呈现；</li>
<li>csv：使用预设日志输出格式 csv，单条日志中仅呈现字段值，不呈现字段名称。</li>
     * @param string $BatchPrefix 在每个日志投递批次之前添加的字符串。每个日志投递批次可能包含多条日志记录。
     * @param string $BatchSuffix 在每个日志投递批次后附加的字符串。
     * @param string $RecordPrefix 在每条日志记录之前添加的字符串。
     * @param string $RecordSuffix 在每条日志记录后附加的字符串。
     * @param string $RecordDelimiter 插入日志记录之间作为分隔符的字符串，取值有：
<li>\n：换行符；</li>
<li>\t：制表符；</li>
<li>，：半角逗号。</li>
     * @param string $FieldDelimiter 单条日志记录内，插入字段之间作为分隔符的字符串，取值有：
<li>\t：制表符；</li>
<li>，：半角逗号；</li>
<li>;：半角分号。</li>
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
        if (array_key_exists("FormatType",$param) and $param["FormatType"] !== null) {
            $this->FormatType = $param["FormatType"];
        }

        if (array_key_exists("BatchPrefix",$param) and $param["BatchPrefix"] !== null) {
            $this->BatchPrefix = $param["BatchPrefix"];
        }

        if (array_key_exists("BatchSuffix",$param) and $param["BatchSuffix"] !== null) {
            $this->BatchSuffix = $param["BatchSuffix"];
        }

        if (array_key_exists("RecordPrefix",$param) and $param["RecordPrefix"] !== null) {
            $this->RecordPrefix = $param["RecordPrefix"];
        }

        if (array_key_exists("RecordSuffix",$param) and $param["RecordSuffix"] !== null) {
            $this->RecordSuffix = $param["RecordSuffix"];
        }

        if (array_key_exists("RecordDelimiter",$param) and $param["RecordDelimiter"] !== null) {
            $this->RecordDelimiter = $param["RecordDelimiter"];
        }

        if (array_key_exists("FieldDelimiter",$param) and $param["FieldDelimiter"] !== null) {
            $this->FieldDelimiter = $param["FieldDelimiter"];
        }
    }
}
