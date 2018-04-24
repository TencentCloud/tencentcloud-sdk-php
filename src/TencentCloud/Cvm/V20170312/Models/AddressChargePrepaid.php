<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getPeriod() 获取购买实例的时长
 * @method void setPeriod(integer $period) 设置购买实例的时长
 * @method string getRenewFlag() 获取自动续费标志
 * @method void setRenewFlag(string $renewFlag) 设置自动续费标志
 */

/**
 *用于描述弹性公网IP的费用对象
 */
class AddressChargePrepaid extends AbstractModel
{
    /**
     * @var integer 购买实例的时长
     */
    public $period;

    /**
     * @var string 自动续费标志
     */
    public $renewFlag;
    /**
     * @param integer $period 购买实例的时长
     * @param string $renewFlag 自动续费标志
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->period = $param["Period"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->renewFlag = $param["RenewFlag"];
        }
    }
}
