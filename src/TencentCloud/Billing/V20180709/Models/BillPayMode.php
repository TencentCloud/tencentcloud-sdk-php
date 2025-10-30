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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费模式筛选列表
 *
 * @method string getPayMode() 获取计费模式编码
 * @method void setPayMode(string $PayMode) 设置计费模式编码
 * @method string getPayModeName() 获取计费模式：资源的计费模式，区分为包年包月和按量计费
 * @method void setPayModeName(string $PayModeName) 设置计费模式：资源的计费模式，区分为包年包月和按量计费
 */
class BillPayMode extends AbstractModel
{
    /**
     * @var string 计费模式编码
     */
    public $PayMode;

    /**
     * @var string 计费模式：资源的计费模式，区分为包年包月和按量计费
     */
    public $PayModeName;

    /**
     * @param string $PayMode 计费模式编码
     * @param string $PayModeName 计费模式：资源的计费模式，区分为包年包月和按量计费
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
        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayModeName",$param) and $param["PayModeName"] !== null) {
            $this->PayModeName = $param["PayModeName"];
        }
    }
}
