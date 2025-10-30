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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChannelCreateFlowGroupByFiles请求参数结构体
 *
 * @method array getFlowFileInfos() 获取合同组中每个合同签署流程的信息，合同组中最少包含2个合同，不能超过50个合同。
 * @method void setFlowFileInfos(array $FlowFileInfos) 设置合同组中每个合同签署流程的信息，合同组中最少包含2个合同，不能超过50个合同。
 * @method string getFlowGroupName() 获取合同组的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
 * @method void setFlowGroupName(string $FlowGroupName) 设置合同组的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
 * @method Agent getAgent() 获取合同的发起企业和发起人信息，<a href="https://qcloudimg.tencent-cloud.cn/raw/b69f8aad306c40b7b78d096e39b2edbb.png" target="_blank">点击查看合同发起企业和人展示的位置</a>

此接口下面信息必填。
<ul>
<li>渠道应用标识: <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（合同的发起企业）</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （合同的发起人）</li>
</ul>

合同的发起企业和发起人必需已经完成实名，并加入企业
 * @method void setAgent(Agent $Agent) 设置合同的发起企业和发起人信息，<a href="https://qcloudimg.tencent-cloud.cn/raw/b69f8aad306c40b7b78d096e39b2edbb.png" target="_blank">点击查看合同发起企业和人展示的位置</a>

此接口下面信息必填。
<ul>
<li>渠道应用标识: <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（合同的发起企业）</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （合同的发起人）</li>
</ul>

合同的发起企业和发起人必需已经完成实名，并加入企业
 * @method string getApproverVerifyType() 获取合同组中签署人校验和认证的方式：
<ul><li>**VerifyCheck**：人脸识别（默认）</li>
<li>**MobileCheck**：手机号验证</li></ul>
注意：
`1. MobileCheck 方式，未实名的个人/自然人签署方无需进行人脸识别实名认证即可查看合同（但签署合同时仍然需要人脸实名），企业签署方需经过人脸认证。`
`2. 合同组的校验和认证的方式会优先使用，会覆盖合同组中单个合同和合同签署方认证方式的限制配置。`
 * @method void setApproverVerifyType(string $ApproverVerifyType) 设置合同组中签署人校验和认证的方式：
<ul><li>**VerifyCheck**：人脸识别（默认）</li>
<li>**MobileCheck**：手机号验证</li></ul>
注意：
`1. MobileCheck 方式，未实名的个人/自然人签署方无需进行人脸识别实名认证即可查看合同（但签署合同时仍然需要人脸实名），企业签署方需经过人脸认证。`
`2. 合同组的校验和认证的方式会优先使用，会覆盖合同组中单个合同和合同签署方认证方式的限制配置。`
 * @method FlowGroupOptions getFlowGroupOptions() 获取合同组的签署配置项信息，例如在合同组签署过程中，是否需要对每个子合同进行独立的意愿确认。
 * @method void setFlowGroupOptions(FlowGroupOptions $FlowGroupOptions) 设置合同组的签署配置项信息，例如在合同组签署过程中，是否需要对每个子合同进行独立的意愿确认。
 * @method UserInfo getOperator() 获取操作者的信息，此参数不用传
 * @method void setOperator(UserInfo $Operator) 设置操作者的信息，此参数不用传
 */
class ChannelCreateFlowGroupByFilesRequest extends AbstractModel
{
    /**
     * @var array 合同组中每个合同签署流程的信息，合同组中最少包含2个合同，不能超过50个合同。
     */
    public $FlowFileInfos;

    /**
     * @var string 合同组的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
     */
    public $FlowGroupName;

    /**
     * @var Agent 合同的发起企业和发起人信息，<a href="https://qcloudimg.tencent-cloud.cn/raw/b69f8aad306c40b7b78d096e39b2edbb.png" target="_blank">点击查看合同发起企业和人展示的位置</a>

此接口下面信息必填。
<ul>
<li>渠道应用标识: <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（合同的发起企业）</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （合同的发起人）</li>
</ul>

合同的发起企业和发起人必需已经完成实名，并加入企业
     */
    public $Agent;

    /**
     * @var string 合同组中签署人校验和认证的方式：
<ul><li>**VerifyCheck**：人脸识别（默认）</li>
<li>**MobileCheck**：手机号验证</li></ul>
注意：
`1. MobileCheck 方式，未实名的个人/自然人签署方无需进行人脸识别实名认证即可查看合同（但签署合同时仍然需要人脸实名），企业签署方需经过人脸认证。`
`2. 合同组的校验和认证的方式会优先使用，会覆盖合同组中单个合同和合同签署方认证方式的限制配置。`
     */
    public $ApproverVerifyType;

    /**
     * @var FlowGroupOptions 合同组的签署配置项信息，例如在合同组签署过程中，是否需要对每个子合同进行独立的意愿确认。
     */
    public $FlowGroupOptions;

    /**
     * @var UserInfo 操作者的信息，此参数不用传
     * @deprecated
     */
    public $Operator;

    /**
     * @param array $FlowFileInfos 合同组中每个合同签署流程的信息，合同组中最少包含2个合同，不能超过50个合同。
     * @param string $FlowGroupName 合同组的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。
     * @param Agent $Agent 合同的发起企业和发起人信息，<a href="https://qcloudimg.tencent-cloud.cn/raw/b69f8aad306c40b7b78d096e39b2edbb.png" target="_blank">点击查看合同发起企业和人展示的位置</a>

此接口下面信息必填。
<ul>
<li>渠道应用标识: <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId（合同的发起企业）</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId （合同的发起人）</li>
</ul>

合同的发起企业和发起人必需已经完成实名，并加入企业
     * @param string $ApproverVerifyType 合同组中签署人校验和认证的方式：
<ul><li>**VerifyCheck**：人脸识别（默认）</li>
<li>**MobileCheck**：手机号验证</li></ul>
注意：
`1. MobileCheck 方式，未实名的个人/自然人签署方无需进行人脸识别实名认证即可查看合同（但签署合同时仍然需要人脸实名），企业签署方需经过人脸认证。`
`2. 合同组的校验和认证的方式会优先使用，会覆盖合同组中单个合同和合同签署方认证方式的限制配置。`
     * @param FlowGroupOptions $FlowGroupOptions 合同组的签署配置项信息，例如在合同组签署过程中，是否需要对每个子合同进行独立的意愿确认。
     * @param UserInfo $Operator 操作者的信息，此参数不用传
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
        if (array_key_exists("FlowFileInfos",$param) and $param["FlowFileInfos"] !== null) {
            $this->FlowFileInfos = [];
            foreach ($param["FlowFileInfos"] as $key => $value){
                $obj = new FlowFileInfo();
                $obj->deserialize($value);
                array_push($this->FlowFileInfos, $obj);
            }
        }

        if (array_key_exists("FlowGroupName",$param) and $param["FlowGroupName"] !== null) {
            $this->FlowGroupName = $param["FlowGroupName"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ApproverVerifyType",$param) and $param["ApproverVerifyType"] !== null) {
            $this->ApproverVerifyType = $param["ApproverVerifyType"];
        }

        if (array_key_exists("FlowGroupOptions",$param) and $param["FlowGroupOptions"] !== null) {
            $this->FlowGroupOptions = new FlowGroupOptions();
            $this->FlowGroupOptions->deserialize($param["FlowGroupOptions"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
