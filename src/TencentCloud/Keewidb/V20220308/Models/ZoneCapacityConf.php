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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可用区内产品售卖信息
 *
 * @method string getZoneId() 获取可用区ID
 * @method void setZoneId(string $ZoneId) 设置可用区ID
 * @method string getZoneName() 获取可用区名称
 * @method void setZoneName(string $ZoneName) 设置可用区名称
 * @method boolean getIsSaleout() 获取可用区是否售罄
 * @method void setIsSaleout(boolean $IsSaleout) 设置可用区是否售罄
 * @method boolean getIsDefault() 获取是否为默认可用区
 * @method void setIsDefault(boolean $IsDefault) 设置是否为默认可用区
 * @method array getNetWorkType() 获取网络类型：basenet -- 基础网络；vpcnet -- VPC网络
 * @method void setNetWorkType(array $NetWorkType) 设置网络类型：basenet -- 基础网络；vpcnet -- VPC网络
 * @method array getProductSet() 获取产品规格等信息
 * @method void setProductSet(array $ProductSet) 设置产品规格等信息
 * @method integer getOldZoneId() 获取Int类型可用区ID
 * @method void setOldZoneId(integer $OldZoneId) 设置Int类型可用区ID
 */
class ZoneCapacityConf extends AbstractModel
{
    /**
     * @var string 可用区ID
     */
    public $ZoneId;

    /**
     * @var string 可用区名称
     */
    public $ZoneName;

    /**
     * @var boolean 可用区是否售罄
     */
    public $IsSaleout;

    /**
     * @var boolean 是否为默认可用区
     */
    public $IsDefault;

    /**
     * @var array 网络类型：basenet -- 基础网络；vpcnet -- VPC网络
     */
    public $NetWorkType;

    /**
     * @var array 产品规格等信息
     */
    public $ProductSet;

    /**
     * @var integer Int类型可用区ID
     */
    public $OldZoneId;

    /**
     * @param string $ZoneId 可用区ID
     * @param string $ZoneName 可用区名称
     * @param boolean $IsSaleout 可用区是否售罄
     * @param boolean $IsDefault 是否为默认可用区
     * @param array $NetWorkType 网络类型：basenet -- 基础网络；vpcnet -- VPC网络
     * @param array $ProductSet 产品规格等信息
     * @param integer $OldZoneId Int类型可用区ID
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("IsSaleout",$param) and $param["IsSaleout"] !== null) {
            $this->IsSaleout = $param["IsSaleout"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("NetWorkType",$param) and $param["NetWorkType"] !== null) {
            $this->NetWorkType = $param["NetWorkType"];
        }

        if (array_key_exists("ProductSet",$param) and $param["ProductSet"] !== null) {
            $this->ProductSet = [];
            foreach ($param["ProductSet"] as $key => $value){
                $obj = new ProductConf();
                $obj->deserialize($value);
                array_push($this->ProductSet, $obj);
            }
        }

        if (array_key_exists("OldZoneId",$param) and $param["OldZoneId"] !== null) {
            $this->OldZoneId = $param["OldZoneId"];
        }
    }
}
