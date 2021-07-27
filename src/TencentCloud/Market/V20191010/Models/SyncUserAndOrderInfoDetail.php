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
namespace TencentCloud\Market\V20191010\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 同步用户信息订单信息详情
 *
 * @method integer getTotalCount() 获取腾讯云订单总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置腾讯云订单总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMarketOrders() 获取腾讯云订单列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMarketOrders(array $MarketOrders) 设置腾讯云订单列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取腾讯云用户Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置腾讯云用户Uin
注意：此字段可能返回 null，表示取不到有效值。
 */
class SyncUserAndOrderInfoDetail extends AbstractModel
{
    /**
     * @var integer 腾讯云订单总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var array 腾讯云订单列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MarketOrders;

    /**
     * @var string 腾讯云用户Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @param integer $TotalCount 腾讯云订单总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MarketOrders 腾讯云订单列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 腾讯云用户Uin
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("MarketOrders",$param) and $param["MarketOrders"] !== null) {
            $this->MarketOrders = $param["MarketOrders"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }
    }
}
