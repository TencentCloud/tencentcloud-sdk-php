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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRelayUsage请求参数结构体
 *
 * @method string getStartTime() 获取查询开始时间，格式为YYYY-MM-DD。
 * @method void setStartTime(string $StartTime) 设置查询开始时间，格式为YYYY-MM-DD。
 * @method string getEndTime() 获取查询结束时间，格式为YYYY-MM-DD。
单次查询统计区间最多不能超过31天。
 * @method void setEndTime(string $EndTime) 设置查询结束时间，格式为YYYY-MM-DD。
单次查询统计区间最多不能超过31天。
 * @method integer getSdkAppId() 获取TRTC的SdkAppId，和房间所对应的SdkAppId相同。如果没有这个参数，返回用户下全部实时音视频应用的汇总。
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC的SdkAppId，和房间所对应的SdkAppId相同。如果没有这个参数，返回用户下全部实时音视频应用的汇总。
 */
class DescribeRelayUsageRequest extends AbstractModel
{
    /**
     * @var string 查询开始时间，格式为YYYY-MM-DD。
     */
    public $StartTime;

    /**
     * @var string 查询结束时间，格式为YYYY-MM-DD。
单次查询统计区间最多不能超过31天。
     */
    public $EndTime;

    /**
     * @var integer TRTC的SdkAppId，和房间所对应的SdkAppId相同。如果没有这个参数，返回用户下全部实时音视频应用的汇总。
     */
    public $SdkAppId;

    /**
     * @param string $StartTime 查询开始时间，格式为YYYY-MM-DD。
     * @param string $EndTime 查询结束时间，格式为YYYY-MM-DD。
单次查询统计区间最多不能超过31天。
     * @param integer $SdkAppId TRTC的SdkAppId，和房间所对应的SdkAppId相同。如果没有这个参数，返回用户下全部实时音视频应用的汇总。
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }
    }
}
