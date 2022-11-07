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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 存储地域信息
 *
 * @method string getRegion() 获取存储地域。
 * @method void setRegion(string $Region) 设置存储地域。
 * @method string getDescription() 获取存储地域描述信息。
 * @method void setDescription(string $Description) 设置存储地域描述信息。
 * @method string getStatus() 获取状态，是否开通，取值有：
<li>opened：已经开通。</li>
<li>unopened：未开通。</li>
 * @method void setStatus(string $Status) 设置状态，是否开通，取值有：
<li>opened：已经开通。</li>
<li>unopened：未开通。</li>
 * @method boolean getIsDefault() 获取是否默认的存储地域，true：是；false：否。
 * @method void setIsDefault(boolean $IsDefault) 设置是否默认的存储地域，true：是；false：否。
 * @method string getArea() 获取存储区域，取值有：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland：中国境外。</li>
 * @method void setArea(string $Area) 设置存储区域，取值有：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland：中国境外。</li>
 */
class StorageRegionInfo extends AbstractModel
{
    /**
     * @var string 存储地域。
     */
    public $Region;

    /**
     * @var string 存储地域描述信息。
     */
    public $Description;

    /**
     * @var string 状态，是否开通，取值有：
<li>opened：已经开通。</li>
<li>unopened：未开通。</li>
     */
    public $Status;

    /**
     * @var boolean 是否默认的存储地域，true：是；false：否。
     */
    public $IsDefault;

    /**
     * @var string 存储区域，取值有：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland：中国境外。</li>
     */
    public $Area;

    /**
     * @param string $Region 存储地域。
     * @param string $Description 存储地域描述信息。
     * @param string $Status 状态，是否开通，取值有：
<li>opened：已经开通。</li>
<li>unopened：未开通。</li>
     * @param boolean $IsDefault 是否默认的存储地域，true：是；false：否。
     * @param string $Area 存储区域，取值有：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland：中国境外。</li>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
