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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 增加组织接口返回数据
 *
 * @method string getOrganizationId() 获取组织 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationId(string $OrganizationId) 设置组织 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取组织名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置组织名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentId() 获取组织父节点 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentId(string $ParentId) 设置组织父节点 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取组织层级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置组织层级
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentIds() 获取组织结构
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentIds(string $ParentIds) 设置组织结构
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取设备总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置设备总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOnline() 获取设备在线数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnline(integer $Online) 设置设备在线数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class AddOrgData extends AbstractModel
{
    /**
     * @var string 组织 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationId;

    /**
     * @var string 组织名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 组织父节点 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentId;

    /**
     * @var integer 组织层级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var integer 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 组织结构
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentIds;

    /**
     * @var integer 设备总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var integer 设备在线数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Online;

    /**
     * @param string $OrganizationId 组织 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 组织名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentId 组织父节点 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 组织层级
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentIds 组织结构
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 设备总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Online 设备在线数量
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
        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ParentIds",$param) and $param["ParentIds"] !== null) {
            $this->ParentIds = $param["ParentIds"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Online",$param) and $param["Online"] !== null) {
            $this->Online = $param["Online"];
        }
    }
}
