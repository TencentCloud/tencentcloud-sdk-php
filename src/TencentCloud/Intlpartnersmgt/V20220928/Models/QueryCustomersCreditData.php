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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询客户信用额度出参复杂类型
 *
 * @method string getName() 获取名字
 * @method void setName(string $Name) 设置名字
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getMobile() 获取电话
 * @method void setMobile(string $Mobile) 设置电话
 * @method string getEmail() 获取邮箱
 * @method void setEmail(string $Email) 设置邮箱
 * @method string getArrears() 获取欠费标记
 * @method void setArrears(string $Arrears) 设置欠费标记
 * @method string getAssociationTime() 获取绑定时间
 * @method void setAssociationTime(string $AssociationTime) 设置绑定时间
 * @method string getRecentExpiry() 获取最近到期时间
 * @method void setRecentExpiry(string $RecentExpiry) 设置最近到期时间
 * @method integer getClientUin() 获取子客uin
 * @method void setClientUin(integer $ClientUin) 设置子客uin
 * @method float getCredit() 获取子客授信额度
 * @method void setCredit(float $Credit) 设置子客授信额度
 * @method float getRemainingCredit() 获取子客剩余额度
 * @method void setRemainingCredit(float $RemainingCredit) 设置子客剩余额度
 * @method integer getIdentifyType() 获取0：未实名 1: 个人实名 2：企业实名
 * @method void setIdentifyType(integer $IdentifyType) 设置0：未实名 1: 个人实名 2：企业实名
 * @method string getRemark() 获取客户备注
 * @method void setRemark(string $Remark) 设置客户备注
 * @method integer getForce() 获取强制状态
 * @method void setForce(integer $Force) 设置强制状态
 */
class QueryCustomersCreditData extends AbstractModel
{
    /**
     * @var string 名字
     */
    public $Name;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string 电话
     */
    public $Mobile;

    /**
     * @var string 邮箱
     */
    public $Email;

    /**
     * @var string 欠费标记
     */
    public $Arrears;

    /**
     * @var string 绑定时间
     */
    public $AssociationTime;

    /**
     * @var string 最近到期时间
     */
    public $RecentExpiry;

    /**
     * @var integer 子客uin
     */
    public $ClientUin;

    /**
     * @var float 子客授信额度
     */
    public $Credit;

    /**
     * @var float 子客剩余额度
     */
    public $RemainingCredit;

    /**
     * @var integer 0：未实名 1: 个人实名 2：企业实名
     */
    public $IdentifyType;

    /**
     * @var string 客户备注
     */
    public $Remark;

    /**
     * @var integer 强制状态
     */
    public $Force;

    /**
     * @param string $Name 名字
     * @param string $Type 类型
     * @param string $Mobile 电话
     * @param string $Email 邮箱
     * @param string $Arrears 欠费标记
     * @param string $AssociationTime 绑定时间
     * @param string $RecentExpiry 最近到期时间
     * @param integer $ClientUin 子客uin
     * @param float $Credit 子客授信额度
     * @param float $RemainingCredit 子客剩余额度
     * @param integer $IdentifyType 0：未实名 1: 个人实名 2：企业实名
     * @param string $Remark 客户备注
     * @param integer $Force 强制状态
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Arrears",$param) and $param["Arrears"] !== null) {
            $this->Arrears = $param["Arrears"];
        }

        if (array_key_exists("AssociationTime",$param) and $param["AssociationTime"] !== null) {
            $this->AssociationTime = $param["AssociationTime"];
        }

        if (array_key_exists("RecentExpiry",$param) and $param["RecentExpiry"] !== null) {
            $this->RecentExpiry = $param["RecentExpiry"];
        }

        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("Credit",$param) and $param["Credit"] !== null) {
            $this->Credit = $param["Credit"];
        }

        if (array_key_exists("RemainingCredit",$param) and $param["RemainingCredit"] !== null) {
            $this->RemainingCredit = $param["RemainingCredit"];
        }

        if (array_key_exists("IdentifyType",$param) and $param["IdentifyType"] !== null) {
            $this->IdentifyType = $param["IdentifyType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
