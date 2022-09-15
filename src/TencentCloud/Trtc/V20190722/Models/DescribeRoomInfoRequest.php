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
 * DescribeRoomInfo请求参数结构体
 *
 * @method integer getSdkAppId() 获取用户SdkAppId（如：1400xxxxxx）
 * @method void setSdkAppId(integer $SdkAppId) 设置用户SdkAppId（如：1400xxxxxx）
 * @method integer getStartTime() 获取查询开始时间，本地unix时间戳，单位为秒（如：1590065777）
注意：支持查询14天内的数据
 * @method void setStartTime(integer $StartTime) 设置查询开始时间，本地unix时间戳，单位为秒（如：1590065777）
注意：支持查询14天内的数据
 * @method integer getEndTime() 获取查询结束时间，本地unix时间戳，单位为秒（如：1590065877）
注意：与StartTime间隔时间不超过24小时。
 * @method void setEndTime(integer $EndTime) 设置查询结束时间，本地unix时间戳，单位为秒（如：1590065877）
注意：与StartTime间隔时间不超过24小时。
 * @method string getRoomId() 获取房间号（如：223)
 * @method void setRoomId(string $RoomId) 设置房间号（如：223)
 * @method integer getPageNumber() 获取当前页数，默认为0，
注意：PageNumber和PageSize 其中一个不填均默认返回10条数据。
 * @method void setPageNumber(integer $PageNumber) 设置当前页数，默认为0，
注意：PageNumber和PageSize 其中一个不填均默认返回10条数据。
 * @method integer getPageSize() 获取每页个数，默认为10，
范围：[1，100]
 * @method void setPageSize(integer $PageSize) 设置每页个数，默认为10，
范围：[1，100]
 */
class DescribeRoomInfoRequest extends AbstractModel
{
    /**
     * @var integer 用户SdkAppId（如：1400xxxxxx）
     */
    public $SdkAppId;

    /**
     * @var integer 查询开始时间，本地unix时间戳，单位为秒（如：1590065777）
注意：支持查询14天内的数据
     */
    public $StartTime;

    /**
     * @var integer 查询结束时间，本地unix时间戳，单位为秒（如：1590065877）
注意：与StartTime间隔时间不超过24小时。
     */
    public $EndTime;

    /**
     * @var string 房间号（如：223)
     */
    public $RoomId;

    /**
     * @var integer 当前页数，默认为0，
注意：PageNumber和PageSize 其中一个不填均默认返回10条数据。
     */
    public $PageNumber;

    /**
     * @var integer 每页个数，默认为10，
范围：[1，100]
     */
    public $PageSize;

    /**
     * @param integer $SdkAppId 用户SdkAppId（如：1400xxxxxx）
     * @param integer $StartTime 查询开始时间，本地unix时间戳，单位为秒（如：1590065777）
注意：支持查询14天内的数据
     * @param integer $EndTime 查询结束时间，本地unix时间戳，单位为秒（如：1590065877）
注意：与StartTime间隔时间不超过24小时。
     * @param string $RoomId 房间号（如：223)
     * @param integer $PageNumber 当前页数，默认为0，
注意：PageNumber和PageSize 其中一个不填均默认返回10条数据。
     * @param integer $PageSize 每页个数，默认为10，
范围：[1，100]
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
