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
 * 安全组地域配置
 *
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getRegionId() 获取<p>地域Id</p>
 * @method void setRegionId(string $RegionId) 设置<p>地域Id</p>
 * @method string getRegionName() 获取<p>地域中文</p>
 * @method void setRegionName(string $RegionName) 设置<p>地域中文</p>
 */
class SecurityGroupRegion extends AbstractModel
{
    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>地域Id</p>
     */
    public $RegionId;

    /**
     * @var string <p>地域中文</p>
     */
    public $RegionName;

    /**
     * @param string $Region <p>地域</p>
     * @param string $RegionId <p>地域Id</p>
     * @param string $RegionName <p>地域中文</p>
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }
    }
}
