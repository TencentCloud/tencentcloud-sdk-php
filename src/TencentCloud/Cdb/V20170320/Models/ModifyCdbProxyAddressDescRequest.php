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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCdbProxyAddressDesc请求参数结构体
 *
 * @method string getProxyGroupId() 获取代理组 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
 * @method void setProxyGroupId(string $ProxyGroupId) 设置代理组 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
 * @method string getProxyAddressId() 获取代理组地址 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
 * @method void setProxyAddressId(string $ProxyAddressId) 设置代理组地址 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
 * @method string getDesc() 获取描述
 * @method void setDesc(string $Desc) 设置描述
 */
class ModifyCdbProxyAddressDescRequest extends AbstractModel
{
    /**
     * @var string 代理组 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
     */
    public $ProxyGroupId;

    /**
     * @var string 代理组地址 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
     */
    public $ProxyAddressId;

    /**
     * @var string 描述
     */
    public $Desc;

    /**
     * @param string $ProxyGroupId 代理组 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
     * @param string $ProxyAddressId 代理组地址 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
     * @param string $Desc 描述
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
        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("ProxyAddressId",$param) and $param["ProxyAddressId"] !== null) {
            $this->ProxyAddressId = $param["ProxyAddressId"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
