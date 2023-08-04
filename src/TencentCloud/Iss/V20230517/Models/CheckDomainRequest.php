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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckDomain请求参数结构体
 *
 * @method string getPlayDomain() 获取播放域名
 * @method void setPlayDomain(string $PlayDomain) 设置播放域名
 * @method string getInternalDomain() 获取CNAME 记录值
 * @method void setInternalDomain(string $InternalDomain) 设置CNAME 记录值
 */
class CheckDomainRequest extends AbstractModel
{
    /**
     * @var string 播放域名
     */
    public $PlayDomain;

    /**
     * @var string CNAME 记录值
     */
    public $InternalDomain;

    /**
     * @param string $PlayDomain 播放域名
     * @param string $InternalDomain CNAME 记录值
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
        if (array_key_exists("PlayDomain",$param) and $param["PlayDomain"] !== null) {
            $this->PlayDomain = $param["PlayDomain"];
        }

        if (array_key_exists("InternalDomain",$param) and $param["InternalDomain"] !== null) {
            $this->InternalDomain = $param["InternalDomain"];
        }
    }
}
