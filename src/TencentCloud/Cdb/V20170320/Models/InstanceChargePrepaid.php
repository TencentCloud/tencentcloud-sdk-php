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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改计费模式时，如果需要从按量计费转为包年包月，则需指定时长和自动续费标志
 *
 * @method integer getPeriod() 获取<p>购买实例的时长，单位：月。取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60。</p>
 * @method void setPeriod(integer $Period) 设置<p>购买实例的时长，单位：月。取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60。</p>
 * @method integer getRenewFlag() 获取<p>自动续费标识，0：不自动续费，1：自动续费</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>自动续费标识，0：不自动续费，1：自动续费</p>
 */
class InstanceChargePrepaid extends AbstractModel
{
    /**
     * @var integer <p>购买实例的时长，单位：月。取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60。</p>
     */
    public $Period;

    /**
     * @var integer <p>自动续费标识，0：不自动续费，1：自动续费</p>
     */
    public $RenewFlag;

    /**
     * @param integer $Period <p>购买实例的时长，单位：月。取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36, 48, 60。</p>
     * @param integer $RenewFlag <p>自动续费标识，0：不自动续费，1：自动续费</p>
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
