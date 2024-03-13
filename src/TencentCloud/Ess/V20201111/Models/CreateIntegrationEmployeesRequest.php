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
 * CreateIntegrationEmployees请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。使用此接口时，必须填写userId。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。使用此接口时，必须填写userId。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method array getEmployees() 获取待创建员工的信息最多不超过20个。

**1. 在创建企业微信员工的场景下** :  只需传入下面的参数，其他信息不支持设置。
<table> <thead> <tr> <th>参数</th> <th>是否必填</th> <th>含义</th> </tr> </thead> <tbody> <tr> <td>WeworkOpenId</td> <td>是</td> <td>企业微信用户账号ID</td> </tr> </tbody> </table>

**2. 在其他场景下** :   只需传入下面的参数，其他信息不支持设置。
<table> <thead> <tr> <th>参数</th> <th>是否必填</th> <th>含义</th> </tr> </thead> <tbody> <tr> <td>DisplayName</td> <td>是</td> <td>用户的真实名字</td> </tr> <tr> <td>Mobile</td> <td>是</td> <td>用户手机号码</td> </tr> <tr> <td>OpenId</td> <td>否</td> <td>用户的自定义ID</td> </tr> <tr> <td>Email</td> <td>否</td> <td>用户的邮箱</td> </tr> <tr> <td>Department.DepartmentId</td> <td>否</td> <td>用户加入后的部门ID</td> </tr> </tbody> </table>


注: `每个手机号每天最多使用3次`
 * @method void setEmployees(array $Employees) 设置待创建员工的信息最多不超过20个。

**1. 在创建企业微信员工的场景下** :  只需传入下面的参数，其他信息不支持设置。
<table> <thead> <tr> <th>参数</th> <th>是否必填</th> <th>含义</th> </tr> </thead> <tbody> <tr> <td>WeworkOpenId</td> <td>是</td> <td>企业微信用户账号ID</td> </tr> </tbody> </table>

**2. 在其他场景下** :   只需传入下面的参数，其他信息不支持设置。
<table> <thead> <tr> <th>参数</th> <th>是否必填</th> <th>含义</th> </tr> </thead> <tbody> <tr> <td>DisplayName</td> <td>是</td> <td>用户的真实名字</td> </tr> <tr> <td>Mobile</td> <td>是</td> <td>用户手机号码</td> </tr> <tr> <td>OpenId</td> <td>否</td> <td>用户的自定义ID</td> </tr> <tr> <td>Email</td> <td>否</td> <td>用户的邮箱</td> </tr> <tr> <td>Department.DepartmentId</td> <td>否</td> <td>用户加入后的部门ID</td> </tr> </tbody> </table>


注: `每个手机号每天最多使用3次`
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method string getInvitationNotifyType() 获取员工邀请方式可通过以下方式进行设置：

**H5**：会生成H5的链接，点击链接进入H5的认证加入企业的逻辑。
**SMS（默认）**：会通过短信或企业微信消息进行邀请。如果非企业微信场景，则是企业微信消息。其他场景则是短信通知，短信中包含链接，点击后进入微信小程序进行认证加入企业的逻辑。
 * @method void setInvitationNotifyType(string $InvitationNotifyType) 设置员工邀请方式可通过以下方式进行设置：

**H5**：会生成H5的链接，点击链接进入H5的认证加入企业的逻辑。
**SMS（默认）**：会通过短信或企业微信消息进行邀请。如果非企业微信场景，则是企业微信消息。其他场景则是短信通知，短信中包含链接，点击后进入微信小程序进行认证加入企业的逻辑。
 * @method string getJumpUrl() 获取回跳地址，为认证成功后页面进行回跳的URL，请确保回跳地址的可用性。

注：`只有在员工邀请方式（InvitationNotifyType参数）为H5场景下才生效， 其他方式下设置无效。`

 * @method void setJumpUrl(string $JumpUrl) 设置回跳地址，为认证成功后页面进行回跳的URL，请确保回跳地址的可用性。

注：`只有在员工邀请方式（InvitationNotifyType参数）为H5场景下才生效， 其他方式下设置无效。`
 */
class CreateIntegrationEmployeesRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。使用此接口时，必须填写userId。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var array 待创建员工的信息最多不超过20个。

**1. 在创建企业微信员工的场景下** :  只需传入下面的参数，其他信息不支持设置。
<table> <thead> <tr> <th>参数</th> <th>是否必填</th> <th>含义</th> </tr> </thead> <tbody> <tr> <td>WeworkOpenId</td> <td>是</td> <td>企业微信用户账号ID</td> </tr> </tbody> </table>

**2. 在其他场景下** :   只需传入下面的参数，其他信息不支持设置。
<table> <thead> <tr> <th>参数</th> <th>是否必填</th> <th>含义</th> </tr> </thead> <tbody> <tr> <td>DisplayName</td> <td>是</td> <td>用户的真实名字</td> </tr> <tr> <td>Mobile</td> <td>是</td> <td>用户手机号码</td> </tr> <tr> <td>OpenId</td> <td>否</td> <td>用户的自定义ID</td> </tr> <tr> <td>Email</td> <td>否</td> <td>用户的邮箱</td> </tr> <tr> <td>Department.DepartmentId</td> <td>否</td> <td>用户加入后的部门ID</td> </tr> </tbody> </table>


注: `每个手机号每天最多使用3次`
     */
    public $Employees;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var string 员工邀请方式可通过以下方式进行设置：

**H5**：会生成H5的链接，点击链接进入H5的认证加入企业的逻辑。
**SMS（默认）**：会通过短信或企业微信消息进行邀请。如果非企业微信场景，则是企业微信消息。其他场景则是短信通知，短信中包含链接，点击后进入微信小程序进行认证加入企业的逻辑。
     */
    public $InvitationNotifyType;

    /**
     * @var string 回跳地址，为认证成功后页面进行回跳的URL，请确保回跳地址的可用性。

注：`只有在员工邀请方式（InvitationNotifyType参数）为H5场景下才生效， 其他方式下设置无效。`

     */
    public $JumpUrl;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。使用此接口时，必须填写userId。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param array $Employees 待创建员工的信息最多不超过20个。

**1. 在创建企业微信员工的场景下** :  只需传入下面的参数，其他信息不支持设置。
<table> <thead> <tr> <th>参数</th> <th>是否必填</th> <th>含义</th> </tr> </thead> <tbody> <tr> <td>WeworkOpenId</td> <td>是</td> <td>企业微信用户账号ID</td> </tr> </tbody> </table>

**2. 在其他场景下** :   只需传入下面的参数，其他信息不支持设置。
<table> <thead> <tr> <th>参数</th> <th>是否必填</th> <th>含义</th> </tr> </thead> <tbody> <tr> <td>DisplayName</td> <td>是</td> <td>用户的真实名字</td> </tr> <tr> <td>Mobile</td> <td>是</td> <td>用户手机号码</td> </tr> <tr> <td>OpenId</td> <td>否</td> <td>用户的自定义ID</td> </tr> <tr> <td>Email</td> <td>否</td> <td>用户的邮箱</td> </tr> <tr> <td>Department.DepartmentId</td> <td>否</td> <td>用户加入后的部门ID</td> </tr> </tbody> </table>


注: `每个手机号每天最多使用3次`
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param string $InvitationNotifyType 员工邀请方式可通过以下方式进行设置：

**H5**：会生成H5的链接，点击链接进入H5的认证加入企业的逻辑。
**SMS（默认）**：会通过短信或企业微信消息进行邀请。如果非企业微信场景，则是企业微信消息。其他场景则是短信通知，短信中包含链接，点击后进入微信小程序进行认证加入企业的逻辑。
     * @param string $JumpUrl 回跳地址，为认证成功后页面进行回跳的URL，请确保回跳地址的可用性。

注：`只有在员工邀请方式（InvitationNotifyType参数）为H5场景下才生效， 其他方式下设置无效。`
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
