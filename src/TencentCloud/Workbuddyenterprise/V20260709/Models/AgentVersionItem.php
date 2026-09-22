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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent 版本列表项（原 AgentVersionSummary / AgentVersionBrief 合并，字段取并集）
 *
 * @method string getVersionId() 获取版本 ID（雪花算法生成的数字字符串，唯一标识）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionId(string $VersionId) 设置版本 ID（雪花算法生成的数字字符串，唯一标识）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionName() 获取版本名称，形如 default / test-N / prod-N（N 为同类型版本的自增序号）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionName(string $VersionName) 设置版本名称，形如 default / test-N / prod-N（N 为同类型版本的自增序号）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionType() 获取版本类型（服务端按 VersionName 派生）：DEFAULT（默认版本，可编辑）/ TEST（测试版本，可编辑）/ PROD（生产版本，内容冻结）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionType(string $VersionType) 设置版本类型（服务端按 VersionName 派生）：DEFAULT（默认版本，可编辑）/ TEST（测试版本，可编辑）/ PROD（生产版本，内容冻结）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModel() 获取版本绑定的模型标识；未设置时缺省
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModel(string $Model) 设置版本绑定的模型标识；未设置时缺省
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSandboxTemplateId() 获取版本运行时使用的沙箱模板业务 ID；空字符串表示使用默认沙箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSandboxTemplateId(string $SandboxTemplateId) 设置版本运行时使用的沙箱模板业务 ID；空字符串表示使用默认沙箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取版本状态：DRAFT（草稿）/ ENABLED（已启用）/ DISABLED（已停用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置版本状态：DRAFT（草稿）/ ENABLED（已启用）/ DISABLED（已停用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSessionCount() 获取<p>该版本累计承接的会话总数（历史累计值，只增不减）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionCount(integer $SessionCount) 设置<p>该版本累计承接的会话总数（历史累计值，只增不减）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间，RFC3339 UTC 格式（如 2026-08-01T10:00:00Z）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间，RFC3339 UTC 格式（如 2026-08-01T10:00:00Z）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedTime() 获取更新时间，RFC3339 UTC 格式（如 2026-08-10T15:30:00Z）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(string $ModifiedTime) 设置更新时间，RFC3339 UTC 格式（如 2026-08-10T15:30:00Z）
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentVersionItem extends AbstractModel
{
    /**
     * @var string 版本 ID（雪花算法生成的数字字符串，唯一标识）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionId;

    /**
     * @var string 版本名称，形如 default / test-N / prod-N（N 为同类型版本的自增序号）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionName;

    /**
     * @var string 版本类型（服务端按 VersionName 派生）：DEFAULT（默认版本，可编辑）/ TEST（测试版本，可编辑）/ PROD（生产版本，内容冻结）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionType;

    /**
     * @var string 版本绑定的模型标识；未设置时缺省
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Model;

    /**
     * @var string 版本运行时使用的沙箱模板业务 ID；空字符串表示使用默认沙箱
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SandboxTemplateId;

    /**
     * @var string 版本状态：DRAFT（草稿）/ ENABLED（已启用）/ DISABLED（已停用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer <p>该版本累计承接的会话总数（历史累计值，只增不减）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionCount;

    /**
     * @var string 创建时间，RFC3339 UTC 格式（如 2026-08-01T10:00:00Z）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 更新时间，RFC3339 UTC 格式（如 2026-08-10T15:30:00Z）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTime;

    /**
     * @param string $VersionId 版本 ID（雪花算法生成的数字字符串，唯一标识）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionName 版本名称，形如 default / test-N / prod-N（N 为同类型版本的自增序号）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionType 版本类型（服务端按 VersionName 派生）：DEFAULT（默认版本，可编辑）/ TEST（测试版本，可编辑）/ PROD（生产版本，内容冻结）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Model 版本绑定的模型标识；未设置时缺省
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SandboxTemplateId 版本运行时使用的沙箱模板业务 ID；空字符串表示使用默认沙箱
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 版本状态：DRAFT（草稿）/ ENABLED（已启用）/ DISABLED（已停用）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SessionCount <p>该版本累计承接的会话总数（历史累计值，只增不减）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间，RFC3339 UTC 格式（如 2026-08-01T10:00:00Z）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedTime 更新时间，RFC3339 UTC 格式（如 2026-08-10T15:30:00Z）
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("VersionType",$param) and $param["VersionType"] !== null) {
            $this->VersionType = $param["VersionType"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("SandboxTemplateId",$param) and $param["SandboxTemplateId"] !== null) {
            $this->SandboxTemplateId = $param["SandboxTemplateId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SessionCount",$param) and $param["SessionCount"] !== null) {
            $this->SessionCount = $param["SessionCount"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }
    }
}
