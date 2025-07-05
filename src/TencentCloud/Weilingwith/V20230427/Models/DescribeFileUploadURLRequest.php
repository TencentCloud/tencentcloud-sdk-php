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
 * DescribeFileUploadURL请求参数结构体
 *
 * @method integer getWorkspaceId() 获取工作空间Id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间Id
 * @method string getFileName() 获取文件名称
 * @method void setFileName(string $FileName) 设置文件名称
 * @method integer getFileSize() 获取文件大小
 * @method void setFileSize(integer $FileSize) 设置文件大小
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method string getFileMD5() 获取文件MD5
 * @method void setFileMD5(string $FileMD5) 设置文件MD5
 * @method string getSaveType() 获取存储类型
 * @method void setSaveType(string $SaveType) 设置存储类型
 * @method integer getFileExpireTime() 获取过期时间，过期时间戳，精确到秒的时间戳，noExpireFlag为false时必填

 * @method void setFileExpireTime(integer $FileExpireTime) 设置过期时间，过期时间戳，精确到秒的时间戳，noExpireFlag为false时必填

 * @method boolean getNoExpireFlag() 获取永不过期标记
 * @method void setNoExpireFlag(boolean $NoExpireFlag) 设置永不过期标记
 */
class DescribeFileUploadURLRequest extends AbstractModel
{
    /**
     * @var integer 工作空间Id
     */
    public $WorkspaceId;

    /**
     * @var string 文件名称
     */
    public $FileName;

    /**
     * @var integer 文件大小
     */
    public $FileSize;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var string 文件MD5
     */
    public $FileMD5;

    /**
     * @var string 存储类型
     */
    public $SaveType;

    /**
     * @var integer 过期时间，过期时间戳，精确到秒的时间戳，noExpireFlag为false时必填

     */
    public $FileExpireTime;

    /**
     * @var boolean 永不过期标记
     */
    public $NoExpireFlag;

    /**
     * @param integer $WorkspaceId 工作空间Id
     * @param string $FileName 文件名称
     * @param integer $FileSize 文件大小
     * @param string $ApplicationToken 应用token
     * @param string $FileMD5 文件MD5
     * @param string $SaveType 存储类型
     * @param integer $FileExpireTime 过期时间，过期时间戳，精确到秒的时间戳，noExpireFlag为false时必填

     * @param boolean $NoExpireFlag 永不过期标记
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("FileMD5",$param) and $param["FileMD5"] !== null) {
            $this->FileMD5 = $param["FileMD5"];
        }

        if (array_key_exists("SaveType",$param) and $param["SaveType"] !== null) {
            $this->SaveType = $param["SaveType"];
        }

        if (array_key_exists("FileExpireTime",$param) and $param["FileExpireTime"] !== null) {
            $this->FileExpireTime = $param["FileExpireTime"];
        }

        if (array_key_exists("NoExpireFlag",$param) and $param["NoExpireFlag"] !== null) {
            $this->NoExpireFlag = $param["NoExpireFlag"];
        }
    }
}
