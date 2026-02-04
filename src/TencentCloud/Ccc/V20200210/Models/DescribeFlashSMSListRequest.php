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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFlashSMSList请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method integer getStartTimestamp() 获取起始时间戳，Unix 秒级时间戳，最大支持近180天。
 * @method void setStartTimestamp(integer $StartTimestamp) 设置起始时间戳，Unix 秒级时间戳，最大支持近180天。
 * @method integer getEndTimestamp() 获取结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于90天。
 * @method void setEndTimestamp(integer $EndTimestamp) 设置结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于90天。
 * @method string getDeliveryNumber() 获取闪信投递号码（被叫号码）
 * @method void setDeliveryNumber(string $DeliveryNumber) 设置闪信投递号码（被叫号码）
 * @method string getServingNumber() 获取呼叫关联的系统号码
 * @method void setServingNumber(string $ServingNumber) 设置呼叫关联的系统号码
 * @method string getSessionId() 获取会话 ID
 * @method void setSessionId(string $SessionId) 设置会话 ID
 * @method integer getDeliveryStatus() 获取投递结果 1 为成功，其他为失败
 * @method void setDeliveryStatus(integer $DeliveryStatus) 设置投递结果 1 为成功，其他为失败
 * @method integer getPageSize() 获取分页大小，默认 20，最大 100
 * @method void setPageSize(integer $PageSize) 设置分页大小，默认 20，最大 100
 * @method integer getPageNumber() 获取分页页码，从 0 开始
 * @method void setPageNumber(integer $PageNumber) 设置分页页码，从 0 开始
 */
class DescribeFlashSMSListRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var integer 起始时间戳，Unix 秒级时间戳，最大支持近180天。
     */
    public $StartTimestamp;

    /**
     * @var integer 结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于90天。
     */
    public $EndTimestamp;

    /**
     * @var string 闪信投递号码（被叫号码）
     */
    public $DeliveryNumber;

    /**
     * @var string 呼叫关联的系统号码
     */
    public $ServingNumber;

    /**
     * @var string 会话 ID
     */
    public $SessionId;

    /**
     * @var integer 投递结果 1 为成功，其他为失败
     */
    public $DeliveryStatus;

    /**
     * @var integer 分页大小，默认 20，最大 100
     */
    public $PageSize;

    /**
     * @var integer 分页页码，从 0 开始
     */
    public $PageNumber;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param integer $StartTimestamp 起始时间戳，Unix 秒级时间戳，最大支持近180天。
     * @param integer $EndTimestamp 结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于90天。
     * @param string $DeliveryNumber 闪信投递号码（被叫号码）
     * @param string $ServingNumber 呼叫关联的系统号码
     * @param string $SessionId 会话 ID
     * @param integer $DeliveryStatus 投递结果 1 为成功，其他为失败
     * @param integer $PageSize 分页大小，默认 20，最大 100
     * @param integer $PageNumber 分页页码，从 0 开始
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("StartTimestamp",$param) and $param["StartTimestamp"] !== null) {
            $this->StartTimestamp = $param["StartTimestamp"];
        }

        if (array_key_exists("EndTimestamp",$param) and $param["EndTimestamp"] !== null) {
            $this->EndTimestamp = $param["EndTimestamp"];
        }

        if (array_key_exists("DeliveryNumber",$param) and $param["DeliveryNumber"] !== null) {
            $this->DeliveryNumber = $param["DeliveryNumber"];
        }

        if (array_key_exists("ServingNumber",$param) and $param["ServingNumber"] !== null) {
            $this->ServingNumber = $param["ServingNumber"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("DeliveryStatus",$param) and $param["DeliveryStatus"] !== null) {
            $this->DeliveryStatus = $param["DeliveryStatus"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}
