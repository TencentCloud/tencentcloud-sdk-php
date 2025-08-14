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
 * 注册配置治理信息
 *
 * @method boolean getEnableGovernance() 获取是否开启服务注册治理
 * @method void setEnableGovernance(boolean $EnableGovernance) 设置是否开启服务注册治理
 * @method string getGovernanceType() 获取服务治理类型（枚举：SHARE表示共享型、EXCLUSIVE表示独占型）
 * @method void setGovernanceType(string $GovernanceType) 设置服务治理类型（枚举：SHARE表示共享型、EXCLUSIVE表示独占型）
 * @method array getExclusiveInstances() 获取独享实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExclusiveInstances(array $ExclusiveInstances) 设置独享实例列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceGovernanceConfig extends AbstractModel
{
    /**
     * @var boolean 是否开启服务注册治理
     */
    public $EnableGovernance;

    /**
     * @var string 服务治理类型（枚举：SHARE表示共享型、EXCLUSIVE表示独占型）
     */
    public $GovernanceType;

    /**
     * @var array 独享实例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExclusiveInstances;

    /**
     * @param boolean $EnableGovernance 是否开启服务注册治理
     * @param string $GovernanceType 服务治理类型（枚举：SHARE表示共享型、EXCLUSIVE表示独占型）
     * @param array $ExclusiveInstances 独享实例列表
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

        if (array_key_exists("GovernanceType",$param) and $param["GovernanceType"] !== null) {
            $this->GovernanceType = $param["GovernanceType"];
        }

        if (array_key_exists("ExclusiveInstances",$param) and $param["ExclusiveInstances"] !== null) {
            $this->ExclusiveInstances = [];
            foreach ($param["ExclusiveInstances"] as $key => $value){
                $obj = new ExclusiveInstance();
                $obj->deserialize($value);
                array_push($this->ExclusiveInstances, $obj);
            }
        }
    }
}
