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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGlobalAcceleratorAclPolicies请求参数结构体
 *
 * @method string getGlobalAcceleratorId() 获取<p>全球加速实例ID。</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置<p>全球加速实例ID。</p>
 * @method integer getOffset() 获取<p>偏移量。默认值为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量。默认值为0。</p>
 * @method string getLimit() 获取<p>返回数量，默认值为20，最大值为200。</p>
 * @method void setLimit(string $Limit) 设置<p>返回数量，默认值为20，最大值为200。</p>
 */
class DescribeGlobalAcceleratorAclPoliciesRequest extends AbstractModel
{
    /**
     * @var string <p>全球加速实例ID。</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var integer <p>偏移量。默认值为0。</p>
     */
    public $Offset;

    /**
     * @var string <p>返回数量，默认值为20，最大值为200。</p>
     */
    public $Limit;

    /**
     * @param string $GlobalAcceleratorId <p>全球加速实例ID。</p>
     * @param integer $Offset <p>偏移量。默认值为0。</p>
     * @param string $Limit <p>返回数量，默认值为20，最大值为200。</p>
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
