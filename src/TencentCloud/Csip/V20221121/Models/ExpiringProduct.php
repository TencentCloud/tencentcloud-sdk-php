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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 即将到期产品
 *
 * @method string getProductId() 获取<p>产品ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品ID</p>
 * @method string getProductName() 获取<p>产品名称</p>
 * @method void setProductName(string $ProductName) 设置<p>产品名称</p>
 * @method integer getDaysToExpire() 获取<p>距到期天数<br>单位：天</p>
 * @method void setDaysToExpire(integer $DaysToExpire) 设置<p>距到期天数<br>单位：天</p>
 * @method string getExpireTime() 获取<p>到期时间</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>到期时间</p>
 */
class ExpiringProduct extends AbstractModel
{
    /**
     * @var string <p>产品ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>产品名称</p>
     */
    public $ProductName;

    /**
     * @var integer <p>距到期天数<br>单位：天</p>
     */
    public $DaysToExpire;

    /**
     * @var string <p>到期时间</p>
     */
    public $ExpireTime;

    /**
     * @param string $ProductId <p>产品ID</p>
     * @param string $ProductName <p>产品名称</p>
     * @param integer $DaysToExpire <p>距到期天数<br>单位：天</p>
     * @param string $ExpireTime <p>到期时间</p>
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("DaysToExpire",$param) and $param["DaysToExpire"] !== null) {
            $this->DaysToExpire = $param["DaysToExpire"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
