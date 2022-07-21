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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发信域名验证列表结构体
 *
 * @method string getIdentityName() 获取发信域名
 * @method void setIdentityName(string $IdentityName) 设置发信域名
 * @method string getIdentityType() 获取验证类型，固定为DOMAIN
 * @method void setIdentityType(string $IdentityType) 设置验证类型，固定为DOMAIN
 * @method boolean getSendingEnabled() 获取是否已通过验证
 * @method void setSendingEnabled(boolean $SendingEnabled) 设置是否已通过验证
 * @method integer getCurrentReputationLevel() 获取当前信誉等级
 * @method void setCurrentReputationLevel(integer $CurrentReputationLevel) 设置当前信誉等级
 * @method integer getDailyQuota() 获取当日最高发信量
 * @method void setDailyQuota(integer $DailyQuota) 设置当日最高发信量
 */
class EmailIdentity extends AbstractModel
{
    /**
     * @var string 发信域名
     */
    public $IdentityName;

    /**
     * @var string 验证类型，固定为DOMAIN
     */
    public $IdentityType;

    /**
     * @var boolean 是否已通过验证
     */
    public $SendingEnabled;

    /**
     * @var integer 当前信誉等级
     */
    public $CurrentReputationLevel;

    /**
     * @var integer 当日最高发信量
     */
    public $DailyQuota;

    /**
     * @param string $IdentityName 发信域名
     * @param string $IdentityType 验证类型，固定为DOMAIN
     * @param boolean $SendingEnabled 是否已通过验证
     * @param integer $CurrentReputationLevel 当前信誉等级
     * @param integer $DailyQuota 当日最高发信量
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
        if (array_key_exists("IdentityName",$param) and $param["IdentityName"] !== null) {
            $this->IdentityName = $param["IdentityName"];
        }

        if (array_key_exists("IdentityType",$param) and $param["IdentityType"] !== null) {
            $this->IdentityType = $param["IdentityType"];
        }

        if (array_key_exists("SendingEnabled",$param) and $param["SendingEnabled"] !== null) {
            $this->SendingEnabled = $param["SendingEnabled"];
        }

        if (array_key_exists("CurrentReputationLevel",$param) and $param["CurrentReputationLevel"] !== null) {
            $this->CurrentReputationLevel = $param["CurrentReputationLevel"];
        }

        if (array_key_exists("DailyQuota",$param) and $param["DailyQuota"] !== null) {
            $this->DailyQuota = $param["DailyQuota"];
        }
    }
}
