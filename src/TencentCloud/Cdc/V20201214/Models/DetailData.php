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
 * 带有时间戳的详细数据。
 *
 * @method array getTimestamps() 获取时间戳
 * @method void setTimestamps(array $Timestamps) 设置时间戳
 * @method array getValues() 获取对应的具体值
 * @method void setValues(array $Values) 设置对应的具体值
 */
class DetailData extends AbstractModel
{
    /**
     * @var array 时间戳
     */
    public $Timestamps;

    /**
     * @var array 对应的具体值
     */
    public $Values;

    /**
     * @param array $Timestamps 时间戳
     * @param array $Values 对应的具体值
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
        if (array_key_exists("Timestamps",$param) and $param["Timestamps"] !== null) {
            $this->Timestamps = $param["Timestamps"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
