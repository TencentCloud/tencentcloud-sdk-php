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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器安全运行时，文件属性信息
 *
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method string getFileType() 获取文件类型
 * @method void setFileType(string $FileType) 设置文件类型
 * @method integer getFileSize() 获取文件大小(字节)
 * @method void setFileSize(integer $FileSize) 设置文件大小(字节)
 * @method string getFilePath() 获取文件路径
 * @method void setFilePath(string $FilePath) 设置文件路径
 * @method string getFileCreateTime() 获取文件创建时间
 * @method void setFileCreateTime(string $FileCreateTime) 设置文件创建时间
 * @method string getLatestTamperedFileMTime() 获取最近被篡改文件创建时间
 * @method void setLatestTamperedFileMTime(string $LatestTamperedFileMTime) 设置最近被篡改文件创建时间
 * @method string getNewFile() 获取新文件内容
 * @method void setNewFile(string $NewFile) 设置新文件内容
 * @method string getFileDiff() 获取新旧文件的差异
 * @method void setFileDiff(string $FileDiff) 设置新旧文件的差异
 */
class FileAttributeInfo extends AbstractModel
{
    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var string 文件类型
     */
    public $FileType;

    /**
     * @var integer 文件大小(字节)
     */
    public $FileSize;

    /**
     * @var string 文件路径
     */
    public $FilePath;

    /**
     * @var string 文件创建时间
     */
    public $FileCreateTime;

    /**
     * @var string 最近被篡改文件创建时间
     */
    public $LatestTamperedFileMTime;

    /**
     * @var string 新文件内容
     */
    public $NewFile;

    /**
     * @var string 新旧文件的差异
     */
    public $FileDiff;

    /**
     * @param string $FileName 文件名
     * @param string $FileType 文件类型
     * @param integer $FileSize 文件大小(字节)
     * @param string $FilePath 文件路径
     * @param string $FileCreateTime 文件创建时间
     * @param string $LatestTamperedFileMTime 最近被篡改文件创建时间
     * @param string $NewFile 新文件内容
     * @param string $FileDiff 新旧文件的差异
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

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileCreateTime",$param) and $param["FileCreateTime"] !== null) {
            $this->FileCreateTime = $param["FileCreateTime"];
        }

        if (array_key_exists("LatestTamperedFileMTime",$param) and $param["LatestTamperedFileMTime"] !== null) {
            $this->LatestTamperedFileMTime = $param["LatestTamperedFileMTime"];
        }

        if (array_key_exists("NewFile",$param) and $param["NewFile"] !== null) {
            $this->NewFile = $param["NewFile"];
        }

        if (array_key_exists("FileDiff",$param) and $param["FileDiff"] !== null) {
            $this->FileDiff = $param["FileDiff"];
        }
    }
}
