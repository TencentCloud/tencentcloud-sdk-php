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
 * Agent 列表项（原 AgentSummary；Agent 级纯字段，不再内嵌版本信息）
 *
 * @method string getAgentId() 获取Agent 业务 ID（全局唯一，数字字符串形态）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentId(string $AgentId) 设置Agent 业务 ID（全局唯一，数字字符串形态）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentName() 获取Agent 名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentName(string $AgentName) 设置Agent 名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取Agent 描述；未填写时缺省
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置Agent 描述；未填写时缺省
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAvatarUrl() 获取头像 URL；未设置时缺省
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvatarUrl(string $AvatarUrl) 设置头像 URL；未设置时缺省
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间，RFC3339 UTC 格式（如 2026-06-01T09:00:00Z）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间，RFC3339 UTC 格式（如 2026-06-01T09:00:00Z）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedTime() 获取更新时间，RFC3339 UTC 格式（如 2026-09-10T15:20:00Z）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(string $ModifiedTime) 设置更新时间，RFC3339 UTC 格式（如 2026-09-10T15:20:00Z）
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getA2AEnabled() 获取Agent 级 A2A 开关。false 恒输出（未开启不等于字段缺失）；A2AEndpoint / A2AStatus 由本接口在 A2A 开启时直接下发
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setA2AEnabled(boolean $A2AEnabled) 设置Agent 级 A2A 开关。false 恒输出（未开启不等于字段缺失）；A2AEndpoint / A2AStatus 由本接口在 A2A 开启时直接下发
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSessionCount() 获取历史会话总数（t_managed_agent_sessions 未软删计数，含全部状态）。注意与 DescribeAgent.ActiveSessionCount（活跃会话数）口径不同
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionCount(integer $SessionCount) 设置历史会话总数（t_managed_agent_sessions 未软删计数，含全部状态）。注意与 DescribeAgent.ActiveSessionCount（活跃会话数）口径不同
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModel() 获取最新版本的模型标识，取 latest_version_id 指向版本的 model；Agent 尚无版本时缺省
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModel(string $Model) 设置最新版本的模型标识，取 latest_version_id 指向版本的 model；Agent 尚无版本时缺省
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestVersionId() 获取最新版本 ID（latest_version_id 转字符串，19 位雪花数字形态）；Agent 尚无版本时缺省
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestVersionId(string $LatestVersionId) 设置最新版本 ID（latest_version_id 转字符串，19 位雪花数字形态）；Agent 尚无版本时缺省
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestVersionName() 获取最新版本名（可能为 default / test-N / prod-N 任意类型）；Agent 尚无版本时缺省
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestVersionName(string $LatestVersionName) 设置最新版本名（可能为 default / test-N / prod-N 任意类型）；Agent 尚无版本时缺省
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getA2AEndpoint() 获取对外 A2A card 发现地址（Agent Card JSON 地址），仅 A2AEnabled=true 的行下发；未注册 / registry 读失败时缺省
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setA2AEndpoint(string $A2AEndpoint) 设置对外 A2A card 发现地址（Agent Card JSON 地址），仅 A2AEnabled=true 的行下发；未注册 / registry 读失败时缺省
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getA2AStatus() 获取A2A 注册态：DRAFT / REGISTERED / DISABLED / NONE / UNKNOWN，仅 A2AEnabled=true 的行下发，与 DescribeAgent.A2AConfig.A2AStatus 同枚举；用于「开关已开但地址尚未生成」的空态文案
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setA2AStatus(string $A2AStatus) 设置A2A 注册态：DRAFT / REGISTERED / DISABLED / NONE / UNKNOWN，仅 A2AEnabled=true 的行下发，与 DescribeAgent.A2AConfig.A2AStatus 同枚举；用于「开关已开但地址尚未生成」的空态文案
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPublicApiEnabled() 获取公网链接访问开关。false 恒输出（未开启不等于字段缺失）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicApiEnabled(boolean $PublicApiEnabled) 设置公网链接访问开关。false 恒输出（未开启不等于字段缺失）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicApiUrl() 获取公网访问地址，仅 PublicApiEnabled=true 的行下发。固定拼法 https://{AgentId}-{region}.{endpoint_suffix}，与 DescribeAgentPublicAccess.Url 同规则；endpoint_suffix 未配置时为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicApiUrl(string $PublicApiUrl) 设置公网访问地址，仅 PublicApiEnabled=true 的行下发。固定拼法 https://{AgentId}-{region}.{endpoint_suffix}，与 DescribeAgentPublicAccess.Url 同规则；endpoint_suffix 未配置时为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorUin() 获取创建人 UIN（建号时落库的 sub_account_uin；主账号自建时为主账号 uin）。注意语义为「实际操作建号的账号」
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorUin(string $CreatorUin) 设置创建人 UIN（建号时落库的 sub_account_uin；主账号自建时为主账号 uin）。注意语义为「实际操作建号的账号」
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountId() 获取绑定的 OneID 企业账号 ID（数字字符串形态，如 1438693592234206274）；空=未绑定（缺省）。与 DescribeAgent.AgentInfo.AccountId 同源同语义；创建时可选传入，之后不可变
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountId(string $AccountId) 设置绑定的 OneID 企业账号 ID（数字字符串形态，如 1438693592234206274）；空=未绑定（缺省）。与 DescribeAgent.AgentInfo.AccountId 同源同语义；创建时可选传入，之后不可变
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentItem extends AbstractModel
{
    /**
     * @var string Agent 业务 ID（全局唯一，数字字符串形态）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentId;

    /**
     * @var string Agent 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentName;

    /**
     * @var string Agent 描述；未填写时缺省
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 头像 URL；未设置时缺省
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvatarUrl;

    /**
     * @var string 创建时间，RFC3339 UTC 格式（如 2026-06-01T09:00:00Z）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 更新时间，RFC3339 UTC 格式（如 2026-09-10T15:20:00Z）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTime;

    /**
     * @var boolean Agent 级 A2A 开关。false 恒输出（未开启不等于字段缺失）；A2AEndpoint / A2AStatus 由本接口在 A2A 开启时直接下发
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $A2AEnabled;

    /**
     * @var integer 历史会话总数（t_managed_agent_sessions 未软删计数，含全部状态）。注意与 DescribeAgent.ActiveSessionCount（活跃会话数）口径不同
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionCount;

    /**
     * @var string 最新版本的模型标识，取 latest_version_id 指向版本的 model；Agent 尚无版本时缺省
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Model;

    /**
     * @var string 最新版本 ID（latest_version_id 转字符串，19 位雪花数字形态）；Agent 尚无版本时缺省
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestVersionId;

    /**
     * @var string 最新版本名（可能为 default / test-N / prod-N 任意类型）；Agent 尚无版本时缺省
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestVersionName;

    /**
     * @var string 对外 A2A card 发现地址（Agent Card JSON 地址），仅 A2AEnabled=true 的行下发；未注册 / registry 读失败时缺省
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $A2AEndpoint;

    /**
     * @var string A2A 注册态：DRAFT / REGISTERED / DISABLED / NONE / UNKNOWN，仅 A2AEnabled=true 的行下发，与 DescribeAgent.A2AConfig.A2AStatus 同枚举；用于「开关已开但地址尚未生成」的空态文案
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $A2AStatus;

    /**
     * @var boolean 公网链接访问开关。false 恒输出（未开启不等于字段缺失）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicApiEnabled;

    /**
     * @var string 公网访问地址，仅 PublicApiEnabled=true 的行下发。固定拼法 https://{AgentId}-{region}.{endpoint_suffix}，与 DescribeAgentPublicAccess.Url 同规则；endpoint_suffix 未配置时为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicApiUrl;

    /**
     * @var string 创建人 UIN（建号时落库的 sub_account_uin；主账号自建时为主账号 uin）。注意语义为「实际操作建号的账号」
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorUin;

    /**
     * @var string 绑定的 OneID 企业账号 ID（数字字符串形态，如 1438693592234206274）；空=未绑定（缺省）。与 DescribeAgent.AgentInfo.AccountId 同源同语义；创建时可选传入，之后不可变
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountId;

    /**
     * @param string $AgentId Agent 业务 ID（全局唯一，数字字符串形态）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentName Agent 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description Agent 描述；未填写时缺省
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AvatarUrl 头像 URL；未设置时缺省
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间，RFC3339 UTC 格式（如 2026-06-01T09:00:00Z）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedTime 更新时间，RFC3339 UTC 格式（如 2026-09-10T15:20:00Z）
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $A2AEnabled Agent 级 A2A 开关。false 恒输出（未开启不等于字段缺失）；A2AEndpoint / A2AStatus 由本接口在 A2A 开启时直接下发
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SessionCount 历史会话总数（t_managed_agent_sessions 未软删计数，含全部状态）。注意与 DescribeAgent.ActiveSessionCount（活跃会话数）口径不同
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Model 最新版本的模型标识，取 latest_version_id 指向版本的 model；Agent 尚无版本时缺省
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestVersionId 最新版本 ID（latest_version_id 转字符串，19 位雪花数字形态）；Agent 尚无版本时缺省
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestVersionName 最新版本名（可能为 default / test-N / prod-N 任意类型）；Agent 尚无版本时缺省
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $A2AEndpoint 对外 A2A card 发现地址（Agent Card JSON 地址），仅 A2AEnabled=true 的行下发；未注册 / registry 读失败时缺省
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $A2AStatus A2A 注册态：DRAFT / REGISTERED / DISABLED / NONE / UNKNOWN，仅 A2AEnabled=true 的行下发，与 DescribeAgent.A2AConfig.A2AStatus 同枚举；用于「开关已开但地址尚未生成」的空态文案
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $PublicApiEnabled 公网链接访问开关。false 恒输出（未开启不等于字段缺失）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicApiUrl 公网访问地址，仅 PublicApiEnabled=true 的行下发。固定拼法 https://{AgentId}-{region}.{endpoint_suffix}，与 DescribeAgentPublicAccess.Url 同规则；endpoint_suffix 未配置时为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorUin 创建人 UIN（建号时落库的 sub_account_uin；主账号自建时为主账号 uin）。注意语义为「实际操作建号的账号」
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountId 绑定的 OneID 企业账号 ID（数字字符串形态，如 1438693592234206274）；空=未绑定（缺省）。与 DescribeAgent.AgentInfo.AccountId 同源同语义；创建时可选传入，之后不可变
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AvatarUrl",$param) and $param["AvatarUrl"] !== null) {
            $this->AvatarUrl = $param["AvatarUrl"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("A2AEnabled",$param) and $param["A2AEnabled"] !== null) {
            $this->A2AEnabled = $param["A2AEnabled"];
        }

        if (array_key_exists("SessionCount",$param) and $param["SessionCount"] !== null) {
            $this->SessionCount = $param["SessionCount"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("LatestVersionId",$param) and $param["LatestVersionId"] !== null) {
            $this->LatestVersionId = $param["LatestVersionId"];
        }

        if (array_key_exists("LatestVersionName",$param) and $param["LatestVersionName"] !== null) {
            $this->LatestVersionName = $param["LatestVersionName"];
        }

        if (array_key_exists("A2AEndpoint",$param) and $param["A2AEndpoint"] !== null) {
            $this->A2AEndpoint = $param["A2AEndpoint"];
        }

        if (array_key_exists("A2AStatus",$param) and $param["A2AStatus"] !== null) {
            $this->A2AStatus = $param["A2AStatus"];
        }

        if (array_key_exists("PublicApiEnabled",$param) and $param["PublicApiEnabled"] !== null) {
            $this->PublicApiEnabled = $param["PublicApiEnabled"];
        }

        if (array_key_exists("PublicApiUrl",$param) and $param["PublicApiUrl"] !== null) {
            $this->PublicApiUrl = $param["PublicApiUrl"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }
    }
}
