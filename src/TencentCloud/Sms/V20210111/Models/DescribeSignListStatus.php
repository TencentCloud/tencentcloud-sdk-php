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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取短信签名信息响应
 *
 * @method integer getSignId() 获取签名ID。
 * @method void setSignId(integer $SignId) 设置签名ID。
 * @method integer getInternational() 获取是否国际/港澳台短信，其中0表示国内短信，1表示国际/港澳台短信。
 * @method void setInternational(integer $International) 设置是否国际/港澳台短信，其中0表示国内短信，1表示国际/港澳台短信。
 * @method integer getStatusCode() 获取申请签名状态，其中0表示审核通过且已生效，1表示审核中，2表示审核通过待生效，-1表示审核未通过或审核失败。
 * @method void setStatusCode(integer $StatusCode) 设置申请签名状态，其中0表示审核通过且已生效，1表示审核中，2表示审核通过待生效，-1表示审核未通过或审核失败。
 * @method string getReviewReply() 获取审核回复，审核人员审核后给出的回复，通常是审核未通过的原因。
 * @method void setReviewReply(string $ReviewReply) 设置审核回复，审核人员审核后给出的回复，通常是审核未通过的原因。
 * @method string getSignName() 获取签名名称。
 * @method void setSignName(string $SignName) 设置签名名称。
 * @method integer getCreateTime() 获取提交审核时间，UNIX 时间戳（单位：秒）。
 * @method void setCreateTime(integer $CreateTime) 设置提交审核时间，UNIX 时间戳（单位：秒）。
 * @method integer getQualificationId() 获取国内短信的资质 ID。资质 ID 信息可前往国内短信的 [实名资质管理](https://console.cloud.tencent.com/smsv2/enterprise) 页查看。
注：国际短信不涉及，默认为0。
 * @method void setQualificationId(integer $QualificationId) 设置国内短信的资质 ID。资质 ID 信息可前往国内短信的 [实名资质管理](https://console.cloud.tencent.com/smsv2/enterprise) 页查看。
注：国际短信不涉及，默认为0。
 * @method string getQualificationName() 获取国内短信的资质名称。
注：国际短信不涉及，默认为空。
 * @method void setQualificationName(string $QualificationName) 设置国内短信的资质名称。
注：国际短信不涉及，默认为空。
 * @method integer getQualificationStatusCode() 获取国内短信的资质状态。其中0表示待审核，1表示已通过，2表示已拒绝，3表示待补充后提交，4表示变更后待审核，5表示变更后被驳回。可参考 [实名资质审核状态说明](https://cloud.tencent.com/document/product/382/13444#.E5.AE.A1.E6.A0.B8.E7.8A.B6.E6.80.81.E8.AF.B4.E6.98.8E) 。
注：国际短信不涉及，默认为0。
 * @method void setQualificationStatusCode(integer $QualificationStatusCode) 设置国内短信的资质状态。其中0表示待审核，1表示已通过，2表示已拒绝，3表示待补充后提交，4表示变更后待审核，5表示变更后被驳回。可参考 [实名资质审核状态说明](https://cloud.tencent.com/document/product/382/13444#.E5.AE.A1.E6.A0.B8.E7.8A.B6.E6.80.81.E8.AF.B4.E6.98.8E) 。
注：国际短信不涉及，默认为0。
 */
class DescribeSignListStatus extends AbstractModel
{
    /**
     * @var integer 签名ID。
     */
    public $SignId;

    /**
     * @var integer 是否国际/港澳台短信，其中0表示国内短信，1表示国际/港澳台短信。
     */
    public $International;

    /**
     * @var integer 申请签名状态，其中0表示审核通过且已生效，1表示审核中，2表示审核通过待生效，-1表示审核未通过或审核失败。
     */
    public $StatusCode;

    /**
     * @var string 审核回复，审核人员审核后给出的回复，通常是审核未通过的原因。
     */
    public $ReviewReply;

    /**
     * @var string 签名名称。
     */
    public $SignName;

    /**
     * @var integer 提交审核时间，UNIX 时间戳（单位：秒）。
     */
    public $CreateTime;

    /**
     * @var integer 国内短信的资质 ID。资质 ID 信息可前往国内短信的 [实名资质管理](https://console.cloud.tencent.com/smsv2/enterprise) 页查看。
注：国际短信不涉及，默认为0。
     */
    public $QualificationId;

    /**
     * @var string 国内短信的资质名称。
注：国际短信不涉及，默认为空。
     */
    public $QualificationName;

    /**
     * @var integer 国内短信的资质状态。其中0表示待审核，1表示已通过，2表示已拒绝，3表示待补充后提交，4表示变更后待审核，5表示变更后被驳回。可参考 [实名资质审核状态说明](https://cloud.tencent.com/document/product/382/13444#.E5.AE.A1.E6.A0.B8.E7.8A.B6.E6.80.81.E8.AF.B4.E6.98.8E) 。
注：国际短信不涉及，默认为0。
     */
    public $QualificationStatusCode;

    /**
     * @param integer $SignId 签名ID。
     * @param integer $International 是否国际/港澳台短信，其中0表示国内短信，1表示国际/港澳台短信。
     * @param integer $StatusCode 申请签名状态，其中0表示审核通过且已生效，1表示审核中，2表示审核通过待生效，-1表示审核未通过或审核失败。
     * @param string $ReviewReply 审核回复，审核人员审核后给出的回复，通常是审核未通过的原因。
     * @param string $SignName 签名名称。
     * @param integer $CreateTime 提交审核时间，UNIX 时间戳（单位：秒）。
     * @param integer $QualificationId 国内短信的资质 ID。资质 ID 信息可前往国内短信的 [实名资质管理](https://console.cloud.tencent.com/smsv2/enterprise) 页查看。
注：国际短信不涉及，默认为0。
     * @param string $QualificationName 国内短信的资质名称。
注：国际短信不涉及，默认为空。
     * @param integer $QualificationStatusCode 国内短信的资质状态。其中0表示待审核，1表示已通过，2表示已拒绝，3表示待补充后提交，4表示变更后待审核，5表示变更后被驳回。可参考 [实名资质审核状态说明](https://cloud.tencent.com/document/product/382/13444#.E5.AE.A1.E6.A0.B8.E7.8A.B6.E6.80.81.E8.AF.B4.E6.98.8E) 。
注：国际短信不涉及，默认为0。
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
        if (array_key_exists("SignId",$param) and $param["SignId"] !== null) {
            $this->SignId = $param["SignId"];
        }

        if (array_key_exists("International",$param) and $param["International"] !== null) {
            $this->International = $param["International"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("ReviewReply",$param) and $param["ReviewReply"] !== null) {
            $this->ReviewReply = $param["ReviewReply"];
        }

        if (array_key_exists("SignName",$param) and $param["SignName"] !== null) {
            $this->SignName = $param["SignName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("QualificationId",$param) and $param["QualificationId"] !== null) {
            $this->QualificationId = $param["QualificationId"];
        }

        if (array_key_exists("QualificationName",$param) and $param["QualificationName"] !== null) {
            $this->QualificationName = $param["QualificationName"];
        }

        if (array_key_exists("QualificationStatusCode",$param) and $param["QualificationStatusCode"] !== null) {
            $this->QualificationStatusCode = $param["QualificationStatusCode"];
        }
    }
}
