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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitVideoTranslateJob请求参数结构体
 *
 * @method string getVideoUrl() 获取视频地址URL。
格式要求：支持 mp4、mov 。
时长要求：【5-600】秒。
fps 要求：【15-60】fps
分辨率要求：单边像素要求在 【360~4096】 之间。
大小要求：不超过500Mb

 * @method void setVideoUrl(string $VideoUrl) 设置视频地址URL。
格式要求：支持 mp4、mov 。
时长要求：【5-600】秒。
fps 要求：【15-60】fps
分辨率要求：单边像素要求在 【360~4096】 之间。
大小要求：不超过500Mb

 * @method string getSrcLang() 获取输入视频中音频语种
目前支持语种范围：zh(中文), en(英文)
 * @method void setSrcLang(string $SrcLang) 设置输入视频中音频语种
目前支持语种范围：zh(中文), en(英文)
 * @method string getAudioUrl() 获取当音频 URL 不为空时，不经过语音AI处理，直接以视频为素材用音频内容做视频口型驱动。
格式要求：支持 mp3、m4a、acc、wav 格式。
时长要求：【5~600】秒，音频时长要匹配视频时长。
大小要求：不超过 100Mb。
 * @method void setAudioUrl(string $AudioUrl) 设置当音频 URL 不为空时，不经过语音AI处理，直接以视频为素材用音频内容做视频口型驱动。
格式要求：支持 mp3、m4a、acc、wav 格式。
时长要求：【5~600】秒，音频时长要匹配视频时长。
大小要求：不超过 100Mb。
 * @method string getDstLang() 获取输出视频中翻译语种
目前支持语种范围：zh(简体中文)、en(英语)、ar(阿拉伯语)、de(德语)、es(西班牙语)、fr(法语)、id(印尼语)、it(意大利语)、ja(日语)、ko(韩语)、ms(马来语)、pt(葡萄牙语)、ru(俄语)、th(泰语)、tr(土耳其语)、vi(越南语)
 * @method void setDstLang(string $DstLang) 设置输出视频中翻译语种
目前支持语种范围：zh(简体中文)、en(英语)、ar(阿拉伯语)、de(德语)、es(西班牙语)、fr(法语)、id(印尼语)、it(意大利语)、ja(日语)、ko(韩语)、ms(马来语)、pt(葡萄牙语)、ru(俄语)、th(泰语)、tr(土耳其语)、vi(越南语)
 * @method string getVoiceType() 获取翻译语种匹配音色种别，其他说明如下：
1）默认不填代表克隆输入视频中音频音色；
2）翻译语种非中英（即zh、en），该项必填；

具体音色种别详见说明“支持音色种别列表”，每个音色都支持 15 个目标语种。

 * @method void setVoiceType(string $VoiceType) 设置翻译语种匹配音色种别，其他说明如下：
1）默认不填代表克隆输入视频中音频音色；
2）翻译语种非中英（即zh、en），该项必填；

具体音色种别详见说明“支持音色种别列表”，每个音色都支持 15 个目标语种。

 * @method integer getConfirm() 获取是否需要纠正视频中音频识别与翻译内容，取值范围：0-不需要，1-需要，默认0。

 * @method void setConfirm(integer $Confirm) 设置是否需要纠正视频中音频识别与翻译内容，取值范围：0-不需要，1-需要，默认0。

 * @method integer getRemoveVocal() 获取是否需要去除VideoUrl或AudioUrl中背景音，取值范围：0-不需要，1-需要，默认0 。
 * @method void setRemoveVocal(integer $RemoveVocal) 设置是否需要去除VideoUrl或AudioUrl中背景音，取值范围：0-不需要，1-需要，默认0 。
 * @method integer getLipSync() 获取是否开启口型驱动，0-不开启，1-开启。默认0。
 * @method void setLipSync(integer $LipSync) 设置是否开启口型驱动，0-不开启，1-开启。默认0。
 * @method integer getVideoLoop() 获取当 AudioUrl 字段有输入音频时，如果输入音频时长大于输入视频时长，会拼接视频（ 0-正向拼接、1-反向拼接 ）对齐音频时长。默认 0。
 * @method void setVideoLoop(integer $VideoLoop) 设置当 AudioUrl 字段有输入音频时，如果输入音频时长大于输入视频时长，会拼接视频（ 0-正向拼接、1-反向拼接 ）对齐音频时长。默认 0。
 */
class SubmitVideoTranslateJobRequest extends AbstractModel
{
    /**
     * @var string 视频地址URL。
格式要求：支持 mp4、mov 。
时长要求：【5-600】秒。
fps 要求：【15-60】fps
分辨率要求：单边像素要求在 【360~4096】 之间。
大小要求：不超过500Mb

     */
    public $VideoUrl;

    /**
     * @var string 输入视频中音频语种
目前支持语种范围：zh(中文), en(英文)
     */
    public $SrcLang;

    /**
     * @var string 当音频 URL 不为空时，不经过语音AI处理，直接以视频为素材用音频内容做视频口型驱动。
格式要求：支持 mp3、m4a、acc、wav 格式。
时长要求：【5~600】秒，音频时长要匹配视频时长。
大小要求：不超过 100Mb。
     */
    public $AudioUrl;

    /**
     * @var string 输出视频中翻译语种
目前支持语种范围：zh(简体中文)、en(英语)、ar(阿拉伯语)、de(德语)、es(西班牙语)、fr(法语)、id(印尼语)、it(意大利语)、ja(日语)、ko(韩语)、ms(马来语)、pt(葡萄牙语)、ru(俄语)、th(泰语)、tr(土耳其语)、vi(越南语)
     */
    public $DstLang;

    /**
     * @var string 翻译语种匹配音色种别，其他说明如下：
1）默认不填代表克隆输入视频中音频音色；
2）翻译语种非中英（即zh、en），该项必填；

具体音色种别详见说明“支持音色种别列表”，每个音色都支持 15 个目标语种。

     */
    public $VoiceType;

    /**
     * @var integer 是否需要纠正视频中音频识别与翻译内容，取值范围：0-不需要，1-需要，默认0。

     */
    public $Confirm;

    /**
     * @var integer 是否需要去除VideoUrl或AudioUrl中背景音，取值范围：0-不需要，1-需要，默认0 。
     */
    public $RemoveVocal;

    /**
     * @var integer 是否开启口型驱动，0-不开启，1-开启。默认0。
     */
    public $LipSync;

    /**
     * @var integer 当 AudioUrl 字段有输入音频时，如果输入音频时长大于输入视频时长，会拼接视频（ 0-正向拼接、1-反向拼接 ）对齐音频时长。默认 0。
     */
    public $VideoLoop;

    /**
     * @param string $VideoUrl 视频地址URL。
格式要求：支持 mp4、mov 。
时长要求：【5-600】秒。
fps 要求：【15-60】fps
分辨率要求：单边像素要求在 【360~4096】 之间。
大小要求：不超过500Mb

     * @param string $SrcLang 输入视频中音频语种
目前支持语种范围：zh(中文), en(英文)
     * @param string $AudioUrl 当音频 URL 不为空时，不经过语音AI处理，直接以视频为素材用音频内容做视频口型驱动。
格式要求：支持 mp3、m4a、acc、wav 格式。
时长要求：【5~600】秒，音频时长要匹配视频时长。
大小要求：不超过 100Mb。
     * @param string $DstLang 输出视频中翻译语种
目前支持语种范围：zh(简体中文)、en(英语)、ar(阿拉伯语)、de(德语)、es(西班牙语)、fr(法语)、id(印尼语)、it(意大利语)、ja(日语)、ko(韩语)、ms(马来语)、pt(葡萄牙语)、ru(俄语)、th(泰语)、tr(土耳其语)、vi(越南语)
     * @param string $VoiceType 翻译语种匹配音色种别，其他说明如下：
1）默认不填代表克隆输入视频中音频音色；
2）翻译语种非中英（即zh、en），该项必填；

具体音色种别详见说明“支持音色种别列表”，每个音色都支持 15 个目标语种。

     * @param integer $Confirm 是否需要纠正视频中音频识别与翻译内容，取值范围：0-不需要，1-需要，默认0。

     * @param integer $RemoveVocal 是否需要去除VideoUrl或AudioUrl中背景音，取值范围：0-不需要，1-需要，默认0 。
     * @param integer $LipSync 是否开启口型驱动，0-不开启，1-开启。默认0。
     * @param integer $VideoLoop 当 AudioUrl 字段有输入音频时，如果输入音频时长大于输入视频时长，会拼接视频（ 0-正向拼接、1-反向拼接 ）对齐音频时长。默认 0。
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

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("DstLang",$param) and $param["DstLang"] !== null) {
            $this->DstLang = $param["DstLang"];
        }

        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }

        if (array_key_exists("Confirm",$param) and $param["Confirm"] !== null) {
            $this->Confirm = $param["Confirm"];
        }

        if (array_key_exists("RemoveVocal",$param) and $param["RemoveVocal"] !== null) {
            $this->RemoveVocal = $param["RemoveVocal"];
        }

        if (array_key_exists("LipSync",$param) and $param["LipSync"] !== null) {
            $this->LipSync = $param["LipSync"];
        }

        if (array_key_exists("VideoLoop",$param) and $param["VideoLoop"] !== null) {
            $this->VideoLoop = $param["VideoLoop"];
        }
    }
}
