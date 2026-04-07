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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SchedulerPolicy配置信息
 *
 * @method string getSchedulerName() 获取调度器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerName(string $SchedulerName) 设置调度器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPluginConfigs() 获取调度器plugin配置参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPluginConfigs(array $PluginConfigs) 设置调度器plugin配置参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method PluginSet getPluginSet() 获取插件配置
 * @method void setPluginSet(PluginSet $PluginSet) 设置插件配置
 */
class SchedulerPolicyConfig extends AbstractModel
{
    /**
     * @var string 调度器名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerName;

    /**
     * @var array 调度器plugin配置参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PluginConfigs;

    /**
     * @var PluginSet 插件配置
     */
    public $PluginSet;

    /**
     * @param string $SchedulerName 调度器名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PluginConfigs 调度器plugin配置参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param PluginSet $PluginSet 插件配置
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
        if (array_key_exists("SchedulerName",$param) and $param["SchedulerName"] !== null) {
            $this->SchedulerName = $param["SchedulerName"];
        }

        if (array_key_exists("PluginConfigs",$param) and $param["PluginConfigs"] !== null) {
            $this->PluginConfigs = [];
            foreach ($param["PluginConfigs"] as $key => $value){
                $obj = new SchedulerPluginConfigs();
                $obj->deserialize($value);
                array_push($this->PluginConfigs, $obj);
            }
        }

        if (array_key_exists("PluginSet",$param) and $param["PluginSet"] !== null) {
            $this->PluginSet = new PluginSet();
            $this->PluginSet->deserialize($param["PluginSet"]);
        }
    }
}
