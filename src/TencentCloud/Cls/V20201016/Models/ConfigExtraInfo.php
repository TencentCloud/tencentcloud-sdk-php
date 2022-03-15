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
 * 特殊采集规则配置信息
 *
 * @method string getConfigExtraId() 获取采集规则扩展配置ID
 * @method void setConfigExtraId(string $ConfigExtraId) 设置采集规则扩展配置ID
 * @method string getName() 获取采集规则名称
 * @method void setName(string $Name) 设置采集规则名称
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method string getType() 获取类型：container_stdout、container_file、host_file
 * @method void setType(string $Type) 设置类型：container_stdout、container_file、host_file
 * @method HostFileInfo getHostFile() 获取节点文件配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostFile(HostFileInfo $HostFile) 设置节点文件配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ContainerFileInfo getContainerFile() 获取容器文件路径信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerFile(ContainerFileInfo $ContainerFile) 设置容器文件路径信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ContainerStdoutInfo getContainerStdout() 获取容器标准输出信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerStdout(ContainerStdoutInfo $ContainerStdout) 设置容器标准输出信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogFormat() 获取日志格式化方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogFormat(string $LogFormat) 设置日志格式化方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogType() 获取采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表极简日志，multiline_log代表多行日志，fullregex_log代表完整正则，默认为minimalist_log
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogType(string $LogType) 设置采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表极简日志，multiline_log代表多行日志，fullregex_log代表完整正则，默认为minimalist_log
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExtractRuleInfo getExtractRule() 获取提取规则，如果设置了ExtractRule，则必须设置LogType
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtractRule(ExtractRuleInfo $ExtractRule) 设置提取规则，如果设置了ExtractRule，则必须设置LogType
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExcludePaths() 获取采集黑名单路径列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExcludePaths(array $ExcludePaths) 设置采集黑名单路径列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUserDefineRule() 获取用户自定义解析字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserDefineRule(string $UserDefineRule) 设置用户自定义解析字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupId() 获取机器组ID
 * @method void setGroupId(string $GroupId) 设置机器组ID
 * @method string getConfigFlag() 获取自建采集配置标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigFlag(string $ConfigFlag) 设置自建采集配置标
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogsetId() 获取日志集ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogsetId(string $LogsetId) 设置日志集ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogsetName() 获取日志集name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogsetName(string $LogsetName) 设置日志集name
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicName() 获取日志主题name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicName(string $TopicName) 设置日志主题name
注意：此字段可能返回 null，表示取不到有效值。
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
     * @var string 类型：container_stdout、container_file、host_file
     */
    public $Type;

    /**
     * @var HostFileInfo 节点文件配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostFile;

    /**
     * @var ContainerFileInfo 容器文件路径信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerFile;

    /**
     * @var ContainerStdoutInfo 容器标准输出信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerStdout;

    /**
     * @var string 日志格式化方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogFormat;

    /**
     * @var string 采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表极简日志，multiline_log代表多行日志，fullregex_log代表完整正则，默认为minimalist_log
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogType;

    /**
     * @var ExtractRuleInfo 提取规则，如果设置了ExtractRule，则必须设置LogType
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtractRule;

    /**
     * @var array 采集黑名单路径列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExcludePaths;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 用户自定义解析字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserDefineRule;

    /**
     * @var string 机器组ID
     */
    public $GroupId;

    /**
     * @var string 自建采集配置标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigFlag;

    /**
     * @var string 日志集ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogsetId;

    /**
     * @var string 日志集name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogsetName;

    /**
     * @var string 日志主题name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicName;

    /**
     * @param string $ConfigExtraId 采集规则扩展配置ID
     * @param string $Name 采集规则名称
     * @param string $TopicId 日志主题ID
     * @param string $Type 类型：container_stdout、container_file、host_file
     * @param HostFileInfo $HostFile 节点文件配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ContainerFileInfo $ContainerFile 容器文件路径信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ContainerStdoutInfo $ContainerStdout 容器标准输出信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogFormat 日志格式化方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogType 采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表极简日志，multiline_log代表多行日志，fullregex_log代表完整正则，默认为minimalist_log
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExtractRuleInfo $ExtractRule 提取规则，如果设置了ExtractRule，则必须设置LogType
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExcludePaths 采集黑名单路径列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
     * @param string $CreateTime 创建时间
     * @param string $UserDefineRule 用户自定义解析字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupId 机器组ID
     * @param string $ConfigFlag 自建采集配置标
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogsetId 日志集ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogsetName 日志集name
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicName 日志主题name
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
    }
}
