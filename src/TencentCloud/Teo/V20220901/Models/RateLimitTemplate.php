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
 * 速率限制模板
 *
 * @method string getMode() 获取模板等级名称，取值有：
<li>sup_loose：超级宽松；</li>
<li>loose：宽松；</li>
<li>emergency：紧急；</li>
<li>normal：适中；</li>
<li>strict：严格；</li>
<li>close：关闭，仅精准速率限制生效。</li>
 * @method void setMode(string $Mode) 设置模板等级名称，取值有：
<li>sup_loose：超级宽松；</li>
<li>loose：宽松；</li>
<li>emergency：紧急；</li>
<li>normal：适中；</li>
<li>strict：严格；</li>
<li>close：关闭，仅精准速率限制生效。</li>
 * @method string getAction() 获取模板处置方式，取值有：
<li>alg：JavaScript挑战；</li>
<li>monitor：观察。</li>不填写默认取alg。
 * @method void setAction(string $Action) 设置模板处置方式，取值有：
<li>alg：JavaScript挑战；</li>
<li>monitor：观察。</li>不填写默认取alg。
 * @method RateLimitTemplateDetail getRateLimitTemplateDetail() 获取模板值详情。仅出参返回。
 * @method void setRateLimitTemplateDetail(RateLimitTemplateDetail $RateLimitTemplateDetail) 设置模板值详情。仅出参返回。
 */
class RateLimitTemplate extends AbstractModel
{
    /**
     * @var string 模板等级名称，取值有：
<li>sup_loose：超级宽松；</li>
<li>loose：宽松；</li>
<li>emergency：紧急；</li>
<li>normal：适中；</li>
<li>strict：严格；</li>
<li>close：关闭，仅精准速率限制生效。</li>
     */
    public $Mode;

    /**
     * @var string 模板处置方式，取值有：
<li>alg：JavaScript挑战；</li>
<li>monitor：观察。</li>不填写默认取alg。
     */
    public $Action;

    /**
     * @var RateLimitTemplateDetail 模板值详情。仅出参返回。
     */
    public $RateLimitTemplateDetail;

    /**
     * @param string $Mode 模板等级名称，取值有：
<li>sup_loose：超级宽松；</li>
<li>loose：宽松；</li>
<li>emergency：紧急；</li>
<li>normal：适中；</li>
<li>strict：严格；</li>
<li>close：关闭，仅精准速率限制生效。</li>
     * @param string $Action 模板处置方式，取值有：
<li>alg：JavaScript挑战；</li>
<li>monitor：观察。</li>不填写默认取alg。
     * @param RateLimitTemplateDetail $RateLimitTemplateDetail 模板值详情。仅出参返回。
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RateLimitTemplateDetail",$param) and $param["RateLimitTemplateDetail"] !== null) {
            $this->RateLimitTemplateDetail = new RateLimitTemplateDetail();
            $this->RateLimitTemplateDetail->deserialize($param["RateLimitTemplateDetail"]);
        }
    }
}
