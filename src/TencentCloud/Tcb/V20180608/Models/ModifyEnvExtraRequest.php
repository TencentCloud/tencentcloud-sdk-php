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
 * ModifyEnvExtra请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID</p>
 * @method string getEnableOverrun() 获取<p>开启或关闭 <code>超限转按量</code>。<br>可取值： TRUE/FALSE （字符串类型）<br>非法制、不传、为空 则不变更该字段。</p>
 * @method void setEnableOverrun(string $EnableOverrun) 设置<p>开启或关闭 <code>超限转按量</code>。<br>可取值： TRUE/FALSE （字符串类型）<br>非法制、不传、为空 则不变更该字段。</p>
 */
class ModifyEnvExtraRequest extends AbstractModel
{
    /**
     * @var string <p>环境ID</p>
     */
    public $EnvId;

    /**
     * @var string <p>开启或关闭 <code>超限转按量</code>。<br>可取值： TRUE/FALSE （字符串类型）<br>非法制、不传、为空 则不变更该字段。</p>
     */
    public $EnableOverrun;

    /**
     * @param string $EnvId <p>环境ID</p>
     * @param string $EnableOverrun <p>开启或关闭 <code>超限转按量</code>。<br>可取值： TRUE/FALSE （字符串类型）<br>非法制、不传、为空 则不变更该字段。</p>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("EnableOverrun",$param) and $param["EnableOverrun"] !== null) {
            $this->EnableOverrun = $param["EnableOverrun"];
        }
    }
}
