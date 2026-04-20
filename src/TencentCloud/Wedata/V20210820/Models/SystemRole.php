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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 角色对象
 *
 * @method string getRoleId() 获取<p>角色id</p>
 * @method void setRoleId(string $RoleId) 设置<p>角色id</p>
 * @method string getName() 获取<p>角色名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>角色名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNameCn() 获取<p>角色昵称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNameCn(string $NameCn) 设置<p>角色昵称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPrivileges() 获取<p>角色权限</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivileges(array $Privileges) 设置<p>角色权限</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMethodPaths() 获取<p>方法路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethodPaths(array $MethodPaths) 设置<p>方法路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleType() 获取<p>角色类型, 分为System,Tenant,Project,Commercial</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleType(string $RoleType) 设置<p>角色类型, 分为System,Tenant,Project,Commercial</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSystemInit() 获取<p>是否系统默认</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemInit(boolean $SystemInit) 设置<p>是否系统默认</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParams() 获取<p>自定义参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(string $Params) 设置<p>自定义参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTimeStr() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTimeStr(string $CreateTimeStr) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SystemRole extends AbstractModel
{
    /**
     * @var string <p>角色id</p>
     */
    public $RoleId;

    /**
     * @var string <p>角色名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>角色昵称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NameCn;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array <p>角色权限</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Privileges;

    /**
     * @var array <p>方法路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MethodPaths;

    /**
     * @var string <p>角色类型, 分为System,Tenant,Project,Commercial</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleType;

    /**
     * @var boolean <p>是否系统默认</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemInit;

    /**
     * @var string <p>自定义参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTimeStr;

    /**
     * @var string <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @param string $RoleId <p>角色id</p>
     * @param string $Name <p>角色名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NameCn <p>角色昵称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Privileges <p>角色权限</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MethodPaths <p>方法路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleType <p>角色类型, 分为System,Tenant,Project,Commercial</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SystemInit <p>是否系统默认</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Params <p>自定义参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTimeStr <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator <p>创建人</p>
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
        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NameCn",$param) and $param["NameCn"] !== null) {
            $this->NameCn = $param["NameCn"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = [];
            foreach ($param["Privileges"] as $key => $value){
                $obj = new RolePrivilege();
                $obj->deserialize($value);
                array_push($this->Privileges, $obj);
            }
        }

        if (array_key_exists("MethodPaths",$param) and $param["MethodPaths"] !== null) {
            $this->MethodPaths = $param["MethodPaths"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("SystemInit",$param) and $param["SystemInit"] !== null) {
            $this->SystemInit = $param["SystemInit"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("CreateTimeStr",$param) and $param["CreateTimeStr"] !== null) {
            $this->CreateTimeStr = $param["CreateTimeStr"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }
    }
}
