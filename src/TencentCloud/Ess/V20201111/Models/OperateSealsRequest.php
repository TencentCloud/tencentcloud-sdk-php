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
 * OperateSeals请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。 注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。 注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。
 * @method Agent getAgent() 获取代理企业和员工的信息。 在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。 在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method integer getAct() 获取操作类型，int，目前支持传入以下类型：
<ul><li>1：启用印章</li></ul>
<ul><li>2：停用印章</li></ul>
 * @method void setAct(integer $Act) 设置操作类型，int，目前支持传入以下类型：
<ul><li>1：启用印章</li></ul>
<ul><li>2：停用印章</li></ul>
 * @method array getSealIds() 获取需要操作的印章ID，数组形式，印章ID可从【web控制台->印章 】获取。
 * @method void setSealIds(array $SealIds) 设置需要操作的印章ID，数组形式，印章ID可从【web控制台->印章 】获取。
 */
class OperateSealsRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。 注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。
     */
    public $Operator;

    /**
     * @var Agent 代理企业和员工的信息。 在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var integer 操作类型，int，目前支持传入以下类型：
<ul><li>1：启用印章</li></ul>
<ul><li>2：停用印章</li></ul>
     */
    public $Act;

    /**
     * @var array 需要操作的印章ID，数组形式，印章ID可从【web控制台->印章 】获取。
     */
    public $SealIds;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。 注: 在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。
     * @param Agent $Agent 代理企业和员工的信息。 在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param integer $Act 操作类型，int，目前支持传入以下类型：
<ul><li>1：启用印章</li></ul>
<ul><li>2：停用印章</li></ul>
     * @param array $SealIds 需要操作的印章ID，数组形式，印章ID可从【web控制台->印章 】获取。
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

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Act",$param) and $param["Act"] !== null) {
            $this->Act = $param["Act"];
        }

        if (array_key_exists("SealIds",$param) and $param["SealIds"] !== null) {
            $this->SealIds = $param["SealIds"];
        }
    }
}
