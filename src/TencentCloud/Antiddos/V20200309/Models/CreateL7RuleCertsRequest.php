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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateL7RuleCerts请求参数结构体
 *
 * @method string getCertId() 获取SSL证书ID
 * @method void setCertId(string $CertId) 设置SSL证书ID
 * @method array getL7Rules() 获取L7域名转发规则列表
 * @method void setL7Rules(array $L7Rules) 设置L7域名转发规则列表
 */
class CreateL7RuleCertsRequest extends AbstractModel
{
    /**
     * @var string SSL证书ID
     */
    public $CertId;

    /**
     * @var array L7域名转发规则列表
     */
    public $L7Rules;

    /**
     * @param string $CertId SSL证书ID
     * @param array $L7Rules L7域名转发规则列表
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("L7Rules",$param) and $param["L7Rules"] !== null) {
            $this->L7Rules = [];
            foreach ($param["L7Rules"] as $key => $value){
                $obj = new InsL7Rules();
                $obj->deserialize($value);
                array_push($this->L7Rules, $obj);
            }
        }
    }
}
