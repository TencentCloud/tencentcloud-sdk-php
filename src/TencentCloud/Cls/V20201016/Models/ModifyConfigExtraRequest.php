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
 * ModifyConfigExtra请求参数结构体
 *
 * @method string getConfigExtraId() 获取采集配置扩展信息id
 * @method void setConfigExtraId(string $ConfigExtraId) 设置采集配置扩展信息id
 * @method string getName() 获取采集配置规程名称，最长63个字符，只能包含小写字符、数字及分隔符（“-”），且必须以小写字符开头，数字或小写字符结尾
 * @method void setName(string $Name) 设置采集配置规程名称，最长63个字符，只能包含小写字符、数字及分隔符（“-”），且必须以小写字符开头，数字或小写字符结尾
 * @method string getTopicId() 获取日志主题id
 * @method void setTopicId(string $TopicId) 设置日志主题id
 * @method HostFileInfo getHostFile() 获取节点文件配置信息
 * @method void setHostFile(HostFileInfo $HostFile) 设置节点文件配置信息
 * @method ContainerFileInfo getContainerFile() 获取容器文件路径信息
 * @method void setContainerFile(ContainerFileInfo $ContainerFile) 设置容器文件路径信息
 * @method ContainerStdoutInfo getContainerStdout() 获取容器标准输出信息
 * @method void setContainerStdout(ContainerStdoutInfo $ContainerStdout) 设置容器标准输出信息
 * @method string getLogType() 获取采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表极简日志，multiline_log代表多行日志，fullregex_log代表完整正则，默认为minimalist_log
 * @method void setLogType(string $LogType) 设置采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表极简日志，multiline_log代表多行日志，fullregex_log代表完整正则，默认为minimalist_log
 * @method string getLogFormat() 获取日志格式化方式
 * @method void setLogFormat(string $LogFormat) 设置日志格式化方式
 * @method ExtractRuleInfo getExtractRule() 获取提取规则，如果设置了ExtractRule，则必须设置LogType
 * @method void setExtractRule(ExtractRuleInfo $ExtractRule) 设置提取规则，如果设置了ExtractRule，则必须设置LogType
 * @method array getExcludePaths() 获取采集黑名单路径列表
 * @method void setExcludePaths(array $ExcludePaths) 设置采集黑名单路径列表
 * @method string getUserDefineRule() 获取用户自定义采集规则，Json格式序列化的字符串
 * @method void setUserDefineRule(string $UserDefineRule) 设置用户自定义采集规则，Json格式序列化的字符串
 * @method string getType() 获取类型：container_stdout、container_file、host_file
 * @method void setType(string $Type) 设置类型：container_stdout、container_file、host_file
 * @method string getGroupId() 获取机器组ID
 * @method void setGroupId(string $GroupId) 设置机器组ID
 * @method string getConfigFlag() 获取自建采集配置标
 * @method void setConfigFlag(string $ConfigFlag) 设置自建采集配置标
 * @method string getLogsetId() 获取日志集ID
 * @method void setLogsetId(string $LogsetId) 设置日志集ID
 * @method string getLogsetName() 获取日志集name
 * @method void setLogsetName(string $LogsetName) 设置日志集name
 * @method string getTopicName() 获取日志主题name
 * @method void setTopicName(string $TopicName) 设置日志主题name
 */
class ModifyConfigExtraRequest extends AbstractModel
{
    /**
     * @var string 采集配置扩展信息id
     */
    public $ConfigExtraId;

    /**
     * @var string 采集配置规程名称，最长63个字符，只能包含小写字符、数字及分隔符（“-”），且必须以小写字符开头，数字或小写字符结尾
     */
    public $Name;

    /**
     * @var string 日志主题id
     */
    public $TopicId;

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
     * @var string 采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表极简日志，multiline_log代表多行日志，fullregex_log代表完整正则，默认为minimalist_log
     */
    public $LogType;

    /**
     * @var string 日志格式化方式
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
     * @var string 用户自定义采集规则，Json格式序列化的字符串
     */
    public $UserDefineRule;

    /**
     * @var string 类型：container_stdout、container_file、host_file
     */
    public $Type;

    /**
     * @var string 机器组ID
     */
    public $GroupId;

    /**
     * @var string 自建采集配置标
     */
    public $ConfigFlag;

    /**
     * @var string 日志集ID
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
     * @param string $ConfigExtraId 采集配置扩展信息id
     * @param string $Name 采集配置规程名称，最长63个字符，只能包含小写字符、数字及分隔符（“-”），且必须以小写字符开头，数字或小写字符结尾
     * @param string $TopicId 日志主题id
     * @param HostFileInfo $HostFile 节点文件配置信息
     * @param ContainerFileInfo $ContainerFile 容器文件路径信息
     * @param ContainerStdoutInfo $ContainerStdout 容器标准输出信息
     * @param string $LogType 采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表极简日志，multiline_log代表多行日志，fullregex_log代表完整正则，默认为minimalist_log
     * @param string $LogFormat 日志格式化方式
     * @param ExtractRuleInfo $ExtractRule 提取规则，如果设置了ExtractRule，则必须设置LogType
     * @param array $ExcludePaths 采集黑名单路径列表
     * @param string $UserDefineRule 用户自定义采集规则，Json格式序列化的字符串
     * @param string $Type 类型：container_stdout、container_file、host_file
     * @param string $GroupId 机器组ID
     * @param string $ConfigFlag 自建采集配置标
     * @param string $LogsetId 日志集ID
     * @param string $LogsetName 日志集name
     * @param string $TopicName 日志主题name
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

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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
    }
}
