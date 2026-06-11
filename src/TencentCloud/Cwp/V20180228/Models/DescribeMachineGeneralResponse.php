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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMachineGeneral返回参数结构体
 *
 * @method integer getMachineCnt() 获取<p>资产总数</p>
 * @method void setMachineCnt(integer $MachineCnt) 设置<p>资产总数</p>
 * @method integer getTencentCloudMachineCnt() 获取<p>腾讯云服务商机器数</p>
 * @method void setTencentCloudMachineCnt(integer $TencentCloudMachineCnt) 设置<p>腾讯云服务商机器数</p>
 * @method integer getAliCloudMachineCnt() 获取<p>阿里云服务商机器数</p>
 * @method void setAliCloudMachineCnt(integer $AliCloudMachineCnt) 设置<p>阿里云服务商机器数</p>
 * @method integer getBaiduCloudMachineCnt() 获取<p>百度云服务商机器数</p>
 * @method void setBaiduCloudMachineCnt(integer $BaiduCloudMachineCnt) 设置<p>百度云服务商机器数</p>
 * @method integer getIDCMachineCnt() 获取<p>IDC机器数</p>
 * @method void setIDCMachineCnt(integer $IDCMachineCnt) 设置<p>IDC机器数</p>
 * @method integer getOtherCloudMachineCnt() 获取<p>其他云服务商机器数</p>
 * @method void setOtherCloudMachineCnt(integer $OtherCloudMachineCnt) 设置<p>其他云服务商机器数</p>
 * @method integer getProtectMachineCnt() 获取<p>已防护机器数</p>
 * @method void setProtectMachineCnt(integer $ProtectMachineCnt) 设置<p>已防护机器数</p>
 * @method integer getBaseMachineCnt() 获取<p>已防护基础版机器数</p>
 * @method void setBaseMachineCnt(integer $BaseMachineCnt) 设置<p>已防护基础版机器数</p>
 * @method integer getSpecialtyMachineCnt() 获取<p>已防护专业版机器数</p>
 * @method void setSpecialtyMachineCnt(integer $SpecialtyMachineCnt) 设置<p>已防护专业版机器数</p>
 * @method integer getFlagshipMachineCnt() 获取<p>已防护旗舰版机器数</p>
 * @method void setFlagshipMachineCnt(integer $FlagshipMachineCnt) 设置<p>已防护旗舰版机器数</p>
 * @method integer getRiskMachineCnt() 获取<p>存在风险的机器数</p>
 * @method void setRiskMachineCnt(integer $RiskMachineCnt) 设置<p>存在风险的机器数</p>
 * @method integer getCompareYesterdayRiskMachineCnt() 获取<p>比较昨日风险机器数</p>
 * @method void setCompareYesterdayRiskMachineCnt(integer $CompareYesterdayRiskMachineCnt) 设置<p>比较昨日风险机器数</p>
 * @method integer getCompareYesterdayNotProtectMachineCnt() 获取<p>比较昨日未防护机器数</p>
 * @method void setCompareYesterdayNotProtectMachineCnt(integer $CompareYesterdayNotProtectMachineCnt) 设置<p>比较昨日未防护机器数</p>
 * @method integer getCompareYesterdayDeadlineMachineCnt() 获取<p>比较昨日即将到期的机器数</p>
 * @method void setCompareYesterdayDeadlineMachineCnt(integer $CompareYesterdayDeadlineMachineCnt) 设置<p>比较昨日即将到期的机器数</p>
 * @method integer getDeadlineMachineCnt() 获取<p>即将到期的机器数</p>
 * @method void setDeadlineMachineCnt(integer $DeadlineMachineCnt) 设置<p>即将到期的机器数</p>
 * @method integer getNotProtectMachineCnt() 获取<p>未防护机器数</p>
 * @method void setNotProtectMachineCnt(integer $NotProtectMachineCnt) 设置<p>未防护机器数</p>
 * @method integer getLHGeneralDiscountCnt() 获取<p>已防护轻量机器数（Lighthouse机器）</p>
 * @method void setLHGeneralDiscountCnt(integer $LHGeneralDiscountCnt) 设置<p>已防护轻量机器数（Lighthouse机器）</p>
 * @method integer getCompareYesterdayMachineCnt() 获取<p>比较昨日新增的主机数</p>
 * @method void setCompareYesterdayMachineCnt(integer $CompareYesterdayMachineCnt) 设置<p>比较昨日新增的主机数</p>
 * @method integer getMachineDestroyAfterOfflineHours() 获取<p>自动清理时间,最大720小时,最小0, 默认0 ,0=关闭</p>
 * @method void setMachineDestroyAfterOfflineHours(integer $MachineDestroyAfterOfflineHours) 设置<p>自动清理时间,最大720小时,最小0, 默认0 ,0=关闭</p>
 * @method array getCloudFrom() 获取<p>云服务器类型数组</p>
 * @method void setCloudFrom(array $CloudFrom) 设置<p>云服务器类型数组</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMachineGeneralResponse extends AbstractModel
{
    /**
     * @var integer <p>资产总数</p>
     */
    public $MachineCnt;

    /**
     * @var integer <p>腾讯云服务商机器数</p>
     * @deprecated
     */
    public $TencentCloudMachineCnt;

    /**
     * @var integer <p>阿里云服务商机器数</p>
     * @deprecated
     */
    public $AliCloudMachineCnt;

    /**
     * @var integer <p>百度云服务商机器数</p>
     * @deprecated
     */
    public $BaiduCloudMachineCnt;

    /**
     * @var integer <p>IDC机器数</p>
     * @deprecated
     */
    public $IDCMachineCnt;

    /**
     * @var integer <p>其他云服务商机器数</p>
     * @deprecated
     */
    public $OtherCloudMachineCnt;

    /**
     * @var integer <p>已防护机器数</p>
     */
    public $ProtectMachineCnt;

    /**
     * @var integer <p>已防护基础版机器数</p>
     */
    public $BaseMachineCnt;

    /**
     * @var integer <p>已防护专业版机器数</p>
     */
    public $SpecialtyMachineCnt;

    /**
     * @var integer <p>已防护旗舰版机器数</p>
     */
    public $FlagshipMachineCnt;

    /**
     * @var integer <p>存在风险的机器数</p>
     */
    public $RiskMachineCnt;

    /**
     * @var integer <p>比较昨日风险机器数</p>
     */
    public $CompareYesterdayRiskMachineCnt;

    /**
     * @var integer <p>比较昨日未防护机器数</p>
     */
    public $CompareYesterdayNotProtectMachineCnt;

    /**
     * @var integer <p>比较昨日即将到期的机器数</p>
     */
    public $CompareYesterdayDeadlineMachineCnt;

    /**
     * @var integer <p>即将到期的机器数</p>
     */
    public $DeadlineMachineCnt;

    /**
     * @var integer <p>未防护机器数</p>
     */
    public $NotProtectMachineCnt;

    /**
     * @var integer <p>已防护轻量机器数（Lighthouse机器）</p>
     */
    public $LHGeneralDiscountCnt;

    /**
     * @var integer <p>比较昨日新增的主机数</p>
     */
    public $CompareYesterdayMachineCnt;

    /**
     * @var integer <p>自动清理时间,最大720小时,最小0, 默认0 ,0=关闭</p>
     */
    public $MachineDestroyAfterOfflineHours;

    /**
     * @var array <p>云服务器类型数组</p>
     */
    public $CloudFrom;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $MachineCnt <p>资产总数</p>
     * @param integer $TencentCloudMachineCnt <p>腾讯云服务商机器数</p>
     * @param integer $AliCloudMachineCnt <p>阿里云服务商机器数</p>
     * @param integer $BaiduCloudMachineCnt <p>百度云服务商机器数</p>
     * @param integer $IDCMachineCnt <p>IDC机器数</p>
     * @param integer $OtherCloudMachineCnt <p>其他云服务商机器数</p>
     * @param integer $ProtectMachineCnt <p>已防护机器数</p>
     * @param integer $BaseMachineCnt <p>已防护基础版机器数</p>
     * @param integer $SpecialtyMachineCnt <p>已防护专业版机器数</p>
     * @param integer $FlagshipMachineCnt <p>已防护旗舰版机器数</p>
     * @param integer $RiskMachineCnt <p>存在风险的机器数</p>
     * @param integer $CompareYesterdayRiskMachineCnt <p>比较昨日风险机器数</p>
     * @param integer $CompareYesterdayNotProtectMachineCnt <p>比较昨日未防护机器数</p>
     * @param integer $CompareYesterdayDeadlineMachineCnt <p>比较昨日即将到期的机器数</p>
     * @param integer $DeadlineMachineCnt <p>即将到期的机器数</p>
     * @param integer $NotProtectMachineCnt <p>未防护机器数</p>
     * @param integer $LHGeneralDiscountCnt <p>已防护轻量机器数（Lighthouse机器）</p>
     * @param integer $CompareYesterdayMachineCnt <p>比较昨日新增的主机数</p>
     * @param integer $MachineDestroyAfterOfflineHours <p>自动清理时间,最大720小时,最小0, 默认0 ,0=关闭</p>
     * @param array $CloudFrom <p>云服务器类型数组</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("MachineCnt",$param) and $param["MachineCnt"] !== null) {
            $this->MachineCnt = $param["MachineCnt"];
        }

        if (array_key_exists("TencentCloudMachineCnt",$param) and $param["TencentCloudMachineCnt"] !== null) {
            $this->TencentCloudMachineCnt = $param["TencentCloudMachineCnt"];
        }

        if (array_key_exists("AliCloudMachineCnt",$param) and $param["AliCloudMachineCnt"] !== null) {
            $this->AliCloudMachineCnt = $param["AliCloudMachineCnt"];
        }

        if (array_key_exists("BaiduCloudMachineCnt",$param) and $param["BaiduCloudMachineCnt"] !== null) {
            $this->BaiduCloudMachineCnt = $param["BaiduCloudMachineCnt"];
        }

        if (array_key_exists("IDCMachineCnt",$param) and $param["IDCMachineCnt"] !== null) {
            $this->IDCMachineCnt = $param["IDCMachineCnt"];
        }

        if (array_key_exists("OtherCloudMachineCnt",$param) and $param["OtherCloudMachineCnt"] !== null) {
            $this->OtherCloudMachineCnt = $param["OtherCloudMachineCnt"];
        }

        if (array_key_exists("ProtectMachineCnt",$param) and $param["ProtectMachineCnt"] !== null) {
            $this->ProtectMachineCnt = $param["ProtectMachineCnt"];
        }

        if (array_key_exists("BaseMachineCnt",$param) and $param["BaseMachineCnt"] !== null) {
            $this->BaseMachineCnt = $param["BaseMachineCnt"];
        }

        if (array_key_exists("SpecialtyMachineCnt",$param) and $param["SpecialtyMachineCnt"] !== null) {
            $this->SpecialtyMachineCnt = $param["SpecialtyMachineCnt"];
        }

        if (array_key_exists("FlagshipMachineCnt",$param) and $param["FlagshipMachineCnt"] !== null) {
            $this->FlagshipMachineCnt = $param["FlagshipMachineCnt"];
        }

        if (array_key_exists("RiskMachineCnt",$param) and $param["RiskMachineCnt"] !== null) {
            $this->RiskMachineCnt = $param["RiskMachineCnt"];
        }

        if (array_key_exists("CompareYesterdayRiskMachineCnt",$param) and $param["CompareYesterdayRiskMachineCnt"] !== null) {
            $this->CompareYesterdayRiskMachineCnt = $param["CompareYesterdayRiskMachineCnt"];
        }

        if (array_key_exists("CompareYesterdayNotProtectMachineCnt",$param) and $param["CompareYesterdayNotProtectMachineCnt"] !== null) {
            $this->CompareYesterdayNotProtectMachineCnt = $param["CompareYesterdayNotProtectMachineCnt"];
        }

        if (array_key_exists("CompareYesterdayDeadlineMachineCnt",$param) and $param["CompareYesterdayDeadlineMachineCnt"] !== null) {
            $this->CompareYesterdayDeadlineMachineCnt = $param["CompareYesterdayDeadlineMachineCnt"];
        }

        if (array_key_exists("DeadlineMachineCnt",$param) and $param["DeadlineMachineCnt"] !== null) {
            $this->DeadlineMachineCnt = $param["DeadlineMachineCnt"];
        }

        if (array_key_exists("NotProtectMachineCnt",$param) and $param["NotProtectMachineCnt"] !== null) {
            $this->NotProtectMachineCnt = $param["NotProtectMachineCnt"];
        }

        if (array_key_exists("LHGeneralDiscountCnt",$param) and $param["LHGeneralDiscountCnt"] !== null) {
            $this->LHGeneralDiscountCnt = $param["LHGeneralDiscountCnt"];
        }

        if (array_key_exists("CompareYesterdayMachineCnt",$param) and $param["CompareYesterdayMachineCnt"] !== null) {
            $this->CompareYesterdayMachineCnt = $param["CompareYesterdayMachineCnt"];
        }

        if (array_key_exists("MachineDestroyAfterOfflineHours",$param) and $param["MachineDestroyAfterOfflineHours"] !== null) {
            $this->MachineDestroyAfterOfflineHours = $param["MachineDestroyAfterOfflineHours"];
        }

        if (array_key_exists("CloudFrom",$param) and $param["CloudFrom"] !== null) {
            $this->CloudFrom = [];
            foreach ($param["CloudFrom"] as $key => $value){
                $obj = new CloudFromCnt();
                $obj->deserialize($value);
                array_push($this->CloudFrom, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
