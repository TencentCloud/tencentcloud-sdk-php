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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SyncRegistryRecord返回参数结构体
 *
 * @method string getSyncStatus() 获取<p>同步结果：UNCHANGED（远端无变化）/ VERSION_CREATED（远端有变化，已生成新 Version）/ FAILED（同步失败）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSyncStatus(string $SyncStatus) 设置<p>同步结果：UNCHANGED（远端无变化）/ VERSION_CREATED（远端有变化，已生成新 Version）/ FAILED（同步失败）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResolvedVersionId() 获取<p>作为同步来源解析出的 Version ID（可能由 Label 解析而来）；不为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResolvedVersionId(string $ResolvedVersionId) 设置<p>作为同步来源解析出的 Version ID（可能由 Label 解析而来）；不为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CloudRecordVersion getCreatedVersion() 获取<p>SyncStatus=VERSION_CREATED 时返回：本次新建的 Version。</p>
 * @method void setCreatedVersion(CloudRecordVersion $CreatedVersion) 设置<p>SyncStatus=VERSION_CREATED 时返回：本次新建的 Version。</p>
 * @method CloudRecord getRecord() 获取<p>SyncStatus=VERSION_CREATED 时返回：同步后的最新 Record。</p>
 * @method void setRecord(CloudRecord $Record) 设置<p>SyncStatus=VERSION_CREATED 时返回：同步后的最新 Record。</p>
 * @method string getLastSyncTime() 获取<p>最后一次同步时间，ISO 8601 UTC。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastSyncTime(string $LastSyncTime) 设置<p>最后一次同步时间，ISO 8601 UTC。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCode() 获取<p>失败错误码；SyncStatus=FAILED 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCode(string $ErrorCode) 设置<p>失败错误码；SyncStatus=FAILED 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取<p>失败错误信息；SyncStatus=FAILED 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>失败错误信息；SyncStatus=FAILED 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class SyncRegistryRecordResponse extends AbstractModel
{
    /**
     * @var string <p>同步结果：UNCHANGED（远端无变化）/ VERSION_CREATED（远端有变化，已生成新 Version）/ FAILED（同步失败）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SyncStatus;

    /**
     * @var string <p>作为同步来源解析出的 Version ID（可能由 Label 解析而来）；不为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResolvedVersionId;

    /**
     * @var CloudRecordVersion <p>SyncStatus=VERSION_CREATED 时返回：本次新建的 Version。</p>
     */
    public $CreatedVersion;

    /**
     * @var CloudRecord <p>SyncStatus=VERSION_CREATED 时返回：同步后的最新 Record。</p>
     */
    public $Record;

    /**
     * @var string <p>最后一次同步时间，ISO 8601 UTC。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastSyncTime;

    /**
     * @var string <p>失败错误码；SyncStatus=FAILED 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCode;

    /**
     * @var string <p>失败错误信息；SyncStatus=FAILED 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SyncStatus <p>同步结果：UNCHANGED（远端无变化）/ VERSION_CREATED（远端有变化，已生成新 Version）/ FAILED（同步失败）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResolvedVersionId <p>作为同步来源解析出的 Version ID（可能由 Label 解析而来）；不为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CloudRecordVersion $CreatedVersion <p>SyncStatus=VERSION_CREATED 时返回：本次新建的 Version。</p>
     * @param CloudRecord $Record <p>SyncStatus=VERSION_CREATED 时返回：同步后的最新 Record。</p>
     * @param string $LastSyncTime <p>最后一次同步时间，ISO 8601 UTC。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCode <p>失败错误码；SyncStatus=FAILED 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage <p>失败错误信息；SyncStatus=FAILED 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("SyncStatus",$param) and $param["SyncStatus"] !== null) {
            $this->SyncStatus = $param["SyncStatus"];
        }

        if (array_key_exists("ResolvedVersionId",$param) and $param["ResolvedVersionId"] !== null) {
            $this->ResolvedVersionId = $param["ResolvedVersionId"];
        }

        if (array_key_exists("CreatedVersion",$param) and $param["CreatedVersion"] !== null) {
            $this->CreatedVersion = new CloudRecordVersion();
            $this->CreatedVersion->deserialize($param["CreatedVersion"]);
        }

        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = new CloudRecord();
            $this->Record->deserialize($param["Record"]);
        }

        if (array_key_exists("LastSyncTime",$param) and $param["LastSyncTime"] !== null) {
            $this->LastSyncTime = $param["LastSyncTime"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
