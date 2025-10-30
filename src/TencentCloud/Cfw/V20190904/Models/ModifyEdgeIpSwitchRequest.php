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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEdgeIpSwitch请求参数结构体
 *
 * @method integer getEnable() 获取0 关闭开关
1 打开开关
2 不操作开关，此次切换模式
 * @method void setEnable(integer $Enable) 设置0 关闭开关
1 打开开关
2 不操作开关，此次切换模式
 * @method array getEdgeIpSwitchLst() 获取操作开关详情
 * @method void setEdgeIpSwitchLst(array $EdgeIpSwitchLst) 设置操作开关详情
 * @method integer getAutoChooseSubnet() 获取0 不自动选择子网
1 自动选择子网创建私有连接
 * @method void setAutoChooseSubnet(integer $AutoChooseSubnet) 设置0 不自动选择子网
1 自动选择子网创建私有连接
 * @method integer getSwitchMode() 获取0 切换为旁路
1 切换为串行
2 不切换模式，此次操作开关
 * @method void setSwitchMode(integer $SwitchMode) 设置0 切换为旁路
1 切换为串行
2 不切换模式，此次操作开关
 */
class ModifyEdgeIpSwitchRequest extends AbstractModel
{
    /**
     * @var integer 0 关闭开关
1 打开开关
2 不操作开关，此次切换模式
     */
    public $Enable;

    /**
     * @var array 操作开关详情
     */
    public $EdgeIpSwitchLst;

    /**
     * @var integer 0 不自动选择子网
1 自动选择子网创建私有连接
     */
    public $AutoChooseSubnet;

    /**
     * @var integer 0 切换为旁路
1 切换为串行
2 不切换模式，此次操作开关
     */
    public $SwitchMode;

    /**
     * @param integer $Enable 0 关闭开关
1 打开开关
2 不操作开关，此次切换模式
     * @param array $EdgeIpSwitchLst 操作开关详情
     * @param integer $AutoChooseSubnet 0 不自动选择子网
1 自动选择子网创建私有连接
     * @param integer $SwitchMode 0 切换为旁路
1 切换为串行
2 不切换模式，此次操作开关
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

        if (array_key_exists("EdgeIpSwitchLst",$param) and $param["EdgeIpSwitchLst"] !== null) {
            $this->EdgeIpSwitchLst = [];
            foreach ($param["EdgeIpSwitchLst"] as $key => $value){
                $obj = new EdgeIpSwitch();
                $obj->deserialize($value);
                array_push($this->EdgeIpSwitchLst, $obj);
            }
        }

        if (array_key_exists("AutoChooseSubnet",$param) and $param["AutoChooseSubnet"] !== null) {
            $this->AutoChooseSubnet = $param["AutoChooseSubnet"];
        }

        if (array_key_exists("SwitchMode",$param) and $param["SwitchMode"] !== null) {
            $this->SwitchMode = $param["SwitchMode"];
        }
    }
}
