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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件大小限制区间，单位 Byte；Min/Max 为 0 表示该侧无限制
 *
 * @method integer getMin() 获取下限，单位 Byte；0 表示无下限
 * @method void setMin(integer $Min) 设置下限，单位 Byte；0 表示无下限
 * @method integer getMax() 获取上限，单位 Byte；0 表示无上限
 * @method void setMax(integer $Max) 设置上限，单位 Byte；0 表示无上限
 */
class TrafficSandboxDLPFileSizeRange extends AbstractModel
{
    /**
     * @var integer 下限，单位 Byte；0 表示无下限
     */
    public $Min;

    /**
     * @var integer 上限，单位 Byte；0 表示无上限
     */
    public $Max;

    /**
     * @param integer $Min 下限，单位 Byte；0 表示无下限
     * @param integer $Max 上限，单位 Byte；0 表示无上限
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
        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }
    }
}
