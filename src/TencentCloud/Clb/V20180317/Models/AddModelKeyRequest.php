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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddModelKey请求参数结构体
 *
 * @method string getServiceProviderId() 获取<p>服务提供商ID</p>
 * @method void setServiceProviderId(string $ServiceProviderId) 设置<p>服务提供商ID</p>
 * @method array getKeys() 获取<p>Key 列表，至少 1 个，最多 10 个</p>
 * @method void setKeys(array $Keys) 设置<p>Key 列表，至少 1 个，最多 10 个</p>
 */
class AddModelKeyRequest extends AbstractModel
{
    /**
     * @var string <p>服务提供商ID</p>
     */
    public $ServiceProviderId;

    /**
     * @var array <p>Key 列表，至少 1 个，最多 10 个</p>
     */
    public $Keys;

    /**
     * @param string $ServiceProviderId <p>服务提供商ID</p>
     * @param array $Keys <p>Key 列表，至少 1 个，最多 10 个</p>
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
        if (array_key_exists("ServiceProviderId",$param) and $param["ServiceProviderId"] !== null) {
            $this->ServiceProviderId = $param["ServiceProviderId"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = [];
            foreach ($param["Keys"] as $key => $value){
                $obj = new KeyItem();
                $obj->deserialize($value);
                array_push($this->Keys, $obj);
            }
        }
    }
}
