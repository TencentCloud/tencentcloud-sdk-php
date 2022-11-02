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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCorporationOrder请求参数结构体
 *
 * @method string getCorpName() 获取企业名称
 * @method void setCorpName(string $CorpName) 设置企业名称
 * @method string getOwner() 获取所有者ID
 * @method void setOwner(string $Owner) 设置所有者ID
 * @method integer getCodeQuota() 获取溯源码额度
 * @method void setCodeQuota(integer $CodeQuota) 设置溯源码额度
 * @method string getExpireTime() 获取额度过期时间
 * @method void setExpireTime(string $ExpireTime) 设置额度过期时间
 * @method integer getAmount() 获取金额
 * @method void setAmount(integer $Amount) 设置金额
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method string getContactPerson() 获取联系人
 * @method void setContactPerson(string $ContactPerson) 设置联系人
 * @method string getContactNumber() 获取联系电话
 * @method void setContactNumber(string $ContactNumber) 设置联系电话
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class CreateCorporationOrderRequest extends AbstractModel
{
    /**
     * @var string 企业名称
     */
    public $CorpName;

    /**
     * @var string 所有者ID
     */
    public $Owner;

    /**
     * @var integer 溯源码额度
     */
    public $CodeQuota;

    /**
     * @var string 额度过期时间
     */
    public $ExpireTime;

    /**
     * @var integer 金额
     */
    public $Amount;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var string 联系人
     */
    public $ContactPerson;

    /**
     * @var string 联系电话
     */
    public $ContactNumber;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param string $CorpName 企业名称
     * @param string $Owner 所有者ID
     * @param integer $CodeQuota 溯源码额度
     * @param string $ExpireTime 额度过期时间
     * @param integer $Amount 金额
     * @param integer $CorpId 企业ID
     * @param string $ContactPerson 联系人
     * @param string $ContactNumber 联系电话
     * @param string $Remark 备注
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
        if (array_key_exists("CorpName",$param) and $param["CorpName"] !== null) {
            $this->CorpName = $param["CorpName"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("CodeQuota",$param) and $param["CodeQuota"] !== null) {
            $this->CodeQuota = $param["CodeQuota"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("ContactPerson",$param) and $param["ContactPerson"] !== null) {
            $this->ContactPerson = $param["ContactPerson"];
        }

        if (array_key_exists("ContactNumber",$param) and $param["ContactNumber"] !== null) {
            $this->ContactNumber = $param["ContactNumber"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
