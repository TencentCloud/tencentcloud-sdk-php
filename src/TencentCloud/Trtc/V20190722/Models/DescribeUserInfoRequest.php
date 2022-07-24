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
 * DescribeUserInfo请求参数结构体
 *
 * @method string getCommId() 获取通话 ID（唯一标识一次通话）： SdkAppId_RoomId（房间号）_ CreateTime（房间创建时间，unix时间戳，单位为s）例：1400xxxxxx_218695_1590065777。通过 DescribeRoomInfo（查询历史房间列表）接口获取（[查询历史房间列表](https://cloud.tencent.com/document/product/647/44050)）。
 * @method void setCommId(string $CommId) 设置通话 ID（唯一标识一次通话）： SdkAppId_RoomId（房间号）_ CreateTime（房间创建时间，unix时间戳，单位为s）例：1400xxxxxx_218695_1590065777。通过 DescribeRoomInfo（查询历史房间列表）接口获取（[查询历史房间列表](https://cloud.tencent.com/document/product/647/44050)）。
 * @method integer getStartTime() 获取查询开始时间，本地unix时间戳，单位为秒（如：1590065777）
注意：支持查询14天内的数据
 * @method void setStartTime(integer $StartTime) 设置查询开始时间，本地unix时间戳，单位为秒（如：1590065777）
注意：支持查询14天内的数据
 * @method integer getEndTime() 获取查询结束时间，本地unix时间戳，单位为秒（如：1590065877）
注意：与StartTime间隔时间不超过4小时。
 * @method void setEndTime(integer $EndTime) 设置查询结束时间，本地unix时间戳，单位为秒（如：1590065877）
注意：与StartTime间隔时间不超过4小时。
 * @method integer getSdkAppId() 获取用户SdkAppId（如：1400xxxxxx）
 * @method void setSdkAppId(integer $SdkAppId) 设置用户SdkAppId（如：1400xxxxxx）
 * @method array getUserIds() 获取需查询的用户数组，不填默认返回6个用户
范围：[1，100]。
 * @method void setUserIds(array $UserIds) 设置需查询的用户数组，不填默认返回6个用户
范围：[1，100]。
 * @method integer getPageNumber() 获取当前页数，默认为0，
注意：PageNumber和PageSize 其中一个不填均默认返回6条数据。
 * @method void setPageNumber(integer $PageNumber) 设置当前页数，默认为0，
注意：PageNumber和PageSize 其中一个不填均默认返回6条数据。
 * @method integer getPageSize() 获取每页个数，默认为6，
范围：[1，100]。
 * @method void setPageSize(integer $PageSize) 设置每页个数，默认为6，
范围：[1，100]。
 */
class DescribeUserInfoRequest extends AbstractModel
{
    /**
     * @var string 通话 ID（唯一标识一次通话）： SdkAppId_RoomId（房间号）_ CreateTime（房间创建时间，unix时间戳，单位为s）例：1400xxxxxx_218695_1590065777。通过 DescribeRoomInfo（查询历史房间列表）接口获取（[查询历史房间列表](https://cloud.tencent.com/document/product/647/44050)）。
     */
    public $CommId;

    /**
     * @var integer 查询开始时间，本地unix时间戳，单位为秒（如：1590065777）
注意：支持查询14天内的数据
     */
    public $StartTime;

    /**
     * @var integer 查询结束时间，本地unix时间戳，单位为秒（如：1590065877）
注意：与StartTime间隔时间不超过4小时。
     */
    public $EndTime;

    /**
     * @var integer 用户SdkAppId（如：1400xxxxxx）
     */
    public $SdkAppId;

    /**
     * @var array 需查询的用户数组，不填默认返回6个用户
范围：[1，100]。
     */
    public $UserIds;

    /**
     * @var integer 当前页数，默认为0，
注意：PageNumber和PageSize 其中一个不填均默认返回6条数据。
     */
    public $PageNumber;

    /**
     * @var integer 每页个数，默认为6，
范围：[1，100]。
     */
    public $PageSize;

    /**
     * @param string $CommId 通话 ID（唯一标识一次通话）： SdkAppId_RoomId（房间号）_ CreateTime（房间创建时间，unix时间戳，单位为s）例：1400xxxxxx_218695_1590065777。通过 DescribeRoomInfo（查询历史房间列表）接口获取（[查询历史房间列表](https://cloud.tencent.com/document/product/647/44050)）。
     * @param integer $StartTime 查询开始时间，本地unix时间戳，单位为秒（如：1590065777）
注意：支持查询14天内的数据
     * @param integer $EndTime 查询结束时间，本地unix时间戳，单位为秒（如：1590065877）
注意：与StartTime间隔时间不超过4小时。
     * @param integer $SdkAppId 用户SdkAppId（如：1400xxxxxx）
     * @param array $UserIds 需查询的用户数组，不填默认返回6个用户
范围：[1，100]。
     * @param integer $PageNumber 当前页数，默认为0，
注意：PageNumber和PageSize 其中一个不填均默认返回6条数据。
     * @param integer $PageSize 每页个数，默认为6，
范围：[1，100]。
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
        if (array_key_exists("CommId",$param) and $param["CommId"] !== null) {
            $this->CommId = $param["CommId"];
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

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
