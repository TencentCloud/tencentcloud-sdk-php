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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取CVM配额
 *
 * @method integer getUsedQuota() 获取已使用配额
 * @method void setUsedQuota(integer $UsedQuota) 设置已使用配额
 * @method integer getRemainingQuota() 获取剩余配额
 * @method void setRemainingQuota(integer $RemainingQuota) 设置剩余配额
 * @method integer getTotalQuota() 获取总配额
 * @method void setTotalQuota(integer $TotalQuota) 设置总配额
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 */
class QuotaEntity extends AbstractModel
{
    /**
     * @var integer 已使用配额
     */
    public $UsedQuota;

    /**
     * @var integer 剩余配额
     */
    public $RemainingQuota;

    /**
     * @var integer 总配额
     */
    public $TotalQuota;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @param integer $UsedQuota 已使用配额
     * @param integer $RemainingQuota 剩余配额
     * @param integer $TotalQuota 总配额
     * @param string $Zone 可用区
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
        if (array_key_exists("UsedQuota",$param) and $param["UsedQuota"] !== null) {
            $this->UsedQuota = $param["UsedQuota"];
        }

        if (array_key_exists("RemainingQuota",$param) and $param["RemainingQuota"] !== null) {
            $this->RemainingQuota = $param["RemainingQuota"];
        }

        if (array_key_exists("TotalQuota",$param) and $param["TotalQuota"] !== null) {
            $this->TotalQuota = $param["TotalQuota"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
