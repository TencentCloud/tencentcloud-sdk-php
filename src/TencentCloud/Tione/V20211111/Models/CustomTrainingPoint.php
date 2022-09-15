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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义训练指标数据点
 *
 * @method float getXValue() 获取X值
 * @method void setXValue(float $XValue) 设置X值
 * @method float getYValue() 获取Y值
 * @method void setYValue(float $YValue) 设置Y值
 */
class CustomTrainingPoint extends AbstractModel
{
    /**
     * @var float X值
     */
    public $XValue;

    /**
     * @var float Y值
     */
    public $YValue;

    /**
     * @param float $XValue X值
     * @param float $YValue Y值
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
        if (array_key_exists("XValue",$param) and $param["XValue"] !== null) {
            $this->XValue = $param["XValue"];
        }

        if (array_key_exists("YValue",$param) and $param["YValue"] !== null) {
            $this->YValue = $param["YValue"];
        }
    }
}
