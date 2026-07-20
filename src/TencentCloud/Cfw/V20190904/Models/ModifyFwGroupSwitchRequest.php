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
 * @method integer getEnable() 获取<p>打开或关闭开关<br>0：关闭开关<br>1：打开开关</p>
 * @method void setEnable(integer $Enable) 设置<p>打开或关闭开关<br>0：关闭开关<br>1：打开开关</p>
 * @method integer getAllSwitch() 获取<p>是否操作全部开关 0 不操作全部开关，1 操作全部开关</p>
 * @method void setAllSwitch(integer $AllSwitch) 设置<p>是否操作全部开关 0 不操作全部开关，1 操作全部开关</p>
 * @method array getSwitchList() 获取<p>开关列表</p>
 * @method void setSwitchList(array $SwitchList) 设置<p>开关列表</p>
 */
class ModifyFwGroupSwitchRequest extends AbstractModel
{
    /**
     * @var integer <p>打开或关闭开关<br>0：关闭开关<br>1：打开开关</p>
     */
    public $Enable;

    /**
     * @var integer <p>是否操作全部开关 0 不操作全部开关，1 操作全部开关</p>
     */
    public $AllSwitch;

    /**
     * @var array <p>开关列表</p>
     */
    public $SwitchList;

    /**
     * @param integer $Enable <p>打开或关闭开关<br>0：关闭开关<br>1：打开开关</p>
     * @param integer $AllSwitch <p>是否操作全部开关 0 不操作全部开关，1 操作全部开关</p>
     * @param array $SwitchList <p>开关列表</p>
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
