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
 * FlowParam流程参数
 *
 * @method string getFKey() 获取流程参数key
TraceId：通过TraceId查询
FlowId： 通过FlowId查询
 * @method void setFKey(string $FKey) 设置流程参数key
TraceId：通过TraceId查询
FlowId： 通过FlowId查询
 * @method string getFValue() 获取参数value
 * @method void setFValue(string $FValue) 设置参数value
 */
class FlowParam extends AbstractModel
{
    /**
     * @var string 流程参数key
TraceId：通过TraceId查询
FlowId： 通过FlowId查询
     */
    public $FKey;

    /**
     * @var string 参数value
     */
    public $FValue;

    /**
     * @param string $FKey 流程参数key
TraceId：通过TraceId查询
FlowId： 通过FlowId查询
     * @param string $FValue 参数value
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
        if (array_key_exists("FKey",$param) and $param["FKey"] !== null) {
            $this->FKey = $param["FKey"];
        }

        if (array_key_exists("FValue",$param) and $param["FValue"] !== null) {
            $this->FValue = $param["FValue"];
        }
    }
}
