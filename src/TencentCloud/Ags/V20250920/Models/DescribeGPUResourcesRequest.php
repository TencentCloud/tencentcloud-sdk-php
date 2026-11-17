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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGPUResources请求参数结构体
 *
 * @method string getResourceGroupId() 获取<p>按资源组 ID 过滤，可省略，最多 64 字节。</p>
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>按资源组 ID 过滤，可省略，最多 64 字节。</p>
 * @method array getResourceIds() 获取<p>按GPU资源 ID 过滤，最多 500 个，每个为非空字符串且最多 64 字节；值之间为 OR，与其他条件为 AND。</p>
 * @method void setResourceIds(array $ResourceIds) 设置<p>按GPU资源 ID 过滤，最多 500 个，每个为非空字符串且最多 64 字节；值之间为 OR，与其他条件为 AND。</p>
 * @method string getState() 获取<p>按GPU状态过滤，可省略。大小写敏感：Delivering、Active、Isolated、Destroying。</p>
 * @method void setState(string $State) 设置<p>按GPU状态过滤，可省略。大小写敏感：Delivering、Active、Isolated、Destroying。</p>
 * @method string getAllocationState() 获取<p>按占用状态过滤，可省略。大小写敏感：Idle、Allocating、InUse、Returning、Unavailable。</p>
 * @method void setAllocationState(string $AllocationState) 设置<p>按占用状态过滤，可省略。大小写敏感：Idle、Allocating、InUse、Returning、Unavailable。</p>
 * @method integer getOffset() 获取<p>分页偏移量，默认为 0，必须大于等于 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，默认为 0，必须大于等于 0。</p>
 * @method integer getLimit() 获取<p>每页条数，省略或传 0 时取 100；非零取值范围 1–500。</p>
 * @method void setLimit(integer $Limit) 设置<p>每页条数，省略或传 0 时取 100；非零取值范围 1–500。</p>
 */
class DescribeGPUResourcesRequest extends AbstractModel
{
    /**
     * @var string <p>按资源组 ID 过滤，可省略，最多 64 字节。</p>
     */
    public $ResourceGroupId;

    /**
     * @var array <p>按GPU资源 ID 过滤，最多 500 个，每个为非空字符串且最多 64 字节；值之间为 OR，与其他条件为 AND。</p>
     */
    public $ResourceIds;

    /**
     * @var string <p>按GPU状态过滤，可省略。大小写敏感：Delivering、Active、Isolated、Destroying。</p>
     */
    public $State;

    /**
     * @var string <p>按占用状态过滤，可省略。大小写敏感：Idle、Allocating、InUse、Returning、Unavailable。</p>
     */
    public $AllocationState;

    /**
     * @var integer <p>分页偏移量，默认为 0，必须大于等于 0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页条数，省略或传 0 时取 100；非零取值范围 1–500。</p>
     */
    public $Limit;

    /**
     * @param string $ResourceGroupId <p>按资源组 ID 过滤，可省略，最多 64 字节。</p>
     * @param array $ResourceIds <p>按GPU资源 ID 过滤，最多 500 个，每个为非空字符串且最多 64 字节；值之间为 OR，与其他条件为 AND。</p>
     * @param string $State <p>按GPU状态过滤，可省略。大小写敏感：Delivering、Active、Isolated、Destroying。</p>
     * @param string $AllocationState <p>按占用状态过滤，可省略。大小写敏感：Idle、Allocating、InUse、Returning、Unavailable。</p>
     * @param integer $Offset <p>分页偏移量，默认为 0，必须大于等于 0。</p>
     * @param integer $Limit <p>每页条数，省略或传 0 时取 100；非零取值范围 1–500。</p>
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
        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AllocationState",$param) and $param["AllocationState"] !== null) {
            $this->AllocationState = $param["AllocationState"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
