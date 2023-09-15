<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChannelCreateRole请求参数结构体
 *
 * @method string getName() 获取角色名称，最大长度为20个字符，仅限中文、字母、数字和下划线组成。
 * @method void setName(string $Name) 设置角色名称，最大长度为20个字符，仅限中文、字母、数字和下划线组成。
 * @method Agent getAgent() 获取代理企业和员工的信息。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
 * @method string getDescription() 获取角色描述，最大长度为50个字符
 * @method void setDescription(string $Description) 设置角色描述，最大长度为50个字符
 * @method array getPermissionGroups() 获取权限树，权限树内容 PermissionGroups 可参考接口 DescribeIntegrationRoles 的输出
 * @method void setPermissionGroups(array $PermissionGroups) 设置权限树，权限树内容 PermissionGroups 可参考接口 DescribeIntegrationRoles 的输出
 */
class ChannelCreateRoleRequest extends AbstractModel
{
    /**
     * @var string 角色名称，最大长度为20个字符，仅限中文、字母、数字和下划线组成。
     */
    public $Name;

    /**
     * @var Agent 代理企业和员工的信息。
     */
    public $Agent;

    /**
     * @var string 角色描述，最大长度为50个字符
     */
    public $Description;

    /**
     * @var array 权限树，权限树内容 PermissionGroups 可参考接口 DescribeIntegrationRoles 的输出
     */
    public $PermissionGroups;

    /**
     * @param string $Name 角色名称，最大长度为20个字符，仅限中文、字母、数字和下划线组成。
     * @param Agent $Agent 代理企业和员工的信息。
     * @param string $Description 角色描述，最大长度为50个字符
     * @param array $PermissionGroups 权限树，权限树内容 PermissionGroups 可参考接口 DescribeIntegrationRoles 的输出
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

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PermissionGroups",$param) and $param["PermissionGroups"] !== null) {
            $this->PermissionGroups = [];
            foreach ($param["PermissionGroups"] as $key => $value){
                $obj = new PermissionGroup();
                $obj->deserialize($value);
                array_push($this->PermissionGroups, $obj);
            }
        }
    }
}
