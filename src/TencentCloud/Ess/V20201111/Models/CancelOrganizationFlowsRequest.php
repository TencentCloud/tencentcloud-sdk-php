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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CancelOrganizationFlows请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。此接口下面信息必填。<ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证</p>
 * @method void setOperator(UserInfo $Operator) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。此接口下面信息必填。<ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证</p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method string getCancelMessage() 获取<p>撤回原因，长度不能超过200，只能由中文、字母、数字和下划线组成。 备注:<code>如果不传递撤回原因，那么默认撤回原因是 &quot;自动撤销（通过接口实现）&quot;</code></p>
 * @method void setCancelMessage(string $CancelMessage) 设置<p>撤回原因，长度不能超过200，只能由中文、字母、数字和下划线组成。 备注:<code>如果不传递撤回原因，那么默认撤回原因是 &quot;自动撤销（通过接口实现）&quot;</code></p>
 * @method integer getCancelMessageFormat() 获取<p>撤销理由自定义格式,  会展示在合同预览的界面中,  可以选择下面的组合方式：<strong>0</strong> : 默认格式,  合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以<strong>CancelMessage</strong>的理由撤销当前合同<strong>1</strong> :  合同封面页面会展示为:  发起方以<strong>CancelMessage</strong>的理由撤销当前合同<strong>2</strong> : 保留企业名称,  合同封面页面会展示为:  发起方-企业名称以<strong>CancelMessage</strong>的理由撤销当前合同<strong>3</strong> : 保留企业名称+经办人名字,  合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以<strong>CancelMessage</strong>的理由撤销当前合同注: <code>CancelMessage为撤销当前合同的理由</code><img src="https://qcloudimg.tencent-cloud.cn/raw/f16cf37dbb3a09d6569877f093b92204/channel_ChannelCancelFlow.png" alt="image"></p><p>枚举值：</p><ul><li>0： 默认格式, 合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以CancelMessage的理由撤销当前合同</li><li>1： 合同封面页面会展示为: 发起方以CancelMessage的理由撤销当前合同</li><li>2： 保留企业名称, 合同封面页面会展示为: 发起方-企业名称以CancelMessage的理由撤销当前合同</li><li>3： 保留企业名称+经办人名字, 合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以CancelMessage的理由撤销当前合同注: CancelMessage为撤销当前合同的理由</li></ul>
 * @method void setCancelMessageFormat(integer $CancelMessageFormat) 设置<p>撤销理由自定义格式,  会展示在合同预览的界面中,  可以选择下面的组合方式：<strong>0</strong> : 默认格式,  合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以<strong>CancelMessage</strong>的理由撤销当前合同<strong>1</strong> :  合同封面页面会展示为:  发起方以<strong>CancelMessage</strong>的理由撤销当前合同<strong>2</strong> : 保留企业名称,  合同封面页面会展示为:  发起方-企业名称以<strong>CancelMessage</strong>的理由撤销当前合同<strong>3</strong> : 保留企业名称+经办人名字,  合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以<strong>CancelMessage</strong>的理由撤销当前合同注: <code>CancelMessage为撤销当前合同的理由</code><img src="https://qcloudimg.tencent-cloud.cn/raw/f16cf37dbb3a09d6569877f093b92204/channel_ChannelCancelFlow.png" alt="image"></p><p>枚举值：</p><ul><li>0： 默认格式, 合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以CancelMessage的理由撤销当前合同</li><li>1： 合同封面页面会展示为: 发起方以CancelMessage的理由撤销当前合同</li><li>2： 保留企业名称, 合同封面页面会展示为: 发起方-企业名称以CancelMessage的理由撤销当前合同</li><li>3： 保留企业名称+经办人名字, 合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以CancelMessage的理由撤销当前合同注: CancelMessage为撤销当前合同的理由</li></ul>
 */
class CancelOrganizationFlowsRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。此接口下面信息必填。<ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证</p>
     */
    public $Operator;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var string <p>撤回原因，长度不能超过200，只能由中文、字母、数字和下划线组成。 备注:<code>如果不传递撤回原因，那么默认撤回原因是 &quot;自动撤销（通过接口实现）&quot;</code></p>
     */
    public $CancelMessage;

    /**
     * @var integer <p>撤销理由自定义格式,  会展示在合同预览的界面中,  可以选择下面的组合方式：<strong>0</strong> : 默认格式,  合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以<strong>CancelMessage</strong>的理由撤销当前合同<strong>1</strong> :  合同封面页面会展示为:  发起方以<strong>CancelMessage</strong>的理由撤销当前合同<strong>2</strong> : 保留企业名称,  合同封面页面会展示为:  发起方-企业名称以<strong>CancelMessage</strong>的理由撤销当前合同<strong>3</strong> : 保留企业名称+经办人名字,  合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以<strong>CancelMessage</strong>的理由撤销当前合同注: <code>CancelMessage为撤销当前合同的理由</code><img src="https://qcloudimg.tencent-cloud.cn/raw/f16cf37dbb3a09d6569877f093b92204/channel_ChannelCancelFlow.png" alt="image"></p><p>枚举值：</p><ul><li>0： 默认格式, 合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以CancelMessage的理由撤销当前合同</li><li>1： 合同封面页面会展示为: 发起方以CancelMessage的理由撤销当前合同</li><li>2： 保留企业名称, 合同封面页面会展示为: 发起方-企业名称以CancelMessage的理由撤销当前合同</li><li>3： 保留企业名称+经办人名字, 合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以CancelMessage的理由撤销当前合同注: CancelMessage为撤销当前合同的理由</li></ul>
     */
    public $CancelMessageFormat;

    /**
     * @param UserInfo $Operator <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。此接口下面信息必填。<ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证</p>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param string $CancelMessage <p>撤回原因，长度不能超过200，只能由中文、字母、数字和下划线组成。 备注:<code>如果不传递撤回原因，那么默认撤回原因是 &quot;自动撤销（通过接口实现）&quot;</code></p>
     * @param integer $CancelMessageFormat <p>撤销理由自定义格式,  会展示在合同预览的界面中,  可以选择下面的组合方式：<strong>0</strong> : 默认格式,  合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以<strong>CancelMessage</strong>的理由撤销当前合同<strong>1</strong> :  合同封面页面会展示为:  发起方以<strong>CancelMessage</strong>的理由撤销当前合同<strong>2</strong> : 保留企业名称,  合同封面页面会展示为:  发起方-企业名称以<strong>CancelMessage</strong>的理由撤销当前合同<strong>3</strong> : 保留企业名称+经办人名字,  合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以<strong>CancelMessage</strong>的理由撤销当前合同注: <code>CancelMessage为撤销当前合同的理由</code><img src="https://qcloudimg.tencent-cloud.cn/raw/f16cf37dbb3a09d6569877f093b92204/channel_ChannelCancelFlow.png" alt="image"></p><p>枚举值：</p><ul><li>0： 默认格式, 合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以CancelMessage的理由撤销当前合同</li><li>1： 合同封面页面会展示为: 发起方以CancelMessage的理由撤销当前合同</li><li>2： 保留企业名称, 合同封面页面会展示为: 发起方-企业名称以CancelMessage的理由撤销当前合同</li><li>3： 保留企业名称+经办人名字, 合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以CancelMessage的理由撤销当前合同注: CancelMessage为撤销当前合同的理由</li></ul>
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

        if (array_key_exists("CancelMessage",$param) and $param["CancelMessage"] !== null) {
            $this->CancelMessage = $param["CancelMessage"];
        }

        if (array_key_exists("CancelMessageFormat",$param) and $param["CancelMessageFormat"] !== null) {
            $this->CancelMessageFormat = $param["CancelMessageFormat"];
        }
    }
}
