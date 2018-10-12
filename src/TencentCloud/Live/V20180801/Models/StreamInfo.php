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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAppName() 获取直播流所属应用名称
 * @method void setAppName(string $AppName) 设置直播流所属应用名称
 * @method string getCreateMode() 获取创建模式
 * @method void setCreateMode(string $CreateMode) 设置创建模式
 * @method string getCreateTime() 获取创建时间，如: 2018-07-13 14:48:23
 * @method void setCreateTime(string $CreateTime) 设置创建时间，如: 2018-07-13 14:48:23
 * @method integer getStatus() 获取流状态
 * @method void setStatus(integer $Status) 设置流状态
 * @method string getStreamId() 获取流id
 * @method void setStreamId(string $StreamId) 设置流id
 * @method string getStreamName() 获取流名称
 * @method void setStreamName(string $StreamName) 设置流名称
 * @method string getWaterMarkId() 获取水印id
 * @method void setWaterMarkId(string $WaterMarkId) 设置水印id
 */

/**
 *推流信息
 */
class StreamInfo extends AbstractModel
{
    /**
     * @var string 直播流所属应用名称
     */
    public $AppName;

    /**
     * @var string 创建模式
     */
    public $CreateMode;

    /**
     * @var string 创建时间，如: 2018-07-13 14:48:23
     */
    public $CreateTime;

    /**
     * @var integer 流状态
     */
    public $Status;

    /**
     * @var string 流id
     */
    public $StreamId;

    /**
     * @var string 流名称
     */
    public $StreamName;

    /**
     * @var string 水印id
     */
    public $WaterMarkId;
    /**
     * @param string $AppName 直播流所属应用名称
     * @param string $CreateMode 创建模式
     * @param string $CreateTime 创建时间，如: 2018-07-13 14:48:23
     * @param integer $Status 流状态
     * @param string $StreamId 流id
     * @param string $StreamName 流名称
     * @param string $WaterMarkId 水印id
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("CreateMode",$param) and $param["CreateMode"] !== null) {
            $this->CreateMode = $param["CreateMode"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("WaterMarkId",$param) and $param["WaterMarkId"] !== null) {
            $this->WaterMarkId = $param["WaterMarkId"];
        }
    }
}
