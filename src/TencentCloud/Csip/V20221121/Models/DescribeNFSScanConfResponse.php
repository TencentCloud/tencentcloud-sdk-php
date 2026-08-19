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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNFSScanConf返回参数结构体
 *
 * @method integer getEnable() 获取<p>是否开启NFS扫描 0 否 1 是 9未设置,和0一样是未开启</p>
 * @method void setEnable(integer $Enable) 设置<p>是否开启NFS扫描 0 否 1 是 9未设置,和0一样是未开启</p>
 * @method integer getScope() 获取<p>开启范围 0 自选主机 1 全部主机</p>
 * @method void setScope(integer $Scope) 设置<p>开启范围 0 自选主机 1 全部主机</p>
 * @method array getIncludeQuuid() 获取<p>正选quuid配置列表</p>
 * @method void setIncludeQuuid(array $IncludeQuuid) 设置<p>正选quuid配置列表</p>
 * @method array getExcludeQuuid() 获取<p>反选quuid配置列表</p>
 * @method void setExcludeQuuid(array $ExcludeQuuid) 设置<p>反选quuid配置列表</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNFSScanConfResponse extends AbstractModel
{
    /**
     * @var integer <p>是否开启NFS扫描 0 否 1 是 9未设置,和0一样是未开启</p>
     */
    public $Enable;

    /**
     * @var integer <p>开启范围 0 自选主机 1 全部主机</p>
     */
    public $Scope;

    /**
     * @var array <p>正选quuid配置列表</p>
     */
    public $IncludeQuuid;

    /**
     * @var array <p>反选quuid配置列表</p>
     */
    public $ExcludeQuuid;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Enable <p>是否开启NFS扫描 0 否 1 是 9未设置,和0一样是未开启</p>
     * @param integer $Scope <p>开启范围 0 自选主机 1 全部主机</p>
     * @param array $IncludeQuuid <p>正选quuid配置列表</p>
     * @param array $ExcludeQuuid <p>反选quuid配置列表</p>
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("IncludeQuuid",$param) and $param["IncludeQuuid"] !== null) {
            $this->IncludeQuuid = $param["IncludeQuuid"];
        }

        if (array_key_exists("ExcludeQuuid",$param) and $param["ExcludeQuuid"] !== null) {
            $this->ExcludeQuuid = $param["ExcludeQuuid"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
