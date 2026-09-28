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
 * 云应用 WebHook 配置
 *
 * @method boolean getEnabled() 获取<p>开启 webhook 触发</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>开启 webhook 触发</p>
 * @method array getBranches() 获取<p>触发分支</p>
 * @method void setBranches(array $Branches) 设置<p>触发分支</p>
 * @method array getEvents() 获取<p>触发事件</p>
 * @method void setEvents(array $Events) 设置<p>触发事件</p>
 */
class CloudAppWebHook extends AbstractModel
{
    /**
     * @var boolean <p>开启 webhook 触发</p>
     */
    public $Enabled;

    /**
     * @var array <p>触发分支</p>
     */
    public $Branches;

    /**
     * @var array <p>触发事件</p>
     */
    public $Events;

    /**
     * @param boolean $Enabled <p>开启 webhook 触发</p>
     * @param array $Branches <p>触发分支</p>
     * @param array $Events <p>触发事件</p>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Branches",$param) and $param["Branches"] !== null) {
            $this->Branches = $param["Branches"];
        }

        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = $param["Events"];
        }
    }
}
