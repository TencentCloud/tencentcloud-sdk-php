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
 * CreateConfigExtra请求参数结构体
 *
 * @method string getName() 获取采集配置规程名称，最长63个字符，只能包含小写字符、数字及分隔符（“-”），且必须以小写字符开头，数字或小写字符结尾
 * @method void setName(string $Name) 设置采集配置规程名称，最长63个字符，只能包含小写字符、数字及分隔符（“-”），且必须以小写字符开头，数字或小写字符结尾
 * @method string getTopicId() 获取日志主题id
 * @method void setTopicId(string $TopicId) 设置日志主题id
 * @method string getType() 获取日志源类型。支持 container_stdout：容器标准输出；container_file：容器文件路径；host_file：节点文件路径。
 * @method void setType(string $Type) 设置日志源类型。支持 container_stdout：容器标准输出；container_file：容器文件路径；host_file：节点文件路径。
 * @method string getLogType() 获取采集的日志类型，默认为minimalist_log。支持以下类型：
- json_log代表：JSON-文件日志（详见[使用 JSON 提取模式采集日志](https://cloud.tencent.com/document/product/614/17419)）；
- delimiter_log代表：分隔符-文件日志（详见[使用分隔符提取模式采集日志](https://cloud.tencent.com/document/product/614/17420)）；
- minimalist_log代表：单行全文-文件日志（详见[使用单行全文提取模式采集日志](https://cloud.tencent.com/document/product/614/17421)）；
- fullregex_log代表：单行完全正则-文件日志（详见[使用单行-完全正则提取模式采集日志](https://cloud.tencent.com/document/product/614/52365)）；
- multiline_log代表：多行全文-文件日志（详见[使用多行全文提取模式采集日志](https://cloud.tencent.com/document/product/614/17422)）；
- multiline_fullregex_log代表：多行完全正则-文件日志（详见[使用多行-完全正则提取模式采集日志](https://cloud.tencent.com/document/product/614/52366)）；
- user_define_log代表：组合解析（适用于多格式嵌套的日志，详见[使用组合解析提取模式采集日志](https://cloud.tencent.com/document/product/614/61310)）。
 * @method void setLogType(string $LogType) 设置采集的日志类型，默认为minimalist_log。支持以下类型：
- json_log代表：JSON-文件日志（详见[使用 JSON 提取模式采集日志](https://cloud.tencent.com/document/product/614/17419)）；
- delimiter_log代表：分隔符-文件日志（详见[使用分隔符提取模式采集日志](https://cloud.tencent.com/document/product/614/17420)）；
- minimalist_log代表：单行全文-文件日志（详见[使用单行全文提取模式采集日志](https://cloud.tencent.com/document/product/614/17421)）；
- fullregex_log代表：单行完全正则-文件日志（详见[使用单行-完全正则提取模式采集日志](https://cloud.tencent.com/document/product/614/52365)）；
- multiline_log代表：多行全文-文件日志（详见[使用多行全文提取模式采集日志](https://cloud.tencent.com/document/product/614/17422)）；
- multiline_fullregex_log代表：多行完全正则-文件日志（详见[使用多行-完全正则提取模式采集日志](https://cloud.tencent.com/document/product/614/52366)）；
- user_define_log代表：组合解析（适用于多格式嵌套的日志，详见[使用组合解析提取模式采集日志](https://cloud.tencent.com/document/product/614/61310)）。
 * @method string getConfigFlag() 获取采集配置标记。
- 目前只支持label_k8s，用于标记自建k8s集群使用的采集配置

 * @method void setConfigFlag(string $ConfigFlag) 设置采集配置标记。
- 目前只支持label_k8s，用于标记自建k8s集群使用的采集配置

 * @method string getLogsetId() 获取日志集id
 * @method void setLogsetId(string $LogsetId) 设置日志集id
 * @method string getLogsetName() 获取日志集name
 * @method void setLogsetName(string $LogsetName) 设置日志集name
 * @method string getTopicName() 获取日志主题名称
 * @method void setTopicName(string $TopicName) 设置日志主题名称
 * @method HostFileInfo getHostFile() 获取节点文件路径类型配置。
 * @method void setHostFile(HostFileInfo $HostFile) 设置节点文件路径类型配置。
 * @method ContainerFileInfo getContainerFile() 获取容器文件路径类型配置。
 * @method void setContainerFile(ContainerFileInfo $ContainerFile) 设置容器文件路径类型配置。
 * @method ContainerStdoutInfo getContainerStdout() 获取容器标准输出类型配置。
 * @method void setContainerStdout(ContainerStdoutInfo $ContainerStdout) 设置容器标准输出类型配置。
 * @method string getLogFormat() 获取日志格式化方式，用于容器采集场景。
- stdout-docker-json：用于docker容器采集场景
- stdout-containerd：用于containerd容器采集场景
 * @method void setLogFormat(string $LogFormat) 设置日志格式化方式，用于容器采集场景。
- stdout-docker-json：用于docker容器采集场景
- stdout-containerd：用于containerd容器采集场景
 * @method ExtractRuleInfo getExtractRule() 获取提取规则，如果设置了ExtractRule，则必须设置LogType
 * @method void setExtractRule(ExtractRuleInfo $ExtractRule) 设置提取规则，如果设置了ExtractRule，则必须设置LogType
 * @method array getExcludePaths() 获取采集黑名单路径列表
 * @method void setExcludePaths(array $ExcludePaths) 设置采集黑名单路径列表
 * @method string getUserDefineRule() 获取组合解析采集规则，用于复杂场景下的日志采集。
- 取值参考：[使用组合解析提取模式采集日志
](https://cloud.tencent.com/document/product/614/61310)
 * @method void setUserDefineRule(string $UserDefineRule) 设置组合解析采集规则，用于复杂场景下的日志采集。
- 取值参考：[使用组合解析提取模式采集日志
](https://cloud.tencent.com/document/product/614/61310)
 * @method string getGroupId() 获取绑定的机器组id
 * @method void setGroupId(string $GroupId) 设置绑定的机器组id
 * @method array getGroupIds() 获取绑定的机器组id列表
 * @method void setGroupIds(array $GroupIds) 设置绑定的机器组id列表
 * @method array getCollectInfos() 获取采集相关配置信息。详情见CollectInfo复杂类型配置。
 * @method void setCollectInfos(array $CollectInfos) 设置采集相关配置信息。详情见CollectInfo复杂类型配置。
 * @method string getAdvancedConfig() 获取高级采集配置。 Json字符串， Key/Value定义为如下：
- ClsAgentFileTimeout(超时属性), 取值范围: 大于等于0的整数， 0为不超时
- ClsAgentMaxDepth(最大目录深度)，取值范围: 大于等于0的整数
- ClsAgentParseFailMerge(合并解析失败日志)，取值范围: true或false
- ClsAgentDefault(自定义默认值，无特殊含义，用于清空其他选项)，建议取值0

 * @method void setAdvancedConfig(string $AdvancedConfig) 设置高级采集配置。 Json字符串， Key/Value定义为如下：
- ClsAgentFileTimeout(超时属性), 取值范围: 大于等于0的整数， 0为不超时
- ClsAgentMaxDepth(最大目录深度)，取值范围: 大于等于0的整数
- ClsAgentParseFailMerge(合并解析失败日志)，取值范围: true或false
- ClsAgentDefault(自定义默认值，无特殊含义，用于清空其他选项)，建议取值0
 */
class CreateConfigExtraRequest extends AbstractModel
{
    /**
     * @var string 采集配置规程名称，最长63个字符，只能包含小写字符、数字及分隔符（“-”），且必须以小写字符开头，数字或小写字符结尾
     */
    public $Name;

    /**
     * @var string 日志主题id
     */
    public $TopicId;

    /**
     * @var string 日志源类型。支持 container_stdout：容器标准输出；container_file：容器文件路径；host_file：节点文件路径。
     */
    public $Type;

    /**
     * @var string 采集的日志类型，默认为minimalist_log。支持以下类型：
- json_log代表：JSON-文件日志（详见[使用 JSON 提取模式采集日志](https://cloud.tencent.com/document/product/614/17419)）；
- delimiter_log代表：分隔符-文件日志（详见[使用分隔符提取模式采集日志](https://cloud.tencent.com/document/product/614/17420)）；
- minimalist_log代表：单行全文-文件日志（详见[使用单行全文提取模式采集日志](https://cloud.tencent.com/document/product/614/17421)）；
- fullregex_log代表：单行完全正则-文件日志（详见[使用单行-完全正则提取模式采集日志](https://cloud.tencent.com/document/product/614/52365)）；
- multiline_log代表：多行全文-文件日志（详见[使用多行全文提取模式采集日志](https://cloud.tencent.com/document/product/614/17422)）；
- multiline_fullregex_log代表：多行完全正则-文件日志（详见[使用多行-完全正则提取模式采集日志](https://cloud.tencent.com/document/product/614/52366)）；
- user_define_log代表：组合解析（适用于多格式嵌套的日志，详见[使用组合解析提取模式采集日志](https://cloud.tencent.com/document/product/614/61310)）。
     */
    public $LogType;

    /**
     * @var string 采集配置标记。
- 目前只支持label_k8s，用于标记自建k8s集群使用的采集配置

     */
    public $ConfigFlag;

    /**
     * @var string 日志集id
     */
    public $LogsetId;

    /**
     * @var string 日志集name
     */
    public $LogsetName;

    /**
     * @var string 日志主题名称
     */
    public $TopicName;

    /**
     * @var HostFileInfo 节点文件路径类型配置。
     */
    public $HostFile;

    /**
     * @var ContainerFileInfo 容器文件路径类型配置。
     */
    public $ContainerFile;

    /**
     * @var ContainerStdoutInfo 容器标准输出类型配置。
     */
    public $ContainerStdout;

    /**
     * @var string 日志格式化方式，用于容器采集场景。
- stdout-docker-json：用于docker容器采集场景
- stdout-containerd：用于containerd容器采集场景
     * @deprecated
     */
    public $LogFormat;

    /**
     * @var ExtractRuleInfo 提取规则，如果设置了ExtractRule，则必须设置LogType
     */
    public $ExtractRule;

    /**
     * @var array 采集黑名单路径列表
     */
    public $ExcludePaths;

    /**
     * @var string 组合解析采集规则，用于复杂场景下的日志采集。
- 取值参考：[使用组合解析提取模式采集日志
](https://cloud.tencent.com/document/product/614/61310)
     */
    public $UserDefineRule;

    /**
     * @var string 绑定的机器组id
     */
    public $GroupId;

    /**
     * @var array 绑定的机器组id列表
     */
    public $GroupIds;

    /**
     * @var array 采集相关配置信息。详情见CollectInfo复杂类型配置。
     */
    public $CollectInfos;

    /**
     * @var string 高级采集配置。 Json字符串， Key/Value定义为如下：
- ClsAgentFileTimeout(超时属性), 取值范围: 大于等于0的整数， 0为不超时
- ClsAgentMaxDepth(最大目录深度)，取值范围: 大于等于0的整数
- ClsAgentParseFailMerge(合并解析失败日志)，取值范围: true或false
- ClsAgentDefault(自定义默认值，无特殊含义，用于清空其他选项)，建议取值0

     */
    public $AdvancedConfig;

    /**
     * @param string $Name 采集配置规程名称，最长63个字符，只能包含小写字符、数字及分隔符（“-”），且必须以小写字符开头，数字或小写字符结尾
     * @param string $TopicId 日志主题id
     * @param string $Type 日志源类型。支持 container_stdout：容器标准输出；container_file：容器文件路径；host_file：节点文件路径。
     * @param string $LogType 采集的日志类型，默认为minimalist_log。支持以下类型：
- json_log代表：JSON-文件日志（详见[使用 JSON 提取模式采集日志](https://cloud.tencent.com/document/product/614/17419)）；
- delimiter_log代表：分隔符-文件日志（详见[使用分隔符提取模式采集日志](https://cloud.tencent.com/document/product/614/17420)）；
- minimalist_log代表：单行全文-文件日志（详见[使用单行全文提取模式采集日志](https://cloud.tencent.com/document/product/614/17421)）；
- fullregex_log代表：单行完全正则-文件日志（详见[使用单行-完全正则提取模式采集日志](https://cloud.tencent.com/document/product/614/52365)）；
- multiline_log代表：多行全文-文件日志（详见[使用多行全文提取模式采集日志](https://cloud.tencent.com/document/product/614/17422)）；
- multiline_fullregex_log代表：多行完全正则-文件日志（详见[使用多行-完全正则提取模式采集日志](https://cloud.tencent.com/document/product/614/52366)）；
- user_define_log代表：组合解析（适用于多格式嵌套的日志，详见[使用组合解析提取模式采集日志](https://cloud.tencent.com/document/product/614/61310)）。
     * @param string $ConfigFlag 采集配置标记。
- 目前只支持label_k8s，用于标记自建k8s集群使用的采集配置

     * @param string $LogsetId 日志集id
     * @param string $LogsetName 日志集name
     * @param string $TopicName 日志主题名称
     * @param HostFileInfo $HostFile 节点文件路径类型配置。
     * @param ContainerFileInfo $ContainerFile 容器文件路径类型配置。
     * @param ContainerStdoutInfo $ContainerStdout 容器标准输出类型配置。
     * @param string $LogFormat 日志格式化方式，用于容器采集场景。
- stdout-docker-json：用于docker容器采集场景
- stdout-containerd：用于containerd容器采集场景
     * @param ExtractRuleInfo $ExtractRule 提取规则，如果设置了ExtractRule，则必须设置LogType
     * @param array $ExcludePaths 采集黑名单路径列表
     * @param string $UserDefineRule 组合解析采集规则，用于复杂场景下的日志采集。
- 取值参考：[使用组合解析提取模式采集日志
](https://cloud.tencent.com/document/product/614/61310)
     * @param string $GroupId 绑定的机器组id
     * @param array $GroupIds 绑定的机器组id列表
     * @param array $CollectInfos 采集相关配置信息。详情见CollectInfo复杂类型配置。
     * @param string $AdvancedConfig 高级采集配置。 Json字符串， Key/Value定义为如下：
- ClsAgentFileTimeout(超时属性), 取值范围: 大于等于0的整数， 0为不超时
- ClsAgentMaxDepth(最大目录深度)，取值范围: 大于等于0的整数
- ClsAgentParseFailMerge(合并解析失败日志)，取值范围: true或false
- ClsAgentDefault(自定义默认值，无特殊含义，用于清空其他选项)，建议取值0
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("ConfigFlag",$param) and $param["ConfigFlag"] !== null) {
            $this->ConfigFlag = $param["ConfigFlag"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("HostFile",$param) and $param["HostFile"] !== null) {
            $this->HostFile = new HostFileInfo();
            $this->HostFile->deserialize($param["HostFile"]);
        }

        if (array_key_exists("ContainerFile",$param) and $param["ContainerFile"] !== null) {
            $this->ContainerFile = new ContainerFileInfo();
            $this->ContainerFile->deserialize($param["ContainerFile"]);
        }

        if (array_key_exists("ContainerStdout",$param) and $param["ContainerStdout"] !== null) {
            $this->ContainerStdout = new ContainerStdoutInfo();
            $this->ContainerStdout->deserialize($param["ContainerStdout"]);
        }

        if (array_key_exists("LogFormat",$param) and $param["LogFormat"] !== null) {
            $this->LogFormat = $param["LogFormat"];
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

        if (array_key_exists("UserDefineRule",$param) and $param["UserDefineRule"] !== null) {
            $this->UserDefineRule = $param["UserDefineRule"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("CollectInfos",$param) and $param["CollectInfos"] !== null) {
            $this->CollectInfos = [];
            foreach ($param["CollectInfos"] as $key => $value){
                $obj = new CollectInfo();
                $obj->deserialize($value);
                array_push($this->CollectInfos, $obj);
            }
        }

        if (array_key_exists("AdvancedConfig",$param) and $param["AdvancedConfig"] !== null) {
            $this->AdvancedConfig = $param["AdvancedConfig"];
        }
    }
}
