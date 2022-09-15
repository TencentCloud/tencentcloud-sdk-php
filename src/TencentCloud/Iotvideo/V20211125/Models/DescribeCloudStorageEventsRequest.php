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
namespace TencentCloud\Iotvideo\V20211125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudStorageEvents请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method integer getStartTime() 获取起始时间（Unix 时间戳，秒级）, 为0 表示 当前时间 - 24h
 * @method void setStartTime(integer $StartTime) 设置起始时间（Unix 时间戳，秒级）, 为0 表示 当前时间 - 24h
 * @method integer getEndTime() 获取结束时间（Unix 时间戳，秒级）, 为0 表示当前时间
 * @method void setEndTime(integer $EndTime) 设置结束时间（Unix 时间戳，秒级）, 为0 表示当前时间
 * @method string getContext() 获取请求上下文, 用作查询游标
 * @method void setContext(string $Context) 设置请求上下文, 用作查询游标
 * @method integer getSize() 获取查询数据项目的最大数量, 默认为10。假设传Size=10，返回的实际事件数量为N，则 5 <= N <= 10。
 * @method void setSize(integer $Size) 设置查询数据项目的最大数量, 默认为10。假设传Size=10，返回的实际事件数量为N，则 5 <= N <= 10。
 * @method string getEventId() 获取事件标识符，可以用来指定查询特定的事件，如果不指定，则查询所有事件。
 * @method void setEventId(string $EventId) 设置事件标识符，可以用来指定查询特定的事件，如果不指定，则查询所有事件。
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method integer getChannelId() 获取通道ID 非NVR设备则不填 NVR设备则必填 默认为无
 * @method void setChannelId(integer $ChannelId) 设置通道ID 非NVR设备则不填 NVR设备则必填 默认为无
 */
class DescribeCloudStorageEventsRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var integer 起始时间（Unix 时间戳，秒级）, 为0 表示 当前时间 - 24h
     */
    public $StartTime;

    /**
     * @var integer 结束时间（Unix 时间戳，秒级）, 为0 表示当前时间
     */
    public $EndTime;

    /**
     * @var string 请求上下文, 用作查询游标
     */
    public $Context;

    /**
     * @var integer 查询数据项目的最大数量, 默认为10。假设传Size=10，返回的实际事件数量为N，则 5 <= N <= 10。
     */
    public $Size;

    /**
     * @var string 事件标识符，可以用来指定查询特定的事件，如果不指定，则查询所有事件。
     */
    public $EventId;

    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var integer 通道ID 非NVR设备则不填 NVR设备则必填 默认为无
     */
    public $ChannelId;

    /**
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param integer $StartTime 起始时间（Unix 时间戳，秒级）, 为0 表示 当前时间 - 24h
     * @param integer $EndTime 结束时间（Unix 时间戳，秒级）, 为0 表示当前时间
     * @param string $Context 请求上下文, 用作查询游标
     * @param integer $Size 查询数据项目的最大数量, 默认为10。假设传Size=10，返回的实际事件数量为N，则 5 <= N <= 10。
     * @param string $EventId 事件标识符，可以用来指定查询特定的事件，如果不指定，则查询所有事件。
     * @param string $UserId 用户ID
     * @param integer $ChannelId 通道ID 非NVR设备则不填 NVR设备则必填 默认为无
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }
    }
}
