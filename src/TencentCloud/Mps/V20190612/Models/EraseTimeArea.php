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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能擦除，指定擦除区域配置。
对指定时间段内的指定区域直接进行擦除。
当BeginMs和EndMs均取0时对整个视频内的指定区域直接进行擦除。
 *
 * @method integer getBeginMs() 获取开始时间，单位:毫秒
 * @method void setBeginMs(integer $BeginMs) 设置开始时间，单位:毫秒
 * @method integer getEndMs() 获取结束时间，单位:毫秒
 * @method void setEndMs(integer $EndMs) 设置结束时间，单位:毫秒
 * @method array getAreas() 获取时间段内擦除区域列表
 * @method void setAreas(array $Areas) 设置时间段内擦除区域列表
 */
class EraseTimeArea extends AbstractModel
{
    /**
     * @var integer 开始时间，单位:毫秒
     */
    public $BeginMs;

    /**
     * @var integer 结束时间，单位:毫秒
     */
    public $EndMs;

    /**
     * @var array 时间段内擦除区域列表
     */
    public $Areas;

    /**
     * @param integer $BeginMs 开始时间，单位:毫秒
     * @param integer $EndMs 结束时间，单位:毫秒
     * @param array $Areas 时间段内擦除区域列表
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
        if (array_key_exists("BeginMs",$param) and $param["BeginMs"] !== null) {
            $this->BeginMs = $param["BeginMs"];
        }

        if (array_key_exists("EndMs",$param) and $param["EndMs"] !== null) {
            $this->EndMs = $param["EndMs"];
        }

        if (array_key_exists("Areas",$param) and $param["Areas"] !== null) {
            $this->Areas = [];
            foreach ($param["Areas"] as $key => $value){
                $obj = new EraseArea();
                $obj->deserialize($value);
                array_push($this->Areas, $obj);
            }
        }
    }
}
