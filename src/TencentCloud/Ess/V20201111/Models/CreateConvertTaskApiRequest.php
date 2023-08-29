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
 * CreateConvertTaskApi请求参数结构体
 *
 * @method string getResourceType() 获取资源类型 支持doc,docx,html,xls,xlsx,jpg,jpeg,png,bmp文件类型
 * @method void setResourceType(string $ResourceType) 设置资源类型 支持doc,docx,html,xls,xlsx,jpg,jpeg,png,bmp文件类型
 * @method string getResourceName() 获取资源名称，长度限制为256字符
 * @method void setResourceName(string $ResourceName) 设置资源名称，长度限制为256字符
 * @method string getResourceId() 获取文件Id，通过UploadFiles获取
 * @method void setResourceId(string $ResourceId) 设置文件Id，通过UploadFiles获取
 * @method UserInfo getOperator() 获取调用方用户信息，userId 必填
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，userId 必填
 * @method Agent getAgent() 获取代理企业和员工的信息。 在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。 在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method OrganizationInfo getOrganization() 获取暂未开放
 * @method void setOrganization(OrganizationInfo $Organization) 设置暂未开放
 */
class CreateConvertTaskApiRequest extends AbstractModel
{
    /**
     * @var string 资源类型 支持doc,docx,html,xls,xlsx,jpg,jpeg,png,bmp文件类型
     */
    public $ResourceType;

    /**
     * @var string 资源名称，长度限制为256字符
     */
    public $ResourceName;

    /**
     * @var string 文件Id，通过UploadFiles获取
     */
    public $ResourceId;

    /**
     * @var UserInfo 调用方用户信息，userId 必填
     */
    public $Operator;

    /**
     * @var Agent 代理企业和员工的信息。 在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var OrganizationInfo 暂未开放
     * @deprecated
     */
    public $Organization;

    /**
     * @param string $ResourceType 资源类型 支持doc,docx,html,xls,xlsx,jpg,jpeg,png,bmp文件类型
     * @param string $ResourceName 资源名称，长度限制为256字符
     * @param string $ResourceId 文件Id，通过UploadFiles获取
     * @param UserInfo $Operator 调用方用户信息，userId 必填
     * @param Agent $Agent 代理企业和员工的信息。 在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param OrganizationInfo $Organization 暂未开放
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Organization",$param) and $param["Organization"] !== null) {
            $this->Organization = new OrganizationInfo();
            $this->Organization->deserialize($param["Organization"]);
        }
    }
}
