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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Webhook 触发器
 *
 * @method string getName() 获取<p>触发器名称</p>
 * @method void setName(string $Name) 设置<p>触发器名称</p>
 * @method array getTargets() 获取<p>触发器目标</p>
 * @method void setTargets(array $Targets) 设置<p>触发器目标</p>
 * @method array getEventTypes() 获取<p>触发动作</p>
 * @method void setEventTypes(array $EventTypes) 设置<p>触发动作</p>
 * @method string getCondition() 获取<p>触发规则</p>
 * @method void setCondition(string $Condition) 设置<p>触发规则</p>
 * @method boolean getEnabled() 获取<p>启用触发器</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>启用触发器</p>
 * @method integer getId() 获取<p>触发器Id</p>
 * @method void setId(integer $Id) 设置<p>触发器Id</p>
 * @method string getDescription() 获取<p>触发器描述</p>
 * @method void setDescription(string $Description) 设置<p>触发器描述</p>
 * @method integer getNamespaceId() 获取<p>触发器所属命名空间 Id</p>
 * @method void setNamespaceId(integer $NamespaceId) 设置<p>触发器所属命名空间 Id</p>
 * @method string getNamespaceName() 获取<p>触发器所属命名空间名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceName(string $NamespaceName) 设置<p>触发器所属命名空间名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class WebhookTrigger extends AbstractModel
{
    /**
     * @var string <p>触发器名称</p>
     */
    public $Name;

    /**
     * @var array <p>触发器目标</p>
     */
    public $Targets;

    /**
     * @var array <p>触发动作</p>
     */
    public $EventTypes;

    /**
     * @var string <p>触发规则</p>
     */
    public $Condition;

    /**
     * @var boolean <p>启用触发器</p>
     */
    public $Enabled;

    /**
     * @var integer <p>触发器Id</p>
     */
    public $Id;

    /**
     * @var string <p>触发器描述</p>
     */
    public $Description;

    /**
     * @var integer <p>触发器所属命名空间 Id</p>
     */
    public $NamespaceId;

    /**
     * @var string <p>触发器所属命名空间名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceName;

    /**
     * @param string $Name <p>触发器名称</p>
     * @param array $Targets <p>触发器目标</p>
     * @param array $EventTypes <p>触发动作</p>
     * @param string $Condition <p>触发规则</p>
     * @param boolean $Enabled <p>启用触发器</p>
     * @param integer $Id <p>触发器Id</p>
     * @param string $Description <p>触发器描述</p>
     * @param integer $NamespaceId <p>触发器所属命名空间 Id</p>
     * @param string $NamespaceName <p>触发器所属命名空间名称</p>
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

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new WebhookTarget();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("EventTypes",$param) and $param["EventTypes"] !== null) {
            $this->EventTypes = $param["EventTypes"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }
    }
}
