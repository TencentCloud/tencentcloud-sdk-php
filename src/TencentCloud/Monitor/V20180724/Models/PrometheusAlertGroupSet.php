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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus告警规则分组信息
 *
 * @method string getGroupId() 获取告警分组ID，满足正则表达式`alert-[a-z0-9]{8}`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置告警分组ID，满足正则表达式`alert-[a-z0-9]{8}`
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取告警分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置告警分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAMPReceivers() 获取腾讯云可观测平台告警模板ID ，返回告警模板转换后的notice ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAMPReceivers(array $AMPReceivers) 设置腾讯云可观测平台告警模板ID ，返回告警模板转换后的notice ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method PrometheusAlertCustomReceiver getCustomReceiver() 获取自定义告警模板
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomReceiver(PrometheusAlertCustomReceiver $CustomReceiver) 设置自定义告警模板
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepeatInterval() 获取告警通知间隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepeatInterval(string $RepeatInterval) 设置告警通知间隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateId() 获取若告警分组通过模板创建，则返回模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateId(string $TemplateId) 设置若告警分组通过模板创建，则返回模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRules() 获取分组内告警规则详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRules(array $Rules) 设置分组内告警规则详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取分组创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置分组创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取分组更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置分组更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusAlertGroupSet extends AbstractModel
{
    /**
     * @var string 告警分组ID，满足正则表达式`alert-[a-z0-9]{8}`
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 告警分组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var array 腾讯云可观测平台告警模板ID ，返回告警模板转换后的notice ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AMPReceivers;

    /**
     * @var PrometheusAlertCustomReceiver 自定义告警模板
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomReceiver;

    /**
     * @var string 告警通知间隔
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepeatInterval;

    /**
     * @var string 若告警分组通过模板创建，则返回模板ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateId;

    /**
     * @var array 分组内告警规则详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rules;

    /**
     * @var string 分组创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 分组更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @param string $GroupId 告警分组ID，满足正则表达式`alert-[a-z0-9]{8}`
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 告警分组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AMPReceivers 腾讯云可观测平台告警模板ID ，返回告警模板转换后的notice ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param PrometheusAlertCustomReceiver $CustomReceiver 自定义告警模板
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepeatInterval 告警通知间隔
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateId 若告警分组通过模板创建，则返回模板ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Rules 分组内告警规则详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 分组创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 分组更新时间
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

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("AMPReceivers",$param) and $param["AMPReceivers"] !== null) {
            $this->AMPReceivers = $param["AMPReceivers"];
        }

        if (array_key_exists("CustomReceiver",$param) and $param["CustomReceiver"] !== null) {
            $this->CustomReceiver = new PrometheusAlertCustomReceiver();
            $this->CustomReceiver->deserialize($param["CustomReceiver"]);
        }

        if (array_key_exists("RepeatInterval",$param) and $param["RepeatInterval"] !== null) {
            $this->RepeatInterval = $param["RepeatInterval"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new PrometheusAlertGroupRuleSet();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
