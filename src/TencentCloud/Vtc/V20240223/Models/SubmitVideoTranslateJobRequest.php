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
namespace TencentCloud\Vtc\V20240223\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitVideoTranslateJob请求参数结构体
 *
 * @method string getVideoUrl() 获取视频地址URL。
格式要求：支持 mp4、mov 。
时长要求：【10-300】秒。
fps 要求：【15-60】fps
分辨率要求：单边像素要求在 【540~1920】 之间。
 * @method void setVideoUrl(string $VideoUrl) 设置视频地址URL。
格式要求：支持 mp4、mov 。
时长要求：【10-300】秒。
fps 要求：【15-60】fps
分辨率要求：单边像素要求在 【540~1920】 之间。
 * @method string getSrcLang() 获取源语言：zh(中文), en(英文)
 * @method void setSrcLang(string $SrcLang) 设置源语言：zh(中文), en(英文)
 * @method string getDstLang() 获取目标语种：
zh(简体中文)、en(英语)、ar(阿拉伯语)、de(德语)、es(西班牙语)、fr(法语)、id(印尼语)、it(意大利语)、ja(日语)、ko(韩语)、ms(马来语)、pt(葡萄牙语)、ru(俄语)、th(泰语)、tr(土耳其语)、vi(越南语)
示例值：ar(阿拉伯语)
 * @method void setDstLang(string $DstLang) 设置目标语种：
zh(简体中文)、en(英语)、ar(阿拉伯语)、de(德语)、es(西班牙语)、fr(法语)、id(印尼语)、it(意大利语)、ja(日语)、ko(韩语)、ms(马来语)、pt(葡萄牙语)、ru(俄语)、th(泰语)、tr(土耳其语)、vi(越南语)
示例值：ar(阿拉伯语)
 * @method string getAudioUrl() 获取当音频 URL 不为空时，默认以音频驱动视频任务口型。
格式要求：支持 mp3、m4a、acc、wav 格式。
时长要求：【10~300】秒
大小要求：不超过 100M。
示例值：http://xxx/audio.mp3
 * @method void setAudioUrl(string $AudioUrl) 设置当音频 URL 不为空时，默认以音频驱动视频任务口型。
格式要求：支持 mp3、m4a、acc、wav 格式。
时长要求：【10~300】秒
大小要求：不超过 100M。
示例值：http://xxx/audio.mp3
 * @method integer getRemoveVocal() 获取是否需要去除VideoUrl或AudioUrl中背景音，取值范围：0-不需要，1-需要，默认0 。
 * @method void setRemoveVocal(integer $RemoveVocal) 设置是否需要去除VideoUrl或AudioUrl中背景音，取值范围：0-不需要，1-需要，默认0 。
 * @method integer getConfirm() 获取是否需要确认翻译结果0：不需要，1：需要
 * @method void setConfirm(integer $Confirm) 设置是否需要确认翻译结果0：不需要，1：需要
 * @method integer getLipSync() 获取是否开启口型驱动，0：不开启，1：开启。默认开启。
 * @method void setLipSync(integer $LipSync) 设置是否开启口型驱动，0：不开启，1：开启。默认开启。
 * @method string getVoiceType() 获取音色种别：一种音色种别对应一种不同区域的音色
1）目标语种为小语种(非zh,en)时，该项为必填
2）目标语种为zh,en时，该项为非必填，若填入，则对应填入的音色

具体音色包含请见“支持音色种别列表”
 * @method void setVoiceType(string $VoiceType) 设置音色种别：一种音色种别对应一种不同区域的音色
1）目标语种为小语种(非zh,en)时，该项为必填
2）目标语种为zh,en时，该项为非必填，若填入，则对应填入的音色

具体音色包含请见“支持音色种别列表”
 */
class SubmitVideoTranslateJobRequest extends AbstractModel
{
    /**
     * @var string 视频地址URL。
格式要求：支持 mp4、mov 。
时长要求：【10-300】秒。
fps 要求：【15-60】fps
分辨率要求：单边像素要求在 【540~1920】 之间。
     */
    public $VideoUrl;

    /**
     * @var string 源语言：zh(中文), en(英文)
     */
    public $SrcLang;

    /**
     * @var string 目标语种：
zh(简体中文)、en(英语)、ar(阿拉伯语)、de(德语)、es(西班牙语)、fr(法语)、id(印尼语)、it(意大利语)、ja(日语)、ko(韩语)、ms(马来语)、pt(葡萄牙语)、ru(俄语)、th(泰语)、tr(土耳其语)、vi(越南语)
示例值：ar(阿拉伯语)
     */
    public $DstLang;

    /**
     * @var string 当音频 URL 不为空时，默认以音频驱动视频任务口型。
格式要求：支持 mp3、m4a、acc、wav 格式。
时长要求：【10~300】秒
大小要求：不超过 100M。
示例值：http://xxx/audio.mp3
     */
    public $AudioUrl;

    /**
     * @var integer 是否需要去除VideoUrl或AudioUrl中背景音，取值范围：0-不需要，1-需要，默认0 。
     */
    public $RemoveVocal;

    /**
     * @var integer 是否需要确认翻译结果0：不需要，1：需要
     */
    public $Confirm;

    /**
     * @var integer 是否开启口型驱动，0：不开启，1：开启。默认开启。
     */
    public $LipSync;

    /**
     * @var string 音色种别：一种音色种别对应一种不同区域的音色
1）目标语种为小语种(非zh,en)时，该项为必填
2）目标语种为zh,en时，该项为非必填，若填入，则对应填入的音色

具体音色包含请见“支持音色种别列表”
     */
    public $VoiceType;

    /**
     * @param string $VideoUrl 视频地址URL。
格式要求：支持 mp4、mov 。
时长要求：【10-300】秒。
fps 要求：【15-60】fps
分辨率要求：单边像素要求在 【540~1920】 之间。
     * @param string $SrcLang 源语言：zh(中文), en(英文)
     * @param string $DstLang 目标语种：
zh(简体中文)、en(英语)、ar(阿拉伯语)、de(德语)、es(西班牙语)、fr(法语)、id(印尼语)、it(意大利语)、ja(日语)、ko(韩语)、ms(马来语)、pt(葡萄牙语)、ru(俄语)、th(泰语)、tr(土耳其语)、vi(越南语)
示例值：ar(阿拉伯语)
     * @param string $AudioUrl 当音频 URL 不为空时，默认以音频驱动视频任务口型。
格式要求：支持 mp3、m4a、acc、wav 格式。
时长要求：【10~300】秒
大小要求：不超过 100M。
示例值：http://xxx/audio.mp3
     * @param integer $RemoveVocal 是否需要去除VideoUrl或AudioUrl中背景音，取值范围：0-不需要，1-需要，默认0 。
     * @param integer $Confirm 是否需要确认翻译结果0：不需要，1：需要
     * @param integer $LipSync 是否开启口型驱动，0：不开启，1：开启。默认开启。
     * @param string $VoiceType 音色种别：一种音色种别对应一种不同区域的音色
1）目标语种为小语种(非zh,en)时，该项为必填
2）目标语种为zh,en时，该项为非必填，若填入，则对应填入的音色

具体音色包含请见“支持音色种别列表”
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
        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("SrcLang",$param) and $param["SrcLang"] !== null) {
            $this->SrcLang = $param["SrcLang"];
        }

        if (array_key_exists("DstLang",$param) and $param["DstLang"] !== null) {
            $this->DstLang = $param["DstLang"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("RemoveVocal",$param) and $param["RemoveVocal"] !== null) {
            $this->RemoveVocal = $param["RemoveVocal"];
        }

        if (array_key_exists("Confirm",$param) and $param["Confirm"] !== null) {
            $this->Confirm = $param["Confirm"];
        }

        if (array_key_exists("LipSync",$param) and $param["LipSync"] !== null) {
            $this->LipSync = $param["LipSync"];
        }

        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }
    }
}
