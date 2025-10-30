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
 * CreateCaster请求参数结构体
 *
 * @method string getCasterName() 获取导播台名称
 * @method void setCasterName(string $CasterName) 设置导播台名称
 * @method string getDescription() 获取导播台的描述
最大允许长度256
 * @method void setDescription(string $Description) 设置导播台的描述
最大允许长度256
 * @method integer getExpireTime() 获取导播台的过期时间戳。值为-1或unix时间戳。
默认值为-1。
当值为-1时，表示该导播台永不过期。
当值为正常unix时间戳时，导播台将在该时间过期。
导播台过期后，预监与主监画面将自动停止，转推自动停止。
点播、直播url将停止转拉，推流url需自行停止推流。
 * @method void setExpireTime(integer $ExpireTime) 设置导播台的过期时间戳。值为-1或unix时间戳。
默认值为-1。
当值为-1时，表示该导播台永不过期。
当值为正常unix时间戳时，导播台将在该时间过期。
导播台过期后，预监与主监画面将自动停止，转推自动停止。
点播、直播url将停止转拉，推流url需自行停止推流。
 * @method integer getDelayTime() 获取导播台延时播放时间，单位为秒。
默认为0，最大支持300秒
 * @method void setDelayTime(integer $DelayTime) 设置导播台延时播放时间，单位为秒。
默认为0，最大支持300秒
 * @method string getTransitionType() 获取导播台转场类型。
默认为空。
允许使用通过DescribeCasterTransitionTypes接口中查询到的转场类型。
 * @method void setTransitionType(string $TransitionType) 设置导播台转场类型。
默认为空。
允许使用通过DescribeCasterTransitionTypes接口中查询到的转场类型。
 * @method integer getPgmWidth() 获取导播台主监输出的宽度，单位为像素。
默认为1280，最大允许4096。
 * @method void setPgmWidth(integer $PgmWidth) 设置导播台主监输出的宽度，单位为像素。
默认为1280，最大允许4096。
 * @method integer getPgmHeight() 获取导播台主监输出的高度，单位为像素。
默认为720，最大允许2160。
 * @method void setPgmHeight(integer $PgmHeight) 设置导播台主监输出的高度，单位为像素。
默认为720，最大允许2160。
 * @method integer getPgmFps() 获取导播台主监输出的帧率。
默认为0，表示随源输出。
最大支持60。
 * @method void setPgmFps(integer $PgmFps) 设置导播台主监输出的帧率。
默认为0，表示随源输出。
最大支持60。
 * @method integer getPgmBitRate() 获取导播台主监输出的码率，单位为kbps。
默认为0，表示随源的码率输出。
最大允许10000kbps。
 * @method void setPgmBitRate(integer $PgmBitRate) 设置导播台主监输出的码率，单位为kbps。
默认为0，表示随源的码率输出。
最大允许10000kbps。
 * @method integer getFeeType() 获取导播台的计费类型。
0 通用型 
1 播单型。
注： 本参数暂无作用。
 * @method void setFeeType(integer $FeeType) 设置导播台的计费类型。
0 通用型 
1 播单型。
注： 本参数暂无作用。
 * @method integer getPgmAudioBitRate() 获取导播台主监输出的音频码率，单位为kbps。
可选项：[0, 128, 192, 256]
默认值为0，表示随源的音频码率输出。
 * @method void setPgmAudioBitRate(integer $PgmAudioBitRate) 设置导播台主监输出的音频码率，单位为kbps。
可选项：[0, 128, 192, 256]
默认值为0，表示随源的音频码率输出。
 */
class CreateCasterRequest extends AbstractModel
{
    /**
     * @var string 导播台名称
     */
    public $CasterName;

    /**
     * @var string 导播台的描述
最大允许长度256
     */
    public $Description;

    /**
     * @var integer 导播台的过期时间戳。值为-1或unix时间戳。
默认值为-1。
当值为-1时，表示该导播台永不过期。
当值为正常unix时间戳时，导播台将在该时间过期。
导播台过期后，预监与主监画面将自动停止，转推自动停止。
点播、直播url将停止转拉，推流url需自行停止推流。
     */
    public $ExpireTime;

    /**
     * @var integer 导播台延时播放时间，单位为秒。
默认为0，最大支持300秒
     */
    public $DelayTime;

    /**
     * @var string 导播台转场类型。
默认为空。
允许使用通过DescribeCasterTransitionTypes接口中查询到的转场类型。
     */
    public $TransitionType;

    /**
     * @var integer 导播台主监输出的宽度，单位为像素。
默认为1280，最大允许4096。
     */
    public $PgmWidth;

    /**
     * @var integer 导播台主监输出的高度，单位为像素。
默认为720，最大允许2160。
     */
    public $PgmHeight;

    /**
     * @var integer 导播台主监输出的帧率。
默认为0，表示随源输出。
最大支持60。
     */
    public $PgmFps;

    /**
     * @var integer 导播台主监输出的码率，单位为kbps。
默认为0，表示随源的码率输出。
最大允许10000kbps。
     */
    public $PgmBitRate;

    /**
     * @var integer 导播台的计费类型。
0 通用型 
1 播单型。
注： 本参数暂无作用。
     */
    public $FeeType;

    /**
     * @var integer 导播台主监输出的音频码率，单位为kbps。
可选项：[0, 128, 192, 256]
默认值为0，表示随源的音频码率输出。
     */
    public $PgmAudioBitRate;

    /**
     * @param string $CasterName 导播台名称
     * @param string $Description 导播台的描述
最大允许长度256
     * @param integer $ExpireTime 导播台的过期时间戳。值为-1或unix时间戳。
默认值为-1。
当值为-1时，表示该导播台永不过期。
当值为正常unix时间戳时，导播台将在该时间过期。
导播台过期后，预监与主监画面将自动停止，转推自动停止。
点播、直播url将停止转拉，推流url需自行停止推流。
     * @param integer $DelayTime 导播台延时播放时间，单位为秒。
默认为0，最大支持300秒
     * @param string $TransitionType 导播台转场类型。
默认为空。
允许使用通过DescribeCasterTransitionTypes接口中查询到的转场类型。
     * @param integer $PgmWidth 导播台主监输出的宽度，单位为像素。
默认为1280，最大允许4096。
     * @param integer $PgmHeight 导播台主监输出的高度，单位为像素。
默认为720，最大允许2160。
     * @param integer $PgmFps 导播台主监输出的帧率。
默认为0，表示随源输出。
最大支持60。
     * @param integer $PgmBitRate 导播台主监输出的码率，单位为kbps。
默认为0，表示随源的码率输出。
最大允许10000kbps。
     * @param integer $FeeType 导播台的计费类型。
0 通用型 
1 播单型。
注： 本参数暂无作用。
     * @param integer $PgmAudioBitRate 导播台主监输出的音频码率，单位为kbps。
可选项：[0, 128, 192, 256]
默认值为0，表示随源的音频码率输出。
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
        if (array_key_exists("CasterName",$param) and $param["CasterName"] !== null) {
            $this->CasterName = $param["CasterName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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

        if (array_key_exists("PgmAudioBitRate",$param) and $param["PgmAudioBitRate"] !== null) {
            $this->PgmAudioBitRate = $param["PgmAudioBitRate"];
        }
    }
}
