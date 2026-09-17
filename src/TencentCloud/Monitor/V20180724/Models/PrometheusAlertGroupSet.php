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
 * @method string getGroupId() 获取<p>告警分组ID，满足正则表达式<code>alert-[a-z0-9]{8}</code></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置<p>告警分组ID，满足正则表达式<code>alert-[a-z0-9]{8}</code></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取<p>告警分组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置<p>告警分组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAMPReceivers() 获取<p>腾讯云可观测平台告警模板ID ，返回告警模板转换后的notice ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAMPReceivers(array $AMPReceivers) 设置<p>腾讯云可观测平台告警模板ID ，返回告警模板转换后的notice ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method PrometheusAlertCustomReceiver getCustomReceiver() 获取<p>自定义告警模板</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomReceiver(PrometheusAlertCustomReceiver $CustomReceiver) 设置<p>自定义告警模板</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepeatInterval() 获取<p>告警通知间隔</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepeatInterval(string $RepeatInterval) 设置<p>告警通知间隔</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateId() 获取<p>若告警分组通过模板创建，则返回模板ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateId(string $TemplateId) 设置<p>若告警分组通过模板创建，则返回模板ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRules() 获取<p>分组内告警规则详情</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRules(array $Rules) 设置<p>分组内告警规则详情</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取<p>分组创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置<p>分组创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取<p>分组更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>分组更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastModifySubAccountUin() 获取<p>最后修改人子账号uin</p>
 * @method void setLastModifySubAccountUin(string $LastModifySubAccountUin) 设置<p>最后修改人子账号uin</p>
 */
class PrometheusAlertGroupSet extends AbstractModel
{
    /**
     * @var string <p>告警分组ID，满足正则表达式<code>alert-[a-z0-9]{8}</code></p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string <p>告警分组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var array <p>腾讯云可观测平台告警模板ID ，返回告警模板转换后的notice ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AMPReceivers;

    /**
     * @var PrometheusAlertCustomReceiver <p>自定义告警模板</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomReceiver;

    /**
     * @var string <p>告警通知间隔</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepeatInterval;

    /**
     * @var string <p>若告警分组通过模板创建，则返回模板ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateId;

    /**
     * @var array <p>分组内告警规则详情</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rules;

    /**
     * @var string <p>分组创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string <p>分组更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string <p>最后修改人子账号uin</p>
     */
    public $LastModifySubAccountUin;

    /**
     * @param string $GroupId <p>告警分组ID，满足正则表达式<code>alert-[a-z0-9]{8}</code></p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName <p>告警分组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AMPReceivers <p>腾讯云可观测平台告警模板ID ，返回告警模板转换后的notice ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param PrometheusAlertCustomReceiver $CustomReceiver <p>自定义告警模板</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepeatInterval <p>告警通知间隔</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateId <p>若告警分组通过模板创建，则返回模板ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Rules <p>分组内告警规则详情</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt <p>分组创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt <p>分组更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastModifySubAccountUin <p>最后修改人子账号uin</p>
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

        if (array_key_exists("LastModifySubAccountUin",$param) and $param["LastModifySubAccountUin"] !== null) {
            $this->LastModifySubAccountUin = $param["LastModifySubAccountUin"];
        }
    }
}
