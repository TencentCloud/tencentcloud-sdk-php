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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志导入规则
 *
 * @method string getRechargeType() 获取<p>导入类型，支持json_log：json格式日志，minimalist_log: 单行全文，fullregex_log: 单行完全正则</p>
 * @method void setRechargeType(string $RechargeType) 设置<p>导入类型，支持json_log：json格式日志，minimalist_log: 单行全文，fullregex_log: 单行完全正则</p>
 * @method integer getEncodingFormat() 获取<p>解析编码格式，0: UTF-8（默认值），1: GBK</p>
 * @method void setEncodingFormat(integer $EncodingFormat) 设置<p>解析编码格式，0: UTF-8（默认值），1: GBK</p>
 * @method boolean getDefaultTimeSwitch() 获取<p>使用默认时间状态。true：开启后将使用系统当前时间或 Kafka 消息时间戳作为日志时间戳；false：关闭将使用日志中的时间字段作为日志时间戳。 默认：true</p>
 * @method void setDefaultTimeSwitch(boolean $DefaultTimeSwitch) 设置<p>使用默认时间状态。true：开启后将使用系统当前时间或 Kafka 消息时间戳作为日志时间戳；false：关闭将使用日志中的时间字段作为日志时间戳。 默认：true</p>
 * @method string getLogRegex() 获取<p>整条日志匹配规则，只有RechargeType为fullregex_log时有效</p>
 * @method void setLogRegex(string $LogRegex) 设置<p>整条日志匹配规则，只有RechargeType为fullregex_log时有效</p>
 * @method boolean getUnMatchLogSwitch() 获取<p>解析失败日志是否上传，true表示上传，false表示不上传</p>
 * @method void setUnMatchLogSwitch(boolean $UnMatchLogSwitch) 设置<p>解析失败日志是否上传，true表示上传，false表示不上传</p>
 * @method string getUnMatchLogKey() 获取<p>解析失败日志的键名称</p>
 * @method void setUnMatchLogKey(string $UnMatchLogKey) 设置<p>解析失败日志的键名称</p>
 * @method integer getUnMatchLogTimeSrc() 获取<p>解析失败日志时间来源，0: 系统当前时间，1: Kafka消息时间戳</p>
 * @method void setUnMatchLogTimeSrc(integer $UnMatchLogTimeSrc) 设置<p>解析失败日志时间来源，0: 系统当前时间，1: Kafka消息时间戳</p>
 * @method integer getDefaultTimeSrc() 获取<p>默认时间来源，0: 系统当前时间，1: Kafka消息时间戳</p>
 * @method void setDefaultTimeSrc(integer $DefaultTimeSrc) 设置<p>默认时间来源，0: 系统当前时间，1: Kafka消息时间戳</p>
 * @method string getTimeKey() 获取<p>时间字段，日志中代表时间的字段名。</p><ul><li>当DefaultTimeSwitch为false，且RechargeType数据提取模式为 <code>json_log</code> JSON-文件日志 或 <code>fullregex_log</code> 单行完全正则-文件日志时， TimeKey不能为空。</li></ul>
 * @method void setTimeKey(string $TimeKey) 设置<p>时间字段，日志中代表时间的字段名。</p><ul><li>当DefaultTimeSwitch为false，且RechargeType数据提取模式为 <code>json_log</code> JSON-文件日志 或 <code>fullregex_log</code> 单行完全正则-文件日志时， TimeKey不能为空。</li></ul>
 * @method string getTimeRegex() 获取<p>时间提取正则表达式。</p><ul><li>当DefaultTimeSwitch为false，且RechargeType数据提取模式为 <code>minimalist_log</code> 单行全文-文件日志时， TimeRegex不能为空。</li><li>仅需输入日志中代表时间的字段的正则表达式即可；若匹配到多个字段，将使用第一个。<br> 例：日志原文为：message with time 2022-08-08 14:20:20，则您可以设置提取时间正则为\d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d</li></ul>
 * @method void setTimeRegex(string $TimeRegex) 设置<p>时间提取正则表达式。</p><ul><li>当DefaultTimeSwitch为false，且RechargeType数据提取模式为 <code>minimalist_log</code> 单行全文-文件日志时， TimeRegex不能为空。</li><li>仅需输入日志中代表时间的字段的正则表达式即可；若匹配到多个字段，将使用第一个。<br> 例：日志原文为：message with time 2022-08-08 14:20:20，则您可以设置提取时间正则为\d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d</li></ul>
 * @method string getTimeFormat() 获取<p>时间字段格式。</p><ul><li>当DefaultTimeSwitch为false时， TimeFormat不能为空。</li></ul>
 * @method void setTimeFormat(string $TimeFormat) 设置<p>时间字段格式。</p><ul><li>当DefaultTimeSwitch为false时， TimeFormat不能为空。</li></ul>
 * @method string getTimeZone() 获取<p>时间字段时区。</p><ul><li><p>当DefaultTimeSwitch为false时， TimeZone不能为空。</p></li><li><p>时区格式规则<br>前缀：使用 GMT 或 UTC 作为时区基准<br>偏移量：</p><ul><li><code>-</code> 表示西时区（比基准时间晚）</li><li><code>+</code> 表示东时区（比基准时间早）</li><li>格式为 ±HH:MM（小时:分钟）</li></ul></li><li><p>当前支持：<br><pre><code>&quot;GMT-12:00&quot; &quot;GMT-11:00&quot; &quot;GMT-10:00&quot; &quot;GMT-09:30&quot; &quot;GMT-09:00&quot; &quot;GMT-08:00&quot; &quot;GMT-07:00&quot; &quot;GMT-06:00&quot; &quot;GMT-05:00&quot; &quot;GMT-04:00&quot; &quot;GMT-03:30&quot; &quot;GMT-03:00&quot; &quot;GMT-02:00&quot; &quot;GMT-01:00&quot; &quot;GMT+00:00&quot;&quot;GMT+01:00&quot;&quot;GMT+02:00&quot;&quot;GMT+03:30&quot;&quot;GMT+04:00&quot;&quot;GMT+04:30&quot;&quot;GMT+05:00&quot;&quot;GMT+05:30&quot;&quot;GMT+05:45&quot;&quot;GMT+06:00&quot;&quot;GMT+06:30&quot;&quot;GMT+07:00&quot;&quot;GMT+08:00&quot;&quot;GMT+09:00&quot;&quot;GMT+09:30&quot;&quot;GMT+10:00&quot;&quot;GMT+10:30&quot;&quot;GMT+11:00&quot;&quot;GMT+11:30&quot;&quot;GMT+12:00&quot;&quot;GMT+12:45&quot;&quot;GMT+13:00&quot;&quot;GMT+14:00&quot;&quot;UTC-11:00&quot;&quot;UTC-10:00&quot;&quot;UTC-09:00&quot;&quot;UTC-08:00&quot;&quot;UTC-12:00&quot;&quot;UTC-07:00&quot;&quot;UTC-06:00&quot;&quot;UTC-05:00&quot;&quot;UTC-04:30&quot;&quot;UTC-04:00&quot;&quot;UTC-03:30&quot;&quot;UTC-03:00&quot;&quot;UTC-02:00&quot;&quot;UTC-01:00&quot;&quot;UTC+00:00&quot;&quot;UTC+01:00&quot;&quot;UTC+02:00&quot;&quot;UTC+03:00&quot;&quot;UTC+03:30&quot;&quot;UTC+04:00&quot;&quot;UTC+04:30&quot;&quot;UTC+05:00&quot;&quot;UTC+05:45&quot;&quot;UTC+06:00&quot;&quot;UTC+06:30&quot;&quot;UTC+07:00&quot;&quot;UTC+08:00&quot;&quot;UTC+09:00&quot;&quot;UTC+09:30&quot;&quot;UTC+10:00&quot;&quot;UTC+11:00&quot;&quot;UTC+12:00&quot;&quot;UTC+13:00&quot;</code></pre></p></li></ul>
 * @method void setTimeZone(string $TimeZone) 设置<p>时间字段时区。</p><ul><li><p>当DefaultTimeSwitch为false时， TimeZone不能为空。</p></li><li><p>时区格式规则<br>前缀：使用 GMT 或 UTC 作为时区基准<br>偏移量：</p><ul><li><code>-</code> 表示西时区（比基准时间晚）</li><li><code>+</code> 表示东时区（比基准时间早）</li><li>格式为 ±HH:MM（小时:分钟）</li></ul></li><li><p>当前支持：<br><pre><code>&quot;GMT-12:00&quot; &quot;GMT-11:00&quot; &quot;GMT-10:00&quot; &quot;GMT-09:30&quot; &quot;GMT-09:00&quot; &quot;GMT-08:00&quot; &quot;GMT-07:00&quot; &quot;GMT-06:00&quot; &quot;GMT-05:00&quot; &quot;GMT-04:00&quot; &quot;GMT-03:30&quot; &quot;GMT-03:00&quot; &quot;GMT-02:00&quot; &quot;GMT-01:00&quot; &quot;GMT+00:00&quot;&quot;GMT+01:00&quot;&quot;GMT+02:00&quot;&quot;GMT+03:30&quot;&quot;GMT+04:00&quot;&quot;GMT+04:30&quot;&quot;GMT+05:00&quot;&quot;GMT+05:30&quot;&quot;GMT+05:45&quot;&quot;GMT+06:00&quot;&quot;GMT+06:30&quot;&quot;GMT+07:00&quot;&quot;GMT+08:00&quot;&quot;GMT+09:00&quot;&quot;GMT+09:30&quot;&quot;GMT+10:00&quot;&quot;GMT+10:30&quot;&quot;GMT+11:00&quot;&quot;GMT+11:30&quot;&quot;GMT+12:00&quot;&quot;GMT+12:45&quot;&quot;GMT+13:00&quot;&quot;GMT+14:00&quot;&quot;UTC-11:00&quot;&quot;UTC-10:00&quot;&quot;UTC-09:00&quot;&quot;UTC-08:00&quot;&quot;UTC-12:00&quot;&quot;UTC-07:00&quot;&quot;UTC-06:00&quot;&quot;UTC-05:00&quot;&quot;UTC-04:30&quot;&quot;UTC-04:00&quot;&quot;UTC-03:30&quot;&quot;UTC-03:00&quot;&quot;UTC-02:00&quot;&quot;UTC-01:00&quot;&quot;UTC+00:00&quot;&quot;UTC+01:00&quot;&quot;UTC+02:00&quot;&quot;UTC+03:00&quot;&quot;UTC+03:30&quot;&quot;UTC+04:00&quot;&quot;UTC+04:30&quot;&quot;UTC+05:00&quot;&quot;UTC+05:45&quot;&quot;UTC+06:00&quot;&quot;UTC+06:30&quot;&quot;UTC+07:00&quot;&quot;UTC+08:00&quot;&quot;UTC+09:00&quot;&quot;UTC+09:30&quot;&quot;UTC+10:00&quot;&quot;UTC+11:00&quot;&quot;UTC+12:00&quot;&quot;UTC+13:00&quot;</code></pre></p></li></ul>
 * @method array getMetadata() 获取<p>元数据信息，Kafka导入支持kafka_topic,kafka_partition,kafka_offset,kafka_timestamp</p>
 * @method void setMetadata(array $Metadata) 设置<p>元数据信息，Kafka导入支持kafka_topic,kafka_partition,kafka_offset,kafka_timestamp</p>
 * @method array getKeys() 获取<p>日志Key列表，RechargeType为full_regex_log、delimiter_log时必填</p>
 * @method void setKeys(array $Keys) 设置<p>日志Key列表，RechargeType为full_regex_log、delimiter_log时必填</p>
 * @method boolean getParseArray() 获取<p>json解析模式，开启首层数据解析</p>
 * @method void setParseArray(boolean $ParseArray) 设置<p>json解析模式，开启首层数据解析</p>
 * @method string getDelimiter() 获取<p>分隔符解析模式-分隔符<br>当解析格式为分隔符提取时，该字段必填</p>
 * @method void setDelimiter(string $Delimiter) 设置<p>分隔符解析模式-分隔符<br>当解析格式为分隔符提取时，该字段必填</p>
 * @method JsonExpandInfo getJsonExpand() 获取<p>JSON嵌套展开配置。仅RechargeType为json_log时生效，不传表示不开启。</p>
 * @method void setJsonExpand(JsonExpandInfo $JsonExpand) 设置<p>JSON嵌套展开配置。仅RechargeType为json_log时生效，不传表示不开启。</p>
 */
class LogRechargeRuleInfo extends AbstractModel
{
    /**
     * @var string <p>导入类型，支持json_log：json格式日志，minimalist_log: 单行全文，fullregex_log: 单行完全正则</p>
     */
    public $RechargeType;

    /**
     * @var integer <p>解析编码格式，0: UTF-8（默认值），1: GBK</p>
     */
    public $EncodingFormat;

    /**
     * @var boolean <p>使用默认时间状态。true：开启后将使用系统当前时间或 Kafka 消息时间戳作为日志时间戳；false：关闭将使用日志中的时间字段作为日志时间戳。 默认：true</p>
     */
    public $DefaultTimeSwitch;

    /**
     * @var string <p>整条日志匹配规则，只有RechargeType为fullregex_log时有效</p>
     */
    public $LogRegex;

    /**
     * @var boolean <p>解析失败日志是否上传，true表示上传，false表示不上传</p>
     */
    public $UnMatchLogSwitch;

    /**
     * @var string <p>解析失败日志的键名称</p>
     */
    public $UnMatchLogKey;

    /**
     * @var integer <p>解析失败日志时间来源，0: 系统当前时间，1: Kafka消息时间戳</p>
     */
    public $UnMatchLogTimeSrc;

    /**
     * @var integer <p>默认时间来源，0: 系统当前时间，1: Kafka消息时间戳</p>
     */
    public $DefaultTimeSrc;

    /**
     * @var string <p>时间字段，日志中代表时间的字段名。</p><ul><li>当DefaultTimeSwitch为false，且RechargeType数据提取模式为 <code>json_log</code> JSON-文件日志 或 <code>fullregex_log</code> 单行完全正则-文件日志时， TimeKey不能为空。</li></ul>
     */
    public $TimeKey;

    /**
     * @var string <p>时间提取正则表达式。</p><ul><li>当DefaultTimeSwitch为false，且RechargeType数据提取模式为 <code>minimalist_log</code> 单行全文-文件日志时， TimeRegex不能为空。</li><li>仅需输入日志中代表时间的字段的正则表达式即可；若匹配到多个字段，将使用第一个。<br> 例：日志原文为：message with time 2022-08-08 14:20:20，则您可以设置提取时间正则为\d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d</li></ul>
     */
    public $TimeRegex;

    /**
     * @var string <p>时间字段格式。</p><ul><li>当DefaultTimeSwitch为false时， TimeFormat不能为空。</li></ul>
     */
    public $TimeFormat;

    /**
     * @var string <p>时间字段时区。</p><ul><li><p>当DefaultTimeSwitch为false时， TimeZone不能为空。</p></li><li><p>时区格式规则<br>前缀：使用 GMT 或 UTC 作为时区基准<br>偏移量：</p><ul><li><code>-</code> 表示西时区（比基准时间晚）</li><li><code>+</code> 表示东时区（比基准时间早）</li><li>格式为 ±HH:MM（小时:分钟）</li></ul></li><li><p>当前支持：<br><pre><code>&quot;GMT-12:00&quot; &quot;GMT-11:00&quot; &quot;GMT-10:00&quot; &quot;GMT-09:30&quot; &quot;GMT-09:00&quot; &quot;GMT-08:00&quot; &quot;GMT-07:00&quot; &quot;GMT-06:00&quot; &quot;GMT-05:00&quot; &quot;GMT-04:00&quot; &quot;GMT-03:30&quot; &quot;GMT-03:00&quot; &quot;GMT-02:00&quot; &quot;GMT-01:00&quot; &quot;GMT+00:00&quot;&quot;GMT+01:00&quot;&quot;GMT+02:00&quot;&quot;GMT+03:30&quot;&quot;GMT+04:00&quot;&quot;GMT+04:30&quot;&quot;GMT+05:00&quot;&quot;GMT+05:30&quot;&quot;GMT+05:45&quot;&quot;GMT+06:00&quot;&quot;GMT+06:30&quot;&quot;GMT+07:00&quot;&quot;GMT+08:00&quot;&quot;GMT+09:00&quot;&quot;GMT+09:30&quot;&quot;GMT+10:00&quot;&quot;GMT+10:30&quot;&quot;GMT+11:00&quot;&quot;GMT+11:30&quot;&quot;GMT+12:00&quot;&quot;GMT+12:45&quot;&quot;GMT+13:00&quot;&quot;GMT+14:00&quot;&quot;UTC-11:00&quot;&quot;UTC-10:00&quot;&quot;UTC-09:00&quot;&quot;UTC-08:00&quot;&quot;UTC-12:00&quot;&quot;UTC-07:00&quot;&quot;UTC-06:00&quot;&quot;UTC-05:00&quot;&quot;UTC-04:30&quot;&quot;UTC-04:00&quot;&quot;UTC-03:30&quot;&quot;UTC-03:00&quot;&quot;UTC-02:00&quot;&quot;UTC-01:00&quot;&quot;UTC+00:00&quot;&quot;UTC+01:00&quot;&quot;UTC+02:00&quot;&quot;UTC+03:00&quot;&quot;UTC+03:30&quot;&quot;UTC+04:00&quot;&quot;UTC+04:30&quot;&quot;UTC+05:00&quot;&quot;UTC+05:45&quot;&quot;UTC+06:00&quot;&quot;UTC+06:30&quot;&quot;UTC+07:00&quot;&quot;UTC+08:00&quot;&quot;UTC+09:00&quot;&quot;UTC+09:30&quot;&quot;UTC+10:00&quot;&quot;UTC+11:00&quot;&quot;UTC+12:00&quot;&quot;UTC+13:00&quot;</code></pre></p></li></ul>
     */
    public $TimeZone;

    /**
     * @var array <p>元数据信息，Kafka导入支持kafka_topic,kafka_partition,kafka_offset,kafka_timestamp</p>
     */
    public $Metadata;

    /**
     * @var array <p>日志Key列表，RechargeType为full_regex_log、delimiter_log时必填</p>
     */
    public $Keys;

    /**
     * @var boolean <p>json解析模式，开启首层数据解析</p>
     */
    public $ParseArray;

    /**
     * @var string <p>分隔符解析模式-分隔符<br>当解析格式为分隔符提取时，该字段必填</p>
     */
    public $Delimiter;

    /**
     * @var JsonExpandInfo <p>JSON嵌套展开配置。仅RechargeType为json_log时生效，不传表示不开启。</p>
     */
    public $JsonExpand;

    /**
     * @param string $RechargeType <p>导入类型，支持json_log：json格式日志，minimalist_log: 单行全文，fullregex_log: 单行完全正则</p>
     * @param integer $EncodingFormat <p>解析编码格式，0: UTF-8（默认值），1: GBK</p>
     * @param boolean $DefaultTimeSwitch <p>使用默认时间状态。true：开启后将使用系统当前时间或 Kafka 消息时间戳作为日志时间戳；false：关闭将使用日志中的时间字段作为日志时间戳。 默认：true</p>
     * @param string $LogRegex <p>整条日志匹配规则，只有RechargeType为fullregex_log时有效</p>
     * @param boolean $UnMatchLogSwitch <p>解析失败日志是否上传，true表示上传，false表示不上传</p>
     * @param string $UnMatchLogKey <p>解析失败日志的键名称</p>
     * @param integer $UnMatchLogTimeSrc <p>解析失败日志时间来源，0: 系统当前时间，1: Kafka消息时间戳</p>
     * @param integer $DefaultTimeSrc <p>默认时间来源，0: 系统当前时间，1: Kafka消息时间戳</p>
     * @param string $TimeKey <p>时间字段，日志中代表时间的字段名。</p><ul><li>当DefaultTimeSwitch为false，且RechargeType数据提取模式为 <code>json_log</code> JSON-文件日志 或 <code>fullregex_log</code> 单行完全正则-文件日志时， TimeKey不能为空。</li></ul>
     * @param string $TimeRegex <p>时间提取正则表达式。</p><ul><li>当DefaultTimeSwitch为false，且RechargeType数据提取模式为 <code>minimalist_log</code> 单行全文-文件日志时， TimeRegex不能为空。</li><li>仅需输入日志中代表时间的字段的正则表达式即可；若匹配到多个字段，将使用第一个。<br> 例：日志原文为：message with time 2022-08-08 14:20:20，则您可以设置提取时间正则为\d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d</li></ul>
     * @param string $TimeFormat <p>时间字段格式。</p><ul><li>当DefaultTimeSwitch为false时， TimeFormat不能为空。</li></ul>
     * @param string $TimeZone <p>时间字段时区。</p><ul><li><p>当DefaultTimeSwitch为false时， TimeZone不能为空。</p></li><li><p>时区格式规则<br>前缀：使用 GMT 或 UTC 作为时区基准<br>偏移量：</p><ul><li><code>-</code> 表示西时区（比基准时间晚）</li><li><code>+</code> 表示东时区（比基准时间早）</li><li>格式为 ±HH:MM（小时:分钟）</li></ul></li><li><p>当前支持：<br><pre><code>&quot;GMT-12:00&quot; &quot;GMT-11:00&quot; &quot;GMT-10:00&quot; &quot;GMT-09:30&quot; &quot;GMT-09:00&quot; &quot;GMT-08:00&quot; &quot;GMT-07:00&quot; &quot;GMT-06:00&quot; &quot;GMT-05:00&quot; &quot;GMT-04:00&quot; &quot;GMT-03:30&quot; &quot;GMT-03:00&quot; &quot;GMT-02:00&quot; &quot;GMT-01:00&quot; &quot;GMT+00:00&quot;&quot;GMT+01:00&quot;&quot;GMT+02:00&quot;&quot;GMT+03:30&quot;&quot;GMT+04:00&quot;&quot;GMT+04:30&quot;&quot;GMT+05:00&quot;&quot;GMT+05:30&quot;&quot;GMT+05:45&quot;&quot;GMT+06:00&quot;&quot;GMT+06:30&quot;&quot;GMT+07:00&quot;&quot;GMT+08:00&quot;&quot;GMT+09:00&quot;&quot;GMT+09:30&quot;&quot;GMT+10:00&quot;&quot;GMT+10:30&quot;&quot;GMT+11:00&quot;&quot;GMT+11:30&quot;&quot;GMT+12:00&quot;&quot;GMT+12:45&quot;&quot;GMT+13:00&quot;&quot;GMT+14:00&quot;&quot;UTC-11:00&quot;&quot;UTC-10:00&quot;&quot;UTC-09:00&quot;&quot;UTC-08:00&quot;&quot;UTC-12:00&quot;&quot;UTC-07:00&quot;&quot;UTC-06:00&quot;&quot;UTC-05:00&quot;&quot;UTC-04:30&quot;&quot;UTC-04:00&quot;&quot;UTC-03:30&quot;&quot;UTC-03:00&quot;&quot;UTC-02:00&quot;&quot;UTC-01:00&quot;&quot;UTC+00:00&quot;&quot;UTC+01:00&quot;&quot;UTC+02:00&quot;&quot;UTC+03:00&quot;&quot;UTC+03:30&quot;&quot;UTC+04:00&quot;&quot;UTC+04:30&quot;&quot;UTC+05:00&quot;&quot;UTC+05:45&quot;&quot;UTC+06:00&quot;&quot;UTC+06:30&quot;&quot;UTC+07:00&quot;&quot;UTC+08:00&quot;&quot;UTC+09:00&quot;&quot;UTC+09:30&quot;&quot;UTC+10:00&quot;&quot;UTC+11:00&quot;&quot;UTC+12:00&quot;&quot;UTC+13:00&quot;</code></pre></p></li></ul>
     * @param array $Metadata <p>元数据信息，Kafka导入支持kafka_topic,kafka_partition,kafka_offset,kafka_timestamp</p>
     * @param array $Keys <p>日志Key列表，RechargeType为full_regex_log、delimiter_log时必填</p>
     * @param boolean $ParseArray <p>json解析模式，开启首层数据解析</p>
     * @param string $Delimiter <p>分隔符解析模式-分隔符<br>当解析格式为分隔符提取时，该字段必填</p>
     * @param JsonExpandInfo $JsonExpand <p>JSON嵌套展开配置。仅RechargeType为json_log时生效，不传表示不开启。</p>
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
        if (array_key_exists("RechargeType",$param) and $param["RechargeType"] !== null) {
            $this->RechargeType = $param["RechargeType"];
        }

        if (array_key_exists("EncodingFormat",$param) and $param["EncodingFormat"] !== null) {
            $this->EncodingFormat = $param["EncodingFormat"];
        }

        if (array_key_exists("DefaultTimeSwitch",$param) and $param["DefaultTimeSwitch"] !== null) {
            $this->DefaultTimeSwitch = $param["DefaultTimeSwitch"];
        }

        if (array_key_exists("LogRegex",$param) and $param["LogRegex"] !== null) {
            $this->LogRegex = $param["LogRegex"];
        }

        if (array_key_exists("UnMatchLogSwitch",$param) and $param["UnMatchLogSwitch"] !== null) {
            $this->UnMatchLogSwitch = $param["UnMatchLogSwitch"];
        }

        if (array_key_exists("UnMatchLogKey",$param) and $param["UnMatchLogKey"] !== null) {
            $this->UnMatchLogKey = $param["UnMatchLogKey"];
        }

        if (array_key_exists("UnMatchLogTimeSrc",$param) and $param["UnMatchLogTimeSrc"] !== null) {
            $this->UnMatchLogTimeSrc = $param["UnMatchLogTimeSrc"];
        }

        if (array_key_exists("DefaultTimeSrc",$param) and $param["DefaultTimeSrc"] !== null) {
            $this->DefaultTimeSrc = $param["DefaultTimeSrc"];
        }

        if (array_key_exists("TimeKey",$param) and $param["TimeKey"] !== null) {
            $this->TimeKey = $param["TimeKey"];
        }

        if (array_key_exists("TimeRegex",$param) and $param["TimeRegex"] !== null) {
            $this->TimeRegex = $param["TimeRegex"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }

        if (array_key_exists("ParseArray",$param) and $param["ParseArray"] !== null) {
            $this->ParseArray = $param["ParseArray"];
        }

        if (array_key_exists("Delimiter",$param) and $param["Delimiter"] !== null) {
            $this->Delimiter = $param["Delimiter"];
        }

        if (array_key_exists("JsonExpand",$param) and $param["JsonExpand"] !== null) {
            $this->JsonExpand = new JsonExpandInfo();
            $this->JsonExpand->deserialize($param["JsonExpand"]);
        }
    }
}
