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
 * 日志收集配置
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getInputType() 获取收集类型，container_stdout 为标准输出；container_file 为文件；
 * @method void setInputType(string $InputType) 设置收集类型，container_stdout 为标准输出；container_file 为文件；
 * @method string getLogsetId() 获取日志集 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogsetId(string $LogsetId) 设置日志集 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicId() 获取日志主题 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicId(string $TopicId) 设置日志主题 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogType() 获取日志提取模式，minimalist_log 为单行全文；multiline_log 为多行全文；  fullregex_log 为单行正则； multiline_fullregex_log 为多行正则； json_log 为 json；
 * @method void setLogType(string $LogType) 设置日志提取模式，minimalist_log 为单行全文；multiline_log 为多行全文；  fullregex_log 为单行正则； multiline_fullregex_log 为多行正则； json_log 为 json；
 * @method string getBeginningRegex() 获取首行正则表达式，当 LogType 为多行全文、多行正则时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginningRegex(string $BeginningRegex) 设置首行正则表达式，当 LogType 为多行全文、多行正则时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogPath() 获取收集文件目录，当 InputType=container_file 时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogPath(string $LogPath) 设置收集文件目录，当 InputType=container_file 时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFilePattern() 获取收集文件名模式，当 InputType=container_file 时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilePattern(string $FilePattern) 设置收集文件名模式，当 InputType=container_file 时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateDate() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateDate(string $CreateDate) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyDate() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyDate(string $ModifyDate) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationId() 获取应用 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationId(string $ApplicationId) 设置应用 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationName() 获取应用名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationName(string $ApplicationName) 设置应用名
注意：此字段可能返回 null，表示取不到有效值。
 * @method LogConfigExtractRule getExtractRule() 获取导出规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtractRule(LogConfigExtractRule $ExtractRule) 设置导出规则
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogConfig extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 收集类型，container_stdout 为标准输出；container_file 为文件；
     */
    public $InputType;

    /**
     * @var string 日志集 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogsetId;

    /**
     * @var string 日志主题 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicId;

    /**
     * @var string 日志提取模式，minimalist_log 为单行全文；multiline_log 为多行全文；  fullregex_log 为单行正则； multiline_fullregex_log 为多行正则； json_log 为 json；
     */
    public $LogType;

    /**
     * @var string 首行正则表达式，当 LogType 为多行全文、多行正则时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeginningRegex;

    /**
     * @var string 收集文件目录，当 InputType=container_file 时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogPath;

    /**
     * @var string 收集文件名模式，当 InputType=container_file 时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilePattern;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateDate;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyDate;

    /**
     * @var string 应用 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationId;

    /**
     * @var string 应用名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationName;

    /**
     * @var LogConfigExtractRule 导出规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtractRule;

    /**
     * @param string $Name 名称
     * @param string $InputType 收集类型，container_stdout 为标准输出；container_file 为文件；
     * @param string $LogsetId 日志集 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicId 日志主题 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogType 日志提取模式，minimalist_log 为单行全文；multiline_log 为多行全文；  fullregex_log 为单行正则； multiline_fullregex_log 为多行正则； json_log 为 json；
     * @param string $BeginningRegex 首行正则表达式，当 LogType 为多行全文、多行正则时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogPath 收集文件目录，当 InputType=container_file 时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FilePattern 收集文件名模式，当 InputType=container_file 时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateDate 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyDate 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationId 应用 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationName 应用名
注意：此字段可能返回 null，表示取不到有效值。
     * @param LogConfigExtractRule $ExtractRule 导出规则
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
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

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("ModifyDate",$param) and $param["ModifyDate"] !== null) {
            $this->ModifyDate = $param["ModifyDate"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ExtractRule",$param) and $param["ExtractRule"] !== null) {
            $this->ExtractRule = new LogConfigExtractRule();
            $this->ExtractRule->deserialize($param["ExtractRule"]);
        }
    }
}
