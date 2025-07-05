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
 * ChannelBatchCancelFlows请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
 * @method array getFlowIds() 获取要撤销的合同流程ID列表，最多100个，超过100不处理
 * @method void setFlowIds(array $FlowIds) 设置要撤销的合同流程ID列表，最多100个，超过100不处理
 * @method string getCancelMessage() 获取撤回原因，长度不能超过200，只能由中文、字母、数字和下划线组成。

备注:`如果不传递撤回原因，那么默认撤回原因是 "自动撤销（通过接口实现）"`
 * @method void setCancelMessage(string $CancelMessage) 设置撤回原因，长度不能超过200，只能由中文、字母、数字和下划线组成。

备注:`如果不传递撤回原因，那么默认撤回原因是 "自动撤销（通过接口实现）"`
 * @method integer getCancelMessageFormat() 获取撤销理由自定义格式,  会展示在合同预览的界面中,  可以选择下面的组合方式：

**0** : 默认格式,  合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以**CancelMessage**的理由撤销当前合同
**1** :  合同封面页面会展示为:  发起方以**CancelMessage**的理由撤销当前合同
**2** : 保留企业名称,  合同封面页面会展示为:  发起方-企业名称以**CancelMessage**的理由撤销当前合同
**3** : 保留企业名称+经办人名字,  合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以**CancelMessage**的理由撤销当前合同

注: `CancelMessage为撤销当前合同的理由`

![image](https://qcloudimg.tencent-cloud.cn/raw/f16cf37dbb3a09d6569877f093b92204/channel_ChannelCancelFlow.png)


 * @method void setCancelMessageFormat(integer $CancelMessageFormat) 设置撤销理由自定义格式,  会展示在合同预览的界面中,  可以选择下面的组合方式：

**0** : 默认格式,  合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以**CancelMessage**的理由撤销当前合同
**1** :  合同封面页面会展示为:  发起方以**CancelMessage**的理由撤销当前合同
**2** : 保留企业名称,  合同封面页面会展示为:  发起方-企业名称以**CancelMessage**的理由撤销当前合同
**3** : 保留企业名称+经办人名字,  合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以**CancelMessage**的理由撤销当前合同

注: `CancelMessage为撤销当前合同的理由`

![image](https://qcloudimg.tencent-cloud.cn/raw/f16cf37dbb3a09d6569877f093b92204/channel_ChannelCancelFlow.png)


 * @method UserInfo getOperator() 获取暂未开放
 * @method void setOperator(UserInfo $Operator) 设置暂未开放
 */
class ChannelBatchCancelFlowsRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
     */
    public $Agent;

    /**
     * @var array 要撤销的合同流程ID列表，最多100个，超过100不处理
     */
    public $FlowIds;

    /**
     * @var string 撤回原因，长度不能超过200，只能由中文、字母、数字和下划线组成。

备注:`如果不传递撤回原因，那么默认撤回原因是 "自动撤销（通过接口实现）"`
     */
    public $CancelMessage;

    /**
     * @var integer 撤销理由自定义格式,  会展示在合同预览的界面中,  可以选择下面的组合方式：

**0** : 默认格式,  合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以**CancelMessage**的理由撤销当前合同
**1** :  合同封面页面会展示为:  发起方以**CancelMessage**的理由撤销当前合同
**2** : 保留企业名称,  合同封面页面会展示为:  发起方-企业名称以**CancelMessage**的理由撤销当前合同
**3** : 保留企业名称+经办人名字,  合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以**CancelMessage**的理由撤销当前合同

注: `CancelMessage为撤销当前合同的理由`

![image](https://qcloudimg.tencent-cloud.cn/raw/f16cf37dbb3a09d6569877f093b92204/channel_ChannelCancelFlow.png)


     */
    public $CancelMessageFormat;

    /**
     * @var UserInfo 暂未开放
     * @deprecated
     */
    public $Operator;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
     * @param array $FlowIds 要撤销的合同流程ID列表，最多100个，超过100不处理
     * @param string $CancelMessage 撤回原因，长度不能超过200，只能由中文、字母、数字和下划线组成。

备注:`如果不传递撤回原因，那么默认撤回原因是 "自动撤销（通过接口实现）"`
     * @param integer $CancelMessageFormat 撤销理由自定义格式,  会展示在合同预览的界面中,  可以选择下面的组合方式：

**0** : 默认格式,  合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以**CancelMessage**的理由撤销当前合同
**1** :  合同封面页面会展示为:  发起方以**CancelMessage**的理由撤销当前合同
**2** : 保留企业名称,  合同封面页面会展示为:  发起方-企业名称以**CancelMessage**的理由撤销当前合同
**3** : 保留企业名称+经办人名字,  合同封面页面会展示为: 发起方-企业名称-撤销的经办人名字以**CancelMessage**的理由撤销当前合同

注: `CancelMessage为撤销当前合同的理由`

![image](https://qcloudimg.tencent-cloud.cn/raw/f16cf37dbb3a09d6569877f093b92204/channel_ChannelCancelFlow.png)


     * @param UserInfo $Operator 暂未开放
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("FlowIds",$param) and $param["FlowIds"] !== null) {
            $this->FlowIds = $param["FlowIds"];
        }

        if (array_key_exists("CancelMessage",$param) and $param["CancelMessage"] !== null) {
            $this->CancelMessage = $param["CancelMessage"];
        }

        if (array_key_exists("CancelMessageFormat",$param) and $param["CancelMessageFormat"] !== null) {
            $this->CancelMessageFormat = $param["CancelMessageFormat"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
