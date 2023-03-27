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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserList请求参数结构体
 *
 * @method integer getSdkAppId() 获取白板应用的SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置白板应用的SdkAppId
 * @method string getRoomId() 获取需要查询用户列表的白板房间号
 * @method void setRoomId(string $RoomId) 设置需要查询用户列表的白板房间号
 * @method array getTimeRange() 获取查询时间段，Unix时间戳，单位毫秒，第一个值为开始时间戳，第二个值为结束时间
 * @method void setTimeRange(array $TimeRange) 设置查询时间段，Unix时间戳，单位毫秒，第一个值为开始时间戳，第二个值为结束时间
 * @method string getQuery() 获取额外的查询条件
 * @method void setQuery(string $Query) 设置额外的查询条件
 * @method integer getMaxSize() 获取返回最大的数据条数，默认1000
 * @method void setMaxSize(integer $MaxSize) 设置返回最大的数据条数，默认1000
 */
class DescribeUserListRequest extends AbstractModel
{
    /**
     * @var integer 白板应用的SdkAppId
     */
    public $SdkAppId;

    /**
     * @var string 需要查询用户列表的白板房间号
     */
    public $RoomId;

    /**
     * @var array 查询时间段，Unix时间戳，单位毫秒，第一个值为开始时间戳，第二个值为结束时间
     */
    public $TimeRange;

    /**
     * @var string 额外的查询条件
     */
    public $Query;

    /**
     * @var integer 返回最大的数据条数，默认1000
     */
    public $MaxSize;

    /**
     * @param integer $SdkAppId 白板应用的SdkAppId
     * @param string $RoomId 需要查询用户列表的白板房间号
     * @param array $TimeRange 查询时间段，Unix时间戳，单位毫秒，第一个值为开始时间戳，第二个值为结束时间
     * @param string $Query 额外的查询条件
     * @param integer $MaxSize 返回最大的数据条数，默认1000
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

        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }
    }
}
