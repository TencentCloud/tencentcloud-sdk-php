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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云企付-查询对账单文件下载url
 *
 * @method string getDownloadUrl() 获取供下一步请求账单文件的下载地址。
 * @method void setDownloadUrl(string $DownloadUrl) 设置供下一步请求账单文件的下载地址。
 * @method string getHashValue() 获取从 download_url 下载的文件的哈希值，用于校验文件的完整性。
 * @method void setHashValue(string $HashValue) 设置从 download_url 下载的文件的哈希值，用于校验文件的完整性。
 * @method string getHashType() 获取从 download_url 下载的文件的哈希类型，用于校验文件的完整性。
 * @method void setHashType(string $HashType) 设置从 download_url 下载的文件的哈希类型，用于校验文件的完整性。
 */
class QueryOpenBankDownLoadUrlResult extends AbstractModel
{
    /**
     * @var string 供下一步请求账单文件的下载地址。
     */
    public $DownloadUrl;

    /**
     * @var string 从 download_url 下载的文件的哈希值，用于校验文件的完整性。
     */
    public $HashValue;

    /**
     * @var string 从 download_url 下载的文件的哈希类型，用于校验文件的完整性。
     */
    public $HashType;

    /**
     * @param string $DownloadUrl 供下一步请求账单文件的下载地址。
     * @param string $HashValue 从 download_url 下载的文件的哈希值，用于校验文件的完整性。
     * @param string $HashType 从 download_url 下载的文件的哈希类型，用于校验文件的完整性。
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
        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("HashValue",$param) and $param["HashValue"] !== null) {
            $this->HashValue = $param["HashValue"];
        }

        if (array_key_exists("HashType",$param) and $param["HashType"] !== null) {
            $this->HashType = $param["HashType"];
        }
    }
}
