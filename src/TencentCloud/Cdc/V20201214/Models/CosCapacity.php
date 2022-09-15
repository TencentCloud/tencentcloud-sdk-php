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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDC集群内cos的容量信息
 *
 * @method float getTotalCapacity() 获取已购cos的总容量大小，单位GB
 * @method void setTotalCapacity(float $TotalCapacity) 设置已购cos的总容量大小，单位GB
 * @method float getTotalFreeCapacity() 获取剩余可用cos的容量大小，单位GB
 * @method void setTotalFreeCapacity(float $TotalFreeCapacity) 设置剩余可用cos的容量大小，单位GB
 * @method float getTotalUsedCapacity() 获取已用cos的容量大小，单位GB
 * @method void setTotalUsedCapacity(float $TotalUsedCapacity) 设置已用cos的容量大小，单位GB
 */
class CosCapacity extends AbstractModel
{
    /**
     * @var float 已购cos的总容量大小，单位GB
     */
    public $TotalCapacity;

    /**
     * @var float 剩余可用cos的容量大小，单位GB
     */
    public $TotalFreeCapacity;

    /**
     * @var float 已用cos的容量大小，单位GB
     */
    public $TotalUsedCapacity;

    /**
     * @param float $TotalCapacity 已购cos的总容量大小，单位GB
     * @param float $TotalFreeCapacity 剩余可用cos的容量大小，单位GB
     * @param float $TotalUsedCapacity 已用cos的容量大小，单位GB
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
        if (array_key_exists("TotalCapacity",$param) and $param["TotalCapacity"] !== null) {
            $this->TotalCapacity = $param["TotalCapacity"];
        }

        if (array_key_exists("TotalFreeCapacity",$param) and $param["TotalFreeCapacity"] !== null) {
            $this->TotalFreeCapacity = $param["TotalFreeCapacity"];
        }

        if (array_key_exists("TotalUsedCapacity",$param) and $param["TotalUsedCapacity"] !== null) {
            $this->TotalUsedCapacity = $param["TotalUsedCapacity"];
        }
    }
}
