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
 * DescribeTRTCSegmentModerationUsage请求参数结构体
 *
 * @method string getStartTime() 获取查询开始时间，格式为YYYY-MM-DD HH:mm:ss。
 * @method void setStartTime(string $StartTime) 设置查询开始时间，格式为YYYY-MM-DD HH:mm:ss。
 * @method string getEndTime() 获取查询结束时间，格式为YYYY-MM-DD HH:mm:ss。单次查询统计区间最多不能超过31天。
 * @method void setEndTime(string $EndTime) 设置查询结束时间，格式为YYYY-MM-DD HH:mm:ss。单次查询统计区间最多不能超过31天。
 * @method string getType() 获取媒体类型，枚举值：audio（音频）、picture（图片）
 * @method void setType(string $Type) 设置媒体类型，枚举值：audio（音频）、picture（图片）
 * @method integer getBusiness() 获取使用场景（业务类型），枚举值：0 = AI 内容理解（审核场景）、1 = 音视频切片（云端切片场景）
 * @method void setBusiness(integer $Business) 设置使用场景（业务类型），枚举值：0 = AI 内容理解（审核场景）、1 = 音视频切片（云端切片场景）
 * @method integer getSdkAppId() 获取应用ID，可不传。传应用ID时返回的是该应用的用量，不传时返回多个应用的合计值。
 * @method void setSdkAppId(integer $SdkAppId) 设置应用ID，可不传。传应用ID时返回的是该应用的用量，不传时返回多个应用的合计值。
 */
class DescribeTRTCSegmentModerationUsageRequest extends AbstractModel
{
    /**
     * @var string 查询开始时间，格式为YYYY-MM-DD HH:mm:ss。
     */
    public $StartTime;

    /**
     * @var string 查询结束时间，格式为YYYY-MM-DD HH:mm:ss。单次查询统计区间最多不能超过31天。
     */
    public $EndTime;

    /**
     * @var string 媒体类型，枚举值：audio（音频）、picture（图片）
     */
    public $Type;

    /**
     * @var integer 使用场景（业务类型），枚举值：0 = AI 内容理解（审核场景）、1 = 音视频切片（云端切片场景）
     */
    public $Business;

    /**
     * @var integer 应用ID，可不传。传应用ID时返回的是该应用的用量，不传时返回多个应用的合计值。
     */
    public $SdkAppId;

    /**
     * @param string $StartTime 查询开始时间，格式为YYYY-MM-DD HH:mm:ss。
     * @param string $EndTime 查询结束时间，格式为YYYY-MM-DD HH:mm:ss。单次查询统计区间最多不能超过31天。
     * @param string $Type 媒体类型，枚举值：audio（音频）、picture（图片）
     * @param integer $Business 使用场景（业务类型），枚举值：0 = AI 内容理解（审核场景）、1 = 音视频切片（云端切片场景）
     * @param integer $SdkAppId 应用ID，可不传。传应用ID时返回的是该应用的用量，不传时返回多个应用的合计值。
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }
    }
}
