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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyZoneStatus请求参数结构体
 *
 * @method string getId() 获取站点 ID
 * @method void setId(string $Id) 设置站点 ID
 * @method boolean getPaused() 获取站点状态
- false 开启站点
- true 关闭站点
 * @method void setPaused(boolean $Paused) 设置站点状态
- false 开启站点
- true 关闭站点
 */
class ModifyZoneStatusRequest extends AbstractModel
{
    /**
     * @var string 站点 ID
     */
    public $Id;

    /**
     * @var boolean 站点状态
- false 开启站点
- true 关闭站点
     */
    public $Paused;

    /**
     * @param string $Id 站点 ID
     * @param boolean $Paused 站点状态
- false 开启站点
- true 关闭站点
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Paused",$param) and $param["Paused"] !== null) {
            $this->Paused = $param["Paused"];
        }
    }
}
