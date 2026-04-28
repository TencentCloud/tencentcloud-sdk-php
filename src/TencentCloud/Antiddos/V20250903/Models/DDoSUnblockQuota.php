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
namespace TencentCloud\Antiddos\V20250903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 当前账号剩余解封配额信息。购买高防产品的用户默认解封配额为三个资源，系统将在每天零点（UTC+8）时区重置解封配额数，当天未使用的解封配额数不会累计到次日；DDoS 高防包（轻量版）解封配额数为每月三个资源，每月重置。
 *
 * @method integer getTotalQuota() 获取<p>解封次数配额总数。</p>
 * @method void setTotalQuota(integer $TotalQuota) 设置<p>解封次数配额总数。</p>
 * @method integer getUsedQuota() 获取<p>已使用的配额总数。</p>
 * @method void setUsedQuota(integer $UsedQuota) 设置<p>已使用的配额总数。</p>
 * @method string getQuotaStartTime() 获取<p>配额生效的起始时间。</p>
 * @method void setQuotaStartTime(string $QuotaStartTime) 设置<p>配额生效的起始时间。</p>
 * @method string getQuotaEndTime() 获取<p>配额生效的结束时间。</p>
 * @method void setQuotaEndTime(string $QuotaEndTime) 设置<p>配额生效的结束时间。</p>
 */
class DDoSUnblockQuota extends AbstractModel
{
    /**
     * @var integer <p>解封次数配额总数。</p>
     */
    public $TotalQuota;

    /**
     * @var integer <p>已使用的配额总数。</p>
     */
    public $UsedQuota;

    /**
     * @var string <p>配额生效的起始时间。</p>
     */
    public $QuotaStartTime;

    /**
     * @var string <p>配额生效的结束时间。</p>
     */
    public $QuotaEndTime;

    /**
     * @param integer $TotalQuota <p>解封次数配额总数。</p>
     * @param integer $UsedQuota <p>已使用的配额总数。</p>
     * @param string $QuotaStartTime <p>配额生效的起始时间。</p>
     * @param string $QuotaEndTime <p>配额生效的结束时间。</p>
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
        if (array_key_exists("TotalQuota",$param) and $param["TotalQuota"] !== null) {
            $this->TotalQuota = $param["TotalQuota"];
        }

        if (array_key_exists("UsedQuota",$param) and $param["UsedQuota"] !== null) {
            $this->UsedQuota = $param["UsedQuota"];
        }

        if (array_key_exists("QuotaStartTime",$param) and $param["QuotaStartTime"] !== null) {
            $this->QuotaStartTime = $param["QuotaStartTime"];
        }

        if (array_key_exists("QuotaEndTime",$param) and $param["QuotaEndTime"] !== null) {
            $this->QuotaEndTime = $param["QuotaEndTime"];
        }
    }
}
