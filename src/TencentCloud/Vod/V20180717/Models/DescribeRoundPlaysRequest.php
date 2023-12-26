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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRoundPlays请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method array getRoundPlayIds() 获取轮播播单标识过滤条件，数组长度限制：100。
 * @method void setRoundPlayIds(array $RoundPlayIds) 设置轮播播单标识过滤条件，数组长度限制：100。
 * @method integer getOffset() 获取分页偏移量，默认值：0。
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认值：0。
 * @method integer getLimit() 获取返回记录条数，默认值：10，最大值：100。
 * @method void setLimit(integer $Limit) 设置返回记录条数，默认值：10，最大值：100。
 */
class DescribeRoundPlaysRequest extends AbstractModel
{
    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var array 轮播播单标识过滤条件，数组长度限制：100。
     */
    public $RoundPlayIds;

    /**
     * @var integer 分页偏移量，默认值：0。
     */
    public $Offset;

    /**
     * @var integer 返回记录条数，默认值：10，最大值：100。
     */
    public $Limit;

    /**
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param array $RoundPlayIds 轮播播单标识过滤条件，数组长度限制：100。
     * @param integer $Offset 分页偏移量，默认值：0。
     * @param integer $Limit 返回记录条数，默认值：10，最大值：100。
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

        if (array_key_exists("RoundPlayIds",$param) and $param["RoundPlayIds"] !== null) {
            $this->RoundPlayIds = $param["RoundPlayIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
