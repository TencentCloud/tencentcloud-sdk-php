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
 * 边缘推理定时伸缩有效期范围配置。
 *
 * @method string getEffectiveType() 获取<p>有效期类型。取值有：<li>LongTerm：长期有效；</li><li>Custom：自定义起止日期。</li></p>
 * @method void setEffectiveType(string $EffectiveType) 设置<p>有效期类型。取值有：<li>LongTerm：长期有效；</li><li>Custom：自定义起止日期。</li></p>
 * @method string getStartDate() 获取<p>有效期起始日期。当 EffectiveType 为 Custom 时必填；当 EffectiveType 为 LongTerm 时不传该字段。</p>
 * @method void setStartDate(string $StartDate) 设置<p>有效期起始日期。当 EffectiveType 为 Custom 时必填；当 EffectiveType 为 LongTerm 时不传该字段。</p>
 * @method string getEndDate() 获取<p>有效期终止日期。当 EffectiveType 为 Custom 时必填，且不得早于 StartDate；当 EffectiveType 为 LongTerm 时不传该字段。</p>
 * @method void setEndDate(string $EndDate) 设置<p>有效期终止日期。当 EffectiveType 为 Custom 时必填，且不得早于 StartDate；当 EffectiveType 为 LongTerm 时不传该字段。</p>
 */
class InferenceScheduledScalingEffectiveRange extends AbstractModel
{
    /**
     * @var string <p>有效期类型。取值有：<li>LongTerm：长期有效；</li><li>Custom：自定义起止日期。</li></p>
     */
    public $EffectiveType;

    /**
     * @var string <p>有效期起始日期。当 EffectiveType 为 Custom 时必填；当 EffectiveType 为 LongTerm 时不传该字段。</p>
     */
    public $StartDate;

    /**
     * @var string <p>有效期终止日期。当 EffectiveType 为 Custom 时必填，且不得早于 StartDate；当 EffectiveType 为 LongTerm 时不传该字段。</p>
     */
    public $EndDate;

    /**
     * @param string $EffectiveType <p>有效期类型。取值有：<li>LongTerm：长期有效；</li><li>Custom：自定义起止日期。</li></p>
     * @param string $StartDate <p>有效期起始日期。当 EffectiveType 为 Custom 时必填；当 EffectiveType 为 LongTerm 时不传该字段。</p>
     * @param string $EndDate <p>有效期终止日期。当 EffectiveType 为 Custom 时必填，且不得早于 StartDate；当 EffectiveType 为 LongTerm 时不传该字段。</p>
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
        if (array_key_exists("EffectiveType",$param) and $param["EffectiveType"] !== null) {
            $this->EffectiveType = $param["EffectiveType"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }
    }
}
