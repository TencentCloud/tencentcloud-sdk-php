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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRole返回参数结构体
 *
 * @method string getRoleId() 获取<p>角色ID</p>
 * @method void setRoleId(string $RoleId) 设置<p>角色ID</p>
 * @method string getRoleName() 获取<p>角色名称</p>
 * @method void setRoleName(string $RoleName) 设置<p>角色名称</p>
 * @method string getRoleType() 获取<p>角色类型</p>
 * @method void setRoleType(string $RoleType) 设置<p>角色类型</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method array getAccessRules() 获取<p>权限规则列表</p>
 * @method void setAccessRules(array $AccessRules) 设置<p>权限规则列表</p>
 * @method array getResourcePermissions() 获取<p>资源级权限列表</p>
 * @method void setResourcePermissions(array $ResourcePermissions) 设置<p>资源级权限列表</p>
 * @method integer getTotalCount() 获取<p>总数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>总数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRoleResponse extends AbstractModel
{
    /**
     * @var string <p>角色ID</p>
     */
    public $RoleId;

    /**
     * @var string <p>角色名称</p>
     */
    public $RoleName;

    /**
     * @var string <p>角色类型</p>
     */
    public $RoleType;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var array <p>权限规则列表</p>
     */
    public $AccessRules;

    /**
     * @var array <p>资源级权限列表</p>
     */
    public $ResourcePermissions;

    /**
     * @var integer <p>总数</p>
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $RoleId <p>角色ID</p>
     * @param string $RoleName <p>角色名称</p>
     * @param string $RoleType <p>角色类型</p>
     * @param string $Description <p>描述</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param array $AccessRules <p>权限规则列表</p>
     * @param array $ResourcePermissions <p>资源级权限列表</p>
     * @param integer $TotalCount <p>总数</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AccessRules",$param) and $param["AccessRules"] !== null) {
            $this->AccessRules = [];
            foreach ($param["AccessRules"] as $key => $value){
                $obj = new AccessRule();
                $obj->deserialize($value);
                array_push($this->AccessRules, $obj);
            }
        }

        if (array_key_exists("ResourcePermissions",$param) and $param["ResourcePermissions"] !== null) {
            $this->ResourcePermissions = [];
            foreach ($param["ResourcePermissions"] as $key => $value){
                $obj = new ResourcePermission();
                $obj->deserialize($value);
                array_push($this->ResourcePermissions, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
