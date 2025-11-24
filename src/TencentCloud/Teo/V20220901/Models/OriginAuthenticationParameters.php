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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回源鉴权参数。
 *
 * @method array getRequestProperties() 获取回源鉴权请求属性。
 * @method void setRequestProperties(array $RequestProperties) 设置回源鉴权请求属性。
 */
class OriginAuthenticationParameters extends AbstractModel
{
    /**
     * @var array 回源鉴权请求属性。
     */
    public $RequestProperties;

    /**
     * @param array $RequestProperties 回源鉴权请求属性。
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
        if (array_key_exists("RequestProperties",$param) and $param["RequestProperties"] !== null) {
            $this->RequestProperties = [];
            foreach ($param["RequestProperties"] as $key => $value){
                $obj = new OriginAuthenticationRequestProperties();
                $obj->deserialize($value);
                array_push($this->RequestProperties, $obj);
            }
        }
    }
}
