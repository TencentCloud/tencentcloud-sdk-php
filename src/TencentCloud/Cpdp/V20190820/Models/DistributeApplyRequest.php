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
 * DistributeApply请求参数结构体
 *
 * @method string getOpenId() 获取收单系统分配的开放ID
 * @method void setOpenId(string $OpenId) 设置收单系统分配的开放ID
 * @method string getOutDistributeNo() 获取商户分账单号
 * @method void setOutDistributeNo(string $OutDistributeNo) 设置商户分账单号
 * @method string getOpenKey() 获取收单系统分配的密钥
 * @method void setOpenKey(string $OpenKey) 设置收单系统分配的密钥
 * @method array getDetails() 获取分账明细
 * @method void setDetails(array $Details) 设置分账明细
 * @method string getProfile() 获取沙箱环境填sandbox，正式环境不填
 * @method void setProfile(string $Profile) 设置沙箱环境填sandbox，正式环境不填
 * @method string getRemark() 获取说明
 * @method void setRemark(string $Remark) 设置说明
 * @method string getDeveloperNo() 获取商户交易订单号，和OrderNo二者传其一
 * @method void setDeveloperNo(string $DeveloperNo) 设置商户交易订单号，和OrderNo二者传其一
 * @method string getOrderNo() 获取平台交易订单号，和DeveloperNo二者传其一
 * @method void setOrderNo(string $OrderNo) 设置平台交易订单号，和DeveloperNo二者传其一
 */
class DistributeApplyRequest extends AbstractModel
{
    /**
     * @var string 收单系统分配的开放ID
     */
    public $OpenId;

    /**
     * @var string 商户分账单号
     */
    public $OutDistributeNo;

    /**
     * @var string 收单系统分配的密钥
     */
    public $OpenKey;

    /**
     * @var array 分账明细
     */
    public $Details;

    /**
     * @var string 沙箱环境填sandbox，正式环境不填
     */
    public $Profile;

    /**
     * @var string 说明
     */
    public $Remark;

    /**
     * @var string 商户交易订单号，和OrderNo二者传其一
     */
    public $DeveloperNo;

    /**
     * @var string 平台交易订单号，和DeveloperNo二者传其一
     */
    public $OrderNo;

    /**
     * @param string $OpenId 收单系统分配的开放ID
     * @param string $OutDistributeNo 商户分账单号
     * @param string $OpenKey 收单系统分配的密钥
     * @param array $Details 分账明细
     * @param string $Profile 沙箱环境填sandbox，正式环境不填
     * @param string $Remark 说明
     * @param string $DeveloperNo 商户交易订单号，和OrderNo二者传其一
     * @param string $OrderNo 平台交易订单号，和DeveloperNo二者传其一
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

        if (array_key_exists("OutDistributeNo",$param) and $param["OutDistributeNo"] !== null) {
            $this->OutDistributeNo = $param["OutDistributeNo"];
        }

        if (array_key_exists("OpenKey",$param) and $param["OpenKey"] !== null) {
            $this->OpenKey = $param["OpenKey"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new MultiApplyDetail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("DeveloperNo",$param) and $param["DeveloperNo"] !== null) {
            $this->DeveloperNo = $param["DeveloperNo"];
        }

        if (array_key_exists("OrderNo",$param) and $param["OrderNo"] !== null) {
            $this->OrderNo = $param["OrderNo"];
        }
    }
}
