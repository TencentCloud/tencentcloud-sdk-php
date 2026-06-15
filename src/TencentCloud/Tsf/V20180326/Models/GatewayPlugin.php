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
 * 微服务网关插件实例对象
 *
 * @method string getId() 获取<p>网关插件id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置<p>网关插件id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>插件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>插件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>插件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>插件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>插件描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>插件描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedTime(string $UpdatedTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>发布状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>发布状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeleteDisabled() 获取<p>是否禁用删除</p>
 * @method void setDeleteDisabled(boolean $DeleteDisabled) 设置<p>是否禁用删除</p>
 * @method string getDeleteDisabledReason() 获取<p>禁用原因</p>
 * @method void setDeleteDisabledReason(string $DeleteDisabledReason) 设置<p>禁用原因</p>
 * @method boolean getBindDisabled() 获取<p>是否不可绑定</p><p>枚举值：</p><ul><li>true： 禁止绑定</li><li>false： 允许绑定</li></ul>
 * @method void setBindDisabled(boolean $BindDisabled) 设置<p>是否不可绑定</p><p>枚举值：</p><ul><li>true： 禁止绑定</li><li>false： 允许绑定</li></ul>
 */
class GatewayPlugin extends AbstractModel
{
    /**
     * @var string <p>网关插件id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string <p>插件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>插件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>插件描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedTime;

    /**
     * @var string <p>发布状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var boolean <p>是否禁用删除</p>
     */
    public $DeleteDisabled;

    /**
     * @var string <p>禁用原因</p>
     */
    public $DeleteDisabledReason;

    /**
     * @var boolean <p>是否不可绑定</p><p>枚举值：</p><ul><li>true： 禁止绑定</li><li>false： 允许绑定</li></ul>
     */
    public $BindDisabled;

    /**
     * @param string $Id <p>网关插件id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>插件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>插件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>插件描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>发布状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeleteDisabled <p>是否禁用删除</p>
     * @param string $DeleteDisabledReason <p>禁用原因</p>
     * @param boolean $BindDisabled <p>是否不可绑定</p><p>枚举值：</p><ul><li>true： 禁止绑定</li><li>false： 允许绑定</li></ul>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DeleteDisabled",$param) and $param["DeleteDisabled"] !== null) {
            $this->DeleteDisabled = $param["DeleteDisabled"];
        }

        if (array_key_exists("DeleteDisabledReason",$param) and $param["DeleteDisabledReason"] !== null) {
            $this->DeleteDisabledReason = $param["DeleteDisabledReason"];
        }

        if (array_key_exists("BindDisabled",$param) and $param["BindDisabled"] !== null) {
            $this->BindDisabled = $param["BindDisabled"];
        }
    }
}
