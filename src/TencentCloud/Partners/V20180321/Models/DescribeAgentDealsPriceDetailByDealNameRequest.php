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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentDealsPriceDetailByDealName请求参数结构体
 *
 * @method integer getDealCreatYear() 获取下单年份（订单创建时间归属年份）
 * @method void setDealCreatYear(integer $DealCreatYear) 设置下单年份（订单创建时间归属年份）
 * @method array getDealNames() 获取子订单号，每个请求最多查询100条
 * @method void setDealNames(array $DealNames) 设置子订单号，每个请求最多查询100条
 * @method string getOwnerUin() 获取订单归属代客uin
 * @method void setOwnerUin(string $OwnerUin) 设置订单归属代客uin
 */
class DescribeAgentDealsPriceDetailByDealNameRequest extends AbstractModel
{
    /**
     * @var integer 下单年份（订单创建时间归属年份）
     */
    public $DealCreatYear;

    /**
     * @var array 子订单号，每个请求最多查询100条
     */
    public $DealNames;

    /**
     * @var string 订单归属代客uin
     */
    public $OwnerUin;

    /**
     * @param integer $DealCreatYear 下单年份（订单创建时间归属年份）
     * @param array $DealNames 子订单号，每个请求最多查询100条
     * @param string $OwnerUin 订单归属代客uin
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
        if (array_key_exists("DealCreatYear",$param) and $param["DealCreatYear"] !== null) {
            $this->DealCreatYear = $param["DealCreatYear"];
        }

        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }
    }
}
