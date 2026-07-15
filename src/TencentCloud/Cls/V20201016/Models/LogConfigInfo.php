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
 * 采集日志配置信息
 *
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method string getLogsetId() 获取日志集ID
 * @method void setLogsetId(string $LogsetId) 设置日志集ID
 * @method string getPath() 获取采集日志路径列表
 * @method void setPath(string $Path) 设置采集日志路径列表
 * @method string getLogType() 获取日志类型
 * @method void setLogType(string $LogType) 设置日志类型
 * @method ExtractRuleInfo getExtractRule() 获取提取规则
 * @method void setExtractRule(ExtractRuleInfo $ExtractRule) 设置提取规则
 * @method string getLogFormat() 获取日志格式化格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogFormat(string $LogFormat) 设置日志格式化格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExcludePaths() 获取黑名单path列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExcludePaths(array $ExcludePaths) 设置黑名单path列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserDefineRule() 获取用户自定义解析字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserDefineRule(string $UserDefineRule) 设置用户自定义解析字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigId() 获取采集配置ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigId(string $ConfigId) 设置采集配置ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGroupIds() 获取使用了元数据的机器组ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupIds(array $GroupIds) 设置使用了元数据的机器组ID列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogConfigInfo extends AbstractModel
{
    /**
     * @var string 日志主题ID
     */
    public $TopicId;

    /**
     * @var string 日志集ID
     */
    public $LogsetId;

    /**
     * @var string 采集日志路径列表
     */
    public $Path;

    /**
     * @var string 日志类型
     */
    public $LogType;

    /**
     * @var ExtractRuleInfo 提取规则
     */
    public $ExtractRule;

    /**
     * @var string 日志格式化格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogFormat;

    /**
     * @var array 黑名单path列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExcludePaths;

    /**
     * @var string 用户自定义解析字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserDefineRule;

    /**
     * @var string 采集配置ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigId;

    /**
     * @var array 使用了元数据的机器组ID列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupIds;

    /**
     * @param string $TopicId 日志主题ID
     * @param string $LogsetId 日志集ID
     * @param string $Path 采集日志路径列表
     * @param string $LogType 日志类型
     * @param ExtractRuleInfo $ExtractRule 提取规则
     * @param string $LogFormat 日志格式化格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExcludePaths 黑名单path列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserDefineRule 用户自定义解析字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigId 采集配置ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GroupIds 使用了元数据的机器组ID列表
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
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

        if (array_key_exists("LogFormat",$param) and $param["LogFormat"] !== null) {
            $this->LogFormat = $param["LogFormat"];
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

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }
    }
}
