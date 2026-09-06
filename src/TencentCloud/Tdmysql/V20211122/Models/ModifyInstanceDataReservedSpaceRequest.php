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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceDataReservedSpace请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method float getReservedSpaceGB() 获取<p>拟修改的目标保留空间大小</p><p>单位：GB</p>
 * @method void setReservedSpaceGB(float $ReservedSpaceGB) 设置<p>拟修改的目标保留空间大小</p><p>单位：GB</p>
 */
class ModifyInstanceDataReservedSpaceRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var float <p>拟修改的目标保留空间大小</p><p>单位：GB</p>
     */
    public $ReservedSpaceGB;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param float $ReservedSpaceGB <p>拟修改的目标保留空间大小</p><p>单位：GB</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ReservedSpaceGB",$param) and $param["ReservedSpaceGB"] !== null) {
            $this->ReservedSpaceGB = $param["ReservedSpaceGB"];
        }
    }
}
