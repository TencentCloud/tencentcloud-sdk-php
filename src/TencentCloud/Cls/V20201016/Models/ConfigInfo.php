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
 * 采集规则配置信息
 *
 * @method string getConfigId() 获取采集规则配置ID
 * @method void setConfigId(string $ConfigId) 设置采集规则配置ID
 * @method string getName() 获取采集规则配置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置采集规则配置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogFormat() 获取日志格式化方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogFormat(string $LogFormat) 设置日志格式化方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取日志采集路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置日志采集路径
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
 * @method string getOutput() 获取采集配置所属日志主题ID即TopicId
 * @method void setOutput(string $Output) 设置采集配置所属日志主题ID即TopicId
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUserDefineRule() 获取用户自定义解析字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserDefineRule(string $UserDefineRule) 设置用户自定义解析字符串
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConfigInfo extends AbstractModel
{
    /**
     * @var string 采集规则配置ID
     */
    public $ConfigId;

    /**
     * @var string 采集规则配置名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 日志格式化方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogFormat;

    /**
     * @var string 日志采集路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

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
     * @var string 采集配置所属日志主题ID即TopicId
     */
    public $Output;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
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
     * @param string $ConfigId 采集规则配置ID
     * @param string $Name 采集规则配置名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogFormat 日志格式化方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path 日志采集路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogType 采集的日志类型，json_log代表json格式日志，delimiter_log代表分隔符格式日志，minimalist_log代表极简日志，multiline_log代表多行日志，fullregex_log代表完整正则，默认为minimalist_log
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExtractRuleInfo $ExtractRule 提取规则，如果设置了ExtractRule，则必须设置LogType
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExcludePaths 采集黑名单路径列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Output 采集配置所属日志主题ID即TopicId
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $UserDefineRule 用户自定义解析字符串
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
    }
}
