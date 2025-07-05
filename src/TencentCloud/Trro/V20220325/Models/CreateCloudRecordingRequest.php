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
 * CreateCloudRecording请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getDeviceId() 获取设备id
 * @method void setDeviceId(string $DeviceId) 设置设备id
 * @method integer getVideoStreamId() 获取视频流号
 * @method void setVideoStreamId(integer $VideoStreamId) 设置视频流号
 * @method CloudStorage getCloudStorage() 获取腾讯云对象存储COS以及第三方云存储的账号信息
 * @method void setCloudStorage(CloudStorage $CloudStorage) 设置腾讯云对象存储COS以及第三方云存储的账号信息
 * @method integer getMaxMediaFileDuration() 获取如果是aac或者mp4文件格式，超过长度限制后，系统会自动拆分视频文件。单位：分钟。默认为1440min（24h），取值范围为1-1440。【单文件限制最大为2G，满足文件大小 >2G 或录制时长度 > 24h任意一个条件，文件都会自动切分】 Hls 格式录制此参数不生效。
 * @method void setMaxMediaFileDuration(integer $MaxMediaFileDuration) 设置如果是aac或者mp4文件格式，超过长度限制后，系统会自动拆分视频文件。单位：分钟。默认为1440min（24h），取值范围为1-1440。【单文件限制最大为2G，满足文件大小 >2G 或录制时长度 > 24h任意一个条件，文件都会自动切分】 Hls 格式录制此参数不生效。
 * @method integer getOutputFormat() 获取输出文件的格式（存储至COS等第三方存储时有效）。0：输出文件为hls格式。1：输出文件格式为hls+mp4。2：输出文件格式为hls+aac 。3：(默认)输出文件格式为mp4。4：输出文件格式为aac。
 * @method void setOutputFormat(integer $OutputFormat) 设置输出文件的格式（存储至COS等第三方存储时有效）。0：输出文件为hls格式。1：输出文件格式为hls+mp4。2：输出文件格式为hls+aac 。3：(默认)输出文件格式为mp4。4：输出文件格式为aac。
 * @method integer getMaxIdleTime() 获取房间内持续没有主播的状态超过MaxIdleTime的时长，自动停止录制，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。 示例值：30
 * @method void setMaxIdleTime(integer $MaxIdleTime) 设置房间内持续没有主播的状态超过MaxIdleTime的时长，自动停止录制，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。 示例值：30
 */
class CreateCloudRecordingRequest extends AbstractModel
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
     * @var integer 视频流号
     */
    public $VideoStreamId;

    /**
     * @var CloudStorage 腾讯云对象存储COS以及第三方云存储的账号信息
     */
    public $CloudStorage;

    /**
     * @var integer 如果是aac或者mp4文件格式，超过长度限制后，系统会自动拆分视频文件。单位：分钟。默认为1440min（24h），取值范围为1-1440。【单文件限制最大为2G，满足文件大小 >2G 或录制时长度 > 24h任意一个条件，文件都会自动切分】 Hls 格式录制此参数不生效。
     */
    public $MaxMediaFileDuration;

    /**
     * @var integer 输出文件的格式（存储至COS等第三方存储时有效）。0：输出文件为hls格式。1：输出文件格式为hls+mp4。2：输出文件格式为hls+aac 。3：(默认)输出文件格式为mp4。4：输出文件格式为aac。
     */
    public $OutputFormat;

    /**
     * @var integer 房间内持续没有主播的状态超过MaxIdleTime的时长，自动停止录制，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。 示例值：30
     */
    public $MaxIdleTime;

    /**
     * @param string $ProjectId 项目id
     * @param string $DeviceId 设备id
     * @param integer $VideoStreamId 视频流号
     * @param CloudStorage $CloudStorage 腾讯云对象存储COS以及第三方云存储的账号信息
     * @param integer $MaxMediaFileDuration 如果是aac或者mp4文件格式，超过长度限制后，系统会自动拆分视频文件。单位：分钟。默认为1440min（24h），取值范围为1-1440。【单文件限制最大为2G，满足文件大小 >2G 或录制时长度 > 24h任意一个条件，文件都会自动切分】 Hls 格式录制此参数不生效。
     * @param integer $OutputFormat 输出文件的格式（存储至COS等第三方存储时有效）。0：输出文件为hls格式。1：输出文件格式为hls+mp4。2：输出文件格式为hls+aac 。3：(默认)输出文件格式为mp4。4：输出文件格式为aac。
     * @param integer $MaxIdleTime 房间内持续没有主播的状态超过MaxIdleTime的时长，自动停止录制，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。 示例值：30
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

        if (array_key_exists("CloudStorage",$param) and $param["CloudStorage"] !== null) {
            $this->CloudStorage = new CloudStorage();
            $this->CloudStorage->deserialize($param["CloudStorage"]);
        }

        if (array_key_exists("MaxMediaFileDuration",$param) and $param["MaxMediaFileDuration"] !== null) {
            $this->MaxMediaFileDuration = $param["MaxMediaFileDuration"];
        }

        if (array_key_exists("OutputFormat",$param) and $param["OutputFormat"] !== null) {
            $this->OutputFormat = $param["OutputFormat"];
        }

        if (array_key_exists("MaxIdleTime",$param) and $param["MaxIdleTime"] !== null) {
            $this->MaxIdleTime = $param["MaxIdleTime"];
        }
    }
}
