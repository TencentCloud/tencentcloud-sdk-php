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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例属性
 *
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method Attribute getAttributes() 获取实例属性信息。
 * @method void setAttributes(Attribute $Attributes) 设置实例属性信息。
 */
class InstanceAttribute extends AbstractModel
{
    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var Attribute 实例属性信息。
     */
    public $Attributes;

    /**
     * @param string $InstanceId 实例 ID。
     * @param Attribute $Attributes 实例属性信息。
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

        if (array_key_exists("Attributes",$param) and $param["Attributes"] !== null) {
            $this->Attributes = new Attribute();
            $this->Attributes->deserialize($param["Attributes"]);
        }
    }
}
