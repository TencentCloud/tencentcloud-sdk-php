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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管prometheus告警策略实例
 *
 * @method string getName() 获取策略名称
 * @method void setName(string $Name) 设置策略名称
 * @method array getRules() 获取规则列表
 * @method void setRules(array $Rules) 设置规则列表
 * @method string getId() 获取告警策略 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置告警策略 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateId() 获取如果该告警来自模板下发，则TemplateId为模板id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateId(string $TemplateId) 设置如果该告警来自模板下发，则TemplateId为模板id
注意：此字段可能返回 null，表示取不到有效值。
 * @method PrometheusNotificationItem getNotification() 获取告警渠道，模板中使用可能返回null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotification(PrometheusNotificationItem $Notification) 设置告警渠道，模板中使用可能返回null
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取如果告警策略来源于用户集群CRD资源定义，则ClusterId为所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置如果告警策略来源于用户集群CRD资源定义，则ClusterId为所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusAlertPolicyItem extends AbstractModel
{
    /**
     * @var string 策略名称
     */
    public $Name;

    /**
     * @var array 规则列表
     */
    public $Rules;

    /**
     * @var string 告警策略 id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 如果该告警来自模板下发，则TemplateId为模板id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateId;

    /**
     * @var PrometheusNotificationItem 告警渠道，模板中使用可能返回null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Notification;

    /**
     * @var string 最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string 如果告警策略来源于用户集群CRD资源定义，则ClusterId为所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @param string $Name 策略名称
     * @param array $Rules 规则列表
     * @param string $Id 告警策略 id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateId 如果该告警来自模板下发，则TemplateId为模板id
注意：此字段可能返回 null，表示取不到有效值。
     * @param PrometheusNotificationItem $Notification 告警渠道，模板中使用可能返回null
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 最后修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 如果告警策略来源于用户集群CRD资源定义，则ClusterId为所属集群ID
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new PrometheusAlertRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Notification",$param) and $param["Notification"] !== null) {
            $this->Notification = new PrometheusNotificationItem();
            $this->Notification->deserialize($param["Notification"]);
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
