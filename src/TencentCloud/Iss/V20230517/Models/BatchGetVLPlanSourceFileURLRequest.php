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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchGetVLPlanSourceFileURL请求参数结构体
 *
 * @method array getVLPlanResultIds() 获取<p>分析结果 ID 列表，最多 200 个</p>
 * @method void setVLPlanResultIds(array $VLPlanResultIds) 设置<p>分析结果 ID 列表，最多 200 个</p>
 * @method integer getExpire() 获取<p>URL 有效期（秒），范围 [60, 86400]，默认 600</p>
 * @method void setExpire(integer $Expire) 设置<p>URL 有效期（秒），范围 [60, 86400]，默认 600</p>
 */
class BatchGetVLPlanSourceFileURLRequest extends AbstractModel
{
    /**
     * @var array <p>分析结果 ID 列表，最多 200 个</p>
     */
    public $VLPlanResultIds;

    /**
     * @var integer <p>URL 有效期（秒），范围 [60, 86400]，默认 600</p>
     */
    public $Expire;

    /**
     * @param array $VLPlanResultIds <p>分析结果 ID 列表，最多 200 个</p>
     * @param integer $Expire <p>URL 有效期（秒），范围 [60, 86400]，默认 600</p>
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
        if (array_key_exists("VLPlanResultIds",$param) and $param["VLPlanResultIds"] !== null) {
            $this->VLPlanResultIds = $param["VLPlanResultIds"];
        }

        if (array_key_exists("Expire",$param) and $param["Expire"] !== null) {
            $this->Expire = $param["Expire"];
        }
    }
}
