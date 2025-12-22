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
 * 指标采集配置
 *
 * @method string getGroupId() 获取机器组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置机器组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConfigs() 获取基础监控采集配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigs(array $Configs) 设置基础监控采集配置信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaseMetricCollectConfig extends AbstractModel
{
    /**
     * @var string 机器组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var array 基础监控采集配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Configs;

    /**
     * @param string $GroupId 机器组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Configs 基础监控采集配置信息
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Configs",$param) and $param["Configs"] !== null) {
            $this->Configs = [];
            foreach ($param["Configs"] as $key => $value){
                $obj = new MetricCollectConfig();
                $obj->deserialize($value);
                array_push($this->Configs, $obj);
            }
        }
    }
}
