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
 * @method integer getEnable() 获取是否开启防卸载 <li>0 否</li> <li>1 是</li> <li>9 未设置,和0一样是未开启</li>
 * @method void setEnable(integer $Enable) 设置是否开启防卸载 <li>0 否</li> <li>1 是</li> <li>9 未设置,和0一样是未开启</li>
 * @method integer getScope() 获取开启范围 <li>0 自选主机</li> <li>1 全部主机</li>
 * @method void setScope(integer $Scope) 设置开启范围 <li>0 自选主机</li> <li>1 全部主机</li>
 * @method integer getIncludeHostCount() 获取正选主机配置数
 * @method void setIncludeHostCount(integer $IncludeHostCount) 设置正选主机配置数
 * @method integer getExcludeHostCount() 获取反选主机配置数
 * @method void setExcludeHostCount(integer $ExcludeHostCount) 设置反选主机配置数
 * @method array getIncludeQuuid() 获取正选quuid配置列表
 * @method void setIncludeQuuid(array $IncludeQuuid) 设置正选quuid配置列表
 * @method array getExcludeQuuid() 获取反选quuid配置列表
 * @method void setExcludeQuuid(array $ExcludeQuuid) 设置反选quuid配置列表
 * @method integer getEnableCount() 获取已开启机器数
 * @method void setEnableCount(integer $EnableCount) 设置已开启机器数
 * @method integer getDisableCount() 获取未启机器数
 * @method void setDisableCount(integer $DisableCount) 设置未启机器数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLoginTypeGlobalConfResponse extends AbstractModel
{
    /**
     * @var integer 是否开启防卸载 <li>0 否</li> <li>1 是</li> <li>9 未设置,和0一样是未开启</li>
     */
    public $Enable;

    /**
     * @var integer 开启范围 <li>0 自选主机</li> <li>1 全部主机</li>
     */
    public $Scope;

    /**
     * @var integer 正选主机配置数
     */
    public $IncludeHostCount;

    /**
     * @var integer 反选主机配置数
     */
    public $ExcludeHostCount;

    /**
     * @var array 正选quuid配置列表
     */
    public $IncludeQuuid;

    /**
     * @var array 反选quuid配置列表
     */
    public $ExcludeQuuid;

    /**
     * @var integer 已开启机器数
     */
    public $EnableCount;

    /**
     * @var integer 未启机器数
     */
    public $DisableCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Enable 是否开启防卸载 <li>0 否</li> <li>1 是</li> <li>9 未设置,和0一样是未开启</li>
     * @param integer $Scope 开启范围 <li>0 自选主机</li> <li>1 全部主机</li>
     * @param integer $IncludeHostCount 正选主机配置数
     * @param integer $ExcludeHostCount 反选主机配置数
     * @param array $IncludeQuuid 正选quuid配置列表
     * @param array $ExcludeQuuid 反选quuid配置列表
     * @param integer $EnableCount 已开启机器数
     * @param integer $DisableCount 未启机器数
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
