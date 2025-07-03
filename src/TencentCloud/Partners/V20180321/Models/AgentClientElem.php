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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述待审核代客信息
 *
 * @method string getUin() 获取代理商账号ID
 * @method void setUin(string $Uin) 设置代理商账号ID
 * @method string getClientUin() 获取代客账号ID
 * @method void setClientUin(string $ClientUin) 设置代客账号ID
 * @method integer getApplyTime() 获取代客申请时间戳
 * @method void setApplyTime(integer $ApplyTime) 设置代客申请时间戳
 * @method string getClientFlag() 获取代客类型，可能值为a/b/c/other
 * @method void setClientFlag(string $ClientFlag) 设置代客类型，可能值为a/b/c/other
 * @method string getMail() 获取代客邮箱，打码显示
 * @method void setMail(string $Mail) 设置代客邮箱，打码显示
 * @method string getPhone() 获取代客手机，打码显示
 * @method void setPhone(string $Phone) 设置代客手机，打码显示
 * @method integer getHasOverdueBill() 获取0表示不欠费，1表示欠费
 * @method void setHasOverdueBill(integer $HasOverdueBill) 设置0表示不欠费，1表示欠费
 * @method integer getStatus() 获取1:待代理商审核;2:待腾讯云审核4:待腾讯云渠道审批
 * @method void setStatus(integer $Status) 设置1:待代理商审核;2:待腾讯云审核4:待腾讯云渠道审批
 * @method string getSalesUin() 获取业务员ID
 * @method void setSalesUin(string $SalesUin) 设置业务员ID
 * @method string getSalesName() 获取业务员姓名
 * @method void setSalesName(string $SalesName) 设置业务员姓名
 * @method string getClientName() 获取客户名称，此字段和控制台返回一致。
 * @method void setClientName(string $ClientName) 设置客户名称，此字段和控制台返回一致。
 * @method string getIncreaseGoal() 获取增量目标金额(分)
 * @method void setIncreaseGoal(string $IncreaseGoal) 设置增量目标金额(分)
 */
class AgentClientElem extends AbstractModel
{
    /**
     * @var string 代理商账号ID
     */
    public $Uin;

    /**
     * @var string 代客账号ID
     */
    public $ClientUin;

    /**
     * @var integer 代客申请时间戳
     */
    public $ApplyTime;

    /**
     * @var string 代客类型，可能值为a/b/c/other
     */
    public $ClientFlag;

    /**
     * @var string 代客邮箱，打码显示
     */
    public $Mail;

    /**
     * @var string 代客手机，打码显示
     */
    public $Phone;

    /**
     * @var integer 0表示不欠费，1表示欠费
     */
    public $HasOverdueBill;

    /**
     * @var integer 1:待代理商审核;2:待腾讯云审核4:待腾讯云渠道审批
     */
    public $Status;

    /**
     * @var string 业务员ID
     */
    public $SalesUin;

    /**
     * @var string 业务员姓名
     */
    public $SalesName;

    /**
     * @var string 客户名称，此字段和控制台返回一致。
     */
    public $ClientName;

    /**
     * @var string 增量目标金额(分)
     */
    public $IncreaseGoal;

    /**
     * @param string $Uin 代理商账号ID
     * @param string $ClientUin 代客账号ID
     * @param integer $ApplyTime 代客申请时间戳
     * @param string $ClientFlag 代客类型，可能值为a/b/c/other
     * @param string $Mail 代客邮箱，打码显示
     * @param string $Phone 代客手机，打码显示
     * @param integer $HasOverdueBill 0表示不欠费，1表示欠费
     * @param integer $Status 1:待代理商审核;2:待腾讯云审核4:待腾讯云渠道审批
     * @param string $SalesUin 业务员ID
     * @param string $SalesName 业务员姓名
     * @param string $ClientName 客户名称，此字段和控制台返回一致。
     * @param string $IncreaseGoal 增量目标金额(分)
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("ClientFlag",$param) and $param["ClientFlag"] !== null) {
            $this->ClientFlag = $param["ClientFlag"];
        }

        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("HasOverdueBill",$param) and $param["HasOverdueBill"] !== null) {
            $this->HasOverdueBill = $param["HasOverdueBill"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SalesUin",$param) and $param["SalesUin"] !== null) {
            $this->SalesUin = $param["SalesUin"];
        }

        if (array_key_exists("SalesName",$param) and $param["SalesName"] !== null) {
            $this->SalesName = $param["SalesName"];
        }

        if (array_key_exists("ClientName",$param) and $param["ClientName"] !== null) {
            $this->ClientName = $param["ClientName"];
        }

        if (array_key_exists("IncreaseGoal",$param) and $param["IncreaseGoal"] !== null) {
            $this->IncreaseGoal = $param["IncreaseGoal"];
        }
    }
}
