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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则健康检查状态
 *
 * @method string getIsDefaultRule() 获取是否为默认转发规则。
 * @method void setIsDefaultRule(string $IsDefaultRule) 设置是否为默认转发规则。
 * @method string getRuleId() 获取转发规则 ID，格式为 rule- 后接 8 位字母数字。
 * @method void setRuleId(string $RuleId) 设置转发规则 ID，格式为 rule- 后接 8 位字母数字。
 * @method array getTargetGroupHealthInfos() 获取目标组健康状态。
 * @method void setTargetGroupHealthInfos(array $TargetGroupHealthInfos) 设置目标组健康状态。
 */
class RuleHealthStatusInfo extends AbstractModel
{
    /**
     * @var string 是否为默认转发规则。
     */
    public $IsDefaultRule;

    /**
     * @var string 转发规则 ID，格式为 rule- 后接 8 位字母数字。
     */
    public $RuleId;

    /**
     * @var array 目标组健康状态。
     */
    public $TargetGroupHealthInfos;

    /**
     * @param string $IsDefaultRule 是否为默认转发规则。
     * @param string $RuleId 转发规则 ID，格式为 rule- 后接 8 位字母数字。
     * @param array $TargetGroupHealthInfos 目标组健康状态。
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
        if (array_key_exists("IsDefaultRule",$param) and $param["IsDefaultRule"] !== null) {
            $this->IsDefaultRule = $param["IsDefaultRule"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("TargetGroupHealthInfos",$param) and $param["TargetGroupHealthInfos"] !== null) {
            $this->TargetGroupHealthInfos = [];
            foreach ($param["TargetGroupHealthInfos"] as $key => $value){
                $obj = new TargetGroupHealthInfo();
                $obj->deserialize($value);
                array_push($this->TargetGroupHealthInfos, $obj);
            }
        }
    }
}
