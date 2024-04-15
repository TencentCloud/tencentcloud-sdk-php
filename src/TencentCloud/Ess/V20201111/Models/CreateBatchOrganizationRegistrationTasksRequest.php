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
 * CreateBatchOrganizationRegistrationTasks请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method array getRegistrationOrganizations() 获取组织机构注册信息。
一次最多支持10条认证流
 * @method void setRegistrationOrganizations(array $RegistrationOrganizations) 设置组织机构注册信息。
一次最多支持10条认证流
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method string getEndpoint() 获取要生成链接的类型, 可以选择的值如下: 

<ul>
<li>(默认)PC: 生成PC端的链接</li>
<li>SHORT_URL: H5跳转到电子签小程序链接的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li>
<li>APP：生成小程序跳转链接</li>
<li>H5：生成H5跳转长链接</li>
<li>SHORT_H5：生成H5跳转短链</li>
</ul>
 * @method void setEndpoint(string $Endpoint) 设置要生成链接的类型, 可以选择的值如下: 

<ul>
<li>(默认)PC: 生成PC端的链接</li>
<li>SHORT_URL: H5跳转到电子签小程序链接的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li>
<li>APP：生成小程序跳转链接</li>
<li>H5：生成H5跳转长链接</li>
<li>SHORT_H5：生成H5跳转短链</li>
</ul>
 */
class CreateBatchOrganizationRegistrationTasksRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var array 组织机构注册信息。
一次最多支持10条认证流
     */
    public $RegistrationOrganizations;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var string 要生成链接的类型, 可以选择的值如下: 

<ul>
<li>(默认)PC: 生成PC端的链接</li>
<li>SHORT_URL: H5跳转到电子签小程序链接的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li>
<li>APP：生成小程序跳转链接</li>
<li>H5：生成H5跳转长链接</li>
<li>SHORT_H5：生成H5跳转短链</li>
</ul>
     */
    public $Endpoint;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param array $RegistrationOrganizations 组织机构注册信息。
一次最多支持10条认证流
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param string $Endpoint 要生成链接的类型, 可以选择的值如下: 

<ul>
<li>(默认)PC: 生成PC端的链接</li>
<li>SHORT_URL: H5跳转到电子签小程序链接的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li>
<li>APP：生成小程序跳转链接</li>
<li>H5：生成H5跳转长链接</li>
<li>SHORT_H5：生成H5跳转短链</li>
</ul>
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

        if (array_key_exists("RegistrationOrganizations",$param) and $param["RegistrationOrganizations"] !== null) {
            $this->RegistrationOrganizations = [];
            foreach ($param["RegistrationOrganizations"] as $key => $value){
                $obj = new RegistrationOrganizationInfo();
                $obj->deserialize($value);
                array_push($this->RegistrationOrganizations, $obj);
            }
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }
    }
}
