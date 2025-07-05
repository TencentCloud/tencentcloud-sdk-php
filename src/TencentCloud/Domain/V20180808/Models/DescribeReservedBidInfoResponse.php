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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReservedBidInfo返回参数结构体
 *
 * @method integer getUpPrice() 获取竞价领先价格
 * @method void setUpPrice(integer $UpPrice) 设置竞价领先价格
 * @method integer getPrice() 获取请求用户当前价格
 * @method void setPrice(integer $Price) 设置请求用户当前价格
 * @method string getUpUser() 获取领先用户
 * @method void setUpUser(string $UpUser) 设置领先用户
 * @method array getBidList() 获取竞价详细数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBidList(array $BidList) 设置竞价详细数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBidEndTime() 获取竞价结束时间
 * @method void setBidEndTime(string $BidEndTime) 设置竞价结束时间
 * @method boolean getIsUp() 获取是否领先
 * @method void setIsUp(boolean $IsUp) 设置是否领先
 * @method integer getNextPrice() 获取下次出价金额
 * @method void setNextPrice(integer $NextPrice) 设置下次出价金额
 * @method integer getStatus() 获取状态：1. 等待竞价 2.竞价中 3.竞价结束
 * @method void setStatus(integer $Status) 设置状态：1. 等待竞价 2.竞价中 3.竞价结束
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeReservedBidInfoResponse extends AbstractModel
{
    /**
     * @var integer 竞价领先价格
     */
    public $UpPrice;

    /**
     * @var integer 请求用户当前价格
     */
    public $Price;

    /**
     * @var string 领先用户
     */
    public $UpUser;

    /**
     * @var array 竞价详细数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BidList;

    /**
     * @var string 竞价结束时间
     */
    public $BidEndTime;

    /**
     * @var boolean 是否领先
     */
    public $IsUp;

    /**
     * @var integer 下次出价金额
     */
    public $NextPrice;

    /**
     * @var integer 状态：1. 等待竞价 2.竞价中 3.竞价结束
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $UpPrice 竞价领先价格
     * @param integer $Price 请求用户当前价格
     * @param string $UpUser 领先用户
     * @param array $BidList 竞价详细数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BidEndTime 竞价结束时间
     * @param boolean $IsUp 是否领先
     * @param integer $NextPrice 下次出价金额
     * @param integer $Status 状态：1. 等待竞价 2.竞价中 3.竞价结束
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("UpPrice",$param) and $param["UpPrice"] !== null) {
            $this->UpPrice = $param["UpPrice"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("UpUser",$param) and $param["UpUser"] !== null) {
            $this->UpUser = $param["UpUser"];
        }

        if (array_key_exists("BidList",$param) and $param["BidList"] !== null) {
            $this->BidList = [];
            foreach ($param["BidList"] as $key => $value){
                $obj = new ReserveBidInfo();
                $obj->deserialize($value);
                array_push($this->BidList, $obj);
            }
        }

        if (array_key_exists("BidEndTime",$param) and $param["BidEndTime"] !== null) {
            $this->BidEndTime = $param["BidEndTime"];
        }

        if (array_key_exists("IsUp",$param) and $param["IsUp"] !== null) {
            $this->IsUp = $param["IsUp"];
        }

        if (array_key_exists("NextPrice",$param) and $param["NextPrice"] !== null) {
            $this->NextPrice = $param["NextPrice"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
