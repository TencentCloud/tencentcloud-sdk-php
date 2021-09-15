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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此结构体 (FlowFileInfo) 用于描述流程文档信息。
 *
 * @method integer getFileIndex() 获取文件序号
 * @method void setFileIndex(integer $FileIndex) 设置文件序号
 * @method string getFileType() 获取文件类型
 * @method void setFileType(string $FileType) 设置文件类型
 * @method string getFileMd5() 获取文件的MD5码
 * @method void setFileMd5(string $FileMd5) 设置文件的MD5码
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method integer getFileSize() 获取文件大小，单位为Byte
 * @method void setFileSize(integer $FileSize) 设置文件大小，单位为Byte
 * @method integer getCreatedOn() 获取文件创建时间戳
 * @method void setCreatedOn(integer $CreatedOn) 设置文件创建时间戳
 * @method string getUrl() 获取文件的下载地址
 * @method void setUrl(string $Url) 设置文件的下载地址
 */
class FlowFileInfo extends AbstractModel
{
    /**
     * @var integer 文件序号
     */
    public $FileIndex;

    /**
     * @var string 文件类型
     */
    public $FileType;

    /**
     * @var string 文件的MD5码
     */
    public $FileMd5;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var integer 文件大小，单位为Byte
     */
    public $FileSize;

    /**
     * @var integer 文件创建时间戳
     */
    public $CreatedOn;

    /**
     * @var string 文件的下载地址
     */
    public $Url;

    /**
     * @param integer $FileIndex 文件序号
     * @param string $FileType 文件类型
     * @param string $FileMd5 文件的MD5码
     * @param string $FileName 文件名
     * @param integer $FileSize 文件大小，单位为Byte
     * @param integer $CreatedOn 文件创建时间戳
     * @param string $Url 文件的下载地址
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
        if (array_key_exists("FileIndex",$param) and $param["FileIndex"] !== null) {
            $this->FileIndex = $param["FileIndex"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
