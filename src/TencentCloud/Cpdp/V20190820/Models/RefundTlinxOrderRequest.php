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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RefundTlinxOrder请求参数结构体
 *
 * @method string getOpenId() 获取使用门店OpenId
 * @method void setOpenId(string $OpenId) 设置使用门店OpenId
 * @method string getOpenKey() 获取使用门店OpenKey
 * @method void setOpenKey(string $OpenKey) 设置使用门店OpenKey
 * @method string getDeveloperNo() 获取原始订单的开发者交易流水号
 * @method void setDeveloperNo(string $DeveloperNo) 设置原始订单的开发者交易流水号
 * @method string getRefundOutNo() 获取新退款订单的开发者流水号，同一门店内唯一
 * @method void setRefundOutNo(string $RefundOutNo) 设置新退款订单的开发者流水号，同一门店内唯一
 * @method string getRefundOrderName() 获取退款订单名称，可以为空
 * @method void setRefundOrderName(string $RefundOrderName) 设置退款订单名称，可以为空
 * @method string getRefundAmount() 获取退款金额（以分为单位，没有小数点）
 * @method void setRefundAmount(string $RefundAmount) 设置退款金额（以分为单位，没有小数点）
 * @method string getShopPassword() 获取主管密码，对密码进行SHA-1加密，默认为123456
 * @method void setShopPassword(string $ShopPassword) 设置主管密码，对密码进行SHA-1加密，默认为123456
 * @method string getRemark() 获取退款备注
 * @method void setRemark(string $Remark) 设置退款备注
 * @method string getProfile() 获取沙箱环境填sandbox，正式环境不填
 * @method void setProfile(string $Profile) 设置沙箱环境填sandbox，正式环境不填
 */
class RefundTlinxOrderRequest extends AbstractModel
{
    /**
     * @var string 使用门店OpenId
     */
    public $OpenId;

    /**
     * @var string 使用门店OpenKey
     */
    public $OpenKey;

    /**
     * @var string 原始订单的开发者交易流水号
     */
    public $DeveloperNo;

    /**
     * @var string 新退款订单的开发者流水号，同一门店内唯一
     */
    public $RefundOutNo;

    /**
     * @var string 退款订单名称，可以为空
     */
    public $RefundOrderName;

    /**
     * @var string 退款金额（以分为单位，没有小数点）
     */
    public $RefundAmount;

    /**
     * @var string 主管密码，对密码进行SHA-1加密，默认为123456
     */
    public $ShopPassword;

    /**
     * @var string 退款备注
     */
    public $Remark;

    /**
     * @var string 沙箱环境填sandbox，正式环境不填
     */
    public $Profile;

    /**
     * @param string $OpenId 使用门店OpenId
     * @param string $OpenKey 使用门店OpenKey
     * @param string $DeveloperNo 原始订单的开发者交易流水号
     * @param string $RefundOutNo 新退款订单的开发者流水号，同一门店内唯一
     * @param string $RefundOrderName 退款订单名称，可以为空
     * @param string $RefundAmount 退款金额（以分为单位，没有小数点）
     * @param string $ShopPassword 主管密码，对密码进行SHA-1加密，默认为123456
     * @param string $Remark 退款备注
     * @param string $Profile 沙箱环境填sandbox，正式环境不填
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
        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("OpenKey",$param) and $param["OpenKey"] !== null) {
            $this->OpenKey = $param["OpenKey"];
        }

        if (array_key_exists("DeveloperNo",$param) and $param["DeveloperNo"] !== null) {
            $this->DeveloperNo = $param["DeveloperNo"];
        }

        if (array_key_exists("RefundOutNo",$param) and $param["RefundOutNo"] !== null) {
            $this->RefundOutNo = $param["RefundOutNo"];
        }

        if (array_key_exists("RefundOrderName",$param) and $param["RefundOrderName"] !== null) {
            $this->RefundOrderName = $param["RefundOrderName"];
        }

        if (array_key_exists("RefundAmount",$param) and $param["RefundAmount"] !== null) {
            $this->RefundAmount = $param["RefundAmount"];
        }

        if (array_key_exists("ShopPassword",$param) and $param["ShopPassword"] !== null) {
            $this->ShopPassword = $param["ShopPassword"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
