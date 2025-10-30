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
 * DeleteMachineGroup请求参数结构体
 *
 * @method string getGroupId() 获取机器组Id
- 通过[获取机器组列表](https://cloud.tencent.com/document/product/614/56438)获取机器组Id。
 * @method void setGroupId(string $GroupId) 设置机器组Id
- 通过[获取机器组列表](https://cloud.tencent.com/document/product/614/56438)获取机器组Id。
 */
class DeleteMachineGroupRequest extends AbstractModel
{
    /**
     * @var string 机器组Id
- 通过[获取机器组列表](https://cloud.tencent.com/document/product/614/56438)获取机器组Id。
     */
    public $GroupId;

    /**
     * @param string $GroupId 机器组Id
- 通过[获取机器组列表](https://cloud.tencent.com/document/product/614/56438)获取机器组Id。
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
