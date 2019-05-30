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
 * @method string getFileType() 获取文件类型，例如 mp4、mp3 等。
 * @method void setFileType(string $FileType) 设置文件类型，例如 mp4、mp3 等。
 * @method string getFileId() 获取媒体文件 ID。
 * @method void setFileId(string $FileId) 设置媒体文件 ID。
 * @method string getFileUrl() 获取媒体文件播放地址。
 * @method void setFileUrl(string $FileUrl) 设置媒体文件播放地址。
 */

/**
 *制作媒体文件任务的输出。
 */
class ComposeMediaTaskOutput extends AbstractModel
{
    /**
     * @var string 文件类型，例如 mp4、mp3 等。
     */
    public $FileType;

    /**
     * @var string 媒体文件 ID。
     */
    public $FileId;

    /**
     * @var string 媒体文件播放地址。
     */
    public $FileUrl;
    /**
     * @param string $FileType 文件类型，例如 mp4、mp3 等。
     * @param string $FileId 媒体文件 ID。
     * @param string $FileUrl 媒体文件播放地址。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }
    }
}
