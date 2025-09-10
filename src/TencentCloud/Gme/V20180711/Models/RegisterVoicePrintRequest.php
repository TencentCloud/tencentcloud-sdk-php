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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterVoicePrint请求参数结构体
 *
 * @method string getAudio() 获取整个wav音频文件的base64字符串,其中wav文件限定为16k采样率, 16bit位深, 单声道, 4到18秒音频时长,有效音频不小于3秒(不能有太多静音段), 编码数据大小不超过2M, 为了识别准确率，建议音频长度为8秒
 * @method void setAudio(string $Audio) 设置整个wav音频文件的base64字符串,其中wav文件限定为16k采样率, 16bit位深, 单声道, 4到18秒音频时长,有效音频不小于3秒(不能有太多静音段), 编码数据大小不超过2M, 为了识别准确率，建议音频长度为8秒
 * @method integer getReqTimestamp() 获取毫秒时间戳
 * @method void setReqTimestamp(integer $ReqTimestamp) 设置毫秒时间戳
 * @method integer getAudioFormat() 获取音频格式,目前只支持0,代表wav
 * @method void setAudioFormat(integer $AudioFormat) 设置音频格式,目前只支持0,代表wav
 * @method string getAudioName() 获取音频名称,长度不要超过32
 * @method void setAudioName(string $AudioName) 设置音频名称,长度不要超过32
 * @method string getAudioMetaInfo() 获取和声纹绑定的MetaInfo，长度最大不超过512
 * @method void setAudioMetaInfo(string $AudioMetaInfo) 设置和声纹绑定的MetaInfo，长度最大不超过512
 */
class RegisterVoicePrintRequest extends AbstractModel
{
    /**
     * @var string 整个wav音频文件的base64字符串,其中wav文件限定为16k采样率, 16bit位深, 单声道, 4到18秒音频时长,有效音频不小于3秒(不能有太多静音段), 编码数据大小不超过2M, 为了识别准确率，建议音频长度为8秒
     */
    public $Audio;

    /**
     * @var integer 毫秒时间戳
     */
    public $ReqTimestamp;

    /**
     * @var integer 音频格式,目前只支持0,代表wav
     */
    public $AudioFormat;

    /**
     * @var string 音频名称,长度不要超过32
     */
    public $AudioName;

    /**
     * @var string 和声纹绑定的MetaInfo，长度最大不超过512
     */
    public $AudioMetaInfo;

    /**
     * @param string $Audio 整个wav音频文件的base64字符串,其中wav文件限定为16k采样率, 16bit位深, 单声道, 4到18秒音频时长,有效音频不小于3秒(不能有太多静音段), 编码数据大小不超过2M, 为了识别准确率，建议音频长度为8秒
     * @param integer $ReqTimestamp 毫秒时间戳
     * @param integer $AudioFormat 音频格式,目前只支持0,代表wav
     * @param string $AudioName 音频名称,长度不要超过32
     * @param string $AudioMetaInfo 和声纹绑定的MetaInfo，长度最大不超过512
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
        if (array_key_exists("Audio",$param) and $param["Audio"] !== null) {
            $this->Audio = $param["Audio"];
        }

        if (array_key_exists("ReqTimestamp",$param) and $param["ReqTimestamp"] !== null) {
            $this->ReqTimestamp = $param["ReqTimestamp"];
        }

        if (array_key_exists("AudioFormat",$param) and $param["AudioFormat"] !== null) {
            $this->AudioFormat = $param["AudioFormat"];
        }

        if (array_key_exists("AudioName",$param) and $param["AudioName"] !== null) {
            $this->AudioName = $param["AudioName"];
        }

        if (array_key_exists("AudioMetaInfo",$param) and $param["AudioMetaInfo"] !== null) {
            $this->AudioMetaInfo = $param["AudioMetaInfo"];
        }
    }
}
