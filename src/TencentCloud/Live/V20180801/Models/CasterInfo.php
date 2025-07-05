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
 * @method integer getCasterId() 获取导播台ID
 * @method void setCasterId(integer $CasterId) 设置导播台ID
 * @method string getCasterName() 获取导播台名称
 * @method void setCasterName(string $CasterName) 设置导播台名称
 * @method integer getStartLiveTime() 获取导播台上一次启动pgm的时间，值为unix时间戳。
 * @method void setStartLiveTime(integer $StartLiveTime) 设置导播台上一次启动pgm的时间，值为unix时间戳。
 * @method string getDescription() 获取导播台的描述
 * @method void setDescription(string $Description) 设置导播台的描述
 * @method integer getCreateTime() 获取导播台创建时间，值为unix时间戳。
 * @method void setCreateTime(integer $CreateTime) 设置导播台创建时间，值为unix时间戳。
 * @method integer getStatus() 获取导播台状态 
0：停止状态，无预监，无主监
1：无预监，有主监
2：有预监，无主监
3：有预监，有主监
 * @method void setStatus(integer $Status) 设置导播台状态 
0：停止状态，无预监，无主监
1：无预监，有主监
2：有预监，无主监
3：有预监，有主监
 * @method integer getExpireTime() 获取导播台的过期时间戳。值为-1或unix时间戳。 
默认值为-1。 当值为-1时，表示该导播台永不过期。 
当值为正常unix时间戳时，导播台将在该时间过期。 
导播台过期后，预监与主监画面将自动停止，转推自动停止。 
点播、直播url将停止转拉，推流url需自行停止推流。
 * @method void setExpireTime(integer $ExpireTime) 设置导播台的过期时间戳。值为-1或unix时间戳。 
默认值为-1。 当值为-1时，表示该导播台永不过期。 
当值为正常unix时间戳时，导播台将在该时间过期。 
导播台过期后，预监与主监画面将自动停止，转推自动停止。 
点播、直播url将停止转拉，推流url需自行停止推流。
 * @method integer getDelayTime() 获取导播台延时播放时间，单位为秒。 
 * @method void setDelayTime(integer $DelayTime) 设置导播台延时播放时间，单位为秒。 
 * @method integer getPgmWidth() 获取导播台主监输出的宽度，单位为像素。
 * @method void setPgmWidth(integer $PgmWidth) 设置导播台主监输出的宽度，单位为像素。
 * @method integer getPgmHeight() 获取导播台主监输出的高度，单位为像素。
 * @method void setPgmHeight(integer $PgmHeight) 设置导播台主监输出的高度，单位为像素。
 * @method integer getPgmFps() 获取导播台主监输出的帧率。
 * @method void setPgmFps(integer $PgmFps) 设置导播台主监输出的帧率。
 * @method integer getPgmBitRate() 获取导播台主监输出的码率，单位为kbps
 * @method void setPgmBitRate(integer $PgmBitRate) 设置导播台主监输出的码率，单位为kbps
 * @method integer getPgmAudioBitRate() 获取导播台主监输出的音频码率，单位为kbps。
 * @method void setPgmAudioBitRate(integer $PgmAudioBitRate) 设置导播台主监输出的音频码率，单位为kbps。
 * @method integer getFeeType() 获取导播台的计费类型。 
0 通用型 1 播单型。
注： 本参数暂无作用。
 * @method void setFeeType(integer $FeeType) 设置导播台的计费类型。 
0 通用型 1 播单型。
注： 本参数暂无作用。
 * @method integer getRecordTemplateId() 获取录制模板id。
 * @method void setRecordTemplateId(integer $RecordTemplateId) 设置录制模板id。
 * @method integer getRecordStatus() 获取录制状态。 
0：未录制 
1：录制中
 * @method void setRecordStatus(integer $RecordStatus) 设置录制状态。 
0：未录制 
1：录制中
 * @method string getRecordTaskId() 获取录制接口返回的taskid
 * @method void setRecordTaskId(string $RecordTaskId) 设置录制接口返回的taskid
 */
class CasterInfo extends AbstractModel
{
    /**
     * @var integer 导播台ID
     */
    public $CasterId;

    /**
     * @var string 导播台名称
     */
    public $CasterName;

    /**
     * @var integer 导播台上一次启动pgm的时间，值为unix时间戳。
     */
    public $StartLiveTime;

    /**
     * @var string 导播台的描述
     */
    public $Description;

    /**
     * @var integer 导播台创建时间，值为unix时间戳。
     */
    public $CreateTime;

    /**
     * @var integer 导播台状态 
0：停止状态，无预监，无主监
1：无预监，有主监
2：有预监，无主监
3：有预监，有主监
     */
    public $Status;

    /**
     * @var integer 导播台的过期时间戳。值为-1或unix时间戳。 
默认值为-1。 当值为-1时，表示该导播台永不过期。 
当值为正常unix时间戳时，导播台将在该时间过期。 
导播台过期后，预监与主监画面将自动停止，转推自动停止。 
点播、直播url将停止转拉，推流url需自行停止推流。
     */
    public $ExpireTime;

    /**
     * @var integer 导播台延时播放时间，单位为秒。 
     */
    public $DelayTime;

    /**
     * @var integer 导播台主监输出的宽度，单位为像素。
     */
    public $PgmWidth;

    /**
     * @var integer 导播台主监输出的高度，单位为像素。
     */
    public $PgmHeight;

    /**
     * @var integer 导播台主监输出的帧率。
     */
    public $PgmFps;

    /**
     * @var integer 导播台主监输出的码率，单位为kbps
     */
    public $PgmBitRate;

    /**
     * @var integer 导播台主监输出的音频码率，单位为kbps。
     */
    public $PgmAudioBitRate;

    /**
     * @var integer 导播台的计费类型。 
0 通用型 1 播单型。
注： 本参数暂无作用。
     */
    public $FeeType;

    /**
     * @var integer 录制模板id。
     */
    public $RecordTemplateId;

    /**
     * @var integer 录制状态。 
0：未录制 
1：录制中
     */
    public $RecordStatus;

    /**
     * @var string 录制接口返回的taskid
     */
    public $RecordTaskId;

    /**
     * @param integer $CasterId 导播台ID
     * @param string $CasterName 导播台名称
     * @param integer $StartLiveTime 导播台上一次启动pgm的时间，值为unix时间戳。
     * @param string $Description 导播台的描述
     * @param integer $CreateTime 导播台创建时间，值为unix时间戳。
     * @param integer $Status 导播台状态 
0：停止状态，无预监，无主监
1：无预监，有主监
2：有预监，无主监
3：有预监，有主监
     * @param integer $ExpireTime 导播台的过期时间戳。值为-1或unix时间戳。 
默认值为-1。 当值为-1时，表示该导播台永不过期。 
当值为正常unix时间戳时，导播台将在该时间过期。 
导播台过期后，预监与主监画面将自动停止，转推自动停止。 
点播、直播url将停止转拉，推流url需自行停止推流。
     * @param integer $DelayTime 导播台延时播放时间，单位为秒。 
     * @param integer $PgmWidth 导播台主监输出的宽度，单位为像素。
     * @param integer $PgmHeight 导播台主监输出的高度，单位为像素。
     * @param integer $PgmFps 导播台主监输出的帧率。
     * @param integer $PgmBitRate 导播台主监输出的码率，单位为kbps
     * @param integer $PgmAudioBitRate 导播台主监输出的音频码率，单位为kbps。
     * @param integer $FeeType 导播台的计费类型。 
0 通用型 1 播单型。
注： 本参数暂无作用。
     * @param integer $RecordTemplateId 录制模板id。
     * @param integer $RecordStatus 录制状态。 
0：未录制 
1：录制中
     * @param string $RecordTaskId 录制接口返回的taskid
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
    }
}
