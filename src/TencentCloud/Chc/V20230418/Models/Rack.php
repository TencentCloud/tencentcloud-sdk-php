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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机架的信息
 *
 * @method string getRackName() 获取机架名称
 * @method void setRackName(string $RackName) 设置机架名称
 * @method integer getIdcUnitId() 获取机架所属的机房管理单元ID
 * @method void setIdcUnitId(integer $IdcUnitId) 设置机架所属的机房管理单元ID
 * @method string getIdcUnitName() 获取机架所属的机房管理单元名称
 * @method void setIdcUnitName(string $IdcUnitName) 设置机架所属的机房管理单元名称
 * @method string getIdcName() 获取机架所属的机房名称
 * @method void setIdcName(string $IdcName) 设置机架所属的机房名称
 * @method integer getIdcId() 获取机架所属的机房ID
 * @method void setIdcId(integer $IdcId) 设置机架所属的机房ID
 * @method integer getRackId() 获取机架ID
 * @method void setRackId(integer $RackId) 设置机架ID
 * @method boolean getIsPowerOn() 获取是否开电
 * @method void setIsPowerOn(boolean $IsPowerOn) 设置是否开电
 * @method string getRackOpenTime() 获取机架最近一次开电时间，YYYY-MM-DD 格式
 * @method void setRackOpenTime(string $RackOpenTime) 设置机架最近一次开电时间，YYYY-MM-DD 格式
 * @method string getHostingType() 获取托管类型
 * @method void setHostingType(string $HostingType) 设置托管类型
 */
class Rack extends AbstractModel
{
    /**
     * @var string 机架名称
     */
    public $RackName;

    /**
     * @var integer 机架所属的机房管理单元ID
     */
    public $IdcUnitId;

    /**
     * @var string 机架所属的机房管理单元名称
     */
    public $IdcUnitName;

    /**
     * @var string 机架所属的机房名称
     */
    public $IdcName;

    /**
     * @var integer 机架所属的机房ID
     */
    public $IdcId;

    /**
     * @var integer 机架ID
     */
    public $RackId;

    /**
     * @var boolean 是否开电
     */
    public $IsPowerOn;

    /**
     * @var string 机架最近一次开电时间，YYYY-MM-DD 格式
     */
    public $RackOpenTime;

    /**
     * @var string 托管类型
     */
    public $HostingType;

    /**
     * @param string $RackName 机架名称
     * @param integer $IdcUnitId 机架所属的机房管理单元ID
     * @param string $IdcUnitName 机架所属的机房管理单元名称
     * @param string $IdcName 机架所属的机房名称
     * @param integer $IdcId 机架所属的机房ID
     * @param integer $RackId 机架ID
     * @param boolean $IsPowerOn 是否开电
     * @param string $RackOpenTime 机架最近一次开电时间，YYYY-MM-DD 格式
     * @param string $HostingType 托管类型
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
        if (array_key_exists("RackName",$param) and $param["RackName"] !== null) {
            $this->RackName = $param["RackName"];
        }

        if (array_key_exists("IdcUnitId",$param) and $param["IdcUnitId"] !== null) {
            $this->IdcUnitId = $param["IdcUnitId"];
        }

        if (array_key_exists("IdcUnitName",$param) and $param["IdcUnitName"] !== null) {
            $this->IdcUnitName = $param["IdcUnitName"];
        }

        if (array_key_exists("IdcName",$param) and $param["IdcName"] !== null) {
            $this->IdcName = $param["IdcName"];
        }

        if (array_key_exists("IdcId",$param) and $param["IdcId"] !== null) {
            $this->IdcId = $param["IdcId"];
        }

        if (array_key_exists("RackId",$param) and $param["RackId"] !== null) {
            $this->RackId = $param["RackId"];
        }

        if (array_key_exists("IsPowerOn",$param) and $param["IsPowerOn"] !== null) {
            $this->IsPowerOn = $param["IsPowerOn"];
        }

        if (array_key_exists("RackOpenTime",$param) and $param["RackOpenTime"] !== null) {
            $this->RackOpenTime = $param["RackOpenTime"];
        }

        if (array_key_exists("HostingType",$param) and $param["HostingType"] !== null) {
            $this->HostingType = $param["HostingType"];
        }
    }
}
