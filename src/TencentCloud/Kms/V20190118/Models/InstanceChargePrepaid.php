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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预付费计费信息
 *
 * @method integer getPeriod() 获取<p>按月购买时长（1～100）月</p>
 * @method void setPeriod(integer $Period) 设置<p>按月购买时长（1～100）月</p>
 * @method integer getRenewFlag() 获取<p>续费标记（0:用户未设置，1:自动续费 2:不自动续费）</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>续费标记（0:用户未设置，1:自动续费 2:不自动续费）</p>
 */
class InstanceChargePrepaid extends AbstractModel
{
    /**
     * @var integer <p>按月购买时长（1～100）月</p>
     */
    public $Period;

    /**
     * @var integer <p>续费标记（0:用户未设置，1:自动续费 2:不自动续费）</p>
     */
    public $RenewFlag;

    /**
     * @param integer $Period <p>按月购买时长（1～100）月</p>
     * @param integer $RenewFlag <p>续费标记（0:用户未设置，1:自动续费 2:不自动续费）</p>
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
