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
 * @method string getCopyPairId() 获取要修改属性的复制对id
 * @method void setCopyPairId(string $CopyPairId) 设置要修改属性的复制对id
 * @method string getCopyPairType() 获取要修改的复制对类型，可选值：DISK、INSTANCE、CFS，默认 INSTANCE
 * @method void setCopyPairType(string $CopyPairType) 设置要修改的复制对类型，可选值：DISK、INSTANCE、CFS，默认 INSTANCE
 * @method string getCopyPairName() 获取修改复制对名称（长度最大支持 64 个字符）
 * @method void setCopyPairName(string $CopyPairName) 设置修改复制对名称（长度最大支持 64 个字符）
 */
class ModifyCopyPairAttributeRequest extends AbstractModel
{
    /**
     * @var string 要修改属性的复制对id
     */
    public $CopyPairId;

    /**
     * @var string 要修改的复制对类型，可选值：DISK、INSTANCE、CFS，默认 INSTANCE
     */
    public $CopyPairType;

    /**
     * @var string 修改复制对名称（长度最大支持 64 个字符）
     */
    public $CopyPairName;

    /**
     * @param string $CopyPairId 要修改属性的复制对id
     * @param string $CopyPairType 要修改的复制对类型，可选值：DISK、INSTANCE、CFS，默认 INSTANCE
     * @param string $CopyPairName 修改复制对名称（长度最大支持 64 个字符）
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
    }
}
