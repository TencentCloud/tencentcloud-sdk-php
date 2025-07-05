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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IncreasePlanQuota请求参数结构体
 *
 * @method string getPlanId() 获取套餐 ID, 形如 edgeone-2unuvzjmmn2q。
 * @method void setPlanId(string $PlanId) 设置套餐 ID, 形如 edgeone-2unuvzjmmn2q。
 * @method string getQuotaType() 获取新增的套餐配额类型，取值有：<li> site：站点数；</li><li> precise_access_control_rule：Web 防护 - 自定义规则 - 精准匹配策略的规则配额；</li><li> rate_limiting_rule：Web 防护 - 速率限制 - 精准速率限制模块的规则配额。</li>
 * @method void setQuotaType(string $QuotaType) 设置新增的套餐配额类型，取值有：<li> site：站点数；</li><li> precise_access_control_rule：Web 防护 - 自定义规则 - 精准匹配策略的规则配额；</li><li> rate_limiting_rule：Web 防护 - 速率限制 - 精准速率限制模块的规则配额。</li>
 * @method integer getQuotaNumber() 获取新增的配额个数。单次新增的配额个数上限为 100。
 * @method void setQuotaNumber(integer $QuotaNumber) 设置新增的配额个数。单次新增的配额个数上限为 100。
 */
class IncreasePlanQuotaRequest extends AbstractModel
{
    /**
     * @var string 套餐 ID, 形如 edgeone-2unuvzjmmn2q。
     */
    public $PlanId;

    /**
     * @var string 新增的套餐配额类型，取值有：<li> site：站点数；</li><li> precise_access_control_rule：Web 防护 - 自定义规则 - 精准匹配策略的规则配额；</li><li> rate_limiting_rule：Web 防护 - 速率限制 - 精准速率限制模块的规则配额。</li>
     */
    public $QuotaType;

    /**
     * @var integer 新增的配额个数。单次新增的配额个数上限为 100。
     */
    public $QuotaNumber;

    /**
     * @param string $PlanId 套餐 ID, 形如 edgeone-2unuvzjmmn2q。
     * @param string $QuotaType 新增的套餐配额类型，取值有：<li> site：站点数；</li><li> precise_access_control_rule：Web 防护 - 自定义规则 - 精准匹配策略的规则配额；</li><li> rate_limiting_rule：Web 防护 - 速率限制 - 精准速率限制模块的规则配额。</li>
     * @param integer $QuotaNumber 新增的配额个数。单次新增的配额个数上限为 100。
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("QuotaNumber",$param) and $param["QuotaNumber"] !== null) {
            $this->QuotaNumber = $param["QuotaNumber"];
        }
    }
}
