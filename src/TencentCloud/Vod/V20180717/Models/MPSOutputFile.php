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
 * 用于描述 MPS 视频处理任务中的返回文件结果。
 *
 * @method string getFileType() 获取文件类型。用于标识 MPS 视频处理任务执行结果中的特定返回文件。
取值：<li>AiAnalysis.DeLogo.Video: 智能擦除任务中产生的擦除后视频文件；</li><li>AiAnalysis.DeLogo.OriginSubtitle: 智能擦除任务中基于画面提取的字幕文件；</li><li>AiAnalysis.DeLogo.TranslateSubtitle: 智能擦除任务中基于画面提取的字幕翻译文件。</li>
 * @method void setFileType(string $FileType) 设置文件类型。用于标识 MPS 视频处理任务执行结果中的特定返回文件。
取值：<li>AiAnalysis.DeLogo.Video: 智能擦除任务中产生的擦除后视频文件；</li><li>AiAnalysis.DeLogo.OriginSubtitle: 智能擦除任务中基于画面提取的字幕文件；</li><li>AiAnalysis.DeLogo.TranslateSubtitle: 智能擦除任务中基于画面提取的字幕翻译文件。</li>
 * @method string getStorageMode() 获取存储形式。用于表示该结果文件的存储形式，取值有：<li> Permanent：永久存储；</li><li> Temporary：临时存储。</li>
 * @method void setStorageMode(string $StorageMode) 设置存储形式。用于表示该结果文件的存储形式，取值有：<li> Permanent：永久存储；</li><li> Temporary：临时存储。</li>
 * @method string getFileId() 获取媒体文件 ID。当 Type 为 Permanent 时有效，表示该结果文件以视频媒资形式存储在点播平台中，字段值为视频媒资的 FileId。
 * @method void setFileId(string $FileId) 设置媒体文件 ID。当 Type 为 Permanent 时有效，表示该结果文件以视频媒资形式存储在点播平台中，字段值为视频媒资的 FileId。
 * @method string getUrl() 获取结果文件的可下载 Url。
 * @method void setUrl(string $Url) 设置结果文件的可下载 Url。
 * @method integer getExpiredTime() 获取过期时间。当 StorageMode 为 Temporary 时有效，表示 Url 的过期时间，单位为秒。
 * @method void setExpiredTime(integer $ExpiredTime) 设置过期时间。当 StorageMode 为 Temporary 时有效，表示 Url 的过期时间，单位为秒。
 */
class MPSOutputFile extends AbstractModel
{
    /**
     * @var string 文件类型。用于标识 MPS 视频处理任务执行结果中的特定返回文件。
取值：<li>AiAnalysis.DeLogo.Video: 智能擦除任务中产生的擦除后视频文件；</li><li>AiAnalysis.DeLogo.OriginSubtitle: 智能擦除任务中基于画面提取的字幕文件；</li><li>AiAnalysis.DeLogo.TranslateSubtitle: 智能擦除任务中基于画面提取的字幕翻译文件。</li>
     */
    public $FileType;

    /**
     * @var string 存储形式。用于表示该结果文件的存储形式，取值有：<li> Permanent：永久存储；</li><li> Temporary：临时存储。</li>
     */
    public $StorageMode;

    /**
     * @var string 媒体文件 ID。当 Type 为 Permanent 时有效，表示该结果文件以视频媒资形式存储在点播平台中，字段值为视频媒资的 FileId。
     */
    public $FileId;

    /**
     * @var string 结果文件的可下载 Url。
     */
    public $Url;

    /**
     * @var integer 过期时间。当 StorageMode 为 Temporary 时有效，表示 Url 的过期时间，单位为秒。
     */
    public $ExpiredTime;

    /**
     * @param string $FileType 文件类型。用于标识 MPS 视频处理任务执行结果中的特定返回文件。
取值：<li>AiAnalysis.DeLogo.Video: 智能擦除任务中产生的擦除后视频文件；</li><li>AiAnalysis.DeLogo.OriginSubtitle: 智能擦除任务中基于画面提取的字幕文件；</li><li>AiAnalysis.DeLogo.TranslateSubtitle: 智能擦除任务中基于画面提取的字幕翻译文件。</li>
     * @param string $StorageMode 存储形式。用于表示该结果文件的存储形式，取值有：<li> Permanent：永久存储；</li><li> Temporary：临时存储。</li>
     * @param string $FileId 媒体文件 ID。当 Type 为 Permanent 时有效，表示该结果文件以视频媒资形式存储在点播平台中，字段值为视频媒资的 FileId。
     * @param string $Url 结果文件的可下载 Url。
     * @param integer $ExpiredTime 过期时间。当 StorageMode 为 Temporary 时有效，表示 Url 的过期时间，单位为秒。
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
        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("StorageMode",$param) and $param["StorageMode"] !== null) {
            $this->StorageMode = $param["StorageMode"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }
    }
}
