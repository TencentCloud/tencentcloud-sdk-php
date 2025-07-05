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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云联网路由表信息
 *
 * @method string getRouteTableId() 获取云联网路由表id。
 * @method void setRouteTableId(string $RouteTableId) 设置云联网路由表id。
 * @method string getName() 获取云联网路由表名称。Name和Description 两者必传一个。
 * @method void setName(string $Name) 设置云联网路由表名称。Name和Description 两者必传一个。
 * @method string getDescription() 获取云联网路由表描述。Name和Description 两者必传一个。
 * @method void setDescription(string $Description) 设置云联网路由表描述。Name和Description 两者必传一个。
 */
class ModifyRouteTableInfo extends AbstractModel
{
    /**
     * @var string 云联网路由表id。
     */
    public $RouteTableId;

    /**
     * @var string 云联网路由表名称。Name和Description 两者必传一个。
     */
    public $Name;

    /**
     * @var string 云联网路由表描述。Name和Description 两者必传一个。
     */
    public $Description;

    /**
     * @param string $RouteTableId 云联网路由表id。
     * @param string $Name 云联网路由表名称。Name和Description 两者必传一个。
     * @param string $Description 云联网路由表描述。Name和Description 两者必传一个。
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
        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
