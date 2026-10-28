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
 * CreateUserQuota请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统id
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统id
 * @method string getQuotaType() 获取配额类型，UID或GID
 * @method void setQuotaType(string $QuotaType) 设置配额类型，UID或GID
 * @method string getQuotaObjectName() 获取配额对象名称，对应UID或者GID的值
 * @method void setQuotaObjectName(string $QuotaObjectName) 设置配额对象名称，对应UID或者GID的值
 * @method string getQuotaSizeLimit() 获取容量配额（需带单位G）
 * @method void setQuotaSizeLimit(string $QuotaSizeLimit) 设置容量配额（需带单位G）
 * @method string getQuotaFilesLimit() 获取文件数配额
 * @method void setQuotaFilesLimit(string $QuotaFilesLimit) 设置文件数配额
 */
class CreateUserQuotaRequest extends AbstractModel
{
    /**
     * @var string 文件系统id
     */
    public $FileSystemId;

    /**
     * @var string 配额类型，UID或GID
     */
    public $QuotaType;

    /**
     * @var string 配额对象名称，对应UID或者GID的值
     */
    public $QuotaObjectName;

    /**
     * @var string 容量配额（需带单位G）
     */
    public $QuotaSizeLimit;

    /**
     * @var string 文件数配额
     */
    public $QuotaFilesLimit;

    /**
     * @param string $FileSystemId 文件系统id
     * @param string $QuotaType 配额类型，UID或GID
     * @param string $QuotaObjectName 配额对象名称，对应UID或者GID的值
     * @param string $QuotaSizeLimit 容量配额（需带单位G）
     * @param string $QuotaFilesLimit 文件数配额
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

        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("QuotaObjectName",$param) and $param["QuotaObjectName"] !== null) {
            $this->QuotaObjectName = $param["QuotaObjectName"];
        }

        if (array_key_exists("QuotaSizeLimit",$param) and $param["QuotaSizeLimit"] !== null) {
            $this->QuotaSizeLimit = $param["QuotaSizeLimit"];
        }

        if (array_key_exists("QuotaFilesLimit",$param) and $param["QuotaFilesLimit"] !== null) {
            $this->QuotaFilesLimit = $param["QuotaFilesLimit"];
        }
    }
}
