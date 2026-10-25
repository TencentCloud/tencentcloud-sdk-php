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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改存储位置响应
 *
 * @method LocationInfo getLocation() 获取修改后的存储位置详情
 * @method void setLocation(LocationInfo $Location) 设置修改后的存储位置详情
 */
class UpdateLocationRsp extends AbstractModel
{
    /**
     * @var LocationInfo 修改后的存储位置详情
     */
    public $Location;

    /**
     * @param LocationInfo $Location 修改后的存储位置详情
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
        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new LocationInfo();
            $this->Location->deserialize($param["Location"]);
        }
    }
}
