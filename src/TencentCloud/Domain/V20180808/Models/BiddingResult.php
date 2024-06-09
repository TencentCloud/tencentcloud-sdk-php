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
 * 我竞价的域名结构体。
 *
 * @method string getBusinessID() 获取business_id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessID(string $BusinessID) 设置business_id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCurrentPrice() 获取当前价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentPrice(integer $CurrentPrice) 设置当前价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurrentNickname() 获取当前用户昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentNickname(string $CurrentNickname) 设置当前用户昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBiddingPrice() 获取我的出价
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBiddingPrice(integer $BiddingPrice) 设置我的出价
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBiddingBondPrice() 获取竞价保证金
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBiddingBondPrice(integer $BiddingBondPrice) 设置竞价保证金
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBiddingEndTime() 获取竞价结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBiddingEndTime(string $BiddingEndTime) 设置竞价结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBiddingFlag() 获取竞价标识，1 领先，2 落后
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBiddingFlag(integer $BiddingFlag) 设置竞价标识，1 领先，2 落后
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBiddingNum() 获取出价次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBiddingNum(integer $BiddingNum) 设置出价次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取1 已预约，2 竞价中，3 支付尾款 4 交割 5 交易失败 6 交易成功，7 已过期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置1 已预约，2 竞价中，3 支付尾款 4 交割 5 交易失败 6 交易成功，7 已过期
注意：此字段可能返回 null，表示取不到有效值。
 */
class BiddingResult extends AbstractModel
{
    /**
     * @var string business_id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessID;

    /**
     * @var string 域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var integer 当前价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentPrice;

    /**
     * @var string 当前用户昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentNickname;

    /**
     * @var integer 我的出价
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BiddingPrice;

    /**
     * @var integer 竞价保证金
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BiddingBondPrice;

    /**
     * @var string 竞价结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BiddingEndTime;

    /**
     * @var integer 竞价标识，1 领先，2 落后
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BiddingFlag;

    /**
     * @var integer 出价次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BiddingNum;

    /**
     * @var integer 1 已预约，2 竞价中，3 支付尾款 4 交割 5 交易失败 6 交易成功，7 已过期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $BusinessID business_id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CurrentPrice 当前价格
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurrentNickname 当前用户昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BiddingPrice 我的出价
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BiddingBondPrice 竞价保证金
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BiddingEndTime 竞价结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BiddingFlag 竞价标识，1 领先，2 落后
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BiddingNum 出价次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 1 已预约，2 竞价中，3 支付尾款 4 交割 5 交易失败 6 交易成功，7 已过期
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
        if (array_key_exists("BusinessID",$param) and $param["BusinessID"] !== null) {
            $this->BusinessID = $param["BusinessID"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CurrentPrice",$param) and $param["CurrentPrice"] !== null) {
            $this->CurrentPrice = $param["CurrentPrice"];
        }

        if (array_key_exists("CurrentNickname",$param) and $param["CurrentNickname"] !== null) {
            $this->CurrentNickname = $param["CurrentNickname"];
        }

        if (array_key_exists("BiddingPrice",$param) and $param["BiddingPrice"] !== null) {
            $this->BiddingPrice = $param["BiddingPrice"];
        }

        if (array_key_exists("BiddingBondPrice",$param) and $param["BiddingBondPrice"] !== null) {
            $this->BiddingBondPrice = $param["BiddingBondPrice"];
        }

        if (array_key_exists("BiddingEndTime",$param) and $param["BiddingEndTime"] !== null) {
            $this->BiddingEndTime = $param["BiddingEndTime"];
        }

        if (array_key_exists("BiddingFlag",$param) and $param["BiddingFlag"] !== null) {
            $this->BiddingFlag = $param["BiddingFlag"];
        }

        if (array_key_exists("BiddingNum",$param) and $param["BiddingNum"] !== null) {
            $this->BiddingNum = $param["BiddingNum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
