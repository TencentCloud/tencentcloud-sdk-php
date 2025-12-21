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
 * 导播台输入信息参数
 *
 * @method integer getInputIndex() 获取<p>输入源Index。范围[1, 24]</p>
 * @method void setInputIndex(integer $InputIndex) 设置<p>输入源Index。范围[1, 24]</p>
 * @method integer getInputType() 获取<p>输入源类型。范围[0,1,2,3,4]。0：推流地址。1：点播文件地址。2：直播拉流地址。3：图片地址。4：webrtc协议推流地址。</p>
 * @method void setInputType(integer $InputType) 设置<p>输入源类型。范围[0,1,2,3,4]。0：推流地址。1：点播文件地址。2：直播拉流地址。3：图片地址。4：webrtc协议推流地址。</p>
 * @method string getInputUrl() 获取<p>输入源的源地址。最大允许长度512。当InputType为0（推流地址），2（直播拉流地址），3（图片地址）,4（webrtc推流地址）这几种类型时，URL需填入该字段。</p>
 * @method void setInputUrl(string $InputUrl) 设置<p>输入源的源地址。最大允许长度512。当InputType为0（推流地址），2（直播拉流地址），3（图片地址）,4（webrtc推流地址）这几种类型时，URL需填入该字段。</p>
 * @method string getDescription() 获取<p>输入源描述。最大允许长度256字符。</p>
 * @method void setDescription(string $Description) 设置<p>输入源描述。最大允许长度256字符。</p>
 * @method array getInputUrls() 获取<p>点播地址列表。仅当input type为1（点播地址）时，将一个或多个点播地址，填入该字段。单个地址最大允许长度512字符。最多允许同时填入5个地址。注：此时需保持InputUrl字段为空。</p>
 * @method void setInputUrls(array $InputUrls) 设置<p>点播地址列表。仅当input type为1（点播地址）时，将一个或多个点播地址，填入该字段。单个地址最大允许长度512字符。最多允许同时填入5个地址。注：此时需保持InputUrl字段为空。</p>
 * @method boolean getLoopEnable() 获取<p>是否启用点播无限循环播放。注：当前该字段未生效，默认为True。</p>
 * @method void setLoopEnable(boolean $LoopEnable) 设置<p>是否启用点播无限循环播放。注：当前该字段未生效，默认为True。</p>
 * @method integer getLoopNumber() 获取<p>点播循环次数。允许值-1或正整数。当值为-1时，表示无限循环。当值为其他正整数时，表示循环对应次数。注：该字段暂未生效。</p>
 * @method void setLoopNumber(integer $LoopNumber) 设置<p>点播循环次数。允许值-1或正整数。当值为-1时，表示无限循环。当值为其他正整数时，表示循环对应次数。注：该字段暂未生效。</p>
 * @method boolean getPullPushEnable() 获取<p>是否启用拉取到导播台。注：该字段默认强制为true。</p>
 * @method void setPullPushEnable(boolean $PullPushEnable) 设置<p>是否启用拉取到导播台。注：该字段默认强制为true。</p>
 * @method integer getVolume() 获取<p>输入源音量百分比。默认为100。表示音量为原始大小。允许值[0,200]。</p>
 * @method void setVolume(integer $Volume) 设置<p>输入源音量百分比。默认为100。表示音量为原始大小。允许值[0,200]。</p>
 */
class CasterInputInfo extends AbstractModel
{
    /**
     * @var integer <p>输入源Index。范围[1, 24]</p>
     */
    public $InputIndex;

    /**
     * @var integer <p>输入源类型。范围[0,1,2,3,4]。0：推流地址。1：点播文件地址。2：直播拉流地址。3：图片地址。4：webrtc协议推流地址。</p>
     */
    public $InputType;

    /**
     * @var string <p>输入源的源地址。最大允许长度512。当InputType为0（推流地址），2（直播拉流地址），3（图片地址）,4（webrtc推流地址）这几种类型时，URL需填入该字段。</p>
     */
    public $InputUrl;

    /**
     * @var string <p>输入源描述。最大允许长度256字符。</p>
     */
    public $Description;

    /**
     * @var array <p>点播地址列表。仅当input type为1（点播地址）时，将一个或多个点播地址，填入该字段。单个地址最大允许长度512字符。最多允许同时填入5个地址。注：此时需保持InputUrl字段为空。</p>
     */
    public $InputUrls;

    /**
     * @var boolean <p>是否启用点播无限循环播放。注：当前该字段未生效，默认为True。</p>
     */
    public $LoopEnable;

    /**
     * @var integer <p>点播循环次数。允许值-1或正整数。当值为-1时，表示无限循环。当值为其他正整数时，表示循环对应次数。注：该字段暂未生效。</p>
     */
    public $LoopNumber;

    /**
     * @var boolean <p>是否启用拉取到导播台。注：该字段默认强制为true。</p>
     */
    public $PullPushEnable;

    /**
     * @var integer <p>输入源音量百分比。默认为100。表示音量为原始大小。允许值[0,200]。</p>
     */
    public $Volume;

    /**
     * @param integer $InputIndex <p>输入源Index。范围[1, 24]</p>
     * @param integer $InputType <p>输入源类型。范围[0,1,2,3,4]。0：推流地址。1：点播文件地址。2：直播拉流地址。3：图片地址。4：webrtc协议推流地址。</p>
     * @param string $InputUrl <p>输入源的源地址。最大允许长度512。当InputType为0（推流地址），2（直播拉流地址），3（图片地址）,4（webrtc推流地址）这几种类型时，URL需填入该字段。</p>
     * @param string $Description <p>输入源描述。最大允许长度256字符。</p>
     * @param array $InputUrls <p>点播地址列表。仅当input type为1（点播地址）时，将一个或多个点播地址，填入该字段。单个地址最大允许长度512字符。最多允许同时填入5个地址。注：此时需保持InputUrl字段为空。</p>
     * @param boolean $LoopEnable <p>是否启用点播无限循环播放。注：当前该字段未生效，默认为True。</p>
     * @param integer $LoopNumber <p>点播循环次数。允许值-1或正整数。当值为-1时，表示无限循环。当值为其他正整数时，表示循环对应次数。注：该字段暂未生效。</p>
     * @param boolean $PullPushEnable <p>是否启用拉取到导播台。注：该字段默认强制为true。</p>
     * @param integer $Volume <p>输入源音量百分比。默认为100。表示音量为原始大小。允许值[0,200]。</p>
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
        if (array_key_exists("InputIndex",$param) and $param["InputIndex"] !== null) {
            $this->InputIndex = $param["InputIndex"];
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("InputUrl",$param) and $param["InputUrl"] !== null) {
            $this->InputUrl = $param["InputUrl"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InputUrls",$param) and $param["InputUrls"] !== null) {
            $this->InputUrls = $param["InputUrls"];
        }

        if (array_key_exists("LoopEnable",$param) and $param["LoopEnable"] !== null) {
            $this->LoopEnable = $param["LoopEnable"];
        }

        if (array_key_exists("LoopNumber",$param) and $param["LoopNumber"] !== null) {
            $this->LoopNumber = $param["LoopNumber"];
        }

        if (array_key_exists("PullPushEnable",$param) and $param["PullPushEnable"] !== null) {
            $this->PullPushEnable = $param["PullPushEnable"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }
    }
}
