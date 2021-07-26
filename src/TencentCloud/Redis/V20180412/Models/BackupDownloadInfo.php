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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份文件下载信息
 *
 * @method string getFileName() 获取备份文件名称
 * @method void setFileName(string $FileName) 设置备份文件名称
 * @method integer getFileSize() 获取备份文件大小，单位B，如果为0，表示无效
 * @method void setFileSize(integer $FileSize) 设置备份文件大小，单位B，如果为0，表示无效
 * @method string getDownloadUrl() 获取备份文件外网下载地址（6小时）
 * @method void setDownloadUrl(string $DownloadUrl) 设置备份文件外网下载地址（6小时）
 * @method string getInnerDownloadUrl() 获取备份文件内网下载地址（6小时）
 * @method void setInnerDownloadUrl(string $InnerDownloadUrl) 设置备份文件内网下载地址（6小时）
 */
class BackupDownloadInfo extends AbstractModel
{
    /**
     * @var string 备份文件名称
     */
    public $FileName;

    /**
     * @var integer 备份文件大小，单位B，如果为0，表示无效
     */
    public $FileSize;

    /**
     * @var string 备份文件外网下载地址（6小时）
     */
    public $DownloadUrl;

    /**
     * @var string 备份文件内网下载地址（6小时）
     */
    public $InnerDownloadUrl;

    /**
     * @param string $FileName 备份文件名称
     * @param integer $FileSize 备份文件大小，单位B，如果为0，表示无效
     * @param string $DownloadUrl 备份文件外网下载地址（6小时）
     * @param string $InnerDownloadUrl 备份文件内网下载地址（6小时）
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

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("InnerDownloadUrl",$param) and $param["InnerDownloadUrl"] !== null) {
            $this->InnerDownloadUrl = $param["InnerDownloadUrl"];
        }
    }
}
