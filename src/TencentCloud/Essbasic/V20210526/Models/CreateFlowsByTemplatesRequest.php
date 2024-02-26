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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFlowsByTemplates请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
 * @method array getFlowInfos() 获取要创建的合同信息列表，最多支持一次创建20个合同
 * @method void setFlowInfos(array $FlowInfos) 设置要创建的合同信息列表，最多支持一次创建20个合同
 * @method boolean getNeedPreview() 获取是否为预览模式，取值如下：
<ul><li> **false**：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li>
<li> **true**：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。 <font color="red">注意： 以预览模式创建的合同仅供查看，因此参与方无法进行签署操作</font></li></ul>

注:

`如果预览的文件中指定了动态表格控件，此时此接口返回的是合成前的文档预览链接，合成完成后的文档预览链接需要通过回调通知的方式或使用返回的TaskInfo中的TaskId通过ChannelGetTaskResultApi接口查询得到`

 * @method void setNeedPreview(boolean $NeedPreview) 设置是否为预览模式，取值如下：
<ul><li> **false**：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li>
<li> **true**：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。 <font color="red">注意： 以预览模式创建的合同仅供查看，因此参与方无法进行签署操作</font></li></ul>

注:

`如果预览的文件中指定了动态表格控件，此时此接口返回的是合成前的文档预览链接，合成完成后的文档预览链接需要通过回调通知的方式或使用返回的TaskInfo中的TaskId通过ChannelGetTaskResultApi接口查询得到`

 * @method integer getPreviewType() 获取预览模式下产生的预览链接类型 
<ul><li> **0** :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li>
<li> **1** :H5链接 ,点开后在浏览器中展示合同的样子</li></ul>
注: `此参数在NeedPreview 为true时有效`

 * @method void setPreviewType(integer $PreviewType) 设置预览模式下产生的预览链接类型 
<ul><li> **0** :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li>
<li> **1** :H5链接 ,点开后在浏览器中展示合同的样子</li></ul>
注: `此参数在NeedPreview 为true时有效`

 * @method UserInfo getOperator() 获取操作者的信息，不用传
 * @method void setOperator(UserInfo $Operator) 设置操作者的信息，不用传
 */
class CreateFlowsByTemplatesRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
     */
    public $Agent;

    /**
     * @var array 要创建的合同信息列表，最多支持一次创建20个合同
     */
    public $FlowInfos;

    /**
     * @var boolean 是否为预览模式，取值如下：
<ul><li> **false**：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li>
<li> **true**：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。 <font color="red">注意： 以预览模式创建的合同仅供查看，因此参与方无法进行签署操作</font></li></ul>

注:

`如果预览的文件中指定了动态表格控件，此时此接口返回的是合成前的文档预览链接，合成完成后的文档预览链接需要通过回调通知的方式或使用返回的TaskInfo中的TaskId通过ChannelGetTaskResultApi接口查询得到`

     */
    public $NeedPreview;

    /**
     * @var integer 预览模式下产生的预览链接类型 
<ul><li> **0** :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li>
<li> **1** :H5链接 ,点开后在浏览器中展示合同的样子</li></ul>
注: `此参数在NeedPreview 为true时有效`

     */
    public $PreviewType;

    /**
     * @var UserInfo 操作者的信息，不用传
     * @deprecated
     */
    public $Operator;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
     * @param array $FlowInfos 要创建的合同信息列表，最多支持一次创建20个合同
     * @param boolean $NeedPreview 是否为预览模式，取值如下：
<ul><li> **false**：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li>
<li> **true**：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。 <font color="red">注意： 以预览模式创建的合同仅供查看，因此参与方无法进行签署操作</font></li></ul>

注:

`如果预览的文件中指定了动态表格控件，此时此接口返回的是合成前的文档预览链接，合成完成后的文档预览链接需要通过回调通知的方式或使用返回的TaskInfo中的TaskId通过ChannelGetTaskResultApi接口查询得到`

     * @param integer $PreviewType 预览模式下产生的预览链接类型 
<ul><li> **0** :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li>
<li> **1** :H5链接 ,点开后在浏览器中展示合同的样子</li></ul>
注: `此参数在NeedPreview 为true时有效`

     * @param UserInfo $Operator 操作者的信息，不用传
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

        if (array_key_exists("FlowInfos",$param) and $param["FlowInfos"] !== null) {
            $this->FlowInfos = [];
            foreach ($param["FlowInfos"] as $key => $value){
                $obj = new FlowInfo();
                $obj->deserialize($value);
                array_push($this->FlowInfos, $obj);
            }
        }

        if (array_key_exists("NeedPreview",$param) and $param["NeedPreview"] !== null) {
            $this->NeedPreview = $param["NeedPreview"];
        }

        if (array_key_exists("PreviewType",$param) and $param["PreviewType"] !== null) {
            $this->PreviewType = $param["PreviewType"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
