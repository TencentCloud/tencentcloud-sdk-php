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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取需要重启的实例id列表
 * @method void setInstanceIds(array $InstanceIds) 设置需要重启的实例id列表
 * @method string getInstanceRegion() 获取实例所在区域，保证传入的列表在统一区域，否则报错
 * @method void setInstanceRegion(string $InstanceRegion) 设置实例所在区域，保证传入的列表在统一区域，否则报错
 * @method boolean getForce() 获取是否在正常重启失败后选择强制重启实例。取值范围：
TRUE：表示在正常重启失败后进行强制重启
FALSE：表示在正常重启失败后不进行强制重启

默认取值：FALSE。
 * @method void setForce(boolean $Force) 设置是否在正常重启失败后选择强制重启实例。取值范围：
TRUE：表示在正常重启失败后进行强制重启
FALSE：表示在正常重启失败后不进行强制重启

默认取值：FALSE。
 */
class StopInstancesRequest extends AbstractModel
{
    /**
     * @var array 需要重启的实例id列表
     */
    public $InstanceIds;

    /**
     * @var string 实例所在区域，保证传入的列表在统一区域，否则报错
     */
    public $InstanceRegion;

    /**
     * @var boolean 是否在正常重启失败后选择强制重启实例。取值范围：
TRUE：表示在正常重启失败后进行强制重启
FALSE：表示在正常重启失败后不进行强制重启

默认取值：FALSE。
     */
    public $Force;

    /**
     * @param array $InstanceIds 需要重启的实例id列表
     * @param string $InstanceRegion 实例所在区域，保证传入的列表在统一区域，否则报错
     * @param boolean $Force 是否在正常重启失败后选择强制重启实例。取值范围：
TRUE：表示在正常重启失败后进行强制重启
FALSE：表示在正常重启失败后不进行强制重启

默认取值：FALSE。
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
