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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Key信息
 *
 * @method boolean getBlocked() 获取<p>是否禁用Key</p>
 * @method void setBlocked(boolean $Blocked) 设置<p>是否禁用Key</p>
 * @method string getBudgetId() 获取<p>Key关联的Budget ID。</p><p>未关联Budget时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBudgetId(string $BudgetId) 设置<p>Key关联的Budget ID。</p><p>未关联Budget时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBudgetName() 获取<p>Key关联的Budget名称。</p><p>未关联Budget时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBudgetName(string $BudgetName) 设置<p>Key关联的Budget名称。</p><p>未关联Budget时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取<p>创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
 * @method array getCreditUsageSet() 获取<p>Key按Budget刷新周期划分的Credit使用情况。</p><p>当关联Budget配置多个刷新周期时，按1d、7d、30d顺序返回各周期用量；未关联Budget时返回空数组。</p>
 * @method void setCreditUsageSet(array $CreditUsageSet) 设置<p>Key按Budget刷新周期划分的Credit使用情况。</p><p>当关联Budget配置多个刷新周期时，按1d、7d、30d顺序返回各周期用量；未关联Budget时返回空数组。</p>
 * @method string getKey() 获取<p>Key的值</p>
 * @method void setKey(string $Key) 设置<p>Key的值</p>
 * @method string getKeyId() 获取<p>Key的ID</p>
 * @method void setKeyId(string $KeyId) 设置<p>Key的ID</p>
 * @method string getKeyName() 获取<p>Key名称</p>
 * @method void setKeyName(string $KeyName) 设置<p>Key名称</p>
 * @method string getModifiedTime() 获取<p>修改时间</p>
 * @method void setModifiedTime(string $ModifiedTime) 设置<p>修改时间</p>
 * @method RateLimitConfigForKey getRateLimitConfig() 获取<p>限速信息</p>
 * @method void setRateLimitConfig(RateLimitConfigForKey $RateLimitConfig) 设置<p>限速信息</p>
 * @method string getStatus() 获取<p>Key状态</p><p>枚举值：</p><ul><li>Active： 正常</li></ul>
 * @method void setStatus(string $Status) 设置<p>Key状态</p><p>枚举值：</p><ul><li>Active： 正常</li></ul>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 * @method string getUserGroupId() 获取<p>所属的用户组ID</p>
 * @method void setUserGroupId(string $UserGroupId) 设置<p>所属的用户组ID</p>
 * @method string getUserGroupName() 获取<p>所属的用户组名称</p>
 * @method void setUserGroupName(string $UserGroupName) 设置<p>所属的用户组名称</p>
 */
class KeyInfo extends AbstractModel
{
    /**
     * @var boolean <p>是否禁用Key</p>
     */
    public $Blocked;

    /**
     * @var string <p>Key关联的Budget ID。</p><p>未关联Budget时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BudgetId;

    /**
     * @var string <p>Key关联的Budget名称。</p><p>未关联Budget时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BudgetName;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var array <p>Key按Budget刷新周期划分的Credit使用情况。</p><p>当关联Budget配置多个刷新周期时，按1d、7d、30d顺序返回各周期用量；未关联Budget时返回空数组。</p>
     */
    public $CreditUsageSet;

    /**
     * @var string <p>Key的值</p>
     */
    public $Key;

    /**
     * @var string <p>Key的ID</p>
     */
    public $KeyId;

    /**
     * @var string <p>Key名称</p>
     */
    public $KeyName;

    /**
     * @var string <p>修改时间</p>
     */
    public $ModifiedTime;

    /**
     * @var RateLimitConfigForKey <p>限速信息</p>
     */
    public $RateLimitConfig;

    /**
     * @var string <p>Key状态</p><p>枚举值：</p><ul><li>Active： 正常</li></ul>
     */
    public $Status;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @var string <p>所属的用户组ID</p>
     */
    public $UserGroupId;

    /**
     * @var string <p>所属的用户组名称</p>
     */
    public $UserGroupName;

    /**
     * @param boolean $Blocked <p>是否禁用Key</p>
     * @param string $BudgetId <p>Key关联的Budget ID。</p><p>未关联Budget时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BudgetName <p>Key关联的Budget名称。</p><p>未关联Budget时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime <p>创建时间</p>
     * @param array $CreditUsageSet <p>Key按Budget刷新周期划分的Credit使用情况。</p><p>当关联Budget配置多个刷新周期时，按1d、7d、30d顺序返回各周期用量；未关联Budget时返回空数组。</p>
     * @param string $Key <p>Key的值</p>
     * @param string $KeyId <p>Key的ID</p>
     * @param string $KeyName <p>Key名称</p>
     * @param string $ModifiedTime <p>修改时间</p>
     * @param RateLimitConfigForKey $RateLimitConfig <p>限速信息</p>
     * @param string $Status <p>Key状态</p><p>枚举值：</p><ul><li>Active： 正常</li></ul>
     * @param array $Tags <p>标签</p>
     * @param string $UserGroupId <p>所属的用户组ID</p>
     * @param string $UserGroupName <p>所属的用户组名称</p>
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
        if (array_key_exists("Blocked",$param) and $param["Blocked"] !== null) {
            $this->Blocked = $param["Blocked"];
        }

        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }

        if (array_key_exists("BudgetName",$param) and $param["BudgetName"] !== null) {
            $this->BudgetName = $param["BudgetName"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("CreditUsageSet",$param) and $param["CreditUsageSet"] !== null) {
            $this->CreditUsageSet = [];
            foreach ($param["CreditUsageSet"] as $key => $value){
                $obj = new CreditUsage();
                $obj->deserialize($value);
                array_push($this->CreditUsageSet, $obj);
            }
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("RateLimitConfig",$param) and $param["RateLimitConfig"] !== null) {
            $this->RateLimitConfig = new RateLimitConfigForKey();
            $this->RateLimitConfig->deserialize($param["RateLimitConfig"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("UserGroupName",$param) and $param["UserGroupName"] !== null) {
            $this->UserGroupName = $param["UserGroupName"];
        }
    }
}
