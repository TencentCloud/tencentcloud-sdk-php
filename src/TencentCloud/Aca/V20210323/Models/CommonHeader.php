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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务接口请求头
 *
 * @method string getHospitalId() 获取机构ID
 * @method void setHospitalId(string $HospitalId) 设置机构ID
 * @method string getToken() 获取token
 * @method void setToken(string $Token) 设置token
 */
class CommonHeader extends AbstractModel
{
    /**
     * @var string 机构ID
     */
    public $HospitalId;

    /**
     * @var string token
     */
    public $Token;

    /**
     * @param string $HospitalId 机构ID
     * @param string $Token token
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
        if (array_key_exists("HospitalId",$param) and $param["HospitalId"] !== null) {
            $this->HospitalId = $param["HospitalId"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }
    }
}
