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
namespace TencentCloud\Ic\V20190307\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询短信列表
 *
 * @method string getIccid() 获取卡片ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIccid(string $Iccid) 设置卡片ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsisdn() 获取卡片号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsisdn(string $Msisdn) 设置卡片号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSdkAppid() 获取应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSdkAppid(integer $SdkAppid) 设置应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取短信内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置短信内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSmsType() 获取短信类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmsType(integer $SmsType) 设置短信类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSendTime() 获取发送时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSendTime(string $SendTime) 设置发送时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReportTime() 获取推送时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportTime(string $ReportTime) 设置推送时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取SUCC：成功  FAIL 失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置SUCC：成功  FAIL 失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取回执状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置回执状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResSms extends AbstractModel
{
    /**
     * @var string 卡片ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Iccid;

    /**
     * @var string 卡片号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Msisdn;

    /**
     * @var integer 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SdkAppid;

    /**
     * @var string 短信内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var integer 短信类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmsType;

    /**
     * @var string 发送时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SendTime;

    /**
     * @var string 推送时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportTime;

    /**
     * @var string SUCC：成功  FAIL 失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var integer 回执状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $Iccid 卡片ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Msisdn 卡片号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SdkAppid 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content 短信内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SmsType 短信类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SendTime 发送时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReportTime 推送时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark SUCC：成功  FAIL 失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 回执状态
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
        if (array_key_exists("Iccid",$param) and $param["Iccid"] !== null) {
            $this->Iccid = $param["Iccid"];
        }

        if (array_key_exists("Msisdn",$param) and $param["Msisdn"] !== null) {
            $this->Msisdn = $param["Msisdn"];
        }

        if (array_key_exists("SdkAppid",$param) and $param["SdkAppid"] !== null) {
            $this->SdkAppid = $param["SdkAppid"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("SmsType",$param) and $param["SmsType"] !== null) {
            $this->SmsType = $param["SmsType"];
        }

        if (array_key_exists("SendTime",$param) and $param["SendTime"] !== null) {
            $this->SendTime = $param["SendTime"];
        }

        if (array_key_exists("ReportTime",$param) and $param["ReportTime"] !== null) {
            $this->ReportTime = $param["ReportTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
