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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTargetGroupAttribute请求参数结构体
 *
 * @method string getTargetGroupId() 获取目标组的ID，可以通过[DescribeTargetGroups](https://cloud.tencent.com/document/product/214/40554)获取。
 * @method void setTargetGroupId(string $TargetGroupId) 设置目标组的ID，可以通过[DescribeTargetGroups](https://cloud.tencent.com/document/product/214/40554)获取。
 * @method string getTargetGroupName() 获取目标组的新名称。
 * @method void setTargetGroupName(string $TargetGroupName) 设置目标组的新名称。
 * @method TargetGroupHealthCheck getHealthCheck() 获取健康检查详情。
 * @method void setHealthCheck(TargetGroupHealthCheck $HealthCheck) 设置健康检查详情。
 * @method boolean getAllDeadToAlive() 获取是否支持全死全活。
 * @method void setAllDeadToAlive(boolean $AllDeadToAlive) 设置是否支持全死全活。
 */
class ModifyTargetGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string 目标组的ID，可以通过[DescribeTargetGroups](https://cloud.tencent.com/document/product/214/40554)获取。
     */
    public $TargetGroupId;

    /**
     * @var string 目标组的新名称。
     */
    public $TargetGroupName;

    /**
     * @var TargetGroupHealthCheck 健康检查详情。
     */
    public $HealthCheck;

    /**
     * @var boolean 是否支持全死全活。
     */
    public $AllDeadToAlive;

    /**
     * @param string $TargetGroupId 目标组的ID，可以通过[DescribeTargetGroups](https://cloud.tencent.com/document/product/214/40554)获取。
     * @param string $TargetGroupName 目标组的新名称。
     * @param TargetGroupHealthCheck $HealthCheck 健康检查详情。
     * @param boolean $AllDeadToAlive 是否支持全死全活。
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
        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new TargetGroupHealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("AllDeadToAlive",$param) and $param["AllDeadToAlive"] !== null) {
            $this->AllDeadToAlive = $param["AllDeadToAlive"];
        }
    }
}
