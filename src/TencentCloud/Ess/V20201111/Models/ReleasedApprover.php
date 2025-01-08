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
 * 解除协议的签署人，如不指定，默认使用原流程中的签署人。<br/>
`注意：不支持更换C端（个人身份类型）签署人，如果原流程中含有C端签署人，默认使用原流程中的该C端签署人。`<br/>
`注意：目前不支持替换C端（个人身份类型）签署人，但是可以指定C端签署人的签署方自定义控件别名，具体见参数ApproverSignRole描述。`<br/>
`注意：当指定C端签署人的签署方自定义控件别名不空时，除RelievedApproverReceiptId参数外，可以只参数ApproverSignRole。`<br/>
 *
 * @method string getName() 获取签署人姓名，最大长度50个字。

 * @method void setName(string $Name) 设置签署人姓名，最大长度50个字。

 * @method string getMobile() 获取签署人手机号。
 * @method void setMobile(string $Mobile) 设置签署人手机号。
 * @method string getRelievedApproverReceiptId() 获取要更换的原合同参与人RecipientId编号。(可通过接口<a href="https://qian.tencent.com/developers/companyApis/queryFlows/DescribeFlowInfo/">DescribeFlowInfo</a>查询签署人的RecipientId编号)<br/>
 * @method void setRelievedApproverReceiptId(string $RelievedApproverReceiptId) 设置要更换的原合同参与人RecipientId编号。(可通过接口<a href="https://qian.tencent.com/developers/companyApis/queryFlows/DescribeFlowInfo/">DescribeFlowInfo</a>查询签署人的RecipientId编号)<br/>
 * @method string getApproverType() 获取指定签署人类型，目前仅支持
<ul><li> **ORGANIZATION**：企业（默认值）</li>
<li> **ENTERPRISESERVER**：企业静默签</li></ul>
 * @method void setApproverType(string $ApproverType) 设置指定签署人类型，目前仅支持
<ul><li> **ORGANIZATION**：企业（默认值）</li>
<li> **ENTERPRISESERVER**：企业静默签</li></ul>
 * @method string getApproverSignComponentType() 获取签署控件类型，支持自定义企业签署方的签署控件类型
<ul><li> **SIGN_SEAL**：默认为印章控件类型（默认值）</li>
<li> **SIGN_SIGNATURE**：手写签名控件类型</li></ul>
 * @method void setApproverSignComponentType(string $ApproverSignComponentType) 设置签署控件类型，支持自定义企业签署方的签署控件类型
<ul><li> **SIGN_SEAL**：默认为印章控件类型（默认值）</li>
<li> **SIGN_SIGNATURE**：手写签名控件类型</li></ul>
 * @method string getApproverSignRole() 获取参与方在合同中的角色是按照创建合同的时候来排序的，解除协议默认会将第一个参与人叫`甲方`,第二个叫`乙方`,  第三个叫`丙方`，以此类推。

如果需改动此参与人的角色名字，可用此字段指定，由汉字,英文字符,数字组成，最大20个字。

![image](https://qcloudimg.tencent-cloud.cn/raw/973a820ab66d1ce57082c160c2b2d44a.png)

 * @method void setApproverSignRole(string $ApproverSignRole) 设置参与方在合同中的角色是按照创建合同的时候来排序的，解除协议默认会将第一个参与人叫`甲方`,第二个叫`乙方`,  第三个叫`丙方`，以此类推。

如果需改动此参与人的角色名字，可用此字段指定，由汉字,英文字符,数字组成，最大20个字。

![image](https://qcloudimg.tencent-cloud.cn/raw/973a820ab66d1ce57082c160c2b2d44a.png)

 * @method string getApproverSignSealId() 获取印章Id，签署控件类型为印章时，用于指定本企业签署方在解除协议中使用那个印章进行签署
 * @method void setApproverSignSealId(string $ApproverSignSealId) 设置印章Id，签署控件类型为印章时，用于指定本企业签署方在解除协议中使用那个印章进行签署
 * @method string getRelievedApproverRecipientId() 获取要更换的原合同参与人RecipientId编号。(可通过接口<a href="https://qian.tencent.com/developers/companyApis/queryFlows/DescribeFlowInfo/">DescribeFlowInfo</a>查询签署人的RecipientId编号)<br/>
 * @method void setRelievedApproverRecipientId(string $RelievedApproverRecipientId) 设置要更换的原合同参与人RecipientId编号。(可通过接口<a href="https://qian.tencent.com/developers/companyApis/queryFlows/DescribeFlowInfo/">DescribeFlowInfo</a>查询签署人的RecipientId编号)<br/>
 */
class ReleasedApprover extends AbstractModel
{
    /**
     * @var string 签署人姓名，最大长度50个字。

     */
    public $Name;

    /**
     * @var string 签署人手机号。
     */
    public $Mobile;

    /**
     * @var string 要更换的原合同参与人RecipientId编号。(可通过接口<a href="https://qian.tencent.com/developers/companyApis/queryFlows/DescribeFlowInfo/">DescribeFlowInfo</a>查询签署人的RecipientId编号)<br/>
     * @deprecated
     */
    public $RelievedApproverReceiptId;

    /**
     * @var string 指定签署人类型，目前仅支持
<ul><li> **ORGANIZATION**：企业（默认值）</li>
<li> **ENTERPRISESERVER**：企业静默签</li></ul>
     */
    public $ApproverType;

    /**
     * @var string 签署控件类型，支持自定义企业签署方的签署控件类型
<ul><li> **SIGN_SEAL**：默认为印章控件类型（默认值）</li>
<li> **SIGN_SIGNATURE**：手写签名控件类型</li></ul>
     */
    public $ApproverSignComponentType;

    /**
     * @var string 参与方在合同中的角色是按照创建合同的时候来排序的，解除协议默认会将第一个参与人叫`甲方`,第二个叫`乙方`,  第三个叫`丙方`，以此类推。

如果需改动此参与人的角色名字，可用此字段指定，由汉字,英文字符,数字组成，最大20个字。

![image](https://qcloudimg.tencent-cloud.cn/raw/973a820ab66d1ce57082c160c2b2d44a.png)

     */
    public $ApproverSignRole;

    /**
     * @var string 印章Id，签署控件类型为印章时，用于指定本企业签署方在解除协议中使用那个印章进行签署
     */
    public $ApproverSignSealId;

    /**
     * @var string 要更换的原合同参与人RecipientId编号。(可通过接口<a href="https://qian.tencent.com/developers/companyApis/queryFlows/DescribeFlowInfo/">DescribeFlowInfo</a>查询签署人的RecipientId编号)<br/>
     */
    public $RelievedApproverRecipientId;

    /**
     * @param string $Name 签署人姓名，最大长度50个字。

     * @param string $Mobile 签署人手机号。
     * @param string $RelievedApproverReceiptId 要更换的原合同参与人RecipientId编号。(可通过接口<a href="https://qian.tencent.com/developers/companyApis/queryFlows/DescribeFlowInfo/">DescribeFlowInfo</a>查询签署人的RecipientId编号)<br/>
     * @param string $ApproverType 指定签署人类型，目前仅支持
<ul><li> **ORGANIZATION**：企业（默认值）</li>
<li> **ENTERPRISESERVER**：企业静默签</li></ul>
     * @param string $ApproverSignComponentType 签署控件类型，支持自定义企业签署方的签署控件类型
<ul><li> **SIGN_SEAL**：默认为印章控件类型（默认值）</li>
<li> **SIGN_SIGNATURE**：手写签名控件类型</li></ul>
     * @param string $ApproverSignRole 参与方在合同中的角色是按照创建合同的时候来排序的，解除协议默认会将第一个参与人叫`甲方`,第二个叫`乙方`,  第三个叫`丙方`，以此类推。

如果需改动此参与人的角色名字，可用此字段指定，由汉字,英文字符,数字组成，最大20个字。

![image](https://qcloudimg.tencent-cloud.cn/raw/973a820ab66d1ce57082c160c2b2d44a.png)

     * @param string $ApproverSignSealId 印章Id，签署控件类型为印章时，用于指定本企业签署方在解除协议中使用那个印章进行签署
     * @param string $RelievedApproverRecipientId 要更换的原合同参与人RecipientId编号。(可通过接口<a href="https://qian.tencent.com/developers/companyApis/queryFlows/DescribeFlowInfo/">DescribeFlowInfo</a>查询签署人的RecipientId编号)<br/>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("RelievedApproverReceiptId",$param) and $param["RelievedApproverReceiptId"] !== null) {
            $this->RelievedApproverReceiptId = $param["RelievedApproverReceiptId"];
        }

        if (array_key_exists("ApproverType",$param) and $param["ApproverType"] !== null) {
            $this->ApproverType = $param["ApproverType"];
        }

        if (array_key_exists("ApproverSignComponentType",$param) and $param["ApproverSignComponentType"] !== null) {
            $this->ApproverSignComponentType = $param["ApproverSignComponentType"];
        }

        if (array_key_exists("ApproverSignRole",$param) and $param["ApproverSignRole"] !== null) {
            $this->ApproverSignRole = $param["ApproverSignRole"];
        }

        if (array_key_exists("ApproverSignSealId",$param) and $param["ApproverSignSealId"] !== null) {
            $this->ApproverSignSealId = $param["ApproverSignSealId"];
        }

        if (array_key_exists("RelievedApproverRecipientId",$param) and $param["RelievedApproverRecipientId"] !== null) {
            $this->RelievedApproverRecipientId = $param["RelievedApproverRecipientId"];
        }
    }
}
