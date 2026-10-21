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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskResult返回参数结构体
 *
 * @method string getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
 * @method string getTaskType() 获取<p>任务类型</p><p>枚举值：</p><ul><li>PGUserMigration： PG Migrate 任务</li><li>PGDump： PG 数据库整库导出任务</li></ul>
 * @method void setTaskType(string $TaskType) 设置<p>任务类型</p><p>枚举值：</p><ul><li>PGUserMigration： PG Migrate 任务</li><li>PGDump： PG 数据库整库导出任务</li></ul>
 * @method string getStatus() 获取<p>任务状态</p><p>枚举值：</p><ul><li>Failed： 失败</li><li>Succeed： 成功</li><li>Accepted： 已接收</li><li>Running： 运行中</li><li>Pending： 已受理，等待工作流启动</li></ul>
 * @method void setStatus(string $Status) 设置<p>任务状态</p><p>枚举值：</p><ul><li>Failed： 失败</li><li>Succeed： 成功</li><li>Accepted： 已接收</li><li>Running： 运行中</li><li>Pending： 已受理，等待工作流启动</li></ul>
 * @method string getPhase() 获取<p>任务当前执行步骤。PGDump 任务可能为 Queued（排队）、Preparing（准备）、Dumping（导出）、Validating（校验）、Uploading（上传）、Finalizing（收尾）、Completed（完成）；其他任务的步骤由任务类型决定。</p>
 * @method void setPhase(string $Phase) 设置<p>任务当前执行步骤。PGDump 任务可能为 Queued（排队）、Preparing（准备）、Dumping（导出）、Validating（校验）、Uploading（上传）、Finalizing（收尾）、Completed（完成）；其他任务的步骤由任务类型决定。</p>
 * @method string getReason() 获取<p>失败原因。PGDump 任务返回稳定业务码：PGDumpPermissionDenied、PGDumpToolVersionMismatch、PGDumpSizeExceeded、PGDumpTimeout、PGDumpProcessFailed、PGDumpUploadFailed、PGDumpSourceChanged；成功时为空。其他任务按原有失败原因返回。</p>
 * @method void setReason(string $Reason) 设置<p>失败原因。PGDump 任务返回稳定业务码：PGDumpPermissionDenied、PGDumpToolVersionMismatch、PGDumpSizeExceeded、PGDumpTimeout、PGDumpProcessFailed、PGDumpUploadFailed、PGDumpSourceChanged；成功时为空。其他任务按原有失败原因返回。</p>
 * @method string getCreatedAt() 获取<p>创建时间</p><p>参数格式：2026-05-26T11:26:14+08:00</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间</p><p>参数格式：2026-05-26T11:26:14+08:00</p>
 * @method string getUpdatedAt() 获取<p>最后更新时间</p><p>参数格式：2026-05-26T11:26:14+08:00</p>
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>最后更新时间</p><p>参数格式：2026-05-26T11:26:14+08:00</p>
 * @method array getParams() 获取<p>任务参数键值对列表，Value 均为字符串。PGDump 成功任务包含 file_name（文件名）、file_size_bytes（字节数）、checksum_sha256（SHA256）、source_db_version（源库版本）、dump_tool_version（工具版本）、file_expires_at（RFC3339 过期时间）。文件未过期且对象存在时返回 download_url；URL 过期后可重新查询，勿记录或持久化签名 URL。仅对象确认缺失时返回 file_missing=true；文件过期不返回下载 URL。归档查询或签名临时故障返回系统错误，任务终态不变。</p>
 * @method void setParams(array $Params) 设置<p>任务参数键值对列表，Value 均为字符串。PGDump 成功任务包含 file_name（文件名）、file_size_bytes（字节数）、checksum_sha256（SHA256）、source_db_version（源库版本）、dump_tool_version（工具版本）、file_expires_at（RFC3339 过期时间）。文件未过期且对象存在时返回 download_url；URL 过期后可重新查询，勿记录或持久化签名 URL。仅对象确认缺失时返回 file_missing=true；文件过期不返回下载 URL。归档查询或签名临时故障返回系统错误，任务终态不变。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTaskResultResponse extends AbstractModel
{
    /**
     * @var string <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务类型</p><p>枚举值：</p><ul><li>PGUserMigration： PG Migrate 任务</li><li>PGDump： PG 数据库整库导出任务</li></ul>
     */
    public $TaskType;

    /**
     * @var string <p>任务状态</p><p>枚举值：</p><ul><li>Failed： 失败</li><li>Succeed： 成功</li><li>Accepted： 已接收</li><li>Running： 运行中</li><li>Pending： 已受理，等待工作流启动</li></ul>
     */
    public $Status;

    /**
     * @var string <p>任务当前执行步骤。PGDump 任务可能为 Queued（排队）、Preparing（准备）、Dumping（导出）、Validating（校验）、Uploading（上传）、Finalizing（收尾）、Completed（完成）；其他任务的步骤由任务类型决定。</p>
     */
    public $Phase;

    /**
     * @var string <p>失败原因。PGDump 任务返回稳定业务码：PGDumpPermissionDenied、PGDumpToolVersionMismatch、PGDumpSizeExceeded、PGDumpTimeout、PGDumpProcessFailed、PGDumpUploadFailed、PGDumpSourceChanged；成功时为空。其他任务按原有失败原因返回。</p>
     */
    public $Reason;

    /**
     * @var string <p>创建时间</p><p>参数格式：2026-05-26T11:26:14+08:00</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>最后更新时间</p><p>参数格式：2026-05-26T11:26:14+08:00</p>
     */
    public $UpdatedAt;

    /**
     * @var array <p>任务参数键值对列表，Value 均为字符串。PGDump 成功任务包含 file_name（文件名）、file_size_bytes（字节数）、checksum_sha256（SHA256）、source_db_version（源库版本）、dump_tool_version（工具版本）、file_expires_at（RFC3339 过期时间）。文件未过期且对象存在时返回 download_url；URL 过期后可重新查询，勿记录或持久化签名 URL。仅对象确认缺失时返回 file_missing=true；文件过期不返回下载 URL。归档查询或签名临时故障返回系统错误，任务终态不变。</p>
     */
    public $Params;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId <p>任务ID</p>
     * @param string $TaskType <p>任务类型</p><p>枚举值：</p><ul><li>PGUserMigration： PG Migrate 任务</li><li>PGDump： PG 数据库整库导出任务</li></ul>
     * @param string $Status <p>任务状态</p><p>枚举值：</p><ul><li>Failed： 失败</li><li>Succeed： 成功</li><li>Accepted： 已接收</li><li>Running： 运行中</li><li>Pending： 已受理，等待工作流启动</li></ul>
     * @param string $Phase <p>任务当前执行步骤。PGDump 任务可能为 Queued（排队）、Preparing（准备）、Dumping（导出）、Validating（校验）、Uploading（上传）、Finalizing（收尾）、Completed（完成）；其他任务的步骤由任务类型决定。</p>
     * @param string $Reason <p>失败原因。PGDump 任务返回稳定业务码：PGDumpPermissionDenied、PGDumpToolVersionMismatch、PGDumpSizeExceeded、PGDumpTimeout、PGDumpProcessFailed、PGDumpUploadFailed、PGDumpSourceChanged；成功时为空。其他任务按原有失败原因返回。</p>
     * @param string $CreatedAt <p>创建时间</p><p>参数格式：2026-05-26T11:26:14+08:00</p>
     * @param string $UpdatedAt <p>最后更新时间</p><p>参数格式：2026-05-26T11:26:14+08:00</p>
     * @param array $Params <p>任务参数键值对列表，Value 均为字符串。PGDump 成功任务包含 file_name（文件名）、file_size_bytes（字节数）、checksum_sha256（SHA256）、source_db_version（源库版本）、dump_tool_version（工具版本）、file_expires_at（RFC3339 过期时间）。文件未过期且对象存在时返回 download_url；URL 过期后可重新查询，勿记录或持久化签名 URL。仅对象确认缺失时返回 file_missing=true；文件过期不返回下载 URL。归档查询或签名临时故障返回系统错误，任务终态不变。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Phase",$param) and $param["Phase"] !== null) {
            $this->Phase = $param["Phase"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new ObjectKV();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
