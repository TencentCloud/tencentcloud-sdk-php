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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预释放竞价列表
 *
 * @method string getDomain() 获取域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBiddingTime() 获取竞价倒计时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBiddingTime(string $BiddingTime) 设置竞价倒计时
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBidCount() 获取出价次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBidCount(integer $BidCount) 设置出价次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getPrice() 获取当前价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrice(float $Price) 设置当前价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOp() 获取用户操作 bid：出价 "noAction"：无法操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOp(string $Op) 设置用户操作 bid：出价 "noAction"：无法操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessId() 获取业务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessId(string $BusinessId) 设置业务ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class PreAuctionInfo extends AbstractModel
{
    /**
     * @var string 域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var string 竞价倒计时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BiddingTime;

    /**
     * @var integer 出价次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BidCount;

    /**
     * @var float 当前价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Price;

    /**
     * @var string 用户操作 bid：出价 "noAction"：无法操作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Op;

    /**
     * @var string 业务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessId;

    /**
     * @param string $Domain 域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BiddingTime 竞价倒计时
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BidCount 出价次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Price 当前价格
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Op 用户操作 bid：出价 "noAction"：无法操作
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessId 业务ID
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("BiddingTime",$param) and $param["BiddingTime"] !== null) {
            $this->BiddingTime = $param["BiddingTime"];
        }

        if (array_key_exists("BidCount",$param) and $param["BidCount"] !== null) {
            $this->BidCount = $param["BidCount"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("Op",$param) and $param["Op"] !== null) {
            $this->Op = $param["Op"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }
    }
}
