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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenewInstance请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID，形如postgres-6fego161。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取。仅支持预付费（包年包月）实例。
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID，形如postgres-6fego161。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取。仅支持预付费（包年包月）实例。
 * @method integer getPeriod() 获取购买时长，单位：月。
<li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li>
 * @method void setPeriod(integer $Period) 设置购买时长，单位：月。
<li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li>
 * @method integer getAutoVoucher() 获取是否自动使用代金券：
<li>0：否</li>
<li>1：是</li>
默认值：0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动使用代金券：
<li>0：否</li>
<li>1：是</li>
默认值：0
 * @method array getVoucherIds() 获取代金券ID列表，目前仅支持指定一张代金券
 * @method void setVoucherIds(array $VoucherIds) 设置代金券ID列表，目前仅支持指定一张代金券
 */
class RenewInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如postgres-6fego161。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取。仅支持预付费（包年包月）实例。
     */
    public $DBInstanceId;

    /**
     * @var integer 购买时长，单位：月。
<li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li>
     */
    public $Period;

    /**
     * @var integer 是否自动使用代金券：
<li>0：否</li>
<li>1：是</li>
默认值：0
     */
    public $AutoVoucher;

    /**
     * @var array 代金券ID列表，目前仅支持指定一张代金券
     */
    public $VoucherIds;

    /**
     * @param string $DBInstanceId 实例ID，形如postgres-6fego161。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取。仅支持预付费（包年包月）实例。
     * @param integer $Period 购买时长，单位：月。
<li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li>
     * @param integer $AutoVoucher 是否自动使用代金券：
<li>0：否</li>
<li>1：是</li>
默认值：0
     * @param array $VoucherIds 代金券ID列表，目前仅支持指定一张代金券
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }
    }
}
