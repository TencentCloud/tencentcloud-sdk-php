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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 增值服务信息
 *
 * @method integer getLimitNumber() 获取规格总数
 * @method void setLimitNumber(integer $LimitNumber) 设置规格总数
 * @method string getStartedAt() 获取购买时间
 * @method void setStartedAt(string $StartedAt) 设置购买时间
 * @method string getEndedAt() 获取到期时间
 * @method void setEndedAt(string $EndedAt) 设置到期时间
 * @method string getResourceId() 获取资源唯一 ID
 * @method void setResourceId(string $ResourceId) 设置资源唯一 ID
 * @method string getAutoRenew() 获取自动续费标识
 * @method void setAutoRenew(string $AutoRenew) 设置自动续费标识
 * @method string getDomain() 获取已绑定的域名
 * @method void setDomain(string $Domain) 设置已绑定的域名
 * @method string getBindType() 获取绑定类型
 * @method void setBindType(string $BindType) 设置绑定类型
 * @method string getKey() 获取增值服务类型
 * @method void setKey(string $Key) 设置增值服务类型
 * @method string getName() 获取增值服务名
 * @method void setName(string $Name) 设置增值服务名
 * @method boolean getCanRenew() 获取是否可续费
 * @method void setCanRenew(boolean $CanRenew) 设置是否可续费
 * @method boolean getVipDomain() 获取是否只允许付费套餐域名可购买
 * @method void setVipDomain(boolean $VipDomain) 设置是否只允许付费套餐域名可购买
 */
class VasListItem extends AbstractModel
{
    /**
     * @var integer 规格总数
     */
    public $LimitNumber;

    /**
     * @var string 购买时间
     */
    public $StartedAt;

    /**
     * @var string 到期时间
     */
    public $EndedAt;

    /**
     * @var string 资源唯一 ID
     */
    public $ResourceId;

    /**
     * @var string 自动续费标识
     */
    public $AutoRenew;

    /**
     * @var string 已绑定的域名
     */
    public $Domain;

    /**
     * @var string 绑定类型
     */
    public $BindType;

    /**
     * @var string 增值服务类型
     */
    public $Key;

    /**
     * @var string 增值服务名
     */
    public $Name;

    /**
     * @var boolean 是否可续费
     */
    public $CanRenew;

    /**
     * @var boolean 是否只允许付费套餐域名可购买
     */
    public $VipDomain;

    /**
     * @param integer $LimitNumber 规格总数
     * @param string $StartedAt 购买时间
     * @param string $EndedAt 到期时间
     * @param string $ResourceId 资源唯一 ID
     * @param string $AutoRenew 自动续费标识
     * @param string $Domain 已绑定的域名
     * @param string $BindType 绑定类型
     * @param string $Key 增值服务类型
     * @param string $Name 增值服务名
     * @param boolean $CanRenew 是否可续费
     * @param boolean $VipDomain 是否只允许付费套餐域名可购买
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
        if (array_key_exists("LimitNumber",$param) and $param["LimitNumber"] !== null) {
            $this->LimitNumber = $param["LimitNumber"];
        }

        if (array_key_exists("StartedAt",$param) and $param["StartedAt"] !== null) {
            $this->StartedAt = $param["StartedAt"];
        }

        if (array_key_exists("EndedAt",$param) and $param["EndedAt"] !== null) {
            $this->EndedAt = $param["EndedAt"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CanRenew",$param) and $param["CanRenew"] !== null) {
            $this->CanRenew = $param["CanRenew"];
        }

        if (array_key_exists("VipDomain",$param) and $param["VipDomain"] !== null) {
            $this->VipDomain = $param["VipDomain"];
        }
    }
}
