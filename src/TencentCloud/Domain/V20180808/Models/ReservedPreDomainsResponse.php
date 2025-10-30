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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReservedPreDomains返回参数结构体
 *
 * @method array getSucDomainList() 获取预定成功域名列表
 * @method void setSucDomainList(array $SucDomainList) 设置预定成功域名列表
 * @method array getFailDomainList() 获取预定失败域名列表
 * @method void setFailDomainList(array $FailDomainList) 设置预定失败域名列表
 * @method array getSucDomains() 获取域名预定成功详情
 * @method void setSucDomains(array $SucDomains) 设置域名预定成功详情
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ReservedPreDomainsResponse extends AbstractModel
{
    /**
     * @var array 预定成功域名列表
     */
    public $SucDomainList;

    /**
     * @var array 预定失败域名列表
     */
    public $FailDomainList;

    /**
     * @var array 域名预定成功详情
     */
    public $SucDomains;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $SucDomainList 预定成功域名列表
     * @param array $FailDomainList 预定失败域名列表
     * @param array $SucDomains 域名预定成功详情
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
        if (array_key_exists("SucDomainList",$param) and $param["SucDomainList"] !== null) {
            $this->SucDomainList = $param["SucDomainList"];
        }

        if (array_key_exists("FailDomainList",$param) and $param["FailDomainList"] !== null) {
            $this->FailDomainList = [];
            foreach ($param["FailDomainList"] as $key => $value){
                $obj = new FailReservedDomainInfo();
                $obj->deserialize($value);
                array_push($this->FailDomainList, $obj);
            }
        }

        if (array_key_exists("SucDomains",$param) and $param["SucDomains"] !== null) {
            $this->SucDomains = [];
            foreach ($param["SucDomains"] as $key => $value){
                $obj = new SucDomainInfo();
                $obj->deserialize($value);
                array_push($this->SucDomains, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
