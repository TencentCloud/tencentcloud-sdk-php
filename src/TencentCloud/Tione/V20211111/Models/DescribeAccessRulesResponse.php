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
 * DescribeAccessRules返回参数结构体
 *
 * @method array getAccessRules() 获取<p>当前用户有哪些权限</p>
 * @method void setAccessRules(array $AccessRules) 设置<p>当前用户有哪些权限</p>
 * @method array getFullAccessRules() 获取<p>权限点全量集合</p>
 * @method void setFullAccessRules(array $FullAccessRules) 设置<p>权限点全量集合</p>
 * @method array getGlobalRoles() 获取<p>当前用户拥有的空间外角色</p>
 * @method void setGlobalRoles(array $GlobalRoles) 设置<p>当前用户拥有的空间外角色</p>
 * @method array getWorkspaces() 获取<p>当前用户可见的空间列表</p>
 * @method void setWorkspaces(array $Workspaces) 设置<p>当前用户可见的空间列表</p>
 * @method array getOutsideAccessRules() 获取<p>当前用户有哪些空间外权限</p>
 * @method void setOutsideAccessRules(array $OutsideAccessRules) 设置<p>当前用户有哪些空间外权限</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAccessRulesResponse extends AbstractModel
{
    /**
     * @var array <p>当前用户有哪些权限</p>
     */
    public $AccessRules;

    /**
     * @var array <p>权限点全量集合</p>
     */
    public $FullAccessRules;

    /**
     * @var array <p>当前用户拥有的空间外角色</p>
     */
    public $GlobalRoles;

    /**
     * @var array <p>当前用户可见的空间列表</p>
     */
    public $Workspaces;

    /**
     * @var array <p>当前用户有哪些空间外权限</p>
     */
    public $OutsideAccessRules;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $AccessRules <p>当前用户有哪些权限</p>
     * @param array $FullAccessRules <p>权限点全量集合</p>
     * @param array $GlobalRoles <p>当前用户拥有的空间外角色</p>
     * @param array $Workspaces <p>当前用户可见的空间列表</p>
     * @param array $OutsideAccessRules <p>当前用户有哪些空间外权限</p>
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
        if (array_key_exists("AccessRules",$param) and $param["AccessRules"] !== null) {
            $this->AccessRules = [];
            foreach ($param["AccessRules"] as $key => $value){
                $obj = new AccessRule();
                $obj->deserialize($value);
                array_push($this->AccessRules, $obj);
            }
        }

        if (array_key_exists("FullAccessRules",$param) and $param["FullAccessRules"] !== null) {
            $this->FullAccessRules = [];
            foreach ($param["FullAccessRules"] as $key => $value){
                $obj = new AccessRule();
                $obj->deserialize($value);
                array_push($this->FullAccessRules, $obj);
            }
        }

        if (array_key_exists("GlobalRoles",$param) and $param["GlobalRoles"] !== null) {
            $this->GlobalRoles = $param["GlobalRoles"];
        }

        if (array_key_exists("Workspaces",$param) and $param["Workspaces"] !== null) {
            $this->Workspaces = [];
            foreach ($param["Workspaces"] as $key => $value){
                $obj = new Workspace();
                $obj->deserialize($value);
                array_push($this->Workspaces, $obj);
            }
        }

        if (array_key_exists("OutsideAccessRules",$param) and $param["OutsideAccessRules"] !== null) {
            $this->OutsideAccessRules = [];
            foreach ($param["OutsideAccessRules"] as $key => $value){
                $obj = new AccessRule();
                $obj->deserialize($value);
                array_push($this->OutsideAccessRules, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
