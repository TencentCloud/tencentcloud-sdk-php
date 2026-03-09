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
 * @method integer getSdkAppId() 获取<p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
 * @method integer getStartTimestamp() 获取<p>起始时间戳，Unix 秒级时间戳，最大支持近180天。</p>
 * @method void setStartTimestamp(integer $StartTimestamp) 设置<p>起始时间戳，Unix 秒级时间戳，最大支持近180天。</p>
 * @method integer getEndTimestamp() 获取<p>结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于90天。</p>
 * @method void setEndTimestamp(integer $EndTimestamp) 设置<p>结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于90天。</p>
 * @method string getDeliveryNumber() 获取<p>闪信投递号码（被叫号码）</p>
 * @method void setDeliveryNumber(string $DeliveryNumber) 设置<p>闪信投递号码（被叫号码）</p>
 * @method string getServingNumber() 获取<p>呼叫关联的系统号码</p>
 * @method void setServingNumber(string $ServingNumber) 设置<p>呼叫关联的系统号码</p>
 * @method string getSessionId() 获取<p>会话 ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话 ID</p>
 * @method integer getDeliveryStatus() 获取<p>投递结果 1 为成功，其他为失败</p>
 * @method void setDeliveryStatus(integer $DeliveryStatus) 设置<p>投递结果 1 为成功，其他为失败</p>
 * @method integer getPageSize() 获取<p>分页大小，默认 20，最大 1000</p><p>取值范围：[20, 1000]</p><p>单位：条</p><p>默认值：20</p>
 * @method void setPageSize(integer $PageSize) 设置<p>分页大小，默认 20，最大 1000</p><p>取值范围：[20, 1000]</p><p>单位：条</p><p>默认值：20</p>
 * @method integer getPageNumber() 获取<p>分页页码，从 0 开始</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>分页页码，从 0 开始</p>
 */
class DescribeFlashSMSListRequest extends AbstractModel
{
    /**
     * @var integer <p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
     */
    public $SdkAppId;

    /**
     * @var integer <p>起始时间戳，Unix 秒级时间戳，最大支持近180天。</p>
     */
    public $StartTimestamp;

    /**
     * @var integer <p>结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于90天。</p>
     */
    public $EndTimestamp;

    /**
     * @var string <p>闪信投递号码（被叫号码）</p>
     */
    public $DeliveryNumber;

    /**
     * @var string <p>呼叫关联的系统号码</p>
     */
    public $ServingNumber;

    /**
     * @var string <p>会话 ID</p>
     */
    public $SessionId;

    /**
     * @var integer <p>投递结果 1 为成功，其他为失败</p>
     */
    public $DeliveryStatus;

    /**
     * @var integer <p>分页大小，默认 20，最大 1000</p><p>取值范围：[20, 1000]</p><p>单位：条</p><p>默认值：20</p>
     */
    public $PageSize;

    /**
     * @var integer <p>分页页码，从 0 开始</p>
     */
    public $PageNumber;

    /**
     * @param integer $SdkAppId <p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
     * @param integer $StartTimestamp <p>起始时间戳，Unix 秒级时间戳，最大支持近180天。</p>
     * @param integer $EndTimestamp <p>结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于90天。</p>
     * @param string $DeliveryNumber <p>闪信投递号码（被叫号码）</p>
     * @param string $ServingNumber <p>呼叫关联的系统号码</p>
     * @param string $SessionId <p>会话 ID</p>
     * @param integer $DeliveryStatus <p>投递结果 1 为成功，其他为失败</p>
     * @param integer $PageSize <p>分页大小，默认 20，最大 1000</p><p>取值范围：[20, 1000]</p><p>单位：条</p><p>默认值：20</p>
     * @param integer $PageNumber <p>分页页码，从 0 开始</p>
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
