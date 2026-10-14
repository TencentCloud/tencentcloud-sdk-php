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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLLMWafDLPRule请求参数结构体
 *
 * @method string getServiceId() 获取<p>服务ID</p>
 * @method void setServiceId(string $ServiceId) 设置<p>服务ID</p>
 * @method array getRuleIds() 获取<p>要修改的规则id列表</p>
 * @method void setRuleIds(array $RuleIds) 设置<p>要修改的规则id列表</p>
 * @method string getRuleAction() 获取<p>动作</p>
 * @method void setRuleAction(string $RuleAction) 设置<p>动作</p>
 * @method integer getStatus() 获取<p>开关</p>
 * @method void setStatus(integer $Status) 设置<p>开关</p>
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method integer getDirection() 获取<p>检测方向：1是入向，2是出向，3是入向和出向都检测</p>
 * @method void setDirection(integer $Direction) 设置<p>检测方向：1是入向，2是出向，3是入向和出向都检测</p>
 */
class ModifyLLMWafDLPRuleRequest extends AbstractModel
{
    /**
     * @var string <p>服务ID</p>
     */
    public $ServiceId;

    /**
     * @var array <p>要修改的规则id列表</p>
     */
    public $RuleIds;

    /**
     * @var string <p>动作</p>
     */
    public $RuleAction;

    /**
     * @var integer <p>开关</p>
     */
    public $Status;

    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>检测方向：1是入向，2是出向，3是入向和出向都检测</p>
     */
    public $Direction;

    /**
     * @param string $ServiceId <p>服务ID</p>
     * @param array $RuleIds <p>要修改的规则id列表</p>
     * @param string $RuleAction <p>动作</p>
     * @param integer $Status <p>开关</p>
     * @param string $InstanceId <p>实例id</p>
     * @param integer $Direction <p>检测方向：1是入向，2是出向，3是入向和出向都检测</p>
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
