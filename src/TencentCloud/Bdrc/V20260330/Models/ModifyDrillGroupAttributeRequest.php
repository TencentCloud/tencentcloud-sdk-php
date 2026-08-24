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
 * ModifyDrillGroupAttribute请求参数结构体
 *
 * @method string getDrillGroupId() 获取要修改属性的容灾演练组id。
 * @method void setDrillGroupId(string $DrillGroupId) 设置要修改属性的容灾演练组id。
 * @method string getDrillGroupName() 获取修改容灾演练组名称（长度最大支持 64 个字符）
 * @method void setDrillGroupName(string $DrillGroupName) 设置修改容灾演练组名称（长度最大支持 64 个字符）
 */
class ModifyDrillGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string 要修改属性的容灾演练组id。
     */
    public $DrillGroupId;

    /**
     * @var string 修改容灾演练组名称（长度最大支持 64 个字符）
     */
    public $DrillGroupName;

    /**
     * @param string $DrillGroupId 要修改属性的容灾演练组id。
     * @param string $DrillGroupName 修改容灾演练组名称（长度最大支持 64 个字符）
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
        if (array_key_exists("DrillGroupId",$param) and $param["DrillGroupId"] !== null) {
            $this->DrillGroupId = $param["DrillGroupId"];
        }

        if (array_key_exists("DrillGroupName",$param) and $param["DrillGroupName"] !== null) {
            $this->DrillGroupName = $param["DrillGroupName"];
        }
    }
}
