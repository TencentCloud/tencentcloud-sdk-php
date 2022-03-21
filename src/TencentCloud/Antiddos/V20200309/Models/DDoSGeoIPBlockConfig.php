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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS防护的区域封禁配置
 *
 * @method string getRegionType() 获取区域类型，取值[
oversea(境外)
china(国内)
customized(自定义地区)
]
 * @method void setRegionType(string $RegionType) 设置区域类型，取值[
oversea(境外)
china(国内)
customized(自定义地区)
]
 * @method string getAction() 获取封禁动作，取值[
drop(拦截)
trans(放行)
]
 * @method void setAction(string $Action) 设置封禁动作，取值[
drop(拦截)
trans(放行)
]
 * @method string getId() 获取配置ID，配置添加成功后生成；添加新配置时不用填写此字段，修改或删除配置时需要填写配置ID
 * @method void setId(string $Id) 设置配置ID，配置添加成功后生成；添加新配置时不用填写此字段，修改或删除配置时需要填写配置ID
 * @method array getAreaList() 获取当RegionType为customized时，必须填写AreaList，且最多填写128个；
 * @method void setAreaList(array $AreaList) 设置当RegionType为customized时，必须填写AreaList，且最多填写128个；
 */
class DDoSGeoIPBlockConfig extends AbstractModel
{
    /**
     * @var string 区域类型，取值[
oversea(境外)
china(国内)
customized(自定义地区)
]
     */
    public $RegionType;

    /**
     * @var string 封禁动作，取值[
drop(拦截)
trans(放行)
]
     */
    public $Action;

    /**
     * @var string 配置ID，配置添加成功后生成；添加新配置时不用填写此字段，修改或删除配置时需要填写配置ID
     */
    public $Id;

    /**
     * @var array 当RegionType为customized时，必须填写AreaList，且最多填写128个；
     */
    public $AreaList;

    /**
     * @param string $RegionType 区域类型，取值[
oversea(境外)
china(国内)
customized(自定义地区)
]
     * @param string $Action 封禁动作，取值[
drop(拦截)
trans(放行)
]
     * @param string $Id 配置ID，配置添加成功后生成；添加新配置时不用填写此字段，修改或删除配置时需要填写配置ID
     * @param array $AreaList 当RegionType为customized时，必须填写AreaList，且最多填写128个；
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
        if (array_key_exists("RegionType",$param) and $param["RegionType"] !== null) {
            $this->RegionType = $param["RegionType"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AreaList",$param) and $param["AreaList"] !== null) {
            $this->AreaList = $param["AreaList"];
        }
    }
}
