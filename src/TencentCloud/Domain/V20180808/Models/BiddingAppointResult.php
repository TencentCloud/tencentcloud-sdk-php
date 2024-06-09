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
 * 我预定的域名结构体。
 *
 * @method string getBusinessID() 获取business_id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessID(string $BusinessID) 设置business_id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppointPrice() 获取预定价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppointPrice(integer $AppointPrice) 设置预定价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppointBondPrice() 获取预约保证金
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppointBondPrice(integer $AppointBondPrice) 设置预约保证金
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppointEndTime() 获取预约结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppointEndTime(string $AppointEndTime) 设置预约结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppointNum() 获取预约人数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppointNum(integer $AppointNum) 设置预约人数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取 1 已预约，2 竞价中，3 等待出价 4 等待支付 5 失败 6 转移中，7 转移成功 8 持有者索回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置 1 已预约，2 竞价中，3 等待出价 4 等待支付 5 失败 6 转移中，7 转移成功 8 持有者索回
注意：此字段可能返回 null，表示取不到有效值。
 */
class BiddingAppointResult extends AbstractModel
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
     * @var integer 预定价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppointPrice;

    /**
     * @var integer 预约保证金
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppointBondPrice;

    /**
     * @var string 预约结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppointEndTime;

    /**
     * @var integer 预约人数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppointNum;

    /**
     * @var integer  1 已预约，2 竞价中，3 等待出价 4 等待支付 5 失败 6 转移中，7 转移成功 8 持有者索回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $BusinessID business_id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppointPrice 预定价格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppointBondPrice 预约保证金
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppointEndTime 预约结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppointNum 预约人数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status  1 已预约，2 竞价中，3 等待出价 4 等待支付 5 失败 6 转移中，7 转移成功 8 持有者索回
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

        if (array_key_exists("AppointPrice",$param) and $param["AppointPrice"] !== null) {
            $this->AppointPrice = $param["AppointPrice"];
        }

        if (array_key_exists("AppointBondPrice",$param) and $param["AppointBondPrice"] !== null) {
            $this->AppointBondPrice = $param["AppointBondPrice"];
        }

        if (array_key_exists("AppointEndTime",$param) and $param["AppointEndTime"] !== null) {
            $this->AppointEndTime = $param["AppointEndTime"];
        }

        if (array_key_exists("AppointNum",$param) and $param["AppointNum"] !== null) {
            $this->AppointNum = $param["AppointNum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
