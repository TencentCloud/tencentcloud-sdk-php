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
 * Record 的一个不可变 Version 快照；记录了描述符、来源配置与审批状态。
 *
 * @method string getVersionId() 获取<p>Version ID；格式 <code>rv-</code> + 8 位小写字母/数字。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionId(string $VersionId) 设置<p>Version ID；格式 <code>rv-</code> + 8 位小写字母/数字。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordId() 获取<p>所属 Record ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordId(string $RecordId) 设置<p>所属 Record ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRevision() 获取<p>Version 递增序号（1 起）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRevision(integer $Revision) 设置<p>Version 递增序号（1 起）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>Version 状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>Version 状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApprovalMode() 获取<p>审批模式；创建时锁定，后续变更 Registry 审批模式不影响本 Version。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApprovalMode(string $ApprovalMode) 设置<p>审批模式；创建时锁定，后续变更 Registry 审批模式不影响本 Version。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取<p>所属租户 AppId。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置<p>所属租户 AppId。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorUin() 获取<p>创建者主账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorUin(string $CreatorUin) 设置<p>创建者主账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>最近一次更新时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>最近一次更新时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionName() 获取<p>Version 别名（可选）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionName(string $VersionName) 设置<p>Version 别名（可选）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescriptors() 获取<p>协议描述符对象。（JSON 字符串形式）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescriptors(string $Descriptors) 设置<p>协议描述符对象。（JSON 字符串形式）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceType() 获取<p>内容来源。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceType(string $SourceType) 设置<p>内容来源。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceConfig() 获取<p>规范化来源配置对象。（JSON 字符串形式）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceConfig(string $SourceConfig) 设置<p>规范化来源配置对象。（JSON 字符串形式）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContentStatus() 获取<p>内容状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContentStatus(string $ContentStatus) 设置<p>内容状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContentSHA256() 获取<p>READY 内容 SHA-256。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContentSHA256(string $ContentSHA256) 设置<p>READY 内容 SHA-256。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getContentSizeBytes() 获取<p>READY 内容字节数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContentSizeBytes(integer $ContentSizeBytes) 设置<p>READY 内容字节数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigSHA256() 获取<p>配置内容规范化后的 SHA-256（用于幂等去重）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigSHA256(string $ConfigSHA256) 设置<p>配置内容规范化后的 SHA-256（用于幂等去重）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorSubAccountUin() 获取<p>创建者子账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorSubAccountUin(string $CreatorSubAccountUin) 设置<p>创建者子账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApprovalActions() 获取<p>Version 历次审批动作。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApprovalActions(array $ApprovalActions) 设置<p>Version 历次审批动作。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContentReadyTime() 获取<p>TAR 内容成功校验、完成物化并进入 READY 的时间；MANUAL / URL_IMPORT 或尚未 READY 的 TAR_PACKAGE 均为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContentReadyTime(string $ContentReadyTime) 设置<p>TAR 内容成功校验、完成物化并进入 READY 的时间；MANUAL / URL_IMPORT 或尚未 READY 的 TAR_PACKAGE 均为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChangeLog() 获取<p>本次 Version 的变更原因，最大 4096 字符；不可修改。Revision 1 或未填写时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChangeLog(string $ChangeLog) 设置<p>本次 Version 的变更原因，最大 4096 字符；不可修改。Revision 1 或未填写时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabelSet() 获取<p>当前绑定该 Version 的 Label Name 列表（例如 stable / latest 或自定义 Label 名称）。未绑定 Label 不在此返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelSet(array $LabelSet) 设置<p>当前绑定该 Version 的 Label Name 列表（例如 stable / latest 或自定义 Label 名称）。未绑定 Label 不在此返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudRecordVersion extends AbstractModel
{
    /**
     * @var string <p>Version ID；格式 <code>rv-</code> + 8 位小写字母/数字。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionId;

    /**
     * @var string <p>所属 Record ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordId;

    /**
     * @var integer <p>Version 递增序号（1 起）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Revision;

    /**
     * @var string <p>Version 状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>审批模式；创建时锁定，后续变更 Registry 审批模式不影响本 Version。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApprovalMode;

    /**
     * @var integer <p>所属租户 AppId。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string <p>创建者主账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorUin;

    /**
     * @var string <p>创建时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>最近一次更新时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>Version 别名（可选）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionName;

    /**
     * @var string <p>协议描述符对象。（JSON 字符串形式）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Descriptors;

    /**
     * @var string <p>内容来源。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceType;

    /**
     * @var string <p>规范化来源配置对象。（JSON 字符串形式）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceConfig;

    /**
     * @var string <p>内容状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContentStatus;

    /**
     * @var string <p>READY 内容 SHA-256。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContentSHA256;

    /**
     * @var integer <p>READY 内容字节数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContentSizeBytes;

    /**
     * @var string <p>配置内容规范化后的 SHA-256（用于幂等去重）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigSHA256;

    /**
     * @var string <p>创建者子账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorSubAccountUin;

    /**
     * @var array <p>Version 历次审批动作。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApprovalActions;

    /**
     * @var string <p>TAR 内容成功校验、完成物化并进入 READY 的时间；MANUAL / URL_IMPORT 或尚未 READY 的 TAR_PACKAGE 均为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContentReadyTime;

    /**
     * @var string <p>本次 Version 的变更原因，最大 4096 字符；不可修改。Revision 1 或未填写时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChangeLog;

    /**
     * @var array <p>当前绑定该 Version 的 Label Name 列表（例如 stable / latest 或自定义 Label 名称）。未绑定 Label 不在此返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelSet;

    /**
     * @param string $VersionId <p>Version ID；格式 <code>rv-</code> + 8 位小写字母/数字。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordId <p>所属 Record ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Revision <p>Version 递增序号（1 起）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>Version 状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApprovalMode <p>审批模式；创建时锁定，后续变更 Registry 审批模式不影响本 Version。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId <p>所属租户 AppId。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorUin <p>创建者主账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>最近一次更新时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionName <p>Version 别名（可选）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Descriptors <p>协议描述符对象。（JSON 字符串形式）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceType <p>内容来源。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceConfig <p>规范化来源配置对象。（JSON 字符串形式）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContentStatus <p>内容状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContentSHA256 <p>READY 内容 SHA-256。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ContentSizeBytes <p>READY 内容字节数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigSHA256 <p>配置内容规范化后的 SHA-256（用于幂等去重）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorSubAccountUin <p>创建者子账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ApprovalActions <p>Version 历次审批动作。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContentReadyTime <p>TAR 内容成功校验、完成物化并进入 READY 的时间；MANUAL / URL_IMPORT 或尚未 READY 的 TAR_PACKAGE 均为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChangeLog <p>本次 Version 的变更原因，最大 4096 字符；不可修改。Revision 1 或未填写时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LabelSet <p>当前绑定该 Version 的 Label Name 列表（例如 stable / latest 或自定义 Label 名称）。未绑定 Label 不在此返回。</p>
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

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Revision",$param) and $param["Revision"] !== null) {
            $this->Revision = $param["Revision"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ApprovalMode",$param) and $param["ApprovalMode"] !== null) {
            $this->ApprovalMode = $param["ApprovalMode"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("Descriptors",$param) and $param["Descriptors"] !== null) {
            $this->Descriptors = $param["Descriptors"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceConfig",$param) and $param["SourceConfig"] !== null) {
            $this->SourceConfig = $param["SourceConfig"];
        }

        if (array_key_exists("ContentStatus",$param) and $param["ContentStatus"] !== null) {
            $this->ContentStatus = $param["ContentStatus"];
        }

        if (array_key_exists("ContentSHA256",$param) and $param["ContentSHA256"] !== null) {
            $this->ContentSHA256 = $param["ContentSHA256"];
        }

        if (array_key_exists("ContentSizeBytes",$param) and $param["ContentSizeBytes"] !== null) {
            $this->ContentSizeBytes = $param["ContentSizeBytes"];
        }

        if (array_key_exists("ConfigSHA256",$param) and $param["ConfigSHA256"] !== null) {
            $this->ConfigSHA256 = $param["ConfigSHA256"];
        }

        if (array_key_exists("CreatorSubAccountUin",$param) and $param["CreatorSubAccountUin"] !== null) {
            $this->CreatorSubAccountUin = $param["CreatorSubAccountUin"];
        }

        if (array_key_exists("ApprovalActions",$param) and $param["ApprovalActions"] !== null) {
            $this->ApprovalActions = [];
            foreach ($param["ApprovalActions"] as $key => $value){
                $obj = new CloudVersionApprovalAction();
                $obj->deserialize($value);
                array_push($this->ApprovalActions, $obj);
            }
        }

        if (array_key_exists("ContentReadyTime",$param) and $param["ContentReadyTime"] !== null) {
            $this->ContentReadyTime = $param["ContentReadyTime"];
        }

        if (array_key_exists("ChangeLog",$param) and $param["ChangeLog"] !== null) {
            $this->ChangeLog = $param["ChangeLog"];
        }

        if (array_key_exists("LabelSet",$param) and $param["LabelSet"] !== null) {
            $this->LabelSet = $param["LabelSet"];
        }
    }
}
