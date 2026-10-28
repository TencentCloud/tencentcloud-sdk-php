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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateUserQuota请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统id
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统id
 * @method string getQuotaId() 获取配额id
 * @method void setQuotaId(string $QuotaId) 设置配额id
 * @method string getQuotaSizeLimit() 获取容量配额限定值
 * @method void setQuotaSizeLimit(string $QuotaSizeLimit) 设置容量配额限定值
 * @method string getQuotaFilesLimit() 获取文件数配额限定值
 * @method void setQuotaFilesLimit(string $QuotaFilesLimit) 设置文件数配额限定值
 */
class UpdateUserQuotaRequest extends AbstractModel
{
    /**
     * @var string 文件系统id
     */
    public $FileSystemId;

    /**
     * @var string 配额id
     */
    public $QuotaId;

    /**
     * @var string 容量配额限定值
     */
    public $QuotaSizeLimit;

    /**
     * @var string 文件数配额限定值
     */
    public $QuotaFilesLimit;

    /**
     * @param string $FileSystemId 文件系统id
     * @param string $QuotaId 配额id
     * @param string $QuotaSizeLimit 容量配额限定值
     * @param string $QuotaFilesLimit 文件数配额限定值
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("QuotaId",$param) and $param["QuotaId"] !== null) {
            $this->QuotaId = $param["QuotaId"];
        }

        if (array_key_exists("QuotaSizeLimit",$param) and $param["QuotaSizeLimit"] !== null) {
            $this->QuotaSizeLimit = $param["QuotaSizeLimit"];
        }

        if (array_key_exists("QuotaFilesLimit",$param) and $param["QuotaFilesLimit"] !== null) {
            $this->QuotaFilesLimit = $param["QuotaFilesLimit"];
        }
    }
}
