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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预算修改记录信息
 *
 * @method integer getPayerUin() 获取Uin
 * @method void setPayerUin(integer $PayerUin) 设置Uin
 * @method integer getOwnerUin() 获取主用户Uin

 * @method void setOwnerUin(integer $OwnerUin) 设置主用户Uin

 * @method integer getOperateUin() 获取操作用户Uin
 * @method void setOperateUin(integer $OperateUin) 设置操作用户Uin
 * @method integer getBillDay() 获取日期
 * @method void setBillDay(integer $BillDay) 设置日期
 * @method string getBillMonth() 获取月份
 * @method void setBillMonth(string $BillMonth) 设置月份
 * @method string getAction() 获取修改类型：ADD(新增)、UPDATE(更新)
 * @method void setAction(string $Action) 设置修改类型：ADD(新增)、UPDATE(更新)
 * @method array getDiffValue() 获取变更信息
 * @method void setDiffValue(array $DiffValue) 设置变更信息
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置修改时间
 * @method string getOperationChannel() 获取修改渠道：官网修改/API修改
 * @method void setOperationChannel(string $OperationChannel) 设置修改渠道：官网修改/API修改
 * @method string getBudgetId() 获取预算项目id
 * @method void setBudgetId(string $BudgetId) 设置预算项目id
 */
class BudgetOperationLogEntity extends AbstractModel
{
    /**
     * @var integer Uin
     */
    public $PayerUin;

    /**
     * @var integer 主用户Uin

     */
    public $OwnerUin;

    /**
     * @var integer 操作用户Uin
     */
    public $OperateUin;

    /**
     * @var integer 日期
     */
    public $BillDay;

    /**
     * @var string 月份
     */
    public $BillMonth;

    /**
     * @var string 修改类型：ADD(新增)、UPDATE(更新)
     */
    public $Action;

    /**
     * @var array 变更信息
     */
    public $DiffValue;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $UpdateTime;

    /**
     * @var string 修改渠道：官网修改/API修改
     */
    public $OperationChannel;

    /**
     * @var string 预算项目id
     */
    public $BudgetId;

    /**
     * @param integer $PayerUin Uin
     * @param integer $OwnerUin 主用户Uin

     * @param integer $OperateUin 操作用户Uin
     * @param integer $BillDay 日期
     * @param string $BillMonth 月份
     * @param string $Action 修改类型：ADD(新增)、UPDATE(更新)
     * @param array $DiffValue 变更信息
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 修改时间
     * @param string $OperationChannel 修改渠道：官网修改/API修改
     * @param string $BudgetId 预算项目id
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
        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("BillDay",$param) and $param["BillDay"] !== null) {
            $this->BillDay = $param["BillDay"];
        }

        if (array_key_exists("BillMonth",$param) and $param["BillMonth"] !== null) {
            $this->BillMonth = $param["BillMonth"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("DiffValue",$param) and $param["DiffValue"] !== null) {
            $this->DiffValue = [];
            foreach ($param["DiffValue"] as $key => $value){
                $obj = new BudgetInfoDiffEntity();
                $obj->deserialize($value);
                array_push($this->DiffValue, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OperationChannel",$param) and $param["OperationChannel"] !== null) {
            $this->OperationChannel = $param["OperationChannel"];
        }

        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }
    }
}
