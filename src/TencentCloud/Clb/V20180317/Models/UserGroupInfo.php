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
 * 用户组信息。
 *
 * @method string getUserGroupId() 获取<p>用户组ID。「未分组」虚拟分组固定为 ugrp-ungrouped。</p>
 * @method void setUserGroupId(string $UserGroupId) 设置<p>用户组ID。「未分组」虚拟分组固定为 ugrp-ungrouped。</p>
 * @method string getUserGroupName() 获取<p>用户组名称。「未分组」虚拟分组固定为 ungrouped。</p>
 * @method void setUserGroupName(string $UserGroupName) 设置<p>用户组名称。「未分组」虚拟分组固定为 ungrouped。</p>
 * @method string getModelRouterId() 获取<p>所属模型路由实例ID。</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>所属模型路由实例ID。</p>
 * @method string getStatus() 获取<p>用户组状态。</p><p>枚举值：</p><ul><li>Creating：创建中</li><li>Active：正常</li><li>Configuring：配置中</li><li>Deleting：删除中</li></ul><p>「未分组」虚拟分组（ugrp-ungrouped）恒为 Active。</p>
 * @method void setStatus(string $Status) 设置<p>用户组状态。</p><p>枚举值：</p><ul><li>Creating：创建中</li><li>Active：正常</li><li>Configuring：配置中</li><li>Deleting：删除中</li></ul><p>「未分组」虚拟分组（ugrp-ungrouped）恒为 Active。</p>
 * @method array getModels() 获取<p>用户组真实模型白名单。「未分组」虚拟分组为空数组。</p>
 * @method void setModels(array $Models) 设置<p>用户组真实模型白名单。「未分组」虚拟分组为空数组。</p>
 * @method array getIntentRouters() 获取<p>用户组意图路由白名单（ir-xxx）。「未分组」虚拟分组为空数组。</p>
 * @method void setIntentRouters(array $IntentRouters) 设置<p>用户组意图路由白名单（ir-xxx）。「未分组」虚拟分组为空数组。</p>
 * @method string getBudgetId() 获取<p>关联的Budget ID。</p><p>未关联时为空；「未分组」虚拟分组恒为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBudgetId(string $BudgetId) 设置<p>关联的Budget ID。</p><p>未关联时为空；「未分组」虚拟分组恒为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBudgetName() 获取<p>关联的Budget名称。</p><p>未关联时为空；「未分组」虚拟分组恒为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBudgetName(string $BudgetName) 设置<p>关联的Budget名称。</p><p>未关联时为空；「未分组」虚拟分组恒为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCreditUsageSet() 获取<p>用户组多刷新周期 Credit 使用情况。</p><p>无多周期预算时为空数组。</p>
 * @method void setCreditUsageSet(array $CreditUsageSet) 设置<p>用户组多刷新周期 Credit 使用情况。</p><p>无多周期预算时为空数组。</p>
 * @method integer getKeyCount() 获取<p>用户组当前包含的 Key 数量。「未分组」虚拟分组（ugrp-ungrouped）返回该模型路由实例下未归属任何用户组的 Key 数量。</p>
 * @method void setKeyCount(integer $KeyCount) 设置<p>用户组当前包含的 Key 数量。「未分组」虚拟分组（ugrp-ungrouped）返回该模型路由实例下未归属任何用户组的 Key 数量。</p>
 * @method array getTags() 获取<p>标签列表。「未分组」虚拟分组为空数组。</p>
 * @method void setTags(array $Tags) 设置<p>标签列表。「未分组」虚拟分组为空数组。</p>
 * @method string getCreatedTime() 获取<p>创建时间。「未分组」虚拟分组不返回此字段。</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间。「未分组」虚拟分组不返回此字段。</p>
 * @method string getModifiedTime() 获取<p>修改时间。「未分组」虚拟分组不返回此字段。</p>
 * @method void setModifiedTime(string $ModifiedTime) 设置<p>修改时间。「未分组」虚拟分组不返回此字段。</p>
 */
class UserGroupInfo extends AbstractModel
{
    /**
     * @var string <p>用户组ID。「未分组」虚拟分组固定为 ugrp-ungrouped。</p>
     */
    public $UserGroupId;

    /**
     * @var string <p>用户组名称。「未分组」虚拟分组固定为 ungrouped。</p>
     */
    public $UserGroupName;

    /**
     * @var string <p>所属模型路由实例ID。</p>
     */
    public $ModelRouterId;

    /**
     * @var string <p>用户组状态。</p><p>枚举值：</p><ul><li>Creating：创建中</li><li>Active：正常</li><li>Configuring：配置中</li><li>Deleting：删除中</li></ul><p>「未分组」虚拟分组（ugrp-ungrouped）恒为 Active。</p>
     */
    public $Status;

    /**
     * @var array <p>用户组真实模型白名单。「未分组」虚拟分组为空数组。</p>
     */
    public $Models;

    /**
     * @var array <p>用户组意图路由白名单（ir-xxx）。「未分组」虚拟分组为空数组。</p>
     */
    public $IntentRouters;

    /**
     * @var string <p>关联的Budget ID。</p><p>未关联时为空；「未分组」虚拟分组恒为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BudgetId;

    /**
     * @var string <p>关联的Budget名称。</p><p>未关联时为空；「未分组」虚拟分组恒为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BudgetName;

    /**
     * @var array <p>用户组多刷新周期 Credit 使用情况。</p><p>无多周期预算时为空数组。</p>
     */
    public $CreditUsageSet;

    /**
     * @var integer <p>用户组当前包含的 Key 数量。「未分组」虚拟分组（ugrp-ungrouped）返回该模型路由实例下未归属任何用户组的 Key 数量。</p>
     */
    public $KeyCount;

    /**
     * @var array <p>标签列表。「未分组」虚拟分组为空数组。</p>
     */
    public $Tags;

    /**
     * @var string <p>创建时间。「未分组」虚拟分组不返回此字段。</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>修改时间。「未分组」虚拟分组不返回此字段。</p>
     */
    public $ModifiedTime;

    /**
     * @param string $UserGroupId <p>用户组ID。「未分组」虚拟分组固定为 ugrp-ungrouped。</p>
     * @param string $UserGroupName <p>用户组名称。「未分组」虚拟分组固定为 ungrouped。</p>
     * @param string $ModelRouterId <p>所属模型路由实例ID。</p>
     * @param string $Status <p>用户组状态。</p><p>枚举值：</p><ul><li>Creating：创建中</li><li>Active：正常</li><li>Configuring：配置中</li><li>Deleting：删除中</li></ul><p>「未分组」虚拟分组（ugrp-ungrouped）恒为 Active。</p>
     * @param array $Models <p>用户组真实模型白名单。「未分组」虚拟分组为空数组。</p>
     * @param array $IntentRouters <p>用户组意图路由白名单（ir-xxx）。「未分组」虚拟分组为空数组。</p>
     * @param string $BudgetId <p>关联的Budget ID。</p><p>未关联时为空；「未分组」虚拟分组恒为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BudgetName <p>关联的Budget名称。</p><p>未关联时为空；「未分组」虚拟分组恒为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CreditUsageSet <p>用户组多刷新周期 Credit 使用情况。</p><p>无多周期预算时为空数组。</p>
     * @param integer $KeyCount <p>用户组当前包含的 Key 数量。「未分组」虚拟分组（ugrp-ungrouped）返回该模型路由实例下未归属任何用户组的 Key 数量。</p>
     * @param array $Tags <p>标签列表。「未分组」虚拟分组为空数组。</p>
     * @param string $CreatedTime <p>创建时间。「未分组」虚拟分组不返回此字段。</p>
     * @param string $ModifiedTime <p>修改时间。「未分组」虚拟分组不返回此字段。</p>
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
        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("UserGroupName",$param) and $param["UserGroupName"] !== null) {
            $this->UserGroupName = $param["UserGroupName"];
        }

        if (array_key_exists("ModelRouterId",$param) and $param["ModelRouterId"] !== null) {
            $this->ModelRouterId = $param["ModelRouterId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Models",$param) and $param["Models"] !== null) {
            $this->Models = $param["Models"];
        }

        if (array_key_exists("IntentRouters",$param) and $param["IntentRouters"] !== null) {
            $this->IntentRouters = $param["IntentRouters"];
        }

        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }

        if (array_key_exists("BudgetName",$param) and $param["BudgetName"] !== null) {
            $this->BudgetName = $param["BudgetName"];
        }

        if (array_key_exists("CreditUsageSet",$param) and $param["CreditUsageSet"] !== null) {
            $this->CreditUsageSet = [];
            foreach ($param["CreditUsageSet"] as $key => $value){
                $obj = new CreditUsage();
                $obj->deserialize($value);
                array_push($this->CreditUsageSet, $obj);
            }
        }

        if (array_key_exists("KeyCount",$param) and $param["KeyCount"] !== null) {
            $this->KeyCount = $param["KeyCount"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }
    }
}
