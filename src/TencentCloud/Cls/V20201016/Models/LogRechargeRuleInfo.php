<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method boolean getDefaultTimeSwitch() 获取使用默认时间，true：开启（默认值）， flase：关闭
 * @method void setDefaultTimeSwitch(boolean $DefaultTimeSwitch) 设置使用默认时间，true：开启（默认值）， flase：关闭
 * @method string getLogRegex() 获取整条日志匹配规则，只有RechargeType为fullregex_log时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogRegex(string $LogRegex) 设置整条日志匹配规则，只有RechargeType为fullregex_log时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUnMatchLogSwitch() 获取解析失败日志是否上传，true表示上传，false表示不上传
 * @method void setUnMatchLogSwitch(boolean $UnMatchLogSwitch) 设置解析失败日志是否上传，true表示上传，false表示不上传
 * @method string getUnMatchLogKey() 获取解析失败日志的键名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnMatchLogKey(string $UnMatchLogKey) 设置解析失败日志的键名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnMatchLogTimeSrc() 获取解析失败日志时间来源，0: 系统当前时间，1: Kafka消息时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnMatchLogTimeSrc(integer $UnMatchLogTimeSrc) 设置解析失败日志时间来源，0: 系统当前时间，1: Kafka消息时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDefaultTimeSrc() 获取默认时间来源，0: 系统当前时间，1: Kafka消息时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultTimeSrc(integer $DefaultTimeSrc) 设置默认时间来源，0: 系统当前时间，1: Kafka消息时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeKey() 获取时间字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeKey(string $TimeKey) 设置时间字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeRegex() 获取时间提取正则表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeRegex(string $TimeRegex) 设置时间提取正则表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeFormat() 获取时间字段格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeFormat(string $TimeFormat) 设置时间字段格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeZone() 获取时间字段时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeZone(string $TimeZone) 设置时间字段时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMetadata() 获取元数据信息，Kafka导入支持kafka_topic,kafka_partition,kafka_offset,kafka_timestamp
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetadata(array $Metadata) 设置元数据信息，Kafka导入支持kafka_topic,kafka_partition,kafka_offset,kafka_timestamp
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKeys() 获取日志Key列表，RechargeType为full_regex_log时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeys(array $Keys) 设置日志Key列表，RechargeType为full_regex_log时必填
注意：此字段可能返回 null，表示取不到有效值。
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
     * @var boolean 使用默认时间，true：开启（默认值）， flase：关闭
     */
    public $DefaultTimeSwitch;

    /**
     * @var string 整条日志匹配规则，只有RechargeType为fullregex_log时有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogRegex;

    /**
     * @var boolean 解析失败日志是否上传，true表示上传，false表示不上传
     */
    public $UnMatchLogSwitch;

    /**
     * @var string 解析失败日志的键名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnMatchLogKey;

    /**
     * @var integer 解析失败日志时间来源，0: 系统当前时间，1: Kafka消息时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnMatchLogTimeSrc;

    /**
     * @var integer 默认时间来源，0: 系统当前时间，1: Kafka消息时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultTimeSrc;

    /**
     * @var string 时间字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeKey;

    /**
     * @var string 时间提取正则表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeRegex;

    /**
     * @var string 时间字段格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeFormat;

    /**
     * @var string 时间字段时区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeZone;

    /**
     * @var array 元数据信息，Kafka导入支持kafka_topic,kafka_partition,kafka_offset,kafka_timestamp
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metadata;

    /**
     * @var array 日志Key列表，RechargeType为full_regex_log时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keys;

    /**
     * @param string $RechargeType 导入类型，支持json_log：json格式日志，minimalist_log: 单行全文，fullregex_log: 单行完全正则
     * @param integer $EncodingFormat 解析编码格式，0: UTF-8（默认值），1: GBK
     * @param boolean $DefaultTimeSwitch 使用默认时间，true：开启（默认值）， flase：关闭
     * @param string $LogRegex 整条日志匹配规则，只有RechargeType为fullregex_log时有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UnMatchLogSwitch 解析失败日志是否上传，true表示上传，false表示不上传
     * @param string $UnMatchLogKey 解析失败日志的键名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UnMatchLogTimeSrc 解析失败日志时间来源，0: 系统当前时间，1: Kafka消息时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DefaultTimeSrc 默认时间来源，0: 系统当前时间，1: Kafka消息时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeKey 时间字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeRegex 时间提取正则表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeFormat 时间字段格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeZone 时间字段时区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Metadata 元数据信息，Kafka导入支持kafka_topic,kafka_partition,kafka_offset,kafka_timestamp
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Keys 日志Key列表，RechargeType为full_regex_log时必填
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}
