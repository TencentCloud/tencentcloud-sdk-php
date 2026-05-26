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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此数据结构用来展示可用地域信息。
 *
 * @method string getRegionId() 获取<p>地域 ID。</p>
 * @method void setRegionId(string $RegionId) 设置<p>地域 ID。</p>
 * @method string getRegionName() 获取<p>地域名称。</p>
 * @method void setRegionName(string $RegionName) 设置<p>地域名称。</p>
 * @method string getRegionAbbr() 获取<p>地域英文缩写。</p>
 * @method void setRegionAbbr(string $RegionAbbr) 设置<p>地域英文缩写。</p>
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string <p>地域 ID。</p>
     */
    public $RegionId;

    /**
     * @var string <p>地域名称。</p>
     */
    public $RegionName;

    /**
     * @var string <p>地域英文缩写。</p>
     */
    public $RegionAbbr;

    /**
     * @param string $RegionId <p>地域 ID。</p>
     * @param string $RegionName <p>地域名称。</p>
     * @param string $RegionAbbr <p>地域英文缩写。</p>
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

        if (array_key_exists("RegionAbbr",$param) and $param["RegionAbbr"] !== null) {
            $this->RegionAbbr = $param["RegionAbbr"];
        }
    }
}
