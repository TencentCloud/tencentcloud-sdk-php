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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateIotDataType请求参数结构体
 *
 * @method string getIotDataType() 获取用户自定义数据类型，json格式的字符串
 * @method void setIotDataType(string $IotDataType) 设置用户自定义数据类型，json格式的字符串
 */
class CreateIotDataTypeRequest extends AbstractModel
{
    /**
     * @var string 用户自定义数据类型，json格式的字符串
     */
    public $IotDataType;

    /**
     * @param string $IotDataType 用户自定义数据类型，json格式的字符串
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
        if (array_key_exists("IotDataType",$param) and $param["IotDataType"] !== null) {
            $this->IotDataType = $param["IotDataType"];
        }
    }
}
