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
 * ModifyEnv请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID</p>
 * @method string getAlias() 获取<p>环境备注名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符</p>
 * @method void setAlias(string $Alias) 设置<p>环境备注名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符</p>
 * @method integer getCustomQps() 获取<p>按量计费QPS上限，大于套餐配额时生效。-1表示关闭QPS按量计费。</p>
 * @method void setCustomQps(integer $CustomQps) 设置<p>按量计费QPS上限，大于套餐配额时生效。-1表示关闭QPS按量计费。</p>
 */
class ModifyEnvRequest extends AbstractModel
{
    /**
     * @var string <p>环境ID</p>
     */
    public $EnvId;

    /**
     * @var string <p>环境备注名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符</p>
     */
    public $Alias;

    /**
     * @var integer <p>按量计费QPS上限，大于套餐配额时生效。-1表示关闭QPS按量计费。</p>
     */
    public $CustomQps;

    /**
     * @param string $EnvId <p>环境ID</p>
     * @param string $Alias <p>环境备注名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符</p>
     * @param integer $CustomQps <p>按量计费QPS上限，大于套餐配额时生效。-1表示关闭QPS按量计费。</p>
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

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("CustomQps",$param) and $param["CustomQps"] !== null) {
            $this->CustomQps = $param["CustomQps"];
        }
    }
}
