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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 调用追踪的Zipkin设置
 *
 * @method string getAddress() 获取Zipkin调用地址
 * @method void setAddress(string $Address) 设置Zipkin调用地址
 */
class TracingZipkin extends AbstractModel
{
    /**
     * @var string Zipkin调用地址
     */
    public $Address;

    /**
     * @param string $Address Zipkin调用地址
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }
    }
}
