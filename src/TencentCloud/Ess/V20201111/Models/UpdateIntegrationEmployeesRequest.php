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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateIntegrationEmployees请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息,UserId必填。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息,UserId必填。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method array getEmployees() 获取员工信息，不超过100个。
根据UserId或OpenId更新员工，必填一个，优先UserId。
可更新Mobile、DisplayName、Email和Department.DepartmentId字段，其他字段暂不支持
 * @method void setEmployees(array $Employees) 设置员工信息，不超过100个。
根据UserId或OpenId更新员工，必填一个，优先UserId。
可更新Mobile、DisplayName、Email和Department.DepartmentId字段，其他字段暂不支持
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method string getInvitationNotifyType() 获取员工邀请方式
如果是来自H5的，参数需要传递H5
短信或者企微 请传递SMS，或者不传递
 * @method void setInvitationNotifyType(string $InvitationNotifyType) 设置员工邀请方式
如果是来自H5的，参数需要传递H5
短信或者企微 请传递SMS，或者不传递
 * @method string getJumpUrl() 获取回跳地址，
在认证成功之后，进行回跳，请保证回跳地址的可用性。
使用前请联系对接的客户经理沟通，提供回跳地址的域名，进行域名配置。
 * @method void setJumpUrl(string $JumpUrl) 设置回跳地址，
在认证成功之后，进行回跳，请保证回跳地址的可用性。
使用前请联系对接的客户经理沟通，提供回跳地址的域名，进行域名配置。
 */
class UpdateIntegrationEmployeesRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息,UserId必填。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var array 员工信息，不超过100个。
根据UserId或OpenId更新员工，必填一个，优先UserId。
可更新Mobile、DisplayName、Email和Department.DepartmentId字段，其他字段暂不支持
     */
    public $Employees;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var string 员工邀请方式
如果是来自H5的，参数需要传递H5
短信或者企微 请传递SMS，或者不传递
     */
    public $InvitationNotifyType;

    /**
     * @var string 回跳地址，
在认证成功之后，进行回跳，请保证回跳地址的可用性。
使用前请联系对接的客户经理沟通，提供回跳地址的域名，进行域名配置。
     */
    public $JumpUrl;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息,UserId必填。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param array $Employees 员工信息，不超过100个。
根据UserId或OpenId更新员工，必填一个，优先UserId。
可更新Mobile、DisplayName、Email和Department.DepartmentId字段，其他字段暂不支持
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param string $InvitationNotifyType 员工邀请方式
如果是来自H5的，参数需要传递H5
短信或者企微 请传递SMS，或者不传递
     * @param string $JumpUrl 回跳地址，
在认证成功之后，进行回跳，请保证回跳地址的可用性。
使用前请联系对接的客户经理沟通，提供回跳地址的域名，进行域名配置。
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Employees",$param) and $param["Employees"] !== null) {
            $this->Employees = [];
            foreach ($param["Employees"] as $key => $value){
                $obj = new Staff();
                $obj->deserialize($value);
                array_push($this->Employees, $obj);
            }
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("InvitationNotifyType",$param) and $param["InvitationNotifyType"] !== null) {
            $this->InvitationNotifyType = $param["InvitationNotifyType"];
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }
    }
}
