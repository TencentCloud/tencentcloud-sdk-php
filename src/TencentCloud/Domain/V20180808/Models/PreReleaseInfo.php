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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预释放列表信息
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getReservationTime() 获取预订倒计时(YYYY-MM-DD hh:mm:ss)
 * @method void setReservationTime(string $ReservationTime) 设置预订倒计时(YYYY-MM-DD hh:mm:ss)
 * @method string getRegTime() 获取域名注册时间(YYYY-MM-DD hh:mm:ss)
 * @method void setRegTime(string $RegTime) 设置域名注册时间(YYYY-MM-DD hh:mm:ss)
 * @method string getDelTime() 获取域名删除时间(YYYY-MM-DD hh:mm:ss)
 * @method void setDelTime(string $DelTime) 设置域名删除时间(YYYY-MM-DD hh:mm:ss)
 * @method integer getCurrentPeople() 获取当前人数
 * @method void setCurrentPeople(integer $CurrentPeople) 设置当前人数
 * @method float getPrice() 获取当前价格
 * @method void setPrice(float $Price) 设置当前价格
 * @method boolean getIsFollow() 获取是否收藏
true：收藏
false：未收藏
 * @method void setIsFollow(boolean $IsFollow) 设置是否收藏
true：收藏
false：未收藏
 * @method boolean getIsAppoint() 获取是否已经预约
true：预约
false：未预约
 * @method void setIsAppoint(boolean $IsAppoint) 设置是否已经预约
true：预约
false：未预约
 * @method string getBusinessId() 获取业务ID
 * @method void setBusinessId(string $BusinessId) 设置业务ID
 * @method boolean getIsDomainUser() 获取是否为原持有者
true：是原持有人
false：非原持有人
 * @method void setIsDomainUser(boolean $IsDomainUser) 设置是否为原持有者
true：是原持有人
false：非原持有人
 */
class PreReleaseInfo extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 预订倒计时(YYYY-MM-DD hh:mm:ss)
     */
    public $ReservationTime;

    /**
     * @var string 域名注册时间(YYYY-MM-DD hh:mm:ss)
     */
    public $RegTime;

    /**
     * @var string 域名删除时间(YYYY-MM-DD hh:mm:ss)
     */
    public $DelTime;

    /**
     * @var integer 当前人数
     */
    public $CurrentPeople;

    /**
     * @var float 当前价格
     */
    public $Price;

    /**
     * @var boolean 是否收藏
true：收藏
false：未收藏
     */
    public $IsFollow;

    /**
     * @var boolean 是否已经预约
true：预约
false：未预约
     */
    public $IsAppoint;

    /**
     * @var string 业务ID
     */
    public $BusinessId;

    /**
     * @var boolean 是否为原持有者
true：是原持有人
false：非原持有人
     */
    public $IsDomainUser;

    /**
     * @param string $Domain 域名
     * @param string $ReservationTime 预订倒计时(YYYY-MM-DD hh:mm:ss)
     * @param string $RegTime 域名注册时间(YYYY-MM-DD hh:mm:ss)
     * @param string $DelTime 域名删除时间(YYYY-MM-DD hh:mm:ss)
     * @param integer $CurrentPeople 当前人数
     * @param float $Price 当前价格
     * @param boolean $IsFollow 是否收藏
true：收藏
false：未收藏
     * @param boolean $IsAppoint 是否已经预约
true：预约
false：未预约
     * @param string $BusinessId 业务ID
     * @param boolean $IsDomainUser 是否为原持有者
true：是原持有人
false：非原持有人
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ReservationTime",$param) and $param["ReservationTime"] !== null) {
            $this->ReservationTime = $param["ReservationTime"];
        }

        if (array_key_exists("RegTime",$param) and $param["RegTime"] !== null) {
            $this->RegTime = $param["RegTime"];
        }

        if (array_key_exists("DelTime",$param) and $param["DelTime"] !== null) {
            $this->DelTime = $param["DelTime"];
        }

        if (array_key_exists("CurrentPeople",$param) and $param["CurrentPeople"] !== null) {
            $this->CurrentPeople = $param["CurrentPeople"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("IsFollow",$param) and $param["IsFollow"] !== null) {
            $this->IsFollow = $param["IsFollow"];
        }

        if (array_key_exists("IsAppoint",$param) and $param["IsAppoint"] !== null) {
            $this->IsAppoint = $param["IsAppoint"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("IsDomainUser",$param) and $param["IsDomainUser"] !== null) {
            $this->IsDomainUser = $param["IsDomainUser"];
        }
    }
}
