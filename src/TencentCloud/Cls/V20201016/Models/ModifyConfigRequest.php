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
 * ModifyConfig请求参数结构体
 *
 * @method string getConfigId() 获取<p>采集规则配置ID，通过<a href="https://cloud.tencent.com/document/product/614/58616">获取采集规则配置</a>返回信息获取。</p>
 * @method void setConfigId(string $ConfigId) 设置<p>采集规则配置ID，通过<a href="https://cloud.tencent.com/document/product/614/58616">获取采集规则配置</a>返回信息获取。</p>
 * @method string getName() 获取<p>采集规则配置名称</p><ul><li>不能包含特殊字符｜</li><li>长度不能超过255字符，超过会被截断</li></ul>
 * @method void setName(string $Name) 设置<p>采集规则配置名称</p><ul><li>不能包含特殊字符｜</li><li>长度不能超过255字符，超过会被截断</li></ul>
 * @method string getPath() 获取<p>日志采集路径，包含文件名</p>
 * @method void setPath(string $Path) 设置<p>日志采集路径，包含文件名</p>
 * @method string getLogType() 获取<p>采集的日志类型。支持以下类型：</p><ul><li>json_log代表：JSON-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/17419">使用 JSON 提取模式采集日志</a>）；</li><li>delimiter_log代表：分隔符-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/17420">使用分隔符提取模式采集日志</a>）；</li><li>minimalist_log代表：单行全文-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/17421">使用单行全文提取模式采集日志</a>）；</li><li>fullregex_log代表：单行完全正则-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/52365">使用单行-完全正则提取模式采集日志</a>）；</li><li>multiline_log代表：多行全文-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/17422">使用多行全文提取模式采集日志</a>）；</li><li>multiline_fullregex_log代表：多行完全正则-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/52366">使用多行-完全正则提取模式采集日志</a>）；</li><li>user_define_log代表：组合解析（适用于多格式嵌套的日志，详见<a href="https://cloud.tencent.com/document/product/614/61310">使用组合解析提取模式采集日志</a>）；</li><li>service_syslog代表：syslog 采集（详见<a href="https://cloud.tencent.com/document/product/614/81454">采集 Syslog</a>）；</li><li>windows_event_log代表：Windows事件日志（详见<a href="https://cloud.tencent.com/document/product/614/96678">采集 Windows 事件日志</a>）。</li><li>journal_log代表：journal日志采集</li></ul>
 * @method void setLogType(string $LogType) 设置<p>采集的日志类型。支持以下类型：</p><ul><li>json_log代表：JSON-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/17419">使用 JSON 提取模式采集日志</a>）；</li><li>delimiter_log代表：分隔符-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/17420">使用分隔符提取模式采集日志</a>）；</li><li>minimalist_log代表：单行全文-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/17421">使用单行全文提取模式采集日志</a>）；</li><li>fullregex_log代表：单行完全正则-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/52365">使用单行-完全正则提取模式采集日志</a>）；</li><li>multiline_log代表：多行全文-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/17422">使用多行全文提取模式采集日志</a>）；</li><li>multiline_fullregex_log代表：多行完全正则-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/52366">使用多行-完全正则提取模式采集日志</a>）；</li><li>user_define_log代表：组合解析（适用于多格式嵌套的日志，详见<a href="https://cloud.tencent.com/document/product/614/61310">使用组合解析提取模式采集日志</a>）；</li><li>service_syslog代表：syslog 采集（详见<a href="https://cloud.tencent.com/document/product/614/81454">采集 Syslog</a>）；</li><li>windows_event_log代表：Windows事件日志（详见<a href="https://cloud.tencent.com/document/product/614/96678">采集 Windows 事件日志</a>）。</li><li>journal_log代表：journal日志采集</li></ul>
 * @method ExtractRuleInfo getExtractRule() 获取<p>提取规则，如果设置了ExtractRule，则必须设置LogType</p>
 * @method void setExtractRule(ExtractRuleInfo $ExtractRule) 设置<p>提取规则，如果设置了ExtractRule，则必须设置LogType</p>
 * @method array getExcludePaths() 获取<p>采集黑名单路径列表</p>
 * @method void setExcludePaths(array $ExcludePaths) 设置<p>采集黑名单路径列表</p>
 * @method string getOutput() 获取<p>采集配置关联的日志主题（TopicId）</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
 * @method void setOutput(string $Output) 设置<p>采集配置关联的日志主题（TopicId）</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
 * @method string getUserDefineRule() 获取<p>用户自定义解析字符串，Json格式序列化的字符串。</p>
 * @method void setUserDefineRule(string $UserDefineRule) 设置<p>用户自定义解析字符串，Json格式序列化的字符串。</p>
 * @method string getAdvancedConfig() 获取<p>高级采集配置。 Json字符串， Key/Value定义为如下：</p><ul><li>ClsAgentFileTimeout(超时属性), 取值范围: 大于等于0的整数， 0为不超时</li><li>ClsAgentMaxDepth(最大目录深度)，取值范围: 大于等于0的整数</li><li>ClsAgentParseFailMerge(合并解析失败日志)，取值范围: true或false<br>样例：<br><code>{\&quot;ClsAgentFileTimeout\&quot;:0,\&quot;ClsAgentMaxDepth\&quot;:10,\&quot;ClsAgentParseFailMerge\&quot;:true}</code></li></ul>
 * @method void setAdvancedConfig(string $AdvancedConfig) 设置<p>高级采集配置。 Json字符串， Key/Value定义为如下：</p><ul><li>ClsAgentFileTimeout(超时属性), 取值范围: 大于等于0的整数， 0为不超时</li><li>ClsAgentMaxDepth(最大目录深度)，取值范围: 大于等于0的整数</li><li>ClsAgentParseFailMerge(合并解析失败日志)，取值范围: true或false<br>样例：<br><code>{\&quot;ClsAgentFileTimeout\&quot;:0,\&quot;ClsAgentMaxDepth\&quot;:10,\&quot;ClsAgentParseFailMerge\&quot;:true}</code></li></ul>
 * @method string getInputType() 获取<p>日志输入类型（<span style="color:red; font-weight:bold">注：windows场景必填且仅支持file和windows_event类型</span>）</p><ul><li>file: 文件类型采集</li><li>windows_event：windows事件采集</li><li>syslog：系统日志采集</li></ul>
 * @method void setInputType(string $InputType) 设置<p>日志输入类型（<span style="color:red; font-weight:bold">注：windows场景必填且仅支持file和windows_event类型</span>）</p><ul><li>file: 文件类型采集</li><li>windows_event：windows事件采集</li><li>syslog：系统日志采集</li></ul>
 */
class ModifyConfigRequest extends AbstractModel
{
    /**
     * @var string <p>采集规则配置ID，通过<a href="https://cloud.tencent.com/document/product/614/58616">获取采集规则配置</a>返回信息获取。</p>
     */
    public $ConfigId;

    /**
     * @var string <p>采集规则配置名称</p><ul><li>不能包含特殊字符｜</li><li>长度不能超过255字符，超过会被截断</li></ul>
     */
    public $Name;

    /**
     * @var string <p>日志采集路径，包含文件名</p>
     */
    public $Path;

    /**
     * @var string <p>采集的日志类型。支持以下类型：</p><ul><li>json_log代表：JSON-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/17419">使用 JSON 提取模式采集日志</a>）；</li><li>delimiter_log代表：分隔符-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/17420">使用分隔符提取模式采集日志</a>）；</li><li>minimalist_log代表：单行全文-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/17421">使用单行全文提取模式采集日志</a>）；</li><li>fullregex_log代表：单行完全正则-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/52365">使用单行-完全正则提取模式采集日志</a>）；</li><li>multiline_log代表：多行全文-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/17422">使用多行全文提取模式采集日志</a>）；</li><li>multiline_fullregex_log代表：多行完全正则-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/52366">使用多行-完全正则提取模式采集日志</a>）；</li><li>user_define_log代表：组合解析（适用于多格式嵌套的日志，详见<a href="https://cloud.tencent.com/document/product/614/61310">使用组合解析提取模式采集日志</a>）；</li><li>service_syslog代表：syslog 采集（详见<a href="https://cloud.tencent.com/document/product/614/81454">采集 Syslog</a>）；</li><li>windows_event_log代表：Windows事件日志（详见<a href="https://cloud.tencent.com/document/product/614/96678">采集 Windows 事件日志</a>）。</li><li>journal_log代表：journal日志采集</li></ul>
     */
    public $LogType;

    /**
     * @var ExtractRuleInfo <p>提取规则，如果设置了ExtractRule，则必须设置LogType</p>
     */
    public $ExtractRule;

    /**
     * @var array <p>采集黑名单路径列表</p>
     */
    public $ExcludePaths;

    /**
     * @var string <p>采集配置关联的日志主题（TopicId）</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
     */
    public $Output;

    /**
     * @var string <p>用户自定义解析字符串，Json格式序列化的字符串。</p>
     */
    public $UserDefineRule;

    /**
     * @var string <p>高级采集配置。 Json字符串， Key/Value定义为如下：</p><ul><li>ClsAgentFileTimeout(超时属性), 取值范围: 大于等于0的整数， 0为不超时</li><li>ClsAgentMaxDepth(最大目录深度)，取值范围: 大于等于0的整数</li><li>ClsAgentParseFailMerge(合并解析失败日志)，取值范围: true或false<br>样例：<br><code>{\&quot;ClsAgentFileTimeout\&quot;:0,\&quot;ClsAgentMaxDepth\&quot;:10,\&quot;ClsAgentParseFailMerge\&quot;:true}</code></li></ul>
     */
    public $AdvancedConfig;

    /**
     * @var string <p>日志输入类型（<span style="color:red; font-weight:bold">注：windows场景必填且仅支持file和windows_event类型</span>）</p><ul><li>file: 文件类型采集</li><li>windows_event：windows事件采集</li><li>syslog：系统日志采集</li></ul>
     */
    public $InputType;

    /**
     * @param string $ConfigId <p>采集规则配置ID，通过<a href="https://cloud.tencent.com/document/product/614/58616">获取采集规则配置</a>返回信息获取。</p>
     * @param string $Name <p>采集规则配置名称</p><ul><li>不能包含特殊字符｜</li><li>长度不能超过255字符，超过会被截断</li></ul>
     * @param string $Path <p>日志采集路径，包含文件名</p>
     * @param string $LogType <p>采集的日志类型。支持以下类型：</p><ul><li>json_log代表：JSON-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/17419">使用 JSON 提取模式采集日志</a>）；</li><li>delimiter_log代表：分隔符-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/17420">使用分隔符提取模式采集日志</a>）；</li><li>minimalist_log代表：单行全文-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/17421">使用单行全文提取模式采集日志</a>）；</li><li>fullregex_log代表：单行完全正则-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/52365">使用单行-完全正则提取模式采集日志</a>）；</li><li>multiline_log代表：多行全文-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/17422">使用多行全文提取模式采集日志</a>）；</li><li>multiline_fullregex_log代表：多行完全正则-文件日志（详见<a href="https://cloud.tencent.com/document/product/614/52366">使用多行-完全正则提取模式采集日志</a>）；</li><li>user_define_log代表：组合解析（适用于多格式嵌套的日志，详见<a href="https://cloud.tencent.com/document/product/614/61310">使用组合解析提取模式采集日志</a>）；</li><li>service_syslog代表：syslog 采集（详见<a href="https://cloud.tencent.com/document/product/614/81454">采集 Syslog</a>）；</li><li>windows_event_log代表：Windows事件日志（详见<a href="https://cloud.tencent.com/document/product/614/96678">采集 Windows 事件日志</a>）。</li><li>journal_log代表：journal日志采集</li></ul>
     * @param ExtractRuleInfo $ExtractRule <p>提取规则，如果设置了ExtractRule，则必须设置LogType</p>
     * @param array $ExcludePaths <p>采集黑名单路径列表</p>
     * @param string $Output <p>采集配置关联的日志主题（TopicId）</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
     * @param string $UserDefineRule <p>用户自定义解析字符串，Json格式序列化的字符串。</p>
     * @param string $AdvancedConfig <p>高级采集配置。 Json字符串， Key/Value定义为如下：</p><ul><li>ClsAgentFileTimeout(超时属性), 取值范围: 大于等于0的整数， 0为不超时</li><li>ClsAgentMaxDepth(最大目录深度)，取值范围: 大于等于0的整数</li><li>ClsAgentParseFailMerge(合并解析失败日志)，取值范围: true或false<br>样例：<br><code>{\&quot;ClsAgentFileTimeout\&quot;:0,\&quot;ClsAgentMaxDepth\&quot;:10,\&quot;ClsAgentParseFailMerge\&quot;:true}</code></li></ul>
     * @param string $InputType <p>日志输入类型（<span style="color:red; font-weight:bold">注：windows场景必填且仅支持file和windows_event类型</span>）</p><ul><li>file: 文件类型采集</li><li>windows_event：windows事件采集</li><li>syslog：系统日志采集</li></ul>
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("ExtractRule",$param) and $param["ExtractRule"] !== null) {
            $this->ExtractRule = new ExtractRuleInfo();
            $this->ExtractRule->deserialize($param["ExtractRule"]);
        }

        if (array_key_exists("ExcludePaths",$param) and $param["ExcludePaths"] !== null) {
            $this->ExcludePaths = [];
            foreach ($param["ExcludePaths"] as $key => $value){
                $obj = new ExcludePathInfo();
                $obj->deserialize($value);
                array_push($this->ExcludePaths, $obj);
            }
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("UserDefineRule",$param) and $param["UserDefineRule"] !== null) {
            $this->UserDefineRule = $param["UserDefineRule"];
        }

        if (array_key_exists("AdvancedConfig",$param) and $param["AdvancedConfig"] !== null) {
            $this->AdvancedConfig = $param["AdvancedConfig"];
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }
    }
}
