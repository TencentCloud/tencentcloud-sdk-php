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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VideoLivenessCompare请求参数结构体
 *
 * @method string getImageUrl() 获取用于人脸比对照片的URL地址；图片下载后经Base64编码后的数据大小不超过3M，仅支持jpg、png格式。

图片仅支持腾讯云同region的Cos地址，可保障更高的下载速度和稳定性，可使用CreateUploadUrl生成或自行购买Cos。
 * @method void setImageUrl(string $ImageUrl) 设置用于人脸比对照片的URL地址；图片下载后经Base64编码后的数据大小不超过3M，仅支持jpg、png格式。

图片仅支持腾讯云同region的Cos地址，可保障更高的下载速度和稳定性，可使用CreateUploadUrl生成或自行购买Cos。
 * @method string getImageMd5() 获取比对图片的32位Md5值。
 * @method void setImageMd5(string $ImageMd5) 设置比对图片的32位Md5值。
 * @method string getVideoUrl() 获取用于活体检测的视频Url 地址。视频下载后经Base64编码后不超过 8M，视频下载耗时不超过4S，支持mp4、avi、flv格式。

视频仅支持腾讯云同region的Cos地址，可保障更高的下载速度和稳定性，可使用CreateUploadUrl生成或自行购买Cos。
 * @method void setVideoUrl(string $VideoUrl) 设置用于活体检测的视频Url 地址。视频下载后经Base64编码后不超过 8M，视频下载耗时不超过4S，支持mp4、avi、flv格式。

视频仅支持腾讯云同region的Cos地址，可保障更高的下载速度和稳定性，可使用CreateUploadUrl生成或自行购买Cos。
 * @method string getVideoMd5() 获取视频的32位Md5值。
 * @method void setVideoMd5(string $VideoMd5) 设置视频的32位Md5值。
 * @method string getLivenessType() 获取活体检测类型，取值：LIP/ACTION/SILENT。
LIP为数字模式，ACTION为动作模式，SILENT为静默模式，三种模式选择一种传入。
 * @method void setLivenessType(string $LivenessType) 设置活体检测类型，取值：LIP/ACTION/SILENT。
LIP为数字模式，ACTION为动作模式，SILENT为静默模式，三种模式选择一种传入。
 * @method string getValidateData() 获取数字模式传参：传数字验证码，需自定义四位数字验证码；
动作模式传参：传动作顺序，需自定义动作顺序(2,1 or 1,2)；
静默模式传参：空。
 * @method void setValidateData(string $ValidateData) 设置数字模式传参：传数字验证码，需自定义四位数字验证码；
动作模式传参：传动作顺序，需自定义动作顺序(2,1 or 1,2)；
静默模式传参：空。
 */
class VideoLivenessCompareRequest extends AbstractModel
{
    /**
     * @var string 用于人脸比对照片的URL地址；图片下载后经Base64编码后的数据大小不超过3M，仅支持jpg、png格式。

图片仅支持腾讯云同region的Cos地址，可保障更高的下载速度和稳定性，可使用CreateUploadUrl生成或自行购买Cos。
     */
    public $ImageUrl;

    /**
     * @var string 比对图片的32位Md5值。
     */
    public $ImageMd5;

    /**
     * @var string 用于活体检测的视频Url 地址。视频下载后经Base64编码后不超过 8M，视频下载耗时不超过4S，支持mp4、avi、flv格式。

视频仅支持腾讯云同region的Cos地址，可保障更高的下载速度和稳定性，可使用CreateUploadUrl生成或自行购买Cos。
     */
    public $VideoUrl;

    /**
     * @var string 视频的32位Md5值。
     */
    public $VideoMd5;

    /**
     * @var string 活体检测类型，取值：LIP/ACTION/SILENT。
LIP为数字模式，ACTION为动作模式，SILENT为静默模式，三种模式选择一种传入。
     */
    public $LivenessType;

    /**
     * @var string 数字模式传参：传数字验证码，需自定义四位数字验证码；
动作模式传参：传动作顺序，需自定义动作顺序(2,1 or 1,2)；
静默模式传参：空。
     */
    public $ValidateData;

    /**
     * @param string $ImageUrl 用于人脸比对照片的URL地址；图片下载后经Base64编码后的数据大小不超过3M，仅支持jpg、png格式。

图片仅支持腾讯云同region的Cos地址，可保障更高的下载速度和稳定性，可使用CreateUploadUrl生成或自行购买Cos。
     * @param string $ImageMd5 比对图片的32位Md5值。
     * @param string $VideoUrl 用于活体检测的视频Url 地址。视频下载后经Base64编码后不超过 8M，视频下载耗时不超过4S，支持mp4、avi、flv格式。

视频仅支持腾讯云同region的Cos地址，可保障更高的下载速度和稳定性，可使用CreateUploadUrl生成或自行购买Cos。
     * @param string $VideoMd5 视频的32位Md5值。
     * @param string $LivenessType 活体检测类型，取值：LIP/ACTION/SILENT。
LIP为数字模式，ACTION为动作模式，SILENT为静默模式，三种模式选择一种传入。
     * @param string $ValidateData 数字模式传参：传数字验证码，需自定义四位数字验证码；
动作模式传参：传动作顺序，需自定义动作顺序(2,1 or 1,2)；
静默模式传参：空。
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
        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageMd5",$param) and $param["ImageMd5"] !== null) {
            $this->ImageMd5 = $param["ImageMd5"];
        }

        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("VideoMd5",$param) and $param["VideoMd5"] !== null) {
            $this->VideoMd5 = $param["VideoMd5"];
        }

        if (array_key_exists("LivenessType",$param) and $param["LivenessType"] !== null) {
            $this->LivenessType = $param["LivenessType"];
        }

        if (array_key_exists("ValidateData",$param) and $param["ValidateData"] !== null) {
            $this->ValidateData = $param["ValidateData"];
        }
    }
}
