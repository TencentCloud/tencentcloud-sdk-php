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
 * @method string getResourceId() 获取资源Id
 * @method void setResourceId(string $ResourceId) 设置资源Id
 * @method string getResourceType() 获取资源类型 取值范围doc,docx,html之一
 * @method void setResourceType(string $ResourceType) 设置资源类型 取值范围doc,docx,html之一
 * @method string getResourceName() 获取资源名称
 * @method void setResourceName(string $ResourceName) 设置资源名称
 * @method OrganizationInfo getOrganization() 获取无
 * @method void setOrganization(OrganizationInfo $Organization) 设置无
 * @method UserInfo getOperator() 获取无
 * @method void setOperator(UserInfo $Operator) 设置无
 * @method Agent getAgent() 获取无
 * @method void setAgent(Agent $Agent) 设置无
 */
class CreateConvertTaskApiRequest extends AbstractModel
{
    /**
     * @var string 资源Id
     */
    public $ResourceId;

    /**
     * @var string 资源类型 取值范围doc,docx,html之一
     */
    public $ResourceType;

    /**
     * @var string 资源名称
     */
    public $ResourceName;

    /**
     * @var OrganizationInfo 无
     */
    public $Organization;

    /**
     * @var UserInfo 无
     */
    public $Operator;

    /**
     * @var Agent 无
     */
    public $Agent;

    /**
     * @param string $ResourceId 资源Id
     * @param string $ResourceType 资源类型 取值范围doc,docx,html之一
     * @param string $ResourceName 资源名称
     * @param OrganizationInfo $Organization 无
     * @param UserInfo $Operator 无
     * @param Agent $Agent 无
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Organization",$param) and $param["Organization"] !== null) {
            $this->Organization = new OrganizationInfo();
            $this->Organization->deserialize($param["Organization"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
