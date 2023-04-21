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
 * 智能去除水印任务的输出。
 *
 * @method string getFileId() 获取媒体文件 ID。
 * @method void setFileId(string $FileId) 设置媒体文件 ID。
 * @method string getFileType() 获取文件类型，例如 mp4、mp3 等。
 * @method void setFileType(string $FileType) 设置文件类型，例如 mp4、mp3 等。
 * @method string getFileUrl() 获取媒体文件播放地址。
 * @method void setFileUrl(string $FileUrl) 设置媒体文件播放地址。
 * @method string getMediaName() 获取文件名称，最长 64 个字符。
 * @method void setMediaName(string $MediaName) 设置文件名称，最长 64 个字符。
 * @method MediaMetaData getMetaData() 获取元信息。包括大小、时长、视频流信息、音频流信息等。
 * @method void setMetaData(MediaMetaData $MetaData) 设置元信息。包括大小、时长、视频流信息、音频流信息等。
 */
class RemoveWaterMarkTaskOutput extends AbstractModel
{
    /**
     * @var string 媒体文件 ID。
     */
    public $FileId;

    /**
     * @var string 文件类型，例如 mp4、mp3 等。
     */
    public $FileType;

    /**
     * @var string 媒体文件播放地址。
     */
    public $FileUrl;

    /**
     * @var string 文件名称，最长 64 个字符。
     */
    public $MediaName;

    /**
     * @var MediaMetaData 元信息。包括大小、时长、视频流信息、音频流信息等。
     */
    public $MetaData;

    /**
     * @param string $FileId 媒体文件 ID。
     * @param string $FileType 文件类型，例如 mp4、mp3 等。
     * @param string $FileUrl 媒体文件播放地址。
     * @param string $MediaName 文件名称，最长 64 个字符。
     * @param MediaMetaData $MetaData 元信息。包括大小、时长、视频流信息、音频流信息等。
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }
    }
}
