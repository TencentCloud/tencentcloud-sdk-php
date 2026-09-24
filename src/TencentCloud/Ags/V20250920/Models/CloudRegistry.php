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
 * Registry 对象。包含注册中心的基本信息与 Record 计数。
 *
 * @method string getRegistryId() 获取<p>Registry ID；格式 <code>reg-</code> + 8 位小写字母/数字。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistryId(string $RegistryId) 设置<p>Registry ID；格式 <code>reg-</code> + 8 位小写字母/数字。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>Registry 同一 AppId + Region 唯一名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>Registry 同一 AppId + Region 唯一名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApprovalMode() 获取<p>审批模式；AUTO 自动通过，MANUAL 需人工审批；创建时确定，不可修改。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApprovalMode(string $ApprovalMode) 设置<p>审批模式；AUTO 自动通过，MANUAL 需人工审批；创建时确定，不可修改。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取<p>Registry 所在腾讯云地域，如 <code>ap-guangzhou</code>。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置<p>Registry 所在腾讯云地域，如 <code>ap-guangzhou</code>。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>Registry 状态。ACTIVE / ARCHIVED。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>Registry 状态。ACTIVE / ARCHIVED。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间，ISO 8601 UTC，如 <code>2026-08-11T10:00:00Z</code>。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，ISO 8601 UTC，如 <code>2026-08-11T10:00:00Z</code>。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>最近一次更新时间，ISO 8601 UTC。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>最近一次更新时间，ISO 8601 UTC。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecordCount() 获取<p>Registry 下 Record 总数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordCount(integer $RecordCount) 设置<p>Registry 下 Record 总数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>权威读取的腾讯云自定义标签，按 Key、Value 稳定排序；无标签时固定返回空数组，不返回 null。</p>
 * @method void setTags(array $Tags) 设置<p>权威读取的腾讯云自定义标签，按 Key、Value 稳定排序；无标签时固定返回空数组，不返回 null。</p>
 * @method integer getPublishedRecordCount() 获取<p>Stable Label 已绑定的 Record 数量。Approved Version 数量和可对外消费的 Record 数量已不再等价。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublishedRecordCount(integer $PublishedRecordCount) 设置<p>Stable Label 已绑定的 Record 数量。Approved Version 数量和可对外消费的 Record 数量已不再等价。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取<p>所属租户 AppId。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置<p>所属租户 AppId。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorUin() 获取<p>创建者主账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorUin(string $CreatorUin) 设置<p>创建者主账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorSubAccountUin() 获取<p>创建者子账号 UIN；主账号直接创建时为空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorSubAccountUin(string $CreatorSubAccountUin) 设置<p>创建者子账号 UIN；主账号直接创建时为空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudRegistry extends AbstractModel
{
    /**
     * @var string <p>Registry ID；格式 <code>reg-</code> + 8 位小写字母/数字。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistryId;

    /**
     * @var string <p>Registry 同一 AppId + Region 唯一名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>审批模式；AUTO 自动通过，MANUAL 需人工审批；创建时确定，不可修改。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApprovalMode;

    /**
     * @var string <p>Registry 所在腾讯云地域，如 <code>ap-guangzhou</code>。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string <p>Registry 状态。ACTIVE / ARCHIVED。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>创建时间，ISO 8601 UTC，如 <code>2026-08-11T10:00:00Z</code>。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>最近一次更新时间，ISO 8601 UTC。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer <p>Registry 下 Record 总数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordCount;

    /**
     * @var array <p>权威读取的腾讯云自定义标签，按 Key、Value 稳定排序；无标签时固定返回空数组，不返回 null。</p>
     */
    public $Tags;

    /**
     * @var integer <p>Stable Label 已绑定的 Record 数量。Approved Version 数量和可对外消费的 Record 数量已不再等价。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublishedRecordCount;

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
     * @var string <p>创建者子账号 UIN；主账号直接创建时为空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorSubAccountUin;

    /**
     * @param string $RegistryId <p>Registry ID；格式 <code>reg-</code> + 8 位小写字母/数字。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>Registry 同一 AppId + Region 唯一名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApprovalMode <p>审批模式；AUTO 自动通过，MANUAL 需人工审批；创建时确定，不可修改。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region <p>Registry 所在腾讯云地域，如 <code>ap-guangzhou</code>。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>Registry 状态。ACTIVE / ARCHIVED。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间，ISO 8601 UTC，如 <code>2026-08-11T10:00:00Z</code>。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>最近一次更新时间，ISO 8601 UTC。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecordCount <p>Registry 下 Record 总数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>权威读取的腾讯云自定义标签，按 Key、Value 稳定排序；无标签时固定返回空数组，不返回 null。</p>
     * @param integer $PublishedRecordCount <p>Stable Label 已绑定的 Record 数量。Approved Version 数量和可对外消费的 Record 数量已不再等价。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId <p>所属租户 AppId。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorUin <p>创建者主账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorSubAccountUin <p>创建者子账号 UIN；主账号直接创建时为空字符串。</p>
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ApprovalMode",$param) and $param["ApprovalMode"] !== null) {
            $this->ApprovalMode = $param["ApprovalMode"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RecordCount",$param) and $param["RecordCount"] !== null) {
            $this->RecordCount = $param["RecordCount"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new CloudTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("PublishedRecordCount",$param) and $param["PublishedRecordCount"] !== null) {
            $this->PublishedRecordCount = $param["PublishedRecordCount"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("CreatorSubAccountUin",$param) and $param["CreatorSubAccountUin"] !== null) {
            $this->CreatorSubAccountUin = $param["CreatorSubAccountUin"];
        }
    }
}
