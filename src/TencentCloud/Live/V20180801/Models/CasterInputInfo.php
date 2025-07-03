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
 * 导播台输入信息参数
 *
 * @method integer getInputIndex() 获取输入源Index。
范围[1, 24]
 * @method void setInputIndex(integer $InputIndex) 设置输入源Index。
范围[1, 24]
 * @method integer getInputType() 获取输入源类型。
范围[0,1,2,3,4]。
0：推流地址。
1：点播文件地址。
2：直播拉流地址。
3：图片地址。
4：webrtc协议推流地址。
 * @method void setInputType(integer $InputType) 设置输入源类型。
范围[0,1,2,3,4]。
0：推流地址。
1：点播文件地址。
2：直播拉流地址。
3：图片地址。
4：webrtc协议推流地址。
 * @method string getInputUrl() 获取输入源的源地址。
最大允许长度512。
当InputType为0（推流地址），2（直播拉流地址），3（图片地址）,4（webrtc推流地址）这几种类型时，URL需填入该字段。

 * @method void setInputUrl(string $InputUrl) 设置输入源的源地址。
最大允许长度512。
当InputType为0（推流地址），2（直播拉流地址），3（图片地址）,4（webrtc推流地址）这几种类型时，URL需填入该字段。

 * @method string getDescription() 获取输入源描述。
最大允许长度256字符。
 * @method void setDescription(string $Description) 设置输入源描述。
最大允许长度256字符。
 * @method array getInputUrls() 获取点播地址列表。仅当input type为1（点播地址）时，将一个或多个点播地址，填入该字段。
单个地址最大允许长度512字符。
最多允许同时填入5个地址。
注：此时需保持InputUrl字段为空。
 * @method void setInputUrls(array $InputUrls) 设置点播地址列表。仅当input type为1（点播地址）时，将一个或多个点播地址，填入该字段。
单个地址最大允许长度512字符。
最多允许同时填入5个地址。
注：此时需保持InputUrl字段为空。
 * @method boolean getLoopEnable() 获取是否启用点播无限循环播放。
注：当前该字段未生效，默认为True。
 * @method void setLoopEnable(boolean $LoopEnable) 设置是否启用点播无限循环播放。
注：当前该字段未生效，默认为True。
 * @method integer getLoopNumber() 获取点播循环次数。
允许值-1或正整数。
当值为-1时，表示无限循环。
当值为其他正整数时，表示循环对应次数。
注：该字段暂未生效。
 * @method void setLoopNumber(integer $LoopNumber) 设置点播循环次数。
允许值-1或正整数。
当值为-1时，表示无限循环。
当值为其他正整数时，表示循环对应次数。
注：该字段暂未生效。
 * @method boolean getPullPushEnable() 获取是否启用拉取到导播台。
注：该字段默认强制为true。
 * @method void setPullPushEnable(boolean $PullPushEnable) 设置是否启用拉取到导播台。
注：该字段默认强制为true。
 * @method integer getVolume() 获取输入源音量百分比。
默认为100。表示音量为原始大小。
允许值[0,200]。
 * @method void setVolume(integer $Volume) 设置输入源音量百分比。
默认为100。表示音量为原始大小。
允许值[0,200]。
 */
class CasterInputInfo extends AbstractModel
{
    /**
     * @var integer 输入源Index。
范围[1, 24]
     */
    public $InputIndex;

    /**
     * @var integer 输入源类型。
范围[0,1,2,3,4]。
0：推流地址。
1：点播文件地址。
2：直播拉流地址。
3：图片地址。
4：webrtc协议推流地址。
     */
    public $InputType;

    /**
     * @var string 输入源的源地址。
最大允许长度512。
当InputType为0（推流地址），2（直播拉流地址），3（图片地址）,4（webrtc推流地址）这几种类型时，URL需填入该字段。

     */
    public $InputUrl;

    /**
     * @var string 输入源描述。
最大允许长度256字符。
     */
    public $Description;

    /**
     * @var array 点播地址列表。仅当input type为1（点播地址）时，将一个或多个点播地址，填入该字段。
单个地址最大允许长度512字符。
最多允许同时填入5个地址。
注：此时需保持InputUrl字段为空。
     */
    public $InputUrls;

    /**
     * @var boolean 是否启用点播无限循环播放。
注：当前该字段未生效，默认为True。
     */
    public $LoopEnable;

    /**
     * @var integer 点播循环次数。
允许值-1或正整数。
当值为-1时，表示无限循环。
当值为其他正整数时，表示循环对应次数。
注：该字段暂未生效。
     */
    public $LoopNumber;

    /**
     * @var boolean 是否启用拉取到导播台。
注：该字段默认强制为true。
     */
    public $PullPushEnable;

    /**
     * @var integer 输入源音量百分比。
默认为100。表示音量为原始大小。
允许值[0,200]。
     */
    public $Volume;

    /**
     * @param integer $InputIndex 输入源Index。
范围[1, 24]
     * @param integer $InputType 输入源类型。
范围[0,1,2,3,4]。
0：推流地址。
1：点播文件地址。
2：直播拉流地址。
3：图片地址。
4：webrtc协议推流地址。
     * @param string $InputUrl 输入源的源地址。
最大允许长度512。
当InputType为0（推流地址），2（直播拉流地址），3（图片地址）,4（webrtc推流地址）这几种类型时，URL需填入该字段。

     * @param string $Description 输入源描述。
最大允许长度256字符。
     * @param array $InputUrls 点播地址列表。仅当input type为1（点播地址）时，将一个或多个点播地址，填入该字段。
单个地址最大允许长度512字符。
最多允许同时填入5个地址。
注：此时需保持InputUrl字段为空。
     * @param boolean $LoopEnable 是否启用点播无限循环播放。
注：当前该字段未生效，默认为True。
     * @param integer $LoopNumber 点播循环次数。
允许值-1或正整数。
当值为-1时，表示无限循环。
当值为其他正整数时，表示循环对应次数。
注：该字段暂未生效。
     * @param boolean $PullPushEnable 是否启用拉取到导播台。
注：该字段默认强制为true。
     * @param integer $Volume 输入源音量百分比。
默认为100。表示音量为原始大小。
允许值[0,200]。
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
