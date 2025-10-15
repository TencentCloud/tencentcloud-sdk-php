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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 治理中心服务信息。
 *
 * @method string getName() 获取服务名称。
 * @method void setName(string $Name) 设置服务名称。
 * @method string getNamespace() 获取命名空间名称。
 * @method void setNamespace(string $Namespace) 设置命名空间名称。
 * @method array getMetadatas() 获取元数据信息数组。
 * @method void setMetadatas(array $Metadatas) 设置元数据信息数组。
 * @method string getComment() 获取描述信息。
 * @method void setComment(string $Comment) 设置描述信息。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getModifyTime() 获取修改时间。
 * @method void setModifyTime(string $ModifyTime) 设置修改时间。
 * @method string getDepartment() 获取服务所属部门。
 * @method void setDepartment(string $Department) 设置服务所属部门。
 * @method string getBusiness() 获取服务所属业务。
 * @method void setBusiness(string $Business) 设置服务所属业务。
 * @method integer getHealthyInstanceCount() 获取健康服务实例数
 * @method void setHealthyInstanceCount(integer $HealthyInstanceCount) 设置健康服务实例数
 * @method integer getTotalInstanceCount() 获取服务实例总数
 * @method void setTotalInstanceCount(integer $TotalInstanceCount) 设置服务实例总数
 * @method string getId() 获取服务ID
 * @method void setId(string $Id) 设置服务ID
 * @method boolean getEditable() 获取是否可以编辑
 * @method void setEditable(boolean $Editable) 设置是否可以编辑
 * @method array getUserIds() 获取可以编辑该资源的用户ID
 * @method void setUserIds(array $UserIds) 设置可以编辑该资源的用户ID
 * @method array getGroupIds() 获取可以编辑该资源的用户组ID
 * @method void setGroupIds(array $GroupIds) 设置可以编辑该资源的用户组ID
 * @method array getRemoveUserIds() 获取移除可以编辑该资源的用户ID
 * @method void setRemoveUserIds(array $RemoveUserIds) 设置移除可以编辑该资源的用户ID
 * @method array getRemoveGroupIds() 获取移除可以编辑该资源的用户组ID
 * @method void setRemoveGroupIds(array $RemoveGroupIds) 设置移除可以编辑该资源的用户组ID
 * @method array getExportTo() 获取该服务对哪些命名空间可见	
 * @method void setExportTo(array $ExportTo) 设置该服务对哪些命名空间可见	
 * @method string getRevision() 获取该服务信息摘要签名
 * @method void setRevision(string $Revision) 设置该服务信息摘要签名
 * @method boolean getSyncToGlobalRegistry() 获取是否开启同步到全局注册中心
 * @method void setSyncToGlobalRegistry(boolean $SyncToGlobalRegistry) 设置是否开启同步到全局注册中心
 * @method integer getIsolateInstanceCount() 获取隔离实例数
 * @method void setIsolateInstanceCount(integer $IsolateInstanceCount) 设置隔离实例数
 * @method integer getServiceStatus() 获取服务健康状态
 * @method void setServiceStatus(integer $ServiceStatus) 设置服务健康状态
 */
class GovernanceService extends AbstractModel
{
    /**
     * @var string 服务名称。
     */
    public $Name;

    /**
     * @var string 命名空间名称。
     */
    public $Namespace;

    /**
     * @var array 元数据信息数组。
     */
    public $Metadatas;

    /**
     * @var string 描述信息。
     */
    public $Comment;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 修改时间。
     */
    public $ModifyTime;

    /**
     * @var string 服务所属部门。
     */
    public $Department;

    /**
     * @var string 服务所属业务。
     */
    public $Business;

    /**
     * @var integer 健康服务实例数
     */
    public $HealthyInstanceCount;

    /**
     * @var integer 服务实例总数
     */
    public $TotalInstanceCount;

    /**
     * @var string 服务ID
     */
    public $Id;

    /**
     * @var boolean 是否可以编辑
     */
    public $Editable;

    /**
     * @var array 可以编辑该资源的用户ID
     */
    public $UserIds;

    /**
     * @var array 可以编辑该资源的用户组ID
     */
    public $GroupIds;

    /**
     * @var array 移除可以编辑该资源的用户ID
     */
    public $RemoveUserIds;

    /**
     * @var array 移除可以编辑该资源的用户组ID
     */
    public $RemoveGroupIds;

    /**
     * @var array 该服务对哪些命名空间可见	
     */
    public $ExportTo;

    /**
     * @var string 该服务信息摘要签名
     */
    public $Revision;

    /**
     * @var boolean 是否开启同步到全局注册中心
     */
    public $SyncToGlobalRegistry;

    /**
     * @var integer 隔离实例数
     */
    public $IsolateInstanceCount;

    /**
     * @var integer 服务健康状态
     */
    public $ServiceStatus;

    /**
     * @param string $Name 服务名称。
     * @param string $Namespace 命名空间名称。
     * @param array $Metadatas 元数据信息数组。
     * @param string $Comment 描述信息。
     * @param string $CreateTime 创建时间。
     * @param string $ModifyTime 修改时间。
     * @param string $Department 服务所属部门。
     * @param string $Business 服务所属业务。
     * @param integer $HealthyInstanceCount 健康服务实例数
     * @param integer $TotalInstanceCount 服务实例总数
     * @param string $Id 服务ID
     * @param boolean $Editable 是否可以编辑
     * @param array $UserIds 可以编辑该资源的用户ID
     * @param array $GroupIds 可以编辑该资源的用户组ID
     * @param array $RemoveUserIds 移除可以编辑该资源的用户ID
     * @param array $RemoveGroupIds 移除可以编辑该资源的用户组ID
     * @param array $ExportTo 该服务对哪些命名空间可见	
     * @param string $Revision 该服务信息摘要签名
     * @param boolean $SyncToGlobalRegistry 是否开启同步到全局注册中心
     * @param integer $IsolateInstanceCount 隔离实例数
     * @param integer $ServiceStatus 服务健康状态
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

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Metadatas",$param) and $param["Metadatas"] !== null) {
            $this->Metadatas = [];
            foreach ($param["Metadatas"] as $key => $value){
                $obj = new Metadata();
                $obj->deserialize($value);
                array_push($this->Metadatas, $obj);
            }
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Department",$param) and $param["Department"] !== null) {
            $this->Department = $param["Department"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("HealthyInstanceCount",$param) and $param["HealthyInstanceCount"] !== null) {
            $this->HealthyInstanceCount = $param["HealthyInstanceCount"];
        }

        if (array_key_exists("TotalInstanceCount",$param) and $param["TotalInstanceCount"] !== null) {
            $this->TotalInstanceCount = $param["TotalInstanceCount"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Editable",$param) and $param["Editable"] !== null) {
            $this->Editable = $param["Editable"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("RemoveUserIds",$param) and $param["RemoveUserIds"] !== null) {
            $this->RemoveUserIds = $param["RemoveUserIds"];
        }

        if (array_key_exists("RemoveGroupIds",$param) and $param["RemoveGroupIds"] !== null) {
            $this->RemoveGroupIds = $param["RemoveGroupIds"];
        }

        if (array_key_exists("ExportTo",$param) and $param["ExportTo"] !== null) {
            $this->ExportTo = $param["ExportTo"];
        }

        if (array_key_exists("Revision",$param) and $param["Revision"] !== null) {
            $this->Revision = $param["Revision"];
        }

        if (array_key_exists("SyncToGlobalRegistry",$param) and $param["SyncToGlobalRegistry"] !== null) {
            $this->SyncToGlobalRegistry = $param["SyncToGlobalRegistry"];
        }

        if (array_key_exists("IsolateInstanceCount",$param) and $param["IsolateInstanceCount"] !== null) {
            $this->IsolateInstanceCount = $param["IsolateInstanceCount"];
        }

        if (array_key_exists("ServiceStatus",$param) and $param["ServiceStatus"] !== null) {
            $this->ServiceStatus = $param["ServiceStatus"];
        }
    }
}
