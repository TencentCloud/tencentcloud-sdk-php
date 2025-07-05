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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTDidByHost请求参数结构体
 *
 * @method integer getDAPId() 获取DID应用ID
 * @method void setDAPId(integer $DAPId) 设置DID应用ID
 * @method string getCustomAttribute() 获取自定义DID文档json属性
 * @method void setCustomAttribute(string $CustomAttribute) 设置自定义DID文档json属性
 */
class CreateTDidByHostRequest extends AbstractModel
{
    /**
     * @var integer DID应用ID
     */
    public $DAPId;

    /**
     * @var string 自定义DID文档json属性
     */
    public $CustomAttribute;

    /**
     * @param integer $DAPId DID应用ID
     * @param string $CustomAttribute 自定义DID文档json属性
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
        if (array_key_exists("DAPId",$param) and $param["DAPId"] !== null) {
            $this->DAPId = $param["DAPId"];
        }

        if (array_key_exists("CustomAttribute",$param) and $param["CustomAttribute"] !== null) {
            $this->CustomAttribute = $param["CustomAttribute"];
        }
    }
}
