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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GC 参数
 *
 * @method boolean getDryrun() 获取模拟运行
 * @method void setDryrun(boolean $Dryrun) 设置模拟运行
 */
class GCParameters extends AbstractModel
{
    /**
     * @var boolean 模拟运行
     */
    public $Dryrun;

    /**
     * @param boolean $Dryrun 模拟运行
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
        if (array_key_exists("Dryrun",$param) and $param["Dryrun"] !== null) {
            $this->Dryrun = $param["Dryrun"];
        }
    }
}
