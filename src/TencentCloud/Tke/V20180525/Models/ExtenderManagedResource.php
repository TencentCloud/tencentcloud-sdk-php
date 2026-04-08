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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扩展调度器(Extender)管理的扩展资源
 *
 * @method string getName() 获取<p>自定义资源的名称</p>
 * @method void setName(string $Name) 设置<p>自定义资源的名称</p>
 * @method boolean getIgnoredByScheduler() 获取<p>调度器是否忽略该资源的默认处理</p>
 * @method void setIgnoredByScheduler(boolean $IgnoredByScheduler) 设置<p>调度器是否忽略该资源的默认处理</p>
 */
class ExtenderManagedResource extends AbstractModel
{
    /**
     * @var string <p>自定义资源的名称</p>
     */
    public $Name;

    /**
     * @var boolean <p>调度器是否忽略该资源的默认处理</p>
     */
    public $IgnoredByScheduler;

    /**
     * @param string $Name <p>自定义资源的名称</p>
     * @param boolean $IgnoredByScheduler <p>调度器是否忽略该资源的默认处理</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IgnoredByScheduler",$param) and $param["IgnoredByScheduler"] !== null) {
            $this->IgnoredByScheduler = $param["IgnoredByScheduler"];
        }
    }
}
