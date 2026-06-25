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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域信息
 *
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getRegionCode() 获取<p>地域编码</p>
 * @method void setRegionCode(string $RegionCode) 设置<p>地域编码</p>
 * @method integer getRegionId() 获取<p>地域ID</p>
 * @method void setRegionId(integer $RegionId) 设置<p>地域ID</p>
 * @method string getRegionName() 获取<p>地域名称</p>
 * @method void setRegionName(string $RegionName) 设置<p>地域名称</p>
 * @method string getRegionNameEn() 获取<p>地域英文名称</p>
 * @method void setRegionNameEn(string $RegionNameEn) 设置<p>地域英文名称</p>
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>地域编码</p>
     */
    public $RegionCode;

    /**
     * @var integer <p>地域ID</p>
     */
    public $RegionId;

    /**
     * @var string <p>地域名称</p>
     */
    public $RegionName;

    /**
     * @var string <p>地域英文名称</p>
     */
    public $RegionNameEn;

    /**
     * @param string $Region <p>地域</p>
     * @param string $RegionCode <p>地域编码</p>
     * @param integer $RegionId <p>地域ID</p>
     * @param string $RegionName <p>地域名称</p>
     * @param string $RegionNameEn <p>地域英文名称</p>
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

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionNameEn",$param) and $param["RegionNameEn"] !== null) {
            $this->RegionNameEn = $param["RegionNameEn"];
        }
    }
}
