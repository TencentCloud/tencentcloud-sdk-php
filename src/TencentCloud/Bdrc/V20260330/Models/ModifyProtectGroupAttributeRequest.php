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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProtectGroupAttribute请求参数结构体
 *
 * @method string getProtectGroupId() 获取要修改属性的保护组id
 * @method void setProtectGroupId(string $ProtectGroupId) 设置要修改属性的保护组id
 * @method string getProtectGroupName() 获取保护组名称
 * @method void setProtectGroupName(string $ProtectGroupName) 设置保护组名称
 */
class ModifyProtectGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string 要修改属性的保护组id
     */
    public $ProtectGroupId;

    /**
     * @var string 保护组名称
     */
    public $ProtectGroupName;

    /**
     * @param string $ProtectGroupId 要修改属性的保护组id
     * @param string $ProtectGroupName 保护组名称
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
        if (array_key_exists("ProtectGroupId",$param) and $param["ProtectGroupId"] !== null) {
            $this->ProtectGroupId = $param["ProtectGroupId"];
        }

        if (array_key_exists("ProtectGroupName",$param) and $param["ProtectGroupName"] !== null) {
            $this->ProtectGroupName = $param["ProtectGroupName"];
        }
    }
}
