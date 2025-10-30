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
 * CreateFileset请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统id
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统id
 * @method string getFsetName() 获取Fileset名称
 * @method void setFsetName(string $FsetName) 设置Fileset名称
 * @method string getFsetDir() 获取Fileset目录
 * @method void setFsetDir(string $FsetDir) 设置Fileset目录
 * @method string getQuotaSizeLimit() 获取Fileset容量配额（需带单位G）
 * @method void setQuotaSizeLimit(string $QuotaSizeLimit) 设置Fileset容量配额（需带单位G）
 * @method string getQuotaFilesLimit() 获取Fileset文件数配额
 * @method void setQuotaFilesLimit(string $QuotaFilesLimit) 设置Fileset文件数配额
 * @method string getAuditState() 获取Fileset文件删除操作审计
 * @method void setAuditState(string $AuditState) 设置Fileset文件删除操作审计
 */
class CreateFilesetRequest extends AbstractModel
{
    /**
     * @var string 文件系统id
     */
    public $FileSystemId;

    /**
     * @var string Fileset名称
     */
    public $FsetName;

    /**
     * @var string Fileset目录
     */
    public $FsetDir;

    /**
     * @var string Fileset容量配额（需带单位G）
     */
    public $QuotaSizeLimit;

    /**
     * @var string Fileset文件数配额
     */
    public $QuotaFilesLimit;

    /**
     * @var string Fileset文件删除操作审计
     */
    public $AuditState;

    /**
     * @param string $FileSystemId 文件系统id
     * @param string $FsetName Fileset名称
     * @param string $FsetDir Fileset目录
     * @param string $QuotaSizeLimit Fileset容量配额（需带单位G）
     * @param string $QuotaFilesLimit Fileset文件数配额
     * @param string $AuditState Fileset文件删除操作审计
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

        if (array_key_exists("FsetName",$param) and $param["FsetName"] !== null) {
            $this->FsetName = $param["FsetName"];
        }

        if (array_key_exists("FsetDir",$param) and $param["FsetDir"] !== null) {
            $this->FsetDir = $param["FsetDir"];
        }

        if (array_key_exists("QuotaSizeLimit",$param) and $param["QuotaSizeLimit"] !== null) {
            $this->QuotaSizeLimit = $param["QuotaSizeLimit"];
        }

        if (array_key_exists("QuotaFilesLimit",$param) and $param["QuotaFilesLimit"] !== null) {
            $this->QuotaFilesLimit = $param["QuotaFilesLimit"];
        }

        if (array_key_exists("AuditState",$param) and $param["AuditState"] !== null) {
            $this->AuditState = $param["AuditState"];
        }
    }
}
