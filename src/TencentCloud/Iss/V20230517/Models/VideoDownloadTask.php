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
 * 本地录像下载任务
 *
 * @method string getDownloadTaskId() 获取下载任务 ID
 * @method void setDownloadTaskId(string $DownloadTaskId) 设置下载任务 ID
 * @method string getChannelId() 获取通道 ID
 * @method void setChannelId(string $ChannelId) 设置通道 ID
 * @method string getChannelName() 获取通道名称
 * @method void setChannelName(string $ChannelName) 设置通道名称
 * @method string getChannelCode() 获取通道编码
 * @method void setChannelCode(string $ChannelCode) 设置通道编码
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getDeviceCode() 获取设备编码
 * @method void setDeviceCode(string $DeviceCode) 设置设备编码
 * @method integer getStatus() 获取任务状态（0：未执行；1：执行中；2 任务完成；
3：任务失败）
 * @method void setStatus(integer $Status) 设置任务状态（0：未执行；1：执行中；2 任务完成；
3：任务失败）
 * @method string getVideoTimeSection() 获取下载录像时间段
 * @method void setVideoTimeSection(string $VideoTimeSection) 设置下载录像时间段
 * @method integer getScale() 获取倍速
 * @method void setScale(integer $Scale) 设置倍速
 * @method integer getDownloadTime() 获取下载时长
 * @method void setDownloadTime(integer $DownloadTime) 设置下载时长
 * @method integer getVideoSize() 获取录像大小
 * @method void setVideoSize(integer $VideoSize) 设置录像大小
 * @method string getStartTime() 获取任务开始时间
 * @method void setStartTime(string $StartTime) 设置任务开始时间
 * @method string getEndTime() 获取任务结束时间
 * @method void setEndTime(string $EndTime) 设置任务结束时间
 * @method string getFileDownloadUrl() 获取文件下载地址
 * @method void setFileDownloadUrl(string $FileDownloadUrl) 设置文件下载地址
 * @method string getFailedReason() 获取失败原因
 * @method void setFailedReason(string $FailedReason) 设置失败原因
 * @method integer getExpire() 获取生命周期规则，热存天数
 * @method void setExpire(integer $Expire) 设置生命周期规则，热存天数
 * @method string getPreviewUrl() 获取mp4预览地址
 * @method void setPreviewUrl(string $PreviewUrl) 设置mp4预览地址
 */
class VideoDownloadTask extends AbstractModel
{
    /**
     * @var string 下载任务 ID
     */
    public $DownloadTaskId;

    /**
     * @var string 通道 ID
     */
    public $ChannelId;

    /**
     * @var string 通道名称
     */
    public $ChannelName;

    /**
     * @var string 通道编码
     */
    public $ChannelCode;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 设备编码
     */
    public $DeviceCode;

    /**
     * @var integer 任务状态（0：未执行；1：执行中；2 任务完成；
3：任务失败）
     */
    public $Status;

    /**
     * @var string 下载录像时间段
     */
    public $VideoTimeSection;

    /**
     * @var integer 倍速
     */
    public $Scale;

    /**
     * @var integer 下载时长
     */
    public $DownloadTime;

    /**
     * @var integer 录像大小
     */
    public $VideoSize;

    /**
     * @var string 任务开始时间
     */
    public $StartTime;

    /**
     * @var string 任务结束时间
     */
    public $EndTime;

    /**
     * @var string 文件下载地址
     */
    public $FileDownloadUrl;

    /**
     * @var string 失败原因
     */
    public $FailedReason;

    /**
     * @var integer 生命周期规则，热存天数
     */
    public $Expire;

    /**
     * @var string mp4预览地址
     */
    public $PreviewUrl;

    /**
     * @param string $DownloadTaskId 下载任务 ID
     * @param string $ChannelId 通道 ID
     * @param string $ChannelName 通道名称
     * @param string $ChannelCode 通道编码
     * @param string $DeviceName 设备名称
     * @param string $DeviceCode 设备编码
     * @param integer $Status 任务状态（0：未执行；1：执行中；2 任务完成；
3：任务失败）
     * @param string $VideoTimeSection 下载录像时间段
     * @param integer $Scale 倍速
     * @param integer $DownloadTime 下载时长
     * @param integer $VideoSize 录像大小
     * @param string $StartTime 任务开始时间
     * @param string $EndTime 任务结束时间
     * @param string $FileDownloadUrl 文件下载地址
     * @param string $FailedReason 失败原因
     * @param integer $Expire 生命周期规则，热存天数
     * @param string $PreviewUrl mp4预览地址
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
        if (array_key_exists("DownloadTaskId",$param) and $param["DownloadTaskId"] !== null) {
            $this->DownloadTaskId = $param["DownloadTaskId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("ChannelCode",$param) and $param["ChannelCode"] !== null) {
            $this->ChannelCode = $param["ChannelCode"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("DeviceCode",$param) and $param["DeviceCode"] !== null) {
            $this->DeviceCode = $param["DeviceCode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VideoTimeSection",$param) and $param["VideoTimeSection"] !== null) {
            $this->VideoTimeSection = $param["VideoTimeSection"];
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }

        if (array_key_exists("DownloadTime",$param) and $param["DownloadTime"] !== null) {
            $this->DownloadTime = $param["DownloadTime"];
        }

        if (array_key_exists("VideoSize",$param) and $param["VideoSize"] !== null) {
            $this->VideoSize = $param["VideoSize"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FileDownloadUrl",$param) and $param["FileDownloadUrl"] !== null) {
            $this->FileDownloadUrl = $param["FileDownloadUrl"];
        }

        if (array_key_exists("FailedReason",$param) and $param["FailedReason"] !== null) {
            $this->FailedReason = $param["FailedReason"];
        }

        if (array_key_exists("Expire",$param) and $param["Expire"] !== null) {
            $this->Expire = $param["Expire"];
        }

        if (array_key_exists("PreviewUrl",$param) and $param["PreviewUrl"] !== null) {
            $this->PreviewUrl = $param["PreviewUrl"];
        }
    }
}
