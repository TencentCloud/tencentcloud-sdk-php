<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全策略配置
 *
 * @method CustomRules getCustomRules() 获取自定义规则配置。
 * @method void setCustomRules(CustomRules $CustomRules) 设置自定义规则配置。
 * @method ManagedRules getManagedRules() 获取托管规则配置。
 * @method void setManagedRules(ManagedRules $ManagedRules) 设置托管规则配置。
 */
class SecurityPolicy extends AbstractModel
{
    /**
     * @var CustomRules 自定义规则配置。
     */
    public $CustomRules;

    /**
     * @var ManagedRules 托管规则配置。
     */
    public $ManagedRules;

    /**
     * @param CustomRules $CustomRules 自定义规则配置。
     * @param ManagedRules $ManagedRules 托管规则配置。
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
        if (array_key_exists("CustomRules",$param) and $param["CustomRules"] !== null) {
            $this->CustomRules = new CustomRules();
            $this->CustomRules->deserialize($param["CustomRules"]);
        }

        if (array_key_exists("ManagedRules",$param) and $param["ManagedRules"] !== null) {
            $this->ManagedRules = new ManagedRules();
            $this->ManagedRules->deserialize($param["ManagedRules"]);
        }
    }
}
