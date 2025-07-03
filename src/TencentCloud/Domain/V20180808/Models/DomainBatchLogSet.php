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
 * 批量操作记录
 *
 * @method integer getLogId() 获取日志ID
 * @method void setLogId(integer $LogId) 设置日志ID
 * @method integer getNumber() 获取数量
 * @method void setNumber(integer $Number) 设置数量
 * @method string getStatus() 获取执行状态：
doing 执行中。
done 执行完成。
 * @method void setStatus(string $Status) 设置执行状态：
doing 执行中。
done 执行完成。
 * @method string getCreatedOn() 获取提交时间
 * @method void setCreatedOn(string $CreatedOn) 设置提交时间
 * @method integer getSuccess() 获取批量操作成功个数
 * @method void setSuccess(integer $Success) 设置批量操作成功个数
 * @method integer getDoing() 获取批量操作处理中个数
 * @method void setDoing(integer $Doing) 设置批量操作处理中个数
 * @method integer getFailed() 获取批量操作失败个数
 * @method void setFailed(integer $Failed) 设置批量操作失败个数
 * @method boolean getPayStatus() 获取是否付费
 * @method void setPayStatus(boolean $PayStatus) 设置是否付费
 * @method string getBigDealId() 获取大订单ID
 * @method void setBigDealId(string $BigDealId) 设置大订单ID
 */
class DomainBatchLogSet extends AbstractModel
{
    /**
     * @var integer 日志ID
     */
    public $LogId;

    /**
     * @var integer 数量
     */
    public $Number;

    /**
     * @var string 执行状态：
doing 执行中。
done 执行完成。
     */
    public $Status;

    /**
     * @var string 提交时间
     */
    public $CreatedOn;

    /**
     * @var integer 批量操作成功个数
     */
    public $Success;

    /**
     * @var integer 批量操作处理中个数
     */
    public $Doing;

    /**
     * @var integer 批量操作失败个数
     */
    public $Failed;

    /**
     * @var boolean 是否付费
     */
    public $PayStatus;

    /**
     * @var string 大订单ID
     */
    public $BigDealId;

    /**
     * @param integer $LogId 日志ID
     * @param integer $Number 数量
     * @param string $Status 执行状态：
doing 执行中。
done 执行完成。
     * @param string $CreatedOn 提交时间
     * @param integer $Success 批量操作成功个数
     * @param integer $Doing 批量操作处理中个数
     * @param integer $Failed 批量操作失败个数
     * @param boolean $PayStatus 是否付费
     * @param string $BigDealId 大订单ID
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
        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }

        if (array_key_exists("Doing",$param) and $param["Doing"] !== null) {
            $this->Doing = $param["Doing"];
        }

        if (array_key_exists("Failed",$param) and $param["Failed"] !== null) {
            $this->Failed = $param["Failed"];
        }

        if (array_key_exists("PayStatus",$param) and $param["PayStatus"] !== null) {
            $this->PayStatus = $param["PayStatus"];
        }

        if (array_key_exists("BigDealId",$param) and $param["BigDealId"] !== null) {
            $this->BigDealId = $param["BigDealId"];
        }
    }
}
