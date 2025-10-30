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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ControlDeviceSnapshot请求参数结构体
 *
 * @method string getChannelId() 获取通道ID
 * @method void setChannelId(string $ChannelId) 设置通道ID
 * @method integer getSnapNum() 获取连拍张数，可选值范围1～10
 * @method void setSnapNum(integer $SnapNum) 设置连拍张数，可选值范围1～10
 * @method integer getInterval() 获取抓拍间隔时间，可选值范围1～1800
 * @method void setInterval(integer $Interval) 设置抓拍间隔时间，可选值范围1～1800
 * @method integer getExpire() 获取图片存储时间，默认 7 天，仅支持（7, 15, 30, 60, 90, 180, 365）天
 * @method void setExpire(integer $Expire) 设置图片存储时间，默认 7 天，仅支持（7, 15, 30, 60, 90, 180, 365）天
 */
class ControlDeviceSnapshotRequest extends AbstractModel
{
    /**
     * @var string 通道ID
     */
    public $ChannelId;

    /**
     * @var integer 连拍张数，可选值范围1～10
     */
    public $SnapNum;

    /**
     * @var integer 抓拍间隔时间，可选值范围1～1800
     */
    public $Interval;

    /**
     * @var integer 图片存储时间，默认 7 天，仅支持（7, 15, 30, 60, 90, 180, 365）天
     */
    public $Expire;

    /**
     * @param string $ChannelId 通道ID
     * @param integer $SnapNum 连拍张数，可选值范围1～10
     * @param integer $Interval 抓拍间隔时间，可选值范围1～1800
     * @param integer $Expire 图片存储时间，默认 7 天，仅支持（7, 15, 30, 60, 90, 180, 365）天
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("SnapNum",$param) and $param["SnapNum"] !== null) {
            $this->SnapNum = $param["SnapNum"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Expire",$param) and $param["Expire"] !== null) {
            $this->Expire = $param["Expire"];
        }
    }
}
