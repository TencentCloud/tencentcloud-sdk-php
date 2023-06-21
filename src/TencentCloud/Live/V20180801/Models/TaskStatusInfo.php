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
 * 直播拉流任务状态信息。
 *
 * @method string getFileUrl() 获取当前使用的源 URL。
 * @method void setFileUrl(string $FileUrl) 设置当前使用的源 URL。
 * @method integer getLoopedTimes() 获取点播源任务的轮播次数。
 * @method void setLoopedTimes(integer $LoopedTimes) 设置点播源任务的轮播次数。
 * @method integer getOffsetTime() 获取点播源的播放偏移，单位：秒。
 * @method void setOffsetTime(integer $OffsetTime) 设置点播源的播放偏移，单位：秒。
 * @method string getReportTime() 获取最新心跳上报时间。UTC时间，例如：
2022-02-11T10:00:00Z。
注意：UTC时间与北京时间相差八小时。
 * @method void setReportTime(string $ReportTime) 设置最新心跳上报时间。UTC时间，例如：
2022-02-11T10:00:00Z。
注意：UTC时间与北京时间相差八小时。
 * @method string getRunStatus() 获取实际运行状态：
active - 活跃，
inactive - 不活跃。
 * @method void setRunStatus(string $RunStatus) 设置实际运行状态：
active - 活跃，
inactive - 不活跃。
 * @method integer getFileDuration() 获取点播源的文件时长，单位：秒。
 * @method void setFileDuration(integer $FileDuration) 设置点播源的文件时长，单位：秒。
 * @method string getNextFileUrl() 获取下一进度点播文件 URL。
 * @method void setNextFileUrl(string $NextFileUrl) 设置下一进度点播文件 URL。
 */
class TaskStatusInfo extends AbstractModel
{
    /**
     * @var string 当前使用的源 URL。
     */
    public $FileUrl;

    /**
     * @var integer 点播源任务的轮播次数。
     */
    public $LoopedTimes;

    /**
     * @var integer 点播源的播放偏移，单位：秒。
     */
    public $OffsetTime;

    /**
     * @var string 最新心跳上报时间。UTC时间，例如：
2022-02-11T10:00:00Z。
注意：UTC时间与北京时间相差八小时。
     */
    public $ReportTime;

    /**
     * @var string 实际运行状态：
active - 活跃，
inactive - 不活跃。
     */
    public $RunStatus;

    /**
     * @var integer 点播源的文件时长，单位：秒。
     */
    public $FileDuration;

    /**
     * @var string 下一进度点播文件 URL。
     */
    public $NextFileUrl;

    /**
     * @param string $FileUrl 当前使用的源 URL。
     * @param integer $LoopedTimes 点播源任务的轮播次数。
     * @param integer $OffsetTime 点播源的播放偏移，单位：秒。
     * @param string $ReportTime 最新心跳上报时间。UTC时间，例如：
2022-02-11T10:00:00Z。
注意：UTC时间与北京时间相差八小时。
     * @param string $RunStatus 实际运行状态：
active - 活跃，
inactive - 不活跃。
     * @param integer $FileDuration 点播源的文件时长，单位：秒。
     * @param string $NextFileUrl 下一进度点播文件 URL。
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
        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("LoopedTimes",$param) and $param["LoopedTimes"] !== null) {
            $this->LoopedTimes = $param["LoopedTimes"];
        }

        if (array_key_exists("OffsetTime",$param) and $param["OffsetTime"] !== null) {
            $this->OffsetTime = $param["OffsetTime"];
        }

        if (array_key_exists("ReportTime",$param) and $param["ReportTime"] !== null) {
            $this->ReportTime = $param["ReportTime"];
        }

        if (array_key_exists("RunStatus",$param) and $param["RunStatus"] !== null) {
            $this->RunStatus = $param["RunStatus"];
        }

        if (array_key_exists("FileDuration",$param) and $param["FileDuration"] !== null) {
            $this->FileDuration = $param["FileDuration"];
        }

        if (array_key_exists("NextFileUrl",$param) and $param["NextFileUrl"] !== null) {
            $this->NextFileUrl = $param["NextFileUrl"];
        }
    }
}
