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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SSAI广告插入配置。
 *
 * @method string getAdsUrl() 获取<p>广告决策服务器URL(ADS)。</p>
 * @method void setAdsUrl(string $AdsUrl) 设置<p>广告决策服务器URL(ADS)。</p>
 * @method array getConfigAliases() 获取<p>参数配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigAliases(array $ConfigAliases) 设置<p>参数配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAdMarkerPassthrough() 获取<p>是否开启广告标记透传。</p>
 * @method void setAdMarkerPassthrough(boolean $AdMarkerPassthrough) 设置<p>是否开启广告标记透传。</p>
 * @method integer getSCTE35AdType() 获取<p>如何处理广告中的标记,可选值[1-2]：<br>1:所有SCTE-35类型标记全部处理-all（默认）<br>2:SCTE-35enhanced，解析部分类型。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSCTE35AdType(integer $SCTE35AdType) 设置<p>如何处理广告中的标记,可选值[1-2]：<br>1:所有SCTE-35类型标记全部处理-all（默认）<br>2:SCTE-35enhanced，解析部分类型。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSlateAd() 获取<p>默认广告url。</p>
 * @method void setSlateAd(string $SlateAd) 设置<p>默认广告url。</p>
 * @method integer getThreshold() 获取<p>未填充的最大时长，单位：秒。</p>
 * @method void setThreshold(integer $Threshold) 设置<p>未填充的最大时长，单位：秒。</p>
 * @method boolean getDashMPDLocation() 获取<p>是否开启mpd location, true对应enable， false对应disable。</p>
 * @method void setDashMPDLocation(boolean $DashMPDLocation) 设置<p>是否开启mpd location, true对应enable， false对应disable。</p>
 * @method array getAdTriggers() 获取<p>被视作广告的标记类型，可选值[1-8]：</p><ol><li>Splice insert<br>2.Provider advertisement</li><li>Distributor advertisement</li><li>Provider placement opportunity</li><li>Distributor placement opportunity</li><li>Break</li><li>Provider overlay placement opportunity</li><li>Distributor overlay placement opportunity。</li></ol>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdTriggers(array $AdTriggers) 设置<p>被视作广告的标记类型，可选值[1-8]：</p><ol><li>Splice insert<br>2.Provider advertisement</li><li>Distributor advertisement</li><li>Provider placement opportunity</li><li>Distributor placement opportunity</li><li>Break</li><li>Provider overlay placement opportunity</li><li>Distributor overlay placement opportunity。</li></ol>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeliveryRestrictions() 获取<p>被视作广告的分发限制类型，可选值[1-4]：<br>1:None<br>2:Restricted（默认） 3:Unrestricted<br>4.Both</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeliveryRestrictions(integer $DeliveryRestrictions) 设置<p>被视作广告的分发限制类型，可选值[1-4]：<br>1:None<br>2:Restricted（默认） 3:Unrestricted<br>4.Both</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceCDNPrefix() 获取<p>源流CDN前缀，需要以http://或者https://开头。</p>
 * @method void setSourceCDNPrefix(string $SourceCDNPrefix) 设置<p>源流CDN前缀，需要以http://或者https://开头。</p>
 * @method string getAdCDNPrefix() 获取<p>广告CDN前缀，需要以http://或者https://开头。</p>
 * @method void setAdCDNPrefix(string $AdCDNPrefix) 设置<p>广告CDN前缀，需要以http://或者https://开头。</p>
 * @method string getPreRollAdsUrl() 获取<p>预加载广告决策服务地址。</p>
 * @method void setPreRollAdsUrl(string $PreRollAdsUrl) 设置<p>预加载广告决策服务地址。</p>
 * @method integer getPreRollMaxAllowedDuration() 获取<p>预加载广告最大允许时长，0-3600。</p>
 * @method void setPreRollMaxAllowedDuration(integer $PreRollMaxAllowedDuration) 设置<p>预加载广告最大允许时长，0-3600。</p>
 * @method boolean getMultiRequest() 获取<p>是否开启多次请求ADS,开启后将优先请求ADS，请求失败后再请求兜底广告</p>
 * @method void setMultiRequest(boolean $MultiRequest) 设置<p>是否开启多次请求ADS,开启后将优先请求ADS，请求失败后再请求兜底广告</p>
 */
class SSAIConf extends AbstractModel
{
    /**
     * @var string <p>广告决策服务器URL(ADS)。</p>
     */
    public $AdsUrl;

    /**
     * @var array <p>参数配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigAliases;

    /**
     * @var boolean <p>是否开启广告标记透传。</p>
     */
    public $AdMarkerPassthrough;

    /**
     * @var integer <p>如何处理广告中的标记,可选值[1-2]：<br>1:所有SCTE-35类型标记全部处理-all（默认）<br>2:SCTE-35enhanced，解析部分类型。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SCTE35AdType;

    /**
     * @var string <p>默认广告url。</p>
     */
    public $SlateAd;

    /**
     * @var integer <p>未填充的最大时长，单位：秒。</p>
     */
    public $Threshold;

    /**
     * @var boolean <p>是否开启mpd location, true对应enable， false对应disable。</p>
     */
    public $DashMPDLocation;

    /**
     * @var array <p>被视作广告的标记类型，可选值[1-8]：</p><ol><li>Splice insert<br>2.Provider advertisement</li><li>Distributor advertisement</li><li>Provider placement opportunity</li><li>Distributor placement opportunity</li><li>Break</li><li>Provider overlay placement opportunity</li><li>Distributor overlay placement opportunity。</li></ol>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdTriggers;

    /**
     * @var integer <p>被视作广告的分发限制类型，可选值[1-4]：<br>1:None<br>2:Restricted（默认） 3:Unrestricted<br>4.Both</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeliveryRestrictions;

    /**
     * @var string <p>源流CDN前缀，需要以http://或者https://开头。</p>
     */
    public $SourceCDNPrefix;

    /**
     * @var string <p>广告CDN前缀，需要以http://或者https://开头。</p>
     */
    public $AdCDNPrefix;

    /**
     * @var string <p>预加载广告决策服务地址。</p>
     */
    public $PreRollAdsUrl;

    /**
     * @var integer <p>预加载广告最大允许时长，0-3600。</p>
     */
    public $PreRollMaxAllowedDuration;

    /**
     * @var boolean <p>是否开启多次请求ADS,开启后将优先请求ADS，请求失败后再请求兜底广告</p>
     */
    public $MultiRequest;

    /**
     * @param string $AdsUrl <p>广告决策服务器URL(ADS)。</p>
     * @param array $ConfigAliases <p>参数配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AdMarkerPassthrough <p>是否开启广告标记透传。</p>
     * @param integer $SCTE35AdType <p>如何处理广告中的标记,可选值[1-2]：<br>1:所有SCTE-35类型标记全部处理-all（默认）<br>2:SCTE-35enhanced，解析部分类型。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SlateAd <p>默认广告url。</p>
     * @param integer $Threshold <p>未填充的最大时长，单位：秒。</p>
     * @param boolean $DashMPDLocation <p>是否开启mpd location, true对应enable， false对应disable。</p>
     * @param array $AdTriggers <p>被视作广告的标记类型，可选值[1-8]：</p><ol><li>Splice insert<br>2.Provider advertisement</li><li>Distributor advertisement</li><li>Provider placement opportunity</li><li>Distributor placement opportunity</li><li>Break</li><li>Provider overlay placement opportunity</li><li>Distributor overlay placement opportunity。</li></ol>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeliveryRestrictions <p>被视作广告的分发限制类型，可选值[1-4]：<br>1:None<br>2:Restricted（默认） 3:Unrestricted<br>4.Both</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceCDNPrefix <p>源流CDN前缀，需要以http://或者https://开头。</p>
     * @param string $AdCDNPrefix <p>广告CDN前缀，需要以http://或者https://开头。</p>
     * @param string $PreRollAdsUrl <p>预加载广告决策服务地址。</p>
     * @param integer $PreRollMaxAllowedDuration <p>预加载广告最大允许时长，0-3600。</p>
     * @param boolean $MultiRequest <p>是否开启多次请求ADS,开启后将优先请求ADS，请求失败后再请求兜底广告</p>
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
        if (array_key_exists("AdsUrl",$param) and $param["AdsUrl"] !== null) {
            $this->AdsUrl = $param["AdsUrl"];
        }

        if (array_key_exists("ConfigAliases",$param) and $param["ConfigAliases"] !== null) {
            $this->ConfigAliases = [];
            foreach ($param["ConfigAliases"] as $key => $value){
                $obj = new ConfigAliasesInfo();
                $obj->deserialize($value);
                array_push($this->ConfigAliases, $obj);
            }
        }

        if (array_key_exists("AdMarkerPassthrough",$param) and $param["AdMarkerPassthrough"] !== null) {
            $this->AdMarkerPassthrough = $param["AdMarkerPassthrough"];
        }

        if (array_key_exists("SCTE35AdType",$param) and $param["SCTE35AdType"] !== null) {
            $this->SCTE35AdType = $param["SCTE35AdType"];
        }

        if (array_key_exists("SlateAd",$param) and $param["SlateAd"] !== null) {
            $this->SlateAd = $param["SlateAd"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("DashMPDLocation",$param) and $param["DashMPDLocation"] !== null) {
            $this->DashMPDLocation = $param["DashMPDLocation"];
        }

        if (array_key_exists("AdTriggers",$param) and $param["AdTriggers"] !== null) {
            $this->AdTriggers = $param["AdTriggers"];
        }

        if (array_key_exists("DeliveryRestrictions",$param) and $param["DeliveryRestrictions"] !== null) {
            $this->DeliveryRestrictions = $param["DeliveryRestrictions"];
        }

        if (array_key_exists("SourceCDNPrefix",$param) and $param["SourceCDNPrefix"] !== null) {
            $this->SourceCDNPrefix = $param["SourceCDNPrefix"];
        }

        if (array_key_exists("AdCDNPrefix",$param) and $param["AdCDNPrefix"] !== null) {
            $this->AdCDNPrefix = $param["AdCDNPrefix"];
        }

        if (array_key_exists("PreRollAdsUrl",$param) and $param["PreRollAdsUrl"] !== null) {
            $this->PreRollAdsUrl = $param["PreRollAdsUrl"];
        }

        if (array_key_exists("PreRollMaxAllowedDuration",$param) and $param["PreRollMaxAllowedDuration"] !== null) {
            $this->PreRollMaxAllowedDuration = $param["PreRollMaxAllowedDuration"];
        }

        if (array_key_exists("MultiRequest",$param) and $param["MultiRequest"] !== null) {
            $this->MultiRequest = $param["MultiRequest"];
        }
    }
}
