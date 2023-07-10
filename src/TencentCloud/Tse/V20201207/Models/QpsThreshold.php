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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生网关限流插件Qps阈值
 *
 * @method string getUnit() 获取qps阈值控制维度,包含:second、minute、hour、day、month、year
 * @method void setUnit(string $Unit) 设置qps阈值控制维度,包含:second、minute、hour、day、month、year
 * @method integer getMax() 获取阈值
 * @method void setMax(integer $Max) 设置阈值
 */
class QpsThreshold extends AbstractModel
{
    /**
     * @var string qps阈值控制维度,包含:second、minute、hour、day、month、year
     */
    public $Unit;

    /**
     * @var integer 阈值
     */
    public $Max;

    /**
     * @param string $Unit qps阈值控制维度,包含:second、minute、hour、day、month、year
     * @param integer $Max 阈值
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
        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }
    }
}
