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
 * CreateJustInTimeTranscodeTemplate请求参数结构体
 *
 * @method string getName() 获取模板名字，长度限制64个字符。
 * @method void setName(string $Name) 设置模板名字，长度限制64个字符。
 * @method VideoConfigureInfo getVideoConfigure() 获取视频参数配置。
 * @method void setVideoConfigure(VideoConfigureInfo $VideoConfigure) 设置视频参数配置。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method WatermarkConfigureInfo getWatermarkConfigure() 获取水印参数配置。
 * @method void setWatermarkConfigure(WatermarkConfigureInfo $WatermarkConfigure) 设置水印参数配置。
 * @method string getComment() 获取模板描述，长度限制256个字符。
 * @method void setComment(string $Comment) 设置模板描述，长度限制256个字符。
 */
class CreateJustInTimeTranscodeTemplateRequest extends AbstractModel
{
    /**
     * @var string 模板名字，长度限制64个字符。
     */
    public $Name;

    /**
     * @var VideoConfigureInfo 视频参数配置。
     */
    public $VideoConfigure;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var WatermarkConfigureInfo 水印参数配置。
     */
    public $WatermarkConfigure;

    /**
     * @var string 模板描述，长度限制256个字符。
     */
    public $Comment;

    /**
     * @param string $Name 模板名字，长度限制64个字符。
     * @param VideoConfigureInfo $VideoConfigure 视频参数配置。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param WatermarkConfigureInfo $WatermarkConfigure 水印参数配置。
     * @param string $Comment 模板描述，长度限制256个字符。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("VideoConfigure",$param) and $param["VideoConfigure"] !== null) {
            $this->VideoConfigure = new VideoConfigureInfo();
            $this->VideoConfigure->deserialize($param["VideoConfigure"]);
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("WatermarkConfigure",$param) and $param["WatermarkConfigure"] !== null) {
            $this->WatermarkConfigure = new WatermarkConfigureInfo();
            $this->WatermarkConfigure->deserialize($param["WatermarkConfigure"]);
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
