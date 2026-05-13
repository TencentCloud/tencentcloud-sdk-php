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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OverrideCfsRules请求参数结构体
 *
 * @method string getPermissionGroupId() 获取权限组 ID
 * @method void setPermissionGroupId(string $PermissionGroupId) 设置权限组 ID
 * @method array getRuleList() 获取权限组规则列表
 * @method void setRuleList(array $RuleList) 设置权限组规则列表
 */
class OverrideCfsRulesRequest extends AbstractModel
{
    /**
     * @var string 权限组 ID
     */
    public $PermissionGroupId;

    /**
     * @var array 权限组规则列表
     */
    public $RuleList;

    /**
     * @param string $PermissionGroupId 权限组 ID
     * @param array $RuleList 权限组规则列表
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
        if (array_key_exists("PermissionGroupId",$param) and $param["PermissionGroupId"] !== null) {
            $this->PermissionGroupId = $param["PermissionGroupId"];
        }

        if (array_key_exists("RuleList",$param) and $param["RuleList"] !== null) {
            $this->RuleList = [];
            foreach ($param["RuleList"] as $key => $value){
                $obj = new InputPermissionGroupRules();
                $obj->deserialize($value);
                array_push($this->RuleList, $obj);
            }
        }
    }
}
