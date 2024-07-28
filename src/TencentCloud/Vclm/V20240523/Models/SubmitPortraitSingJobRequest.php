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
 * SubmitPortraitSingJob请求参数结构体
 *
 * @method string getAudioUrl() 获取传入音频URL地址。音频要求：
—音频时长：不超过60秒
—音频格式：mp3、wav、m4a
 * @method void setAudioUrl(string $AudioUrl) 设置传入音频URL地址。音频要求：
—音频时长：不超过60秒
—音频格式：mp3、wav、m4a
 * @method string getImageUrl() 获取传入图片URL地址，图片要求：
—图片格式：jpg、jpeg、png
—图片分辨率：长边不超过2560
—图片大小：不超过6M
—图片宽高比：图片【宽：高】在1:2到2:1范围内
 * @method void setImageUrl(string $ImageUrl) 设置传入图片URL地址，图片要求：
—图片格式：jpg、jpeg、png
—图片分辨率：长边不超过2560
—图片大小：不超过6M
—图片宽高比：图片【宽：高】在1:2到2:1范围内
 * @method string getImageBase64() 获取传入图片Base64编码。
—图片Base64编码与URL地址必传其一
 * @method void setImageBase64(string $ImageBase64) 设置传入图片Base64编码。
—图片Base64编码与URL地址必传其一
 */
class SubmitPortraitSingJobRequest extends AbstractModel
{
    /**
     * @var string 传入音频URL地址。音频要求：
—音频时长：不超过60秒
—音频格式：mp3、wav、m4a
     */
    public $AudioUrl;

    /**
     * @var string 传入图片URL地址，图片要求：
—图片格式：jpg、jpeg、png
—图片分辨率：长边不超过2560
—图片大小：不超过6M
—图片宽高比：图片【宽：高】在1:2到2:1范围内
     */
    public $ImageUrl;

    /**
     * @var string 传入图片Base64编码。
—图片Base64编码与URL地址必传其一
     */
    public $ImageBase64;

    /**
     * @param string $AudioUrl 传入音频URL地址。音频要求：
—音频时长：不超过60秒
—音频格式：mp3、wav、m4a
     * @param string $ImageUrl 传入图片URL地址，图片要求：
—图片格式：jpg、jpeg、png
—图片分辨率：长边不超过2560
—图片大小：不超过6M
—图片宽高比：图片【宽：高】在1:2到2:1范围内
     * @param string $ImageBase64 传入图片Base64编码。
—图片Base64编码与URL地址必传其一
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
        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }
    }
}
