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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务治理相关配置项
 *
 * @method boolean getEnableGovernance() 获取是否开启服务治理
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableGovernance(boolean $EnableGovernance) 设置是否开启服务治理
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServiceConfigList() 获取控制台场景使用 mesh服务配置信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceConfigList(array $ServiceConfigList) 设置控制台场景使用 mesh服务配置信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExclusiveInstances() 获取注册服务治理实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExclusiveInstances(array $ExclusiveInstances) 设置注册服务治理实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGovernanceType() 获取服务治理类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGovernanceType(string $GovernanceType) 设置服务治理类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContainerGroupServiceGovernanceConfig extends AbstractModel
{
    /**
     * @var boolean 是否开启服务治理
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableGovernance;

    /**
     * @var array 控制台场景使用 mesh服务配置信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceConfigList;

    /**
     * @var array 注册服务治理实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExclusiveInstances;

    /**
     * @var string 服务治理类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GovernanceType;

    /**
     * @param boolean $EnableGovernance 是否开启服务治理
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ServiceConfigList 控制台场景使用 mesh服务配置信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExclusiveInstances 注册服务治理实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GovernanceType 服务治理类型
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
        if (array_key_exists("EnableGovernance",$param) and $param["EnableGovernance"] !== null) {
            $this->EnableGovernance = $param["EnableGovernance"];
        }

        if (array_key_exists("ServiceConfigList",$param) and $param["ServiceConfigList"] !== null) {
            $this->ServiceConfigList = [];
            foreach ($param["ServiceConfigList"] as $key => $value){
                $obj = new ServiceConfig();
                $obj->deserialize($value);
                array_push($this->ServiceConfigList, $obj);
            }
        }

        if (array_key_exists("ExclusiveInstances",$param) and $param["ExclusiveInstances"] !== null) {
            $this->ExclusiveInstances = [];
            foreach ($param["ExclusiveInstances"] as $key => $value){
                $obj = new ExclusiveInstance();
                $obj->deserialize($value);
                array_push($this->ExclusiveInstances, $obj);
            }
        }

        if (array_key_exists("GovernanceType",$param) and $param["GovernanceType"] !== null) {
            $this->GovernanceType = $param["GovernanceType"];
        }
    }
}
