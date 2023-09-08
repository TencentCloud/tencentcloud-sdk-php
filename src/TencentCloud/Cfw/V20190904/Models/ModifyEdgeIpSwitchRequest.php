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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEdgeIpSwitch请求参数结构体
 *
 * @method integer getEnable() 获取0 关闭开关
1 打开开关
 * @method void setEnable(integer $Enable) 设置0 关闭开关
1 打开开关
 * @method array getEdgeIpSwitchLst() 获取操作开关详情
 * @method void setEdgeIpSwitchLst(array $EdgeIpSwitchLst) 设置操作开关详情
 */
class ModifyEdgeIpSwitchRequest extends AbstractModel
{
    /**
     * @var integer 0 关闭开关
1 打开开关
     */
    public $Enable;

    /**
     * @var array 操作开关详情
     */
    public $EdgeIpSwitchLst;

    /**
     * @param integer $Enable 0 关闭开关
1 打开开关
     * @param array $EdgeIpSwitchLst 操作开关详情
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
    }
}
