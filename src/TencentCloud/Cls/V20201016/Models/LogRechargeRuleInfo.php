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
 * @method string getRechargeType() 获取导入类型，支持json_log：json格式日志，minimalist_log: 单行全文，fullregex_log: 单行完全正则
 * @method void setRechargeType(string $RechargeType) 设置导入类型，支持json_log：json格式日志，minimalist_log: 单行全文，fullregex_log: 单行完全正则
 * @method integer getEncodingFormat() 获取解析编码格式，0: UTF-8（默认值），1: GBK
 * @method void setEncodingFormat(integer $EncodingFormat) 设置解析编码格式，0: UTF-8（默认值），1: GBK
 * @method boolean getDefaultTimeSwitch() 获取使用默认时间状态。true：开启后将使用系统当前时间或 Kafka 消息时间戳作为日志时间戳；false：关闭将使用日志中的时间字段作为日志时间戳。 默认：true
 * @method void setDefaultTimeSwitch(boolean $DefaultTimeSwitch) 设置使用默认时间状态。true：开启后将使用系统当前时间或 Kafka 消息时间戳作为日志时间戳；false：关闭将使用日志中的时间字段作为日志时间戳。 默认：true
 * @method string getLogRegex() 获取整条日志匹配规则，只有RechargeType为fullregex_log时有效
 * @method void setLogRegex(string $LogRegex) 设置整条日志匹配规则，只有RechargeType为fullregex_log时有效
 * @method boolean getUnMatchLogSwitch() 获取解析失败日志是否上传，true表示上传，false表示不上传
 * @method void setUnMatchLogSwitch(boolean $UnMatchLogSwitch) 设置解析失败日志是否上传，true表示上传，false表示不上传
 * @method string getUnMatchLogKey() 获取解析失败日志的键名称
 * @method void setUnMatchLogKey(string $UnMatchLogKey) 设置解析失败日志的键名称
 * @method integer getUnMatchLogTimeSrc() 获取解析失败日志时间来源，0: 系统当前时间，1: Kafka消息时间戳
 * @method void setUnMatchLogTimeSrc(integer $UnMatchLogTimeSrc) 设置解析失败日志时间来源，0: 系统当前时间，1: Kafka消息时间戳
 * @method integer getDefaultTimeSrc() 获取默认时间来源，0: 系统当前时间，1: Kafka消息时间戳
 * @method void setDefaultTimeSrc(integer $DefaultTimeSrc) 设置默认时间来源，0: 系统当前时间，1: Kafka消息时间戳
 * @method string getTimeKey() 获取时间字段，日志中代表时间的字段名。

- 当DefaultTimeSwitch为false，且RechargeType数据提取模式为 `json_log` JSON-文件日志 或 `fullregex_log` 单行完全正则-文件日志时， TimeKey不能为空。
 * @method void setTimeKey(string $TimeKey) 设置时间字段，日志中代表时间的字段名。

- 当DefaultTimeSwitch为false，且RechargeType数据提取模式为 `json_log` JSON-文件日志 或 `fullregex_log` 单行完全正则-文件日志时， TimeKey不能为空。
 * @method string getTimeRegex() 获取时间提取正则表达式。
- 当DefaultTimeSwitch为false，且RechargeType数据提取模式为 `minimalist_log` 单行全文-文件日志时， TimeRegex不能为空。
- 仅需输入日志中代表时间的字段的正则表达式即可；若匹配到多个字段，将使用第一个。
   例：日志原文为：message with time 2022-08-08 14:20:20，则您可以设置提取时间正则为\d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d

 * @method void setTimeRegex(string $TimeRegex) 设置时间提取正则表达式。
- 当DefaultTimeSwitch为false，且RechargeType数据提取模式为 `minimalist_log` 单行全文-文件日志时， TimeRegex不能为空。
- 仅需输入日志中代表时间的字段的正则表达式即可；若匹配到多个字段，将使用第一个。
   例：日志原文为：message with time 2022-08-08 14:20:20，则您可以设置提取时间正则为\d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d

 * @method string getTimeFormat() 获取时间字段格式。
- 当DefaultTimeSwitch为false时， TimeFormat不能为空。
 * @method void setTimeFormat(string $TimeFormat) 设置时间字段格式。
- 当DefaultTimeSwitch为false时， TimeFormat不能为空。
 * @method string getTimeZone() 获取时间字段时区。
- 当DefaultTimeSwitch为false时， TimeZone不能为空。
- 时区格式规则
​前缀​：使用 GMT 或 UTC 作为时区基准
​偏移量​：
    - `-` 表示西时区（比基准时间晚）
    - `+` 表示东时区（比基准时间早）
    -  格式为 ±HH:MM（小时:分钟）

- 当前支持：
```
"GMT-12:00" 
"GMT-11:00" 
"GMT-10:00" 
"GMT-09:30" 
"GMT-09:00" 
"GMT-08:00" 
"GMT-07:00" 
"GMT-06:00" 
"GMT-05:00" 
"GMT-04:00" 
"GMT-03:30" 
"GMT-03:00" 
"GMT-02:00" 
"GMT-01:00" 
"GMT+00:00"
"GMT+01:00"
"GMT+02:00"
"GMT+03:30"
"GMT+04:00"
"GMT+04:30"
"GMT+05:00"
"GMT+05:30"
"GMT+05:45"
"GMT+06:00"
"GMT+06:30"
"GMT+07:00"
"GMT+08:00"
"GMT+09:00"
"GMT+09:30"
"GMT+10:00"
"GMT+10:30"
"GMT+11:00"
"GMT+11:30"
"GMT+12:00"
"GMT+12:45"
"GMT+13:00"
"GMT+14:00"
"UTC-11:00"
"UTC-10:00"
"UTC-09:00"
"UTC-08:00"
"UTC-12:00"
"UTC-07:00"
"UTC-06:00"
"UTC-05:00"
"UTC-04:30"
"UTC-04:00"
"UTC-03:30"
"UTC-03:00"
"UTC-02:00"
"UTC-01:00"
"UTC+00:00"
"UTC+01:00"
"UTC+02:00"
"UTC+03:00"
"UTC+03:30"
"UTC+04:00"
"UTC+04:30"
"UTC+05:00"
"UTC+05:45"
"UTC+06:00"
"UTC+06:30"
"UTC+07:00"
"UTC+08:00"
"UTC+09:00"
"UTC+09:30"
"UTC+10:00"
"UTC+11:00"
"UTC+12:00"
"UTC+13:00"
```
 * @method void setTimeZone(string $TimeZone) 设置时间字段时区。
- 当DefaultTimeSwitch为false时， TimeZone不能为空。
- 时区格式规则
​前缀​：使用 GMT 或 UTC 作为时区基准
​偏移量​：
    - `-` 表示西时区（比基准时间晚）
    - `+` 表示东时区（比基准时间早）
    -  格式为 ±HH:MM（小时:分钟）

- 当前支持：
```
"GMT-12:00" 
"GMT-11:00" 
"GMT-10:00" 
"GMT-09:30" 
"GMT-09:00" 
"GMT-08:00" 
"GMT-07:00" 
"GMT-06:00" 
"GMT-05:00" 
"GMT-04:00" 
"GMT-03:30" 
"GMT-03:00" 
"GMT-02:00" 
"GMT-01:00" 
"GMT+00:00"
"GMT+01:00"
"GMT+02:00"
"GMT+03:30"
"GMT+04:00"
"GMT+04:30"
"GMT+05:00"
"GMT+05:30"
"GMT+05:45"
"GMT+06:00"
"GMT+06:30"
"GMT+07:00"
"GMT+08:00"
"GMT+09:00"
"GMT+09:30"
"GMT+10:00"
"GMT+10:30"
"GMT+11:00"
"GMT+11:30"
"GMT+12:00"
"GMT+12:45"
"GMT+13:00"
"GMT+14:00"
"UTC-11:00"
"UTC-10:00"
"UTC-09:00"
"UTC-08:00"
"UTC-12:00"
"UTC-07:00"
"UTC-06:00"
"UTC-05:00"
"UTC-04:30"
"UTC-04:00"
"UTC-03:30"
"UTC-03:00"
"UTC-02:00"
"UTC-01:00"
"UTC+00:00"
"UTC+01:00"
"UTC+02:00"
"UTC+03:00"
"UTC+03:30"
"UTC+04:00"
"UTC+04:30"
"UTC+05:00"
"UTC+05:45"
"UTC+06:00"
"UTC+06:30"
"UTC+07:00"
"UTC+08:00"
"UTC+09:00"
"UTC+09:30"
"UTC+10:00"
"UTC+11:00"
"UTC+12:00"
"UTC+13:00"
```
 * @method array getMetadata() 获取元数据信息，Kafka导入支持kafka_topic,kafka_partition,kafka_offset,kafka_timestamp
 * @method void setMetadata(array $Metadata) 设置元数据信息，Kafka导入支持kafka_topic,kafka_partition,kafka_offset,kafka_timestamp
 * @method array getKeys() 获取日志Key列表，RechargeType为full_regex_log、delimiter_log时必填
 * @method void setKeys(array $Keys) 设置日志Key列表，RechargeType为full_regex_log、delimiter_log时必填
 * @method boolean getParseArray() 获取json解析模式，开启首层数据解析
 * @method void setParseArray(boolean $ParseArray) 设置json解析模式，开启首层数据解析
 * @method string getDelimiter() 获取分隔符解析模式-分隔符
当解析格式为分隔符提取时，该字段必填
 * @method void setDelimiter(string $Delimiter) 设置分隔符解析模式-分隔符
当解析格式为分隔符提取时，该字段必填
 */
class LogRechargeRuleInfo extends AbstractModel
{
    /**
     * @var string 导入类型，支持json_log：json格式日志，minimalist_log: 单行全文，fullregex_log: 单行完全正则
     */
    public $RechargeType;

    /**
     * @var integer 解析编码格式，0: UTF-8（默认值），1: GBK
     */
    public $EncodingFormat;

    /**
     * @var boolean 使用默认时间状态。true：开启后将使用系统当前时间或 Kafka 消息时间戳作为日志时间戳；false：关闭将使用日志中的时间字段作为日志时间戳。 默认：true
     */
    public $DefaultTimeSwitch;

    /**
     * @var string 整条日志匹配规则，只有RechargeType为fullregex_log时有效
     */
    public $LogRegex;

    /**
     * @var boolean 解析失败日志是否上传，true表示上传，false表示不上传
     */
    public $UnMatchLogSwitch;

    /**
     * @var string 解析失败日志的键名称
     */
    public $UnMatchLogKey;

    /**
     * @var integer 解析失败日志时间来源，0: 系统当前时间，1: Kafka消息时间戳
     */
    public $UnMatchLogTimeSrc;

    /**
     * @var integer 默认时间来源，0: 系统当前时间，1: Kafka消息时间戳
     */
    public $DefaultTimeSrc;

    /**
     * @var string 时间字段，日志中代表时间的字段名。

- 当DefaultTimeSwitch为false，且RechargeType数据提取模式为 `json_log` JSON-文件日志 或 `fullregex_log` 单行完全正则-文件日志时， TimeKey不能为空。
     */
    public $TimeKey;

    /**
     * @var string 时间提取正则表达式。
- 当DefaultTimeSwitch为false，且RechargeType数据提取模式为 `minimalist_log` 单行全文-文件日志时， TimeRegex不能为空。
- 仅需输入日志中代表时间的字段的正则表达式即可；若匹配到多个字段，将使用第一个。
   例：日志原文为：message with time 2022-08-08 14:20:20，则您可以设置提取时间正则为\d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d

     */
    public $TimeRegex;

    /**
     * @var string 时间字段格式。
- 当DefaultTimeSwitch为false时， TimeFormat不能为空。
     */
    public $TimeFormat;

    /**
     * @var string 时间字段时区。
- 当DefaultTimeSwitch为false时， TimeZone不能为空。
- 时区格式规则
​前缀​：使用 GMT 或 UTC 作为时区基准
​偏移量​：
    - `-` 表示西时区（比基准时间晚）
    - `+` 表示东时区（比基准时间早）
    -  格式为 ±HH:MM（小时:分钟）

- 当前支持：
```
"GMT-12:00" 
"GMT-11:00" 
"GMT-10:00" 
"GMT-09:30" 
"GMT-09:00" 
"GMT-08:00" 
"GMT-07:00" 
"GMT-06:00" 
"GMT-05:00" 
"GMT-04:00" 
"GMT-03:30" 
"GMT-03:00" 
"GMT-02:00" 
"GMT-01:00" 
"GMT+00:00"
"GMT+01:00"
"GMT+02:00"
"GMT+03:30"
"GMT+04:00"
"GMT+04:30"
"GMT+05:00"
"GMT+05:30"
"GMT+05:45"
"GMT+06:00"
"GMT+06:30"
"GMT+07:00"
"GMT+08:00"
"GMT+09:00"
"GMT+09:30"
"GMT+10:00"
"GMT+10:30"
"GMT+11:00"
"GMT+11:30"
"GMT+12:00"
"GMT+12:45"
"GMT+13:00"
"GMT+14:00"
"UTC-11:00"
"UTC-10:00"
"UTC-09:00"
"UTC-08:00"
"UTC-12:00"
"UTC-07:00"
"UTC-06:00"
"UTC-05:00"
"UTC-04:30"
"UTC-04:00"
"UTC-03:30"
"UTC-03:00"
"UTC-02:00"
"UTC-01:00"
"UTC+00:00"
"UTC+01:00"
"UTC+02:00"
"UTC+03:00"
"UTC+03:30"
"UTC+04:00"
"UTC+04:30"
"UTC+05:00"
"UTC+05:45"
"UTC+06:00"
"UTC+06:30"
"UTC+07:00"
"UTC+08:00"
"UTC+09:00"
"UTC+09:30"
"UTC+10:00"
"UTC+11:00"
"UTC+12:00"
"UTC+13:00"
```
     */
    public $TimeZone;

    /**
     * @var array 元数据信息，Kafka导入支持kafka_topic,kafka_partition,kafka_offset,kafka_timestamp
     */
    public $Metadata;

    /**
     * @var array 日志Key列表，RechargeType为full_regex_log、delimiter_log时必填
     */
    public $Keys;

    /**
     * @var boolean json解析模式，开启首层数据解析
     */
    public $ParseArray;

    /**
     * @var string 分隔符解析模式-分隔符
当解析格式为分隔符提取时，该字段必填
     */
    public $Delimiter;

    /**
     * @param string $RechargeType 导入类型，支持json_log：json格式日志，minimalist_log: 单行全文，fullregex_log: 单行完全正则
     * @param integer $EncodingFormat 解析编码格式，0: UTF-8（默认值），1: GBK
     * @param boolean $DefaultTimeSwitch 使用默认时间状态。true：开启后将使用系统当前时间或 Kafka 消息时间戳作为日志时间戳；false：关闭将使用日志中的时间字段作为日志时间戳。 默认：true
     * @param string $LogRegex 整条日志匹配规则，只有RechargeType为fullregex_log时有效
     * @param boolean $UnMatchLogSwitch 解析失败日志是否上传，true表示上传，false表示不上传
     * @param string $UnMatchLogKey 解析失败日志的键名称
     * @param integer $UnMatchLogTimeSrc 解析失败日志时间来源，0: 系统当前时间，1: Kafka消息时间戳
     * @param integer $DefaultTimeSrc 默认时间来源，0: 系统当前时间，1: Kafka消息时间戳
     * @param string $TimeKey 时间字段，日志中代表时间的字段名。

- 当DefaultTimeSwitch为false，且RechargeType数据提取模式为 `json_log` JSON-文件日志 或 `fullregex_log` 单行完全正则-文件日志时， TimeKey不能为空。
     * @param string $TimeRegex 时间提取正则表达式。
- 当DefaultTimeSwitch为false，且RechargeType数据提取模式为 `minimalist_log` 单行全文-文件日志时， TimeRegex不能为空。
- 仅需输入日志中代表时间的字段的正则表达式即可；若匹配到多个字段，将使用第一个。
   例：日志原文为：message with time 2022-08-08 14:20:20，则您可以设置提取时间正则为\d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d

     * @param string $TimeFormat 时间字段格式。
- 当DefaultTimeSwitch为false时， TimeFormat不能为空。
     * @param string $TimeZone 时间字段时区。
- 当DefaultTimeSwitch为false时， TimeZone不能为空。
- 时区格式规则
​前缀​：使用 GMT 或 UTC 作为时区基准
​偏移量​：
    - `-` 表示西时区（比基准时间晚）
    - `+` 表示东时区（比基准时间早）
    -  格式为 ±HH:MM（小时:分钟）

- 当前支持：
```
"GMT-12:00" 
"GMT-11:00" 
"GMT-10:00" 
"GMT-09:30" 
"GMT-09:00" 
"GMT-08:00" 
"GMT-07:00" 
"GMT-06:00" 
"GMT-05:00" 
"GMT-04:00" 
"GMT-03:30" 
"GMT-03:00" 
"GMT-02:00" 
"GMT-01:00" 
"GMT+00:00"
"GMT+01:00"
"GMT+02:00"
"GMT+03:30"
"GMT+04:00"
"GMT+04:30"
"GMT+05:00"
"GMT+05:30"
"GMT+05:45"
"GMT+06:00"
"GMT+06:30"
"GMT+07:00"
"GMT+08:00"
"GMT+09:00"
"GMT+09:30"
"GMT+10:00"
"GMT+10:30"
"GMT+11:00"
"GMT+11:30"
"GMT+12:00"
"GMT+12:45"
"GMT+13:00"
"GMT+14:00"
"UTC-11:00"
"UTC-10:00"
"UTC-09:00"
"UTC-08:00"
"UTC-12:00"
"UTC-07:00"
"UTC-06:00"
"UTC-05:00"
"UTC-04:30"
"UTC-04:00"
"UTC-03:30"
"UTC-03:00"
"UTC-02:00"
"UTC-01:00"
"UTC+00:00"
"UTC+01:00"
"UTC+02:00"
"UTC+03:00"
"UTC+03:30"
"UTC+04:00"
"UTC+04:30"
"UTC+05:00"
"UTC+05:45"
"UTC+06:00"
"UTC+06:30"
"UTC+07:00"
"UTC+08:00"
"UTC+09:00"
"UTC+09:30"
"UTC+10:00"
"UTC+11:00"
"UTC+12:00"
"UTC+13:00"
```
     * @param array $Metadata 元数据信息，Kafka导入支持kafka_topic,kafka_partition,kafka_offset,kafka_timestamp
     * @param array $Keys 日志Key列表，RechargeType为full_regex_log、delimiter_log时必填
     * @param boolean $ParseArray json解析模式，开启首层数据解析
     * @param string $Delimiter 分隔符解析模式-分隔符
当解析格式为分隔符提取时，该字段必填
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
    }
}
