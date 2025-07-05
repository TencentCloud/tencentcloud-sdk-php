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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScanBaseline请求参数结构体
 *
 * @method array getStrategyIdList() 获取策略id数组(StrategyIdList与CategoryIdList和RuleIdList三选一)
 * @method void setStrategyIdList(array $StrategyIdList) 设置策略id数组(StrategyIdList与CategoryIdList和RuleIdList三选一)
 * @method array getCategoryIdList() 获取基线id数组(StrategyIdList与CategoryIdList和RuleIdList三选一)
 * @method void setCategoryIdList(array $CategoryIdList) 设置基线id数组(StrategyIdList与CategoryIdList和RuleIdList三选一)
 * @method array getRuleIdList() 获取检测项id数组(StrategyIdList与CategoryIdList和RuleIdList三选一)
 * @method void setRuleIdList(array $RuleIdList) 设置检测项id数组(StrategyIdList与CategoryIdList和RuleIdList三选一)
 * @method array getQuuidList() 获取选择StrategyIdList时，不需要填写，其他情况必填
 * @method void setQuuidList(array $QuuidList) 设置选择StrategyIdList时，不需要填写，其他情况必填
 * @method array getUuidList() 获取主机Uuid数组
 * @method void setUuidList(array $UuidList) 设置主机Uuid数组
 */
class ScanBaselineRequest extends AbstractModel
{
    /**
     * @var array 策略id数组(StrategyIdList与CategoryIdList和RuleIdList三选一)
     */
    public $StrategyIdList;

    /**
     * @var array 基线id数组(StrategyIdList与CategoryIdList和RuleIdList三选一)
     */
    public $CategoryIdList;

    /**
     * @var array 检测项id数组(StrategyIdList与CategoryIdList和RuleIdList三选一)
     */
    public $RuleIdList;

    /**
     * @var array 选择StrategyIdList时，不需要填写，其他情况必填
     */
    public $QuuidList;

    /**
     * @var array 主机Uuid数组
     */
    public $UuidList;

    /**
     * @param array $StrategyIdList 策略id数组(StrategyIdList与CategoryIdList和RuleIdList三选一)
     * @param array $CategoryIdList 基线id数组(StrategyIdList与CategoryIdList和RuleIdList三选一)
     * @param array $RuleIdList 检测项id数组(StrategyIdList与CategoryIdList和RuleIdList三选一)
     * @param array $QuuidList 选择StrategyIdList时，不需要填写，其他情况必填
     * @param array $UuidList 主机Uuid数组
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
        if (array_key_exists("StrategyIdList",$param) and $param["StrategyIdList"] !== null) {
            $this->StrategyIdList = $param["StrategyIdList"];
        }

        if (array_key_exists("CategoryIdList",$param) and $param["CategoryIdList"] !== null) {
            $this->CategoryIdList = $param["CategoryIdList"];
        }

        if (array_key_exists("RuleIdList",$param) and $param["RuleIdList"] !== null) {
            $this->RuleIdList = $param["RuleIdList"];
        }

        if (array_key_exists("QuuidList",$param) and $param["QuuidList"] !== null) {
            $this->QuuidList = $param["QuuidList"];
        }

        if (array_key_exists("UuidList",$param) and $param["UuidList"] !== null) {
            $this->UuidList = $param["UuidList"];
        }
    }
}
