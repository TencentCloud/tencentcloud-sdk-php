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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配额规则中，某资源对象的指定子资源信息。如资源对象“模型服务”的“指定模型服务”的信息。当Scope=Specified 必填（1~50 项，msvc_id 不重复，QuotaLimit>0）；Scope=All 必须为空。
 *
 * @method string getSubResourceId() 获取<p>子资源 ID（如：模型服务 ID）</p>
 * @method void setSubResourceId(string $SubResourceId) 设置<p>子资源 ID（如：模型服务 ID）</p>
 * @method integer getQuotaLimit() 获取<p>该子资源独立配额上限，必须 &gt; 0；单位与 QuotaType 对齐（Cost=元 TotalToken=tokens RequestCount=次）</p>
 * @method void setQuotaLimit(integer $QuotaLimit) 设置<p>该子资源独立配额上限，必须 &gt; 0；单位与 QuotaType 对齐（Cost=元 TotalToken=tokens RequestCount=次）</p>
 */
class AIGWQuotaSubItem extends AbstractModel
{
    /**
     * @var string <p>子资源 ID（如：模型服务 ID）</p>
     */
    public $SubResourceId;

    /**
     * @var integer <p>该子资源独立配额上限，必须 &gt; 0；单位与 QuotaType 对齐（Cost=元 TotalToken=tokens RequestCount=次）</p>
     */
    public $QuotaLimit;

    /**
     * @param string $SubResourceId <p>子资源 ID（如：模型服务 ID）</p>
     * @param integer $QuotaLimit <p>该子资源独立配额上限，必须 &gt; 0；单位与 QuotaType 对齐（Cost=元 TotalToken=tokens RequestCount=次）</p>
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
        if (array_key_exists("SubResourceId",$param) and $param["SubResourceId"] !== null) {
            $this->SubResourceId = $param["SubResourceId"];
        }

        if (array_key_exists("QuotaLimit",$param) and $param["QuotaLimit"] !== null) {
            $this->QuotaLimit = $param["QuotaLimit"];
        }
    }
}
