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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTrtcRoomUsage请求参数结构体
 *
 * @method integer getSdkAppid() 获取TRTC的SdkAppId，和房间所对应的SdkAppId相同。
 * @method void setSdkAppid(integer $SdkAppid) 设置TRTC的SdkAppId，和房间所对应的SdkAppId相同。
 * @method string getStartTime() 获取查询开始时间，格式为YYYY-MM-DD HH:MM，精确到分钟级。
 * @method void setStartTime(string $StartTime) 设置查询开始时间，格式为YYYY-MM-DD HH:MM，精确到分钟级。
 * @method string getEndTime() 获取查询结束时间，格式为YYYY-MM-DD HH:MM，单次查询不超过24h。
 * @method void setEndTime(string $EndTime) 设置查询结束时间，格式为YYYY-MM-DD HH:MM，单次查询不超过24h。
 */
class DescribeTrtcRoomUsageRequest extends AbstractModel
{
    /**
     * @var integer TRTC的SdkAppId，和房间所对应的SdkAppId相同。
     */
    public $SdkAppid;

    /**
     * @var string 查询开始时间，格式为YYYY-MM-DD HH:MM，精确到分钟级。
     */
    public $StartTime;

    /**
     * @var string 查询结束时间，格式为YYYY-MM-DD HH:MM，单次查询不超过24h。
     */
    public $EndTime;

    /**
     * @param integer $SdkAppid TRTC的SdkAppId，和房间所对应的SdkAppId相同。
     * @param string $StartTime 查询开始时间，格式为YYYY-MM-DD HH:MM，精确到分钟级。
     * @param string $EndTime 查询结束时间，格式为YYYY-MM-DD HH:MM，单次查询不超过24h。
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
        if (array_key_exists("SdkAppid",$param) and $param["SdkAppid"] !== null) {
            $this->SdkAppid = $param["SdkAppid"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
