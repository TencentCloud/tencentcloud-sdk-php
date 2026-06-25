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
 * ModifyUserGroupAttributes请求参数结构体
 *
 * @method string getModelRouterId() 获取<p>模型路由实例ID。</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由实例ID。</p>
 * @method string getUserGroupId() 获取<p>待修改的用户组ID。不可为「未分组」虚拟分组 ugrp-ungrouped。</p>
 * @method void setUserGroupId(string $UserGroupId) 设置<p>待修改的用户组ID。不可为「未分组」虚拟分组 ugrp-ungrouped。</p>
 * @method string getBudgetId() 获取<p>用户组关联的预算ID。不传则不修改预算关联；传入有效 budget-xxx 则将该用户组关联到此预算（若已关联其它预算则替换为本预算）。仅支持关联/替换，不支持解绑——解绑请用 DisassociateBudget。预算与组内 Key、所属实例的预算各自独立判定。</p>
 * @method void setBudgetId(string $BudgetId) 设置<p>用户组关联的预算ID。不传则不修改预算关联；传入有效 budget-xxx 则将该用户组关联到此预算（若已关联其它预算则替换为本预算）。仅支持关联/替换，不支持解绑——解绑请用 DisassociateBudget。预算与组内 Key、所属实例的预算各自独立判定。</p>
 * @method array getIntentRouters() 获取<p>用户组意图路由白名单（ir-xxx）。每一项须为该实例已创建的意图路由名。不传则不修改；传入即整体覆盖。</p>
 * @method void setIntentRouters(array $IntentRouters) 设置<p>用户组意图路由白名单（ir-xxx）。每一项须为该实例已创建的意图路由名。不传则不修改；传入即整体覆盖。</p>
 * @method array getModels() 获取<p>用户组真实模型白名单。每一项须为该实例已关联的模型名。不传则不修改；传入即整体覆盖。</p>
 * @method void setModels(array $Models) 设置<p>用户组真实模型白名单。每一项须为该实例已关联的模型名。不传则不修改；传入即整体覆盖。</p>
 * @method string getUserGroupName() 获取<p>用户组名称。不传则不修改；传入时长度不超过255个字符、同实例下唯一。</p>
 * @method void setUserGroupName(string $UserGroupName) 设置<p>用户组名称。不传则不修改；传入时长度不超过255个字符、同实例下唯一。</p>
 */
class ModifyUserGroupAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>模型路由实例ID。</p>
     */
    public $ModelRouterId;

    /**
     * @var string <p>待修改的用户组ID。不可为「未分组」虚拟分组 ugrp-ungrouped。</p>
     */
    public $UserGroupId;

    /**
     * @var string <p>用户组关联的预算ID。不传则不修改预算关联；传入有效 budget-xxx 则将该用户组关联到此预算（若已关联其它预算则替换为本预算）。仅支持关联/替换，不支持解绑——解绑请用 DisassociateBudget。预算与组内 Key、所属实例的预算各自独立判定。</p>
     */
    public $BudgetId;

    /**
     * @var array <p>用户组意图路由白名单（ir-xxx）。每一项须为该实例已创建的意图路由名。不传则不修改；传入即整体覆盖。</p>
     */
    public $IntentRouters;

    /**
     * @var array <p>用户组真实模型白名单。每一项须为该实例已关联的模型名。不传则不修改；传入即整体覆盖。</p>
     */
    public $Models;

    /**
     * @var string <p>用户组名称。不传则不修改；传入时长度不超过255个字符、同实例下唯一。</p>
     */
    public $UserGroupName;

    /**
     * @param string $ModelRouterId <p>模型路由实例ID。</p>
     * @param string $UserGroupId <p>待修改的用户组ID。不可为「未分组」虚拟分组 ugrp-ungrouped。</p>
     * @param string $BudgetId <p>用户组关联的预算ID。不传则不修改预算关联；传入有效 budget-xxx 则将该用户组关联到此预算（若已关联其它预算则替换为本预算）。仅支持关联/替换，不支持解绑——解绑请用 DisassociateBudget。预算与组内 Key、所属实例的预算各自独立判定。</p>
     * @param array $IntentRouters <p>用户组意图路由白名单（ir-xxx）。每一项须为该实例已创建的意图路由名。不传则不修改；传入即整体覆盖。</p>
     * @param array $Models <p>用户组真实模型白名单。每一项须为该实例已关联的模型名。不传则不修改；传入即整体覆盖。</p>
     * @param string $UserGroupName <p>用户组名称。不传则不修改；传入时长度不超过255个字符、同实例下唯一。</p>
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

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }

        if (array_key_exists("IntentRouters",$param) and $param["IntentRouters"] !== null) {
            $this->IntentRouters = $param["IntentRouters"];
        }

        if (array_key_exists("Models",$param) and $param["Models"] !== null) {
            $this->Models = $param["Models"];
        }

        if (array_key_exists("UserGroupName",$param) and $param["UserGroupName"] !== null) {
            $this->UserGroupName = $param["UserGroupName"];
        }
    }
}
