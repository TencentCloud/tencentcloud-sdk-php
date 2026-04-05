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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可加速地域信息
 *
 * @method string getName() 获取<p>地域中文名称。</p>
 * @method void setName(string $Name) 设置<p>地域中文名称。</p>
 * @method integer getIsAvailable() 获取<p>是否可用；0：不可用，1:可用。</p>
 * @method void setIsAvailable(integer $IsAvailable) 设置<p>是否可用；0：不可用，1:可用。</p>
 * @method string getRegion() 获取<p>地域信息。</p>
 * @method void setRegion(string $Region) 设置<p>地域信息。</p>
 * @method string getAreaName() 获取<p>地区名称。</p>
 * @method void setAreaName(string $AreaName) 设置<p>地区名称。</p>
 * @method integer getIsChinaMainland() 获取<p>是否中国地域。</p>
 * @method void setIsChinaMainland(integer $IsChinaMainland) 设置<p>是否中国地域。</p>
 * @method array getSupportIspType() 获取<p>支持IspType类型。</p>
 * @method void setSupportIspType(array $SupportIspType) 设置<p>支持IspType类型。</p>
 * @method integer getIsTencentRegion() 获取<p>是否腾讯地域。</p>
 * @method void setIsTencentRegion(integer $IsTencentRegion) 设置<p>是否腾讯地域。</p>
 */
class AcceleratorRegionSet extends AbstractModel
{
    /**
     * @var string <p>地域中文名称。</p>
     */
    public $Name;

    /**
     * @var integer <p>是否可用；0：不可用，1:可用。</p>
     */
    public $IsAvailable;

    /**
     * @var string <p>地域信息。</p>
     */
    public $Region;

    /**
     * @var string <p>地区名称。</p>
     */
    public $AreaName;

    /**
     * @var integer <p>是否中国地域。</p>
     */
    public $IsChinaMainland;

    /**
     * @var array <p>支持IspType类型。</p>
     */
    public $SupportIspType;

    /**
     * @var integer <p>是否腾讯地域。</p>
     */
    public $IsTencentRegion;

    /**
     * @param string $Name <p>地域中文名称。</p>
     * @param integer $IsAvailable <p>是否可用；0：不可用，1:可用。</p>
     * @param string $Region <p>地域信息。</p>
     * @param string $AreaName <p>地区名称。</p>
     * @param integer $IsChinaMainland <p>是否中国地域。</p>
     * @param array $SupportIspType <p>支持IspType类型。</p>
     * @param integer $IsTencentRegion <p>是否腾讯地域。</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IsAvailable",$param) and $param["IsAvailable"] !== null) {
            $this->IsAvailable = $param["IsAvailable"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AreaName",$param) and $param["AreaName"] !== null) {
            $this->AreaName = $param["AreaName"];
        }

        if (array_key_exists("IsChinaMainland",$param) and $param["IsChinaMainland"] !== null) {
            $this->IsChinaMainland = $param["IsChinaMainland"];
        }

        if (array_key_exists("SupportIspType",$param) and $param["SupportIspType"] !== null) {
            $this->SupportIspType = $param["SupportIspType"];
        }

        if (array_key_exists("IsTencentRegion",$param) and $param["IsTencentRegion"] !== null) {
            $this->IsTencentRegion = $param["IsTencentRegion"];
        }
    }
}
