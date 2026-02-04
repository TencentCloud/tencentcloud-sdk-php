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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTargetGroupList请求参数结构体
 *
 * @method array getTargetGroupIds() 获取<p>目标组ID数组。</p>
 * @method void setTargetGroupIds(array $TargetGroupIds) 设置<p>目标组ID数组。</p>
 * @method array getFilters() 获取<p>过滤条件数组，支持TargetGroupVpcId和TargetGroupName。与TargetGroupIds互斥，优先使用目标组ID。</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件数组，支持TargetGroupVpcId和TargetGroupName。与TargetGroupIds互斥，优先使用目标组ID。</p>
 * @method integer getOffset() 获取<p>显示的偏移起始量。</p>
 * @method void setOffset(integer $Offset) 设置<p>显示的偏移起始量。</p>
 * @method integer getLimit() 获取<p>每页显示条目数。</p><p>取值范围：[0, 100]</p><p>默认值：20</p>
 * @method void setLimit(integer $Limit) 设置<p>每页显示条目数。</p><p>取值范围：[0, 100]</p><p>默认值：20</p>
 */
class DescribeTargetGroupListRequest extends AbstractModel
{
    /**
     * @var array <p>目标组ID数组。</p>
     */
    public $TargetGroupIds;

    /**
     * @var array <p>过滤条件数组，支持TargetGroupVpcId和TargetGroupName。与TargetGroupIds互斥，优先使用目标组ID。</p>
     */
    public $Filters;

    /**
     * @var integer <p>显示的偏移起始量。</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页显示条目数。</p><p>取值范围：[0, 100]</p><p>默认值：20</p>
     */
    public $Limit;

    /**
     * @param array $TargetGroupIds <p>目标组ID数组。</p>
     * @param array $Filters <p>过滤条件数组，支持TargetGroupVpcId和TargetGroupName。与TargetGroupIds互斥，优先使用目标组ID。</p>
     * @param integer $Offset <p>显示的偏移起始量。</p>
     * @param integer $Limit <p>每页显示条目数。</p><p>取值范围：[0, 100]</p><p>默认值：20</p>
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
        if (array_key_exists("TargetGroupIds",$param) and $param["TargetGroupIds"] !== null) {
            $this->TargetGroupIds = $param["TargetGroupIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
