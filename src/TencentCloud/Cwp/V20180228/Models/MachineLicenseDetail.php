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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机器绑定授权信息
 *
 * @method string getQuuid() 获取主机quuid
 * @method void setQuuid(string $Quuid) 设置主机quuid
 * @method integer getPayMode() 获取计费模式, 0 按量计费 , 1 预付费
 * @method void setPayMode(integer $PayMode) 设置计费模式, 0 按量计费 , 1 预付费
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method integer getLicenseType() 获取授权类型
 * @method void setLicenseType(integer $LicenseType) 设置授权类型
 * @method integer getSourceType() 获取订单类型,0 默认计费订单 1 试用订单, 2 赠送 3 体验
 * @method void setSourceType(integer $SourceType) 设置订单类型,0 默认计费订单 1 试用订单, 2 赠送 3 体验
 * @method string getInquireKey() 获取废弃字段,
 * @method void setInquireKey(string $InquireKey) 设置废弃字段,
 * @method integer getAutoRenewFlag() 获取自动续费标识 0 默认不自动付费, 1 自动付费 2 手动设置不续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标识 0 默认不自动付费, 1 自动付费 2 手动设置不续费
 * @method string getDeadline() 获取到期时间,按量付费该值为空
 * @method void setDeadline(string $Deadline) 设置到期时间,按量付费该值为空
 * @method string getBuyTime() 获取购买时间
 * @method void setBuyTime(string $BuyTime) 设置购买时间
 * @method integer getLicenseCnt() 获取授权数量
 * @method void setLicenseCnt(integer $LicenseCnt) 设置授权数量
 */
class MachineLicenseDetail extends AbstractModel
{
    /**
     * @var string 主机quuid
     */
    public $Quuid;

    /**
     * @var integer 计费模式, 0 按量计费 , 1 预付费
     */
    public $PayMode;

    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var integer 授权类型
     */
    public $LicenseType;

    /**
     * @var integer 订单类型,0 默认计费订单 1 试用订单, 2 赠送 3 体验
     */
    public $SourceType;

    /**
     * @var string 废弃字段,
     */
    public $InquireKey;

    /**
     * @var integer 自动续费标识 0 默认不自动付费, 1 自动付费 2 手动设置不续费
     */
    public $AutoRenewFlag;

    /**
     * @var string 到期时间,按量付费该值为空
     */
    public $Deadline;

    /**
     * @var string 购买时间
     */
    public $BuyTime;

    /**
     * @var integer 授权数量
     */
    public $LicenseCnt;

    /**
     * @param string $Quuid 主机quuid
     * @param integer $PayMode 计费模式, 0 按量计费 , 1 预付费
     * @param string $ResourceId 资源ID
     * @param integer $LicenseType 授权类型
     * @param integer $SourceType 订单类型,0 默认计费订单 1 试用订单, 2 赠送 3 体验
     * @param string $InquireKey 废弃字段,
     * @param integer $AutoRenewFlag 自动续费标识 0 默认不自动付费, 1 自动付费 2 手动设置不续费
     * @param string $Deadline 到期时间,按量付费该值为空
     * @param string $BuyTime 购买时间
     * @param integer $LicenseCnt 授权数量
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("InquireKey",$param) and $param["InquireKey"] !== null) {
            $this->InquireKey = $param["InquireKey"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("BuyTime",$param) and $param["BuyTime"] !== null) {
            $this->BuyTime = $param["BuyTime"];
        }

        if (array_key_exists("LicenseCnt",$param) and $param["LicenseCnt"] !== null) {
            $this->LicenseCnt = $param["LicenseCnt"];
        }
    }
}
