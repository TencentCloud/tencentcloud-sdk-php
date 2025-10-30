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
 * 特殊采集规则配置信息
 *
 * @method string getConfigExtraId() 获取采集规则扩展配置ID
 * @method void setConfigExtraId(string $ConfigExtraId) 设置采集规则扩展配置ID
 * @method string getName() 获取采集规则名称
 * @method void setName(string $Name) 设置采集规则名称
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method string getType() 获取自建k8s集群日志采集类型，支持
- container_stdout 标准输出
- container_file 标准文件
- host_file 节点文件
 * @method void setType(string $Type) 设置自建k8s集群日志采集类型，支持
- container_stdout 标准输出
- container_file 标准文件
- host_file 节点文件
 * @method HostFileInfo getHostFile() 获取节点文件配置信息
 * @method void setHostFile(HostFileInfo $HostFile) 设置节点文件配置信息
 * @method ContainerFileInfo getContainerFile() 获取容器文件路径信息
 * @method void setContainerFile(ContainerFileInfo $ContainerFile) 设置容器文件路径信息
 * @method ContainerStdoutInfo getContainerStdout() 获取容器标准输出信息
 * @method void setContainerStdout(ContainerStdoutInfo $ContainerStdout) 设置容器标准输出信息
 * @method string getLogFormat() 获取日志格式化方式
 * @method void setLogFormat(string $LogFormat) 设置日志格式化方式
 * @method string getLogType() 获取采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表极简日志，multiline_log代表多行日志，fullregex_log代表完整正则，默认为minimalist_log
 * @method void setLogType(string $LogType) 设置采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表极简日志，multiline_log代表多行日志，fullregex_log代表完整正则，默认为minimalist_log
 * @method ExtractRuleInfo getExtractRule() 获取提取规则，如果设置了ExtractRule，则必须设置LogType
 * @method void setExtractRule(ExtractRuleInfo $ExtractRule) 设置提取规则，如果设置了ExtractRule，则必须设置LogType
 * @method array getExcludePaths() 获取采集黑名单路径列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExcludePaths(array $ExcludePaths) 设置采集黑名单路径列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
- 时间格式：yyyy-MM-dd HH:mm:ss
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
- 时间格式：yyyy-MM-dd HH:mm:ss
 * @method string getCreateTime() 获取创建时间
- 时间格式：yyyy-MM-dd HH:mm:ss
 * @method void setCreateTime(string $CreateTime) 设置创建时间
- 时间格式：yyyy-MM-dd HH:mm:ss
 * @method string getUserDefineRule() 获取用户自定义解析字符串
 * @method void setUserDefineRule(string $UserDefineRule) 设置用户自定义解析字符串
 * @method string getGroupId() 获取机器组ID
- 通过[获取机器组列表](https://cloud.tencent.com/document/api/614/56438)获取机器组Id。
 * @method void setGroupId(string $GroupId) 设置机器组ID
- 通过[获取机器组列表](https://cloud.tencent.com/document/api/614/56438)获取机器组Id。
 * @method string getConfigFlag() 获取自建采集配置标
 * @method void setConfigFlag(string $ConfigFlag) 设置自建采集配置标
 * @method string getLogsetId() 获取日志集ID
- 通过[获取日志集列表](https://cloud.tencent.com/document/api/614/58624)获取日志集Id。
 * @method void setLogsetId(string $LogsetId) 设置日志集ID
- 通过[获取日志集列表](https://cloud.tencent.com/document/api/614/58624)获取日志集Id。
 * @method string getLogsetName() 获取日志集name
 * @method void setLogsetName(string $LogsetName) 设置日志集name
 * @method string getTopicName() 获取日志主题name
 * @method void setTopicName(string $TopicName) 设置日志主题name
 * @method array getCollectInfos() 获取采集相关配置信息。详情见 CollectInfo复杂类型配置。
 * @method void setCollectInfos(array $CollectInfos) 设置采集相关配置信息。详情见 CollectInfo复杂类型配置。
 * @method string getAdvancedConfig() 获取高级采集配置。 Json字符串， Key/Value定义为如下：
- ClsAgentFileTimeout(超时属性), 取值范围: 大于等于0的整数， 0为不超时
- ClsAgentMaxDepth(最大目录深度)，取值范围: 大于等于0的整数
- ClsAgentParseFailMerge(合并解析失败日志)，取值范围: true或false
样例：{"ClsAgentFileTimeout":0,"ClsAgentMaxDepth":10,"ClsAgentParseFailMerge":true}
 * @method void setAdvancedConfig(string $AdvancedConfig) 设置高级采集配置。 Json字符串， Key/Value定义为如下：
- ClsAgentFileTimeout(超时属性), 取值范围: 大于等于0的整数， 0为不超时
- ClsAgentMaxDepth(最大目录深度)，取值范围: 大于等于0的整数
- ClsAgentParseFailMerge(合并解析失败日志)，取值范围: true或false
样例：{"ClsAgentFileTimeout":0,"ClsAgentMaxDepth":10,"ClsAgentParseFailMerge":true}
 */
class ConfigExtraInfo extends AbstractModel
{
    /**
     * @var string 采集规则扩展配置ID
     */
    public $ConfigExtraId;

    /**
     * @var string 采集规则名称
     */
    public $Name;

    /**
     * @var string 日志主题ID
     */
    public $TopicId;

    /**
     * @var string 自建k8s集群日志采集类型，支持
- container_stdout 标准输出
- container_file 标准文件
- host_file 节点文件
     */
    public $Type;

    /**
     * @var HostFileInfo 节点文件配置信息
     */
    public $HostFile;

    /**
     * @var ContainerFileInfo 容器文件路径信息
     */
    public $ContainerFile;

    /**
     * @var ContainerStdoutInfo 容器标准输出信息
     */
    public $ContainerStdout;

    /**
     * @var string 日志格式化方式
     */
    public $LogFormat;

    /**
     * @var string 采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表极简日志，multiline_log代表多行日志，fullregex_log代表完整正则，默认为minimalist_log
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
     * @var string 用户自定义解析字符串
     */
    public $UserDefineRule;

    /**
     * @var string 机器组ID
- 通过[获取机器组列表](https://cloud.tencent.com/document/api/614/56438)获取机器组Id。
     */
    public $GroupId;

    /**
     * @var string 自建采集配置标
     */
    public $ConfigFlag;

    /**
     * @var string 日志集ID
- 通过[获取日志集列表](https://cloud.tencent.com/document/api/614/58624)获取日志集Id。
     */
    public $LogsetId;

    /**
     * @var string 日志集name
     */
    public $LogsetName;

    /**
     * @var string 日志主题name
     */
    public $TopicName;

    /**
     * @var array 采集相关配置信息。详情见 CollectInfo复杂类型配置。
     */
    public $CollectInfos;

    /**
     * @var string 高级采集配置。 Json字符串， Key/Value定义为如下：
- ClsAgentFileTimeout(超时属性), 取值范围: 大于等于0的整数， 0为不超时
- ClsAgentMaxDepth(最大目录深度)，取值范围: 大于等于0的整数
- ClsAgentParseFailMerge(合并解析失败日志)，取值范围: true或false
样例：{"ClsAgentFileTimeout":0,"ClsAgentMaxDepth":10,"ClsAgentParseFailMerge":true}
     */
    public $AdvancedConfig;

    /**
     * @param string $ConfigExtraId 采集规则扩展配置ID
     * @param string $Name 采集规则名称
     * @param string $TopicId 日志主题ID
     * @param string $Type 自建k8s集群日志采集类型，支持
- container_stdout 标准输出
- container_file 标准文件
- host_file 节点文件
     * @param HostFileInfo $HostFile 节点文件配置信息
     * @param ContainerFileInfo $ContainerFile 容器文件路径信息
     * @param ContainerStdoutInfo $ContainerStdout 容器标准输出信息
     * @param string $LogFormat 日志格式化方式
     * @param string $LogType 采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表极简日志，multiline_log代表多行日志，fullregex_log代表完整正则，默认为minimalist_log
     * @param ExtractRuleInfo $ExtractRule 提取规则，如果设置了ExtractRule，则必须设置LogType
     * @param array $ExcludePaths 采集黑名单路径列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
- 时间格式：yyyy-MM-dd HH:mm:ss
     * @param string $CreateTime 创建时间
- 时间格式：yyyy-MM-dd HH:mm:ss
     * @param string $UserDefineRule 用户自定义解析字符串
     * @param string $GroupId 机器组ID
- 通过[获取机器组列表](https://cloud.tencent.com/document/api/614/56438)获取机器组Id。
     * @param string $ConfigFlag 自建采集配置标
     * @param string $LogsetId 日志集ID
- 通过[获取日志集列表](https://cloud.tencent.com/document/api/614/58624)获取日志集Id。
     * @param string $LogsetName 日志集name
     * @param string $TopicName 日志主题name
     * @param array $CollectInfos 采集相关配置信息。详情见 CollectInfo复杂类型配置。
     * @param string $AdvancedConfig 高级采集配置。 Json字符串， Key/Value定义为如下：
- ClsAgentFileTimeout(超时属性), 取值范围: 大于等于0的整数， 0为不超时
- ClsAgentMaxDepth(最大目录深度)，取值范围: 大于等于0的整数
- ClsAgentParseFailMerge(合并解析失败日志)，取值范围: true或false
样例：{"ClsAgentFileTimeout":0,"ClsAgentMaxDepth":10,"ClsAgentParseFailMerge":true}
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
        if (array_key_exists("ConfigExtraId",$param) and $param["ConfigExtraId"] !== null) {
            $this->ConfigExtraId = $param["ConfigExtraId"];
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

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UserDefineRule",$param) and $param["UserDefineRule"] !== null) {
            $this->UserDefineRule = $param["UserDefineRule"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
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
