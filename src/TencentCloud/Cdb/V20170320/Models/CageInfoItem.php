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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 金融围拢、独享集群详情
 *
 * @method string getCageId() 获取<p>金融围拢ID、独享集群ID</p>
 * @method void setCageId(string $CageId) 设置<p>金融围拢ID、独享集群ID</p>
 * @method integer getZoneId() 获取<p>可用区ID</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>可用区ID</p>
 * @method string getCageName() 获取<p>金融围拢名称/独享集群名称</p>
 * @method void setCageName(string $CageName) 设置<p>金融围拢名称/独享集群名称</p>
 * @method string getStatus() 获取<p>是否对外售卖</p>
 * @method void setStatus(string $Status) 设置<p>是否对外售卖</p>
 * @method string getDeviceType() 获取<p>后端支持围拢发货的设备类型，normal/common</p>
 * @method void setDeviceType(string $DeviceType) 设置<p>后端支持围拢发货的设备类型，normal/common</p>
 * @method array getZoneIds() 获取<p>支持独享集群的可用区</p>
 * @method void setZoneIds(array $ZoneIds) 设置<p>支持独享集群的可用区</p>
 */
class CageInfoItem extends AbstractModel
{
    /**
     * @var string <p>金融围拢ID、独享集群ID</p>
     */
    public $CageId;

    /**
     * @var integer <p>可用区ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>金融围拢名称/独享集群名称</p>
     */
    public $CageName;

    /**
     * @var string <p>是否对外售卖</p>
     */
    public $Status;

    /**
     * @var string <p>后端支持围拢发货的设备类型，normal/common</p>
     */
    public $DeviceType;

    /**
     * @var array <p>支持独享集群的可用区</p>
     */
    public $ZoneIds;

    /**
     * @param string $CageId <p>金融围拢ID、独享集群ID</p>
     * @param integer $ZoneId <p>可用区ID</p>
     * @param string $CageName <p>金融围拢名称/独享集群名称</p>
     * @param string $Status <p>是否对外售卖</p>
     * @param string $DeviceType <p>后端支持围拢发货的设备类型，normal/common</p>
     * @param array $ZoneIds <p>支持独享集群的可用区</p>
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
        if (array_key_exists("CageId",$param) and $param["CageId"] !== null) {
            $this->CageId = $param["CageId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("CageName",$param) and $param["CageName"] !== null) {
            $this->CageName = $param["CageName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }
    }
}
