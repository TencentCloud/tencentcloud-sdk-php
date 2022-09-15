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
 * DescribeSms请求参数结构体
 *
 * @method integer getSdkappid() 获取应用ID
 * @method void setSdkappid(integer $Sdkappid) 设置应用ID
 * @method string getIccid() 获取卡片ID
 * @method void setIccid(string $Iccid) 设置卡片ID
 * @method string getMsisdn() 获取卡片号码
 * @method void setMsisdn(string $Msisdn) 设置卡片号码
 * @method integer getSmsType() 获取短信类型
 * @method void setSmsType(integer $SmsType) 设置短信类型
 * @method string getBeginTime() 获取开始时间  YYYY-MM-DD HH:mm:ss
 * @method void setBeginTime(string $BeginTime) 设置开始时间  YYYY-MM-DD HH:mm:ss
 * @method string getEndTime() 获取结束时间  YYYY-MM-DD HH:mm:ss
 * @method void setEndTime(string $EndTime) 设置结束时间  YYYY-MM-DD HH:mm:ss
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取小于200
 * @method void setLimit(integer $Limit) 设置小于200
 */
class DescribeSmsRequest extends AbstractModel
{
    /**
     * @var integer 应用ID
     */
    public $Sdkappid;

    /**
     * @var string 卡片ID
     */
    public $Iccid;

    /**
     * @var string 卡片号码
     */
    public $Msisdn;

    /**
     * @var integer 短信类型
     */
    public $SmsType;

    /**
     * @var string 开始时间  YYYY-MM-DD HH:mm:ss
     */
    public $BeginTime;

    /**
     * @var string 结束时间  YYYY-MM-DD HH:mm:ss
     */
    public $EndTime;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 小于200
     */
    public $Limit;

    /**
     * @param integer $Sdkappid 应用ID
     * @param string $Iccid 卡片ID
     * @param string $Msisdn 卡片号码
     * @param integer $SmsType 短信类型
     * @param string $BeginTime 开始时间  YYYY-MM-DD HH:mm:ss
     * @param string $EndTime 结束时间  YYYY-MM-DD HH:mm:ss
     * @param integer $Offset 偏移量
     * @param integer $Limit 小于200
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
        if (array_key_exists("Sdkappid",$param) and $param["Sdkappid"] !== null) {
            $this->Sdkappid = $param["Sdkappid"];
        }

        if (array_key_exists("Iccid",$param) and $param["Iccid"] !== null) {
            $this->Iccid = $param["Iccid"];
        }

        if (array_key_exists("Msisdn",$param) and $param["Msisdn"] !== null) {
            $this->Msisdn = $param["Msisdn"];
        }

        if (array_key_exists("SmsType",$param) and $param["SmsType"] !== null) {
            $this->SmsType = $param["SmsType"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
