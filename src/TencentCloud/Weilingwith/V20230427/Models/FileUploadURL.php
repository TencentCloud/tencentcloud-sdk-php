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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取文件上传URL接口回包
 *
 * @method string getUploadURL() 获取上传地址
 * @method void setUploadURL(string $UploadURL) 设置上传地址
 * @method string getFileId() 获取文件Id
 * @method void setFileId(string $FileId) 设置文件Id
 * @method string getDownloadURL() 获取下载地址
 * @method void setDownloadURL(string $DownloadURL) 设置下载地址
 */
class FileUploadURL extends AbstractModel
{
    /**
     * @var string 上传地址
     */
    public $UploadURL;

    /**
     * @var string 文件Id
     */
    public $FileId;

    /**
     * @var string 下载地址
     */
    public $DownloadURL;

    /**
     * @param string $UploadURL 上传地址
     * @param string $FileId 文件Id
     * @param string $DownloadURL 下载地址
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
        if (array_key_exists("UploadURL",$param) and $param["UploadURL"] !== null) {
            $this->UploadURL = $param["UploadURL"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("DownloadURL",$param) and $param["DownloadURL"] !== null) {
            $this->DownloadURL = $param["DownloadURL"];
        }
    }
}
