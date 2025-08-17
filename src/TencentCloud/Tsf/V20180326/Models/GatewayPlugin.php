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
 * @method string getId() 获取网关插件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置网关插件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取插件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置插件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取插件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置插件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取插件描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置插件描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedTime(string $UpdatedTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取发布状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置发布状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeleteDisabled() 获取是否禁用删除
 * @method void setDeleteDisabled(boolean $DeleteDisabled) 设置是否禁用删除
 * @method string getDeleteDisabledReason() 获取禁用原因
 * @method void setDeleteDisabledReason(string $DeleteDisabledReason) 设置禁用原因
 */
class GatewayPlugin extends AbstractModel
{
    /**
     * @var string 网关插件id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 插件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 插件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 插件描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedTime;

    /**
     * @var string 发布状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var boolean 是否禁用删除
     */
    public $DeleteDisabled;

    /**
     * @var string 禁用原因
     */
    public $DeleteDisabledReason;

    /**
     * @param string $Id 网关插件id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 插件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 插件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 插件描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 发布状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeleteDisabled 是否禁用删除
     * @param string $DeleteDisabledReason 禁用原因
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
    }
}
