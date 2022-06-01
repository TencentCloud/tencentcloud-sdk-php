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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 二期接口返回的模板中文件的信息结构
 *
 * @method string getFileId() 获取文件Id
 * @method void setFileId(string $FileId) 设置文件Id
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method integer getFileSize() 获取文件大小，单位为Byte
 * @method void setFileSize(integer $FileSize) 设置文件大小，单位为Byte
 * @method integer getCreatedOn() 获取文件上传时间，10位时间戳（精确到秒）
 * @method void setCreatedOn(integer $CreatedOn) 设置文件上传时间，10位时间戳（精确到秒）
 */
class FileInfo extends AbstractModel
{
    /**
     * @var string 文件Id
     */
    public $FileId;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var integer 文件大小，单位为Byte
     */
    public $FileSize;

    /**
     * @var integer 文件上传时间，10位时间戳（精确到秒）
     */
    public $CreatedOn;

    /**
     * @param string $FileId 文件Id
     * @param string $FileName 文件名
     * @param integer $FileSize 文件大小，单位为Byte
     * @param integer $CreatedOn 文件上传时间，10位时间戳（精确到秒）
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

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }
    }
}
