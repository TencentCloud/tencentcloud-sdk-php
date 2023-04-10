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
 * prometheus聚合规则实例详情，包含所属集群ID
 *
 * @method string getName() 获取实例名称
 * @method void setName(string $Name) 设置实例名称
 * @method string getUpdateTime() 获取最近更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置最近更新时间
 * @method string getTemplateId() 获取Yaml内容
 * @method void setTemplateId(string $TemplateId) 设置Yaml内容
 * @method string getContent() 获取如果该聚合规则来至模板，则TemplateId为模板id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置如果该聚合规则来至模板，则TemplateId为模板id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取该聚合规则如果来源于用户集群crd资源定义，则ClusterId为所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置该聚合规则如果来源于用户集群crd资源定义，则ClusterId为所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取规则数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置规则数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusRecordRuleYamlItem extends AbstractModel
{
    /**
     * @var string 实例名称
     */
    public $Name;

    /**
     * @var string 最近更新时间
     */
    public $UpdateTime;

    /**
     * @var string Yaml内容
     */
    public $TemplateId;

    /**
     * @var string 如果该聚合规则来至模板，则TemplateId为模板id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var string 该聚合规则如果来源于用户集群crd资源定义，则ClusterId为所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 规则数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @param string $Name 实例名称
     * @param string $UpdateTime 最近更新时间
     * @param string $TemplateId Yaml内容
     * @param string $Content 如果该聚合规则来至模板，则TemplateId为模板id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 该聚合规则如果来源于用户集群crd资源定义，则ClusterId为所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 规则数量
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

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
