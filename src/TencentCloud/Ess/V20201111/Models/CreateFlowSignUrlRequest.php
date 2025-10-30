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
 * CreateFlowSignUrl请求参数结构体
 *
 * @method string getFlowId() 获取合同流程ID为32位字符串。

您可以登录腾讯电子签控制台，在 "合同" -> "合同中心" 中查看某个合同的FlowId（在页面中展示为合同ID）。[点击查看FlowId在控制台中的位置](https://qcloudimg.tencent-cloud.cn/raw/0a83015166cfe1cb043d14f9ec4bd75e.png)。

 * @method void setFlowId(string $FlowId) 设置合同流程ID为32位字符串。

您可以登录腾讯电子签控制台，在 "合同" -> "合同中心" 中查看某个合同的FlowId（在页面中展示为合同ID）。[点击查看FlowId在控制台中的位置](https://qcloudimg.tencent-cloud.cn/raw/0a83015166cfe1cb043d14f9ec4bd75e.png)。

 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method array getFlowApproverInfos() 获取流程签署人列表中，结构体的ApproverName、ApproverMobile和ApproverType为必传字段。如果是企业签署人，还需传递OrganizationName。

此结构体和CreateFlow发起接口参与方结构体复用，除了上述参数外，可传递的参数有：
1. RecipientId: 发起合同会返回，可以直接用于指定需要生成链接的签署方。
2. ApproverSignTypes: 指定签署方签署时候的认证方式，仅此链接生效。
3. SignTypeSelector: 可以指定签署方签署合同的认证校验方式的选择模式。
4. Intention: 指定H5签署视频核身的意图配置，仅视频签署需要使用。

注：
1. 签署人<b>只能使用手写签名、时间类型、印章类型、签批类型的签署控件和内容填写控件</b>，其他类型的签署控件暂时不支持。
2. 生成发起方预览链接时，该字段（FlowApproverInfos）可以传空或者不传。


 * @method void setFlowApproverInfos(array $FlowApproverInfos) 设置流程签署人列表中，结构体的ApproverName、ApproverMobile和ApproverType为必传字段。如果是企业签署人，还需传递OrganizationName。

此结构体和CreateFlow发起接口参与方结构体复用，除了上述参数外，可传递的参数有：
1. RecipientId: 发起合同会返回，可以直接用于指定需要生成链接的签署方。
2. ApproverSignTypes: 指定签署方签署时候的认证方式，仅此链接生效。
3. SignTypeSelector: 可以指定签署方签署合同的认证校验方式的选择模式。
4. Intention: 指定H5签署视频核身的意图配置，仅视频签署需要使用。

注：
1. 签署人<b>只能使用手写签名、时间类型、印章类型、签批类型的签署控件和内容填写控件</b>，其他类型的签署控件暂时不支持。
2. 生成发起方预览链接时，该字段（FlowApproverInfos）可以传空或者不传。


 * @method OrganizationInfo getOrganization() 获取机构信息，暂未开放
 * @method void setOrganization(OrganizationInfo $Organization) 设置机构信息，暂未开放
 * @method string getJumpUrl() 获取签署完之后的H5页面的跳转链接，最大长度1000个字符。链接类型请参考 <a href="https://qian.tencent.com/developers/company/openqianh5" target="_blank">跳转电子签H5</a>

 * @method void setJumpUrl(string $JumpUrl) 设置签署完之后的H5页面的跳转链接，最大长度1000个字符。链接类型请参考 <a href="https://qian.tencent.com/developers/company/openqianh5" target="_blank">跳转电子签H5</a>

 * @method integer getUrlType() 获取链接类型支持以下指定类型：

<ul><li><b>0</b>: 签署链接（默认值），进入后可以填写或签署合同。</li><li><b>1 </b>: 预览链接，进入后可以预览合同当前的样子。</li></ul>

注：

1. 当指定链接类型为1时，链接为预览链接，打开链接后无法进行签署操作，仅支持预览和查看当前合同状态。
2. 如需生成发起方预览链接，则签署方信息应传空，即FlowApproverInfos传空或者不传。
 * @method void setUrlType(integer $UrlType) 设置链接类型支持以下指定类型：

<ul><li><b>0</b>: 签署链接（默认值），进入后可以填写或签署合同。</li><li><b>1 </b>: 预览链接，进入后可以预览合同当前的样子。</li></ul>

注：

1. 当指定链接类型为1时，链接为预览链接，打开链接后无法进行签署操作，仅支持预览和查看当前合同状态。
2. 如需生成发起方预览链接，则签署方信息应传空，即FlowApproverInfos传空或者不传。
 */
class CreateFlowSignUrlRequest extends AbstractModel
{
    /**
     * @var string 合同流程ID为32位字符串。

您可以登录腾讯电子签控制台，在 "合同" -> "合同中心" 中查看某个合同的FlowId（在页面中展示为合同ID）。[点击查看FlowId在控制台中的位置](https://qcloudimg.tencent-cloud.cn/raw/0a83015166cfe1cb043d14f9ec4bd75e.png)。

     */
    public $FlowId;

    /**
     * @var UserInfo 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var array 流程签署人列表中，结构体的ApproverName、ApproverMobile和ApproverType为必传字段。如果是企业签署人，还需传递OrganizationName。

此结构体和CreateFlow发起接口参与方结构体复用，除了上述参数外，可传递的参数有：
1. RecipientId: 发起合同会返回，可以直接用于指定需要生成链接的签署方。
2. ApproverSignTypes: 指定签署方签署时候的认证方式，仅此链接生效。
3. SignTypeSelector: 可以指定签署方签署合同的认证校验方式的选择模式。
4. Intention: 指定H5签署视频核身的意图配置，仅视频签署需要使用。

注：
1. 签署人<b>只能使用手写签名、时间类型、印章类型、签批类型的签署控件和内容填写控件</b>，其他类型的签署控件暂时不支持。
2. 生成发起方预览链接时，该字段（FlowApproverInfos）可以传空或者不传。


     */
    public $FlowApproverInfos;

    /**
     * @var OrganizationInfo 机构信息，暂未开放
     * @deprecated
     */
    public $Organization;

    /**
     * @var string 签署完之后的H5页面的跳转链接，最大长度1000个字符。链接类型请参考 <a href="https://qian.tencent.com/developers/company/openqianh5" target="_blank">跳转电子签H5</a>

     */
    public $JumpUrl;

    /**
     * @var integer 链接类型支持以下指定类型：

<ul><li><b>0</b>: 签署链接（默认值），进入后可以填写或签署合同。</li><li><b>1 </b>: 预览链接，进入后可以预览合同当前的样子。</li></ul>

注：

1. 当指定链接类型为1时，链接为预览链接，打开链接后无法进行签署操作，仅支持预览和查看当前合同状态。
2. 如需生成发起方预览链接，则签署方信息应传空，即FlowApproverInfos传空或者不传。
     */
    public $UrlType;

    /**
     * @param string $FlowId 合同流程ID为32位字符串。

您可以登录腾讯电子签控制台，在 "合同" -> "合同中心" 中查看某个合同的FlowId（在页面中展示为合同ID）。[点击查看FlowId在控制台中的位置](https://qcloudimg.tencent-cloud.cn/raw/0a83015166cfe1cb043d14f9ec4bd75e.png)。

     * @param UserInfo $Operator 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param array $FlowApproverInfos 流程签署人列表中，结构体的ApproverName、ApproverMobile和ApproverType为必传字段。如果是企业签署人，还需传递OrganizationName。

此结构体和CreateFlow发起接口参与方结构体复用，除了上述参数外，可传递的参数有：
1. RecipientId: 发起合同会返回，可以直接用于指定需要生成链接的签署方。
2. ApproverSignTypes: 指定签署方签署时候的认证方式，仅此链接生效。
3. SignTypeSelector: 可以指定签署方签署合同的认证校验方式的选择模式。
4. Intention: 指定H5签署视频核身的意图配置，仅视频签署需要使用。

注：
1. 签署人<b>只能使用手写签名、时间类型、印章类型、签批类型的签署控件和内容填写控件</b>，其他类型的签署控件暂时不支持。
2. 生成发起方预览链接时，该字段（FlowApproverInfos）可以传空或者不传。


     * @param OrganizationInfo $Organization 机构信息，暂未开放
     * @param string $JumpUrl 签署完之后的H5页面的跳转链接，最大长度1000个字符。链接类型请参考 <a href="https://qian.tencent.com/developers/company/openqianh5" target="_blank">跳转电子签H5</a>

     * @param integer $UrlType 链接类型支持以下指定类型：

<ul><li><b>0</b>: 签署链接（默认值），进入后可以填写或签署合同。</li><li><b>1 </b>: 预览链接，进入后可以预览合同当前的样子。</li></ul>

注：

1. 当指定链接类型为1时，链接为预览链接，打开链接后无法进行签署操作，仅支持预览和查看当前合同状态。
2. 如需生成发起方预览链接，则签署方信息应传空，即FlowApproverInfos传空或者不传。
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("FlowApproverInfos",$param) and $param["FlowApproverInfos"] !== null) {
            $this->FlowApproverInfos = [];
            foreach ($param["FlowApproverInfos"] as $key => $value){
                $obj = new FlowCreateApprover();
                $obj->deserialize($value);
                array_push($this->FlowApproverInfos, $obj);
            }
        }

        if (array_key_exists("Organization",$param) and $param["Organization"] !== null) {
            $this->Organization = new OrganizationInfo();
            $this->Organization->deserialize($param["Organization"]);
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }

        if (array_key_exists("UrlType",$param) and $param["UrlType"] !== null) {
            $this->UrlType = $param["UrlType"];
        }
    }
}
