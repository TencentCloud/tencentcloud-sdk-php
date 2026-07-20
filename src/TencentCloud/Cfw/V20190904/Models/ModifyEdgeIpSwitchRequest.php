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
 * @method integer getEnable() 获取<p>0 关闭开关<br>1 打开开关<br>2 不操作开关，此次切换模式</p>
 * @method void setEnable(integer $Enable) 设置<p>0 关闭开关<br>1 打开开关<br>2 不操作开关，此次切换模式</p>
 * @method array getEdgeIpSwitchLst() 获取<p>操作开关详情</p>
 * @method void setEdgeIpSwitchLst(array $EdgeIpSwitchLst) 设置<p>操作开关详情</p>
 * @method integer getAutoChooseSubnet() 获取<p>0 不自动选择子网<br>1 自动选择子网创建私有连接</p>
 * @method void setAutoChooseSubnet(integer $AutoChooseSubnet) 设置<p>0 不自动选择子网<br>1 自动选择子网创建私有连接</p>
 * @method integer getSwitchMode() 获取<p>0 切换为旁路<br>1 切换为串行<br>2 不切换模式，此次操作开关</p>
 * @method void setSwitchMode(integer $SwitchMode) 设置<p>0 切换为旁路<br>1 切换为串行<br>2 不切换模式，此次操作开关</p>
 */
class ModifyEdgeIpSwitchRequest extends AbstractModel
{
    /**
     * @var integer <p>0 关闭开关<br>1 打开开关<br>2 不操作开关，此次切换模式</p>
     */
    public $Enable;

    /**
     * @var array <p>操作开关详情</p>
     */
    public $EdgeIpSwitchLst;

    /**
     * @var integer <p>0 不自动选择子网<br>1 自动选择子网创建私有连接</p>
     */
    public $AutoChooseSubnet;

    /**
     * @var integer <p>0 切换为旁路<br>1 切换为串行<br>2 不切换模式，此次操作开关</p>
     */
    public $SwitchMode;

    /**
     * @param integer $Enable <p>0 关闭开关<br>1 打开开关<br>2 不操作开关，此次切换模式</p>
     * @param array $EdgeIpSwitchLst <p>操作开关详情</p>
     * @param integer $AutoChooseSubnet <p>0 不自动选择子网<br>1 自动选择子网创建私有连接</p>
     * @param integer $SwitchMode <p>0 切换为旁路<br>1 切换为串行<br>2 不切换模式，此次操作开关</p>
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
