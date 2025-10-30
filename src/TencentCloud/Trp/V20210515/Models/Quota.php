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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业配额信息
 *
 * @method string getStartTime() 获取服务开始时间
 * @method void setStartTime(string $StartTime) 设置服务开始时间
 * @method string getEndTime() 获取服务结束时间
 * @method void setEndTime(string $EndTime) 设置服务结束时间
 * @method integer getQuotaId() 获取配额ID
 * @method void setQuotaId(integer $QuotaId) 设置配额ID
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method array getServices() 获取开通服务
 * @method void setServices(array $Services) 设置开通服务
 * @method integer getFactoryQuota() 获取商户配额
 * @method void setFactoryQuota(integer $FactoryQuota) 设置商户配额
 * @method integer getItemQuota() 获取商品配额
 * @method void setItemQuota(integer $ItemQuota) 设置商品配额
 * @method integer getTrackQuota() 获取溯源码配额
 * @method void setTrackQuota(integer $TrackQuota) 设置溯源码配额
 * @method integer getSaleQuota() 获取销售码配额
 * @method void setSaleQuota(integer $SaleQuota) 设置销售码配额
 * @method integer getChainQuota() 获取上链配额
 * @method void setChainQuota(integer $ChainQuota) 设置上链配额
 * @method integer getRiskQuota() 获取风控配额
 * @method void setRiskQuota(integer $RiskQuota) 设置风控配额
 * @method integer getAigcTextQuota() 获取AI文字数量
 * @method void setAigcTextQuota(integer $AigcTextQuota) 设置AI文字数量
 * @method integer getAigcImageQuota() 获取AI图片数量
 * @method void setAigcImageQuota(integer $AigcImageQuota) 设置AI图片数量
 * @method integer getTrackType() 获取溯源类型
 * @method void setTrackType(integer $TrackType) 设置溯源类型
 * @method string getVersion() 获取开通版本 lite:轻量版, basic:基础版, standard:标准版
 * @method void setVersion(string $Version) 设置开通版本 lite:轻量版, basic:基础版, standard:标准版
 * @method integer getProductCertify() 获取是否开启企业认证
 * @method void setProductCertify(integer $ProductCertify) 设置是否开启企业认证
 */
class Quota extends AbstractModel
{
    /**
     * @var string 服务开始时间
     */
    public $StartTime;

    /**
     * @var string 服务结束时间
     */
    public $EndTime;

    /**
     * @var integer 配额ID
     */
    public $QuotaId;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var array 开通服务
     */
    public $Services;

    /**
     * @var integer 商户配额
     */
    public $FactoryQuota;

    /**
     * @var integer 商品配额
     */
    public $ItemQuota;

    /**
     * @var integer 溯源码配额
     */
    public $TrackQuota;

    /**
     * @var integer 销售码配额
     */
    public $SaleQuota;

    /**
     * @var integer 上链配额
     */
    public $ChainQuota;

    /**
     * @var integer 风控配额
     */
    public $RiskQuota;

    /**
     * @var integer AI文字数量
     */
    public $AigcTextQuota;

    /**
     * @var integer AI图片数量
     */
    public $AigcImageQuota;

    /**
     * @var integer 溯源类型
     */
    public $TrackType;

    /**
     * @var string 开通版本 lite:轻量版, basic:基础版, standard:标准版
     */
    public $Version;

    /**
     * @var integer 是否开启企业认证
     */
    public $ProductCertify;

    /**
     * @param string $StartTime 服务开始时间
     * @param string $EndTime 服务结束时间
     * @param integer $QuotaId 配额ID
     * @param integer $CorpId 企业ID
     * @param array $Services 开通服务
     * @param integer $FactoryQuota 商户配额
     * @param integer $ItemQuota 商品配额
     * @param integer $TrackQuota 溯源码配额
     * @param integer $SaleQuota 销售码配额
     * @param integer $ChainQuota 上链配额
     * @param integer $RiskQuota 风控配额
     * @param integer $AigcTextQuota AI文字数量
     * @param integer $AigcImageQuota AI图片数量
     * @param integer $TrackType 溯源类型
     * @param string $Version 开通版本 lite:轻量版, basic:基础版, standard:标准版
     * @param integer $ProductCertify 是否开启企业认证
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("QuotaId",$param) and $param["QuotaId"] !== null) {
            $this->QuotaId = $param["QuotaId"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("Services",$param) and $param["Services"] !== null) {
            $this->Services = $param["Services"];
        }

        if (array_key_exists("FactoryQuota",$param) and $param["FactoryQuota"] !== null) {
            $this->FactoryQuota = $param["FactoryQuota"];
        }

        if (array_key_exists("ItemQuota",$param) and $param["ItemQuota"] !== null) {
            $this->ItemQuota = $param["ItemQuota"];
        }

        if (array_key_exists("TrackQuota",$param) and $param["TrackQuota"] !== null) {
            $this->TrackQuota = $param["TrackQuota"];
        }

        if (array_key_exists("SaleQuota",$param) and $param["SaleQuota"] !== null) {
            $this->SaleQuota = $param["SaleQuota"];
        }

        if (array_key_exists("ChainQuota",$param) and $param["ChainQuota"] !== null) {
            $this->ChainQuota = $param["ChainQuota"];
        }

        if (array_key_exists("RiskQuota",$param) and $param["RiskQuota"] !== null) {
            $this->RiskQuota = $param["RiskQuota"];
        }

        if (array_key_exists("AigcTextQuota",$param) and $param["AigcTextQuota"] !== null) {
            $this->AigcTextQuota = $param["AigcTextQuota"];
        }

        if (array_key_exists("AigcImageQuota",$param) and $param["AigcImageQuota"] !== null) {
            $this->AigcImageQuota = $param["AigcImageQuota"];
        }

        if (array_key_exists("TrackType",$param) and $param["TrackType"] !== null) {
            $this->TrackType = $param["TrackType"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ProductCertify",$param) and $param["ProductCertify"] !== null) {
            $this->ProductCertify = $param["ProductCertify"];
        }
    }
}
