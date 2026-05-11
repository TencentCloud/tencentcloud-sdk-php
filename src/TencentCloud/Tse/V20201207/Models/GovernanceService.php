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
 * @method string getName() 获取<p>服务名称。</p>
 * @method void setName(string $Name) 设置<p>服务名称。</p>
 * @method string getNamespace() 获取<p>命名空间名称。</p>
 * @method void setNamespace(string $Namespace) 设置<p>命名空间名称。</p>
 * @method array getMetadatas() 获取<p>元数据信息数组。</p>
 * @method void setMetadatas(array $Metadatas) 设置<p>元数据信息数组。</p>
 * @method string getComment() 获取<p>描述信息。</p>
 * @method void setComment(string $Comment) 设置<p>描述信息。</p>
 * @method string getCreateTime() 获取<p>创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。</p>
 * @method string getModifyTime() 获取<p>修改时间。</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间。</p>
 * @method string getDepartment() 获取<p>服务所属部门。</p>
 * @method void setDepartment(string $Department) 设置<p>服务所属部门。</p>
 * @method string getBusiness() 获取<p>服务所属业务。</p>
 * @method void setBusiness(string $Business) 设置<p>服务所属业务。</p>
 * @method integer getHealthyInstanceCount() 获取<p>健康服务实例数</p>
 * @method void setHealthyInstanceCount(integer $HealthyInstanceCount) 设置<p>健康服务实例数</p>
 * @method integer getTotalInstanceCount() 获取<p>服务实例总数</p>
 * @method void setTotalInstanceCount(integer $TotalInstanceCount) 设置<p>服务实例总数</p>
 * @method string getId() 获取<p>服务ID</p>
 * @method void setId(string $Id) 设置<p>服务ID</p>
 * @method boolean getEditable() 获取<p>是否可以编辑</p>
 * @method void setEditable(boolean $Editable) 设置<p>是否可以编辑</p>
 * @method array getUserIds() 获取<p>可以编辑该资源的用户ID</p>
 * @method void setUserIds(array $UserIds) 设置<p>可以编辑该资源的用户ID</p>
 * @method array getGroupIds() 获取<p>可以编辑该资源的用户组ID</p>
 * @method void setGroupIds(array $GroupIds) 设置<p>可以编辑该资源的用户组ID</p>
 * @method array getRemoveUserIds() 获取<p>移除可以编辑该资源的用户ID</p>
 * @method void setRemoveUserIds(array $RemoveUserIds) 设置<p>移除可以编辑该资源的用户ID</p>
 * @method array getRemoveGroupIds() 获取<p>移除可以编辑该资源的用户组ID</p>
 * @method void setRemoveGroupIds(array $RemoveGroupIds) 设置<p>移除可以编辑该资源的用户组ID</p>
 * @method array getExportTo() 获取<p>该服务对哪些命名空间可见</p>
 * @method void setExportTo(array $ExportTo) 设置<p>该服务对哪些命名空间可见</p>
 * @method string getRevision() 获取<p>该服务信息摘要签名</p>
 * @method void setRevision(string $Revision) 设置<p>该服务信息摘要签名</p>
 * @method boolean getSyncToGlobalRegistry() 获取<p>是否开启同步到全局注册中心</p>
 * @method void setSyncToGlobalRegistry(boolean $SyncToGlobalRegistry) 设置<p>是否开启同步到全局注册中心</p>
 * @method integer getIsolateInstanceCount() 获取<p>隔离实例数</p>
 * @method void setIsolateInstanceCount(integer $IsolateInstanceCount) 设置<p>隔离实例数</p>
 * @method integer getServiceStatus() 获取<p>服务健康状态</p>
 * @method void setServiceStatus(integer $ServiceStatus) 设置<p>服务健康状态</p>
 * @method integer getType() 获取<p>服务类型</p><p>枚举值：</p><ul><li>0： 微服务（默认）</li><li>1： MCP Server</li><li>2： AI Agent</li></ul>
 * @method void setType(integer $Type) 设置<p>服务类型</p><p>枚举值：</p><ul><li>0： 微服务（默认）</li><li>1： MCP Server</li><li>2： AI Agent</li></ul>
 */
class GovernanceService extends AbstractModel
{
    /**
     * @var string <p>服务名称。</p>
     */
    public $Name;

    /**
     * @var string <p>命名空间名称。</p>
     */
    public $Namespace;

    /**
     * @var array <p>元数据信息数组。</p>
     */
    public $Metadatas;

    /**
     * @var string <p>描述信息。</p>
     */
    public $Comment;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>修改时间。</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>服务所属部门。</p>
     */
    public $Department;

    /**
     * @var string <p>服务所属业务。</p>
     */
    public $Business;

    /**
     * @var integer <p>健康服务实例数</p>
     */
    public $HealthyInstanceCount;

    /**
     * @var integer <p>服务实例总数</p>
     */
    public $TotalInstanceCount;

    /**
     * @var string <p>服务ID</p>
     */
    public $Id;

    /**
     * @var boolean <p>是否可以编辑</p>
     */
    public $Editable;

    /**
     * @var array <p>可以编辑该资源的用户ID</p>
     */
    public $UserIds;

    /**
     * @var array <p>可以编辑该资源的用户组ID</p>
     */
    public $GroupIds;

    /**
     * @var array <p>移除可以编辑该资源的用户ID</p>
     */
    public $RemoveUserIds;

    /**
     * @var array <p>移除可以编辑该资源的用户组ID</p>
     */
    public $RemoveGroupIds;

    /**
     * @var array <p>该服务对哪些命名空间可见</p>
     */
    public $ExportTo;

    /**
     * @var string <p>该服务信息摘要签名</p>
     */
    public $Revision;

    /**
     * @var boolean <p>是否开启同步到全局注册中心</p>
     */
    public $SyncToGlobalRegistry;

    /**
     * @var integer <p>隔离实例数</p>
     */
    public $IsolateInstanceCount;

    /**
     * @var integer <p>服务健康状态</p>
     */
    public $ServiceStatus;

    /**
     * @var integer <p>服务类型</p><p>枚举值：</p><ul><li>0： 微服务（默认）</li><li>1： MCP Server</li><li>2： AI Agent</li></ul>
     */
    public $Type;

    /**
     * @param string $Name <p>服务名称。</p>
     * @param string $Namespace <p>命名空间名称。</p>
     * @param array $Metadatas <p>元数据信息数组。</p>
     * @param string $Comment <p>描述信息。</p>
     * @param string $CreateTime <p>创建时间。</p>
     * @param string $ModifyTime <p>修改时间。</p>
     * @param string $Department <p>服务所属部门。</p>
     * @param string $Business <p>服务所属业务。</p>
     * @param integer $HealthyInstanceCount <p>健康服务实例数</p>
     * @param integer $TotalInstanceCount <p>服务实例总数</p>
     * @param string $Id <p>服务ID</p>
     * @param boolean $Editable <p>是否可以编辑</p>
     * @param array $UserIds <p>可以编辑该资源的用户ID</p>
     * @param array $GroupIds <p>可以编辑该资源的用户组ID</p>
     * @param array $RemoveUserIds <p>移除可以编辑该资源的用户ID</p>
     * @param array $RemoveGroupIds <p>移除可以编辑该资源的用户组ID</p>
     * @param array $ExportTo <p>该服务对哪些命名空间可见</p>
     * @param string $Revision <p>该服务信息摘要签名</p>
     * @param boolean $SyncToGlobalRegistry <p>是否开启同步到全局注册中心</p>
     * @param integer $IsolateInstanceCount <p>隔离实例数</p>
     * @param integer $ServiceStatus <p>服务健康状态</p>
     * @param integer $Type <p>服务类型</p><p>枚举值：</p><ul><li>0： 微服务（默认）</li><li>1： MCP Server</li><li>2： AI Agent</li></ul>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
