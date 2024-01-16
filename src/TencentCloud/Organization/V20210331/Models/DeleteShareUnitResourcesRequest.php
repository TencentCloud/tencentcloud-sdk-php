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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteShareUnitResources请求参数结构体
 *
 * @method string getUnitId() 获取共享单元ID。
 * @method void setUnitId(string $UnitId) 设置共享单元ID。
 * @method string getArea() 获取共享单元地域。
 * @method void setArea(string $Area) 设置共享单元地域。
 * @method string getType() 获取资源类型。支持共享的资源类型。
 * @method void setType(string $Type) 设置资源类型。支持共享的资源类型。
 * @method array getResources() 获取共享资源列表。最大10个。
 * @method void setResources(array $Resources) 设置共享资源列表。最大10个。
 */
class DeleteShareUnitResourcesRequest extends AbstractModel
{
    /**
     * @var string 共享单元ID。
     */
    public $UnitId;

    /**
     * @var string 共享单元地域。
     */
    public $Area;

    /**
     * @var string 资源类型。支持共享的资源类型。
     */
    public $Type;

    /**
     * @var array 共享资源列表。最大10个。
     */
    public $Resources;

    /**
     * @param string $UnitId 共享单元ID。
     * @param string $Area 共享单元地域。
     * @param string $Type 资源类型。支持共享的资源类型。
     * @param array $Resources 共享资源列表。最大10个。
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
        if (array_key_exists("UnitId",$param) and $param["UnitId"] !== null) {
            $this->UnitId = $param["UnitId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new ShareResource();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }
    }
}
