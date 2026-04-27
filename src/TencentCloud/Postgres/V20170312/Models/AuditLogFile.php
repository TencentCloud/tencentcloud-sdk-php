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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库审计日志文件
 *
 * @method string getFileName() 获取<p>文件名</p>
 * @method void setFileName(string $FileName) 设置<p>文件名</p>
 * @method string getStatus() 获取<p>任务状态</p><p>枚举值：</p><ul><li>success： 成功</li><li>running： 创建中</li><li>failed： 失败</li></ul>
 * @method void setStatus(string $Status) 设置<p>任务状态</p><p>枚举值：</p><ul><li>success： 成功</li><li>running： 创建中</li><li>failed： 失败</li></ul>
 * @method integer getFileSize() 获取<p>文件大小</p><p>单位：MB</p>
 * @method void setFileSize(integer $FileSize) 设置<p>文件大小</p><p>单位：MB</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getDownloadUrl() 获取<p>下载链接</p>
 * @method void setDownloadUrl(string $DownloadUrl) 设置<p>下载链接</p>
 * @method string getErrMsg() 获取<p>错误信息</p>
 * @method void setErrMsg(string $ErrMsg) 设置<p>错误信息</p>
 * @method integer getProgress() 获取<p>下载进度</p>
 * @method void setProgress(integer $Progress) 设置<p>下载进度</p>
 * @method string getFinishTime() 获取<p>完成时间</p>
 * @method void setFinishTime(string $FinishTime) 设置<p>完成时间</p>
 */
class AuditLogFile extends AbstractModel
{
    /**
     * @var string <p>文件名</p>
     */
    public $FileName;

    /**
     * @var string <p>任务状态</p><p>枚举值：</p><ul><li>success： 成功</li><li>running： 创建中</li><li>failed： 失败</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>文件大小</p><p>单位：MB</p>
     */
    public $FileSize;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>下载链接</p>
     */
    public $DownloadUrl;

    /**
     * @var string <p>错误信息</p>
     */
    public $ErrMsg;

    /**
     * @var integer <p>下载进度</p>
     */
    public $Progress;

    /**
     * @var string <p>完成时间</p>
     */
    public $FinishTime;

    /**
     * @param string $FileName <p>文件名</p>
     * @param string $Status <p>任务状态</p><p>枚举值：</p><ul><li>success： 成功</li><li>running： 创建中</li><li>failed： 失败</li></ul>
     * @param integer $FileSize <p>文件大小</p><p>单位：MB</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $DownloadUrl <p>下载链接</p>
     * @param string $ErrMsg <p>错误信息</p>
     * @param integer $Progress <p>下载进度</p>
     * @param string $FinishTime <p>完成时间</p>
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
