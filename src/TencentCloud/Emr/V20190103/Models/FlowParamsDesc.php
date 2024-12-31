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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务参数描述
 *
 * @method string getPKey() 获取参数key
 * @method void setPKey(string $PKey) 设置参数key
 * @method string getPValue() 获取参数value
 * @method void setPValue(string $PValue) 设置参数value
 */
class FlowParamsDesc extends AbstractModel
{
    /**
     * @var string 参数key
     */
    public $PKey;

    /**
     * @var string 参数value
     */
    public $PValue;

    /**
     * @param string $PKey 参数key
     * @param string $PValue 参数value
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
        if (array_key_exists("PKey",$param) and $param["PKey"] !== null) {
            $this->PKey = $param["PKey"];
        }

        if (array_key_exists("PValue",$param) and $param["PValue"] !== null) {
            $this->PValue = $param["PValue"];
        }
    }
}
