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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费项最大可调度限制
 *
 * @method string getBillingItem() 获取<p>四层计费项，与 ResourceQuota[].ResourceSpec.BillingItem 同值</p>
 * @method void setBillingItem(string $BillingItem) 设置<p>四层计费项，与 ResourceQuota[].ResourceSpec.BillingItem 同值</p>
 * @method integer getMaxSchedulableUnits() 获取<p>该计费项下单 worker/executor 可申请的最大可调度资源量，单位随计费项资源类型：CPU 计费项为 CU 数，GPU 计费项为 GU（卡）数</p>
 * @method void setMaxSchedulableUnits(integer $MaxSchedulableUnits) 设置<p>该计费项下单 worker/executor 可申请的最大可调度资源量，单位随计费项资源类型：CPU 计费项为 CU 数，GPU 计费项为 GU（卡）数</p>
 */
class SchedulableLimit extends AbstractModel
{
    /**
     * @var string <p>四层计费项，与 ResourceQuota[].ResourceSpec.BillingItem 同值</p>
     */
    public $BillingItem;

    /**
     * @var integer <p>该计费项下单 worker/executor 可申请的最大可调度资源量，单位随计费项资源类型：CPU 计费项为 CU 数，GPU 计费项为 GU（卡）数</p>
     */
    public $MaxSchedulableUnits;

    /**
     * @param string $BillingItem <p>四层计费项，与 ResourceQuota[].ResourceSpec.BillingItem 同值</p>
     * @param integer $MaxSchedulableUnits <p>该计费项下单 worker/executor 可申请的最大可调度资源量，单位随计费项资源类型：CPU 计费项为 CU 数，GPU 计费项为 GU（卡）数</p>
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
        if (array_key_exists("BillingItem",$param) and $param["BillingItem"] !== null) {
            $this->BillingItem = $param["BillingItem"];
        }

        if (array_key_exists("MaxSchedulableUnits",$param) and $param["MaxSchedulableUnits"] !== null) {
            $this->MaxSchedulableUnits = $param["MaxSchedulableUnits"];
        }
    }
}
