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
 * 构建运行配置
 *
 * @method integer getCpus() 获取<p>构建服务所需 CPU 规格</p>
 * @method void setCpus(integer $Cpus) 设置<p>构建服务所需 CPU 规格</p>
 */
class BuildRunner extends AbstractModel
{
    /**
     * @var integer <p>构建服务所需 CPU 规格</p>
     */
    public $Cpus;

    /**
     * @param integer $Cpus <p>构建服务所需 CPU 规格</p>
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
        if (array_key_exists("Cpus",$param) and $param["Cpus"] !== null) {
            $this->Cpus = $param["Cpus"];
        }
    }
}
