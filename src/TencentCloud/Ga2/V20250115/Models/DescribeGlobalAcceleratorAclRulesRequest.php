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
 * DescribeGlobalAcceleratorAclRules请求参数结构体
 *
 * @method string getGlobalAcceleratorAclPolicyId() 获取<p>访问控制策略ID。</p>
 * @method void setGlobalAcceleratorAclPolicyId(string $GlobalAcceleratorAclPolicyId) 设置<p>访问控制策略ID。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。</p>
 * @method integer getLimit() 获取<p>返回数量。</p><p>取值范围：[1, 200]</p><p>默认值：20</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量。</p><p>取值范围：[1, 200]</p><p>默认值：20</p>
 */
class DescribeGlobalAcceleratorAclRulesRequest extends AbstractModel
{
    /**
     * @var string <p>访问控制策略ID。</p>
     */
    public $GlobalAcceleratorAclPolicyId;

    /**
     * @var integer <p>偏移量，默认为0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量。</p><p>取值范围：[1, 200]</p><p>默认值：20</p>
     */
    public $Limit;

    /**
     * @param string $GlobalAcceleratorAclPolicyId <p>访问控制策略ID。</p>
     * @param integer $Offset <p>偏移量，默认为0。</p>
     * @param integer $Limit <p>返回数量。</p><p>取值范围：[1, 200]</p><p>默认值：20</p>
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
        if (array_key_exists("GlobalAcceleratorAclPolicyId",$param) and $param["GlobalAcceleratorAclPolicyId"] !== null) {
            $this->GlobalAcceleratorAclPolicyId = $param["GlobalAcceleratorAclPolicyId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
