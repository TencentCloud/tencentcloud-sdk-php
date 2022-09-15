<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * DescribeImportMachineInfo请求参数结构体
 *
 * @method array getMachineList() 获取服务器内网IP（默认）/ 服务器名称 / 服务器ID 数组 (最大 1000条)
 * @method void setMachineList(array $MachineList) 设置服务器内网IP（默认）/ 服务器名称 / 服务器ID 数组 (最大 1000条)
 * @method string getImportType() 获取批量导入的数据类型：Ip、Name、Id 三选一
 * @method void setImportType(string $ImportType) 设置批量导入的数据类型：Ip、Name、Id 三选一
 * @method boolean getIsQueryProMachine() 获取该参数已作废.
 * @method void setIsQueryProMachine(boolean $IsQueryProMachine) 设置该参数已作废.
 * @method array getFilters() 获取过滤条件：
<li>Version - String  是否必填：否 - 当前防护版本（ PRO_VERSION：专业版 | BASIC_VERSION：基础版 | Flagship：旗舰版 | ProtectedMachines：专业版+旗舰版） | BASIC_PROPOST_GENERAL_DISCOUNT：普惠版+专业版按量计费+基础版主机 | UnFlagship：专业版预付费+专业版后付费+基础版+普惠版</li>
 * @method void setFilters(array $Filters) 设置过滤条件：
<li>Version - String  是否必填：否 - 当前防护版本（ PRO_VERSION：专业版 | BASIC_VERSION：基础版 | Flagship：旗舰版 | ProtectedMachines：专业版+旗舰版） | BASIC_PROPOST_GENERAL_DISCOUNT：普惠版+专业版按量计费+基础版主机 | UnFlagship：专业版预付费+专业版后付费+基础版+普惠版</li>
 */
class DescribeImportMachineInfoRequest extends AbstractModel
{
    /**
     * @var array 服务器内网IP（默认）/ 服务器名称 / 服务器ID 数组 (最大 1000条)
     */
    public $MachineList;

    /**
     * @var string 批量导入的数据类型：Ip、Name、Id 三选一
     */
    public $ImportType;

    /**
     * @var boolean 该参数已作废.
     */
    public $IsQueryProMachine;

    /**
     * @var array 过滤条件：
<li>Version - String  是否必填：否 - 当前防护版本（ PRO_VERSION：专业版 | BASIC_VERSION：基础版 | Flagship：旗舰版 | ProtectedMachines：专业版+旗舰版） | BASIC_PROPOST_GENERAL_DISCOUNT：普惠版+专业版按量计费+基础版主机 | UnFlagship：专业版预付费+专业版后付费+基础版+普惠版</li>
     */
    public $Filters;

    /**
     * @param array $MachineList 服务器内网IP（默认）/ 服务器名称 / 服务器ID 数组 (最大 1000条)
     * @param string $ImportType 批量导入的数据类型：Ip、Name、Id 三选一
     * @param boolean $IsQueryProMachine 该参数已作废.
     * @param array $Filters 过滤条件：
<li>Version - String  是否必填：否 - 当前防护版本（ PRO_VERSION：专业版 | BASIC_VERSION：基础版 | Flagship：旗舰版 | ProtectedMachines：专业版+旗舰版） | BASIC_PROPOST_GENERAL_DISCOUNT：普惠版+专业版按量计费+基础版主机 | UnFlagship：专业版预付费+专业版后付费+基础版+普惠版</li>
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
        if (array_key_exists("MachineList",$param) and $param["MachineList"] !== null) {
            $this->MachineList = $param["MachineList"];
        }

        if (array_key_exists("ImportType",$param) and $param["ImportType"] !== null) {
            $this->ImportType = $param["ImportType"];
        }

        if (array_key_exists("IsQueryProMachine",$param) and $param["IsQueryProMachine"] !== null) {
            $this->IsQueryProMachine = $param["IsQueryProMachine"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
