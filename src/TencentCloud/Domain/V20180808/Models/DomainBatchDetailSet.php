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
 * 批量操作日志详情
 *
 * @method integer getId() 获取详情ID
 * @method void setId(integer $Id) 设置详情ID
 * @method string getAction() 获取类型  
new：注册域名
renew：续费域名
batch_transfer_prohibition_on：开启禁止转移锁
batch_transfer_prohibition_off：关闭禁止转移锁
batch_update_prohibition_on：开启禁止更新锁
batch_update_prohibition_off：关闭禁止更新锁
batch_modify_owner：域名转移
batch_modify_domain_info：域名信息修改
batch_transfer_in：域名转入
batch_cancel_transfer_out：域名取消转出
 * @method void setAction(string $Action) 设置类型  
new：注册域名
renew：续费域名
batch_transfer_prohibition_on：开启禁止转移锁
batch_transfer_prohibition_off：关闭禁止转移锁
batch_update_prohibition_on：开启禁止更新锁
batch_update_prohibition_off：关闭禁止更新锁
batch_modify_owner：域名转移
batch_modify_domain_info：域名信息修改
batch_transfer_in：域名转入
batch_cancel_transfer_out：域名取消转出
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getStatus() 获取执行状态：
doing 执行中。
failed 操作失败。
success  操作成功。
 * @method void setStatus(string $Status) 设置执行状态：
doing 执行中。
failed 操作失败。
success  操作成功。
 * @method string getReason() 获取失败原因，如果状态成功(Status:success),则该字段为空
 * @method void setReason(string $Reason) 设置失败原因，如果状态成功(Status:success),则该字段为空
 * @method string getCreatedOn() 获取创建时间
 * @method void setCreatedOn(string $CreatedOn) 设置创建时间
 * @method string getUpdatedOn() 获取更新时间
 * @method void setUpdatedOn(string $UpdatedOn) 设置更新时间
 * @method string getBigDealId() 获取订单号
 * @method void setBigDealId(string $BigDealId) 设置订单号
 */
class DomainBatchDetailSet extends AbstractModel
{
    /**
     * @var integer 详情ID
     */
    public $Id;

    /**
     * @var string 类型  
new：注册域名
renew：续费域名
batch_transfer_prohibition_on：开启禁止转移锁
batch_transfer_prohibition_off：关闭禁止转移锁
batch_update_prohibition_on：开启禁止更新锁
batch_update_prohibition_off：关闭禁止更新锁
batch_modify_owner：域名转移
batch_modify_domain_info：域名信息修改
batch_transfer_in：域名转入
batch_cancel_transfer_out：域名取消转出
     */
    public $Action;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 执行状态：
doing 执行中。
failed 操作失败。
success  操作成功。
     */
    public $Status;

    /**
     * @var string 失败原因，如果状态成功(Status:success),则该字段为空
     */
    public $Reason;

    /**
     * @var string 创建时间
     */
    public $CreatedOn;

    /**
     * @var string 更新时间
     */
    public $UpdatedOn;

    /**
     * @var string 订单号
     */
    public $BigDealId;

    /**
     * @param integer $Id 详情ID
     * @param string $Action 类型  
new：注册域名
renew：续费域名
batch_transfer_prohibition_on：开启禁止转移锁
batch_transfer_prohibition_off：关闭禁止转移锁
batch_update_prohibition_on：开启禁止更新锁
batch_update_prohibition_off：关闭禁止更新锁
batch_modify_owner：域名转移
batch_modify_domain_info：域名信息修改
batch_transfer_in：域名转入
batch_cancel_transfer_out：域名取消转出
     * @param string $Domain 域名
     * @param string $Status 执行状态：
doing 执行中。
failed 操作失败。
success  操作成功。
     * @param string $Reason 失败原因，如果状态成功(Status:success),则该字段为空
     * @param string $CreatedOn 创建时间
     * @param string $UpdatedOn 更新时间
     * @param string $BigDealId 订单号
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("BigDealId",$param) and $param["BigDealId"] !== null) {
            $this->BigDealId = $param["BigDealId"];
        }
    }
}
