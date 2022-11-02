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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLogConfig请求参数结构体
 *
 * @method string getEnvironmentId() 获取环境 ID
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境 ID
 * @method string getName() 获取配置名
 * @method void setName(string $Name) 设置配置名
 * @method string getInputType() 获取收集类型，container_stdout 为标准输出；container_file 为文件；
 * @method void setInputType(string $InputType) 设置收集类型，container_stdout 为标准输出；container_file 为文件；
 * @method string getApplicationId() 获取应用 ID
 * @method void setApplicationId(string $ApplicationId) 设置应用 ID
 * @method string getLogsetId() 获取日志集 ID
 * @method void setLogsetId(string $LogsetId) 设置日志集 ID
 * @method string getTopicId() 获取日志主题 ID
 * @method void setTopicId(string $TopicId) 设置日志主题 ID
 * @method string getLogType() 获取日志提取模式，minimalist_log 为单行全文；multiline_log 为多行全文；json_log 为 json格式；fullregex_log 为单行正则；multiline_fullregex_log 为多行正则
 * @method void setLogType(string $LogType) 设置日志提取模式，minimalist_log 为单行全文；multiline_log 为多行全文；json_log 为 json格式；fullregex_log 为单行正则；multiline_fullregex_log 为多行正则
 * @method string getBeginningRegex() 获取首行正则表达式，当LogType=multiline_log 时生效
 * @method void setBeginningRegex(string $BeginningRegex) 设置首行正则表达式，当LogType=multiline_log 时生效
 * @method string getLogPath() 获取收集文件目录，当 InputType=container_file 时生效
 * @method void setLogPath(string $LogPath) 设置收集文件目录，当 InputType=container_file 时生效
 * @method string getFilePattern() 获取收集文件名模式，当 InputType=container_file 时生效
 * @method void setFilePattern(string $FilePattern) 设置收集文件名模式，当 InputType=container_file 时生效
 * @method LogConfigExtractRule getExtractRule() 获取导出规则
 * @method void setExtractRule(LogConfigExtractRule $ExtractRule) 设置导出规则
 */
class CreateLogConfigRequest extends AbstractModel
{
    /**
     * @var string 环境 ID
     */
    public $EnvironmentId;

    /**
     * @var string 配置名
     */
    public $Name;

    /**
     * @var string 收集类型，container_stdout 为标准输出；container_file 为文件；
     */
    public $InputType;

    /**
     * @var string 应用 ID
     */
    public $ApplicationId;

    /**
     * @var string 日志集 ID
     */
    public $LogsetId;

    /**
     * @var string 日志主题 ID
     */
    public $TopicId;

    /**
     * @var string 日志提取模式，minimalist_log 为单行全文；multiline_log 为多行全文；json_log 为 json格式；fullregex_log 为单行正则；multiline_fullregex_log 为多行正则
     */
    public $LogType;

    /**
     * @var string 首行正则表达式，当LogType=multiline_log 时生效
     */
    public $BeginningRegex;

    /**
     * @var string 收集文件目录，当 InputType=container_file 时生效
     */
    public $LogPath;

    /**
     * @var string 收集文件名模式，当 InputType=container_file 时生效
     */
    public $FilePattern;

    /**
     * @var LogConfigExtractRule 导出规则
     */
    public $ExtractRule;

    /**
     * @param string $EnvironmentId 环境 ID
     * @param string $Name 配置名
     * @param string $InputType 收集类型，container_stdout 为标准输出；container_file 为文件；
     * @param string $ApplicationId 应用 ID
     * @param string $LogsetId 日志集 ID
     * @param string $TopicId 日志主题 ID
     * @param string $LogType 日志提取模式，minimalist_log 为单行全文；multiline_log 为多行全文；json_log 为 json格式；fullregex_log 为单行正则；multiline_fullregex_log 为多行正则
     * @param string $BeginningRegex 首行正则表达式，当LogType=multiline_log 时生效
     * @param string $LogPath 收集文件目录，当 InputType=container_file 时生效
     * @param string $FilePattern 收集文件名模式，当 InputType=container_file 时生效
     * @param LogConfigExtractRule $ExtractRule 导出规则
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("BeginningRegex",$param) and $param["BeginningRegex"] !== null) {
            $this->BeginningRegex = $param["BeginningRegex"];
        }

        if (array_key_exists("LogPath",$param) and $param["LogPath"] !== null) {
            $this->LogPath = $param["LogPath"];
        }

        if (array_key_exists("FilePattern",$param) and $param["FilePattern"] !== null) {
            $this->FilePattern = $param["FilePattern"];
        }

        if (array_key_exists("ExtractRule",$param) and $param["ExtractRule"] !== null) {
            $this->ExtractRule = new LogConfigExtractRule();
            $this->ExtractRule->deserialize($param["ExtractRule"]);
        }
    }
}
