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
 * CreateUserGroup请求参数结构体
 *
 * @method string getModelRouterId() 获取<p>模型路由实例ID。用户组将创建在该实例下。</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由实例ID。用户组将创建在该实例下。</p>
 * @method string getUserGroupName() 获取<p>用户组名称。必填。同一模型路由实例下名称唯一，长度不超过255个字符。</p>
 * @method void setUserGroupName(string $UserGroupName) 设置<p>用户组名称。必填。同一模型路由实例下名称唯一，长度不超过255个字符。</p>
 * @method string getBudgetId() 获取<p>建组时直接关联的预算 ID（须为已存在的 Budget）。关联后由该 Budget 统一管理本组的消费上限与限速。不传表示不关联预算，可建组后再用 AssociateBudget 关联。</p>
 * @method void setBudgetId(string $BudgetId) 设置<p>建组时直接关联的预算 ID（须为已存在的 Budget）。关联后由该 Budget 统一管理本组的消费上限与限速。不传表示不关联预算，可建组后再用 AssociateBudget 关联。</p>
 * @method array getIntentRouters() 获取<p>用户组意图路由白名单（ir-xxx）。每一项须为该实例已创建的意图路由名。命中意图路由名时其内部真实模型自动豁免白名单。为空表示不授权任何意图路由。</p>
 * @method void setIntentRouters(array $IntentRouters) 设置<p>用户组意图路由白名单（ir-xxx）。每一项须为该实例已创建的意图路由名。命中意图路由名时其内部真实模型自动豁免白名单。为空表示不授权任何意图路由。</p>
 * @method array getKeyIds() 获取<p>建组时同时绑定的已有 Key ID 列表，最多100个。每个 Key 须属于同一模型路由实例。建组与绑定为一个原子异步任务，任一 Key 失败则整组创建回滚。不传表示建空组。</p>
 * @method void setKeyIds(array $KeyIds) 设置<p>建组时同时绑定的已有 Key ID 列表，最多100个。每个 Key 须属于同一模型路由实例。建组与绑定为一个原子异步任务，任一 Key 失败则整组创建回滚。不传表示建空组。</p>
 * @method array getModels() 获取<p>用户组真实模型白名单。每一项须为该实例已关联的模型名。为空表示不在用户组层限制真实模型（按实例层白名单生效）。</p>
 * @method void setModels(array $Models) 设置<p>用户组真实模型白名单。每一项须为该实例已关联的模型名。为空表示不在用户组层限制真实模型（按实例层白名单生效）。</p>
 * @method array getTags() 获取<p>标签列表，最多50个。</p>
 * @method void setTags(array $Tags) 设置<p>标签列表，最多50个。</p>
 */
class CreateUserGroupRequest extends AbstractModel
{
    /**
     * @var string <p>模型路由实例ID。用户组将创建在该实例下。</p>
     */
    public $ModelRouterId;

    /**
     * @var string <p>用户组名称。必填。同一模型路由实例下名称唯一，长度不超过255个字符。</p>
     */
    public $UserGroupName;

    /**
     * @var string <p>建组时直接关联的预算 ID（须为已存在的 Budget）。关联后由该 Budget 统一管理本组的消费上限与限速。不传表示不关联预算，可建组后再用 AssociateBudget 关联。</p>
     */
    public $BudgetId;

    /**
     * @var array <p>用户组意图路由白名单（ir-xxx）。每一项须为该实例已创建的意图路由名。命中意图路由名时其内部真实模型自动豁免白名单。为空表示不授权任何意图路由。</p>
     */
    public $IntentRouters;

    /**
     * @var array <p>建组时同时绑定的已有 Key ID 列表，最多100个。每个 Key 须属于同一模型路由实例。建组与绑定为一个原子异步任务，任一 Key 失败则整组创建回滚。不传表示建空组。</p>
     */
    public $KeyIds;

    /**
     * @var array <p>用户组真实模型白名单。每一项须为该实例已关联的模型名。为空表示不在用户组层限制真实模型（按实例层白名单生效）。</p>
     */
    public $Models;

    /**
     * @var array <p>标签列表，最多50个。</p>
     */
    public $Tags;

    /**
     * @param string $ModelRouterId <p>模型路由实例ID。用户组将创建在该实例下。</p>
     * @param string $UserGroupName <p>用户组名称。必填。同一模型路由实例下名称唯一，长度不超过255个字符。</p>
     * @param string $BudgetId <p>建组时直接关联的预算 ID（须为已存在的 Budget）。关联后由该 Budget 统一管理本组的消费上限与限速。不传表示不关联预算，可建组后再用 AssociateBudget 关联。</p>
     * @param array $IntentRouters <p>用户组意图路由白名单（ir-xxx）。每一项须为该实例已创建的意图路由名。命中意图路由名时其内部真实模型自动豁免白名单。为空表示不授权任何意图路由。</p>
     * @param array $KeyIds <p>建组时同时绑定的已有 Key ID 列表，最多100个。每个 Key 须属于同一模型路由实例。建组与绑定为一个原子异步任务，任一 Key 失败则整组创建回滚。不传表示建空组。</p>
     * @param array $Models <p>用户组真实模型白名单。每一项须为该实例已关联的模型名。为空表示不在用户组层限制真实模型（按实例层白名单生效）。</p>
     * @param array $Tags <p>标签列表，最多50个。</p>
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
        if (array_key_exists("ModelRouterId",$param) and $param["ModelRouterId"] !== null) {
            $this->ModelRouterId = $param["ModelRouterId"];
        }

        if (array_key_exists("UserGroupName",$param) and $param["UserGroupName"] !== null) {
            $this->UserGroupName = $param["UserGroupName"];
        }

        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }

        if (array_key_exists("IntentRouters",$param) and $param["IntentRouters"] !== null) {
            $this->IntentRouters = $param["IntentRouters"];
        }

        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }

        if (array_key_exists("Models",$param) and $param["Models"] !== null) {
            $this->Models = $param["Models"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
