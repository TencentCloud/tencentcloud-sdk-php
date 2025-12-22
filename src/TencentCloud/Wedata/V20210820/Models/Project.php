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
 * 项目信息
 *
 * @method string getTenantId() 获取项目的所在租户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantId(string $TenantId) 设置项目的所在租户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目标识，英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目标识，英文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取项目显示名称，可以为中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置项目显示名称，可以为中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseUser getCreator() 获取创建者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(BaseUser $Creator) 设置创建者
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseTenant getTenant() 获取租户信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenant(BaseTenant $Tenant) 设置租户信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAdminUsers() 获取项目的管理员
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminUsers(array $AdminUsers) 设置项目的管理员
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClusters() 获取项目关联的集群信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusters(array $Clusters) 设置项目关联的集群信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParams() 获取项目的额外配置参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(string $Params) 设置项目的额外配置参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取项目状态：0：禁用，1：启用，-3:禁用中，2：启用中
 * @method void setStatus(integer $Status) 设置项目状态：0：禁用，1：启用，-3:禁用中，2：启用中
 * @method string getModel() 获取项目类型，SIMPLE：简单模式 STANDARD：标准模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModel(string $Model) 设置项目类型，SIMPLE：简单模式 STANDARD：标准模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecondModuleList() 获取二级菜单
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecondModuleList(array $SecondModuleList) 设置二级菜单
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaseUser getOwner() 获取项目负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(BaseUser $Owner) 设置项目负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWorkspaceExt() 获取项目扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspaceExt(array $WorkspaceExt) 设置项目扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTimestamp() 获取创建时间时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTimestamp(integer $CreateTimestamp) 设置创建时间时间戳
注意：此字段可能返回 null，表示取不到有效值。
 */
class Project extends AbstractModel
{
    /**
     * @var string 项目的所在租户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantId;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 项目标识，英文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string 项目显示名称，可以为中文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var BaseUser 创建者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var BaseTenant 租户信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tenant;

    /**
     * @var array 项目的管理员
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminUsers;

    /**
     * @var array 项目关联的集群信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Clusters;

    /**
     * @var string 项目的额外配置参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var integer 项目状态：0：禁用，1：启用，-3:禁用中，2：启用中
     */
    public $Status;

    /**
     * @var string 项目类型，SIMPLE：简单模式 STANDARD：标准模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Model;

    /**
     * @var array 二级菜单
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecondModuleList;

    /**
     * @var BaseUser 项目负责人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var array 项目扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkspaceExt;

    /**
     * @var integer 创建时间时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTimestamp;

    /**
     * @param string $TenantId 项目的所在租户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目标识，英文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName 项目显示名称，可以为中文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseUser $Creator 创建者
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseTenant $Tenant 租户信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AdminUsers 项目的管理员
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Clusters 项目关联的集群信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Params 项目的额外配置参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 项目状态：0：禁用，1：启用，-3:禁用中，2：启用中
     * @param string $Model 项目类型，SIMPLE：简单模式 STANDARD：标准模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecondModuleList 二级菜单
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaseUser $Owner 项目负责人
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WorkspaceExt 项目扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTimestamp 创建时间时间戳
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
        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = new BaseUser();
            $this->Creator->deserialize($param["Creator"]);
        }

        if (array_key_exists("Tenant",$param) and $param["Tenant"] !== null) {
            $this->Tenant = new BaseTenant();
            $this->Tenant->deserialize($param["Tenant"]);
        }

        if (array_key_exists("AdminUsers",$param) and $param["AdminUsers"] !== null) {
            $this->AdminUsers = [];
            foreach ($param["AdminUsers"] as $key => $value){
                $obj = new BaseUser();
                $obj->deserialize($value);
                array_push($this->AdminUsers, $obj);
            }
        }

        if (array_key_exists("Clusters",$param) and $param["Clusters"] !== null) {
            $this->Clusters = [];
            foreach ($param["Clusters"] as $key => $value){
                $obj = new BaseClusterInfo();
                $obj->deserialize($value);
                array_push($this->Clusters, $obj);
            }
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("SecondModuleList",$param) and $param["SecondModuleList"] !== null) {
            $this->SecondModuleList = $param["SecondModuleList"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new BaseUser();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("WorkspaceExt",$param) and $param["WorkspaceExt"] !== null) {
            $this->WorkspaceExt = [];
            foreach ($param["WorkspaceExt"] as $key => $value){
                $obj = new WorkspaceExt();
                $obj->deserialize($value);
                array_push($this->WorkspaceExt, $obj);
            }
        }

        if (array_key_exists("CreateTimestamp",$param) and $param["CreateTimestamp"] !== null) {
            $this->CreateTimestamp = $param["CreateTimestamp"];
        }
    }
}
