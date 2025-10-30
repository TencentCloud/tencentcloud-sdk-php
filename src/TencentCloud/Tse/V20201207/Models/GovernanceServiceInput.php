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
 * 治理中心服务入参
 *
 * @method string getName() 获取服务名。
 * @method void setName(string $Name) 设置服务名。
 * @method string getNamespace() 获取服务所属命名空间。
 * @method void setNamespace(string $Namespace) 设置服务所属命名空间。
 * @method string getComment() 获取服务描述信息。
 * @method void setComment(string $Comment) 设置服务描述信息。
 * @method array getMetadatas() 获取服务元数据。
 * @method void setMetadatas(array $Metadatas) 设置服务元数据。
 * @method string getDepartment() 获取服务所属部门。
 * @method void setDepartment(string $Department) 设置服务所属部门。
 * @method string getBusiness() 获取服务所属业务。
 * @method void setBusiness(string $Business) 设置服务所属业务。
 * @method array getUserIds() 获取被添加进来可以操作此命名空间的用户ID列表
 * @method void setUserIds(array $UserIds) 设置被添加进来可以操作此命名空间的用户ID列表
 * @method array getGroupIds() 获取被添加进来可以操作此命名空间的用户组ID列表
 * @method void setGroupIds(array $GroupIds) 设置被添加进来可以操作此命名空间的用户组ID列表
 * @method array getRemoveUserIds() 获取从操作此命名空间的用户组ID列表被移除的ID列表
 * @method void setRemoveUserIds(array $RemoveUserIds) 设置从操作此命名空间的用户组ID列表被移除的ID列表
 * @method array getRemoveGroupIds() 获取从可以操作此命名空间的用户组ID列表中被移除的ID列表
 * @method void setRemoveGroupIds(array $RemoveGroupIds) 设置从可以操作此命名空间的用户组ID列表中被移除的ID列表
 * @method array getExportTo() 获取该服务对哪些命名空间可见
 * @method void setExportTo(array $ExportTo) 设置该服务对哪些命名空间可见
 * @method boolean getSyncToGlobalRegistry() 获取是否开启同步到全局注册中心
 * @method void setSyncToGlobalRegistry(boolean $SyncToGlobalRegistry) 设置是否开启同步到全局注册中心
 */
class GovernanceServiceInput extends AbstractModel
{
    /**
     * @var string 服务名。
     */
    public $Name;

    /**
     * @var string 服务所属命名空间。
     */
    public $Namespace;

    /**
     * @var string 服务描述信息。
     */
    public $Comment;

    /**
     * @var array 服务元数据。
     */
    public $Metadatas;

    /**
     * @var string 服务所属部门。
     */
    public $Department;

    /**
     * @var string 服务所属业务。
     */
    public $Business;

    /**
     * @var array 被添加进来可以操作此命名空间的用户ID列表
     */
    public $UserIds;

    /**
     * @var array 被添加进来可以操作此命名空间的用户组ID列表
     */
    public $GroupIds;

    /**
     * @var array 从操作此命名空间的用户组ID列表被移除的ID列表
     */
    public $RemoveUserIds;

    /**
     * @var array 从可以操作此命名空间的用户组ID列表中被移除的ID列表
     */
    public $RemoveGroupIds;

    /**
     * @var array 该服务对哪些命名空间可见
     */
    public $ExportTo;

    /**
     * @var boolean 是否开启同步到全局注册中心
     */
    public $SyncToGlobalRegistry;

    /**
     * @param string $Name 服务名。
     * @param string $Namespace 服务所属命名空间。
     * @param string $Comment 服务描述信息。
     * @param array $Metadatas 服务元数据。
     * @param string $Department 服务所属部门。
     * @param string $Business 服务所属业务。
     * @param array $UserIds 被添加进来可以操作此命名空间的用户ID列表
     * @param array $GroupIds 被添加进来可以操作此命名空间的用户组ID列表
     * @param array $RemoveUserIds 从操作此命名空间的用户组ID列表被移除的ID列表
     * @param array $RemoveGroupIds 从可以操作此命名空间的用户组ID列表中被移除的ID列表
     * @param array $ExportTo 该服务对哪些命名空间可见
     * @param boolean $SyncToGlobalRegistry 是否开启同步到全局注册中心
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

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Metadatas",$param) and $param["Metadatas"] !== null) {
            $this->Metadatas = [];
            foreach ($param["Metadatas"] as $key => $value){
                $obj = new Metadata();
                $obj->deserialize($value);
                array_push($this->Metadatas, $obj);
            }
        }

        if (array_key_exists("Department",$param) and $param["Department"] !== null) {
            $this->Department = $param["Department"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
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

        if (array_key_exists("SyncToGlobalRegistry",$param) and $param["SyncToGlobalRegistry"] !== null) {
            $this->SyncToGlobalRegistry = $param["SyncToGlobalRegistry"];
        }
    }
}
