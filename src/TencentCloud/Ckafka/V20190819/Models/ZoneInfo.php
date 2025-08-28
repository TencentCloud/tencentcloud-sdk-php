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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * zone信息实体
 *
 * @method string getZoneId() 获取可用区
 * @method void setZoneId(string $ZoneId) 设置可用区
 * @method integer getIsInternalApp() 获取是否内部APP
 * @method void setIsInternalApp(integer $IsInternalApp) 设置是否内部APP
 * @method integer getAppId() 获取应用标识
 * @method void setAppId(integer $AppId) 设置应用标识
 * @method boolean getFlag() 获取标识
 * @method void setFlag(boolean $Flag) 设置标识
 * @method string getZoneName() 获取可用区名称
 * @method void setZoneName(string $ZoneName) 设置可用区名称
 * @method integer getZoneStatus() 获取可用区状态  枚举示例:  3: 开启，4: 关闭;  可用区状态以SoldOut为准
 * @method void setZoneStatus(integer $ZoneStatus) 设置可用区状态  枚举示例:  3: 开启，4: 关闭;  可用区状态以SoldOut为准
 * @method string getExflag() 获取额外标识
 * @method void setExflag(string $Exflag) 设置额外标识
 * @method string getSoldOut() 获取true为售罄，false为未售罄
 * @method void setSoldOut(string $SoldOut) 设置true为售罄，false为未售罄
 * @method array getSalesInfo() 获取标准版售罄信息
 * @method void setSalesInfo(array $SalesInfo) 设置标准版售罄信息
 * @method string getExtraFlag() 获取额外标识
 * @method void setExtraFlag(string $ExtraFlag) 设置额外标识
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $ZoneId;

    /**
     * @var integer 是否内部APP
     */
    public $IsInternalApp;

    /**
     * @var integer 应用标识
     */
    public $AppId;

    /**
     * @var boolean 标识
     */
    public $Flag;

    /**
     * @var string 可用区名称
     */
    public $ZoneName;

    /**
     * @var integer 可用区状态  枚举示例:  3: 开启，4: 关闭;  可用区状态以SoldOut为准
     */
    public $ZoneStatus;

    /**
     * @var string 额外标识
     * @deprecated
     */
    public $Exflag;

    /**
     * @var string true为售罄，false为未售罄
     */
    public $SoldOut;

    /**
     * @var array 标准版售罄信息
     */
    public $SalesInfo;

    /**
     * @var string 额外标识
     */
    public $ExtraFlag;

    /**
     * @param string $ZoneId 可用区
     * @param integer $IsInternalApp 是否内部APP
     * @param integer $AppId 应用标识
     * @param boolean $Flag 标识
     * @param string $ZoneName 可用区名称
     * @param integer $ZoneStatus 可用区状态  枚举示例:  3: 开启，4: 关闭;  可用区状态以SoldOut为准
     * @param string $Exflag 额外标识
     * @param string $SoldOut true为售罄，false为未售罄
     * @param array $SalesInfo 标准版售罄信息
     * @param string $ExtraFlag 额外标识
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

        if (array_key_exists("IsInternalApp",$param) and $param["IsInternalApp"] !== null) {
            $this->IsInternalApp = $param["IsInternalApp"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ZoneStatus",$param) and $param["ZoneStatus"] !== null) {
            $this->ZoneStatus = $param["ZoneStatus"];
        }

        if (array_key_exists("Exflag",$param) and $param["Exflag"] !== null) {
            $this->Exflag = $param["Exflag"];
        }

        if (array_key_exists("SoldOut",$param) and $param["SoldOut"] !== null) {
            $this->SoldOut = $param["SoldOut"];
        }

        if (array_key_exists("SalesInfo",$param) and $param["SalesInfo"] !== null) {
            $this->SalesInfo = [];
            foreach ($param["SalesInfo"] as $key => $value){
                $obj = new SaleInfo();
                $obj->deserialize($value);
                array_push($this->SalesInfo, $obj);
            }
        }

        if (array_key_exists("ExtraFlag",$param) and $param["ExtraFlag"] !== null) {
            $this->ExtraFlag = $param["ExtraFlag"];
        }
    }
}
