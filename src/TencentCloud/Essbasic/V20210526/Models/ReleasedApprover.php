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
 * 解除协议的签署人，如不指定，默认使用待解除流程（即原流程）中的签署人。
注意：不支持更换C端（个人身份类型）签署人，如果原流程中含有C端签署人，默认使用原流程中的该签署人。

如果需要指定B端（机构身份类型）签署人，其中ReleasedApprover需要传递的参数如下：
ApproverNumber, OrganizationName, ApproverType必传。
对于其他身份标识
- 子客企业指定经办人：OpenId必传，OrganizationOpenId必传；
- 非子客企业：Name、Mobile必传。
 *
 * @method string getOrganizationName() 获取企业签署方工商营业执照上的企业名称，签署方为非发起方企业场景下必传，最大长度64个字符
 * @method void setOrganizationName(string $OrganizationName) 设置企业签署方工商营业执照上的企业名称，签署方为非发起方企业场景下必传，最大长度64个字符
 * @method integer getApproverNumber() 获取签署人在原流程中的签署人列表中的顺序序号（从0开始，按顺序依次递增），如果不清楚原流程中的签署人列表，可以通过DescribeFlows接口查看
 * @method void setApproverNumber(integer $ApproverNumber) 设置签署人在原流程中的签署人列表中的顺序序号（从0开始，按顺序依次递增），如果不清楚原流程中的签署人列表，可以通过DescribeFlows接口查看
 * @method string getApproverType() 获取签署人类型，目前仅支持
ORGANIZATION-企业
 * @method void setApproverType(string $ApproverType) 设置签署人类型，目前仅支持
ORGANIZATION-企业
 * @method string getName() 获取签署人姓名，最大长度50个字符
 * @method void setName(string $Name) 设置签署人姓名，最大长度50个字符
 * @method string getIdCardType() 获取签署人身份证件类型
1.ID_CARD 居民身份证
2.HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证
3.HONGKONG_AND_MACAO 港澳居民来往内地通行证
 * @method void setIdCardType(string $IdCardType) 设置签署人身份证件类型
1.ID_CARD 居民身份证
2.HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证
3.HONGKONG_AND_MACAO 港澳居民来往内地通行证
 * @method string getIdCardNumber() 获取签署人证件号
 * @method void setIdCardNumber(string $IdCardNumber) 设置签署人证件号
 * @method string getMobile() 获取签署人手机号，脱敏显示。大陆手机号为11位，暂不支持海外手机号
 * @method void setMobile(string $Mobile) 设置签署人手机号，脱敏显示。大陆手机号为11位，暂不支持海外手机号
 * @method string getOrganizationOpenId() 获取企业签署方在同一第三方应用下的其他合作企业OpenId，签署方为非发起方企业场景下必传，最大长度64个字符
 * @method void setOrganizationOpenId(string $OrganizationOpenId) 设置企业签署方在同一第三方应用下的其他合作企业OpenId，签署方为非发起方企业场景下必传，最大长度64个字符
 * @method string getOpenId() 获取用户侧第三方id，最大长度64个字符
当签署方为同一第三方应用下的员工时，该字必传
 * @method void setOpenId(string $OpenId) 设置用户侧第三方id，最大长度64个字符
当签署方为同一第三方应用下的员工时，该字必传
 */
class ReleasedApprover extends AbstractModel
{
    /**
     * @var string 企业签署方工商营业执照上的企业名称，签署方为非发起方企业场景下必传，最大长度64个字符
     */
    public $OrganizationName;

    /**
     * @var integer 签署人在原流程中的签署人列表中的顺序序号（从0开始，按顺序依次递增），如果不清楚原流程中的签署人列表，可以通过DescribeFlows接口查看
     */
    public $ApproverNumber;

    /**
     * @var string 签署人类型，目前仅支持
ORGANIZATION-企业
     */
    public $ApproverType;

    /**
     * @var string 签署人姓名，最大长度50个字符
     */
    public $Name;

    /**
     * @var string 签署人身份证件类型
1.ID_CARD 居民身份证
2.HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证
3.HONGKONG_AND_MACAO 港澳居民来往内地通行证
     */
    public $IdCardType;

    /**
     * @var string 签署人证件号
     */
    public $IdCardNumber;

    /**
     * @var string 签署人手机号，脱敏显示。大陆手机号为11位，暂不支持海外手机号
     */
    public $Mobile;

    /**
     * @var string 企业签署方在同一第三方应用下的其他合作企业OpenId，签署方为非发起方企业场景下必传，最大长度64个字符
     */
    public $OrganizationOpenId;

    /**
     * @var string 用户侧第三方id，最大长度64个字符
当签署方为同一第三方应用下的员工时，该字必传
     */
    public $OpenId;

    /**
     * @param string $OrganizationName 企业签署方工商营业执照上的企业名称，签署方为非发起方企业场景下必传，最大长度64个字符
     * @param integer $ApproverNumber 签署人在原流程中的签署人列表中的顺序序号（从0开始，按顺序依次递增），如果不清楚原流程中的签署人列表，可以通过DescribeFlows接口查看
     * @param string $ApproverType 签署人类型，目前仅支持
ORGANIZATION-企业
     * @param string $Name 签署人姓名，最大长度50个字符
     * @param string $IdCardType 签署人身份证件类型
1.ID_CARD 居民身份证
2.HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证
3.HONGKONG_AND_MACAO 港澳居民来往内地通行证
     * @param string $IdCardNumber 签署人证件号
     * @param string $Mobile 签署人手机号，脱敏显示。大陆手机号为11位，暂不支持海外手机号
     * @param string $OrganizationOpenId 企业签署方在同一第三方应用下的其他合作企业OpenId，签署方为非发起方企业场景下必传，最大长度64个字符
     * @param string $OpenId 用户侧第三方id，最大长度64个字符
当签署方为同一第三方应用下的员工时，该字必传
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
        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("ApproverNumber",$param) and $param["ApproverNumber"] !== null) {
            $this->ApproverNumber = $param["ApproverNumber"];
        }

        if (array_key_exists("ApproverType",$param) and $param["ApproverType"] !== null) {
            $this->ApproverType = $param["ApproverType"];
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

        if (array_key_exists("OrganizationOpenId",$param) and $param["OrganizationOpenId"] !== null) {
            $this->OrganizationOpenId = $param["OrganizationOpenId"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }
    }
}
