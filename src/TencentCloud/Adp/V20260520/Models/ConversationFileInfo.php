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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FileInfo 文件信息
 *
 * @method string getCreateTime() 获取<p>文件创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>文件创建时间</p>
 * @method string getDocId() 获取<p>文档业务 ID</p>
 * @method void setDocId(string $DocId) 设置<p>文档业务 ID</p>
 * @method string getFileName() 获取<p>文件名</p>
 * @method void setFileName(string $FileName) 设置<p>文件名</p>
 * @method string getFileSize() 获取<p>文件大小</p>
 * @method void setFileSize(string $FileSize) 设置<p>文件大小</p>
 * @method string getFileType() 获取<p>文件类型</p>
 * @method void setFileType(string $FileType) 设置<p>文件类型</p>
 * @method string getFileUrl() 获取<p>文件下载链接</p>
 * @method void setFileUrl(string $FileUrl) 设置<p>文件下载链接</p>
 * @method string getLocalPath() 获取<p>文件在沙箱中的原始路径</p>
 * @method void setLocalPath(string $LocalPath) 设置<p>文件在沙箱中的原始路径</p>
 * @method integer getAuditStatus() 获取<p>文件审核状态</p><p>枚举值：</p><ul><li>1： 审核中</li><li>2： 审核通过</li><li>3： 审核不通过</li></ul>
 * @method void setAuditStatus(integer $AuditStatus) 设置<p>文件审核状态</p><p>枚举值：</p><ul><li>1： 审核中</li><li>2： 审核通过</li><li>3： 审核不通过</li></ul>
 */
class ConversationFileInfo extends AbstractModel
{
    /**
     * @var string <p>文件创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>文档业务 ID</p>
     */
    public $DocId;

    /**
     * @var string <p>文件名</p>
     */
    public $FileName;

    /**
     * @var string <p>文件大小</p>
     */
    public $FileSize;

    /**
     * @var string <p>文件类型</p>
     */
    public $FileType;

    /**
     * @var string <p>文件下载链接</p>
     */
    public $FileUrl;

    /**
     * @var string <p>文件在沙箱中的原始路径</p>
     */
    public $LocalPath;

    /**
     * @var integer <p>文件审核状态</p><p>枚举值：</p><ul><li>1： 审核中</li><li>2： 审核通过</li><li>3： 审核不通过</li></ul>
     */
    public $AuditStatus;

    /**
     * @param string $CreateTime <p>文件创建时间</p>
     * @param string $DocId <p>文档业务 ID</p>
     * @param string $FileName <p>文件名</p>
     * @param string $FileSize <p>文件大小</p>
     * @param string $FileType <p>文件类型</p>
     * @param string $FileUrl <p>文件下载链接</p>
     * @param string $LocalPath <p>文件在沙箱中的原始路径</p>
     * @param integer $AuditStatus <p>文件审核状态</p><p>枚举值：</p><ul><li>1： 审核中</li><li>2： 审核通过</li><li>3： 审核不通过</li></ul>
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("LocalPath",$param) and $param["LocalPath"] !== null) {
            $this->LocalPath = $param["LocalPath"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }
    }
}
