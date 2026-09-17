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
 * CreatePlatformEnv请求参数结构体
 *
 * @method string getAlias() 获取<p>环境别名</p>
 * @method void setAlias(string $Alias) 设置<p>环境别名</p>
 * @method string getPlatformId() 获取<p>套餐池标识</p>
 * @method void setPlatformId(string $PlatformId) 设置<p>套餐池标识</p>
 * @method string getReqKey() 获取<p>幂等键</p>
 * @method void setReqKey(string $ReqKey) 设置<p>幂等键</p>
 */
class CreatePlatformEnvRequest extends AbstractModel
{
    /**
     * @var string <p>环境别名</p>
     */
    public $Alias;

    /**
     * @var string <p>套餐池标识</p>
     */
    public $PlatformId;

    /**
     * @var string <p>幂等键</p>
     */
    public $ReqKey;

    /**
     * @param string $Alias <p>环境别名</p>
     * @param string $PlatformId <p>套餐池标识</p>
     * @param string $ReqKey <p>幂等键</p>
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("ReqKey",$param) and $param["ReqKey"] !== null) {
            $this->ReqKey = $param["ReqKey"];
        }
    }
}
