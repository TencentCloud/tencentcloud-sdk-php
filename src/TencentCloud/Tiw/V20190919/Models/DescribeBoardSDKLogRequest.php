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
 * DescribeBoardSDKLog请求参数结构体
 *
 * @method integer getSdkAppId() 获取白板应用的SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置白板应用的SdkAppId
 * @method string getRoomId() 获取需要查询日志的白板房间号
 * @method void setRoomId(string $RoomId) 设置需要查询日志的白板房间号
 * @method string getUserId() 获取需要查询日志的用户ID
 * @method void setUserId(string $UserId) 设置需要查询日志的用户ID
 * @method array getTimeRange() 获取查询时间段，Unix时间戳，单位毫秒，第一个值为开始时间戳，第二个值为结束时间
 * @method void setTimeRange(array $TimeRange) 设置查询时间段，Unix时间戳，单位毫秒，第一个值为开始时间戳，第二个值为结束时间
 * @method string getAggregationInterval() 获取聚合日志条数查询的桶的时间范围，如5m, 1h, 4h等
 * @method void setAggregationInterval(string $AggregationInterval) 设置聚合日志条数查询的桶的时间范围，如5m, 1h, 4h等
 * @method string getQuery() 获取额外的查询条件
 * @method void setQuery(string $Query) 设置额外的查询条件
 * @method boolean getAscending() 获取是否按时间升序排列
 * @method void setAscending(boolean $Ascending) 设置是否按时间升序排列
 * @method string getContext() 获取用于递归拉取的上下文Key，在上一次请求中返回
 * @method void setContext(string $Context) 设置用于递归拉取的上下文Key，在上一次请求中返回
 */
class DescribeBoardSDKLogRequest extends AbstractModel
{
    /**
     * @var integer 白板应用的SdkAppId
     */
    public $SdkAppId;

    /**
     * @var string 需要查询日志的白板房间号
     */
    public $RoomId;

    /**
     * @var string 需要查询日志的用户ID
     */
    public $UserId;

    /**
     * @var array 查询时间段，Unix时间戳，单位毫秒，第一个值为开始时间戳，第二个值为结束时间
     */
    public $TimeRange;

    /**
     * @var string 聚合日志条数查询的桶的时间范围，如5m, 1h, 4h等
     */
    public $AggregationInterval;

    /**
     * @var string 额外的查询条件
     */
    public $Query;

    /**
     * @var boolean 是否按时间升序排列
     */
    public $Ascending;

    /**
     * @var string 用于递归拉取的上下文Key，在上一次请求中返回
     */
    public $Context;

    /**
     * @param integer $SdkAppId 白板应用的SdkAppId
     * @param string $RoomId 需要查询日志的白板房间号
     * @param string $UserId 需要查询日志的用户ID
     * @param array $TimeRange 查询时间段，Unix时间戳，单位毫秒，第一个值为开始时间戳，第二个值为结束时间
     * @param string $AggregationInterval 聚合日志条数查询的桶的时间范围，如5m, 1h, 4h等
     * @param string $Query 额外的查询条件
     * @param boolean $Ascending 是否按时间升序排列
     * @param string $Context 用于递归拉取的上下文Key，在上一次请求中返回
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

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }

        if (array_key_exists("AggregationInterval",$param) and $param["AggregationInterval"] !== null) {
            $this->AggregationInterval = $param["AggregationInterval"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Ascending",$param) and $param["Ascending"] !== null) {
            $this->Ascending = $param["Ascending"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }
    }
}
