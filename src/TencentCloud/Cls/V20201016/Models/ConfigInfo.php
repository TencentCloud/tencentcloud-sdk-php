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
 * 采集规则配置信息
 *
 * @method string getConfigId() 获取采集规则配置ID
 * @method void setConfigId(string $ConfigId) 设置采集规则配置ID
 * @method string getName() 获取采集规则配置名称
 * @method void setName(string $Name) 设置采集规则配置名称
 * @method string getLogFormat() 获取日志格式化方式
 * @method void setLogFormat(string $LogFormat) 设置日志格式化方式
 * @method string getPath() 获取日志采集路径
 * @method void setPath(string $Path) 设置日志采集路径
 * @method string getLogType() 获取采集的日志类型。
- json_log代表：JSON-文件日志（详见[使用 JSON 提取模式采集日志](https://cloud.tencent.com/document/product/614/17419)）；
- delimiter_log代表：分隔符-文件日志（详见[使用分隔符提取模式采集日志](https://cloud.tencent.com/document/product/614/17420)）；
- minimalist_log代表：单行全文-文件日志（详见[使用单行全文提取模式采集日志](https://cloud.tencent.com/document/product/614/17421)）；
- fullregex_log代表：单行完全正则-文件日志（详见[使用单行-完全正则提取模式采集日志](https://cloud.tencent.com/document/product/614/52365)）；
- multiline_log代表：多行全文-文件日志（详见[使用多行全文提取模式采集日志](https://cloud.tencent.com/document/product/614/17422)）；
- multiline_fullregex_log代表：多行完全正则-文件日志（详见[使用多行-完全正则提取模式采集日志](https://cloud.tencent.com/document/product/614/52366)）；
- user_define_log代表：组合解析（适用于多格式嵌套的日志，详见[使用组合解析提取模式采集日志](https://cloud.tencent.com/document/product/614/61310)）；
- service_syslog代表：syslog 采集（详见[采集 Syslog](https://cloud.tencent.com/document/product/614/81454)）；
- windows_event_log代表：Windows事件日志（详见[采集 Windows 事件日志](https://cloud.tencent.com/document/product/614/96678)）。
 * @method void setLogType(string $LogType) 设置采集的日志类型。
- json_log代表：JSON-文件日志（详见[使用 JSON 提取模式采集日志](https://cloud.tencent.com/document/product/614/17419)）；
- delimiter_log代表：分隔符-文件日志（详见[使用分隔符提取模式采集日志](https://cloud.tencent.com/document/product/614/17420)）；
- minimalist_log代表：单行全文-文件日志（详见[使用单行全文提取模式采集日志](https://cloud.tencent.com/document/product/614/17421)）；
- fullregex_log代表：单行完全正则-文件日志（详见[使用单行-完全正则提取模式采集日志](https://cloud.tencent.com/document/product/614/52365)）；
- multiline_log代表：多行全文-文件日志（详见[使用多行全文提取模式采集日志](https://cloud.tencent.com/document/product/614/17422)）；
- multiline_fullregex_log代表：多行完全正则-文件日志（详见[使用多行-完全正则提取模式采集日志](https://cloud.tencent.com/document/product/614/52366)）；
- user_define_log代表：组合解析（适用于多格式嵌套的日志，详见[使用组合解析提取模式采集日志](https://cloud.tencent.com/document/product/614/61310)）；
- service_syslog代表：syslog 采集（详见[采集 Syslog](https://cloud.tencent.com/document/product/614/81454)）；
- windows_event_log代表：Windows事件日志（详见[采集 Windows 事件日志](https://cloud.tencent.com/document/product/614/96678)）。
 * @method ExtractRuleInfo getExtractRule() 获取提取规则，如果设置了ExtractRule，则必须设置LogType
 * @method void setExtractRule(ExtractRuleInfo $ExtractRule) 设置提取规则，如果设置了ExtractRule，则必须设置LogType
 * @method array getExcludePaths() 获取采集黑名单路径列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExcludePaths(array $ExcludePaths) 设置采集黑名单路径列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutput() 获取采集配置所属日志主题ID即TopicId
 * @method void setOutput(string $Output) 设置采集配置所属日志主题ID即TopicId
 * @method string getUpdateTime() 获取更新时间
- 时间格式：yyyy-MM-dd HH:mm:ss
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
- 时间格式：yyyy-MM-dd HH:mm:ss
 * @method string getCreateTime() 获取创建时间
- 时间格式：yyyy-MM-dd HH:mm:ss
 * @method void setCreateTime(string $CreateTime) 设置创建时间
- 时间格式：yyyy-MM-dd HH:mm:ss
 * @method string getUserDefineRule() 获取用户自定义解析字符串，详见[使用组合解析提取模式采集日志](https://cloud.tencent.com/document/product/614/61310)。
 * @method void setUserDefineRule(string $UserDefineRule) 设置用户自定义解析字符串，详见[使用组合解析提取模式采集日志](https://cloud.tencent.com/document/product/614/61310)。
 * @method string getAdvancedConfig() 获取高级采集配置。 Json字符串， Key/Value定义为如下：
- ClsAgentFileTimeout(超时属性), 取值范围: 大于等于0的整数， 0为不超时
- ClsAgentMaxDepth(最大目录深度)，取值范围: 大于等于0的整数
- ClsAgentParseFailMerge(合并解析失败日志)，取值范围: true或false
样例：
`{\"ClsAgentFileTimeout\":0,\"ClsAgentMaxDepth\":10,\"ClsAgentParseFailMerge\":true}`

控制台默认占位值：`{\"ClsAgentDefault\":0}`
 * @method void setAdvancedConfig(string $AdvancedConfig) 设置高级采集配置。 Json字符串， Key/Value定义为如下：
- ClsAgentFileTimeout(超时属性), 取值范围: 大于等于0的整数， 0为不超时
- ClsAgentMaxDepth(最大目录深度)，取值范围: 大于等于0的整数
- ClsAgentParseFailMerge(合并解析失败日志)，取值范围: true或false
样例：
`{\"ClsAgentFileTimeout\":0,\"ClsAgentMaxDepth\":10,\"ClsAgentParseFailMerge\":true}`

控制台默认占位值：`{\"ClsAgentDefault\":0}`
 * @method string getInputType() 获取日志输入类型（<span style="color:red; font-weight:bold">注：windows场景必填且仅支持file和windows_event类型</span>）
- file: 文件类型采集
- windows_event：windows事件采集
- syslog：系统日志采集
 * @method void setInputType(string $InputType) 设置日志输入类型（<span style="color:red; font-weight:bold">注：windows场景必填且仅支持file和windows_event类型</span>）
- file: 文件类型采集
- windows_event：windows事件采集
- syslog：系统日志采集
 */
class ConfigInfo extends AbstractModel
{
    /**
     * @var string 采集规则配置ID
     */
    public $ConfigId;

    /**
     * @var string 采集规则配置名称
     */
    public $Name;

    /**
     * @var string 日志格式化方式
     */
    public $LogFormat;

    /**
     * @var string 日志采集路径
     */
    public $Path;

    /**
     * @var string 采集的日志类型。
- json_log代表：JSON-文件日志（详见[使用 JSON 提取模式采集日志](https://cloud.tencent.com/document/product/614/17419)）；
- delimiter_log代表：分隔符-文件日志（详见[使用分隔符提取模式采集日志](https://cloud.tencent.com/document/product/614/17420)）；
- minimalist_log代表：单行全文-文件日志（详见[使用单行全文提取模式采集日志](https://cloud.tencent.com/document/product/614/17421)）；
- fullregex_log代表：单行完全正则-文件日志（详见[使用单行-完全正则提取模式采集日志](https://cloud.tencent.com/document/product/614/52365)）；
- multiline_log代表：多行全文-文件日志（详见[使用多行全文提取模式采集日志](https://cloud.tencent.com/document/product/614/17422)）；
- multiline_fullregex_log代表：多行完全正则-文件日志（详见[使用多行-完全正则提取模式采集日志](https://cloud.tencent.com/document/product/614/52366)）；
- user_define_log代表：组合解析（适用于多格式嵌套的日志，详见[使用组合解析提取模式采集日志](https://cloud.tencent.com/document/product/614/61310)）；
- service_syslog代表：syslog 采集（详见[采集 Syslog](https://cloud.tencent.com/document/product/614/81454)）；
- windows_event_log代表：Windows事件日志（详见[采集 Windows 事件日志](https://cloud.tencent.com/document/product/614/96678)）。
     */
    public $LogType;

    /**
     * @var ExtractRuleInfo 提取规则，如果设置了ExtractRule，则必须设置LogType
     */
    public $ExtractRule;

    /**
     * @var array 采集黑名单路径列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExcludePaths;

    /**
     * @var string 采集配置所属日志主题ID即TopicId
     */
    public $Output;

    /**
     * @var string 更新时间
- 时间格式：yyyy-MM-dd HH:mm:ss
     */
    public $UpdateTime;

    /**
     * @var string 创建时间
- 时间格式：yyyy-MM-dd HH:mm:ss
     */
    public $CreateTime;

    /**
     * @var string 用户自定义解析字符串，详见[使用组合解析提取模式采集日志](https://cloud.tencent.com/document/product/614/61310)。
     */
    public $UserDefineRule;

    /**
     * @var string 高级采集配置。 Json字符串， Key/Value定义为如下：
- ClsAgentFileTimeout(超时属性), 取值范围: 大于等于0的整数， 0为不超时
- ClsAgentMaxDepth(最大目录深度)，取值范围: 大于等于0的整数
- ClsAgentParseFailMerge(合并解析失败日志)，取值范围: true或false
样例：
`{\"ClsAgentFileTimeout\":0,\"ClsAgentMaxDepth\":10,\"ClsAgentParseFailMerge\":true}`

控制台默认占位值：`{\"ClsAgentDefault\":0}`
     */
    public $AdvancedConfig;

    /**
     * @var string 日志输入类型（<span style="color:red; font-weight:bold">注：windows场景必填且仅支持file和windows_event类型</span>）
- file: 文件类型采集
- windows_event：windows事件采集
- syslog：系统日志采集
     */
    public $InputType;

    /**
     * @param string $ConfigId 采集规则配置ID
     * @param string $Name 采集规则配置名称
     * @param string $LogFormat 日志格式化方式
     * @param string $Path 日志采集路径
     * @param string $LogType 采集的日志类型。
- json_log代表：JSON-文件日志（详见[使用 JSON 提取模式采集日志](https://cloud.tencent.com/document/product/614/17419)）；
- delimiter_log代表：分隔符-文件日志（详见[使用分隔符提取模式采集日志](https://cloud.tencent.com/document/product/614/17420)）；
- minimalist_log代表：单行全文-文件日志（详见[使用单行全文提取模式采集日志](https://cloud.tencent.com/document/product/614/17421)）；
- fullregex_log代表：单行完全正则-文件日志（详见[使用单行-完全正则提取模式采集日志](https://cloud.tencent.com/document/product/614/52365)）；
- multiline_log代表：多行全文-文件日志（详见[使用多行全文提取模式采集日志](https://cloud.tencent.com/document/product/614/17422)）；
- multiline_fullregex_log代表：多行完全正则-文件日志（详见[使用多行-完全正则提取模式采集日志](https://cloud.tencent.com/document/product/614/52366)）；
- user_define_log代表：组合解析（适用于多格式嵌套的日志，详见[使用组合解析提取模式采集日志](https://cloud.tencent.com/document/product/614/61310)）；
- service_syslog代表：syslog 采集（详见[采集 Syslog](https://cloud.tencent.com/document/product/614/81454)）；
- windows_event_log代表：Windows事件日志（详见[采集 Windows 事件日志](https://cloud.tencent.com/document/product/614/96678)）。
     * @param ExtractRuleInfo $ExtractRule 提取规则，如果设置了ExtractRule，则必须设置LogType
     * @param array $ExcludePaths 采集黑名单路径列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Output 采集配置所属日志主题ID即TopicId
     * @param string $UpdateTime 更新时间
- 时间格式：yyyy-MM-dd HH:mm:ss
     * @param string $CreateTime 创建时间
- 时间格式：yyyy-MM-dd HH:mm:ss
     * @param string $UserDefineRule 用户自定义解析字符串，详见[使用组合解析提取模式采集日志](https://cloud.tencent.com/document/product/614/61310)。
     * @param string $AdvancedConfig 高级采集配置。 Json字符串， Key/Value定义为如下：
- ClsAgentFileTimeout(超时属性), 取值范围: 大于等于0的整数， 0为不超时
- ClsAgentMaxDepth(最大目录深度)，取值范围: 大于等于0的整数
- ClsAgentParseFailMerge(合并解析失败日志)，取值范围: true或false
样例：
`{\"ClsAgentFileTimeout\":0,\"ClsAgentMaxDepth\":10,\"ClsAgentParseFailMerge\":true}`

控制台默认占位值：`{\"ClsAgentDefault\":0}`
     * @param string $InputType 日志输入类型（<span style="color:red; font-weight:bold">注：windows场景必填且仅支持file和windows_event类型</span>）
- file: 文件类型采集
- windows_event：windows事件采集
- syslog：系统日志采集
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

        if (array_key_exists("LogFormat",$param) and $param["LogFormat"] !== null) {
            $this->LogFormat = $param["LogFormat"];
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

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
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
