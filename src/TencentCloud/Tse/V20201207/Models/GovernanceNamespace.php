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
 * @method string getName() 获取<p>命名空间名称。</p>
 * @method void setName(string $Name) 设置<p>命名空间名称。</p>
 * @method string getComment() 获取<p>命名空间描述信息。</p>
 * @method void setComment(string $Comment) 设置<p>命名空间描述信息。</p>
 * @method string getCreateTime() 获取<p>创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。</p>
 * @method string getModifyTime() 获取<p>修改时间。</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间。</p>
 * @method integer getTotalServiceCount() 获取<p>命名空间下总服务数据量</p>
 * @method void setTotalServiceCount(integer $TotalServiceCount) 设置<p>命名空间下总服务数据量</p>
 * @method integer getTotalHealthInstanceCount() 获取<p>命名空间下总健康实例数量</p>
 * @method void setTotalHealthInstanceCount(integer $TotalHealthInstanceCount) 设置<p>命名空间下总健康实例数量</p>
 * @method integer getTotalInstanceCount() 获取<p>命名空间下总实例数量</p>
 * @method void setTotalInstanceCount(integer $TotalInstanceCount) 设置<p>命名空间下总实例数量</p>
 * @method string getId() 获取<p>命名空间ID</p>
 * @method void setId(string $Id) 设置<p>命名空间ID</p>
 * @method boolean getEditable() 获取<p>是否可以编辑</p>
 * @method void setEditable(boolean $Editable) 设置<p>是否可以编辑</p>
 * @method array getUserIds() 获取<p>可以操作此命名空间的用户ID列表</p>
 * @method void setUserIds(array $UserIds) 设置<p>可以操作此命名空间的用户ID列表</p>
 * @method array getGroupIds() 获取<p>可以操作此命名空间的用户组ID列表</p>
 * @method void setGroupIds(array $GroupIds) 设置<p>可以操作此命名空间的用户组ID列表</p>
 * @method array getRemoveUserIds() 获取<p>移除可以操作此命名空间的用户ID列表</p>
 * @method void setRemoveUserIds(array $RemoveUserIds) 设置<p>移除可以操作此命名空间的用户ID列表</p>
 * @method array getRemoveGroupIds() 获取<p>移除可以操作此命名空间的用户组ID列表</p>
 * @method void setRemoveGroupIds(array $RemoveGroupIds) 设置<p>移除可以操作此命名空间的用户组ID列表</p>
 * @method array getServiceExportTo() 获取<p>该命名空间下的服务对哪些命名空间可见</p>
 * @method void setServiceExportTo(array $ServiceExportTo) 设置<p>该命名空间下的服务对哪些命名空间可见</p>
 * @method boolean getSyncToGlobalRegistry() 获取<p>是否开启同步到全局注册中心</p>
 * @method void setSyncToGlobalRegistry(boolean $SyncToGlobalRegistry) 设置<p>是否开启同步到全局注册中心</p>
 * @method array getMetadatas() 获取<p>元数据</p>
 * @method void setMetadatas(array $Metadatas) 设置<p>元数据</p>
 */
class GovernanceNamespace extends AbstractModel
{
    /**
     * @var string <p>命名空间名称。</p>
     */
    public $Name;

    /**
     * @var string <p>命名空间描述信息。</p>
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
     * @var integer <p>命名空间下总服务数据量</p>
     */
    public $TotalServiceCount;

    /**
     * @var integer <p>命名空间下总健康实例数量</p>
     */
    public $TotalHealthInstanceCount;

    /**
     * @var integer <p>命名空间下总实例数量</p>
     */
    public $TotalInstanceCount;

    /**
     * @var string <p>命名空间ID</p>
     */
    public $Id;

    /**
     * @var boolean <p>是否可以编辑</p>
     */
    public $Editable;

    /**
     * @var array <p>可以操作此命名空间的用户ID列表</p>
     */
    public $UserIds;

    /**
     * @var array <p>可以操作此命名空间的用户组ID列表</p>
     */
    public $GroupIds;

    /**
     * @var array <p>移除可以操作此命名空间的用户ID列表</p>
     */
    public $RemoveUserIds;

    /**
     * @var array <p>移除可以操作此命名空间的用户组ID列表</p>
     */
    public $RemoveGroupIds;

    /**
     * @var array <p>该命名空间下的服务对哪些命名空间可见</p>
     */
    public $ServiceExportTo;

    /**
     * @var boolean <p>是否开启同步到全局注册中心</p>
     */
    public $SyncToGlobalRegistry;

    /**
     * @var array <p>元数据</p>
     */
    public $Metadatas;

    /**
     * @param string $Name <p>命名空间名称。</p>
     * @param string $Comment <p>命名空间描述信息。</p>
     * @param string $CreateTime <p>创建时间。</p>
     * @param string $ModifyTime <p>修改时间。</p>
     * @param integer $TotalServiceCount <p>命名空间下总服务数据量</p>
     * @param integer $TotalHealthInstanceCount <p>命名空间下总健康实例数量</p>
     * @param integer $TotalInstanceCount <p>命名空间下总实例数量</p>
     * @param string $Id <p>命名空间ID</p>
     * @param boolean $Editable <p>是否可以编辑</p>
     * @param array $UserIds <p>可以操作此命名空间的用户ID列表</p>
     * @param array $GroupIds <p>可以操作此命名空间的用户组ID列表</p>
     * @param array $RemoveUserIds <p>移除可以操作此命名空间的用户ID列表</p>
     * @param array $RemoveGroupIds <p>移除可以操作此命名空间的用户组ID列表</p>
     * @param array $ServiceExportTo <p>该命名空间下的服务对哪些命名空间可见</p>
     * @param boolean $SyncToGlobalRegistry <p>是否开启同步到全局注册中心</p>
     * @param array $Metadatas <p>元数据</p>
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
