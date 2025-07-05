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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 页面录制控制参数
 *
 * @method integer getWidth() 获取录制画面宽度，默认为1280，取值范围[0, 1920]
 * @method void setWidth(integer $Width) 设置录制画面宽度，默认为1280，取值范围[0, 1920]
 * @method integer getHeight() 获取录制画面高度，默认为720，取值范围[0, 1080]
 * @method void setHeight(integer $Height) 设置录制画面高度，默认为720，取值范围[0, 1080]
 * @method string getFormat() 获取指定输出格式，可选hls,mp4。存储到云点播VOD时此参数无效，存储到VOD时请通过TencentVod（https://cloud.tencent.com/document/api/647/44055#TencentVod）内的MediaType设置。

 * @method void setFormat(string $Format) 设置指定输出格式，可选hls,mp4。存储到云点播VOD时此参数无效，存储到VOD时请通过TencentVod（https://cloud.tencent.com/document/api/647/44055#TencentVod）内的MediaType设置。

 * @method integer getMaxMediaFileDuration() 获取如果是aac或者mp4文件格式，超过长度限制后，系统会自动拆分视频文件。单位：分钟。默认为1440min（24h），取值范围为1-1440。【单文件限制最大为2G，满足文件大小 >2G 或录制时长度 > 24h任意一个条件，文件都会自动切分】
Hls 格式录制此参数不生效。
示例值：1440
 * @method void setMaxMediaFileDuration(integer $MaxMediaFileDuration) 设置如果是aac或者mp4文件格式，超过长度限制后，系统会自动拆分视频文件。单位：分钟。默认为1440min（24h），取值范围为1-1440。【单文件限制最大为2G，满足文件大小 >2G 或录制时长度 > 24h任意一个条件，文件都会自动切分】
Hls 格式录制此参数不生效。
示例值：1440
 */
class WebRecordVideoParams extends AbstractModel
{
    /**
     * @var integer 录制画面宽度，默认为1280，取值范围[0, 1920]
     */
    public $Width;

    /**
     * @var integer 录制画面高度，默认为720，取值范围[0, 1080]
     */
    public $Height;

    /**
     * @var string 指定输出格式，可选hls,mp4。存储到云点播VOD时此参数无效，存储到VOD时请通过TencentVod（https://cloud.tencent.com/document/api/647/44055#TencentVod）内的MediaType设置。

     */
    public $Format;

    /**
     * @var integer 如果是aac或者mp4文件格式，超过长度限制后，系统会自动拆分视频文件。单位：分钟。默认为1440min（24h），取值范围为1-1440。【单文件限制最大为2G，满足文件大小 >2G 或录制时长度 > 24h任意一个条件，文件都会自动切分】
Hls 格式录制此参数不生效。
示例值：1440
     */
    public $MaxMediaFileDuration;

    /**
     * @param integer $Width 录制画面宽度，默认为1280，取值范围[0, 1920]
     * @param integer $Height 录制画面高度，默认为720，取值范围[0, 1080]
     * @param string $Format 指定输出格式，可选hls,mp4。存储到云点播VOD时此参数无效，存储到VOD时请通过TencentVod（https://cloud.tencent.com/document/api/647/44055#TencentVod）内的MediaType设置。

     * @param integer $MaxMediaFileDuration 如果是aac或者mp4文件格式，超过长度限制后，系统会自动拆分视频文件。单位：分钟。默认为1440min（24h），取值范围为1-1440。【单文件限制最大为2G，满足文件大小 >2G 或录制时长度 > 24h任意一个条件，文件都会自动切分】
Hls 格式录制此参数不生效。
示例值：1440
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
        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("MaxMediaFileDuration",$param) and $param["MaxMediaFileDuration"] !== null) {
            $this->MaxMediaFileDuration = $param["MaxMediaFileDuration"];
        }
    }
}
