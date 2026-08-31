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
 * 查询输入的RTP配置信息。
 *
 * @method string getFEC() 获取<p>是否FEC。</p>
 * @method void setFEC(string $FEC) 设置<p>是否FEC。</p>
 * @method integer getIdleTimeout() 获取<p>空闲超时时间。</p>
 * @method void setIdleTimeout(integer $IdleTimeout) 设置<p>空闲超时时间。</p>
 */
class DescribeInputRTPSettings extends AbstractModel
{
    /**
     * @var string <p>是否FEC。</p>
     */
    public $FEC;

    /**
     * @var integer <p>空闲超时时间。</p>
     */
    public $IdleTimeout;

    /**
     * @param string $FEC <p>是否FEC。</p>
     * @param integer $IdleTimeout <p>空闲超时时间。</p>
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
