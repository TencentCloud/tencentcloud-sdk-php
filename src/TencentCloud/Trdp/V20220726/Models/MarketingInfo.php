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
namespace TencentCloud\Trdp\V20220726\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 营销信息
 *
 * @method integer getDeliveryMode() 获取投放模式（0=PDB，1=PD，2=RTB，10=其他）
 * @method void setDeliveryMode(integer $DeliveryMode) 设置投放模式（0=PDB，1=PD，2=RTB，10=其他）
 * @method integer getAdvertisingType() 获取广告位类型 （0=前贴片，1=开屏广告，2=网页头部广告、3=网页中部广告、4=网页底部广告、5=悬浮广告、10=其它）
 * @method void setAdvertisingType(integer $AdvertisingType) 设置广告位类型 （0=前贴片，1=开屏广告，2=网页头部广告、3=网页中部广告、4=网页底部广告、5=悬浮广告、10=其它）
 * @method integer getFullScreen() 获取是否全屏插广告（0-否，1-是）
 * @method void setFullScreen(integer $FullScreen) 设置是否全屏插广告（0-否，1-是）
 * @method integer getAdvertisingSpaceWidth() 获取广告位宽度
 * @method void setAdvertisingSpaceWidth(integer $AdvertisingSpaceWidth) 设置广告位宽度
 * @method integer getAdvertisingSpaceHeight() 获取广告位高度
 * @method void setAdvertisingSpaceHeight(integer $AdvertisingSpaceHeight) 设置广告位高度
 * @method string getUrl() 获取网址
 * @method void setUrl(string $Url) 设置网址
 */
class MarketingInfo extends AbstractModel
{
    /**
     * @var integer 投放模式（0=PDB，1=PD，2=RTB，10=其他）
     */
    public $DeliveryMode;

    /**
     * @var integer 广告位类型 （0=前贴片，1=开屏广告，2=网页头部广告、3=网页中部广告、4=网页底部广告、5=悬浮广告、10=其它）
     */
    public $AdvertisingType;

    /**
     * @var integer 是否全屏插广告（0-否，1-是）
     */
    public $FullScreen;

    /**
     * @var integer 广告位宽度
     */
    public $AdvertisingSpaceWidth;

    /**
     * @var integer 广告位高度
     */
    public $AdvertisingSpaceHeight;

    /**
     * @var string 网址
     */
    public $Url;

    /**
     * @param integer $DeliveryMode 投放模式（0=PDB，1=PD，2=RTB，10=其他）
     * @param integer $AdvertisingType 广告位类型 （0=前贴片，1=开屏广告，2=网页头部广告、3=网页中部广告、4=网页底部广告、5=悬浮广告、10=其它）
     * @param integer $FullScreen 是否全屏插广告（0-否，1-是）
     * @param integer $AdvertisingSpaceWidth 广告位宽度
     * @param integer $AdvertisingSpaceHeight 广告位高度
     * @param string $Url 网址
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
        if (array_key_exists("DeliveryMode",$param) and $param["DeliveryMode"] !== null) {
            $this->DeliveryMode = $param["DeliveryMode"];
        }

        if (array_key_exists("AdvertisingType",$param) and $param["AdvertisingType"] !== null) {
            $this->AdvertisingType = $param["AdvertisingType"];
        }

        if (array_key_exists("FullScreen",$param) and $param["FullScreen"] !== null) {
            $this->FullScreen = $param["FullScreen"];
        }

        if (array_key_exists("AdvertisingSpaceWidth",$param) and $param["AdvertisingSpaceWidth"] !== null) {
            $this->AdvertisingSpaceWidth = $param["AdvertisingSpaceWidth"];
        }

        if (array_key_exists("AdvertisingSpaceHeight",$param) and $param["AdvertisingSpaceHeight"] !== null) {
            $this->AdvertisingSpaceHeight = $param["AdvertisingSpaceHeight"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
