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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteWorkflowPermissions请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getEntityId() 获取授权实体ID
 * @method void setEntityId(string $EntityId) 设置授权实体ID
 * @method string getEntityType() 获取授权实体类型,folder/workflow
 * @method void setEntityType(string $EntityType) 设置授权实体类型,folder/workflow
 * @method array getDeletePermissionList() 获取删除权限数组
 * @method void setDeletePermissionList(array $DeletePermissionList) 设置删除权限数组
 */
class DeleteWorkflowPermissionsRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 授权实体ID
     */
    public $EntityId;

    /**
     * @var string 授权实体类型,folder/workflow
     */
    public $EntityType;

    /**
     * @var array 删除权限数组
     */
    public $DeletePermissionList;

    /**
     * @param string $ProjectId 项目id
     * @param string $EntityId 授权实体ID
     * @param string $EntityType 授权实体类型,folder/workflow
     * @param array $DeletePermissionList 删除权限数组
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

        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }

        if (array_key_exists("DeletePermissionList",$param) and $param["DeletePermissionList"] !== null) {
            $this->DeletePermissionList = [];
            foreach ($param["DeletePermissionList"] as $key => $value){
                $obj = new DeleteWorkflowPermission();
                $obj->deserialize($value);
                array_push($this->DeletePermissionList, $obj);
            }
        }
    }
}
