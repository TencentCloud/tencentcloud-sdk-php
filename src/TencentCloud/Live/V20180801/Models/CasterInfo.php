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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 导播台信息
 *
 * @method integer getCasterId() 获取<p>导播台ID</p>
 * @method void setCasterId(integer $CasterId) 设置<p>导播台ID</p>
 * @method string getCasterName() 获取<p>导播台名称</p>
 * @method void setCasterName(string $CasterName) 设置<p>导播台名称</p>
 * @method integer getStartLiveTime() 获取<p>导播台上一次启动pgm的时间，值为unix时间戳。</p>
 * @method void setStartLiveTime(integer $StartLiveTime) 设置<p>导播台上一次启动pgm的时间，值为unix时间戳。</p>
 * @method string getDescription() 获取<p>导播台的描述</p>
 * @method void setDescription(string $Description) 设置<p>导播台的描述</p>
 * @method integer getCreateTime() 获取<p>导播台创建时间，值为unix时间戳。</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>导播台创建时间，值为unix时间戳。</p>
 * @method integer getStatus() 获取<p>导播台状态<br>0：停止状态，无预监，无主监<br>1：无预监，有主监<br>2：有预监，无主监<br>3：有预监，有主监</p>
 * @method void setStatus(integer $Status) 设置<p>导播台状态<br>0：停止状态，无预监，无主监<br>1：无预监，有主监<br>2：有预监，无主监<br>3：有预监，有主监</p>
 * @method integer getExpireTime() 获取<p>导播台的过期时间戳。值为-1或unix时间戳。<br>默认值为-1。 当值为-1时，表示该导播台永不过期。<br>当值为正常unix时间戳时，导播台将在该时间过期。<br>导播台过期后，预监与主监画面将自动停止，转推自动停止。<br>点播、直播url将停止转拉，推流url需自行停止推流。</p>
 * @method void setExpireTime(integer $ExpireTime) 设置<p>导播台的过期时间戳。值为-1或unix时间戳。<br>默认值为-1。 当值为-1时，表示该导播台永不过期。<br>当值为正常unix时间戳时，导播台将在该时间过期。<br>导播台过期后，预监与主监画面将自动停止，转推自动停止。<br>点播、直播url将停止转拉，推流url需自行停止推流。</p>
 * @method integer getDelayTime() 获取<p>导播台延时播放时间，单位为秒。</p>
 * @method void setDelayTime(integer $DelayTime) 设置<p>导播台延时播放时间，单位为秒。</p>
 * @method integer getPgmWidth() 获取<p>导播台主监输出的宽度，单位为像素。</p>
 * @method void setPgmWidth(integer $PgmWidth) 设置<p>导播台主监输出的宽度，单位为像素。</p>
 * @method integer getPgmHeight() 获取<p>导播台主监输出的高度，单位为像素。</p>
 * @method void setPgmHeight(integer $PgmHeight) 设置<p>导播台主监输出的高度，单位为像素。</p>
 * @method integer getPgmFps() 获取<p>导播台主监输出的帧率。</p>
 * @method void setPgmFps(integer $PgmFps) 设置<p>导播台主监输出的帧率。</p>
 * @method integer getPgmBitRate() 获取<p>导播台主监输出的码率，单位为kbps</p>
 * @method void setPgmBitRate(integer $PgmBitRate) 设置<p>导播台主监输出的码率，单位为kbps</p>
 * @method integer getPgmAudioBitRate() 获取<p>导播台主监输出的音频码率，单位为kbps。</p>
 * @method void setPgmAudioBitRate(integer $PgmAudioBitRate) 设置<p>导播台主监输出的音频码率，单位为kbps。</p>
 * @method integer getFeeType() 获取<p>导播台的计费类型。<br>0 通用型 1 播单型。<br>注： 本参数暂无作用。</p>
 * @method void setFeeType(integer $FeeType) 设置<p>导播台的计费类型。<br>0 通用型 1 播单型。<br>注： 本参数暂无作用。</p>
 * @method integer getRecordTemplateId() 获取<p>录制模板id。</p>
 * @method void setRecordTemplateId(integer $RecordTemplateId) 设置<p>录制模板id。</p>
 * @method integer getRecordStatus() 获取<p>录制状态。<br>0：未录制<br>1：录制中</p>
 * @method void setRecordStatus(integer $RecordStatus) 设置<p>录制状态。<br>0：未录制<br>1：录制中</p>
 * @method string getRecordTaskId() 获取<p>录制接口返回的taskid</p>
 * @method void setRecordTaskId(string $RecordTaskId) 设置<p>录制接口返回的taskid</p>
 * @method string getPgmVcodec() 获取<p>导播台主监输出的编码方式</p><p>枚举值：</p><ul><li>h264： h264编码</li><li>h265： h265编码</li></ul><p>默认值：h264</p>
 * @method void setPgmVcodec(string $PgmVcodec) 设置<p>导播台主监输出的编码方式</p><p>枚举值：</p><ul><li>h264： h264编码</li><li>h265： h265编码</li></ul><p>默认值：h264</p>
 */
class CasterInfo extends AbstractModel
{
    /**
     * @var integer <p>导播台ID</p>
     */
    public $CasterId;

    /**
     * @var string <p>导播台名称</p>
     */
    public $CasterName;

    /**
     * @var integer <p>导播台上一次启动pgm的时间，值为unix时间戳。</p>
     */
    public $StartLiveTime;

    /**
     * @var string <p>导播台的描述</p>
     */
    public $Description;

    /**
     * @var integer <p>导播台创建时间，值为unix时间戳。</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>导播台状态<br>0：停止状态，无预监，无主监<br>1：无预监，有主监<br>2：有预监，无主监<br>3：有预监，有主监</p>
     */
    public $Status;

    /**
     * @var integer <p>导播台的过期时间戳。值为-1或unix时间戳。<br>默认值为-1。 当值为-1时，表示该导播台永不过期。<br>当值为正常unix时间戳时，导播台将在该时间过期。<br>导播台过期后，预监与主监画面将自动停止，转推自动停止。<br>点播、直播url将停止转拉，推流url需自行停止推流。</p>
     */
    public $ExpireTime;

    /**
     * @var integer <p>导播台延时播放时间，单位为秒。</p>
     */
    public $DelayTime;

    /**
     * @var integer <p>导播台主监输出的宽度，单位为像素。</p>
     */
    public $PgmWidth;

    /**
     * @var integer <p>导播台主监输出的高度，单位为像素。</p>
     */
    public $PgmHeight;

    /**
     * @var integer <p>导播台主监输出的帧率。</p>
     */
    public $PgmFps;

    /**
     * @var integer <p>导播台主监输出的码率，单位为kbps</p>
     */
    public $PgmBitRate;

    /**
     * @var integer <p>导播台主监输出的音频码率，单位为kbps。</p>
     */
    public $PgmAudioBitRate;

    /**
     * @var integer <p>导播台的计费类型。<br>0 通用型 1 播单型。<br>注： 本参数暂无作用。</p>
     */
    public $FeeType;

    /**
     * @var integer <p>录制模板id。</p>
     */
    public $RecordTemplateId;

    /**
     * @var integer <p>录制状态。<br>0：未录制<br>1：录制中</p>
     */
    public $RecordStatus;

    /**
     * @var string <p>录制接口返回的taskid</p>
     */
    public $RecordTaskId;

    /**
     * @var string <p>导播台主监输出的编码方式</p><p>枚举值：</p><ul><li>h264： h264编码</li><li>h265： h265编码</li></ul><p>默认值：h264</p>
     */
    public $PgmVcodec;

    /**
     * @param integer $CasterId <p>导播台ID</p>
     * @param string $CasterName <p>导播台名称</p>
     * @param integer $StartLiveTime <p>导播台上一次启动pgm的时间，值为unix时间戳。</p>
     * @param string $Description <p>导播台的描述</p>
     * @param integer $CreateTime <p>导播台创建时间，值为unix时间戳。</p>
     * @param integer $Status <p>导播台状态<br>0：停止状态，无预监，无主监<br>1：无预监，有主监<br>2：有预监，无主监<br>3：有预监，有主监</p>
     * @param integer $ExpireTime <p>导播台的过期时间戳。值为-1或unix时间戳。<br>默认值为-1。 当值为-1时，表示该导播台永不过期。<br>当值为正常unix时间戳时，导播台将在该时间过期。<br>导播台过期后，预监与主监画面将自动停止，转推自动停止。<br>点播、直播url将停止转拉，推流url需自行停止推流。</p>
     * @param integer $DelayTime <p>导播台延时播放时间，单位为秒。</p>
     * @param integer $PgmWidth <p>导播台主监输出的宽度，单位为像素。</p>
     * @param integer $PgmHeight <p>导播台主监输出的高度，单位为像素。</p>
     * @param integer $PgmFps <p>导播台主监输出的帧率。</p>
     * @param integer $PgmBitRate <p>导播台主监输出的码率，单位为kbps</p>
     * @param integer $PgmAudioBitRate <p>导播台主监输出的音频码率，单位为kbps。</p>
     * @param integer $FeeType <p>导播台的计费类型。<br>0 通用型 1 播单型。<br>注： 本参数暂无作用。</p>
     * @param integer $RecordTemplateId <p>录制模板id。</p>
     * @param integer $RecordStatus <p>录制状态。<br>0：未录制<br>1：录制中</p>
     * @param string $RecordTaskId <p>录制接口返回的taskid</p>
     * @param string $PgmVcodec <p>导播台主监输出的编码方式</p><p>枚举值：</p><ul><li>h264： h264编码</li><li>h265： h265编码</li></ul><p>默认值：h264</p>
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
        if (array_key_exists("CasterId",$param) and $param["CasterId"] !== null) {
            $this->CasterId = $param["CasterId"];
        }

        if (array_key_exists("CasterName",$param) and $param["CasterName"] !== null) {
            $this->CasterName = $param["CasterName"];
        }

        if (array_key_exists("StartLiveTime",$param) and $param["StartLiveTime"] !== null) {
            $this->StartLiveTime = $param["StartLiveTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("PgmWidth",$param) and $param["PgmWidth"] !== null) {
            $this->PgmWidth = $param["PgmWidth"];
        }

        if (array_key_exists("PgmHeight",$param) and $param["PgmHeight"] !== null) {
            $this->PgmHeight = $param["PgmHeight"];
        }

        if (array_key_exists("PgmFps",$param) and $param["PgmFps"] !== null) {
            $this->PgmFps = $param["PgmFps"];
        }

        if (array_key_exists("PgmBitRate",$param) and $param["PgmBitRate"] !== null) {
            $this->PgmBitRate = $param["PgmBitRate"];
        }

        if (array_key_exists("PgmAudioBitRate",$param) and $param["PgmAudioBitRate"] !== null) {
            $this->PgmAudioBitRate = $param["PgmAudioBitRate"];
        }

        if (array_key_exists("FeeType",$param) and $param["FeeType"] !== null) {
            $this->FeeType = $param["FeeType"];
        }

        if (array_key_exists("RecordTemplateId",$param) and $param["RecordTemplateId"] !== null) {
            $this->RecordTemplateId = $param["RecordTemplateId"];
        }

        if (array_key_exists("RecordStatus",$param) and $param["RecordStatus"] !== null) {
            $this->RecordStatus = $param["RecordStatus"];
        }

        if (array_key_exists("RecordTaskId",$param) and $param["RecordTaskId"] !== null) {
            $this->RecordTaskId = $param["RecordTaskId"];
        }

        if (array_key_exists("PgmVcodec",$param) and $param["PgmVcodec"] !== null) {
            $this->PgmVcodec = $param["PgmVcodec"];
        }
    }
}
