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
 * @method string getName() 获取<p>服务名。</p>
 * @method void setName(string $Name) 设置<p>服务名。</p>
 * @method string getNamespace() 获取<p>服务所属命名空间。</p>
 * @method void setNamespace(string $Namespace) 设置<p>服务所属命名空间。</p>
 * @method string getComment() 获取<p>服务描述信息。</p>
 * @method void setComment(string $Comment) 设置<p>服务描述信息。</p>
 * @method array getMetadatas() 获取<p>服务元数据。</p>
 * @method void setMetadatas(array $Metadatas) 设置<p>服务元数据。</p>
 * @method string getDepartment() 获取<p>服务所属部门。</p>
 * @method void setDepartment(string $Department) 设置<p>服务所属部门。</p>
 * @method string getBusiness() 获取<p>服务所属业务。</p>
 * @method void setBusiness(string $Business) 设置<p>服务所属业务。</p>
 * @method array getUserIds() 获取<p>被添加进来可以操作此命名空间的用户ID列表</p>
 * @method void setUserIds(array $UserIds) 设置<p>被添加进来可以操作此命名空间的用户ID列表</p>
 * @method array getGroupIds() 获取<p>被添加进来可以操作此命名空间的用户组ID列表</p>
 * @method void setGroupIds(array $GroupIds) 设置<p>被添加进来可以操作此命名空间的用户组ID列表</p>
 * @method array getRemoveUserIds() 获取<p>从操作此命名空间的用户组ID列表被移除的ID列表</p>
 * @method void setRemoveUserIds(array $RemoveUserIds) 设置<p>从操作此命名空间的用户组ID列表被移除的ID列表</p>
 * @method array getRemoveGroupIds() 获取<p>从可以操作此命名空间的用户组ID列表中被移除的ID列表</p>
 * @method void setRemoveGroupIds(array $RemoveGroupIds) 设置<p>从可以操作此命名空间的用户组ID列表中被移除的ID列表</p>
 * @method array getExportTo() 获取<p>该服务对哪些命名空间可见</p>
 * @method void setExportTo(array $ExportTo) 设置<p>该服务对哪些命名空间可见</p>
 * @method boolean getSyncToGlobalRegistry() 获取<p>是否开启同步到全局注册中心</p>
 * @method void setSyncToGlobalRegistry(boolean $SyncToGlobalRegistry) 设置<p>是否开启同步到全局注册中心</p>
 * @method integer getType() 获取<p>服务类型</p><p>枚举值：</p><ul><li>0： 微服务（默认）</li><li>1： MCP Server</li><li>2： AI Agent</li></ul><p>默认值：0</p>
 * @method void setType(integer $Type) 设置<p>服务类型</p><p>枚举值：</p><ul><li>0： 微服务（默认）</li><li>1： MCP Server</li><li>2： AI Agent</li></ul><p>默认值：0</p>
 */
class GovernanceServiceInput extends AbstractModel
{
    /**
     * @var string <p>服务名。</p>
     */
    public $Name;

    /**
     * @var string <p>服务所属命名空间。</p>
     */
    public $Namespace;

    /**
     * @var string <p>服务描述信息。</p>
     */
    public $Comment;

    /**
     * @var array <p>服务元数据。</p>
     */
    public $Metadatas;

    /**
     * @var string <p>服务所属部门。</p>
     */
    public $Department;

    /**
     * @var string <p>服务所属业务。</p>
     */
    public $Business;

    /**
     * @var array <p>被添加进来可以操作此命名空间的用户ID列表</p>
     */
    public $UserIds;

    /**
     * @var array <p>被添加进来可以操作此命名空间的用户组ID列表</p>
     */
    public $GroupIds;

    /**
     * @var array <p>从操作此命名空间的用户组ID列表被移除的ID列表</p>
     */
    public $RemoveUserIds;

    /**
     * @var array <p>从可以操作此命名空间的用户组ID列表中被移除的ID列表</p>
     */
    public $RemoveGroupIds;

    /**
     * @var array <p>该服务对哪些命名空间可见</p>
     */
    public $ExportTo;

    /**
     * @var boolean <p>是否开启同步到全局注册中心</p>
     */
    public $SyncToGlobalRegistry;

    /**
     * @var integer <p>服务类型</p><p>枚举值：</p><ul><li>0： 微服务（默认）</li><li>1： MCP Server</li><li>2： AI Agent</li></ul><p>默认值：0</p>
     */
    public $Type;

    /**
     * @param string $Name <p>服务名。</p>
     * @param string $Namespace <p>服务所属命名空间。</p>
     * @param string $Comment <p>服务描述信息。</p>
     * @param array $Metadatas <p>服务元数据。</p>
     * @param string $Department <p>服务所属部门。</p>
     * @param string $Business <p>服务所属业务。</p>
     * @param array $UserIds <p>被添加进来可以操作此命名空间的用户ID列表</p>
     * @param array $GroupIds <p>被添加进来可以操作此命名空间的用户组ID列表</p>
     * @param array $RemoveUserIds <p>从操作此命名空间的用户组ID列表被移除的ID列表</p>
     * @param array $RemoveGroupIds <p>从可以操作此命名空间的用户组ID列表中被移除的ID列表</p>
     * @param array $ExportTo <p>该服务对哪些命名空间可见</p>
     * @param boolean $SyncToGlobalRegistry <p>是否开启同步到全局注册中心</p>
     * @param integer $Type <p>服务类型</p><p>枚举值：</p><ul><li>0： 微服务（默认）</li><li>1： MCP Server</li><li>2： AI Agent</li></ul><p>默认值：0</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
