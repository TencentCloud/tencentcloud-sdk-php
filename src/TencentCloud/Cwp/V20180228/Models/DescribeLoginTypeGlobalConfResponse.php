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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLoginTypeGlobalConf返回参数结构体
 *
 * @method integer getEnable() 获取<p>是否开启扫码登录 <li>0 否</li> <li>1 是</li> <li>9 未设置,和0一样是未开启</li></p>
 * @method void setEnable(integer $Enable) 设置<p>是否开启扫码登录 <li>0 否</li> <li>1 是</li> <li>9 未设置,和0一样是未开启</li></p>
 * @method integer getScope() 获取<p>开启范围 <li>0 自选主机</li> <li>1 全部主机</li></p>
 * @method void setScope(integer $Scope) 设置<p>开启范围 <li>0 自选主机</li> <li>1 全部主机</li></p>
 * @method integer getIncludeHostCount() 获取<p>正选主机配置数</p>
 * @method void setIncludeHostCount(integer $IncludeHostCount) 设置<p>正选主机配置数</p>
 * @method integer getExcludeHostCount() 获取<p>反选主机配置数</p>
 * @method void setExcludeHostCount(integer $ExcludeHostCount) 设置<p>反选主机配置数</p>
 * @method array getIncludeQuuid() 获取<p>正选quuid配置列表</p>
 * @method void setIncludeQuuid(array $IncludeQuuid) 设置<p>正选quuid配置列表</p>
 * @method array getExcludeQuuid() 获取<p>反选quuid配置列表</p>
 * @method void setExcludeQuuid(array $ExcludeQuuid) 设置<p>反选quuid配置列表</p>
 * @method integer getEnableCount() 获取<p>已开启机器数</p>
 * @method void setEnableCount(integer $EnableCount) 设置<p>已开启机器数</p>
 * @method integer getDisableCount() 获取<p>未启机器数</p>
 * @method void setDisableCount(integer $DisableCount) 设置<p>未启机器数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLoginTypeGlobalConfResponse extends AbstractModel
{
    /**
     * @var integer <p>是否开启扫码登录 <li>0 否</li> <li>1 是</li> <li>9 未设置,和0一样是未开启</li></p>
     */
    public $Enable;

    /**
     * @var integer <p>开启范围 <li>0 自选主机</li> <li>1 全部主机</li></p>
     */
    public $Scope;

    /**
     * @var integer <p>正选主机配置数</p>
     */
    public $IncludeHostCount;

    /**
     * @var integer <p>反选主机配置数</p>
     */
    public $ExcludeHostCount;

    /**
     * @var array <p>正选quuid配置列表</p>
     */
    public $IncludeQuuid;

    /**
     * @var array <p>反选quuid配置列表</p>
     */
    public $ExcludeQuuid;

    /**
     * @var integer <p>已开启机器数</p>
     */
    public $EnableCount;

    /**
     * @var integer <p>未启机器数</p>
     */
    public $DisableCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Enable <p>是否开启扫码登录 <li>0 否</li> <li>1 是</li> <li>9 未设置,和0一样是未开启</li></p>
     * @param integer $Scope <p>开启范围 <li>0 自选主机</li> <li>1 全部主机</li></p>
     * @param integer $IncludeHostCount <p>正选主机配置数</p>
     * @param integer $ExcludeHostCount <p>反选主机配置数</p>
     * @param array $IncludeQuuid <p>正选quuid配置列表</p>
     * @param array $ExcludeQuuid <p>反选quuid配置列表</p>
     * @param integer $EnableCount <p>已开启机器数</p>
     * @param integer $DisableCount <p>未启机器数</p>
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

        if (array_key_exists("IncludeHostCount",$param) and $param["IncludeHostCount"] !== null) {
            $this->IncludeHostCount = $param["IncludeHostCount"];
        }

        if (array_key_exists("ExcludeHostCount",$param) and $param["ExcludeHostCount"] !== null) {
            $this->ExcludeHostCount = $param["ExcludeHostCount"];
        }

        if (array_key_exists("IncludeQuuid",$param) and $param["IncludeQuuid"] !== null) {
            $this->IncludeQuuid = $param["IncludeQuuid"];
        }

        if (array_key_exists("ExcludeQuuid",$param) and $param["ExcludeQuuid"] !== null) {
            $this->ExcludeQuuid = $param["ExcludeQuuid"];
        }

        if (array_key_exists("EnableCount",$param) and $param["EnableCount"] !== null) {
            $this->EnableCount = $param["EnableCount"];
        }

        if (array_key_exists("DisableCount",$param) and $param["DisableCount"] !== null) {
            $this->DisableCount = $param["DisableCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
