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
 * CreateSchemeUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取调用方用户信息，userId 必填
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，userId 必填
 * @method string getOrganizationName() 获取企业名称
 * @method void setOrganizationName(string $OrganizationName) 设置企业名称
 * @method string getName() 获取姓名,最大长度50个字符
 * @method void setName(string $Name) 设置姓名,最大长度50个字符
 * @method string getMobile() 获取手机号，大陆手机号11位
 * @method void setMobile(string $Mobile) 设置手机号，大陆手机号11位
 * @method string getEndPoint() 获取链接类型
HTTP：跳转电子签小程序的http_url，
APP：第三方APP或小程序跳转电子签小程序的path。
默认为HTTP类型
 * @method void setEndPoint(string $EndPoint) 设置链接类型
HTTP：跳转电子签小程序的http_url，
APP：第三方APP或小程序跳转电子签小程序的path。
默认为HTTP类型
 * @method string getFlowId() 获取签署流程编号 (PathType=1时必传)
 * @method void setFlowId(string $FlowId) 设置签署流程编号 (PathType=1时必传)
 * @method integer getPathType() 获取跳转页面 1: 小程序合同详情 2: 小程序合同列表页 0: 不传, 默认主页
 * @method void setPathType(integer $PathType) 设置跳转页面 1: 小程序合同详情 2: 小程序合同列表页 0: 不传, 默认主页
 * @method boolean getAutoJumpBack() 获取是否自动回跳 true：是， false：否。该参数只针对"APP" 类型的签署链接有效
 * @method void setAutoJumpBack(boolean $AutoJumpBack) 设置是否自动回跳 true：是， false：否。该参数只针对"APP" 类型的签署链接有效
 * @method Agent getAgent() 获取代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method void setAgent(Agent $Agent) 设置代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 */
class CreateSchemeUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo 调用方用户信息，userId 必填
     */
    public $Operator;

    /**
     * @var string 企业名称
     */
    public $OrganizationName;

    /**
     * @var string 姓名,最大长度50个字符
     */
    public $Name;

    /**
     * @var string 手机号，大陆手机号11位
     */
    public $Mobile;

    /**
     * @var string 链接类型
HTTP：跳转电子签小程序的http_url，
APP：第三方APP或小程序跳转电子签小程序的path。
默认为HTTP类型
     */
    public $EndPoint;

    /**
     * @var string 签署流程编号 (PathType=1时必传)
     */
    public $FlowId;

    /**
     * @var integer 跳转页面 1: 小程序合同详情 2: 小程序合同列表页 0: 不传, 默认主页
     */
    public $PathType;

    /**
     * @var boolean 是否自动回跳 true：是， false：否。该参数只针对"APP" 类型的签署链接有效
     */
    public $AutoJumpBack;

    /**
     * @var Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     */
    public $Agent;

    /**
     * @param UserInfo $Operator 调用方用户信息，userId 必填
     * @param string $OrganizationName 企业名称
     * @param string $Name 姓名,最大长度50个字符
     * @param string $Mobile 手机号，大陆手机号11位
     * @param string $EndPoint 链接类型
HTTP：跳转电子签小程序的http_url，
APP：第三方APP或小程序跳转电子签小程序的path。
默认为HTTP类型
     * @param string $FlowId 签署流程编号 (PathType=1时必传)
     * @param integer $PathType 跳转页面 1: 小程序合同详情 2: 小程序合同列表页 0: 不传, 默认主页
     * @param boolean $AutoJumpBack 是否自动回跳 true：是， false：否。该参数只针对"APP" 类型的签署链接有效
     * @param Agent $Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
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

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("EndPoint",$param) and $param["EndPoint"] !== null) {
            $this->EndPoint = $param["EndPoint"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("PathType",$param) and $param["PathType"] !== null) {
            $this->PathType = $param["PathType"];
        }

        if (array_key_exists("AutoJumpBack",$param) and $param["AutoJumpBack"] !== null) {
            $this->AutoJumpBack = $param["AutoJumpBack"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
