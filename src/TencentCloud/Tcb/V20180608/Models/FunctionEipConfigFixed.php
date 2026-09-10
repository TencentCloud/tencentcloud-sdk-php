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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 固定 IP 配置
 *
 * @method string getEipFixed() 获取<p>是否固定 IP，TRUE / FALSE</p>
 * @method void setEipFixed(string $EipFixed) 设置<p>是否固定 IP，TRUE / FALSE</p>
 */
class FunctionEipConfigFixed extends AbstractModel
{
    /**
     * @var string <p>是否固定 IP，TRUE / FALSE</p>
     */
    public $EipFixed;

    /**
     * @param string $EipFixed <p>是否固定 IP，TRUE / FALSE</p>
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
        if (array_key_exists("EipFixed",$param) and $param["EipFixed"] !== null) {
            $this->EipFixed = $param["EipFixed"];
        }
    }
}
