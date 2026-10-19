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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频深度估计任务的输出信息。
 *
 * @method string getStorageMode() 获取<p>输出文件的存储模式，取值：</p><li>Temporary：临时存储，文件默认 7 天后删除；</li><li>Permanent：永久存储，保存到点播媒资库。</li>
 * @method void setStorageMode(string $StorageMode) 设置<p>输出文件的存储模式，取值：</p><li>Temporary：临时存储，文件默认 7 天后删除；</li><li>Permanent：永久存储，保存到点播媒资库。</li>
 * @method string getMediaName() 获取<p>输出文件的媒体名称，仅 StorageMode 为 Permanent 时有值。</p>
 * @method void setMediaName(string $MediaName) 设置<p>输出文件的媒体名称，仅 StorageMode 为 Permanent 时有值。</p>
 * @method string getExpireTime() 获取<p>输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。<br><font color="red">注意：</font>StorageMode 为 Temporary 时，该字段为文件生成时间加 7 天。</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。<br><font color="red">注意：</font>StorageMode 为 Temporary 时，该字段为文件生成时间加 7 天。</p>
 * @method string getFileType() 获取<p>输出文件的类型，取值 mp4。</p>
 * @method void setFileType(string $FileType) 设置<p>输出文件的类型，取值 mp4。</p>
 * @method string getFileId() 获取<p>输出文件的媒体文件 ID，仅 StorageMode 为 Permanent 时有值。</p>
 * @method void setFileId(string $FileId) 设置<p>输出文件的媒体文件 ID，仅 StorageMode 为 Permanent 时有值。</p>
 * @method string getFileUrl() 获取<p>输出文件的播放地址。</p>
 * @method void setFileUrl(string $FileUrl) 设置<p>输出文件的播放地址。</p>
 * @method MediaMetaData getMetaData() 获取<p>输出视频的元信息。</p>
 * @method void setMetaData(MediaMetaData $MetaData) 设置<p>输出视频的元信息。</p>
 */
class VideoDepthEstimationOutput extends AbstractModel
{
    /**
     * @var string <p>输出文件的存储模式，取值：</p><li>Temporary：临时存储，文件默认 7 天后删除；</li><li>Permanent：永久存储，保存到点播媒资库。</li>
     */
    public $StorageMode;

    /**
     * @var string <p>输出文件的媒体名称，仅 StorageMode 为 Permanent 时有值。</p>
     */
    public $MediaName;

    /**
     * @var string <p>输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。<br><font color="red">注意：</font>StorageMode 为 Temporary 时，该字段为文件生成时间加 7 天。</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>输出文件的类型，取值 mp4。</p>
     */
    public $FileType;

    /**
     * @var string <p>输出文件的媒体文件 ID，仅 StorageMode 为 Permanent 时有值。</p>
     */
    public $FileId;

    /**
     * @var string <p>输出文件的播放地址。</p>
     */
    public $FileUrl;

    /**
     * @var MediaMetaData <p>输出视频的元信息。</p>
     */
    public $MetaData;

    /**
     * @param string $StorageMode <p>输出文件的存储模式，取值：</p><li>Temporary：临时存储，文件默认 7 天后删除；</li><li>Permanent：永久存储，保存到点播媒资库。</li>
     * @param string $MediaName <p>输出文件的媒体名称，仅 StorageMode 为 Permanent 时有值。</p>
     * @param string $ExpireTime <p>输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601 标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。<br><font color="red">注意：</font>StorageMode 为 Temporary 时，该字段为文件生成时间加 7 天。</p>
     * @param string $FileType <p>输出文件的类型，取值 mp4。</p>
     * @param string $FileId <p>输出文件的媒体文件 ID，仅 StorageMode 为 Permanent 时有值。</p>
     * @param string $FileUrl <p>输出文件的播放地址。</p>
     * @param MediaMetaData $MetaData <p>输出视频的元信息。</p>
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
        if (array_key_exists("StorageMode",$param) and $param["StorageMode"] !== null) {
            $this->StorageMode = $param["StorageMode"];
        }

        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
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

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }
    }
}
