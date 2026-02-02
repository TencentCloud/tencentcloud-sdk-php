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
 * 治理中心命名空间
 *
 * @method string getName() 获取命名空间名称。
 * @method void setName(string $Name) 设置命名空间名称。
 * @method string getComment() 获取命名空间描述信息。
 * @method void setComment(string $Comment) 设置命名空间描述信息。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getModifyTime() 获取修改时间。
 * @method void setModifyTime(string $ModifyTime) 设置修改时间。
 * @method integer getTotalServiceCount() 获取命名空间下总服务数据量
 * @method void setTotalServiceCount(integer $TotalServiceCount) 设置命名空间下总服务数据量
 * @method integer getTotalHealthInstanceCount() 获取命名空间下总健康实例数量
 * @method void setTotalHealthInstanceCount(integer $TotalHealthInstanceCount) 设置命名空间下总健康实例数量
 * @method integer getTotalInstanceCount() 获取命名空间下总实例数量
 * @method void setTotalInstanceCount(integer $TotalInstanceCount) 设置命名空间下总实例数量
 * @method string getId() 获取命名空间ID
 * @method void setId(string $Id) 设置命名空间ID
 * @method boolean getEditable() 获取是否可以编辑
 * @method void setEditable(boolean $Editable) 设置是否可以编辑
 * @method array getUserIds() 获取可以操作此命名空间的用户ID列表
 * @method void setUserIds(array $UserIds) 设置可以操作此命名空间的用户ID列表
 * @method array getGroupIds() 获取可以操作此命名空间的用户组ID列表
 * @method void setGroupIds(array $GroupIds) 设置可以操作此命名空间的用户组ID列表
 * @method array getRemoveUserIds() 获取移除可以操作此命名空间的用户ID列表
 * @method void setRemoveUserIds(array $RemoveUserIds) 设置移除可以操作此命名空间的用户ID列表
 * @method array getRemoveGroupIds() 获取移除可以操作此命名空间的用户组ID列表
 * @method void setRemoveGroupIds(array $RemoveGroupIds) 设置移除可以操作此命名空间的用户组ID列表
 * @method array getServiceExportTo() 获取该命名空间下的服务对哪些命名空间可见
 * @method void setServiceExportTo(array $ServiceExportTo) 设置该命名空间下的服务对哪些命名空间可见
 * @method boolean getSyncToGlobalRegistry() 获取是否开启同步到全局注册中心	
 * @method void setSyncToGlobalRegistry(boolean $SyncToGlobalRegistry) 设置是否开启同步到全局注册中心	
 * @method array getMetadatas() 获取元数据
 * @method void setMetadatas(array $Metadatas) 设置元数据
 */
class GovernanceNamespace extends AbstractModel
{
    /**
     * @var string 命名空间名称。
     */
    public $Name;

    /**
     * @var string 命名空间描述信息。
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
     * @var integer 命名空间下总服务数据量
     */
    public $TotalServiceCount;

    /**
     * @var integer 命名空间下总健康实例数量
     */
    public $TotalHealthInstanceCount;

    /**
     * @var integer 命名空间下总实例数量
     */
    public $TotalInstanceCount;

    /**
     * @var string 命名空间ID
     */
    public $Id;

    /**
     * @var boolean 是否可以编辑
     */
    public $Editable;

    /**
     * @var array 可以操作此命名空间的用户ID列表
     */
    public $UserIds;

    /**
     * @var array 可以操作此命名空间的用户组ID列表
     */
    public $GroupIds;

    /**
     * @var array 移除可以操作此命名空间的用户ID列表
     */
    public $RemoveUserIds;

    /**
     * @var array 移除可以操作此命名空间的用户组ID列表
     */
    public $RemoveGroupIds;

    /**
     * @var array 该命名空间下的服务对哪些命名空间可见
     */
    public $ServiceExportTo;

    /**
     * @var boolean 是否开启同步到全局注册中心	
     */
    public $SyncToGlobalRegistry;

    /**
     * @var array 元数据
     */
    public $Metadatas;

    /**
     * @param string $Name 命名空间名称。
     * @param string $Comment 命名空间描述信息。
     * @param string $CreateTime 创建时间。
     * @param string $ModifyTime 修改时间。
     * @param integer $TotalServiceCount 命名空间下总服务数据量
     * @param integer $TotalHealthInstanceCount 命名空间下总健康实例数量
     * @param integer $TotalInstanceCount 命名空间下总实例数量
     * @param string $Id 命名空间ID
     * @param boolean $Editable 是否可以编辑
     * @param array $UserIds 可以操作此命名空间的用户ID列表
     * @param array $GroupIds 可以操作此命名空间的用户组ID列表
     * @param array $RemoveUserIds 移除可以操作此命名空间的用户ID列表
     * @param array $RemoveGroupIds 移除可以操作此命名空间的用户组ID列表
     * @param array $ServiceExportTo 该命名空间下的服务对哪些命名空间可见
     * @param boolean $SyncToGlobalRegistry 是否开启同步到全局注册中心	
     * @param array $Metadatas 元数据
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

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("TotalServiceCount",$param) and $param["TotalServiceCount"] !== null) {
            $this->TotalServiceCount = $param["TotalServiceCount"];
        }

        if (array_key_exists("TotalHealthInstanceCount",$param) and $param["TotalHealthInstanceCount"] !== null) {
            $this->TotalHealthInstanceCount = $param["TotalHealthInstanceCount"];
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

        if (array_key_exists("ServiceExportTo",$param) and $param["ServiceExportTo"] !== null) {
            $this->ServiceExportTo = $param["ServiceExportTo"];
        }

        if (array_key_exists("SyncToGlobalRegistry",$param) and $param["SyncToGlobalRegistry"] !== null) {
            $this->SyncToGlobalRegistry = $param["SyncToGlobalRegistry"];
        }

        if (array_key_exists("Metadatas",$param) and $param["Metadatas"] !== null) {
            $this->Metadatas = [];
            foreach ($param["Metadatas"] as $key => $value){
                $obj = new Metadata();
                $obj->deserialize($value);
                array_push($this->Metadatas, $obj);
            }
        }
    }
}
