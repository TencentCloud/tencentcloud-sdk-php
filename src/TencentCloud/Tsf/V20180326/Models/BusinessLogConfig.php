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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务日志配置
 *
 * @method string getConfigId() 获取配置项ID
 * @method void setConfigId(string $ConfigId) 设置配置项ID
 * @method string getConfigName() 获取配置项名称
 * @method void setConfigName(string $ConfigName) 设置配置项名称
 * @method string getConfigPath() 获取配置项日志路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigPath(string $ConfigPath) 设置配置项日志路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigDesc() 获取配置项描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigDesc(string $ConfigDesc) 设置配置项描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigTags() 获取配置项标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigTags(string $ConfigTags) 设置配置项标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigPipeline() 获取配置项对应的ES管道
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigPipeline(string $ConfigPipeline) 设置配置项对应的ES管道
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigCreateTime() 获取配置项创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigCreateTime(string $ConfigCreateTime) 设置配置项创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigUpdateTime() 获取配置项更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigUpdateTime(string $ConfigUpdateTime) 设置配置项更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method BusinessLogConfigSchema getConfigSchema() 获取配置项解析规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigSchema(BusinessLogConfigSchema $ConfigSchema) 设置配置项解析规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConfigAssociatedGroups() 获取配置项关联部署组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigAssociatedGroups(array $ConfigAssociatedGroups) 设置配置项关联部署组
注意：此字段可能返回 null，表示取不到有效值。
 */
class BusinessLogConfig extends AbstractModel
{
    /**
     * @var string 配置项ID
     */
    public $ConfigId;

    /**
     * @var string 配置项名称
     */
    public $ConfigName;

    /**
     * @var string 配置项日志路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigPath;

    /**
     * @var string 配置项描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigDesc;

    /**
     * @var string 配置项标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigTags;

    /**
     * @var string 配置项对应的ES管道
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigPipeline;

    /**
     * @var string 配置项创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigCreateTime;

    /**
     * @var string 配置项更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigUpdateTime;

    /**
     * @var BusinessLogConfigSchema 配置项解析规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigSchema;

    /**
     * @var array 配置项关联部署组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigAssociatedGroups;

    /**
     * @param string $ConfigId 配置项ID
     * @param string $ConfigName 配置项名称
     * @param string $ConfigPath 配置项日志路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigDesc 配置项描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigTags 配置项标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigPipeline 配置项对应的ES管道
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigCreateTime 配置项创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigUpdateTime 配置项更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param BusinessLogConfigSchema $ConfigSchema 配置项解析规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ConfigAssociatedGroups 配置项关联部署组
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

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ConfigPath",$param) and $param["ConfigPath"] !== null) {
            $this->ConfigPath = $param["ConfigPath"];
        }

        if (array_key_exists("ConfigDesc",$param) and $param["ConfigDesc"] !== null) {
            $this->ConfigDesc = $param["ConfigDesc"];
        }

        if (array_key_exists("ConfigTags",$param) and $param["ConfigTags"] !== null) {
            $this->ConfigTags = $param["ConfigTags"];
        }

        if (array_key_exists("ConfigPipeline",$param) and $param["ConfigPipeline"] !== null) {
            $this->ConfigPipeline = $param["ConfigPipeline"];
        }

        if (array_key_exists("ConfigCreateTime",$param) and $param["ConfigCreateTime"] !== null) {
            $this->ConfigCreateTime = $param["ConfigCreateTime"];
        }

        if (array_key_exists("ConfigUpdateTime",$param) and $param["ConfigUpdateTime"] !== null) {
            $this->ConfigUpdateTime = $param["ConfigUpdateTime"];
        }

        if (array_key_exists("ConfigSchema",$param) and $param["ConfigSchema"] !== null) {
            $this->ConfigSchema = new BusinessLogConfigSchema();
            $this->ConfigSchema->deserialize($param["ConfigSchema"]);
        }

        if (array_key_exists("ConfigAssociatedGroups",$param) and $param["ConfigAssociatedGroups"] !== null) {
            $this->ConfigAssociatedGroups = [];
            foreach ($param["ConfigAssociatedGroups"] as $key => $value){
                $obj = new BusinesLogConfigAssociatedGroup();
                $obj->deserialize($value);
                array_push($this->ConfigAssociatedGroups, $obj);
            }
        }
    }
}
