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
 * DisIsolateDBInstances请求参数结构体
 *
 * @method array getDBInstanceIdSet() 获取<p>实例ID列表。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取。支持同时解隔离多个实例。</p>
 * @method void setDBInstanceIdSet(array $DBInstanceIdSet) 设置<p>实例ID列表。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取。支持同时解隔离多个实例。</p>
 * @method integer getPeriod() 获取<p>购买时长，单位：月。</p><li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li><li>后付费：该参数不生效</li>
 * @method void setPeriod(integer $Period) 设置<p>购买时长，单位：月。</p><li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li><li>后付费：该参数不生效</li>
 * @method boolean getAutoVoucher() 获取<p>是否使用代金券：</p><li>true：使用</li><li>false：不使用</li>默认值：false
 * @method void setAutoVoucher(boolean $AutoVoucher) 设置<p>是否使用代金券：</p><li>true：使用</li><li>false：不使用</li>默认值：false
 * @method array getVoucherIds() 获取<p>代金券id列表。</p>
 * @method void setVoucherIds(array $VoucherIds) 设置<p>代金券id列表。</p>
 */
class DisIsolateDBInstancesRequest extends AbstractModel
{
    /**
     * @var array <p>实例ID列表。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取。支持同时解隔离多个实例。</p>
     */
    public $DBInstanceIdSet;

    /**
     * @var integer <p>购买时长，单位：月。</p><li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li><li>后付费：该参数不生效</li>
     */
    public $Period;

    /**
     * @var boolean <p>是否使用代金券：</p><li>true：使用</li><li>false：不使用</li>默认值：false
     */
    public $AutoVoucher;

    /**
     * @var array <p>代金券id列表。</p>
     */
    public $VoucherIds;

    /**
     * @param array $DBInstanceIdSet <p>实例ID列表。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取。支持同时解隔离多个实例。</p>
     * @param integer $Period <p>购买时长，单位：月。</p><li>预付费：支持1,2,3,4,5,6,7,8,9,10,11,12,24,36</li><li>后付费：该参数不生效</li>
     * @param boolean $AutoVoucher <p>是否使用代金券：</p><li>true：使用</li><li>false：不使用</li>默认值：false
     * @param array $VoucherIds <p>代金券id列表。</p>
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
        if (array_key_exists("DBInstanceIdSet",$param) and $param["DBInstanceIdSet"] !== null) {
            $this->DBInstanceIdSet = $param["DBInstanceIdSet"];
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
