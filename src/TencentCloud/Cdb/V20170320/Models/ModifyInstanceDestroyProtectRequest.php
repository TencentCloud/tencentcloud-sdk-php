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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceDestroyProtect请求参数结构体
 *
 * @method array getInstanceIds() 获取实例 ID 列表
 * @method void setInstanceIds(array $InstanceIds) 设置实例 ID 列表
 * @method string getDestroyProtect() 获取开启或关闭实例销毁保护
 * @method void setDestroyProtect(string $DestroyProtect) 设置开启或关闭实例销毁保护
 */
class ModifyInstanceDestroyProtectRequest extends AbstractModel
{
    /**
     * @var array 实例 ID 列表
     */
    public $InstanceIds;

    /**
     * @var string 开启或关闭实例销毁保护
     */
    public $DestroyProtect;

    /**
     * @param array $InstanceIds 实例 ID 列表
     * @param string $DestroyProtect 开启或关闭实例销毁保护
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("DestroyProtect",$param) and $param["DestroyProtect"] !== null) {
            $this->DestroyProtect = $param["DestroyProtect"];
        }
    }
}
