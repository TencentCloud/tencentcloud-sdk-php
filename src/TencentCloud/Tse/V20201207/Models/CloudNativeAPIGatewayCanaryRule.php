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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 灰度规则
 *
 * @method integer getPriority() 获取优先级，值范围为 0 到 100；值越大，优先级越高；不同规则间优先级不可重复
 * @method void setPriority(integer $Priority) 设置优先级，值范围为 0 到 100；值越大，优先级越高；不同规则间优先级不可重复
 * @method boolean getEnabled() 获取是否启用规则
 * @method void setEnabled(boolean $Enabled) 设置是否启用规则
 * @method array getConditionList() 获取参数匹配条件
 * @method void setConditionList(array $ConditionList) 设置参数匹配条件
 * @method array getBalancedServiceList() 获取服务的流量百分比配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBalancedServiceList(array $BalancedServiceList) 设置服务的流量百分比配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceId() 获取归属服务 ID
 * @method void setServiceId(string $ServiceId) 设置归属服务 ID
 * @method string getServiceName() 获取归属服务名称
 * @method void setServiceName(string $ServiceName) 设置归属服务名称
 * @method string getRuleType() 获取灰度规则类别
Standard｜Lane
 * @method void setRuleType(string $RuleType) 设置灰度规则类别
Standard｜Lane
 * @method string getMatchType() 获取全链路灰度策略多个条件之间的匹配方式，与AND，或OR
 * @method void setMatchType(string $MatchType) 设置全链路灰度策略多个条件之间的匹配方式，与AND，或OR
 * @method string getGroupId() 获取泳道组ID
 * @method void setGroupId(string $GroupId) 设置泳道组ID
 * @method string getGroupName() 获取泳道组名称
 * @method void setGroupName(string $GroupName) 设置泳道组名称
 * @method string getLaneId() 获取泳道ID
 * @method void setLaneId(string $LaneId) 设置泳道ID
 * @method string getLaneName() 获取泳道名称
 * @method void setLaneName(string $LaneName) 设置泳道名称
 * @method string getMatchMode() 获取泳道匹配规则：严格STRICT｜宽松PERMISSIVE
 * @method void setMatchMode(string $MatchMode) 设置泳道匹配规则：严格STRICT｜宽松PERMISSIVE
 * @method string getLaneTag() 获取泳道标签
 * @method void setLaneTag(string $LaneTag) 设置泳道标签
 */
class CloudNativeAPIGatewayCanaryRule extends AbstractModel
{
    /**
     * @var integer 优先级，值范围为 0 到 100；值越大，优先级越高；不同规则间优先级不可重复
     */
    public $Priority;

    /**
     * @var boolean 是否启用规则
     */
    public $Enabled;

    /**
     * @var array 参数匹配条件
     */
    public $ConditionList;

    /**
     * @var array 服务的流量百分比配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BalancedServiceList;

    /**
     * @var string 归属服务 ID
     */
    public $ServiceId;

    /**
     * @var string 归属服务名称
     */
    public $ServiceName;

    /**
     * @var string 灰度规则类别
Standard｜Lane
     */
    public $RuleType;

    /**
     * @var string 全链路灰度策略多个条件之间的匹配方式，与AND，或OR
     */
    public $MatchType;

    /**
     * @var string 泳道组ID
     */
    public $GroupId;

    /**
     * @var string 泳道组名称
     */
    public $GroupName;

    /**
     * @var string 泳道ID
     */
    public $LaneId;

    /**
     * @var string 泳道名称
     */
    public $LaneName;

    /**
     * @var string 泳道匹配规则：严格STRICT｜宽松PERMISSIVE
     */
    public $MatchMode;

    /**
     * @var string 泳道标签
     */
    public $LaneTag;

    /**
     * @param integer $Priority 优先级，值范围为 0 到 100；值越大，优先级越高；不同规则间优先级不可重复
     * @param boolean $Enabled 是否启用规则
     * @param array $ConditionList 参数匹配条件
     * @param array $BalancedServiceList 服务的流量百分比配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceId 归属服务 ID
     * @param string $ServiceName 归属服务名称
     * @param string $RuleType 灰度规则类别
Standard｜Lane
     * @param string $MatchType 全链路灰度策略多个条件之间的匹配方式，与AND，或OR
     * @param string $GroupId 泳道组ID
     * @param string $GroupName 泳道组名称
     * @param string $LaneId 泳道ID
     * @param string $LaneName 泳道名称
     * @param string $MatchMode 泳道匹配规则：严格STRICT｜宽松PERMISSIVE
     * @param string $LaneTag 泳道标签
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

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("LaneId",$param) and $param["LaneId"] !== null) {
            $this->LaneId = $param["LaneId"];
        }

        if (array_key_exists("LaneName",$param) and $param["LaneName"] !== null) {
            $this->LaneName = $param["LaneName"];
        }

        if (array_key_exists("MatchMode",$param) and $param["MatchMode"] !== null) {
            $this->MatchMode = $param["MatchMode"];
        }

        if (array_key_exists("LaneTag",$param) and $param["LaneTag"] !== null) {
            $this->LaneTag = $param["LaneTag"];
        }
    }
}
