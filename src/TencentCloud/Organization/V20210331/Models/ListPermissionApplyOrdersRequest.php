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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListPermissionApplyOrders请求参数结构体
 *
 * @method string getZoneId() 获取<p>空间 ID</p>
 * @method void setZoneId(string $ZoneId) 设置<p>空间 ID</p>
 * @method string getSearchValue() 获取<p>搜索字段</p><p>按用户名 / 用户 ID 搜索</p>
 * @method void setSearchValue(string $SearchValue) 设置<p>搜索字段</p><p>按用户名 / 用户 ID 搜索</p>
 * @method integer getStatus() 获取<p>状态值</p><p>枚举值：</p><ul><li>1： 待审核</li><li>2： 已通过 - 同步中</li><li>3： 已通过 - 同步成功</li><li>4： 已通过 - 同步失败</li><li>5： 已拒绝</li></ul>
 * @method void setStatus(integer $Status) 设置<p>状态值</p><p>枚举值：</p><ul><li>1： 待审核</li><li>2： 已通过 - 同步中</li><li>3： 已通过 - 同步成功</li><li>4： 已通过 - 同步失败</li><li>5： 已拒绝</li></ul>
 * @method integer getMaxResults() 获取<p>每页条数</p><p>取值范围：[1, 100]</p><p>默认值：10</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>每页条数</p><p>取值范围：[1, 100]</p><p>默认值：10</p>
 * @method string getNextToken() 获取<p>翻页游标</p>
 * @method void setNextToken(string $NextToken) 设置<p>翻页游标</p>
 */
class ListPermissionApplyOrdersRequest extends AbstractModel
{
    /**
     * @var string <p>空间 ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>搜索字段</p><p>按用户名 / 用户 ID 搜索</p>
     */
    public $SearchValue;

    /**
     * @var integer <p>状态值</p><p>枚举值：</p><ul><li>1： 待审核</li><li>2： 已通过 - 同步中</li><li>3： 已通过 - 同步成功</li><li>4： 已通过 - 同步失败</li><li>5： 已拒绝</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>每页条数</p><p>取值范围：[1, 100]</p><p>默认值：10</p>
     */
    public $MaxResults;

    /**
     * @var string <p>翻页游标</p>
     */
    public $NextToken;

    /**
     * @param string $ZoneId <p>空间 ID</p>
     * @param string $SearchValue <p>搜索字段</p><p>按用户名 / 用户 ID 搜索</p>
     * @param integer $Status <p>状态值</p><p>枚举值：</p><ul><li>1： 待审核</li><li>2： 已通过 - 同步中</li><li>3： 已通过 - 同步成功</li><li>4： 已通过 - 同步失败</li><li>5： 已拒绝</li></ul>
     * @param integer $MaxResults <p>每页条数</p><p>取值范围：[1, 100]</p><p>默认值：10</p>
     * @param string $NextToken <p>翻页游标</p>
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

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }
    }
}
