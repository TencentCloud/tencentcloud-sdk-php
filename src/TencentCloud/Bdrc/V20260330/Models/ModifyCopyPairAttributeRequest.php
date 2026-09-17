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
 * ModifyCopyPairAttribute请求参数结构体
 *
 * @method string getCopyPairId() 获取<p>要修改属性的复制对id</p>
 * @method void setCopyPairId(string $CopyPairId) 设置<p>要修改属性的复制对id</p>
 * @method string getCopyPairType() 获取<p>要修改的复制对类型，可选值：DISK、INSTANCE、CFS，默认 INSTANCE</p>
 * @method void setCopyPairType(string $CopyPairType) 设置<p>要修改的复制对类型，可选值：DISK、INSTANCE、CFS，默认 INSTANCE</p>
 * @method string getCopyPairName() 获取<p>修改复制对名称（长度最大支持 64 个字符）</p>
 * @method void setCopyPairName(string $CopyPairName) 设置<p>修改复制对名称（长度最大支持 64 个字符）</p>
 * @method string getInstanceType() 获取<p>容灾端实例类型（仅容灾端CVM未创建时可修改）</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>容灾端实例类型（仅容灾端CVM未创建时可修改）</p>
 */
class ModifyCopyPairAttributeRequest extends AbstractModel
{
    /**
     * @var string <p>要修改属性的复制对id</p>
     */
    public $CopyPairId;

    /**
     * @var string <p>要修改的复制对类型，可选值：DISK、INSTANCE、CFS，默认 INSTANCE</p>
     */
    public $CopyPairType;

    /**
     * @var string <p>修改复制对名称（长度最大支持 64 个字符）</p>
     */
    public $CopyPairName;

    /**
     * @var string <p>容灾端实例类型（仅容灾端CVM未创建时可修改）</p>
     */
    public $InstanceType;

    /**
     * @param string $CopyPairId <p>要修改属性的复制对id</p>
     * @param string $CopyPairType <p>要修改的复制对类型，可选值：DISK、INSTANCE、CFS，默认 INSTANCE</p>
     * @param string $CopyPairName <p>修改复制对名称（长度最大支持 64 个字符）</p>
     * @param string $InstanceType <p>容灾端实例类型（仅容灾端CVM未创建时可修改）</p>
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
        if (array_key_exists("CopyPairId",$param) and $param["CopyPairId"] !== null) {
            $this->CopyPairId = $param["CopyPairId"];
        }

        if (array_key_exists("CopyPairType",$param) and $param["CopyPairType"] !== null) {
            $this->CopyPairType = $param["CopyPairType"];
        }

        if (array_key_exists("CopyPairName",$param) and $param["CopyPairName"] !== null) {
            $this->CopyPairName = $param["CopyPairName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
