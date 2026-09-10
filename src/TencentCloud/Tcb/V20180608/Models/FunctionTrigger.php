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
 * 触发器类型
 *
 * @method string getModTime() 获取<p>触发器最后修改时间</p>
 * @method void setModTime(string $ModTime) 设置<p>触发器最后修改时间</p>
 * @method string getType() 获取<p>触发器类型</p>
 * @method void setType(string $Type) 设置<p>触发器类型</p>
 * @method string getTriggerDesc() 获取<p>触发器详细配置</p>
 * @method void setTriggerDesc(string $TriggerDesc) 设置<p>触发器详细配置</p>
 * @method string getTriggerName() 获取<p>触发器名称</p>
 * @method void setTriggerName(string $TriggerName) 设置<p>触发器名称</p>
 * @method string getAddTime() 获取<p>触发器创建时间</p>
 * @method void setAddTime(string $AddTime) 设置<p>触发器创建时间</p>
 */
class FunctionTrigger extends AbstractModel
{
    /**
     * @var string <p>触发器最后修改时间</p>
     */
    public $ModTime;

    /**
     * @var string <p>触发器类型</p>
     */
    public $Type;

    /**
     * @var string <p>触发器详细配置</p>
     */
    public $TriggerDesc;

    /**
     * @var string <p>触发器名称</p>
     */
    public $TriggerName;

    /**
     * @var string <p>触发器创建时间</p>
     */
    public $AddTime;

    /**
     * @param string $ModTime <p>触发器最后修改时间</p>
     * @param string $Type <p>触发器类型</p>
     * @param string $TriggerDesc <p>触发器详细配置</p>
     * @param string $TriggerName <p>触发器名称</p>
     * @param string $AddTime <p>触发器创建时间</p>
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
        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TriggerDesc",$param) and $param["TriggerDesc"] !== null) {
            $this->TriggerDesc = $param["TriggerDesc"];
        }

        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            $this->TriggerName = $param["TriggerName"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }
    }
}
