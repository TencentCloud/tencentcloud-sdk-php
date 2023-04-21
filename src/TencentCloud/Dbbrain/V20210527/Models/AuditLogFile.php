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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审计日志文件
 *
 * @method integer getAsyncRequestId() 获取审计日志文件生成异步任务ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsyncRequestId(integer $AsyncRequestId) 设置审计日志文件生成异步任务ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileName() 获取审计日志文件名称。
 * @method void setFileName(string $FileName) 设置审计日志文件名称。
 * @method string getCreateTime() 获取审计日志文件创建时间。格式为 : "2019-03-20 17:09:13"。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置审计日志文件创建时间。格式为 : "2019-03-20 17:09:13"。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取文件状态值。可能返回的值为：
"creating" - 生成中;
"failed" - 创建失败;
"success" - 已生成;
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置文件状态值。可能返回的值为：
"creating" - 生成中;
"failed" - 创建失败;
"success" - 已生成;
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getFileSize() 获取文件大小，单位为 KB。
 * @method void setFileSize(float $FileSize) 设置文件大小，单位为 KB。
 * @method string getDownloadUrl() 获取审计日志下载地址。
 * @method void setDownloadUrl(string $DownloadUrl) 设置审计日志下载地址。
 * @method string getErrMsg() 获取错误信息。
 * @method void setErrMsg(string $ErrMsg) 设置错误信息。
 * @method float getProgress() 获取文件生成进度。
 * @method void setProgress(float $Progress) 设置文件生成进度。
 * @method string getFinishTime() 获取文件生成成功时间。
 * @method void setFinishTime(string $FinishTime) 设置文件生成成功时间。
 */
class AuditLogFile extends AbstractModel
{
    /**
     * @var integer 审计日志文件生成异步任务ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsyncRequestId;

    /**
     * @var string 审计日志文件名称。
     */
    public $FileName;

    /**
     * @var string 审计日志文件创建时间。格式为 : "2019-03-20 17:09:13"。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 文件状态值。可能返回的值为：
"creating" - 生成中;
"failed" - 创建失败;
"success" - 已生成;
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var float 文件大小，单位为 KB。
     */
    public $FileSize;

    /**
     * @var string 审计日志下载地址。
     */
    public $DownloadUrl;

    /**
     * @var string 错误信息。
     */
    public $ErrMsg;

    /**
     * @var float 文件生成进度。
     */
    public $Progress;

    /**
     * @var string 文件生成成功时间。
     */
    public $FinishTime;

    /**
     * @param integer $AsyncRequestId 审计日志文件生成异步任务ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileName 审计日志文件名称。
     * @param string $CreateTime 审计日志文件创建时间。格式为 : "2019-03-20 17:09:13"。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 文件状态值。可能返回的值为：
"creating" - 生成中;
"failed" - 创建失败;
"success" - 已生成;
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $FileSize 文件大小，单位为 KB。
     * @param string $DownloadUrl 审计日志下载地址。
     * @param string $ErrMsg 错误信息。
     * @param float $Progress 文件生成进度。
     * @param string $FinishTime 文件生成成功时间。
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
        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
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
