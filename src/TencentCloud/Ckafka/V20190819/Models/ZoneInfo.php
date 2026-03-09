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
 * @method string getZoneId() 获取<p>可用区</p>
 * @method void setZoneId(string $ZoneId) 设置<p>可用区</p>
 * @method integer getIsInternalApp() 获取<p>是否内部APP</p><p>枚举值：</p><ul><li>0： 外部</li><li>1： 内部</li></ul><p>默认值：0</p>
 * @method void setIsInternalApp(integer $IsInternalApp) 设置<p>是否内部APP</p><p>枚举值：</p><ul><li>0： 外部</li><li>1： 内部</li></ul><p>默认值：0</p>
 * @method integer getAppId() 获取<p>应用标识</p>
 * @method void setAppId(integer $AppId) 设置<p>应用标识</p>
 * @method boolean getFlag() 获取<p>可用区是否售罄标识，true表示已售罄，false表示未售罄。</p>
 * @method void setFlag(boolean $Flag) 设置<p>可用区是否售罄标识，true表示已售罄，false表示未售罄。</p>
 * @method string getZoneName() 获取<p>可用区名称</p>
 * @method void setZoneName(string $ZoneName) 设置<p>可用区名称</p>
 * @method integer getZoneStatus() 获取<p>可用区状态</p><p>枚举值：</p><ul><li>3： 开启</li><li>4： 关闭</li></ul><p>可用区状态以SoldOut为准</p>
 * @method void setZoneStatus(integer $ZoneStatus) 设置<p>可用区状态</p><p>枚举值：</p><ul><li>3： 开启</li><li>4： 关闭</li></ul><p>可用区状态以SoldOut为准</p>
 * @method string getExflag() 获取<p>额外标识</p>
 * @method void setExflag(string $Exflag) 设置<p>额外标识</p>
 * @method string getSoldOut() 获取<p>true为售罄，false为未售罄</p>
 * @method void setSoldOut(string $SoldOut) 设置<p>true为售罄，false为未售罄</p>
 * @method array getSalesInfo() 获取<p>标准版售罄信息</p>
 * @method void setSalesInfo(array $SalesInfo) 设置<p>标准版售罄信息</p>
 * @method string getExtraFlag() 获取<p>额外标识</p>
 * @method void setExtraFlag(string $ExtraFlag) 设置<p>额外标识</p>
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string <p>可用区</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>是否内部APP</p><p>枚举值：</p><ul><li>0： 外部</li><li>1： 内部</li></ul><p>默认值：0</p>
     */
    public $IsInternalApp;

    /**
     * @var integer <p>应用标识</p>
     */
    public $AppId;

    /**
     * @var boolean <p>可用区是否售罄标识，true表示已售罄，false表示未售罄。</p>
     */
    public $Flag;

    /**
     * @var string <p>可用区名称</p>
     */
    public $ZoneName;

    /**
     * @var integer <p>可用区状态</p><p>枚举值：</p><ul><li>3： 开启</li><li>4： 关闭</li></ul><p>可用区状态以SoldOut为准</p>
     */
    public $ZoneStatus;

    /**
     * @var string <p>额外标识</p>
     * @deprecated
     */
    public $Exflag;

    /**
     * @var string <p>true为售罄，false为未售罄</p>
     */
    public $SoldOut;

    /**
     * @var array <p>标准版售罄信息</p>
     */
    public $SalesInfo;

    /**
     * @var string <p>额外标识</p>
     */
    public $ExtraFlag;

    /**
     * @param string $ZoneId <p>可用区</p>
     * @param integer $IsInternalApp <p>是否内部APP</p><p>枚举值：</p><ul><li>0： 外部</li><li>1： 内部</li></ul><p>默认值：0</p>
     * @param integer $AppId <p>应用标识</p>
     * @param boolean $Flag <p>可用区是否售罄标识，true表示已售罄，false表示未售罄。</p>
     * @param string $ZoneName <p>可用区名称</p>
     * @param integer $ZoneStatus <p>可用区状态</p><p>枚举值：</p><ul><li>3： 开启</li><li>4： 关闭</li></ul><p>可用区状态以SoldOut为准</p>
     * @param string $Exflag <p>额外标识</p>
     * @param string $SoldOut <p>true为售罄，false为未售罄</p>
     * @param array $SalesInfo <p>标准版售罄信息</p>
     * @param string $ExtraFlag <p>额外标识</p>
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
