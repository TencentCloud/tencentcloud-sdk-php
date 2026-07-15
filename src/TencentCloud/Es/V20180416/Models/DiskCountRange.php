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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多盘的取值范围
 *
 * @method integer getMin() 获取云盘块数下限
 * @method void setMin(integer $Min) 设置云盘块数下限
 * @method integer getMax() 获取云盘块数上限
 * @method void setMax(integer $Max) 设置云盘块数上限
 */
class DiskCountRange extends AbstractModel
{
    /**
     * @var integer 云盘块数下限
     */
    public $Min;

    /**
     * @var integer 云盘块数上限
     */
    public $Max;

    /**
     * @param integer $Min 云盘块数下限
     * @param integer $Max 云盘块数上限
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
