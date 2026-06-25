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
 * Budget信息
 *
 * @method integer getAssociationKeyCount() 获取<p>关联的key数量</p>
 * @method void setAssociationKeyCount(integer $AssociationKeyCount) 设置<p>关联的key数量</p>
 * @method integer getAssociationModelRouterCount() 获取<p>关联的模型路由数量</p>
 * @method void setAssociationModelRouterCount(integer $AssociationModelRouterCount) 设置<p>关联的模型路由数量</p>
 * @method integer getAssociationUserGroupCount() 获取<p>关联的用户组数量</p>
 * @method void setAssociationUserGroupCount(integer $AssociationUserGroupCount) 设置<p>关联的用户组数量</p>
 * @method array getBudgetConfigs() 获取<p>Budget预算配置数组。</p><p>最多返回3个元素，每种刷新周期（1d/7d/30d）各一个。</p>
 * @method void setBudgetConfigs(array $BudgetConfigs) 设置<p>Budget预算配置数组。</p><p>最多返回3个元素，每种刷新周期（1d/7d/30d）各一个。</p>
 * @method string getBudgetId() 获取<p>Budget ID。</p>
 * @method void setBudgetId(string $BudgetId) 设置<p>Budget ID。</p>
 * @method string getBudgetName() 获取<p>Budget名称。</p>
 * @method void setBudgetName(string $BudgetName) 设置<p>Budget名称。</p>
 * @method string getCreatedTime() 获取<p>创建时间。</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间。</p>
 * @method string getModifiedTime() 获取<p>修改时间。</p>
 * @method void setModifiedTime(string $ModifiedTime) 设置<p>修改时间。</p>
 * @method RateLimitConfigForBudget getRateLimitConfig() 获取<p>Budget限速信息。</p>
 * @method void setRateLimitConfig(RateLimitConfigForBudget $RateLimitConfig) 设置<p>Budget限速信息。</p>
 * @method string getStatus() 获取<p>Budget状态。</p><p>枚举值：</p><ul><li>Provisioning：创建中</li><li>Active：运行中</li><li>Configuring：变配中</li><li>Deleting：删除中</li><li>ProvisionFailed：创建失败</li><li>ConfigureFailed：变配失败</li><li>DeletionFailed：删除失败</li></ul>
 * @method void setStatus(string $Status) 设置<p>Budget状态。</p><p>枚举值：</p><ul><li>Provisioning：创建中</li><li>Active：运行中</li><li>Configuring：变配中</li><li>Deleting：删除中</li><li>ProvisionFailed：创建失败</li><li>ConfigureFailed：变配失败</li><li>DeletionFailed：删除失败</li></ul>
 */
class BudgetInfo extends AbstractModel
{
    /**
     * @var integer <p>关联的key数量</p>
     */
    public $AssociationKeyCount;

    /**
     * @var integer <p>关联的模型路由数量</p>
     */
    public $AssociationModelRouterCount;

    /**
     * @var integer <p>关联的用户组数量</p>
     */
    public $AssociationUserGroupCount;

    /**
     * @var array <p>Budget预算配置数组。</p><p>最多返回3个元素，每种刷新周期（1d/7d/30d）各一个。</p>
     */
    public $BudgetConfigs;

    /**
     * @var string <p>Budget ID。</p>
     */
    public $BudgetId;

    /**
     * @var string <p>Budget名称。</p>
     */
    public $BudgetName;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>修改时间。</p>
     */
    public $ModifiedTime;

    /**
     * @var RateLimitConfigForBudget <p>Budget限速信息。</p>
     */
    public $RateLimitConfig;

    /**
     * @var string <p>Budget状态。</p><p>枚举值：</p><ul><li>Provisioning：创建中</li><li>Active：运行中</li><li>Configuring：变配中</li><li>Deleting：删除中</li><li>ProvisionFailed：创建失败</li><li>ConfigureFailed：变配失败</li><li>DeletionFailed：删除失败</li></ul>
     */
    public $Status;

    /**
     * @param integer $AssociationKeyCount <p>关联的key数量</p>
     * @param integer $AssociationModelRouterCount <p>关联的模型路由数量</p>
     * @param integer $AssociationUserGroupCount <p>关联的用户组数量</p>
     * @param array $BudgetConfigs <p>Budget预算配置数组。</p><p>最多返回3个元素，每种刷新周期（1d/7d/30d）各一个。</p>
     * @param string $BudgetId <p>Budget ID。</p>
     * @param string $BudgetName <p>Budget名称。</p>
     * @param string $CreatedTime <p>创建时间。</p>
     * @param string $ModifiedTime <p>修改时间。</p>
     * @param RateLimitConfigForBudget $RateLimitConfig <p>Budget限速信息。</p>
     * @param string $Status <p>Budget状态。</p><p>枚举值：</p><ul><li>Provisioning：创建中</li><li>Active：运行中</li><li>Configuring：变配中</li><li>Deleting：删除中</li><li>ProvisionFailed：创建失败</li><li>ConfigureFailed：变配失败</li><li>DeletionFailed：删除失败</li></ul>
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
        if (array_key_exists("AssociationKeyCount",$param) and $param["AssociationKeyCount"] !== null) {
            $this->AssociationKeyCount = $param["AssociationKeyCount"];
        }

        if (array_key_exists("AssociationModelRouterCount",$param) and $param["AssociationModelRouterCount"] !== null) {
            $this->AssociationModelRouterCount = $param["AssociationModelRouterCount"];
        }

        if (array_key_exists("AssociationUserGroupCount",$param) and $param["AssociationUserGroupCount"] !== null) {
            $this->AssociationUserGroupCount = $param["AssociationUserGroupCount"];
        }

        if (array_key_exists("BudgetConfigs",$param) and $param["BudgetConfigs"] !== null) {
            $this->BudgetConfigs = [];
            foreach ($param["BudgetConfigs"] as $key => $value){
                $obj = new BudgetConfig();
                $obj->deserialize($value);
                array_push($this->BudgetConfigs, $obj);
            }
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

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("RateLimitConfig",$param) and $param["RateLimitConfig"] !== null) {
            $this->RateLimitConfig = new RateLimitConfigForBudget();
            $this->RateLimitConfig->deserialize($param["RateLimitConfig"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
