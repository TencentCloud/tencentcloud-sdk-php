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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAlarmShields请求参数结构体
 *
 * @method string getModule() 获取<p>模块名，这里填“monitor”</p>
 * @method void setModule(string $Module) 设置<p>模块名，这里填“monitor”</p>
 * @method array getShields() 获取<p>屏蔽策略Id列表</p>
 * @method void setShields(array $Shields) 设置<p>屏蔽策略Id列表</p>
 */
class DeleteAlarmShieldsRequest extends AbstractModel
{
    /**
     * @var string <p>模块名，这里填“monitor”</p>
     */
    public $Module;

    /**
     * @var array <p>屏蔽策略Id列表</p>
     */
    public $Shields;

    /**
     * @param string $Module <p>模块名，这里填“monitor”</p>
     * @param array $Shields <p>屏蔽策略Id列表</p>
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Shields",$param) and $param["Shields"] !== null) {
            $this->Shields = $param["Shields"];
        }
    }
}
