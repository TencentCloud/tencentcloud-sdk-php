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
 * 订单价格详情
 *
 * @method string getDealName() 获取子订单号
 * @method void setDealName(string $DealName) 设置子订单号
 * @method string getOwnerUin() 获取订单归属人uin（代客uin）
 * @method void setOwnerUin(string $OwnerUin) 设置订单归属人uin（代客uin）
 * @method array getSubProductPriceDetail() 获取子产品价格详情列表
 * @method void setSubProductPriceDetail(array $SubProductPriceDetail) 设置子产品价格详情列表
 */
class DealPriceDetail extends AbstractModel
{
    /**
     * @var string 子订单号
     */
    public $DealName;

    /**
     * @var string 订单归属人uin（代客uin）
     */
    public $OwnerUin;

    /**
     * @var array 子产品价格详情列表
     */
    public $SubProductPriceDetail;

    /**
     * @param string $DealName 子订单号
     * @param string $OwnerUin 订单归属人uin（代客uin）
     * @param array $SubProductPriceDetail 子产品价格详情列表
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
        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("SubProductPriceDetail",$param) and $param["SubProductPriceDetail"] !== null) {
            $this->SubProductPriceDetail = [];
            foreach ($param["SubProductPriceDetail"] as $key => $value){
                $obj = new SubProductPriceDetail();
                $obj->deserialize($value);
                array_push($this->SubProductPriceDetail, $obj);
            }
        }
    }
}
