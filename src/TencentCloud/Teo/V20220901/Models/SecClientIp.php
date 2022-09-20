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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户端ip信息
 *
 * @method string getClientIp() 获取客户端ip。
 * @method void setClientIp(string $ClientIp) 设置客户端ip。
 * @method integer getRequestMaxQps() 获取最大qps。
 * @method void setRequestMaxQps(integer $RequestMaxQps) 设置最大qps。
 * @method integer getRequestNum() 获取请求数。
 * @method void setRequestNum(integer $RequestNum) 设置请求数。
 */
class SecClientIp extends AbstractModel
{
    /**
     * @var string 客户端ip。
     */
    public $ClientIp;

    /**
     * @var integer 最大qps。
     */
    public $RequestMaxQps;

    /**
     * @var integer 请求数。
     */
    public $RequestNum;

    /**
     * @param string $ClientIp 客户端ip。
     * @param integer $RequestMaxQps 最大qps。
     * @param integer $RequestNum 请求数。
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
        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("RequestMaxQps",$param) and $param["RequestMaxQps"] !== null) {
            $this->RequestMaxQps = $param["RequestMaxQps"];
        }

        if (array_key_exists("RequestNum",$param) and $param["RequestNum"] !== null) {
            $this->RequestNum = $param["RequestNum"];
        }
    }
}
