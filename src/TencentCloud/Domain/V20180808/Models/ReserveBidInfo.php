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
 * 合作商竞价详情
 *
 * @method string getUser() 获取用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPrice() 获取出价
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrice(integer $Price) 设置出价
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBidTime() 获取出价时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBidTime(string $BidTime) 设置出价时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBidStatus() 获取当前状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBidStatus(string $BidStatus) 设置当前状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class ReserveBidInfo extends AbstractModel
{
    /**
     * @var string 用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @var integer 出价
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Price;

    /**
     * @var string 出价时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BidTime;

    /**
     * @var string 当前状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BidStatus;

    /**
     * @param string $User 用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Price 出价
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BidTime 出价时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BidStatus 当前状态
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
        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("BidTime",$param) and $param["BidTime"] !== null) {
            $this->BidTime = $param["BidTime"];
        }

        if (array_key_exists("BidStatus",$param) and $param["BidStatus"] !== null) {
            $this->BidStatus = $param["BidStatus"];
        }
    }
}
