<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDesiredCapacity请求参数结构体
 *
 * @method string getAutoScalingGroupId() 获取伸缩组ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID
 * @method integer getDesiredCapacity() 获取期望实例数
 * @method void setDesiredCapacity(integer $DesiredCapacity) 设置期望实例数
 * @method integer getMinSize() 获取最小实例数，取值范围为0-2000。
 * @method void setMinSize(integer $MinSize) 设置最小实例数，取值范围为0-2000。
 * @method integer getMaxSize() 获取最大实例数，取值范围为0-2000。
 * @method void setMaxSize(integer $MaxSize) 设置最大实例数，取值范围为0-2000。
 */
class ModifyDesiredCapacityRequest extends AbstractModel
{
    /**
     * @var string 伸缩组ID
     */
    public $AutoScalingGroupId;

    /**
     * @var integer 期望实例数
     */
    public $DesiredCapacity;

    /**
     * @var integer 最小实例数，取值范围为0-2000。
     */
    public $MinSize;

    /**
     * @var integer 最大实例数，取值范围为0-2000。
     */
    public $MaxSize;

    /**
     * @param string $AutoScalingGroupId 伸缩组ID
     * @param integer $DesiredCapacity 期望实例数
     * @param integer $MinSize 最小实例数，取值范围为0-2000。
     * @param integer $MaxSize 最大实例数，取值范围为0-2000。
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            $this->DesiredCapacity = $param["DesiredCapacity"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }
    }
}
