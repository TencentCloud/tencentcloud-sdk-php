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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 灰度规则
 *
 * @method integer getPriority() 获取优先级，值范围为 0 到 100；值越大，优先级越高；不同规则间优先级不可重复
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriority(integer $Priority) 设置优先级，值范围为 0 到 100；值越大，优先级越高；不同规则间优先级不可重复
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnabled() 获取是否启用规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnabled(boolean $Enabled) 设置是否启用规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConditionList() 获取参数匹配条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionList(array $ConditionList) 设置参数匹配条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBalancedServiceList() 获取服务的流量百分比配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBalancedServiceList(array $BalancedServiceList) 设置服务的流量百分比配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceId() 获取归属服务 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceId(string $ServiceId) 设置归属服务 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取归属服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置归属服务名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudNativeAPIGatewayCanaryRule extends AbstractModel
{
    /**
     * @var integer 优先级，值范围为 0 到 100；值越大，优先级越高；不同规则间优先级不可重复
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Priority;

    /**
     * @var boolean 是否启用规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enabled;

    /**
     * @var array 参数匹配条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionList;

    /**
     * @var array 服务的流量百分比配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BalancedServiceList;

    /**
     * @var string 归属服务 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceId;

    /**
     * @var string 归属服务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @param integer $Priority 优先级，值范围为 0 到 100；值越大，优先级越高；不同规则间优先级不可重复
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Enabled 是否启用规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ConditionList 参数匹配条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BalancedServiceList 服务的流量百分比配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceId 归属服务 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName 归属服务名称
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
        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("ConditionList",$param) and $param["ConditionList"] !== null) {
            $this->ConditionList = [];
            foreach ($param["ConditionList"] as $key => $value){
                $obj = new CloudNativeAPIGatewayCanaryRuleCondition();
                $obj->deserialize($value);
                array_push($this->ConditionList, $obj);
            }
        }

        if (array_key_exists("BalancedServiceList",$param) and $param["BalancedServiceList"] !== null) {
            $this->BalancedServiceList = [];
            foreach ($param["BalancedServiceList"] as $key => $value){
                $obj = new CloudNativeAPIGatewayBalancedService();
                $obj->deserialize($value);
                array_push($this->BalancedServiceList, $obj);
            }
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }
    }
}
