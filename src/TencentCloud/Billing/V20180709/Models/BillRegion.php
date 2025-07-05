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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域筛选列表
 *
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 * @method string getRegionName() 获取地域名称：资源所属地域
 * @method void setRegionName(string $RegionName) 设置地域名称：资源所属地域
 */
class BillRegion extends AbstractModel
{
    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @var string 地域名称：资源所属地域
     */
    public $RegionName;

    /**
     * @param integer $RegionId 地域ID
     * @param string $RegionName 地域名称：资源所属地域
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }
    }
}
