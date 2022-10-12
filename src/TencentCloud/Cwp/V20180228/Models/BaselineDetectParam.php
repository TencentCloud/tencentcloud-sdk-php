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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线扫描参数
 *
 * @method array getPolicyIds() 获取检测的策略集合
 * @method void setPolicyIds(array $PolicyIds) 设置检测的策略集合
 * @method array getRuleIds() 获取检测的规则集合
 * @method void setRuleIds(array $RuleIds) 设置检测的规则集合
 * @method array getItemIds() 获取检测项集合
 * @method void setItemIds(array $ItemIds) 设置检测项集合
 * @method array getHostIds() 获取检测的主机ID集合
 * @method void setHostIds(array $HostIds) 设置检测的主机ID集合
 */
class BaselineDetectParam extends AbstractModel
{
    /**
     * @var array 检测的策略集合
     */
    public $PolicyIds;

    /**
     * @var array 检测的规则集合
     */
    public $RuleIds;

    /**
     * @var array 检测项集合
     */
    public $ItemIds;

    /**
     * @var array 检测的主机ID集合
     */
    public $HostIds;

    /**
     * @param array $PolicyIds 检测的策略集合
     * @param array $RuleIds 检测的规则集合
     * @param array $ItemIds 检测项集合
     * @param array $HostIds 检测的主机ID集合
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
        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }

        if (array_key_exists("ItemIds",$param) and $param["ItemIds"] !== null) {
            $this->ItemIds = $param["ItemIds"];
        }

        if (array_key_exists("HostIds",$param) and $param["HostIds"] !== null) {
            $this->HostIds = $param["HostIds"];
        }
    }
}
