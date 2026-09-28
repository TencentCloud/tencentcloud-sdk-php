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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePlatformHTTPServiceRoute返回参数结构体
 *
 * @method array getDomains() 获取<p>域名路由信息列表</p>
 * @method void setDomains(array $Domains) 设置<p>域名路由信息列表</p>
 * @method string getOriginDomain() 获取<p>自定义接入的源站域名（HTTPService接入层域名）</p>
 * @method void setOriginDomain(string $OriginDomain) 设置<p>自定义接入的源站域名（HTTPService接入层域名）</p>
 * @method integer getTotalCount() 获取<p>域名总数，分页查询使用总数判断是否已经拉取到所有数据</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>域名总数，分页查询使用总数判断是否已经拉取到所有数据</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePlatformHTTPServiceRouteResponse extends AbstractModel
{
    /**
     * @var array <p>域名路由信息列表</p>
     */
    public $Domains;

    /**
     * @var string <p>自定义接入的源站域名（HTTPService接入层域名）</p>
     */
    public $OriginDomain;

    /**
     * @var integer <p>域名总数，分页查询使用总数判断是否已经拉取到所有数据</p>
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Domains <p>域名路由信息列表</p>
     * @param string $OriginDomain <p>自定义接入的源站域名（HTTPService接入层域名）</p>
     * @param integer $TotalCount <p>域名总数，分页查询使用总数判断是否已经拉取到所有数据</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = [];
            foreach ($param["Domains"] as $key => $value){
                $obj = new HTTPServiceDomain();
                $obj->deserialize($value);
                array_push($this->Domains, $obj);
            }
        }

        if (array_key_exists("OriginDomain",$param) and $param["OriginDomain"] !== null) {
            $this->OriginDomain = $param["OriginDomain"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
