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
 * @method string getDownloadTaskId() 获取<p>下载任务 ID</p>
 * @method void setDownloadTaskId(string $DownloadTaskId) 设置<p>下载任务 ID</p>
 * @method string getChannelId() 获取<p>通道 ID</p>
 * @method void setChannelId(string $ChannelId) 设置<p>通道 ID</p>
 * @method string getChannelName() 获取<p>通道名称</p>
 * @method void setChannelName(string $ChannelName) 设置<p>通道名称</p>
 * @method string getChannelCode() 获取<p>通道编码</p>
 * @method void setChannelCode(string $ChannelCode) 设置<p>通道编码</p>
 * @method string getDeviceName() 获取<p>设备名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名称</p>
 * @method string getDeviceCode() 获取<p>设备编码</p>
 * @method void setDeviceCode(string $DeviceCode) 设置<p>设备编码</p>
 * @method integer getStatus() 获取<p>任务状态（0：未执行；1：执行中；2 任务完成；<br>3：任务失败）</p>
 * @method void setStatus(integer $Status) 设置<p>任务状态（0：未执行；1：执行中；2 任务完成；<br>3：任务失败）</p>
 * @method string getVideoTimeSection() 获取<p>下载录像时间段</p>
 * @method void setVideoTimeSection(string $VideoTimeSection) 设置<p>下载录像时间段</p>
 * @method integer getScale() 获取<p>倍速</p>
 * @method void setScale(integer $Scale) 设置<p>倍速</p>
 * @method integer getDownloadTime() 获取<p>下载时长</p><p>单位：秒</p>
 * @method void setDownloadTime(integer $DownloadTime) 设置<p>下载时长</p><p>单位：秒</p>
 * @method integer getVideoSize() 获取<p>录像大小</p><p>单位：字节（Byte）</p>
 * @method void setVideoSize(integer $VideoSize) 设置<p>录像大小</p><p>单位：字节（Byte）</p>
 * @method string getStartTime() 获取<p>任务开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>任务开始时间</p>
 * @method string getEndTime() 获取<p>任务结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>任务结束时间</p>
 * @method string getFileDownloadUrl() 获取<p>文件下载地址</p>
 * @method void setFileDownloadUrl(string $FileDownloadUrl) 设置<p>文件下载地址</p>
 * @method string getFailedReason() 获取<p>失败原因</p>
 * @method void setFailedReason(string $FailedReason) 设置<p>失败原因</p>
 * @method integer getExpire() 获取<p>生命周期规则，热存天数</p>
 * @method void setExpire(integer $Expire) 设置<p>生命周期规则，热存天数</p>
 * @method string getPreviewUrl() 获取<p>mp4预览地址</p>
 * @method void setPreviewUrl(string $PreviewUrl) 设置<p>mp4预览地址</p>
 */
class VideoDownloadTask extends AbstractModel
{
    /**
     * @var string <p>下载任务 ID</p>
     */
    public $DownloadTaskId;

    /**
     * @var string <p>通道 ID</p>
     */
    public $ChannelId;

    /**
     * @var string <p>通道名称</p>
     */
    public $ChannelName;

    /**
     * @var string <p>通道编码</p>
     */
    public $ChannelCode;

    /**
     * @var string <p>设备名称</p>
     */
    public $DeviceName;

    /**
     * @var string <p>设备编码</p>
     */
    public $DeviceCode;

    /**
     * @var integer <p>任务状态（0：未执行；1：执行中；2 任务完成；<br>3：任务失败）</p>
     */
    public $Status;

    /**
     * @var string <p>下载录像时间段</p>
     */
    public $VideoTimeSection;

    /**
     * @var integer <p>倍速</p>
     */
    public $Scale;

    /**
     * @var integer <p>下载时长</p><p>单位：秒</p>
     */
    public $DownloadTime;

    /**
     * @var integer <p>录像大小</p><p>单位：字节（Byte）</p>
     */
    public $VideoSize;

    /**
     * @var string <p>任务开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>任务结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>文件下载地址</p>
     */
    public $FileDownloadUrl;

    /**
     * @var string <p>失败原因</p>
     */
    public $FailedReason;

    /**
     * @var integer <p>生命周期规则，热存天数</p>
     */
    public $Expire;

    /**
     * @var string <p>mp4预览地址</p>
     */
    public $PreviewUrl;

    /**
     * @param string $DownloadTaskId <p>下载任务 ID</p>
     * @param string $ChannelId <p>通道 ID</p>
     * @param string $ChannelName <p>通道名称</p>
     * @param string $ChannelCode <p>通道编码</p>
     * @param string $DeviceName <p>设备名称</p>
     * @param string $DeviceCode <p>设备编码</p>
     * @param integer $Status <p>任务状态（0：未执行；1：执行中；2 任务完成；<br>3：任务失败）</p>
     * @param string $VideoTimeSection <p>下载录像时间段</p>
     * @param integer $Scale <p>倍速</p>
     * @param integer $DownloadTime <p>下载时长</p><p>单位：秒</p>
     * @param integer $VideoSize <p>录像大小</p><p>单位：字节（Byte）</p>
     * @param string $StartTime <p>任务开始时间</p>
     * @param string $EndTime <p>任务结束时间</p>
     * @param string $FileDownloadUrl <p>文件下载地址</p>
     * @param string $FailedReason <p>失败原因</p>
     * @param integer $Expire <p>生命周期规则，热存天数</p>
     * @param string $PreviewUrl <p>mp4预览地址</p>
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
