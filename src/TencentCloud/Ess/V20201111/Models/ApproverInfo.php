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
 * 参与者信息
 *
 * @method integer getApproverType() 获取参与者类型：
0：企业
1：个人
3：企业静默签署
注：类型为3（企业静默签署）时，此接口会默认完成该签署方的签署，目前只支持第一方进行静默签署。
 * @method void setApproverType(integer $ApproverType) 设置参与者类型：
0：企业
1：个人
3：企业静默签署
注：类型为3（企业静默签署）时，此接口会默认完成该签署方的签署，目前只支持第一方进行静默签署。
 * @method string getApproverName() 获取本环节需要操作人的名字
 * @method void setApproverName(string $ApproverName) 设置本环节需要操作人的名字
 * @method string getApproverMobile() 获取本环节需要操作人的手机号
 * @method void setApproverMobile(string $ApproverMobile) 设置本环节需要操作人的手机号
 * @method array getSignComponents() 获取本环节操作人签署控件配置，为企业静默签署时，只允许类型为SIGN_SEAL（印章）和SIGN_DATE（日期）控件，并且传入印章编号。
 * @method void setSignComponents(array $SignComponents) 设置本环节操作人签署控件配置，为企业静默签署时，只允许类型为SIGN_SEAL（印章）和SIGN_DATE（日期）控件，并且传入印章编号。
 * @method string getOrganizationName() 获取如果是企业,则为企业的名字
 * @method void setOrganizationName(string $OrganizationName) 设置如果是企业,则为企业的名字
 * @method string getApproverIdCardNumber() 获取身份证号
 * @method void setApproverIdCardNumber(string $ApproverIdCardNumber) 设置身份证号
 * @method string getApproverIdCardType() 获取证件类型 
ID_CARD 身份证
HONGKONG_AND_MACAO 港澳居民来往内地通行证
HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)
 * @method void setApproverIdCardType(string $ApproverIdCardType) 设置证件类型 
ID_CARD 身份证
HONGKONG_AND_MACAO 港澳居民来往内地通行证
HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)
 * @method string getNotifyType() 获取sms--短信，none--不通知
 * @method void setNotifyType(string $NotifyType) 设置sms--短信，none--不通知
 * @method integer getApproverRole() 获取1--收款人、2--开具人、3--见证人
 * @method void setApproverRole(integer $ApproverRole) 设置1--收款人、2--开具人、3--见证人
 * @method array getVerifyChannel() 获取签署意愿确认渠道,WEIXINAPP:人脸识别
 * @method void setVerifyChannel(array $VerifyChannel) 设置签署意愿确认渠道,WEIXINAPP:人脸识别
 * @method integer getPreReadTime() 获取合同的强制预览时间：3~300s，未指定则按合同页数计算
 * @method void setPreReadTime(integer $PreReadTime) 设置合同的强制预览时间：3~300s，未指定则按合同页数计算
 */
class ApproverInfo extends AbstractModel
{
    /**
     * @var integer 参与者类型：
0：企业
1：个人
3：企业静默签署
注：类型为3（企业静默签署）时，此接口会默认完成该签署方的签署，目前只支持第一方进行静默签署。
     */
    public $ApproverType;

    /**
     * @var string 本环节需要操作人的名字
     */
    public $ApproverName;

    /**
     * @var string 本环节需要操作人的手机号
     */
    public $ApproverMobile;

    /**
     * @var array 本环节操作人签署控件配置，为企业静默签署时，只允许类型为SIGN_SEAL（印章）和SIGN_DATE（日期）控件，并且传入印章编号。
     */
    public $SignComponents;

    /**
     * @var string 如果是企业,则为企业的名字
     */
    public $OrganizationName;

    /**
     * @var string 身份证号
     */
    public $ApproverIdCardNumber;

    /**
     * @var string 证件类型 
ID_CARD 身份证
HONGKONG_AND_MACAO 港澳居民来往内地通行证
HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)
     */
    public $ApproverIdCardType;

    /**
     * @var string sms--短信，none--不通知
     */
    public $NotifyType;

    /**
     * @var integer 1--收款人、2--开具人、3--见证人
     */
    public $ApproverRole;

    /**
     * @var array 签署意愿确认渠道,WEIXINAPP:人脸识别
     */
    public $VerifyChannel;

    /**
     * @var integer 合同的强制预览时间：3~300s，未指定则按合同页数计算
     */
    public $PreReadTime;

    /**
     * @param integer $ApproverType 参与者类型：
0：企业
1：个人
3：企业静默签署
注：类型为3（企业静默签署）时，此接口会默认完成该签署方的签署，目前只支持第一方进行静默签署。
     * @param string $ApproverName 本环节需要操作人的名字
     * @param string $ApproverMobile 本环节需要操作人的手机号
     * @param array $SignComponents 本环节操作人签署控件配置，为企业静默签署时，只允许类型为SIGN_SEAL（印章）和SIGN_DATE（日期）控件，并且传入印章编号。
     * @param string $OrganizationName 如果是企业,则为企业的名字
     * @param string $ApproverIdCardNumber 身份证号
     * @param string $ApproverIdCardType 证件类型 
ID_CARD 身份证
HONGKONG_AND_MACAO 港澳居民来往内地通行证
HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)
     * @param string $NotifyType sms--短信，none--不通知
     * @param integer $ApproverRole 1--收款人、2--开具人、3--见证人
     * @param array $VerifyChannel 签署意愿确认渠道,WEIXINAPP:人脸识别
     * @param integer $PreReadTime 合同的强制预览时间：3~300s，未指定则按合同页数计算
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
        if (array_key_exists("ApproverType",$param) and $param["ApproverType"] !== null) {
            $this->ApproverType = $param["ApproverType"];
        }

        if (array_key_exists("ApproverName",$param) and $param["ApproverName"] !== null) {
            $this->ApproverName = $param["ApproverName"];
        }

        if (array_key_exists("ApproverMobile",$param) and $param["ApproverMobile"] !== null) {
            $this->ApproverMobile = $param["ApproverMobile"];
        }

        if (array_key_exists("SignComponents",$param) and $param["SignComponents"] !== null) {
            $this->SignComponents = [];
            foreach ($param["SignComponents"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->SignComponents, $obj);
            }
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("ApproverIdCardNumber",$param) and $param["ApproverIdCardNumber"] !== null) {
            $this->ApproverIdCardNumber = $param["ApproverIdCardNumber"];
        }

        if (array_key_exists("ApproverIdCardType",$param) and $param["ApproverIdCardType"] !== null) {
            $this->ApproverIdCardType = $param["ApproverIdCardType"];
        }

        if (array_key_exists("NotifyType",$param) and $param["NotifyType"] !== null) {
            $this->NotifyType = $param["NotifyType"];
        }

        if (array_key_exists("ApproverRole",$param) and $param["ApproverRole"] !== null) {
            $this->ApproverRole = $param["ApproverRole"];
        }

        if (array_key_exists("VerifyChannel",$param) and $param["VerifyChannel"] !== null) {
            $this->VerifyChannel = $param["VerifyChannel"];
        }

        if (array_key_exists("PreReadTime",$param) and $param["PreReadTime"] !== null) {
            $this->PreReadTime = $param["PreReadTime"];
        }
    }
}
