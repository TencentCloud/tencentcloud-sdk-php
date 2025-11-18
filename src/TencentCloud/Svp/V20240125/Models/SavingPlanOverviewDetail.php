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
namespace TencentCloud\Svp\V20240125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节省计划总览明细数据
 *
 * @method string getSpId() 获取节省计划资源id
 * @method void setSpId(string $SpId) 设置节省计划资源id
 * @method string getSpType() 获取节省计划类型
 * @method void setSpType(string $SpType) 设置节省计划类型
 * @method string getPayAmount() 获取支付金额（单位：元）
 * @method void setPayAmount(string $PayAmount) 设置支付金额（单位：元）
 * @method string getStartTime() 获取开始时间 yyyy-mm-dd HH:mm:ss格式
 * @method void setStartTime(string $StartTime) 设置开始时间 yyyy-mm-dd HH:mm:ss格式
 * @method string getEndTime() 获取结束时间 yyyy-mm-dd HH:mm:ss格式
 * @method void setEndTime(string $EndTime) 设置结束时间 yyyy-mm-dd HH:mm:ss格式
 * @method integer getStatus() 获取1 生效 2 失效 3 作废
 * @method void setStatus(integer $Status) 设置1 生效 2 失效 3 作废
 * @method string getSavingAmount() 获取累计节省金额（单位：元）
 * @method void setSavingAmount(string $SavingAmount) 设置累计节省金额（单位：元）
 * @method array getRegion() 获取地域
 * @method void setRegion(array $Region) 设置地域
 * @method integer getPayType() 获取1 全预付 2 部分预付 3 全不预付
 * @method void setPayType(integer $PayType) 设置1 全预付 2 部分预付 3 全不预付
 * @method string getBuyTime() 获取购买时间 yyyy-mm-dd HH:mm:ss格式
 * @method void setBuyTime(string $BuyTime) 设置购买时间 yyyy-mm-dd HH:mm:ss格式
 * @method string getPromiseAmount() 获取承诺金额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPromiseAmount(string $PromiseAmount) 设置承诺金额
注意：此字段可能返回 null，表示取不到有效值。
 */
class SavingPlanOverviewDetail extends AbstractModel
{
    /**
     * @var string 节省计划资源id
     */
    public $SpId;

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
     * @var integer 1 生效 2 失效 3 作废
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
     * @var integer 1 全预付 2 部分预付 3 全不预付
     */
    public $PayType;

    /**
     * @var string 购买时间 yyyy-mm-dd HH:mm:ss格式
     */
    public $BuyTime;

    /**
     * @var string 承诺金额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PromiseAmount;

    /**
     * @param string $SpId 节省计划资源id
     * @param string $SpType 节省计划类型
     * @param string $PayAmount 支付金额（单位：元）
     * @param string $StartTime 开始时间 yyyy-mm-dd HH:mm:ss格式
     * @param string $EndTime 结束时间 yyyy-mm-dd HH:mm:ss格式
     * @param integer $Status 1 生效 2 失效 3 作废
     * @param string $SavingAmount 累计节省金额（单位：元）
     * @param array $Region 地域
     * @param integer $PayType 1 全预付 2 部分预付 3 全不预付
     * @param string $BuyTime 购买时间 yyyy-mm-dd HH:mm:ss格式
     * @param string $PromiseAmount 承诺金额
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
        if (array_key_exists("SpId",$param) and $param["SpId"] !== null) {
            $this->SpId = $param["SpId"];
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

        if (array_key_exists("PromiseAmount",$param) and $param["PromiseAmount"] !== null) {
            $this->PromiseAmount = $param["PromiseAmount"];
        }
    }
}
