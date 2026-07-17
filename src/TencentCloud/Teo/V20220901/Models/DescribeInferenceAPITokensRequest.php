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
 * DescribeInferenceAPITokens请求参数结构体
 *
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method integer getOffset() 获取<p>分页查询偏移量。默认值：0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页查询偏移量。默认值：0。</p>
 * @method integer getLimit() 获取<p>分页查询限制数目。默认值：20，最大值：100。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页查询限制数目。默认值：20，最大值：100。</p>
 */
class DescribeInferenceAPITokensRequest extends AbstractModel
{
    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>分页查询偏移量。默认值：0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页查询限制数目。默认值：20，最大值：100。</p>
     */
    public $Limit;

    /**
     * @param string $ZoneId <p>站点 ID。</p>
     * @param integer $Offset <p>分页查询偏移量。默认值：0。</p>
     * @param integer $Limit <p>分页查询限制数目。默认值：20，最大值：100。</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
