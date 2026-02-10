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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePlayRecords请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>低代码互动课堂的SdkAppId。</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>低代码互动课堂的SdkAppId。</p>
 * @method integer getRoomId() 获取<p>房间ID。</p>
 * @method void setRoomId(integer $RoomId) 设置<p>房间ID。</p>
 * @method integer getStartTime() 获取<p>开始时间，unix时间戳（秒）。</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间，unix时间戳（秒）。</p>
 * @method integer getEndTime() 获取<p>结束时间，unix时间戳（秒）。</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间，unix时间戳（秒）。</p>
 * @method integer getPage() 获取<p>页码，从1开始递增。</p><p>默认值：1</p>
 * @method void setPage(integer $Page) 设置<p>页码，从1开始递增。</p><p>默认值：1</p>
 * @method integer getPageSize() 获取<p>每页获取的记录条数。</p><p>取值范围：[1, 200]</p><p>默认值：20</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页获取的记录条数。</p><p>取值范围：[1, 200]</p><p>默认值：20</p>
 * @method string getUserId() 获取<p>用户ID。</p>
 * @method void setUserId(string $UserId) 设置<p>用户ID。</p>
 */
class DescribePlayRecordsRequest extends AbstractModel
{
    /**
     * @var integer <p>低代码互动课堂的SdkAppId。</p>
     */
    public $SdkAppId;

    /**
     * @var integer <p>房间ID。</p>
     */
    public $RoomId;

    /**
     * @var integer <p>开始时间，unix时间戳（秒）。</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间，unix时间戳（秒）。</p>
     */
    public $EndTime;

    /**
     * @var integer <p>页码，从1开始递增。</p><p>默认值：1</p>
     */
    public $Page;

    /**
     * @var integer <p>每页获取的记录条数。</p><p>取值范围：[1, 200]</p><p>默认值：20</p>
     */
    public $PageSize;

    /**
     * @var string <p>用户ID。</p>
     */
    public $UserId;

    /**
     * @param integer $SdkAppId <p>低代码互动课堂的SdkAppId。</p>
     * @param integer $RoomId <p>房间ID。</p>
     * @param integer $StartTime <p>开始时间，unix时间戳（秒）。</p>
     * @param integer $EndTime <p>结束时间，unix时间戳（秒）。</p>
     * @param integer $Page <p>页码，从1开始递增。</p><p>默认值：1</p>
     * @param integer $PageSize <p>每页获取的记录条数。</p><p>取值范围：[1, 200]</p><p>默认值：20</p>
     * @param string $UserId <p>用户ID。</p>
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
