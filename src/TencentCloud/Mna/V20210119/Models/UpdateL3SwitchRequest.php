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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateL3Switch请求参数结构体
 *
 * @method string getL3ConnId() 获取互通规则ID
 * @method void setL3ConnId(string $L3ConnId) 设置互通规则ID
 * @method boolean getEnable() 获取互通规则开关
 * @method void setEnable(boolean $Enable) 设置互通规则开关
 */
class UpdateL3SwitchRequest extends AbstractModel
{
    /**
     * @var string 互通规则ID
     */
    public $L3ConnId;

    /**
     * @var boolean 互通规则开关
     */
    public $Enable;

    /**
     * @param string $L3ConnId 互通规则ID
     * @param boolean $Enable 互通规则开关
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
        if (array_key_exists("L3ConnId",$param) and $param["L3ConnId"] !== null) {
            $this->L3ConnId = $param["L3ConnId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
