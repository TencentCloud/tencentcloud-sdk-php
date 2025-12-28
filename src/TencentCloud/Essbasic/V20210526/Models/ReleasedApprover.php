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
 * 解除协议的签署人，如不指定，默认使用待解除流程(原流程)中的签署人。</br>
`注意`:
 - 不支持更换C端(个人身份类型)签署人，如果原流程中含有C端签署人，默认使用原流程中的该签署人。
 - 目前不支持替换C端(个人身份类型)签署人，但是可以指定C端签署人的签署方自定义控件别名，具体见参数ApproverSignRole描述。 
 - 当指定C端签署人的签署方自定义控件别名不空时，除参数ApproverNumber外，可以只传参数ApproverSignRole。

如果需要指定B端(企业身份类型)签署人，其中ReleasedApprover需要传递的参数如下：
`ApproverNumber`, `OrganizationName`, `ApproverType`必传。</br>
对于其他身份标识：
- **子客企业指定经办人**：OpenId必传，OrganizationOpenId必传；
- **非子客企业经办人**：Name、Mobile必传。
 *
 * @method integer getApproverNumber() 获取签署人在原合同签署人列表中的顺序序号(从0开始，按顺序依次递增)。
可以通过<a href="https://qian.tencent.com/developers/partnerApis/flows/DescribeFlowDetailInfo" target="_blank">DescribeFlowDetailInfo</a>接口查看原流程中的签署人列表。
 * @method void setApproverNumber(integer $ApproverNumber) 设置签署人在原合同签署人列表中的顺序序号(从0开始，按顺序依次递增)。
可以通过<a href="https://qian.tencent.com/developers/partnerApis/flows/DescribeFlowDetailInfo" target="_blank">DescribeFlowDetailInfo</a>接口查看原流程中的签署人列表。
 * @method string getApproverType() 获取指定签署人类型，目前支持
<ul><li> **ORGANIZATION**：企业(默认值)</li>
<li> **ENTERPRISESERVER**：企业静默签</li></ul>
 * @method void setApproverType(string $ApproverType) 设置指定签署人类型，目前支持
<ul><li> **ORGANIZATION**：企业(默认值)</li>
<li> **ENTERPRISESERVER**：企业静默签</li></ul>
 * @method string getReleasedApproverRecipientId() 获取<font color="red">【已废弃】</font>请用ApproverNumber来指定替换的参与方的位置
 * @method void setReleasedApproverRecipientId(string $ReleasedApproverRecipientId) 设置<font color="red">【已废弃】</font>请用ApproverNumber来指定替换的参与方的位置
 * @method string getName() 获取签署人姓名，最大长度50个字。
 * @method void setName(string $Name) 设置签署人姓名，最大长度50个字。
 * @method string getIdCardType() 获取签署方经办人的证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证(默认值)</li>
<li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>
 * @method void setIdCardType(string $IdCardType) 设置签署方经办人的证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证(默认值)</li>
<li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>
 * @method string getIdCardNumber() 获取证件号码，应符合以下规则
<ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成(如存在X，请大写)。</li>
<li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。
</li>
<li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method void setIdCardNumber(string $IdCardNumber) 设置证件号码，应符合以下规则
<ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成(如存在X，请大写)。</li>
<li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。
</li>
<li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method string getMobile() 获取签署人手机号。
 * @method void setMobile(string $Mobile) 设置签署人手机号。
 * @method string getOrganizationName() 获取组织机构名称。
请确认该名称与企业营业执照中注册的名称一致。
如果名称中包含英文括号()，请使用中文括号（）代替。
如果签署方是企业签署方(approverType = 0 或者 approverType = 3)， 则企业名称必填。
 * @method void setOrganizationName(string $OrganizationName) 设置组织机构名称。
请确认该名称与企业营业执照中注册的名称一致。
如果名称中包含英文括号()，请使用中文括号（）代替。
如果签署方是企业签署方(approverType = 0 或者 approverType = 3)， 则企业名称必填。
 * @method string getOrganizationOpenId() 获取第三方平台子客企业的唯一标识，定义Agent中的ProxyOrganizationOpenId一样, 可以参考<a href="https://qian.tencent.com/developers/partnerApis/dataTypes/#agent" target="_blank">Agent结构体</a>。
<font color="red">当为子客企业指定经办人时，此OrganizationOpenId必传。</font>
 * @method void setOrganizationOpenId(string $OrganizationOpenId) 设置第三方平台子客企业的唯一标识，定义Agent中的ProxyOrganizationOpenId一样, 可以参考<a href="https://qian.tencent.com/developers/partnerApis/dataTypes/#agent" target="_blank">Agent结构体</a>。
<font color="red">当为子客企业指定经办人时，此OrganizationOpenId必传。</font>
 * @method string getOpenId() 获取第三方平台子客企业员工的唯一标识，长度不能超过64，只能由字母和数字组成。
<font color="red">当签署方为同一第三方平台下的员工时，此OpenId必传。</font>
 * @method void setOpenId(string $OpenId) 设置第三方平台子客企业员工的唯一标识，长度不能超过64，只能由字母和数字组成。
<font color="red">当签署方为同一第三方平台下的员工时，此OpenId必传。</font>
 * @method string getApproverSignComponentType() 获取签署控件类型，支持自定义企业签署方的签署控件类型
<ul><li> **SIGN_SEAL**：默认为印章控件类型(默认值)</li>
<li> **SIGN_SIGNATURE**：手写签名控件类型</li></ul>
 * @method void setApproverSignComponentType(string $ApproverSignComponentType) 设置签署控件类型，支持自定义企业签署方的签署控件类型
<ul><li> **SIGN_SEAL**：默认为印章控件类型(默认值)</li>
<li> **SIGN_SIGNATURE**：手写签名控件类型</li></ul>
 * @method string getApproverSignRole() 获取参与方在合同中的角色是按照创建合同的时候来排序的，解除协议默认会将第一个参与人叫`甲方`,第二个叫`乙方`,  第三个叫`丙方`，以此类推。
如果需改动此参与人的角色名字，可用此字段指定，由汉字,英文字符,数字组成，最大20个字。

![image](https://qcloudimg.tencent-cloud.cn/raw/973a820ab66d1ce57082c160c2b2d44a.png)
 * @method void setApproverSignRole(string $ApproverSignRole) 设置参与方在合同中的角色是按照创建合同的时候来排序的，解除协议默认会将第一个参与人叫`甲方`,第二个叫`乙方`,  第三个叫`丙方`，以此类推。
如果需改动此参与人的角色名字，可用此字段指定，由汉字,英文字符,数字组成，最大20个字。

![image](https://qcloudimg.tencent-cloud.cn/raw/973a820ab66d1ce57082c160c2b2d44a.png)
 * @method string getApproverSignSealId() 获取印章Id，签署控件类型为印章时，用于指定本企业签署方在解除协议中使用那个印章进行签署
 * @method void setApproverSignSealId(string $ApproverSignSealId) 设置印章Id，签署控件类型为印章时，用于指定本企业签署方在解除协议中使用那个印章进行签署
 */
class ReleasedApprover extends AbstractModel
{
    /**
     * @var integer 签署人在原合同签署人列表中的顺序序号(从0开始，按顺序依次递增)。
可以通过<a href="https://qian.tencent.com/developers/partnerApis/flows/DescribeFlowDetailInfo" target="_blank">DescribeFlowDetailInfo</a>接口查看原流程中的签署人列表。
     */
    public $ApproverNumber;

    /**
     * @var string 指定签署人类型，目前支持
<ul><li> **ORGANIZATION**：企业(默认值)</li>
<li> **ENTERPRISESERVER**：企业静默签</li></ul>
     */
    public $ApproverType;

    /**
     * @var string <font color="red">【已废弃】</font>请用ApproverNumber来指定替换的参与方的位置
     */
    public $ReleasedApproverRecipientId;

    /**
     * @var string 签署人姓名，最大长度50个字。
     */
    public $Name;

    /**
     * @var string 签署方经办人的证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证(默认值)</li>
<li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>
     */
    public $IdCardType;

    /**
     * @var string 证件号码，应符合以下规则
<ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成(如存在X，请大写)。</li>
<li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。
</li>
<li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     */
    public $IdCardNumber;

    /**
     * @var string 签署人手机号。
     */
    public $Mobile;

    /**
     * @var string 组织机构名称。
请确认该名称与企业营业执照中注册的名称一致。
如果名称中包含英文括号()，请使用中文括号（）代替。
如果签署方是企业签署方(approverType = 0 或者 approverType = 3)， 则企业名称必填。
     */
    public $OrganizationName;

    /**
     * @var string 第三方平台子客企业的唯一标识，定义Agent中的ProxyOrganizationOpenId一样, 可以参考<a href="https://qian.tencent.com/developers/partnerApis/dataTypes/#agent" target="_blank">Agent结构体</a>。
<font color="red">当为子客企业指定经办人时，此OrganizationOpenId必传。</font>
     */
    public $OrganizationOpenId;

    /**
     * @var string 第三方平台子客企业员工的唯一标识，长度不能超过64，只能由字母和数字组成。
<font color="red">当签署方为同一第三方平台下的员工时，此OpenId必传。</font>
     */
    public $OpenId;

    /**
     * @var string 签署控件类型，支持自定义企业签署方的签署控件类型
<ul><li> **SIGN_SEAL**：默认为印章控件类型(默认值)</li>
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
     * @param integer $ApproverNumber 签署人在原合同签署人列表中的顺序序号(从0开始，按顺序依次递增)。
可以通过<a href="https://qian.tencent.com/developers/partnerApis/flows/DescribeFlowDetailInfo" target="_blank">DescribeFlowDetailInfo</a>接口查看原流程中的签署人列表。
     * @param string $ApproverType 指定签署人类型，目前支持
<ul><li> **ORGANIZATION**：企业(默认值)</li>
<li> **ENTERPRISESERVER**：企业静默签</li></ul>
     * @param string $ReleasedApproverRecipientId <font color="red">【已废弃】</font>请用ApproverNumber来指定替换的参与方的位置
     * @param string $Name 签署人姓名，最大长度50个字。
     * @param string $IdCardType 签署方经办人的证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证(默认值)</li>
<li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>
     * @param string $IdCardNumber 证件号码，应符合以下规则
<ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成(如存在X，请大写)。</li>
<li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。
</li>
<li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     * @param string $Mobile 签署人手机号。
     * @param string $OrganizationName 组织机构名称。
请确认该名称与企业营业执照中注册的名称一致。
如果名称中包含英文括号()，请使用中文括号（）代替。
如果签署方是企业签署方(approverType = 0 或者 approverType = 3)， 则企业名称必填。
     * @param string $OrganizationOpenId 第三方平台子客企业的唯一标识，定义Agent中的ProxyOrganizationOpenId一样, 可以参考<a href="https://qian.tencent.com/developers/partnerApis/dataTypes/#agent" target="_blank">Agent结构体</a>。
<font color="red">当为子客企业指定经办人时，此OrganizationOpenId必传。</font>
     * @param string $OpenId 第三方平台子客企业员工的唯一标识，长度不能超过64，只能由字母和数字组成。
<font color="red">当签署方为同一第三方平台下的员工时，此OpenId必传。</font>
     * @param string $ApproverSignComponentType 签署控件类型，支持自定义企业签署方的签署控件类型
<ul><li> **SIGN_SEAL**：默认为印章控件类型(默认值)</li>
<li> **SIGN_SIGNATURE**：手写签名控件类型</li></ul>
     * @param string $ApproverSignRole 参与方在合同中的角色是按照创建合同的时候来排序的，解除协议默认会将第一个参与人叫`甲方`,第二个叫`乙方`,  第三个叫`丙方`，以此类推。
如果需改动此参与人的角色名字，可用此字段指定，由汉字,英文字符,数字组成，最大20个字。

![image](https://qcloudimg.tencent-cloud.cn/raw/973a820ab66d1ce57082c160c2b2d44a.png)
     * @param string $ApproverSignSealId 印章Id，签署控件类型为印章时，用于指定本企业签署方在解除协议中使用那个印章进行签署
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
        if (array_key_exists("ApproverNumber",$param) and $param["ApproverNumber"] !== null) {
            $this->ApproverNumber = $param["ApproverNumber"];
        }

        if (array_key_exists("ApproverType",$param) and $param["ApproverType"] !== null) {
            $this->ApproverType = $param["ApproverType"];
        }

        if (array_key_exists("ReleasedApproverRecipientId",$param) and $param["ReleasedApproverRecipientId"] !== null) {
            $this->ReleasedApproverRecipientId = $param["ReleasedApproverRecipientId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("OrganizationOpenId",$param) and $param["OrganizationOpenId"] !== null) {
            $this->OrganizationOpenId = $param["OrganizationOpenId"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
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
    }
}
