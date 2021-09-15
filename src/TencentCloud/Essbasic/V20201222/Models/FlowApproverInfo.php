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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此结构体 (FlowApproverInfo) 用于描述流程参与者信息。
 *
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method array getVerifyChannel() 获取认证方式：
WEIXINAPP - 微信小程序；
FACEID - 慧眼 (默认)；
VERIFYCODE - 验证码；
THIRD - 第三方 (暂不支持)
 * @method void setVerifyChannel(array $VerifyChannel) 设置认证方式：
WEIXINAPP - 微信小程序；
FACEID - 慧眼 (默认)；
VERIFYCODE - 验证码；
THIRD - 第三方 (暂不支持)
 * @method integer getApproveStatus() 获取签署状态：
0 - 待签署；
1- 已签署；
2 - 拒绝；
3 - 过期未处理；
4 - 流程已撤回,
12-审核中,
13-审核驳回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveStatus(integer $ApproveStatus) 设置签署状态：
0 - 待签署；
1- 已签署；
2 - 拒绝；
3 - 过期未处理；
4 - 流程已撤回,
12-审核中,
13-审核驳回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveMessage() 获取拒签/签署/审核驳回原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveMessage(string $ApproveMessage) 设置拒签/签署/审核驳回原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getApproveTime() 获取签约时间的时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveTime(integer $ApproveTime) 设置签约时间的时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubOrganizationId() 获取签署企业ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubOrganizationId(string $SubOrganizationId) 设置签署企业ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJumpUrl() 获取签署完成后跳转的URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJumpUrl(string $JumpUrl) 设置签署完成后跳转的URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getComponentSeals() 获取用户签署区ID到印章ID的映射集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponentSeals(array $ComponentSeals) 设置用户签署区ID到印章ID的映射集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsFullText() 获取签署前置条件：是否强制用户全文阅读，即阅读到待签署文档的最后一页。默认FALSE
 * @method void setIsFullText(boolean $IsFullText) 设置签署前置条件：是否强制用户全文阅读，即阅读到待签署文档的最后一页。默认FALSE
 * @method integer getPreReadTime() 获取签署前置条件：强制阅读时长，页面停留时长不足则不允许签署。默认不限制
 * @method void setPreReadTime(integer $PreReadTime) 设置签署前置条件：强制阅读时长，页面停留时长不足则不允许签署。默认不限制
 * @method string getMobile() 获取签署人手机号，脱敏显示
 * @method void setMobile(string $Mobile) 设置签署人手机号，脱敏显示
 * @method integer getDeadline() 获取签署链接截止时间，默认签署流程发起后7天失效
 * @method void setDeadline(integer $Deadline) 设置签署链接截止时间，默认签署流程发起后7天失效
 * @method boolean getIsLastApprover() 获取是否为最后一个签署人, 若为最后一人，则其签署完成后自动归档
 * @method void setIsLastApprover(boolean $IsLastApprover) 设置是否为最后一个签署人, 若为最后一人，则其签署完成后自动归档
 * @method SmsTemplate getSmsTemplate() 获取短信模板
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmsTemplate(SmsTemplate $SmsTemplate) 设置短信模板
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdCardNumber() 获取身份证号，脱敏显示
 * @method void setIdCardNumber(string $IdCardNumber) 设置身份证号，脱敏显示
 * @method string getName() 获取用户姓名
 * @method void setName(string $Name) 设置用户姓名
 * @method boolean getCanOffLine() 获取是否支持线下核身
 * @method void setCanOffLine(boolean $CanOffLine) 设置是否支持线下核身
 * @method string getIdCardType() 获取证件号码类型：ID_CARD - 身份证，PASSPORT - 护照，MAINLAND_TRAVEL_PERMIT_FOR_HONGKONG_AND_MACAO_RESIDENTS - 港澳居民来往内地通行证; 暂不支持用于电子签自有平台实名认证，MAINLAND_TRAVEL_PERMIT_FOR_TAIWAN_RESIDENTS - 台湾居民来往大陆通行证; 暂不支持用于电子签自有平台实名认证，HOUSEHOLD_REGISTER - 户口本; 暂不支持用于电子签自有平台实名认证，TEMP_ID_CARD - 临时居民身份证; 暂不支持用于电子签自有平台实名认证
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdCardType(string $IdCardType) 设置证件号码类型：ID_CARD - 身份证，PASSPORT - 护照，MAINLAND_TRAVEL_PERMIT_FOR_HONGKONG_AND_MACAO_RESIDENTS - 港澳居民来往内地通行证; 暂不支持用于电子签自有平台实名认证，MAINLAND_TRAVEL_PERMIT_FOR_TAIWAN_RESIDENTS - 台湾居民来往大陆通行证; 暂不支持用于电子签自有平台实名认证，HOUSEHOLD_REGISTER - 户口本; 暂不支持用于电子签自有平台实名认证，TEMP_ID_CARD - 临时居民身份证; 暂不支持用于电子签自有平台实名认证
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCallbackUrl() 获取签署回调地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallbackUrl(string $CallbackUrl) 设置签署回调地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSignId() 获取签署任务ID，标识每一次的流程发送
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignId(string $SignId) 设置签署任务ID，标识每一次的流程发送
注意：此字段可能返回 null，表示取不到有效值。
 */
class FlowApproverInfo extends AbstractModel
{
    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var array 认证方式：
WEIXINAPP - 微信小程序；
FACEID - 慧眼 (默认)；
VERIFYCODE - 验证码；
THIRD - 第三方 (暂不支持)
     */
    public $VerifyChannel;

    /**
     * @var integer 签署状态：
0 - 待签署；
1- 已签署；
2 - 拒绝；
3 - 过期未处理；
4 - 流程已撤回,
12-审核中,
13-审核驳回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveStatus;

    /**
     * @var string 拒签/签署/审核驳回原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveMessage;

    /**
     * @var integer 签约时间的时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveTime;

    /**
     * @var string 签署企业ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubOrganizationId;

    /**
     * @var string 签署完成后跳转的URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JumpUrl;

    /**
     * @var array 用户签署区ID到印章ID的映射集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComponentSeals;

    /**
     * @var boolean 签署前置条件：是否强制用户全文阅读，即阅读到待签署文档的最后一页。默认FALSE
     */
    public $IsFullText;

    /**
     * @var integer 签署前置条件：强制阅读时长，页面停留时长不足则不允许签署。默认不限制
     */
    public $PreReadTime;

    /**
     * @var string 签署人手机号，脱敏显示
     */
    public $Mobile;

    /**
     * @var integer 签署链接截止时间，默认签署流程发起后7天失效
     */
    public $Deadline;

    /**
     * @var boolean 是否为最后一个签署人, 若为最后一人，则其签署完成后自动归档
     */
    public $IsLastApprover;

    /**
     * @var SmsTemplate 短信模板
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmsTemplate;

    /**
     * @var string 身份证号，脱敏显示
     */
    public $IdCardNumber;

    /**
     * @var string 用户姓名
     */
    public $Name;

    /**
     * @var boolean 是否支持线下核身
     */
    public $CanOffLine;

    /**
     * @var string 证件号码类型：ID_CARD - 身份证，PASSPORT - 护照，MAINLAND_TRAVEL_PERMIT_FOR_HONGKONG_AND_MACAO_RESIDENTS - 港澳居民来往内地通行证; 暂不支持用于电子签自有平台实名认证，MAINLAND_TRAVEL_PERMIT_FOR_TAIWAN_RESIDENTS - 台湾居民来往大陆通行证; 暂不支持用于电子签自有平台实名认证，HOUSEHOLD_REGISTER - 户口本; 暂不支持用于电子签自有平台实名认证，TEMP_ID_CARD - 临时居民身份证; 暂不支持用于电子签自有平台实名认证
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdCardType;

    /**
     * @var string 签署回调地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallbackUrl;

    /**
     * @var string 签署任务ID，标识每一次的流程发送
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SignId;

    /**
     * @param string $UserId 用户ID
     * @param array $VerifyChannel 认证方式：
WEIXINAPP - 微信小程序；
FACEID - 慧眼 (默认)；
VERIFYCODE - 验证码；
THIRD - 第三方 (暂不支持)
     * @param integer $ApproveStatus 签署状态：
0 - 待签署；
1- 已签署；
2 - 拒绝；
3 - 过期未处理；
4 - 流程已撤回,
12-审核中,
13-审核驳回
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveMessage 拒签/签署/审核驳回原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ApproveTime 签约时间的时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubOrganizationId 签署企业ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JumpUrl 签署完成后跳转的URL
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ComponentSeals 用户签署区ID到印章ID的映射集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsFullText 签署前置条件：是否强制用户全文阅读，即阅读到待签署文档的最后一页。默认FALSE
     * @param integer $PreReadTime 签署前置条件：强制阅读时长，页面停留时长不足则不允许签署。默认不限制
     * @param string $Mobile 签署人手机号，脱敏显示
     * @param integer $Deadline 签署链接截止时间，默认签署流程发起后7天失效
     * @param boolean $IsLastApprover 是否为最后一个签署人, 若为最后一人，则其签署完成后自动归档
     * @param SmsTemplate $SmsTemplate 短信模板
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdCardNumber 身份证号，脱敏显示
     * @param string $Name 用户姓名
     * @param boolean $CanOffLine 是否支持线下核身
     * @param string $IdCardType 证件号码类型：ID_CARD - 身份证，PASSPORT - 护照，MAINLAND_TRAVEL_PERMIT_FOR_HONGKONG_AND_MACAO_RESIDENTS - 港澳居民来往内地通行证; 暂不支持用于电子签自有平台实名认证，MAINLAND_TRAVEL_PERMIT_FOR_TAIWAN_RESIDENTS - 台湾居民来往大陆通行证; 暂不支持用于电子签自有平台实名认证，HOUSEHOLD_REGISTER - 户口本; 暂不支持用于电子签自有平台实名认证，TEMP_ID_CARD - 临时居民身份证; 暂不支持用于电子签自有平台实名认证
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CallbackUrl 签署回调地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SignId 签署任务ID，标识每一次的流程发送
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("VerifyChannel",$param) and $param["VerifyChannel"] !== null) {
            $this->VerifyChannel = $param["VerifyChannel"];
        }

        if (array_key_exists("ApproveStatus",$param) and $param["ApproveStatus"] !== null) {
            $this->ApproveStatus = $param["ApproveStatus"];
        }

        if (array_key_exists("ApproveMessage",$param) and $param["ApproveMessage"] !== null) {
            $this->ApproveMessage = $param["ApproveMessage"];
        }

        if (array_key_exists("ApproveTime",$param) and $param["ApproveTime"] !== null) {
            $this->ApproveTime = $param["ApproveTime"];
        }

        if (array_key_exists("SubOrganizationId",$param) and $param["SubOrganizationId"] !== null) {
            $this->SubOrganizationId = $param["SubOrganizationId"];
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }

        if (array_key_exists("ComponentSeals",$param) and $param["ComponentSeals"] !== null) {
            $this->ComponentSeals = [];
            foreach ($param["ComponentSeals"] as $key => $value){
                $obj = new ComponentSeal();
                $obj->deserialize($value);
                array_push($this->ComponentSeals, $obj);
            }
        }

        if (array_key_exists("IsFullText",$param) and $param["IsFullText"] !== null) {
            $this->IsFullText = $param["IsFullText"];
        }

        if (array_key_exists("PreReadTime",$param) and $param["PreReadTime"] !== null) {
            $this->PreReadTime = $param["PreReadTime"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("IsLastApprover",$param) and $param["IsLastApprover"] !== null) {
            $this->IsLastApprover = $param["IsLastApprover"];
        }

        if (array_key_exists("SmsTemplate",$param) and $param["SmsTemplate"] !== null) {
            $this->SmsTemplate = new SmsTemplate();
            $this->SmsTemplate->deserialize($param["SmsTemplate"]);
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CanOffLine",$param) and $param["CanOffLine"] !== null) {
            $this->CanOffLine = $param["CanOffLine"];
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("SignId",$param) and $param["SignId"] !== null) {
            $this->SignId = $param["SignId"];
        }
    }
}
