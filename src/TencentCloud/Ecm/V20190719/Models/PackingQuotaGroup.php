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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 一组相互关联的装箱配额，以实例类型的优先级排序，优先级高的在前
 *
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method integer getZoneId() 获取可用区id
 * @method void setZoneId(integer $ZoneId) 设置可用区id
 * @method string getISPId() 获取ISP id
 * @method void setISPId(string $ISPId) 设置ISP id
 * @method array getPackingQuotaInfos() 获取一组相互关联的装箱配额
 * @method void setPackingQuotaInfos(array $PackingQuotaInfos) 设置一组相互关联的装箱配额
 */
class PackingQuotaGroup extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var integer 可用区id
     */
    public $ZoneId;

    /**
     * @var string ISP id
     */
    public $ISPId;

    /**
     * @var array 一组相互关联的装箱配额
     */
    public $PackingQuotaInfos;

    /**
     * @param string $Zone 可用区
     * @param integer $ZoneId 可用区id
     * @param string $ISPId ISP id
     * @param array $PackingQuotaInfos 一组相互关联的装箱配额
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ISPId",$param) and $param["ISPId"] !== null) {
            $this->ISPId = $param["ISPId"];
        }

        if (array_key_exists("PackingQuotaInfos",$param) and $param["PackingQuotaInfos"] !== null) {
            $this->PackingQuotaInfos = [];
            foreach ($param["PackingQuotaInfos"] as $key => $value){
                $obj = new PackingQuotaInfo();
                $obj->deserialize($value);
                array_push($this->PackingQuotaInfos, $obj);
            }
        }
    }
}
