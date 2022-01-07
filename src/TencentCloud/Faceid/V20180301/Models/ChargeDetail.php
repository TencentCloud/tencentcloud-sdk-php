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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费详情
 *
 * @method string getReqTime() 获取一比一时间时间戳，13位。
 * @method void setReqTime(string $ReqTime) 设置一比一时间时间戳，13位。
 * @method string getSeq() 获取一比一请求的唯一标记。
 * @method void setSeq(string $Seq) 设置一比一请求的唯一标记。
 * @method string getIdcard() 获取一比一时使用的、脱敏后的身份证号。
 * @method void setIdcard(string $Idcard) 设置一比一时使用的、脱敏后的身份证号。
 * @method string getName() 获取一比一时使用的、脱敏后的姓名。
 * @method void setName(string $Name) 设置一比一时使用的、脱敏后的姓名。
 * @method string getSim() 获取一比一的相似度。0-100，保留2位小数。
 * @method void setSim(string $Sim) 设置一比一的相似度。0-100，保留2位小数。
 * @method boolean getIsNeedCharge() 获取本次详情是否收费。
 * @method void setIsNeedCharge(boolean $IsNeedCharge) 设置本次详情是否收费。
 * @method string getChargeType() 获取收费类型，比对、核身、混合部署。
 * @method void setChargeType(string $ChargeType) 设置收费类型，比对、核身、混合部署。
 * @method string getErrorCode() 获取本次活体一比一最终结果。
 * @method void setErrorCode(string $ErrorCode) 设置本次活体一比一最终结果。
 * @method string getErrorMessage() 获取本次活体一比一最终结果描述。
 * @method void setErrorMessage(string $ErrorMessage) 设置本次活体一比一最终结果描述。
 */
class ChargeDetail extends AbstractModel
{
    /**
     * @var string 一比一时间时间戳，13位。
     */
    public $ReqTime;

    /**
     * @var string 一比一请求的唯一标记。
     */
    public $Seq;

    /**
     * @var string 一比一时使用的、脱敏后的身份证号。
     */
    public $Idcard;

    /**
     * @var string 一比一时使用的、脱敏后的姓名。
     */
    public $Name;

    /**
     * @var string 一比一的相似度。0-100，保留2位小数。
     */
    public $Sim;

    /**
     * @var boolean 本次详情是否收费。
     */
    public $IsNeedCharge;

    /**
     * @var string 收费类型，比对、核身、混合部署。
     */
    public $ChargeType;

    /**
     * @var string 本次活体一比一最终结果。
     */
    public $ErrorCode;

    /**
     * @var string 本次活体一比一最终结果描述。
     */
    public $ErrorMessage;

    /**
     * @param string $ReqTime 一比一时间时间戳，13位。
     * @param string $Seq 一比一请求的唯一标记。
     * @param string $Idcard 一比一时使用的、脱敏后的身份证号。
     * @param string $Name 一比一时使用的、脱敏后的姓名。
     * @param string $Sim 一比一的相似度。0-100，保留2位小数。
     * @param boolean $IsNeedCharge 本次详情是否收费。
     * @param string $ChargeType 收费类型，比对、核身、混合部署。
     * @param string $ErrorCode 本次活体一比一最终结果。
     * @param string $ErrorMessage 本次活体一比一最终结果描述。
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
        if (array_key_exists("ReqTime",$param) and $param["ReqTime"] !== null) {
            $this->ReqTime = $param["ReqTime"];
        }

        if (array_key_exists("Seq",$param) and $param["Seq"] !== null) {
            $this->Seq = $param["Seq"];
        }

        if (array_key_exists("Idcard",$param) and $param["Idcard"] !== null) {
            $this->Idcard = $param["Idcard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Sim",$param) and $param["Sim"] !== null) {
            $this->Sim = $param["Sim"];
        }

        if (array_key_exists("IsNeedCharge",$param) and $param["IsNeedCharge"] !== null) {
            $this->IsNeedCharge = $param["IsNeedCharge"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }
    }
}
