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
 * ModifyCaster请求参数结构体
 *
 * @method integer getCasterId() 获取<p>导播台ID</p>
 * @method void setCasterId(integer $CasterId) 设置<p>导播台ID</p>
 * @method string getCasterName() 获取<p>导播台名称</p>
 * @method void setCasterName(string $CasterName) 设置<p>导播台名称</p>
 * @method string getDescription() 获取<p>导播台的描述，最大允许长度256</p>
 * @method void setDescription(string $Description) 设置<p>导播台的描述，最大允许长度256</p>
 * @method integer getRecordTemplateId() 获取<p>录制模板id。默认为0。当使用直播录制功能时，可将使用的录制模版填入。该接口仅保存字段，不涉及任何录制功能。</p>
 * @method void setRecordTemplateId(integer $RecordTemplateId) 设置<p>录制模板id。默认为0。当使用直播录制功能时，可将使用的录制模版填入。该接口仅保存字段，不涉及任何录制功能。</p>
 * @method integer getRecordStatus() 获取<p>录制状态，当调用录制接口后，可通过该字段保存录制状态。0：未录制 1：录制中该接口仅保存字段，不涉及任何录制处理。</p>
 * @method void setRecordStatus(integer $RecordStatus) 设置<p>录制状态，当调用录制接口后，可通过该字段保存录制状态。0：未录制 1：录制中该接口仅保存字段，不涉及任何录制处理。</p>
 * @method integer getExpireTime() 获取<p>导播台的过期时间戳。值为-1或unix时间戳。默认值为-1。 当值为-1时，表示该导播台永不过期。 当值为正常unix时间戳时，导播台将在该时间过期。导播台过期后，预监与主监画面将自动停止，转推自动停止。 点播、直播url将停止转拉，推流url需自行停止推流。</p>
 * @method void setExpireTime(integer $ExpireTime) 设置<p>导播台的过期时间戳。值为-1或unix时间戳。默认值为-1。 当值为-1时，表示该导播台永不过期。 当值为正常unix时间戳时，导播台将在该时间过期。导播台过期后，预监与主监画面将自动停止，转推自动停止。 点播、直播url将停止转拉，推流url需自行停止推流。</p>
 * @method integer getDelayTime() 获取<p>导播台延时播放时间，单位为秒。 默认为0，最大支持300秒</p>
 * @method void setDelayTime(integer $DelayTime) 设置<p>导播台延时播放时间，单位为秒。 默认为0，最大支持300秒</p>
 * @method string getTransitionType() 获取<p>导播台转场类型。 默认为空。 允许使用通过DescribeCasterTransitionTypes接口中查询到的转场类型。</p>
 * @method void setTransitionType(string $TransitionType) 设置<p>导播台转场类型。 默认为空。 允许使用通过DescribeCasterTransitionTypes接口中查询到的转场类型。</p>
 * @method integer getPgmWidth() 获取<p>导播台主监输出的宽度，单位为像素。 默认为1280，最大允许4096。</p>
 * @method void setPgmWidth(integer $PgmWidth) 设置<p>导播台主监输出的宽度，单位为像素。 默认为1280，最大允许4096。</p>
 * @method integer getPgmHeight() 获取<p>导播台主监输出的高度，单位为像素。 默认为720，最大允许2160。</p>
 * @method void setPgmHeight(integer $PgmHeight) 设置<p>导播台主监输出的高度，单位为像素。 默认为720，最大允许2160。</p>
 * @method integer getPgmFps() 获取<p>导播台主监输出的帧率。 默认为0，表示随源输出。 最大支持60。</p>
 * @method void setPgmFps(integer $PgmFps) 设置<p>导播台主监输出的帧率。 默认为0，表示随源输出。 最大支持60。</p>
 * @method integer getPgmBitRate() 获取<p>导播台主监输出的码率，单位为kbps。 默认为0，表示随源的码率输出。 最大允许10000kbps。</p>
 * @method void setPgmBitRate(integer $PgmBitRate) 设置<p>导播台主监输出的码率，单位为kbps。 默认为0，表示随源的码率输出。 最大允许10000kbps。</p>
 * @method integer getFeeType() 获取<p>导播台的计费类型。 0 通用型 1 播单型。 注： 本参数暂无作用。</p>
 * @method void setFeeType(integer $FeeType) 设置<p>导播台的计费类型。 0 通用型 1 播单型。 注： 本参数暂无作用。</p>
 * @method string getRecordTaskId() 获取<p>录制接口返回的taskid注：该接口只做字段保存，不涉及录制操作。</p>
 * @method void setRecordTaskId(string $RecordTaskId) 设置<p>录制接口返回的taskid注：该接口只做字段保存，不涉及录制操作。</p>
 * @method integer getPgmAudioBitRate() 获取<p>导播台主监输出的音频码率，单位为kbps。 可选项：[0, 128, 192, 256] 默认值为0，表示随源的音频码率输出。</p>
 * @method void setPgmAudioBitRate(integer $PgmAudioBitRate) 设置<p>导播台主监输出的音频码率，单位为kbps。 可选项：[0, 128, 192, 256] 默认值为0，表示随源的音频码率输出。</p>
 */
class ModifyCasterRequest extends AbstractModel
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
     * @var string <p>导播台的描述，最大允许长度256</p>
     */
    public $Description;

    /**
     * @var integer <p>录制模板id。默认为0。当使用直播录制功能时，可将使用的录制模版填入。该接口仅保存字段，不涉及任何录制功能。</p>
     */
    public $RecordTemplateId;

    /**
     * @var integer <p>录制状态，当调用录制接口后，可通过该字段保存录制状态。0：未录制 1：录制中该接口仅保存字段，不涉及任何录制处理。</p>
     */
    public $RecordStatus;

    /**
     * @var integer <p>导播台的过期时间戳。值为-1或unix时间戳。默认值为-1。 当值为-1时，表示该导播台永不过期。 当值为正常unix时间戳时，导播台将在该时间过期。导播台过期后，预监与主监画面将自动停止，转推自动停止。 点播、直播url将停止转拉，推流url需自行停止推流。</p>
     */
    public $ExpireTime;

    /**
     * @var integer <p>导播台延时播放时间，单位为秒。 默认为0，最大支持300秒</p>
     */
    public $DelayTime;

    /**
     * @var string <p>导播台转场类型。 默认为空。 允许使用通过DescribeCasterTransitionTypes接口中查询到的转场类型。</p>
     */
    public $TransitionType;

    /**
     * @var integer <p>导播台主监输出的宽度，单位为像素。 默认为1280，最大允许4096。</p>
     */
    public $PgmWidth;

    /**
     * @var integer <p>导播台主监输出的高度，单位为像素。 默认为720，最大允许2160。</p>
     */
    public $PgmHeight;

    /**
     * @var integer <p>导播台主监输出的帧率。 默认为0，表示随源输出。 最大支持60。</p>
     */
    public $PgmFps;

    /**
     * @var integer <p>导播台主监输出的码率，单位为kbps。 默认为0，表示随源的码率输出。 最大允许10000kbps。</p>
     */
    public $PgmBitRate;

    /**
     * @var integer <p>导播台的计费类型。 0 通用型 1 播单型。 注： 本参数暂无作用。</p>
     */
    public $FeeType;

    /**
     * @var string <p>录制接口返回的taskid注：该接口只做字段保存，不涉及录制操作。</p>
     */
    public $RecordTaskId;

    /**
     * @var integer <p>导播台主监输出的音频码率，单位为kbps。 可选项：[0, 128, 192, 256] 默认值为0，表示随源的音频码率输出。</p>
     */
    public $PgmAudioBitRate;

    /**
     * @param integer $CasterId <p>导播台ID</p>
     * @param string $CasterName <p>导播台名称</p>
     * @param string $Description <p>导播台的描述，最大允许长度256</p>
     * @param integer $RecordTemplateId <p>录制模板id。默认为0。当使用直播录制功能时，可将使用的录制模版填入。该接口仅保存字段，不涉及任何录制功能。</p>
     * @param integer $RecordStatus <p>录制状态，当调用录制接口后，可通过该字段保存录制状态。0：未录制 1：录制中该接口仅保存字段，不涉及任何录制处理。</p>
     * @param integer $ExpireTime <p>导播台的过期时间戳。值为-1或unix时间戳。默认值为-1。 当值为-1时，表示该导播台永不过期。 当值为正常unix时间戳时，导播台将在该时间过期。导播台过期后，预监与主监画面将自动停止，转推自动停止。 点播、直播url将停止转拉，推流url需自行停止推流。</p>
     * @param integer $DelayTime <p>导播台延时播放时间，单位为秒。 默认为0，最大支持300秒</p>
     * @param string $TransitionType <p>导播台转场类型。 默认为空。 允许使用通过DescribeCasterTransitionTypes接口中查询到的转场类型。</p>
     * @param integer $PgmWidth <p>导播台主监输出的宽度，单位为像素。 默认为1280，最大允许4096。</p>
     * @param integer $PgmHeight <p>导播台主监输出的高度，单位为像素。 默认为720，最大允许2160。</p>
     * @param integer $PgmFps <p>导播台主监输出的帧率。 默认为0，表示随源输出。 最大支持60。</p>
     * @param integer $PgmBitRate <p>导播台主监输出的码率，单位为kbps。 默认为0，表示随源的码率输出。 最大允许10000kbps。</p>
     * @param integer $FeeType <p>导播台的计费类型。 0 通用型 1 播单型。 注： 本参数暂无作用。</p>
     * @param string $RecordTaskId <p>录制接口返回的taskid注：该接口只做字段保存，不涉及录制操作。</p>
     * @param integer $PgmAudioBitRate <p>导播台主监输出的音频码率，单位为kbps。 可选项：[0, 128, 192, 256] 默认值为0，表示随源的音频码率输出。</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RecordTemplateId",$param) and $param["RecordTemplateId"] !== null) {
            $this->RecordTemplateId = $param["RecordTemplateId"];
        }

        if (array_key_exists("RecordStatus",$param) and $param["RecordStatus"] !== null) {
            $this->RecordStatus = $param["RecordStatus"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("TransitionType",$param) and $param["TransitionType"] !== null) {
            $this->TransitionType = $param["TransitionType"];
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

        if (array_key_exists("FeeType",$param) and $param["FeeType"] !== null) {
            $this->FeeType = $param["FeeType"];
        }

        if (array_key_exists("RecordTaskId",$param) and $param["RecordTaskId"] !== null) {
            $this->RecordTaskId = $param["RecordTaskId"];
        }

        if (array_key_exists("PgmAudioBitRate",$param) and $param["PgmAudioBitRate"] !== null) {
            $this->PgmAudioBitRate = $param["PgmAudioBitRate"];
        }
    }
}
