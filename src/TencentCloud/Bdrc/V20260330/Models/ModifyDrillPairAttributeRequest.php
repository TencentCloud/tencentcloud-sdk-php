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
 * ModifyDrillPairAttribute请求参数结构体
 *
 * @method string getDrillPairId() 获取要修改属性的容灾演练对id
 * @method void setDrillPairId(string $DrillPairId) 设置要修改属性的容灾演练对id
 * @method string getDrillPairName() 获取修改容灾演练对名称（长度最大支持 64 个字符）
 * @method void setDrillPairName(string $DrillPairName) 设置修改容灾演练对名称（长度最大支持 64 个字符）
 */
class ModifyDrillPairAttributeRequest extends AbstractModel
{
    /**
     * @var string 要修改属性的容灾演练对id
     */
    public $DrillPairId;

    /**
     * @var string 修改容灾演练对名称（长度最大支持 64 个字符）
     */
    public $DrillPairName;

    /**
     * @param string $DrillPairId 要修改属性的容灾演练对id
     * @param string $DrillPairName 修改容灾演练对名称（长度最大支持 64 个字符）
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
        if (array_key_exists("DrillPairId",$param) and $param["DrillPairId"] !== null) {
            $this->DrillPairId = $param["DrillPairId"];
        }

        if (array_key_exists("DrillPairName",$param) and $param["DrillPairName"] !== null) {
            $this->DrillPairName = $param["DrillPairName"];
        }
    }
}
