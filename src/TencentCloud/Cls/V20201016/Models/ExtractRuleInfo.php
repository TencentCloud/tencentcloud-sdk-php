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
 * 日志提取规则
 *
 * @method string getTimeKey() 获取时间字段的key名字，TimeKey和TimeFormat必须成对出现
 * @method void setTimeKey(string $TimeKey) 设置时间字段的key名字，TimeKey和TimeFormat必须成对出现
 * @method string getTimeFormat() 获取时间字段的格式，参考c语言的strftime函数对于时间的格式说明输出参数
- 参考 [配置时间格式](https://cloud.tencent.com/document/product/614/38614) 文档 
 * @method void setTimeFormat(string $TimeFormat) 设置时间字段的格式，参考c语言的strftime函数对于时间的格式说明输出参数
- 参考 [配置时间格式](https://cloud.tencent.com/document/product/614/38614) 文档 
 * @method string getDelimiter() 获取分隔符类型日志的分隔符，只有LogType为delimiter_log时有效
 * @method void setDelimiter(string $Delimiter) 设置分隔符类型日志的分隔符，只有LogType为delimiter_log时有效
 * @method string getLogRegex() 获取整条日志匹配规则，只有LogType为fullregex_log时有效
 * @method void setLogRegex(string $LogRegex) 设置整条日志匹配规则，只有LogType为fullregex_log时有效
 * @method string getBeginRegex() 获取行首匹配规则，只有LogType为multiline_log或fullregex_log时有效
 * @method void setBeginRegex(string $BeginRegex) 设置行首匹配规则，只有LogType为multiline_log或fullregex_log时有效
 * @method array getKeys() 获取取的每个字段的key名字，为空的key代表丢弃这个字段，只有LogType为delimiter_log时有效，json_log的日志使用json本身的key。限制100个。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeys(array $Keys) 设置取的每个字段的key名字，为空的key代表丢弃这个字段，只有LogType为delimiter_log时有效，json_log的日志使用json本身的key。限制100个。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFilterKeyRegex() 获取日志过滤规则列表（旧版），需要过滤日志的key，及其对应的regex。
 注意：2.9.3及以上版本LogListener ，建议使用AdvanceFilterRules配置日志过滤规则。

 * @method void setFilterKeyRegex(array $FilterKeyRegex) 设置日志过滤规则列表（旧版），需要过滤日志的key，及其对应的regex。
 注意：2.9.3及以上版本LogListener ，建议使用AdvanceFilterRules配置日志过滤规则。

 * @method boolean getUnMatchUpLoadSwitch() 获取解析失败日志是否上传，true表示上传，false表示不上传
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnMatchUpLoadSwitch(boolean $UnMatchUpLoadSwitch) 设置解析失败日志是否上传，true表示上传，false表示不上传
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnMatchLogKey() 获取失败日志的key，当UnMatchUpLoadSwitch为true时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnMatchLogKey(string $UnMatchLogKey) 设置失败日志的key，当UnMatchUpLoadSwitch为true时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBacktracking() 获取增量采集模式下的回溯数据量，默认：-1（全量采集）；其他非负数表示增量采集（从最新的位置，往前采集${Backtracking}字节（Byte）的日志）最大支持1073741824（1G）。
注意：
- COS导入不支持此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBacktracking(integer $Backtracking) 设置增量采集模式下的回溯数据量，默认：-1（全量采集）；其他非负数表示增量采集（从最新的位置，往前采集${Backtracking}字节（Byte）的日志）最大支持1073741824（1G）。
注意：
- COS导入不支持此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsGBK() 获取是否为Gbk编码。 0：否；1：是。
注意
- 目前取0值时，表示UTF-8编码
- COS导入不支持此字段。
 * @method void setIsGBK(integer $IsGBK) 设置是否为Gbk编码。 0：否；1：是。
注意
- 目前取0值时，表示UTF-8编码
- COS导入不支持此字段。
 * @method integer getJsonStandard() 获取是否为标准json。  0：否； 1：是。
- 标准json指采集器使用业界标准开源解析器进行json解析，非标json指采集器使用CLS自研json解析器进行解析，两种解析器没有本质区别，建议客户使用标准json进行解析。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJsonStandard(integer $JsonStandard) 设置是否为标准json。  0：否； 1：是。
- 标准json指采集器使用业界标准开源解析器进行json解析，非标json指采集器使用CLS自研json解析器进行解析，两种解析器没有本质区别，建议客户使用标准json进行解析。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取syslog传输协议，取值为tcp或者udp，只有在LogType为service_syslog时生效，其余类型无需填写。
注意：
- 该字段适用于：创建采集规则配置、修改采集规则配置。
- COS导入不支持此字段。
 * @method void setProtocol(string $Protocol) 设置syslog传输协议，取值为tcp或者udp，只有在LogType为service_syslog时生效，其余类型无需填写。
注意：
- 该字段适用于：创建采集规则配置、修改采集规则配置。
- COS导入不支持此字段。
 * @method string getAddress() 获取syslog系统日志采集指定采集器监听的地址和端口 ，形式：[ip]:[port]，只有在LogType为service_syslog时生效，其余类型无需填写。
注意：
- 该字段适用于：创建采集规则配置、修改采集规则配置。
- COS导入不支持此字段。
 * @method void setAddress(string $Address) 设置syslog系统日志采集指定采集器监听的地址和端口 ，形式：[ip]:[port]，只有在LogType为service_syslog时生效，其余类型无需填写。
注意：
- 该字段适用于：创建采集规则配置、修改采集规则配置。
- COS导入不支持此字段。
 * @method string getParseProtocol() 获取rfc3164：指定系统日志采集使用RFC3164协议解析日志。
rfc5424：指定系统日志采集使用RFC5424协议解析日志。
auto：自动匹配rfc3164或者rfc5424其中一种协议。
只有在LogType为service_syslog时生效，其余类型无需填写。
注意：
- 该字段适用于：创建采集规则配置、修改采集规则配置
- COS导入不支持此字段。
 * @method void setParseProtocol(string $ParseProtocol) 设置rfc3164：指定系统日志采集使用RFC3164协议解析日志。
rfc5424：指定系统日志采集使用RFC5424协议解析日志。
auto：自动匹配rfc3164或者rfc5424其中一种协议。
只有在LogType为service_syslog时生效，其余类型无需填写。
注意：
- 该字段适用于：创建采集规则配置、修改采集规则配置
- COS导入不支持此字段。
 * @method integer getMetadataType() 获取元数据类型。0: 不使用元数据信息；1:使用机器组元数据；2:使用用户自定义元数据；3:使用采集配置路径。
注意：
- COS导入不支持此字段。
 * @method void setMetadataType(integer $MetadataType) 设置元数据类型。0: 不使用元数据信息；1:使用机器组元数据；2:使用用户自定义元数据；3:使用采集配置路径。
注意：
- COS导入不支持此字段。
 * @method string getPathRegex() 获取采集配置路径正则表达式。

```
请用"()"标识路径中目标字段对应的正则表达式，解析时将"()"视为捕获组，并以__TAG__.{i}:{目标字段}的形式与日志一起上报，其中i为捕获组的序号。
若不希望以序号为键名，可以通过命名捕获组"(?<{键名}>{正则})"自定义键名，并以__TAG__.{键名}:{目标字段}的形式与日志一起上报。最多支持5个捕获组
```

注意：
- MetadataType为3时必填。
- COS导入不支持此字段。
 * @method void setPathRegex(string $PathRegex) 设置采集配置路径正则表达式。

```
请用"()"标识路径中目标字段对应的正则表达式，解析时将"()"视为捕获组，并以__TAG__.{i}:{目标字段}的形式与日志一起上报，其中i为捕获组的序号。
若不希望以序号为键名，可以通过命名捕获组"(?<{键名}>{正则})"自定义键名，并以__TAG__.{键名}:{目标字段}的形式与日志一起上报。最多支持5个捕获组
```

注意：
- MetadataType为3时必填。
- COS导入不支持此字段。
 * @method array getMetaTags() 获取用户自定义元数据信息。
注意：
- MetadataType为2时必填。
- COS导入不支持此字段。
 * @method void setMetaTags(array $MetaTags) 设置用户自定义元数据信息。
注意：
- MetadataType为2时必填。
- COS导入不支持此字段。
 * @method array getEventLogRules() 获取Windows事件日志采集规则，只有在LogType为windows_event_log时生效，其余类型无需填写。
 * @method void setEventLogRules(array $EventLogRules) 设置Windows事件日志采集规则，只有在LogType为windows_event_log时生效，其余类型无需填写。
 * @method array getAdvanceFilterRules() 获取日志过滤规则列表（新版）。
注意：
- 2.9.3以下版本LogListener不支持， 请使用FilterKeyRegex配置日志过滤规则。
- 自建k8s采集配置（CreateConfigExtra、ModifyConfigExtra）不支持此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvanceFilterRules(array $AdvanceFilterRules) 设置日志过滤规则列表（新版）。
注意：
- 2.9.3以下版本LogListener不支持， 请使用FilterKeyRegex配置日志过滤规则。
- 自建k8s采集配置（CreateConfigExtra、ModifyConfigExtra）不支持此字段。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExtractRuleInfo extends AbstractModel
{
    /**
     * @var string 时间字段的key名字，TimeKey和TimeFormat必须成对出现
     */
    public $TimeKey;

    /**
     * @var string 时间字段的格式，参考c语言的strftime函数对于时间的格式说明输出参数
- 参考 [配置时间格式](https://cloud.tencent.com/document/product/614/38614) 文档 
     */
    public $TimeFormat;

    /**
     * @var string 分隔符类型日志的分隔符，只有LogType为delimiter_log时有效
     */
    public $Delimiter;

    /**
     * @var string 整条日志匹配规则，只有LogType为fullregex_log时有效
     */
    public $LogRegex;

    /**
     * @var string 行首匹配规则，只有LogType为multiline_log或fullregex_log时有效
     */
    public $BeginRegex;

    /**
     * @var array 取的每个字段的key名字，为空的key代表丢弃这个字段，只有LogType为delimiter_log时有效，json_log的日志使用json本身的key。限制100个。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keys;

    /**
     * @var array 日志过滤规则列表（旧版），需要过滤日志的key，及其对应的regex。
 注意：2.9.3及以上版本LogListener ，建议使用AdvanceFilterRules配置日志过滤规则。

     */
    public $FilterKeyRegex;

    /**
     * @var boolean 解析失败日志是否上传，true表示上传，false表示不上传
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnMatchUpLoadSwitch;

    /**
     * @var string 失败日志的key，当UnMatchUpLoadSwitch为true时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnMatchLogKey;

    /**
     * @var integer 增量采集模式下的回溯数据量，默认：-1（全量采集）；其他非负数表示增量采集（从最新的位置，往前采集${Backtracking}字节（Byte）的日志）最大支持1073741824（1G）。
注意：
- COS导入不支持此字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Backtracking;

    /**
     * @var integer 是否为Gbk编码。 0：否；1：是。
注意
- 目前取0值时，表示UTF-8编码
- COS导入不支持此字段。
     */
    public $IsGBK;

    /**
     * @var integer 是否为标准json。  0：否； 1：是。
- 标准json指采集器使用业界标准开源解析器进行json解析，非标json指采集器使用CLS自研json解析器进行解析，两种解析器没有本质区别，建议客户使用标准json进行解析。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JsonStandard;

    /**
     * @var string syslog传输协议，取值为tcp或者udp，只有在LogType为service_syslog时生效，其余类型无需填写。
注意：
- 该字段适用于：创建采集规则配置、修改采集规则配置。
- COS导入不支持此字段。
     */
    public $Protocol;

    /**
     * @var string syslog系统日志采集指定采集器监听的地址和端口 ，形式：[ip]:[port]，只有在LogType为service_syslog时生效，其余类型无需填写。
注意：
- 该字段适用于：创建采集规则配置、修改采集规则配置。
- COS导入不支持此字段。
     */
    public $Address;

    /**
     * @var string rfc3164：指定系统日志采集使用RFC3164协议解析日志。
rfc5424：指定系统日志采集使用RFC5424协议解析日志。
auto：自动匹配rfc3164或者rfc5424其中一种协议。
只有在LogType为service_syslog时生效，其余类型无需填写。
注意：
- 该字段适用于：创建采集规则配置、修改采集规则配置
- COS导入不支持此字段。
     */
    public $ParseProtocol;

    /**
     * @var integer 元数据类型。0: 不使用元数据信息；1:使用机器组元数据；2:使用用户自定义元数据；3:使用采集配置路径。
注意：
- COS导入不支持此字段。
     */
    public $MetadataType;

    /**
     * @var string 采集配置路径正则表达式。

```
请用"()"标识路径中目标字段对应的正则表达式，解析时将"()"视为捕获组，并以__TAG__.{i}:{目标字段}的形式与日志一起上报，其中i为捕获组的序号。
若不希望以序号为键名，可以通过命名捕获组"(?<{键名}>{正则})"自定义键名，并以__TAG__.{键名}:{目标字段}的形式与日志一起上报。最多支持5个捕获组
```

注意：
- MetadataType为3时必填。
- COS导入不支持此字段。
     */
    public $PathRegex;

    /**
     * @var array 用户自定义元数据信息。
注意：
- MetadataType为2时必填。
- COS导入不支持此字段。
     */
    public $MetaTags;

    /**
     * @var array Windows事件日志采集规则，只有在LogType为windows_event_log时生效，其余类型无需填写。
     */
    public $EventLogRules;

    /**
     * @var array 日志过滤规则列表（新版）。
注意：
- 2.9.3以下版本LogListener不支持， 请使用FilterKeyRegex配置日志过滤规则。
- 自建k8s采集配置（CreateConfigExtra、ModifyConfigExtra）不支持此字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvanceFilterRules;

    /**
     * @param string $TimeKey 时间字段的key名字，TimeKey和TimeFormat必须成对出现
     * @param string $TimeFormat 时间字段的格式，参考c语言的strftime函数对于时间的格式说明输出参数
- 参考 [配置时间格式](https://cloud.tencent.com/document/product/614/38614) 文档 
     * @param string $Delimiter 分隔符类型日志的分隔符，只有LogType为delimiter_log时有效
     * @param string $LogRegex 整条日志匹配规则，只有LogType为fullregex_log时有效
     * @param string $BeginRegex 行首匹配规则，只有LogType为multiline_log或fullregex_log时有效
     * @param array $Keys 取的每个字段的key名字，为空的key代表丢弃这个字段，只有LogType为delimiter_log时有效，json_log的日志使用json本身的key。限制100个。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FilterKeyRegex 日志过滤规则列表（旧版），需要过滤日志的key，及其对应的regex。
 注意：2.9.3及以上版本LogListener ，建议使用AdvanceFilterRules配置日志过滤规则。

     * @param boolean $UnMatchUpLoadSwitch 解析失败日志是否上传，true表示上传，false表示不上传
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnMatchLogKey 失败日志的key，当UnMatchUpLoadSwitch为true时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Backtracking 增量采集模式下的回溯数据量，默认：-1（全量采集）；其他非负数表示增量采集（从最新的位置，往前采集${Backtracking}字节（Byte）的日志）最大支持1073741824（1G）。
注意：
- COS导入不支持此字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsGBK 是否为Gbk编码。 0：否；1：是。
注意
- 目前取0值时，表示UTF-8编码
- COS导入不支持此字段。
     * @param integer $JsonStandard 是否为标准json。  0：否； 1：是。
- 标准json指采集器使用业界标准开源解析器进行json解析，非标json指采集器使用CLS自研json解析器进行解析，两种解析器没有本质区别，建议客户使用标准json进行解析。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol syslog传输协议，取值为tcp或者udp，只有在LogType为service_syslog时生效，其余类型无需填写。
注意：
- 该字段适用于：创建采集规则配置、修改采集规则配置。
- COS导入不支持此字段。
     * @param string $Address syslog系统日志采集指定采集器监听的地址和端口 ，形式：[ip]:[port]，只有在LogType为service_syslog时生效，其余类型无需填写。
注意：
- 该字段适用于：创建采集规则配置、修改采集规则配置。
- COS导入不支持此字段。
     * @param string $ParseProtocol rfc3164：指定系统日志采集使用RFC3164协议解析日志。
rfc5424：指定系统日志采集使用RFC5424协议解析日志。
auto：自动匹配rfc3164或者rfc5424其中一种协议。
只有在LogType为service_syslog时生效，其余类型无需填写。
注意：
- 该字段适用于：创建采集规则配置、修改采集规则配置
- COS导入不支持此字段。
     * @param integer $MetadataType 元数据类型。0: 不使用元数据信息；1:使用机器组元数据；2:使用用户自定义元数据；3:使用采集配置路径。
注意：
- COS导入不支持此字段。
     * @param string $PathRegex 采集配置路径正则表达式。

```
请用"()"标识路径中目标字段对应的正则表达式，解析时将"()"视为捕获组，并以__TAG__.{i}:{目标字段}的形式与日志一起上报，其中i为捕获组的序号。
若不希望以序号为键名，可以通过命名捕获组"(?<{键名}>{正则})"自定义键名，并以__TAG__.{键名}:{目标字段}的形式与日志一起上报。最多支持5个捕获组
```

注意：
- MetadataType为3时必填。
- COS导入不支持此字段。
     * @param array $MetaTags 用户自定义元数据信息。
注意：
- MetadataType为2时必填。
- COS导入不支持此字段。
     * @param array $EventLogRules Windows事件日志采集规则，只有在LogType为windows_event_log时生效，其余类型无需填写。
     * @param array $AdvanceFilterRules 日志过滤规则列表（新版）。
注意：
- 2.9.3以下版本LogListener不支持， 请使用FilterKeyRegex配置日志过滤规则。
- 自建k8s采集配置（CreateConfigExtra、ModifyConfigExtra）不支持此字段。
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

        if (array_key_exists("MetadataType",$param) and $param["MetadataType"] !== null) {
            $this->MetadataType = $param["MetadataType"];
        }

        if (array_key_exists("PathRegex",$param) and $param["PathRegex"] !== null) {
            $this->PathRegex = $param["PathRegex"];
        }

        if (array_key_exists("MetaTags",$param) and $param["MetaTags"] !== null) {
            $this->MetaTags = [];
            foreach ($param["MetaTags"] as $key => $value){
                $obj = new MetaTagInfo();
                $obj->deserialize($value);
                array_push($this->MetaTags, $obj);
            }
        }

        if (array_key_exists("EventLogRules",$param) and $param["EventLogRules"] !== null) {
            $this->EventLogRules = [];
            foreach ($param["EventLogRules"] as $key => $value){
                $obj = new EventLog();
                $obj->deserialize($value);
                array_push($this->EventLogRules, $obj);
            }
        }

        if (array_key_exists("AdvanceFilterRules",$param) and $param["AdvanceFilterRules"] !== null) {
            $this->AdvanceFilterRules = [];
            foreach ($param["AdvanceFilterRules"] as $key => $value){
                $obj = new AdvanceFilterRuleInfo();
                $obj->deserialize($value);
                array_push($this->AdvanceFilterRules, $obj);
            }
        }
    }
}
