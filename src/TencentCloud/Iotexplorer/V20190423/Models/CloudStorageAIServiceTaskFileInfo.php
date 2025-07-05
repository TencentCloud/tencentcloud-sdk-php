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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云存 AI 任务输出文件信息
 *
 * @method string getFileName() 获取文件名称（含扩展名）
 * @method void setFileName(string $FileName) 设置文件名称（含扩展名）
 * @method integer getFileSize() 获取文件大小（单位：bytes）
 * @method void setFileSize(integer $FileSize) 设置文件大小（单位：bytes）
 * @method string getDownloadURL() 获取文件下载 URL
 * @method void setDownloadURL(string $DownloadURL) 设置文件下载 URL
 * @method string getMimeType() 获取文件的 MIME Type
 * @method void setMimeType(string $MimeType) 设置文件的 MIME Type
 * @method CloudStorageAIServiceTaskVideoMetaInfo getVideoMetaInfo() 获取视频文件元数据（仅当文件为视频类型时包含该字段）
 * @method void setVideoMetaInfo(CloudStorageAIServiceTaskVideoMetaInfo $VideoMetaInfo) 设置视频文件元数据（仅当文件为视频类型时包含该字段）
 * @method array getLabels() 获取文件标签
 * @method void setLabels(array $Labels) 设置文件标签
 */
class CloudStorageAIServiceTaskFileInfo extends AbstractModel
{
    /**
     * @var string 文件名称（含扩展名）
     */
    public $FileName;

    /**
     * @var integer 文件大小（单位：bytes）
     */
    public $FileSize;

    /**
     * @var string 文件下载 URL
     */
    public $DownloadURL;

    /**
     * @var string 文件的 MIME Type
     */
    public $MimeType;

    /**
     * @var CloudStorageAIServiceTaskVideoMetaInfo 视频文件元数据（仅当文件为视频类型时包含该字段）
     */
    public $VideoMetaInfo;

    /**
     * @var array 文件标签
     */
    public $Labels;

    /**
     * @param string $FileName 文件名称（含扩展名）
     * @param integer $FileSize 文件大小（单位：bytes）
     * @param string $DownloadURL 文件下载 URL
     * @param string $MimeType 文件的 MIME Type
     * @param CloudStorageAIServiceTaskVideoMetaInfo $VideoMetaInfo 视频文件元数据（仅当文件为视频类型时包含该字段）
     * @param array $Labels 文件标签
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("DownloadURL",$param) and $param["DownloadURL"] !== null) {
            $this->DownloadURL = $param["DownloadURL"];
        }

        if (array_key_exists("MimeType",$param) and $param["MimeType"] !== null) {
            $this->MimeType = $param["MimeType"];
        }

        if (array_key_exists("VideoMetaInfo",$param) and $param["VideoMetaInfo"] !== null) {
            $this->VideoMetaInfo = new CloudStorageAIServiceTaskVideoMetaInfo();
            $this->VideoMetaInfo->deserialize($param["VideoMetaInfo"]);
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new CloudStorageAIServiceTaskFileLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
