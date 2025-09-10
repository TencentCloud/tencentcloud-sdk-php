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
 * DescribeSessionDetail请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method string getSessionId() 获取通话的 session id
 * @method void setSessionId(string $SessionId) 设置通话的 session id
 * @method integer getStartTimestamp() 获取起始时间戳，Unix 秒级时间戳，最大支持近180天。
 * @method void setStartTimestamp(integer $StartTimestamp) 设置起始时间戳，Unix 秒级时间戳，最大支持近180天。
 * @method integer getEndTimestamp() 获取结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于90天。
 * @method void setEndTimestamp(integer $EndTimestamp) 设置结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于90天。
 */
class DescribeSessionDetailRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var string 通话的 session id
     */
    public $SessionId;

    /**
     * @var integer 起始时间戳，Unix 秒级时间戳，最大支持近180天。
     */
    public $StartTimestamp;

    /**
     * @var integer 结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于90天。
     */
    public $EndTimestamp;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param string $SessionId 通话的 session id
     * @param integer $StartTimestamp 起始时间戳，Unix 秒级时间戳，最大支持近180天。
     * @param integer $EndTimestamp 结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于90天。
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

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("StartTimestamp",$param) and $param["StartTimestamp"] !== null) {
            $this->StartTimestamp = $param["StartTimestamp"];
        }

        if (array_key_exists("EndTimestamp",$param) and $param["EndTimestamp"] !== null) {
            $this->EndTimestamp = $param["EndTimestamp"];
        }
    }
}
