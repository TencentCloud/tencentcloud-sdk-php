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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 即时转码模板详情。
 *
 * @method string getType() 获取模板类型。
 * @method void setType(string $Type) 设置模板类型。
 * @method string getName() 获取模板名。
 * @method void setName(string $Name) 设置模板名。
 * @method string getComment() 获取模板描述。
 * @method void setComment(string $Comment) 设置模板描述。
 * @method VideoConfigureInfo getVideoConfigure() 获取视频参数配置。
 * @method void setVideoConfigure(VideoConfigureInfo $VideoConfigure) 设置视频参数配置。
 * @method WatermarkConfigureData getWatermarkConfigure() 获取水印参数配置。
 * @method void setWatermarkConfigure(WatermarkConfigureData $WatermarkConfigure) 设置水印参数配置。
 */
class JustInTimeTranscodeTemplate extends AbstractModel
{
    /**
     * @var string 模板类型。
     */
    public $Type;

    /**
     * @var string 模板名。
     */
    public $Name;

    /**
     * @var string 模板描述。
     */
    public $Comment;

    /**
     * @var VideoConfigureInfo 视频参数配置。
     */
    public $VideoConfigure;

    /**
     * @var WatermarkConfigureData 水印参数配置。
     */
    public $WatermarkConfigure;

    /**
     * @param string $Type 模板类型。
     * @param string $Name 模板名。
     * @param string $Comment 模板描述。
     * @param VideoConfigureInfo $VideoConfigure 视频参数配置。
     * @param WatermarkConfigureData $WatermarkConfigure 水印参数配置。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("VideoConfigure",$param) and $param["VideoConfigure"] !== null) {
            $this->VideoConfigure = new VideoConfigureInfo();
            $this->VideoConfigure->deserialize($param["VideoConfigure"]);
        }

        if (array_key_exists("WatermarkConfigure",$param) and $param["WatermarkConfigure"] !== null) {
            $this->WatermarkConfigure = new WatermarkConfigureData();
            $this->WatermarkConfigure->deserialize($param["WatermarkConfigure"]);
        }
    }
}
