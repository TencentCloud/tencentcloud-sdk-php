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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 套餐中安全防护信息
 *
 * @method string getIsDefendFree() 获取是否是免费赠送：yes-是；no-不是
 * @method void setIsDefendFree(string $IsDefendFree) 设置是否是免费赠送：yes-是；no-不是
 * @method string getKey() 获取防护类型
 * @method void setKey(string $Key) 设置防护类型
 * @method string getResourceId() 获取资源 ID
 * @method void setResourceId(string $ResourceId) 设置资源 ID
 */
class SecurityInfo extends AbstractModel
{
    /**
     * @var string 是否是免费赠送：yes-是；no-不是
     */
    public $IsDefendFree;

    /**
     * @var string 防护类型
     */
    public $Key;

    /**
     * @var string 资源 ID
     */
    public $ResourceId;

    /**
     * @param string $IsDefendFree 是否是免费赠送：yes-是；no-不是
     * @param string $Key 防护类型
     * @param string $ResourceId 资源 ID
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
        if (array_key_exists("IsDefendFree",$param) and $param["IsDefendFree"] !== null) {
            $this->IsDefendFree = $param["IsDefendFree"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
