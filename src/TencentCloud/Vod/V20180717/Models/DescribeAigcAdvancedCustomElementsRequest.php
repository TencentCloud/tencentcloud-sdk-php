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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAigcAdvancedCustomElements请求参数结构体
 *
 * @method integer getSubAppId() 获取<p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method integer getOffset() 获取<p>分页返回的起始偏移量。将返回第 Offset 到第 Offset+Limit-1 条。</p><p>默认值：0</p><p>Offset 必须是 Limit 的整数倍。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页返回的起始偏移量。将返回第 Offset 到第 Offset+Limit-1 条。</p><p>默认值：0</p><p>Offset 必须是 Limit 的整数倍。</p>
 * @method integer getLimit() 获取<p>分页返回的记录条数。</p><p>取值范围：[1, 300]</p><p>默认值：10</p><p>Offset 必须是 Limit 的整数倍。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页返回的记录条数。</p><p>取值范围：[1, 300]</p><p>默认值：10</p><p>Offset 必须是 Limit 的整数倍。</p>
 */
class DescribeAigcAdvancedCustomElementsRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var integer <p>分页返回的起始偏移量。将返回第 Offset 到第 Offset+Limit-1 条。</p><p>默认值：0</p><p>Offset 必须是 Limit 的整数倍。</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页返回的记录条数。</p><p>取值范围：[1, 300]</p><p>默认值：10</p><p>Offset 必须是 Limit 的整数倍。</p>
     */
    public $Limit;

    /**
     * @param integer $SubAppId <p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param integer $Offset <p>分页返回的起始偏移量。将返回第 Offset 到第 Offset+Limit-1 条。</p><p>默认值：0</p><p>Offset 必须是 Limit 的整数倍。</p>
     * @param integer $Limit <p>分页返回的记录条数。</p><p>取值范围：[1, 300]</p><p>默认值：10</p><p>Offset 必须是 Limit 的整数倍。</p>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
