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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 生成的文件信息
 *
 * @method integer getFileId() 获取文件 id。
 * @method void setFileId(integer $FileId) 设置文件 id。
 * @method string getCreatedOn() 获取文件生成时间。
 * @method void setCreatedOn(string $CreatedOn) 设置文件生成时间。
 * @method string getUpdatedOn() 获取文件最后更新时间。
 * @method void setUpdatedOn(string $UpdatedOn) 设置文件最后更新时间。
 * @method array getDomains() 获取文件涉及到的域名。
 * @method void setDomains(array $Domains) 设置文件涉及到的域名。
 * @method string getName() 获取文件名称。
 * @method void setName(string $Name) 设置文件名称。
 * @method string getFileUrl() 获取文件下载链接。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileUrl(string $FileUrl) 设置文件下载链接。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJobId() 获取生成文件的任务 id。
 * @method void setJobId(integer $JobId) 设置生成文件的任务 id。
 * @method integer getProgress() 获取生成文件的进度。100 表示 完成度为100%。
 * @method void setProgress(integer $Progress) 设置生成文件的进度。100 表示 完成度为100%。
 * @method string getStatus() 获取文件状态。
OK：已完成
RUNNING：正在生成中
ERROR：生成失败
CANCELED：文件已取消生成
CANCELING：文件正在取消生成
EXPIRED：文件已过期
 * @method void setStatus(string $Status) 设置文件状态。
OK：已完成
RUNNING：正在生成中
ERROR：生成失败
CANCELED：文件已取消生成
CANCELING：文件正在取消生成
EXPIRED：文件已过期
 * @method string getType() 获取生成文件的任务类型。
RECORD_LOG：解析量数据
RECORD_EXPORT：导出解析记录
DOMAIN_EXPORT：导出域名列表
 * @method void setType(string $Type) 设置生成文件的任务类型。
RECORD_LOG：解析量数据
RECORD_EXPORT：导出解析记录
DOMAIN_EXPORT：导出域名列表
 * @method LeftTime getLeftTime() 获取剩余时间
 * @method void setLeftTime(LeftTime $LeftTime) 设置剩余时间
 */
class FileInfo extends AbstractModel
{
    /**
     * @var integer 文件 id。
     */
    public $FileId;

    /**
     * @var string 文件生成时间。
     */
    public $CreatedOn;

    /**
     * @var string 文件最后更新时间。
     */
    public $UpdatedOn;

    /**
     * @var array 文件涉及到的域名。
     */
    public $Domains;

    /**
     * @var string 文件名称。
     */
    public $Name;

    /**
     * @var string 文件下载链接。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileUrl;

    /**
     * @var integer 生成文件的任务 id。
     */
    public $JobId;

    /**
     * @var integer 生成文件的进度。100 表示 完成度为100%。
     */
    public $Progress;

    /**
     * @var string 文件状态。
OK：已完成
RUNNING：正在生成中
ERROR：生成失败
CANCELED：文件已取消生成
CANCELING：文件正在取消生成
EXPIRED：文件已过期
     */
    public $Status;

    /**
     * @var string 生成文件的任务类型。
RECORD_LOG：解析量数据
RECORD_EXPORT：导出解析记录
DOMAIN_EXPORT：导出域名列表
     */
    public $Type;

    /**
     * @var LeftTime 剩余时间
     */
    public $LeftTime;

    /**
     * @param integer $FileId 文件 id。
     * @param string $CreatedOn 文件生成时间。
     * @param string $UpdatedOn 文件最后更新时间。
     * @param array $Domains 文件涉及到的域名。
     * @param string $Name 文件名称。
     * @param string $FileUrl 文件下载链接。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JobId 生成文件的任务 id。
     * @param integer $Progress 生成文件的进度。100 表示 完成度为100%。
     * @param string $Status 文件状态。
OK：已完成
RUNNING：正在生成中
ERROR：生成失败
CANCELED：文件已取消生成
CANCELING：文件正在取消生成
EXPIRED：文件已过期
     * @param string $Type 生成文件的任务类型。
RECORD_LOG：解析量数据
RECORD_EXPORT：导出解析记录
DOMAIN_EXPORT：导出域名列表
     * @param LeftTime $LeftTime 剩余时间
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("LeftTime",$param) and $param["LeftTime"] !== null) {
            $this->LeftTime = new LeftTime();
            $this->LeftTime->deserialize($param["LeftTime"]);
        }
    }
}
