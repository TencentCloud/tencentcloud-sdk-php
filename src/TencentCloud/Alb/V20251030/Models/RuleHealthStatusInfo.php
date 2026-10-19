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
 * @method string getIsDefaultRule() 获取<p>是否为默认转发规则。</p>
 * @method void setIsDefaultRule(string $IsDefaultRule) 设置<p>是否为默认转发规则。</p>
 * @method string getRuleId() 获取<p>转发规则 ID，格式为 rule- 后接 8 位字母数字。</p>
 * @method void setRuleId(string $RuleId) 设置<p>转发规则 ID，格式为 rule- 后接 8 位字母数字。</p>
 * @method array getTargetGroupHealthInfos() 获取<p>目标组健康状态。</p>
 * @method void setTargetGroupHealthInfos(array $TargetGroupHealthInfos) 设置<p>目标组健康状态。</p>
 * @method integer getPriority() 获取<p>优先级，值越小优先级越高，取值范围：1~10000。</p>
 * @method void setPriority(integer $Priority) 设置<p>优先级，值越小优先级越高，取值范围：1~10000。</p>
 */
class RuleHealthStatusInfo extends AbstractModel
{
    /**
     * @var string <p>是否为默认转发规则。</p>
     */
    public $IsDefaultRule;

    /**
     * @var string <p>转发规则 ID，格式为 rule- 后接 8 位字母数字。</p>
     */
    public $RuleId;

    /**
     * @var array <p>目标组健康状态。</p>
     */
    public $TargetGroupHealthInfos;

    /**
     * @var integer <p>优先级，值越小优先级越高，取值范围：1~10000。</p>
     */
    public $Priority;

    /**
     * @param string $IsDefaultRule <p>是否为默认转发规则。</p>
     * @param string $RuleId <p>转发规则 ID，格式为 rule- 后接 8 位字母数字。</p>
     * @param array $TargetGroupHealthInfos <p>目标组健康状态。</p>
     * @param integer $Priority <p>优先级，值越小优先级越高，取值范围：1~10000。</p>
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

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
