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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 键值索引自动配置，启用后自动将日志内的字段添加到键值索引中，包括日志中后续新增的字段。
 *
 * @method boolean getStatus() 获取键值索引自动配置开关
 * @method void setStatus(boolean $Status) 设置键值索引自动配置开关
 */
class DynamicIndex extends AbstractModel
{
    /**
     * @var boolean 键值索引自动配置开关
     */
    public $Status;

    /**
     * @param boolean $Status 键值索引自动配置开关
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
