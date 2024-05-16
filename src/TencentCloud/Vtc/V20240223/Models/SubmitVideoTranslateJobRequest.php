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
namespace TencentCloud\Vtc\V20240223\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitVideoTranslateJob请求参数结构体
 *
 * @method string getVideoUrl() 获取视频地址URL。
 * @method void setVideoUrl(string $VideoUrl) 设置视频地址URL。
 * @method string getSrcLang() 获取源语言：zh, en
 * @method void setSrcLang(string $SrcLang) 设置源语言：zh, en
 * @method string getDstLang() 获取目标语言：zh, en
 * @method void setDstLang(string $DstLang) 设置目标语言：zh, en
 * @method string getAudioUrl() 获取当音频 URL 不为空时，默认以音频驱动视频任务口型
 * @method void setAudioUrl(string $AudioUrl) 设置当音频 URL 不为空时，默认以音频驱动视频任务口型
 * @method integer getConfirm() 获取是否需要确认翻译结果0：不需要，1：需要
 * @method void setConfirm(integer $Confirm) 设置是否需要确认翻译结果0：不需要，1：需要
 * @method integer getLipSync() 获取是否开启口型驱动，0：不开启，1：开启。默认开启。
 * @method void setLipSync(integer $LipSync) 设置是否开启口型驱动，0：不开启，1：开启。默认开启。
 */
class SubmitVideoTranslateJobRequest extends AbstractModel
{
    /**
     * @var string 视频地址URL。
     */
    public $VideoUrl;

    /**
     * @var string 源语言：zh, en
     */
    public $SrcLang;

    /**
     * @var string 目标语言：zh, en
     */
    public $DstLang;

    /**
     * @var string 当音频 URL 不为空时，默认以音频驱动视频任务口型
     */
    public $AudioUrl;

    /**
     * @var integer 是否需要确认翻译结果0：不需要，1：需要
     */
    public $Confirm;

    /**
     * @var integer 是否开启口型驱动，0：不开启，1：开启。默认开启。
     */
    public $LipSync;

    /**
     * @param string $VideoUrl 视频地址URL。
     * @param string $SrcLang 源语言：zh, en
     * @param string $DstLang 目标语言：zh, en
     * @param string $AudioUrl 当音频 URL 不为空时，默认以音频驱动视频任务口型
     * @param integer $Confirm 是否需要确认翻译结果0：不需要，1：需要
     * @param integer $LipSync 是否开启口型驱动，0：不开启，1：开启。默认开启。
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

        if (array_key_exists("Confirm",$param) and $param["Confirm"] !== null) {
            $this->Confirm = $param["Confirm"];
        }

        if (array_key_exists("LipSync",$param) and $param["LipSync"] !== null) {
            $this->LipSync = $param["LipSync"];
        }
    }
}
