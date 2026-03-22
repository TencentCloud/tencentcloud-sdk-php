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
namespace TencentCloud\Ft\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MorphFace请求参数结构体
 *
 * @method array getImages() 获取<p>图片 base64 数据，base64 编码后大小不可超过5M。<br>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。<br>人员人脸总数量至少2张，不可超过5张。<br>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。<br>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</p>
 * @method void setImages(array $Images) 设置<p>图片 base64 数据，base64 编码后大小不可超过5M。<br>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。<br>人员人脸总数量至少2张，不可超过5张。<br>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。<br>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</p>
 * @method array getUrls() 获取<p>图片的 Url 。对应图片 base64 编码后大小不可超过5M。jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。<br>Url、Image必须提供一个，如果都提供，只使用 Url。图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。<br>非腾讯云存储的Url速度和稳定性可能受一定影响。<br>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。<br>人员人脸总数量不可超过5张。<br>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</p>
 * @method void setUrls(array $Urls) 设置<p>图片的 Url 。对应图片 base64 编码后大小不可超过5M。jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。<br>Url、Image必须提供一个，如果都提供，只使用 Url。图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。<br>非腾讯云存储的Url速度和稳定性可能受一定影响。<br>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。<br>人员人脸总数量不可超过5张。<br>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</p>
 * @method array getGradientInfos() 获取<p>人脸渐变参数。可调整每张图片的展示时长、人像渐变的最长时间</p>
 * @method void setGradientInfos(array $GradientInfos) 设置<p>人脸渐变参数。可调整每张图片的展示时长、人像渐变的最长时间</p>
 * @method integer getFps() 获取<p>视频帧率，取值[1,25]。默认10</p>
 * @method void setFps(integer $Fps) 设置<p>视频帧率，取值[1,25]。默认10</p>
 * @method integer getOutputType() 获取<p>视频类型，取值0。目前仅支持MP4格式，默认为MP4格式</p>
 * @method void setOutputType(integer $OutputType) 设置<p>视频类型，取值0。目前仅支持MP4格式，默认为MP4格式</p>
 * @method integer getOutputWidth() 获取<p>视频宽度，取值[128,1280]。<br>单位：px<br>默认值：720</p>
 * @method void setOutputWidth(integer $OutputWidth) 设置<p>视频宽度，取值[128,1280]。<br>单位：px<br>默认值：720</p>
 * @method integer getOutputHeight() 获取<p>视频高度，取值[128,1280]。<br>单位：px<br>默认值：1280</p>
 * @method void setOutputHeight(integer $OutputHeight) 设置<p>视频高度，取值[128,1280]。<br>单位：px<br>默认值：1280</p>
 */
class MorphFaceRequest extends AbstractModel
{
    /**
     * @var array <p>图片 base64 数据，base64 编码后大小不可超过5M。<br>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。<br>人员人脸总数量至少2张，不可超过5张。<br>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。<br>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</p>
     */
    public $Images;

    /**
     * @var array <p>图片的 Url 。对应图片 base64 编码后大小不可超过5M。jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。<br>Url、Image必须提供一个，如果都提供，只使用 Url。图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。<br>非腾讯云存储的Url速度和稳定性可能受一定影响。<br>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。<br>人员人脸总数量不可超过5张。<br>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</p>
     */
    public $Urls;

    /**
     * @var array <p>人脸渐变参数。可调整每张图片的展示时长、人像渐变的最长时间</p>
     */
    public $GradientInfos;

    /**
     * @var integer <p>视频帧率，取值[1,25]。默认10</p>
     */
    public $Fps;

    /**
     * @var integer <p>视频类型，取值0。目前仅支持MP4格式，默认为MP4格式</p>
     */
    public $OutputType;

    /**
     * @var integer <p>视频宽度，取值[128,1280]。<br>单位：px<br>默认值：720</p>
     */
    public $OutputWidth;

    /**
     * @var integer <p>视频高度，取值[128,1280]。<br>单位：px<br>默认值：1280</p>
     */
    public $OutputHeight;

    /**
     * @param array $Images <p>图片 base64 数据，base64 编码后大小不可超过5M。<br>jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。<br>人员人脸总数量至少2张，不可超过5张。<br>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。<br>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。</p>
     * @param array $Urls <p>图片的 Url 。对应图片 base64 编码后大小不可超过5M。jpg格式长边像素不可超过4000，其他格式图片长边像素不可超2000。<br>Url、Image必须提供一个，如果都提供，只使用 Url。图片存储于腾讯云的Url可保障更高下载速度和稳定性，建议图片存储于腾讯云。<br>非腾讯云存储的Url速度和稳定性可能受一定影响。<br>支持PNG、JPG、JPEG、BMP，不支持 GIF 图片。<br>人员人脸总数量不可超过5张。<br>若图片中包含多张人脸，只选取其中人脸面积最大的人脸。</p>
     * @param array $GradientInfos <p>人脸渐变参数。可调整每张图片的展示时长、人像渐变的最长时间</p>
     * @param integer $Fps <p>视频帧率，取值[1,25]。默认10</p>
     * @param integer $OutputType <p>视频类型，取值0。目前仅支持MP4格式，默认为MP4格式</p>
     * @param integer $OutputWidth <p>视频宽度，取值[128,1280]。<br>单位：px<br>默认值：720</p>
     * @param integer $OutputHeight <p>视频高度，取值[128,1280]。<br>单位：px<br>默认值：1280</p>
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
        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }

        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            $this->Urls = $param["Urls"];
        }

        if (array_key_exists("GradientInfos",$param) and $param["GradientInfos"] !== null) {
            $this->GradientInfos = [];
            foreach ($param["GradientInfos"] as $key => $value){
                $obj = new GradientInfo();
                $obj->deserialize($value);
                array_push($this->GradientInfos, $obj);
            }
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("OutputType",$param) and $param["OutputType"] !== null) {
            $this->OutputType = $param["OutputType"];
        }

        if (array_key_exists("OutputWidth",$param) and $param["OutputWidth"] !== null) {
            $this->OutputWidth = $param["OutputWidth"];
        }

        if (array_key_exists("OutputHeight",$param) and $param["OutputHeight"] !== null) {
            $this->OutputHeight = $param["OutputHeight"];
        }
    }
}
