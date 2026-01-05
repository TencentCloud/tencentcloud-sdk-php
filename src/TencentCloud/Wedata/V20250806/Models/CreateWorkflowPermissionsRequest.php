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
 * CreateWorkflowPermissions请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getEntityId() 获取授权实体ID
 * @method void setEntityId(string $EntityId) 设置授权实体ID
 * @method string getEntityType() 获取授权实体类型,folder/workflow
 * @method void setEntityType(string $EntityType) 设置授权实体类型,folder/workflow
 * @method array getPermissionList() 获取授权信息数组
 * @method void setPermissionList(array $PermissionList) 设置授权信息数组
 */
class CreateWorkflowPermissionsRequest extends AbstractModel
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
     * @var array 授权信息数组
     */
    public $PermissionList;

    /**
     * @param string $ProjectId 项目id
     * @param string $EntityId 授权实体ID
     * @param string $EntityType 授权实体类型,folder/workflow
     * @param array $PermissionList 授权信息数组
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

        if (array_key_exists("PermissionList",$param) and $param["PermissionList"] !== null) {
            $this->PermissionList = [];
            foreach ($param["PermissionList"] as $key => $value){
                $obj = new WorkflowPermission();
                $obj->deserialize($value);
                array_push($this->PermissionList, $obj);
            }
        }
    }
}
