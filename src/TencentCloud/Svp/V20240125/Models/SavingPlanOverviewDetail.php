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
namespace TencentCloud\Svp\V20240125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节省计划总览明细数据
 *
 * @method string getSpType() 获取节省计划类型
 * @method void setSpType(string $SpType) 设置节省计划类型
 * @method string getPayAmount() 获取支付金额（单位：元）
 * @method void setPayAmount(string $PayAmount) 设置支付金额（单位：元）
 * @method string getStartTime() 获取开始时间 yyyy-mm-dd HH:mm:ss格式
 * @method void setStartTime(string $StartTime) 设置开始时间 yyyy-mm-dd HH:mm:ss格式
 * @method string getEndTime() 获取结束时间 yyyy-mm-dd HH:mm:ss格式
 * @method void setEndTime(string $EndTime) 设置结束时间 yyyy-mm-dd HH:mm:ss格式
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 * @method string getSavingAmount() 获取累计节省金额（单位：元）
 * @method void setSavingAmount(string $SavingAmount) 设置累计节省金额（单位：元）
 * @method array getRegion() 获取地域
 * @method void setRegion(array $Region) 设置地域
 * @method integer getPayType() 获取支付类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayType(integer $PayType) 设置支付类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBuyTime() 获取购买时间 yyyy-mm-dd HH:mm:ss格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuyTime(string $BuyTime) 设置购买时间 yyyy-mm-dd HH:mm:ss格式
注意：此字段可能返回 null，表示取不到有效值。
 */
class SavingPlanOverviewDetail extends AbstractModel
{
    /**
     * @var string 节省计划类型
     */
    public $SpType;

    /**
     * @var string 支付金额（单位：元）
     */
    public $PayAmount;

    /**
     * @var string 开始时间 yyyy-mm-dd HH:mm:ss格式
     */
    public $StartTime;

    /**
     * @var string 结束时间 yyyy-mm-dd HH:mm:ss格式
     */
    public $EndTime;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @var string 累计节省金额（单位：元）
     */
    public $SavingAmount;

    /**
     * @var array 地域
     */
    public $Region;

    /**
     * @var integer 支付类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayType;

    /**
     * @var string 购买时间 yyyy-mm-dd HH:mm:ss格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuyTime;

    /**
     * @param string $SpType 节省计划类型
     * @param string $PayAmount 支付金额（单位：元）
     * @param string $StartTime 开始时间 yyyy-mm-dd HH:mm:ss格式
     * @param string $EndTime 结束时间 yyyy-mm-dd HH:mm:ss格式
     * @param integer $Status 状态
     * @param string $SavingAmount 累计节省金额（单位：元）
     * @param array $Region 地域
     * @param integer $PayType 支付类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BuyTime 购买时间 yyyy-mm-dd HH:mm:ss格式
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
        if (array_key_exists("SpType",$param) and $param["SpType"] !== null) {
            $this->SpType = $param["SpType"];
        }

        if (array_key_exists("PayAmount",$param) and $param["PayAmount"] !== null) {
            $this->PayAmount = $param["PayAmount"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SavingAmount",$param) and $param["SavingAmount"] !== null) {
            $this->SavingAmount = $param["SavingAmount"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("BuyTime",$param) and $param["BuyTime"] !== null) {
            $this->BuyTime = $param["BuyTime"];
        }
    }
}
