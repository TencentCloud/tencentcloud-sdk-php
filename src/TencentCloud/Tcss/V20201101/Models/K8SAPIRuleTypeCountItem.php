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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * k8s告警类型和对应的告警数量
 *
 * @method string getRuleType() 获取<p>规则类型</p><p>枚举值：</p><ul><li>ABNORMAL_CREATE_POD： 可疑容器创建</li></ul>
 * @method void setRuleType(string $RuleType) 设置<p>规则类型</p><p>枚举值：</p><ul><li>ABNORMAL_CREATE_POD： 可疑容器创建</li></ul>
 * @method integer getEventCount() 获取<p>规则对应告警数量</p>
 * @method void setEventCount(integer $EventCount) 设置<p>规则对应告警数量</p>
 */
class K8SAPIRuleTypeCountItem extends AbstractModel
{
    /**
     * @var string <p>规则类型</p><p>枚举值：</p><ul><li>ABNORMAL_CREATE_POD： 可疑容器创建</li></ul>
     */
    public $RuleType;

    /**
     * @var integer <p>规则对应告警数量</p>
     */
    public $EventCount;

    /**
     * @param string $RuleType <p>规则类型</p><p>枚举值：</p><ul><li>ABNORMAL_CREATE_POD： 可疑容器创建</li></ul>
     * @param integer $EventCount <p>规则对应告警数量</p>
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }
    }
}
