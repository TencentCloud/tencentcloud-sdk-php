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
 * 云点播中存储的文件。
 *
 * @method string getKey() 获取对象键。
 * @method void setKey(string $Key) 设置对象键。
 * @method string getLastModified() 获取对象最后修改时间，为 ISO8601格式，例如2019-05-24T10:56:40Z。
 * @method void setLastModified(string $LastModified) 设置对象最后修改时间，为 ISO8601格式，例如2019-05-24T10:56:40Z。
 * @method string getETag() 获取对象的实体标签（Entity Tag），是对象被创建时标识对象内容的信息标签，可用于检查对象的内容是否发生变化。
 * @method void setETag(string $ETag) 设置对象的实体标签（Entity Tag），是对象被创建时标识对象内容的信息标签，可用于检查对象的内容是否发生变化。
 * @method integer getSize() 获取对象大小，单位为Byte。
 * @method void setSize(integer $Size) 设置对象大小，单位为Byte。
 * @method string getStorageClass() 获取枚举值请参见[存储类型](https://cloud.tencent.com/document/product/436/33417)文档，例如 STANDARD_IA，ARCHIVE。
 * @method void setStorageClass(string $StorageClass) 设置枚举值请参见[存储类型](https://cloud.tencent.com/document/product/436/33417)文档，例如 STANDARD_IA，ARCHIVE。
 * @method string getFileId() 获取此文件对应的媒体文件的唯一标识。
 * @method void setFileId(string $FileId) 设置此文件对应的媒体文件的唯一标识。
 * @method string getCategory() 获取文件分类： <li>Video: 视频文件</li> <li>Audio: 音频文件</li> <li>Image: 图片文件</li> <li>Other: 其他文件</li>
 * @method void setCategory(string $Category) 设置文件分类： <li>Video: 视频文件</li> <li>Audio: 音频文件</li> <li>Image: 图片文件</li> <li>Other: 其他文件</li>
 * @method string getFileType() 获取可选值有：
 - OriginalFiles：原文件
- TranscodeFiles：转码文件
- AdaptiveDynamicStreamingFiles：转自适应码流文件
- SubtitleFiles：字幕文件
- SampleSnapshotFiles：采样截图文件
- ImageSpriteFiles：雪碧图截图文件
- SnapshotByTimeOffsetFiles：时间点截图文件

 * @method void setFileType(string $FileType) 设置可选值有：
 - OriginalFiles：原文件
- TranscodeFiles：转码文件
- AdaptiveDynamicStreamingFiles：转自适应码流文件
- SubtitleFiles：字幕文件
- SampleSnapshotFiles：采样截图文件
- ImageSpriteFiles：雪碧图截图文件
- SnapshotByTimeOffsetFiles：时间点截图文件

 * @method integer getDefinition() 获取视频模板号，模板定义参见转码模板。
 * @method void setDefinition(integer $Definition) 设置视频模板号，模板定义参见转码模板。
 * @method string getSubtitleID() 获取字幕ID。
仅当FileType=SubtitleFiles时有值。
 * @method void setSubtitleID(string $SubtitleID) 设置字幕ID。
仅当FileType=SubtitleFiles时有值。
 */
class FileContent extends AbstractModel
{
    /**
     * @var string 对象键。
     */
    public $Key;

    /**
     * @var string 对象最后修改时间，为 ISO8601格式，例如2019-05-24T10:56:40Z。
     */
    public $LastModified;

    /**
     * @var string 对象的实体标签（Entity Tag），是对象被创建时标识对象内容的信息标签，可用于检查对象的内容是否发生变化。
     */
    public $ETag;

    /**
     * @var integer 对象大小，单位为Byte。
     */
    public $Size;

    /**
     * @var string 枚举值请参见[存储类型](https://cloud.tencent.com/document/product/436/33417)文档，例如 STANDARD_IA，ARCHIVE。
     */
    public $StorageClass;

    /**
     * @var string 此文件对应的媒体文件的唯一标识。
     */
    public $FileId;

    /**
     * @var string 文件分类： <li>Video: 视频文件</li> <li>Audio: 音频文件</li> <li>Image: 图片文件</li> <li>Other: 其他文件</li>
     */
    public $Category;

    /**
     * @var string 可选值有：
 - OriginalFiles：原文件
- TranscodeFiles：转码文件
- AdaptiveDynamicStreamingFiles：转自适应码流文件
- SubtitleFiles：字幕文件
- SampleSnapshotFiles：采样截图文件
- ImageSpriteFiles：雪碧图截图文件
- SnapshotByTimeOffsetFiles：时间点截图文件

     */
    public $FileType;

    /**
     * @var integer 视频模板号，模板定义参见转码模板。
     */
    public $Definition;

    /**
     * @var string 字幕ID。
仅当FileType=SubtitleFiles时有值。
     */
    public $SubtitleID;

    /**
     * @param string $Key 对象键。
     * @param string $LastModified 对象最后修改时间，为 ISO8601格式，例如2019-05-24T10:56:40Z。
     * @param string $ETag 对象的实体标签（Entity Tag），是对象被创建时标识对象内容的信息标签，可用于检查对象的内容是否发生变化。
     * @param integer $Size 对象大小，单位为Byte。
     * @param string $StorageClass 枚举值请参见[存储类型](https://cloud.tencent.com/document/product/436/33417)文档，例如 STANDARD_IA，ARCHIVE。
     * @param string $FileId 此文件对应的媒体文件的唯一标识。
     * @param string $Category 文件分类： <li>Video: 视频文件</li> <li>Audio: 音频文件</li> <li>Image: 图片文件</li> <li>Other: 其他文件</li>
     * @param string $FileType 可选值有：
 - OriginalFiles：原文件
- TranscodeFiles：转码文件
- AdaptiveDynamicStreamingFiles：转自适应码流文件
- SubtitleFiles：字幕文件
- SampleSnapshotFiles：采样截图文件
- ImageSpriteFiles：雪碧图截图文件
- SnapshotByTimeOffsetFiles：时间点截图文件

     * @param integer $Definition 视频模板号，模板定义参见转码模板。
     * @param string $SubtitleID 字幕ID。
仅当FileType=SubtitleFiles时有值。
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("LastModified",$param) and $param["LastModified"] !== null) {
            $this->LastModified = $param["LastModified"];
        }

        if (array_key_exists("ETag",$param) and $param["ETag"] !== null) {
            $this->ETag = $param["ETag"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("StorageClass",$param) and $param["StorageClass"] !== null) {
            $this->StorageClass = $param["StorageClass"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("SubtitleID",$param) and $param["SubtitleID"] !== null) {
            $this->SubtitleID = $param["SubtitleID"];
        }
    }
}
