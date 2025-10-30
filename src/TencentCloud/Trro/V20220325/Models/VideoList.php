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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 原视频流参数列表
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getDeviceId() 获取设备id
 * @method void setDeviceId(string $DeviceId) 设置设备id
 * @method integer getVideoStreamId() 获取流id
 * @method void setVideoStreamId(integer $VideoStreamId) 设置流id
 * @method integer getWidth() 获取子画面在输出时的宽度，单位为像素值，不填默认为0。
 * @method void setWidth(integer $Width) 设置子画面在输出时的宽度，单位为像素值，不填默认为0。
 * @method integer getHeight() 获取子画面在输出时的高度，单位为像素值，不填默认为0。
 * @method void setHeight(integer $Height) 设置子画面在输出时的高度，单位为像素值，不填默认为0。
 */
class VideoList extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 设备id
     */
    public $DeviceId;

    /**
     * @var integer 流id
     */
    public $VideoStreamId;

    /**
     * @var integer 子画面在输出时的宽度，单位为像素值，不填默认为0。
     */
    public $Width;

    /**
     * @var integer 子画面在输出时的高度，单位为像素值，不填默认为0。
     */
    public $Height;

    /**
     * @param string $ProjectId 项目id
     * @param string $DeviceId 设备id
     * @param integer $VideoStreamId 流id
     * @param integer $Width 子画面在输出时的宽度，单位为像素值，不填默认为0。
     * @param integer $Height 子画面在输出时的高度，单位为像素值，不填默认为0。
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("VideoStreamId",$param) and $param["VideoStreamId"] !== null) {
            $this->VideoStreamId = $param["VideoStreamId"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
