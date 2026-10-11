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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户组脱敏规则，描述某个用户组对应的脱敏方法
 *
 * @method string getGroupId() 获取工作组 ID，对应 WeData 用户组 ID，必填，字符串类型。示例值："17738042827013749"
 * @method void setGroupId(string $GroupId) 设置工作组 ID，对应 WeData 用户组 ID，必填，字符串类型。示例值："17738042827013749"
 * @method string getStrategyType() 获取脱敏方法（策略类型），必填，直接透传给 DLC。合法值：MASK_SHOW_FIRST_4（保留前四个字符）、MASK_SHOW_LAST_4（保留后四个字符）、MASK_HASH（哈希脱敏）、MASK_DATE_SHOW_YEAR（日期脱敏保留年份）、MASK_NULL（置为 NULL）、MASK_DEFAULT（默认值脱敏）
 * @method void setStrategyType(string $StrategyType) 设置脱敏方法（策略类型），必填，直接透传给 DLC。合法值：MASK_SHOW_FIRST_4（保留前四个字符）、MASK_SHOW_LAST_4（保留后四个字符）、MASK_HASH（哈希脱敏）、MASK_DATE_SHOW_YEAR（日期脱敏保留年份）、MASK_NULL（置为 NULL）、MASK_DEFAULT（默认值脱敏）
 * @method string getGroupName() 获取用户组名称
 * @method void setGroupName(string $GroupName) 设置用户组名称
 */
class DataMaskGroup extends AbstractModel
{
    /**
     * @var string 工作组 ID，对应 WeData 用户组 ID，必填，字符串类型。示例值："17738042827013749"
     */
    public $GroupId;

    /**
     * @var string 脱敏方法（策略类型），必填，直接透传给 DLC。合法值：MASK_SHOW_FIRST_4（保留前四个字符）、MASK_SHOW_LAST_4（保留后四个字符）、MASK_HASH（哈希脱敏）、MASK_DATE_SHOW_YEAR（日期脱敏保留年份）、MASK_NULL（置为 NULL）、MASK_DEFAULT（默认值脱敏）
     */
    public $StrategyType;

    /**
     * @var string 用户组名称
     */
    public $GroupName;

    /**
     * @param string $GroupId 工作组 ID，对应 WeData 用户组 ID，必填，字符串类型。示例值："17738042827013749"
     * @param string $StrategyType 脱敏方法（策略类型），必填，直接透传给 DLC。合法值：MASK_SHOW_FIRST_4（保留前四个字符）、MASK_SHOW_LAST_4（保留后四个字符）、MASK_HASH（哈希脱敏）、MASK_DATE_SHOW_YEAR（日期脱敏保留年份）、MASK_NULL（置为 NULL）、MASK_DEFAULT（默认值脱敏）
     * @param string $GroupName 用户组名称
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }
    }
}
