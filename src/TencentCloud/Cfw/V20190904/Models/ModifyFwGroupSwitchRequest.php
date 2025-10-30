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
 * ModifyFwGroupSwitch请求参数结构体
 *
 * @method integer getEnable() 获取打开或关闭开关
0：关闭开关
1：打开开关
 * @method void setEnable(integer $Enable) 设置打开或关闭开关
0：关闭开关
1：打开开关
 * @method integer getAllSwitch() 获取是否操作全部开关 0 不操作全部开关，1 操作全部开关
 * @method void setAllSwitch(integer $AllSwitch) 设置是否操作全部开关 0 不操作全部开关，1 操作全部开关
 * @method array getSwitchList() 获取开关列表
 * @method void setSwitchList(array $SwitchList) 设置开关列表
 */
class ModifyFwGroupSwitchRequest extends AbstractModel
{
    /**
     * @var integer 打开或关闭开关
0：关闭开关
1：打开开关
     */
    public $Enable;

    /**
     * @var integer 是否操作全部开关 0 不操作全部开关，1 操作全部开关
     */
    public $AllSwitch;

    /**
     * @var array 开关列表
     */
    public $SwitchList;

    /**
     * @param integer $Enable 打开或关闭开关
0：关闭开关
1：打开开关
     * @param integer $AllSwitch 是否操作全部开关 0 不操作全部开关，1 操作全部开关
     * @param array $SwitchList 开关列表
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

        if (array_key_exists("AllSwitch",$param) and $param["AllSwitch"] !== null) {
            $this->AllSwitch = $param["AllSwitch"];
        }

        if (array_key_exists("SwitchList",$param) and $param["SwitchList"] !== null) {
            $this->SwitchList = [];
            foreach ($param["SwitchList"] as $key => $value){
                $obj = new FwGroupSwitch();
                $obj->deserialize($value);
                array_push($this->SwitchList, $obj);
            }
        }
    }
}
