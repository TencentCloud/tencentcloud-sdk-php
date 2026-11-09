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
 * 视觉理解计划结果信息
 *
 * @method string getVLPlanResultId() 获取<p>分析结果 ID</p>
 * @method void setVLPlanResultId(string $VLPlanResultId) 设置<p>分析结果 ID</p>
 * @method string getVLPlanId() 获取<p>所属分析计划 ID</p>
 * @method void setVLPlanId(string $VLPlanId) 设置<p>所属分析计划 ID</p>
 * @method string getVLPlanName() 获取<p>计划名称</p>
 * @method void setVLPlanName(string $VLPlanName) 设置<p>计划名称</p>
 * @method string getChannelId() 获取<p>通道 ID</p>
 * @method void setChannelId(string $ChannelId) 设置<p>通道 ID</p>
 * @method string getChannelName() 获取<p>通道名称</p>
 * @method void setChannelName(string $ChannelName) 设置<p>通道名称</p>
 * @method string getAnalysisMode() 获取<p>分析模式：image=图片模式，video=视频模式（预留）</p>
 * @method void setAnalysisMode(string $AnalysisMode) 设置<p>分析模式：image=图片模式，video=视频模式（预留）</p>
 * @method integer getVLResultTimestamp() 获取<p>分析时间戳（秒）</p>
 * @method void setVLResultTimestamp(integer $VLResultTimestamp) 设置<p>分析时间戳（秒）</p>
 * @method integer getSnapshotTimestamp() 获取<p>截图时间戳</p>
 * @method void setSnapshotTimestamp(integer $SnapshotTimestamp) 设置<p>截图时间戳</p>
 * @method integer getVideoStartTimestamp() 获取<p>视频开始时间戳</p>
 * @method void setVideoStartTimestamp(integer $VideoStartTimestamp) 设置<p>视频开始时间戳</p>
 * @method integer getVideoEndTimestamp() 获取<p>视频结束时间戳</p>
 * @method void setVideoEndTimestamp(integer $VideoEndTimestamp) 设置<p>视频结束时间戳</p>
 * @method integer getBilledFrameCount() 获取<p>视频模式计费帧数</p>
 * @method void setBilledFrameCount(integer $BilledFrameCount) 设置<p>视频模式计费帧数</p>
 * @method string getContent() 获取<p>AI 分析结果内容（JSON 字符串）</p>
 * @method void setContent(string $Content) 设置<p>AI 分析结果内容（JSON 字符串）</p>
 * @method string getCreatedAt() 获取<p>创建时间，格式 2006-01-02 15:04:05</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间，格式 2006-01-02 15:04:05</p>
 * @method string getUpdatedAt() 获取<p>更新时间，格式 2006-01-02 15:04:05</p>
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>更新时间，格式 2006-01-02 15:04:05</p>
 */
class VLPlanResultInfo extends AbstractModel
{
    /**
     * @var string <p>分析结果 ID</p>
     */
    public $VLPlanResultId;

    /**
     * @var string <p>所属分析计划 ID</p>
     */
    public $VLPlanId;

    /**
     * @var string <p>计划名称</p>
     */
    public $VLPlanName;

    /**
     * @var string <p>通道 ID</p>
     */
    public $ChannelId;

    /**
     * @var string <p>通道名称</p>
     */
    public $ChannelName;

    /**
     * @var string <p>分析模式：image=图片模式，video=视频模式（预留）</p>
     */
    public $AnalysisMode;

    /**
     * @var integer <p>分析时间戳（秒）</p>
     */
    public $VLResultTimestamp;

    /**
     * @var integer <p>截图时间戳</p>
     */
    public $SnapshotTimestamp;

    /**
     * @var integer <p>视频开始时间戳</p>
     */
    public $VideoStartTimestamp;

    /**
     * @var integer <p>视频结束时间戳</p>
     */
    public $VideoEndTimestamp;

    /**
     * @var integer <p>视频模式计费帧数</p>
     */
    public $BilledFrameCount;

    /**
     * @var string <p>AI 分析结果内容（JSON 字符串）</p>
     */
    public $Content;

    /**
     * @var string <p>创建时间，格式 2006-01-02 15:04:05</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>更新时间，格式 2006-01-02 15:04:05</p>
     */
    public $UpdatedAt;

    /**
     * @param string $VLPlanResultId <p>分析结果 ID</p>
     * @param string $VLPlanId <p>所属分析计划 ID</p>
     * @param string $VLPlanName <p>计划名称</p>
     * @param string $ChannelId <p>通道 ID</p>
     * @param string $ChannelName <p>通道名称</p>
     * @param string $AnalysisMode <p>分析模式：image=图片模式，video=视频模式（预留）</p>
     * @param integer $VLResultTimestamp <p>分析时间戳（秒）</p>
     * @param integer $SnapshotTimestamp <p>截图时间戳</p>
     * @param integer $VideoStartTimestamp <p>视频开始时间戳</p>
     * @param integer $VideoEndTimestamp <p>视频结束时间戳</p>
     * @param integer $BilledFrameCount <p>视频模式计费帧数</p>
     * @param string $Content <p>AI 分析结果内容（JSON 字符串）</p>
     * @param string $CreatedAt <p>创建时间，格式 2006-01-02 15:04:05</p>
     * @param string $UpdatedAt <p>更新时间，格式 2006-01-02 15:04:05</p>
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
        if (array_key_exists("VLPlanResultId",$param) and $param["VLPlanResultId"] !== null) {
            $this->VLPlanResultId = $param["VLPlanResultId"];
        }

        if (array_key_exists("VLPlanId",$param) and $param["VLPlanId"] !== null) {
            $this->VLPlanId = $param["VLPlanId"];
        }

        if (array_key_exists("VLPlanName",$param) and $param["VLPlanName"] !== null) {
            $this->VLPlanName = $param["VLPlanName"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("AnalysisMode",$param) and $param["AnalysisMode"] !== null) {
            $this->AnalysisMode = $param["AnalysisMode"];
        }

        if (array_key_exists("VLResultTimestamp",$param) and $param["VLResultTimestamp"] !== null) {
            $this->VLResultTimestamp = $param["VLResultTimestamp"];
        }

        if (array_key_exists("SnapshotTimestamp",$param) and $param["SnapshotTimestamp"] !== null) {
            $this->SnapshotTimestamp = $param["SnapshotTimestamp"];
        }

        if (array_key_exists("VideoStartTimestamp",$param) and $param["VideoStartTimestamp"] !== null) {
            $this->VideoStartTimestamp = $param["VideoStartTimestamp"];
        }

        if (array_key_exists("VideoEndTimestamp",$param) and $param["VideoEndTimestamp"] !== null) {
            $this->VideoEndTimestamp = $param["VideoEndTimestamp"];
        }

        if (array_key_exists("BilledFrameCount",$param) and $param["BilledFrameCount"] !== null) {
            $this->BilledFrameCount = $param["BilledFrameCount"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
