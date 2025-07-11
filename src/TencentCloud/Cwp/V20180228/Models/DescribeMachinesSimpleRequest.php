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
 * DescribeMachinesSimple请求参数结构体
 *
 * @method string getMachineType() 获取机器所属专区类型 
CVM 云服务器
BM 黑石
ECM 边缘计算
LH 轻量应用服务器
Other 混合云专区
 * @method void setMachineType(string $MachineType) 设置机器所属专区类型 
CVM 云服务器
BM 黑石
ECM 边缘计算
LH 轻量应用服务器
Other 混合云专区
 * @method string getMachineRegion() 获取机器所属地域。如：ap-guangzhou，ap-shanghai
 * @method void setMachineRegion(string $MachineRegion) 设置机器所属地域。如：ap-guangzhou，ap-shanghai
 * @method integer getLimit() 获取返回数量，默认为10，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为10，最大值为100。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method array getFilters() 获取过滤条件。
<li>Keywords - String - 是否必填：否 - 查询关键字 </li>
<li>Version - String  是否必填：否 - 当前防护版本（ PRO_VERSION：专业版 | BASIC_VERSION：基础版 | Flagship : 旗舰版 | ProtectedMachines: 专业版+旗舰版 | UnFlagship : 非旗舰版 | PRO_POST_PAY：专业版按量计费 | PRO_PRE_PAY：专业版包年包月）</li>
<li>TagId - String - 是否必填：否 - 标签ID </li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>Keywords - String - 是否必填：否 - 查询关键字 </li>
<li>Version - String  是否必填：否 - 当前防护版本（ PRO_VERSION：专业版 | BASIC_VERSION：基础版 | Flagship : 旗舰版 | ProtectedMachines: 专业版+旗舰版 | UnFlagship : 非旗舰版 | PRO_POST_PAY：专业版按量计费 | PRO_PRE_PAY：专业版包年包月）</li>
<li>TagId - String - 是否必填：否 - 标签ID </li>
 * @method array getProjectIds() 获取机器所属业务ID列表
 * @method void setProjectIds(array $ProjectIds) 设置机器所属业务ID列表
 */
class DescribeMachinesSimpleRequest extends AbstractModel
{
    /**
     * @var string 机器所属专区类型 
CVM 云服务器
BM 黑石
ECM 边缘计算
LH 轻量应用服务器
Other 混合云专区
     */
    public $MachineType;

    /**
     * @var string 机器所属地域。如：ap-guangzhou，ap-shanghai
     */
    public $MachineRegion;

    /**
     * @var integer 返回数量，默认为10，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var array 过滤条件。
<li>Keywords - String - 是否必填：否 - 查询关键字 </li>
<li>Version - String  是否必填：否 - 当前防护版本（ PRO_VERSION：专业版 | BASIC_VERSION：基础版 | Flagship : 旗舰版 | ProtectedMachines: 专业版+旗舰版 | UnFlagship : 非旗舰版 | PRO_POST_PAY：专业版按量计费 | PRO_PRE_PAY：专业版包年包月）</li>
<li>TagId - String - 是否必填：否 - 标签ID </li>
     */
    public $Filters;

    /**
     * @var array 机器所属业务ID列表
     */
    public $ProjectIds;

    /**
     * @param string $MachineType 机器所属专区类型 
CVM 云服务器
BM 黑石
ECM 边缘计算
LH 轻量应用服务器
Other 混合云专区
     * @param string $MachineRegion 机器所属地域。如：ap-guangzhou，ap-shanghai
     * @param integer $Limit 返回数量，默认为10，最大值为100。
     * @param integer $Offset 偏移量，默认为0。
     * @param array $Filters 过滤条件。
<li>Keywords - String - 是否必填：否 - 查询关键字 </li>
<li>Version - String  是否必填：否 - 当前防护版本（ PRO_VERSION：专业版 | BASIC_VERSION：基础版 | Flagship : 旗舰版 | ProtectedMachines: 专业版+旗舰版 | UnFlagship : 非旗舰版 | PRO_POST_PAY：专业版按量计费 | PRO_PRE_PAY：专业版包年包月）</li>
<li>TagId - String - 是否必填：否 - 标签ID </li>
     * @param array $ProjectIds 机器所属业务ID列表
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
        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("MachineRegion",$param) and $param["MachineRegion"] !== null) {
            $this->MachineRegion = $param["MachineRegion"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }
    }
}
