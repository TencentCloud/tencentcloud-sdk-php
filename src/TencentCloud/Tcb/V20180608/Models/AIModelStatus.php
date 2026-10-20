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
 * 控制模型启用和停止
 *
 * @method string getModel() 获取<p>模型名称</p>
 * @method void setModel(string $Model) 设置<p>模型名称</p>
 * @method string getStatus() 获取<p>开关状态</p><p>枚举值：</p><ul><li>ENABLE： 打开模型</li><li>DISABLE： 关闭模型</li></ul>
 * @method void setStatus(string $Status) 设置<p>开关状态</p><p>枚举值：</p><ul><li>ENABLE： 打开模型</li><li>DISABLE： 关闭模型</li></ul>
 */
class AIModelStatus extends AbstractModel
{
    /**
     * @var string <p>模型名称</p>
     */
    public $Model;

    /**
     * @var string <p>开关状态</p><p>枚举值：</p><ul><li>ENABLE： 打开模型</li><li>DISABLE： 关闭模型</li></ul>
     */
    public $Status;

    /**
     * @param string $Model <p>模型名称</p>
     * @param string $Status <p>开关状态</p><p>枚举值：</p><ul><li>ENABLE： 打开模型</li><li>DISABLE： 关闭模型</li></ul>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
