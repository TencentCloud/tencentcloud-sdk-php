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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安卓实例上传文件信息
 *
 * @method string getAndroidInstanceId() 获取安卓实例 ID
 * @method void setAndroidInstanceId(string $AndroidInstanceId) 设置安卓实例 ID
 * @method string getFileURL() 获取文件上传 URL
 * @method void setFileURL(string $FileURL) 设置文件上传 URL
 * @method string getDestinationDirectory() 获取上传目标目录，只能上传到 /sdcard/ 目录或其子目录下
 * @method void setDestinationDirectory(string $DestinationDirectory) 设置上传目标目录，只能上传到 /sdcard/ 目录或其子目录下
 * @method string getDestinationFileName() 获取目标文件名
 * @method void setDestinationFileName(string $DestinationFileName) 设置目标文件名
 */
class AndroidInstanceUploadFile extends AbstractModel
{
    /**
     * @var string 安卓实例 ID
     */
    public $AndroidInstanceId;

    /**
     * @var string 文件上传 URL
     */
    public $FileURL;

    /**
     * @var string 上传目标目录，只能上传到 /sdcard/ 目录或其子目录下
     */
    public $DestinationDirectory;

    /**
     * @var string 目标文件名
     */
    public $DestinationFileName;

    /**
     * @param string $AndroidInstanceId 安卓实例 ID
     * @param string $FileURL 文件上传 URL
     * @param string $DestinationDirectory 上传目标目录，只能上传到 /sdcard/ 目录或其子目录下
     * @param string $DestinationFileName 目标文件名
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
        if (array_key_exists("AndroidInstanceId",$param) and $param["AndroidInstanceId"] !== null) {
            $this->AndroidInstanceId = $param["AndroidInstanceId"];
        }

        if (array_key_exists("FileURL",$param) and $param["FileURL"] !== null) {
            $this->FileURL = $param["FileURL"];
        }

        if (array_key_exists("DestinationDirectory",$param) and $param["DestinationDirectory"] !== null) {
            $this->DestinationDirectory = $param["DestinationDirectory"];
        }

        if (array_key_exists("DestinationFileName",$param) and $param["DestinationFileName"] !== null) {
            $this->DestinationFileName = $param["DestinationFileName"];
        }
    }
}
