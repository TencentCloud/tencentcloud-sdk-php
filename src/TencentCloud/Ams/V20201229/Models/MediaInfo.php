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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体类型
 *
 * @method string getCodecs() 获取该字段用于返回传入的媒体文件的编码格式，如wav、mp3、aac、flac、amr、3gp、 m4a、wma、ogg、ape等。
 * @method void setCodecs(string $Codecs) 设置该字段用于返回传入的媒体文件的编码格式，如wav、mp3、aac、flac、amr、3gp、 m4a、wma、ogg、ape等。
 * @method integer getDuration() 获取该字段用于返回对传入的流媒体文件进行分片的片段时长，单位为秒。**默认值为15秒**，支持用户自定义配置。
 * @method void setDuration(integer $Duration) 设置该字段用于返回对传入的流媒体文件进行分片的片段时长，单位为秒。**默认值为15秒**，支持用户自定义配置。
 * @method integer getWidth() 获取*内测中，敬请期待*
 * @method void setWidth(integer $Width) 设置*内测中，敬请期待*
 * @method integer getHeight() 获取*内测中，敬请期待*
 * @method void setHeight(integer $Height) 设置*内测中，敬请期待*
 * @method string getThumbnail() 获取*内测中，敬请期待*
 * @method void setThumbnail(string $Thumbnail) 设置*内测中，敬请期待*
 */
class MediaInfo extends AbstractModel
{
    /**
     * @var string 该字段用于返回传入的媒体文件的编码格式，如wav、mp3、aac、flac、amr、3gp、 m4a、wma、ogg、ape等。
     */
    public $Codecs;

    /**
     * @var integer 该字段用于返回对传入的流媒体文件进行分片的片段时长，单位为秒。**默认值为15秒**，支持用户自定义配置。
     */
    public $Duration;

    /**
     * @var integer *内测中，敬请期待*
     */
    public $Width;

    /**
     * @var integer *内测中，敬请期待*
     */
    public $Height;

    /**
     * @var string *内测中，敬请期待*
     */
    public $Thumbnail;

    /**
     * @param string $Codecs 该字段用于返回传入的媒体文件的编码格式，如wav、mp3、aac、flac、amr、3gp、 m4a、wma、ogg、ape等。
     * @param integer $Duration 该字段用于返回对传入的流媒体文件进行分片的片段时长，单位为秒。**默认值为15秒**，支持用户自定义配置。
     * @param integer $Width *内测中，敬请期待*
     * @param integer $Height *内测中，敬请期待*
     * @param string $Thumbnail *内测中，敬请期待*
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
        if (array_key_exists("Codecs",$param) and $param["Codecs"] !== null) {
            $this->Codecs = $param["Codecs"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Thumbnail",$param) and $param["Thumbnail"] !== null) {
            $this->Thumbnail = $param["Thumbnail"];
        }
    }
}
