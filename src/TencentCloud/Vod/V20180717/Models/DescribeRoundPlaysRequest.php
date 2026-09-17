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
 * DescribeRoundPlays请求参数结构体
 *
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method array getRoundPlayIds() 获取<p>过滤条件：轮播播单标识，数组长度限制：100。</p>
 * @method void setRoundPlayIds(array $RoundPlayIds) 设置<p>过滤条件：轮播播单标识，数组长度限制：100。</p>
 * @method string getStatus() 获取<p>过滤条件，轮播播单状态，可选值： <li>Enabled：启动状态；</li> <li>Disabled：停止状态。</li></p>
 * @method void setStatus(string $Status) 设置<p>过滤条件，轮播播单状态，可选值： <li>Enabled：启动状态；</li> <li>Disabled：停止状态。</li></p>
 * @method TimeRange getCreateTime() 获取<p>过滤条件：轮播播单创建时间。</p>
 * @method void setCreateTime(TimeRange $CreateTime) 设置<p>过滤条件：轮播播单创建时间。</p>
 * @method TimeRange getUpdateTime() 获取<p>过滤条件：轮播播单更新时间。</p>
 * @method void setUpdateTime(TimeRange $UpdateTime) 设置<p>过滤条件：轮播播单更新时间。</p>
 * @method string getScrollToken() 获取<p>翻页标识，分批拉取时使用：当单次请求无法拉取所有数据，接口将会返回 ScrollToken，下一次请求携带该 Token，将会从下一条记录开始获取。</p>
 * @method void setScrollToken(string $ScrollToken) 设置<p>翻页标识，分批拉取时使用：当单次请求无法拉取所有数据，接口将会返回 ScrollToken，下一次请求携带该 Token，将会从下一条记录开始获取。</p>
 * @method integer getOffset() 获取<p>分页偏移量，默认值：0。已经废弃，请根据 ScrollToken 参数进行分批次查询。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，默认值：0。已经废弃，请根据 ScrollToken 参数进行分批次查询。</p>
 * @method integer getLimit() 获取<p>返回记录条数，默认值：10，最大值：100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回记录条数，默认值：10，最大值：100。</p>
 */
class DescribeRoundPlaysRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var array <p>过滤条件：轮播播单标识，数组长度限制：100。</p>
     */
    public $RoundPlayIds;

    /**
     * @var string <p>过滤条件，轮播播单状态，可选值： <li>Enabled：启动状态；</li> <li>Disabled：停止状态。</li></p>
     */
    public $Status;

    /**
     * @var TimeRange <p>过滤条件：轮播播单创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var TimeRange <p>过滤条件：轮播播单更新时间。</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>翻页标识，分批拉取时使用：当单次请求无法拉取所有数据，接口将会返回 ScrollToken，下一次请求携带该 Token，将会从下一条记录开始获取。</p>
     */
    public $ScrollToken;

    /**
     * @var integer <p>分页偏移量，默认值：0。已经废弃，请根据 ScrollToken 参数进行分批次查询。</p>
     * @deprecated
     */
    public $Offset;

    /**
     * @var integer <p>返回记录条数，默认值：10，最大值：100。</p>
     */
    public $Limit;

    /**
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param array $RoundPlayIds <p>过滤条件：轮播播单标识，数组长度限制：100。</p>
     * @param string $Status <p>过滤条件，轮播播单状态，可选值： <li>Enabled：启动状态；</li> <li>Disabled：停止状态。</li></p>
     * @param TimeRange $CreateTime <p>过滤条件：轮播播单创建时间。</p>
     * @param TimeRange $UpdateTime <p>过滤条件：轮播播单更新时间。</p>
     * @param string $ScrollToken <p>翻页标识，分批拉取时使用：当单次请求无法拉取所有数据，接口将会返回 ScrollToken，下一次请求携带该 Token，将会从下一条记录开始获取。</p>
     * @param integer $Offset <p>分页偏移量，默认值：0。已经废弃，请根据 ScrollToken 参数进行分批次查询。</p>
     * @param integer $Limit <p>返回记录条数，默认值：10，最大值：100。</p>
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = new TimeRange();
            $this->CreateTime->deserialize($param["CreateTime"]);
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = new TimeRange();
            $this->UpdateTime->deserialize($param["UpdateTime"]);
        }

        if (array_key_exists("ScrollToken",$param) and $param["ScrollToken"] !== null) {
            $this->ScrollToken = $param["ScrollToken"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
