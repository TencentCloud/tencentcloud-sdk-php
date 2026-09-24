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
 * Registry Record 对象。Record 只保存元数据；协议描述符与内容状态请通过 Version 相关接口获取。
 *
 * @method string getRecordId() 获取<p>Record ID；格式 <code>rec-</code> + 8 位小写字母/数字。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordId(string $RecordId) 设置<p>Record ID；格式 <code>rec-</code> + 8 位小写字母/数字。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegistryId() 获取<p>所属 Registry ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistryId(string $RegistryId) 设置<p>所属 Registry ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>Record 名称；同一 Registry 内可重复。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>Record 名称；同一 Registry 内可重复。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescriptorType() 获取<p>协议描述符类型；创建后不可变。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescriptorType(string $DescriptorType) 设置<p>协议描述符类型；创建后不可变。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLifecycleStatus() 获取<p>生命周期状态。ACTIVE：可用；DELETED：软删除墓碑，不再参与常规查询、下发或版本配额。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifecycleStatus(string $LifecycleStatus) 设置<p>生命周期状态。ACTIVE：可用；DELETED：软删除墓碑，不再参与常规查询、下发或版本配额。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取<p>所属租户 AppId。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置<p>所属租户 AppId。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorUin() 获取<p>创建者主账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorUin(string $CreatorUin) 设置<p>创建者主账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorSubAccountUin() 获取<p>创建者子账号 UIN；主账号直接创建时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorSubAccountUin(string $CreatorSubAccountUin) 设置<p>创建者子账号 UIN；主账号直接创建时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间，ISO 8601 UTC。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，ISO 8601 UTC。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>最近一次更新时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>最近一次更新时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVersionCount() 获取<p>Record 下未删除 Version 数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionCount(integer $VersionCount) 设置<p>Record 下未删除 Version 数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabelSet() 获取<p>Record 下所有 Label Name（含未绑定 Label），包括系统 Label（stable / latest）和自定义 Label。仅名称，不含 VersionId、更新时间或操作者。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelSet(array $LabelSet) 设置<p>Record 下所有 Label Name（含未绑定 Label），包括系统 Label（stable / latest）和自定义 Label。仅名称，不含 VersionId、更新时间或操作者。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudRecord extends AbstractModel
{
    /**
     * @var string <p>Record ID；格式 <code>rec-</code> + 8 位小写字母/数字。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordId;

    /**
     * @var string <p>所属 Registry ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistryId;

    /**
     * @var string <p>Record 名称；同一 Registry 内可重复。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>协议描述符类型；创建后不可变。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DescriptorType;

    /**
     * @var string <p>生命周期状态。ACTIVE：可用；DELETED：软删除墓碑，不再参与常规查询、下发或版本配额。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifecycleStatus;

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
     * @var string <p>创建者子账号 UIN；主账号直接创建时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorSubAccountUin;

    /**
     * @var string <p>创建时间，ISO 8601 UTC。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>最近一次更新时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer <p>Record 下未删除 Version 数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionCount;

    /**
     * @var array <p>Record 下所有 Label Name（含未绑定 Label），包括系统 Label（stable / latest）和自定义 Label。仅名称，不含 VersionId、更新时间或操作者。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelSet;

    /**
     * @param string $RecordId <p>Record ID；格式 <code>rec-</code> + 8 位小写字母/数字。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegistryId <p>所属 Registry ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>Record 名称；同一 Registry 内可重复。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DescriptorType <p>协议描述符类型；创建后不可变。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LifecycleStatus <p>生命周期状态。ACTIVE：可用；DELETED：软删除墓碑，不再参与常规查询、下发或版本配额。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId <p>所属租户 AppId。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorUin <p>创建者主账号 UIN。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorSubAccountUin <p>创建者子账号 UIN；主账号直接创建时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间，ISO 8601 UTC。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>最近一次更新时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VersionCount <p>Record 下未删除 Version 数量。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LabelSet <p>Record 下所有 Label Name（含未绑定 Label），包括系统 Label（stable / latest）和自定义 Label。仅名称，不含 VersionId、更新时间或操作者。</p>
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
        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
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

        if (array_key_exists("DescriptorType",$param) and $param["DescriptorType"] !== null) {
            $this->DescriptorType = $param["DescriptorType"];
        }

        if (array_key_exists("LifecycleStatus",$param) and $param["LifecycleStatus"] !== null) {
            $this->LifecycleStatus = $param["LifecycleStatus"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("VersionCount",$param) and $param["VersionCount"] !== null) {
            $this->VersionCount = $param["VersionCount"];
        }

        if (array_key_exists("LabelSet",$param) and $param["LabelSet"] !== null) {
            $this->LabelSet = $param["LabelSet"];
        }
    }
}
