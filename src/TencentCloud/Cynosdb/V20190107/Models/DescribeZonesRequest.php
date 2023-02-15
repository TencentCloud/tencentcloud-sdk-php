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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZones请求参数结构体
 *
 * @method boolean getIncludeVirtualZones() 获取是否包含虚拟区
 * @method void setIncludeVirtualZones(boolean $IncludeVirtualZones) 设置是否包含虚拟区
 * @method boolean getShowPermission() 获取是否展示地域下所有可用区，并显示用户每个可用区权限
 * @method void setShowPermission(boolean $ShowPermission) 设置是否展示地域下所有可用区，并显示用户每个可用区权限
 */
class DescribeZonesRequest extends AbstractModel
{
    /**
     * @var boolean 是否包含虚拟区
     */
    public $IncludeVirtualZones;

    /**
     * @var boolean 是否展示地域下所有可用区，并显示用户每个可用区权限
     */
    public $ShowPermission;

    /**
     * @param boolean $IncludeVirtualZones 是否包含虚拟区
     * @param boolean $ShowPermission 是否展示地域下所有可用区，并显示用户每个可用区权限
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
        if (array_key_exists("IncludeVirtualZones",$param) and $param["IncludeVirtualZones"] !== null) {
            $this->IncludeVirtualZones = $param["IncludeVirtualZones"];
        }

        if (array_key_exists("ShowPermission",$param) and $param["ShowPermission"] !== null) {
            $this->ShowPermission = $param["ShowPermission"];
        }
    }
}
