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
 * 实时日志投递的输出格式。您可以直接通过 FormatType 参数使用指定预设日志输出格式（JSON Lines / csv），也可以在预设日志输出格式基础上，通过其他参数来自定义变体输出格式，使用详情见 [自定义日志输出格式](https://cloud.tencent.com/document/product/1552/110448)。
 *
 * @method string getFormatType() 获取<p>日志输出格式，取值有：</p><ul><li>json：使用预设日志输出格式 JSON Lines，单条日志中的字段以键值对方式呈现；</li><li>csv：使用预设日志输出格式 csv，单条日志中仅呈现字段值，不呈现字段名称。</li><li>template：使用用户自定义输出模板，单条日志中支持按照自定义模板进行自定义排版和拼接，需配合 RecordTemplate 字段使用。</li></ul>
 * @method void setFormatType(string $FormatType) 设置<p>日志输出格式，取值有：</p><ul><li>json：使用预设日志输出格式 JSON Lines，单条日志中的字段以键值对方式呈现；</li><li>csv：使用预设日志输出格式 csv，单条日志中仅呈现字段值，不呈现字段名称。</li><li>template：使用用户自定义输出模板，单条日志中支持按照自定义模板进行自定义排版和拼接，需配合 RecordTemplate 字段使用。</li></ul>
 * @method string getBatchPrefix() 获取<p>在每个日志投递批次之前添加的字符串。每个日志投递批次可能包含多条日志记录。</p>
 * @method void setBatchPrefix(string $BatchPrefix) 设置<p>在每个日志投递批次之前添加的字符串。每个日志投递批次可能包含多条日志记录。</p>
 * @method string getBatchSuffix() 获取<p>在每个日志投递批次后附加的字符串。</p>
 * @method void setBatchSuffix(string $BatchSuffix) 设置<p>在每个日志投递批次后附加的字符串。</p>
 * @method string getRecordPrefix() 获取<p>单条日志前缀，在每条日志记录之前添加的字符串。</p>
 * @method void setRecordPrefix(string $RecordPrefix) 设置<p>单条日志前缀，在每条日志记录之前添加的字符串。</p>
 * @method string getRecordSuffix() 获取<p>单条日志后缀，在每条日志记录后附加的字符串。</p>
 * @method void setRecordSuffix(string $RecordSuffix) 设置<p>单条日志后缀，在每条日志记录后附加的字符串。</p>
 * @method string getRecordDelimiter() 获取<p>日志分隔符，插入日志记录之间作为分隔的字符串，取值有：</p><ul><li>\n：换行符；</li><li>\t：制表符；</li><li>，：半角逗号。</li></ul>
 * @method void setRecordDelimiter(string $RecordDelimiter) 设置<p>日志分隔符，插入日志记录之间作为分隔的字符串，取值有：</p><ul><li>\n：换行符；</li><li>\t：制表符；</li><li>，：半角逗号。</li></ul>
 * @method string getRecordTemplate() 获取<p>日志模板，单条日志的输出模板，长度限制 4KB，仅当 FormatType = template 生效。支持对配置的推送字段按照模板进行自定义排版和拼接。</p>
 * @method void setRecordTemplate(string $RecordTemplate) 设置<p>日志模板，单条日志的输出模板，长度限制 4KB，仅当 FormatType = template 生效。支持对配置的推送字段按照模板进行自定义排版和拼接。</p>
 * @method string getFieldDelimiter() 获取<p>字段分隔符，单条日志记录内，插入字段之间作为分隔符的字符串，仅当 FormatType = csv 生效。取值有：<ul><li>\t：制表符；</li><li>，：半角逗号；</li><li>;：半角分号。</li></ul></p>
 * @method void setFieldDelimiter(string $FieldDelimiter) 设置<p>字段分隔符，单条日志记录内，插入字段之间作为分隔符的字符串，仅当 FormatType = csv 生效。取值有：<ul><li>\t：制表符；</li><li>，：半角逗号；</li><li>;：半角分号。</li></ul></p>
 */
class LogFormat extends AbstractModel
{
    /**
     * @var string <p>日志输出格式，取值有：</p><ul><li>json：使用预设日志输出格式 JSON Lines，单条日志中的字段以键值对方式呈现；</li><li>csv：使用预设日志输出格式 csv，单条日志中仅呈现字段值，不呈现字段名称。</li><li>template：使用用户自定义输出模板，单条日志中支持按照自定义模板进行自定义排版和拼接，需配合 RecordTemplate 字段使用。</li></ul>
     */
    public $FormatType;

    /**
     * @var string <p>在每个日志投递批次之前添加的字符串。每个日志投递批次可能包含多条日志记录。</p>
     */
    public $BatchPrefix;

    /**
     * @var string <p>在每个日志投递批次后附加的字符串。</p>
     */
    public $BatchSuffix;

    /**
     * @var string <p>单条日志前缀，在每条日志记录之前添加的字符串。</p>
     */
    public $RecordPrefix;

    /**
     * @var string <p>单条日志后缀，在每条日志记录后附加的字符串。</p>
     */
    public $RecordSuffix;

    /**
     * @var string <p>日志分隔符，插入日志记录之间作为分隔的字符串，取值有：</p><ul><li>\n：换行符；</li><li>\t：制表符；</li><li>，：半角逗号。</li></ul>
     */
    public $RecordDelimiter;

    /**
     * @var string <p>日志模板，单条日志的输出模板，长度限制 4KB，仅当 FormatType = template 生效。支持对配置的推送字段按照模板进行自定义排版和拼接。</p>
     */
    public $RecordTemplate;

    /**
     * @var string <p>字段分隔符，单条日志记录内，插入字段之间作为分隔符的字符串，仅当 FormatType = csv 生效。取值有：<ul><li>\t：制表符；</li><li>，：半角逗号；</li><li>;：半角分号。</li></ul></p>
     */
    public $FieldDelimiter;

    /**
     * @param string $FormatType <p>日志输出格式，取值有：</p><ul><li>json：使用预设日志输出格式 JSON Lines，单条日志中的字段以键值对方式呈现；</li><li>csv：使用预设日志输出格式 csv，单条日志中仅呈现字段值，不呈现字段名称。</li><li>template：使用用户自定义输出模板，单条日志中支持按照自定义模板进行自定义排版和拼接，需配合 RecordTemplate 字段使用。</li></ul>
     * @param string $BatchPrefix <p>在每个日志投递批次之前添加的字符串。每个日志投递批次可能包含多条日志记录。</p>
     * @param string $BatchSuffix <p>在每个日志投递批次后附加的字符串。</p>
     * @param string $RecordPrefix <p>单条日志前缀，在每条日志记录之前添加的字符串。</p>
     * @param string $RecordSuffix <p>单条日志后缀，在每条日志记录后附加的字符串。</p>
     * @param string $RecordDelimiter <p>日志分隔符，插入日志记录之间作为分隔的字符串，取值有：</p><ul><li>\n：换行符；</li><li>\t：制表符；</li><li>，：半角逗号。</li></ul>
     * @param string $RecordTemplate <p>日志模板，单条日志的输出模板，长度限制 4KB，仅当 FormatType = template 生效。支持对配置的推送字段按照模板进行自定义排版和拼接。</p>
     * @param string $FieldDelimiter <p>字段分隔符，单条日志记录内，插入字段之间作为分隔符的字符串，仅当 FormatType = csv 生效。取值有：<ul><li>\t：制表符；</li><li>，：半角逗号；</li><li>;：半角分号。</li></ul></p>
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

        if (array_key_exists("RecordTemplate",$param) and $param["RecordTemplate"] !== null) {
            $this->RecordTemplate = $param["RecordTemplate"];
        }

        if (array_key_exists("FieldDelimiter",$param) and $param["FieldDelimiter"] !== null) {
            $this->FieldDelimiter = $param["FieldDelimiter"];
        }
    }
}
