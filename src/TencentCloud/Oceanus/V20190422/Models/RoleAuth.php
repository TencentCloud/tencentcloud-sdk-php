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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 角色授权信息
 *
 * @method integer getAppId() 获取用户 AppID
 * @method void setAppId(integer $AppId) 设置用户 AppID
 * @method string getWorkSpaceSerialId() 获取工作空间 SerialId
 * @method void setWorkSpaceSerialId(string $WorkSpaceSerialId) 设置工作空间 SerialId
 * @method string getOwnerUin() 获取主账号 UIN
 * @method void setOwnerUin(string $OwnerUin) 设置主账号 UIN
 * @method string getCreatorUin() 获取创建者 UIN
 * @method void setCreatorUin(string $CreatorUin) 设置创建者 UIN
 * @method string getAuthSubAccountUin() 获取绑定授权的 UIN
 * @method void setAuthSubAccountUin(string $AuthSubAccountUin) 设置绑定授权的 UIN
 * @method integer getPermission() 获取对应 role表的id
 * @method void setPermission(integer $Permission) 设置对应 role表的id
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取最后一次操作时间
 * @method void setUpdateTime(string $UpdateTime) 设置最后一次操作时间
 * @method integer getStatus() 获取2 启用 1 停用
 * @method void setStatus(integer $Status) 设置2 启用 1 停用
 * @method integer getId() 获取id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWorkSpaceId() 获取工作空间id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkSpaceId(integer $WorkSpaceId) 设置工作空间id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleName() 获取权限名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleName(string $RoleName) 设置权限名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class RoleAuth extends AbstractModel
{
    /**
     * @var integer 用户 AppID
     */
    public $AppId;

    /**
     * @var string 工作空间 SerialId
     */
    public $WorkSpaceSerialId;

    /**
     * @var string 主账号 UIN
     */
    public $OwnerUin;

    /**
     * @var string 创建者 UIN
     */
    public $CreatorUin;

    /**
     * @var string 绑定授权的 UIN
     */
    public $AuthSubAccountUin;

    /**
     * @var integer 对应 role表的id
     */
    public $Permission;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 最后一次操作时间
     */
    public $UpdateTime;

    /**
     * @var integer 2 启用 1 停用
     */
    public $Status;

    /**
     * @var integer id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 工作空间id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkSpaceId;

    /**
     * @var string 权限名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleName;

    /**
     * @param integer $AppId 用户 AppID
     * @param string $WorkSpaceSerialId 工作空间 SerialId
     * @param string $OwnerUin 主账号 UIN
     * @param string $CreatorUin 创建者 UIN
     * @param string $AuthSubAccountUin 绑定授权的 UIN
     * @param integer $Permission 对应 role表的id
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 最后一次操作时间
     * @param integer $Status 2 启用 1 停用
     * @param integer $Id id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WorkSpaceId 工作空间id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleName 权限名称
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("WorkSpaceSerialId",$param) and $param["WorkSpaceSerialId"] !== null) {
            $this->WorkSpaceSerialId = $param["WorkSpaceSerialId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("AuthSubAccountUin",$param) and $param["AuthSubAccountUin"] !== null) {
            $this->AuthSubAccountUin = $param["AuthSubAccountUin"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }
    }
}
