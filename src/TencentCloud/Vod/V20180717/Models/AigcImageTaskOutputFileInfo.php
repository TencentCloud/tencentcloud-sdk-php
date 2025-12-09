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
 * AIGC 生图任务的输出文件信息。
 *
 * @method string getStorageMode() 获取存储模式。取值有： <li>Permanent：永久存储；</li> <li>Temporary：临时存储；</li>

 * @method void setStorageMode(string $StorageMode) 设置存储模式。取值有： <li>Permanent：永久存储；</li> <li>Temporary：临时存储；</li>

 * @method string getMediaName() 获取输出文件名，最长 64 个字符。缺省由系统指定生成文件名。当 StorageMode 为 Permanent 时有效。
 * @method void setMediaName(string $MediaName) 设置输出文件名，最长 64 个字符。缺省由系统指定生成文件名。当 StorageMode 为 Permanent 时有效。
 * @method integer getClassId() 获取分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。当 StorageMode 为 Permanent 时有效。

 * @method void setClassId(integer $ClassId) 设置分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。当 StorageMode 为 Permanent 时有效。

 * @method string getExpireTime() 获取输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setExpireTime(string $ExpireTime) 设置输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getFileType() 获取文件类型，例如 mp4、flv 等。
 * @method void setFileType(string $FileType) 设置文件类型，例如 mp4、flv 等。
 * @method string getFileUrl() 获取媒体文件播放地址。
 * @method void setFileUrl(string $FileUrl) 设置媒体文件播放地址。
 * @method string getFileId() 获取媒体文件 ID。当 StorageMode 为 Permanent 时有效。
 * @method void setFileId(string $FileId) 设置媒体文件 ID。当 StorageMode 为 Permanent 时有效。
 * @method MediaMetaData getMetaData() 获取输出视频的元信息。当 StorageMode 为 Permanent 时有效。
 * @method void setMetaData(MediaMetaData $MetaData) 设置输出视频的元信息。当 StorageMode 为 Permanent 时有效。
 */
class AigcImageTaskOutputFileInfo extends AbstractModel
{
    /**
     * @var string 存储模式。取值有： <li>Permanent：永久存储；</li> <li>Temporary：临时存储；</li>

     */
    public $StorageMode;

    /**
     * @var string 输出文件名，最长 64 个字符。缺省由系统指定生成文件名。当 StorageMode 为 Permanent 时有效。
     */
    public $MediaName;

    /**
     * @var integer 分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。当 StorageMode 为 Permanent 时有效。

     */
    public $ClassId;

    /**
     * @var string 输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $ExpireTime;

    /**
     * @var string 文件类型，例如 mp4、flv 等。
     */
    public $FileType;

    /**
     * @var string 媒体文件播放地址。
     */
    public $FileUrl;

    /**
     * @var string 媒体文件 ID。当 StorageMode 为 Permanent 时有效。
     */
    public $FileId;

    /**
     * @var MediaMetaData 输出视频的元信息。当 StorageMode 为 Permanent 时有效。
     */
    public $MetaData;

    /**
     * @param string $StorageMode 存储模式。取值有： <li>Permanent：永久存储；</li> <li>Temporary：临时存储；</li>

     * @param string $MediaName 输出文件名，最长 64 个字符。缺省由系统指定生成文件名。当 StorageMode 为 Permanent 时有效。
     * @param integer $ClassId 分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。当 StorageMode 为 Permanent 时有效。

     * @param string $ExpireTime 输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $FileType 文件类型，例如 mp4、flv 等。
     * @param string $FileUrl 媒体文件播放地址。
     * @param string $FileId 媒体文件 ID。当 StorageMode 为 Permanent 时有效。
     * @param MediaMetaData $MetaData 输出视频的元信息。当 StorageMode 为 Permanent 时有效。
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

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }
    }
}
