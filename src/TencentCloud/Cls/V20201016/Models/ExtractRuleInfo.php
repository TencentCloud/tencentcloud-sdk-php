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
 * 日志提取规则
 *
 * @method string getTimeKey() 获取时间字段的key名字，time_key和time_format必须成对出现
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeKey(string $TimeKey) 设置时间字段的key名字，time_key和time_format必须成对出现
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeFormat() 获取时间字段的格式，参考c语言的strftime函数对于时间的格式说明输出参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeFormat(string $TimeFormat) 设置时间字段的格式，参考c语言的strftime函数对于时间的格式说明输出参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDelimiter() 获取分隔符类型日志的分隔符，只有log_type为delimiter_log时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelimiter(string $Delimiter) 设置分隔符类型日志的分隔符，只有log_type为delimiter_log时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogRegex() 获取整条日志匹配规则，只有log_type为fullregex_log时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogRegex(string $LogRegex) 设置整条日志匹配规则，只有log_type为fullregex_log时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBeginRegex() 获取行首匹配规则，只有log_type为multiline_log或fullregex_log时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginRegex(string $BeginRegex) 设置行首匹配规则，只有log_type为multiline_log或fullregex_log时有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKeys() 获取取的每个字段的key名字，为空的key代表丢弃这个字段，只有log_type为delimiter_log时有效，json_log的日志使用json本身的key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeys(array $Keys) 设置取的每个字段的key名字，为空的key代表丢弃这个字段，只有log_type为delimiter_log时有效，json_log的日志使用json本身的key
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFilterKeyRegex() 获取需要过滤日志的key，及其对应的regex
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilterKeyRegex(array $FilterKeyRegex) 设置需要过滤日志的key，及其对应的regex
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUnMatchUpLoadSwitch() 获取解析失败日志是否上传，true表示上传，false表示不上传
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnMatchUpLoadSwitch(boolean $UnMatchUpLoadSwitch) 设置解析失败日志是否上传，true表示上传，false表示不上传
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnMatchLogKey() 获取失败日志的key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnMatchLogKey(string $UnMatchLogKey) 设置失败日志的key
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBacktracking() 获取增量采集模式下的回溯数据量，默认-1（全量采集）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBacktracking(integer $Backtracking) 设置增量采集模式下的回溯数据量，默认-1（全量采集）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsGBK() 获取是否为Gbk编码.   0: 否, 1: 是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsGBK(integer $IsGBK) 设置是否为Gbk编码.   0: 否, 1: 是
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJsonStandard() 获取是否为标准json.   0: 否, 1: 是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJsonStandard(integer $JsonStandard) 设置是否为标准json.   0: 否, 1: 是
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取syslog传输协议，取值为tcp或者udp。
该字段适用于：创建采集规则配置、修改采集规则配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置syslog传输协议，取值为tcp或者udp。
该字段适用于：创建采集规则配置、修改采集规则配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取syslog系统日志采集指定采集器监听的地址和端口 ，形式：[ip]:[port]。举例：127.0.0.1:9000
该字段适用于：创建采集规则配置、修改采集规则配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置syslog系统日志采集指定采集器监听的地址和端口 ，形式：[ip]:[port]。举例：127.0.0.1:9000
该字段适用于：创建采集规则配置、修改采集规则配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParseProtocol() 获取rfc3164：指定系统日志采集使用RFC3164协议解析日志。
rfc5424：指定系统日志采集使用RFC5424协议解析日志。
auto：自动匹配rfc3164或者rfc5424其中一种协议
该字段适用于：创建采集规则配置、修改采集规则配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParseProtocol(string $ParseProtocol) 设置rfc3164：指定系统日志采集使用RFC3164协议解析日志。
rfc5424：指定系统日志采集使用RFC5424协议解析日志。
auto：自动匹配rfc3164或者rfc5424其中一种协议
该字段适用于：创建采集规则配置、修改采集规则配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExtractRuleInfo extends AbstractModel
{
    /**
     * @var string 时间字段的key名字，time_key和time_format必须成对出现
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeKey;

    /**
     * @var string 时间字段的格式，参考c语言的strftime函数对于时间的格式说明输出参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeFormat;

    /**
     * @var string 分隔符类型日志的分隔符，只有log_type为delimiter_log时有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Delimiter;

    /**
     * @var string 整条日志匹配规则，只有log_type为fullregex_log时有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogRegex;

    /**
     * @var string 行首匹配规则，只有log_type为multiline_log或fullregex_log时有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeginRegex;

    /**
     * @var array 取的每个字段的key名字，为空的key代表丢弃这个字段，只有log_type为delimiter_log时有效，json_log的日志使用json本身的key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keys;

    /**
     * @var array 需要过滤日志的key，及其对应的regex
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilterKeyRegex;

    /**
     * @var boolean 解析失败日志是否上传，true表示上传，false表示不上传
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnMatchUpLoadSwitch;

    /**
     * @var string 失败日志的key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnMatchLogKey;

    /**
     * @var integer 增量采集模式下的回溯数据量，默认-1（全量采集）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Backtracking;

    /**
     * @var integer 是否为Gbk编码.   0: 否, 1: 是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsGBK;

    /**
     * @var integer 是否为标准json.   0: 否, 1: 是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JsonStandard;

    /**
     * @var string syslog传输协议，取值为tcp或者udp。
该字段适用于：创建采集规则配置、修改采集规则配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var string syslog系统日志采集指定采集器监听的地址和端口 ，形式：[ip]:[port]。举例：127.0.0.1:9000
该字段适用于：创建采集规则配置、修改采集规则配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string rfc3164：指定系统日志采集使用RFC3164协议解析日志。
rfc5424：指定系统日志采集使用RFC5424协议解析日志。
auto：自动匹配rfc3164或者rfc5424其中一种协议
该字段适用于：创建采集规则配置、修改采集规则配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParseProtocol;

    /**
     * @param string $TimeKey 时间字段的key名字，time_key和time_format必须成对出现
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeFormat 时间字段的格式，参考c语言的strftime函数对于时间的格式说明输出参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Delimiter 分隔符类型日志的分隔符，只有log_type为delimiter_log时有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogRegex 整条日志匹配规则，只有log_type为fullregex_log时有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BeginRegex 行首匹配规则，只有log_type为multiline_log或fullregex_log时有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Keys 取的每个字段的key名字，为空的key代表丢弃这个字段，只有log_type为delimiter_log时有效，json_log的日志使用json本身的key
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FilterKeyRegex 需要过滤日志的key，及其对应的regex
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UnMatchUpLoadSwitch 解析失败日志是否上传，true表示上传，false表示不上传
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnMatchLogKey 失败日志的key
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Backtracking 增量采集模式下的回溯数据量，默认-1（全量采集）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsGBK 是否为Gbk编码.   0: 否, 1: 是
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JsonStandard 是否为标准json.   0: 否, 1: 是
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol syslog传输协议，取值为tcp或者udp。
该字段适用于：创建采集规则配置、修改采集规则配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address syslog系统日志采集指定采集器监听的地址和端口 ，形式：[ip]:[port]。举例：127.0.0.1:9000
该字段适用于：创建采集规则配置、修改采集规则配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParseProtocol rfc3164：指定系统日志采集使用RFC3164协议解析日志。
rfc5424：指定系统日志采集使用RFC5424协议解析日志。
auto：自动匹配rfc3164或者rfc5424其中一种协议
该字段适用于：创建采集规则配置、修改采集规则配置
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
        if (array_key_exists("TimeKey",$param) and $param["TimeKey"] !== null) {
            $this->TimeKey = $param["TimeKey"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }

        if (array_key_exists("Delimiter",$param) and $param["Delimiter"] !== null) {
            $this->Delimiter = $param["Delimiter"];
        }

        if (array_key_exists("LogRegex",$param) and $param["LogRegex"] !== null) {
            $this->LogRegex = $param["LogRegex"];
        }

        if (array_key_exists("BeginRegex",$param) and $param["BeginRegex"] !== null) {
            $this->BeginRegex = $param["BeginRegex"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }

        if (array_key_exists("FilterKeyRegex",$param) and $param["FilterKeyRegex"] !== null) {
            $this->FilterKeyRegex = [];
            foreach ($param["FilterKeyRegex"] as $key => $value){
                $obj = new KeyRegexInfo();
                $obj->deserialize($value);
                array_push($this->FilterKeyRegex, $obj);
            }
        }

        if (array_key_exists("UnMatchUpLoadSwitch",$param) and $param["UnMatchUpLoadSwitch"] !== null) {
            $this->UnMatchUpLoadSwitch = $param["UnMatchUpLoadSwitch"];
        }

        if (array_key_exists("UnMatchLogKey",$param) and $param["UnMatchLogKey"] !== null) {
            $this->UnMatchLogKey = $param["UnMatchLogKey"];
        }

        if (array_key_exists("Backtracking",$param) and $param["Backtracking"] !== null) {
            $this->Backtracking = $param["Backtracking"];
        }

        if (array_key_exists("IsGBK",$param) and $param["IsGBK"] !== null) {
            $this->IsGBK = $param["IsGBK"];
        }

        if (array_key_exists("JsonStandard",$param) and $param["JsonStandard"] !== null) {
            $this->JsonStandard = $param["JsonStandard"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("ParseProtocol",$param) and $param["ParseProtocol"] !== null) {
            $this->ParseProtocol = $param["ParseProtocol"];
        }
    }
}
