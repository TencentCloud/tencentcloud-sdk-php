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
namespace TencentCloud\Vdb\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RecoverInstance请求参数结构体
 *
 * @method string getInstanceId() 获取指定待恢复的实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置指定待恢复的实例 ID。
 * @method integer getPayPeriod() 获取若实例为包年包月计费，需通过该参数指定续费的时长。
- 单位：月。
- 取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36。默认为1。
 * @method void setPayPeriod(integer $PayPeriod) 设置若实例为包年包月计费，需通过该参数指定续费的时长。
- 单位：月。
- 取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36。默认为1。
 */
class RecoverInstanceRequest extends AbstractModel
{
    /**
     * @var string 指定待恢复的实例 ID。
     */
    public $InstanceId;

    /**
     * @var integer 若实例为包年包月计费，需通过该参数指定续费的时长。
- 单位：月。
- 取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36。默认为1。
     */
    public $PayPeriod;

    /**
     * @param string $InstanceId 指定待恢复的实例 ID。
     * @param integer $PayPeriod 若实例为包年包月计费，需通过该参数指定续费的时长。
- 单位：月。
- 取值范围：1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, 36。默认为1。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PayPeriod",$param) and $param["PayPeriod"] !== null) {
            $this->PayPeriod = $param["PayPeriod"];
        }
    }
}
