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
 * @method string getTimeKey() 获取<p>时间字段的key名字，TimeKey和TimeFormat必须成对出现</p>
 * @method void setTimeKey(string $TimeKey) 设置<p>时间字段的key名字，TimeKey和TimeFormat必须成对出现</p>
 * @method string getTimeFormat() 获取<p>时间字段的格式，参考c语言的strftime函数对于时间的格式说明输出参数</p><ul><li>参考 <a href="https://cloud.tencent.com/document/product/614/38614">配置时间格式</a> 文档</li></ul>
 * @method void setTimeFormat(string $TimeFormat) 设置<p>时间字段的格式，参考c语言的strftime函数对于时间的格式说明输出参数</p><ul><li>参考 <a href="https://cloud.tencent.com/document/product/614/38614">配置时间格式</a> 文档</li></ul>
 * @method string getDelimiter() 获取<p>分隔符类型日志的分隔符，只有LogType为delimiter_log时有效</p>
 * @method void setDelimiter(string $Delimiter) 设置<p>分隔符类型日志的分隔符，只有LogType为delimiter_log时有效</p>
 * @method string getLogRegex() 获取<p>整条日志匹配规则，只有LogType为fullregex_log时有效</p>
 * @method void setLogRegex(string $LogRegex) 设置<p>整条日志匹配规则，只有LogType为fullregex_log时有效</p>
 * @method string getBeginRegex() 获取<p>行首匹配规则，只有LogType为multiline_log或fullregex_log时有效</p>
 * @method void setBeginRegex(string $BeginRegex) 设置<p>行首匹配规则，只有LogType为multiline_log或fullregex_log时有效</p>
 * @method array getKeys() 获取<p>取的每个字段的key名字，为空的key代表丢弃这个字段，只有LogType为delimiter_log时有效，json_log的日志使用json本身的key。限制100个。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeys(array $Keys) 设置<p>取的每个字段的key名字，为空的key代表丢弃这个字段，只有LogType为delimiter_log时有效，json_log的日志使用json本身的key。限制100个。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFilterKeyRegex() 获取<p>日志过滤规则列表（旧版），需要过滤日志的key，及其对应的regex。<br> 注意：2.9.3及以上版本LogListener ，建议使用AdvanceFilterRules配置日志过滤规则。</p>
 * @method void setFilterKeyRegex(array $FilterKeyRegex) 设置<p>日志过滤规则列表（旧版），需要过滤日志的key，及其对应的regex。<br> 注意：2.9.3及以上版本LogListener ，建议使用AdvanceFilterRules配置日志过滤规则。</p>
 * @method boolean getUnMatchUpLoadSwitch() 获取<p>解析失败日志是否上传，true表示上传，false表示不上传</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnMatchUpLoadSwitch(boolean $UnMatchUpLoadSwitch) 设置<p>解析失败日志是否上传，true表示上传，false表示不上传</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnMatchLogKey() 获取<p>失败日志的key，当UnMatchUpLoadSwitch为true时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnMatchLogKey(string $UnMatchLogKey) 设置<p>失败日志的key，当UnMatchUpLoadSwitch为true时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBacktracking() 获取<p>增量采集模式下的回溯数据量，默认：-1（全量采集）；其他非负数表示增量采集（从最新的位置，往前采集${Backtracking}字节（Byte）的日志）最大支持1073741824（1G）。<br>注意：</p><ul><li>COS导入不支持此字段。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBacktracking(integer $Backtracking) 设置<p>增量采集模式下的回溯数据量，默认：-1（全量采集）；其他非负数表示增量采集（从最新的位置，往前采集${Backtracking}字节（Byte）的日志）最大支持1073741824（1G）。<br>注意：</p><ul><li>COS导入不支持此字段。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsGBK() 获取<p>是否为Gbk编码。 0：否；1：是。<br>注意</p><ul><li>目前取0值时，表示UTF-8编码</li><li>COS导入不支持此字段。</li></ul>
 * @method void setIsGBK(integer $IsGBK) 设置<p>是否为Gbk编码。 0：否；1：是。<br>注意</p><ul><li>目前取0值时，表示UTF-8编码</li><li>COS导入不支持此字段。</li></ul>
 * @method integer getJsonStandard() 获取<p>是否为标准json。  0：否； 1：是。</p><ul><li>标准json指采集器使用业界标准开源解析器进行json解析，非标json指采集器使用CLS自研json解析器进行解析，两种解析器没有本质区别，建议客户使用标准json进行解析。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJsonStandard(integer $JsonStandard) 设置<p>是否为标准json。  0：否； 1：是。</p><ul><li>标准json指采集器使用业界标准开源解析器进行json解析，非标json指采集器使用CLS自研json解析器进行解析，两种解析器没有本质区别，建议客户使用标准json进行解析。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取<p>syslog传输协议，取值为tcp或者udp，只有在LogType为service_syslog时生效，其余类型无需填写。<br>注意：</p><ul><li>该字段适用于：创建采集规则配置、修改采集规则配置。</li><li>COS导入不支持此字段。</li></ul>
 * @method void setProtocol(string $Protocol) 设置<p>syslog传输协议，取值为tcp或者udp，只有在LogType为service_syslog时生效，其余类型无需填写。<br>注意：</p><ul><li>该字段适用于：创建采集规则配置、修改采集规则配置。</li><li>COS导入不支持此字段。</li></ul>
 * @method string getAddress() 获取<p>syslog系统日志采集指定采集器监听的地址和端口 ，形式：[ip]:[port]，只有在LogType为service_syslog时生效，其余类型无需填写。<br>注意：</p><ul><li>该字段适用于：创建采集规则配置、修改采集规则配置。</li><li>COS导入不支持此字段。</li></ul>
 * @method void setAddress(string $Address) 设置<p>syslog系统日志采集指定采集器监听的地址和端口 ，形式：[ip]:[port]，只有在LogType为service_syslog时生效，其余类型无需填写。<br>注意：</p><ul><li>该字段适用于：创建采集规则配置、修改采集规则配置。</li><li>COS导入不支持此字段。</li></ul>
 * @method string getParseProtocol() 获取<p>rfc3164：指定系统日志采集使用RFC3164协议解析日志。<br>rfc5424：指定系统日志采集使用RFC5424协议解析日志。<br>auto：自动匹配rfc3164或者rfc5424其中一种协议。<br>只有在LogType为service_syslog时生效，其余类型无需填写。<br>注意：</p><ul><li>该字段适用于：创建采集规则配置、修改采集规则配置</li><li>COS导入不支持此字段。</li></ul>
 * @method void setParseProtocol(string $ParseProtocol) 设置<p>rfc3164：指定系统日志采集使用RFC3164协议解析日志。<br>rfc5424：指定系统日志采集使用RFC5424协议解析日志。<br>auto：自动匹配rfc3164或者rfc5424其中一种协议。<br>只有在LogType为service_syslog时生效，其余类型无需填写。<br>注意：</p><ul><li>该字段适用于：创建采集规则配置、修改采集规则配置</li><li>COS导入不支持此字段。</li></ul>
 * @method integer getMetadataType() 获取<p>元数据类型。0: 不使用元数据信息；1:使用机器组元数据；2:使用用户自定义元数据；3:使用采集配置路径。<br>注意：</p><ul><li>COS导入不支持此字段。</li></ul>
 * @method void setMetadataType(integer $MetadataType) 设置<p>元数据类型。0: 不使用元数据信息；1:使用机器组元数据；2:使用用户自定义元数据；3:使用采集配置路径。<br>注意：</p><ul><li>COS导入不支持此字段。</li></ul>
 * @method string getPathRegex() 获取<p>采集配置路径正则表达式。</p><p><pre><code>请用&quot;()&quot;标识路径中目标字段对应的正则表达式，解析时将&quot;()&quot;视为捕获组，并以__TAG__.{i}:{目标字段}的形式与日志一起上报，其中i为捕获组的序号。若不希望以序号为键名，可以通过命名捕获组&quot;(?&lt;{键名}&gt;{正则})&quot;自定义键名，并以__TAG__.{键名}:{目标字段}的形式与日志一起上报。最多支持5个捕获组</code></pre></p><p>注意：</p><ul><li>MetadataType为3时必填。</li><li>COS导入不支持此字段。</li></ul>
 * @method void setPathRegex(string $PathRegex) 设置<p>采集配置路径正则表达式。</p><p><pre><code>请用&quot;()&quot;标识路径中目标字段对应的正则表达式，解析时将&quot;()&quot;视为捕获组，并以__TAG__.{i}:{目标字段}的形式与日志一起上报，其中i为捕获组的序号。若不希望以序号为键名，可以通过命名捕获组&quot;(?&lt;{键名}&gt;{正则})&quot;自定义键名，并以__TAG__.{键名}:{目标字段}的形式与日志一起上报。最多支持5个捕获组</code></pre></p><p>注意：</p><ul><li>MetadataType为3时必填。</li><li>COS导入不支持此字段。</li></ul>
 * @method array getMetaTags() 获取<p>用户自定义元数据信息。<br>注意：</p><ul><li>MetadataType为2时必填。</li><li>COS导入不支持此字段。</li></ul>
 * @method void setMetaTags(array $MetaTags) 设置<p>用户自定义元数据信息。<br>注意：</p><ul><li>MetadataType为2时必填。</li><li>COS导入不支持此字段。</li></ul>
 * @method array getEventLogRules() 获取<p>Windows事件日志采集规则，只有在LogType为windows_event_log时生效，其余类型无需填写。</p>
 * @method void setEventLogRules(array $EventLogRules) 设置<p>Windows事件日志采集规则，只有在LogType为windows_event_log时生效，其余类型无需填写。</p>
 * @method array getAdvanceFilterRules() 获取<p>日志过滤规则列表（新版）。<br>注意：</p><ul><li>2.9.3以下版本LogListener不支持， 请使用FilterKeyRegex配置日志过滤规则。</li><li>自建k8s采集配置（CreateConfigExtra、ModifyConfigExtra）不支持此字段。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvanceFilterRules(array $AdvanceFilterRules) 设置<p>日志过滤规则列表（新版）。<br>注意：</p><ul><li>2.9.3以下版本LogListener不支持， 请使用FilterKeyRegex配置日志过滤规则。</li><li>自建k8s采集配置（CreateConfigExtra、ModifyConfigExtra）不支持此字段。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRawLogKey() 获取<p>原始日志的键名称(Key)；所有原始日志， 均以您指定的键名称（Key），原始日志内容作为值（Value）进行上传，为空时表示不开启原始日志上传。</p><ul><li>COS导入不支持此字段。</li></ul>
 * @method void setRawLogKey(string $RawLogKey) 设置<p>原始日志的键名称(Key)；所有原始日志， 均以您指定的键名称（Key），原始日志内容作为值（Value）进行上传，为空时表示不开启原始日志上传。</p><ul><li>COS导入不支持此字段。</li></ul>
 */
class ExtractRuleInfo extends AbstractModel
{
    /**
     * @var string <p>时间字段的key名字，TimeKey和TimeFormat必须成对出现</p>
     */
    public $TimeKey;

    /**
     * @var string <p>时间字段的格式，参考c语言的strftime函数对于时间的格式说明输出参数</p><ul><li>参考 <a href="https://cloud.tencent.com/document/product/614/38614">配置时间格式</a> 文档</li></ul>
     */
    public $TimeFormat;

    /**
     * @var string <p>分隔符类型日志的分隔符，只有LogType为delimiter_log时有效</p>
     */
    public $Delimiter;

    /**
     * @var string <p>整条日志匹配规则，只有LogType为fullregex_log时有效</p>
     */
    public $LogRegex;

    /**
     * @var string <p>行首匹配规则，只有LogType为multiline_log或fullregex_log时有效</p>
     */
    public $BeginRegex;

    /**
     * @var array <p>取的每个字段的key名字，为空的key代表丢弃这个字段，只有LogType为delimiter_log时有效，json_log的日志使用json本身的key。限制100个。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keys;

    /**
     * @var array <p>日志过滤规则列表（旧版），需要过滤日志的key，及其对应的regex。<br> 注意：2.9.3及以上版本LogListener ，建议使用AdvanceFilterRules配置日志过滤规则。</p>
     */
    public $FilterKeyRegex;

    /**
     * @var boolean <p>解析失败日志是否上传，true表示上传，false表示不上传</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnMatchUpLoadSwitch;

    /**
     * @var string <p>失败日志的key，当UnMatchUpLoadSwitch为true时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnMatchLogKey;

    /**
     * @var integer <p>增量采集模式下的回溯数据量，默认：-1（全量采集）；其他非负数表示增量采集（从最新的位置，往前采集${Backtracking}字节（Byte）的日志）最大支持1073741824（1G）。<br>注意：</p><ul><li>COS导入不支持此字段。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Backtracking;

    /**
     * @var integer <p>是否为Gbk编码。 0：否；1：是。<br>注意</p><ul><li>目前取0值时，表示UTF-8编码</li><li>COS导入不支持此字段。</li></ul>
     */
    public $IsGBK;

    /**
     * @var integer <p>是否为标准json。  0：否； 1：是。</p><ul><li>标准json指采集器使用业界标准开源解析器进行json解析，非标json指采集器使用CLS自研json解析器进行解析，两种解析器没有本质区别，建议客户使用标准json进行解析。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JsonStandard;

    /**
     * @var string <p>syslog传输协议，取值为tcp或者udp，只有在LogType为service_syslog时生效，其余类型无需填写。<br>注意：</p><ul><li>该字段适用于：创建采集规则配置、修改采集规则配置。</li><li>COS导入不支持此字段。</li></ul>
     */
    public $Protocol;

    /**
     * @var string <p>syslog系统日志采集指定采集器监听的地址和端口 ，形式：[ip]:[port]，只有在LogType为service_syslog时生效，其余类型无需填写。<br>注意：</p><ul><li>该字段适用于：创建采集规则配置、修改采集规则配置。</li><li>COS导入不支持此字段。</li></ul>
     */
    public $Address;

    /**
     * @var string <p>rfc3164：指定系统日志采集使用RFC3164协议解析日志。<br>rfc5424：指定系统日志采集使用RFC5424协议解析日志。<br>auto：自动匹配rfc3164或者rfc5424其中一种协议。<br>只有在LogType为service_syslog时生效，其余类型无需填写。<br>注意：</p><ul><li>该字段适用于：创建采集规则配置、修改采集规则配置</li><li>COS导入不支持此字段。</li></ul>
     */
    public $ParseProtocol;

    /**
     * @var integer <p>元数据类型。0: 不使用元数据信息；1:使用机器组元数据；2:使用用户自定义元数据；3:使用采集配置路径。<br>注意：</p><ul><li>COS导入不支持此字段。</li></ul>
     */
    public $MetadataType;

    /**
     * @var string <p>采集配置路径正则表达式。</p><p><pre><code>请用&quot;()&quot;标识路径中目标字段对应的正则表达式，解析时将&quot;()&quot;视为捕获组，并以__TAG__.{i}:{目标字段}的形式与日志一起上报，其中i为捕获组的序号。若不希望以序号为键名，可以通过命名捕获组&quot;(?&lt;{键名}&gt;{正则})&quot;自定义键名，并以__TAG__.{键名}:{目标字段}的形式与日志一起上报。最多支持5个捕获组</code></pre></p><p>注意：</p><ul><li>MetadataType为3时必填。</li><li>COS导入不支持此字段。</li></ul>
     */
    public $PathRegex;

    /**
     * @var array <p>用户自定义元数据信息。<br>注意：</p><ul><li>MetadataType为2时必填。</li><li>COS导入不支持此字段。</li></ul>
     */
    public $MetaTags;

    /**
     * @var array <p>Windows事件日志采集规则，只有在LogType为windows_event_log时生效，其余类型无需填写。</p>
     */
    public $EventLogRules;

    /**
     * @var array <p>日志过滤规则列表（新版）。<br>注意：</p><ul><li>2.9.3以下版本LogListener不支持， 请使用FilterKeyRegex配置日志过滤规则。</li><li>自建k8s采集配置（CreateConfigExtra、ModifyConfigExtra）不支持此字段。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvanceFilterRules;

    /**
     * @var string <p>原始日志的键名称(Key)；所有原始日志， 均以您指定的键名称（Key），原始日志内容作为值（Value）进行上传，为空时表示不开启原始日志上传。</p><ul><li>COS导入不支持此字段。</li></ul>
     */
    public $RawLogKey;

    /**
     * @param string $TimeKey <p>时间字段的key名字，TimeKey和TimeFormat必须成对出现</p>
     * @param string $TimeFormat <p>时间字段的格式，参考c语言的strftime函数对于时间的格式说明输出参数</p><ul><li>参考 <a href="https://cloud.tencent.com/document/product/614/38614">配置时间格式</a> 文档</li></ul>
     * @param string $Delimiter <p>分隔符类型日志的分隔符，只有LogType为delimiter_log时有效</p>
     * @param string $LogRegex <p>整条日志匹配规则，只有LogType为fullregex_log时有效</p>
     * @param string $BeginRegex <p>行首匹配规则，只有LogType为multiline_log或fullregex_log时有效</p>
     * @param array $Keys <p>取的每个字段的key名字，为空的key代表丢弃这个字段，只有LogType为delimiter_log时有效，json_log的日志使用json本身的key。限制100个。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FilterKeyRegex <p>日志过滤规则列表（旧版），需要过滤日志的key，及其对应的regex。<br> 注意：2.9.3及以上版本LogListener ，建议使用AdvanceFilterRules配置日志过滤规则。</p>
     * @param boolean $UnMatchUpLoadSwitch <p>解析失败日志是否上传，true表示上传，false表示不上传</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnMatchLogKey <p>失败日志的key，当UnMatchUpLoadSwitch为true时必填</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Backtracking <p>增量采集模式下的回溯数据量，默认：-1（全量采集）；其他非负数表示增量采集（从最新的位置，往前采集${Backtracking}字节（Byte）的日志）最大支持1073741824（1G）。<br>注意：</p><ul><li>COS导入不支持此字段。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsGBK <p>是否为Gbk编码。 0：否；1：是。<br>注意</p><ul><li>目前取0值时，表示UTF-8编码</li><li>COS导入不支持此字段。</li></ul>
     * @param integer $JsonStandard <p>是否为标准json。  0：否； 1：是。</p><ul><li>标准json指采集器使用业界标准开源解析器进行json解析，非标json指采集器使用CLS自研json解析器进行解析，两种解析器没有本质区别，建议客户使用标准json进行解析。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol <p>syslog传输协议，取值为tcp或者udp，只有在LogType为service_syslog时生效，其余类型无需填写。<br>注意：</p><ul><li>该字段适用于：创建采集规则配置、修改采集规则配置。</li><li>COS导入不支持此字段。</li></ul>
     * @param string $Address <p>syslog系统日志采集指定采集器监听的地址和端口 ，形式：[ip]:[port]，只有在LogType为service_syslog时生效，其余类型无需填写。<br>注意：</p><ul><li>该字段适用于：创建采集规则配置、修改采集规则配置。</li><li>COS导入不支持此字段。</li></ul>
     * @param string $ParseProtocol <p>rfc3164：指定系统日志采集使用RFC3164协议解析日志。<br>rfc5424：指定系统日志采集使用RFC5424协议解析日志。<br>auto：自动匹配rfc3164或者rfc5424其中一种协议。<br>只有在LogType为service_syslog时生效，其余类型无需填写。<br>注意：</p><ul><li>该字段适用于：创建采集规则配置、修改采集规则配置</li><li>COS导入不支持此字段。</li></ul>
     * @param integer $MetadataType <p>元数据类型。0: 不使用元数据信息；1:使用机器组元数据；2:使用用户自定义元数据；3:使用采集配置路径。<br>注意：</p><ul><li>COS导入不支持此字段。</li></ul>
     * @param string $PathRegex <p>采集配置路径正则表达式。</p><p><pre><code>请用&quot;()&quot;标识路径中目标字段对应的正则表达式，解析时将&quot;()&quot;视为捕获组，并以__TAG__.{i}:{目标字段}的形式与日志一起上报，其中i为捕获组的序号。若不希望以序号为键名，可以通过命名捕获组&quot;(?&lt;{键名}&gt;{正则})&quot;自定义键名，并以__TAG__.{键名}:{目标字段}的形式与日志一起上报。最多支持5个捕获组</code></pre></p><p>注意：</p><ul><li>MetadataType为3时必填。</li><li>COS导入不支持此字段。</li></ul>
     * @param array $MetaTags <p>用户自定义元数据信息。<br>注意：</p><ul><li>MetadataType为2时必填。</li><li>COS导入不支持此字段。</li></ul>
     * @param array $EventLogRules <p>Windows事件日志采集规则，只有在LogType为windows_event_log时生效，其余类型无需填写。</p>
     * @param array $AdvanceFilterRules <p>日志过滤规则列表（新版）。<br>注意：</p><ul><li>2.9.3以下版本LogListener不支持， 请使用FilterKeyRegex配置日志过滤规则。</li><li>自建k8s采集配置（CreateConfigExtra、ModifyConfigExtra）不支持此字段。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RawLogKey <p>原始日志的键名称(Key)；所有原始日志， 均以您指定的键名称（Key），原始日志内容作为值（Value）进行上传，为空时表示不开启原始日志上传。</p><ul><li>COS导入不支持此字段。</li></ul>
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

        if (array_key_exists("RawLogKey",$param) and $param["RawLogKey"] !== null) {
            $this->RawLogKey = $param["RawLogKey"];
        }
    }
}
