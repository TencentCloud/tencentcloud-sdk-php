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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建输入的RTP配置信息。
 *
 * @method string getFEC() 获取默认为“none”，可选值['none']。
 * @method void setFEC(string $FEC) 设置默认为“none”，可选值['none']。
 * @method integer getIdleTimeout() 获取空闲超时时间，默认5000，单位ms，范围为[1000, 10000]。
 * @method void setIdleTimeout(integer $IdleTimeout) 设置空闲超时时间，默认5000，单位ms，范围为[1000, 10000]。
 */
class CreateInputRTPSettings extends AbstractModel
{
    /**
     * @var string 默认为“none”，可选值['none']。
     */
    public $FEC;

    /**
     * @var integer 空闲超时时间，默认5000，单位ms，范围为[1000, 10000]。
     */
    public $IdleTimeout;

    /**
     * @param string $FEC 默认为“none”，可选值['none']。
     * @param integer $IdleTimeout 空闲超时时间，默认5000，单位ms，范围为[1000, 10000]。
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
        if (array_key_exists("FEC",$param) and $param["FEC"] !== null) {
            $this->FEC = $param["FEC"];
        }

        if (array_key_exists("IdleTimeout",$param) and $param["IdleTimeout"] !== null) {
            $this->IdleTimeout = $param["IdleTimeout"];
        }
    }
}
