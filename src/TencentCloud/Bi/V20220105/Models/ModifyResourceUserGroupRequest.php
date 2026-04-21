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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyResourceUserGroup请求参数结构体
 *
 * @method integer getProjectId() 获取项目Id
 * @method void setProjectId(integer $ProjectId) 设置项目Id
 * @method array getUserGroupIds() 获取用户组id集合
 * @method void setUserGroupIds(array $UserGroupIds) 设置用户组id集合
 * @method ResourceListDTO getResource() 获取操作的资源权限
 * @method void setResource(ResourceListDTO $Resource) 设置操作的资源权限
 * @method string getResourceType() 获取资源类型
 * @method void setResourceType(string $ResourceType) 设置资源类型
 * @method boolean getQueryChildren() 获取是否查询所有孩子节点
 * @method void setQueryChildren(boolean $QueryChildren) 设置是否查询所有孩子节点
 */
class ModifyResourceUserGroupRequest extends AbstractModel
{
    /**
     * @var integer 项目Id
     */
    public $ProjectId;

    /**
     * @var array 用户组id集合
     */
    public $UserGroupIds;

    /**
     * @var ResourceListDTO 操作的资源权限
     */
    public $Resource;

    /**
     * @var string 资源类型
     */
    public $ResourceType;

    /**
     * @var boolean 是否查询所有孩子节点
     */
    public $QueryChildren;

    /**
     * @param integer $ProjectId 项目Id
     * @param array $UserGroupIds 用户组id集合
     * @param ResourceListDTO $Resource 操作的资源权限
     * @param string $ResourceType 资源类型
     * @param boolean $QueryChildren 是否查询所有孩子节点
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("UserGroupIds",$param) and $param["UserGroupIds"] !== null) {
            $this->UserGroupIds = $param["UserGroupIds"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new ResourceListDTO();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("QueryChildren",$param) and $param["QueryChildren"] !== null) {
            $this->QueryChildren = $param["QueryChildren"];
        }
    }
}
