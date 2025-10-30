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
 * @method integer getMachineCnt() 获取资产总数
 * @method void setMachineCnt(integer $MachineCnt) 设置资产总数
 * @method integer getTencentCloudMachineCnt() 获取腾讯云服务商机器数
 * @method void setTencentCloudMachineCnt(integer $TencentCloudMachineCnt) 设置腾讯云服务商机器数
 * @method integer getAliCloudMachineCnt() 获取阿里云服务商机器数
 * @method void setAliCloudMachineCnt(integer $AliCloudMachineCnt) 设置阿里云服务商机器数
 * @method integer getBaiduCloudMachineCnt() 获取百度云服务商机器数
 * @method void setBaiduCloudMachineCnt(integer $BaiduCloudMachineCnt) 设置百度云服务商机器数
 * @method integer getIDCMachineCnt() 获取IDC机器数
 * @method void setIDCMachineCnt(integer $IDCMachineCnt) 设置IDC机器数
 * @method integer getOtherCloudMachineCnt() 获取其他云服务商机器数
 * @method void setOtherCloudMachineCnt(integer $OtherCloudMachineCnt) 设置其他云服务商机器数
 * @method integer getProtectMachineCnt() 获取已防护机器数
 * @method void setProtectMachineCnt(integer $ProtectMachineCnt) 设置已防护机器数
 * @method integer getBaseMachineCnt() 获取已防护基础版机器数
 * @method void setBaseMachineCnt(integer $BaseMachineCnt) 设置已防护基础版机器数
 * @method integer getSpecialtyMachineCnt() 获取已防护专业版机器数
 * @method void setSpecialtyMachineCnt(integer $SpecialtyMachineCnt) 设置已防护专业版机器数
 * @method integer getFlagshipMachineCnt() 获取已防护旗舰版机器数
 * @method void setFlagshipMachineCnt(integer $FlagshipMachineCnt) 设置已防护旗舰版机器数
 * @method integer getRiskMachineCnt() 获取存在风险的机器数
 * @method void setRiskMachineCnt(integer $RiskMachineCnt) 设置存在风险的机器数
 * @method integer getCompareYesterdayRiskMachineCnt() 获取比较昨日风险机器数
 * @method void setCompareYesterdayRiskMachineCnt(integer $CompareYesterdayRiskMachineCnt) 设置比较昨日风险机器数
 * @method integer getCompareYesterdayNotProtectMachineCnt() 获取比较昨日未防护机器数
 * @method void setCompareYesterdayNotProtectMachineCnt(integer $CompareYesterdayNotProtectMachineCnt) 设置比较昨日未防护机器数
 * @method integer getCompareYesterdayDeadlineMachineCnt() 获取比较昨日即将到期的机器数
 * @method void setCompareYesterdayDeadlineMachineCnt(integer $CompareYesterdayDeadlineMachineCnt) 设置比较昨日即将到期的机器数
 * @method integer getDeadlineMachineCnt() 获取即将到期的机器数
 * @method void setDeadlineMachineCnt(integer $DeadlineMachineCnt) 设置即将到期的机器数
 * @method integer getNotProtectMachineCnt() 获取未防护机器数
 * @method void setNotProtectMachineCnt(integer $NotProtectMachineCnt) 设置未防护机器数
 * @method integer getLHGeneralDiscountCnt() 获取已防护轻量机器数（Lighthouse机器）
 * @method void setLHGeneralDiscountCnt(integer $LHGeneralDiscountCnt) 设置已防护轻量机器数（Lighthouse机器）
 * @method integer getCompareYesterdayMachineCnt() 获取比较昨日新增的主机数
 * @method void setCompareYesterdayMachineCnt(integer $CompareYesterdayMachineCnt) 设置比较昨日新增的主机数
 * @method integer getMachineDestroyAfterOfflineHours() 获取自动清理时间,最大720小时,最小0, 默认0 ,0=关闭
 * @method void setMachineDestroyAfterOfflineHours(integer $MachineDestroyAfterOfflineHours) 设置自动清理时间,最大720小时,最小0, 默认0 ,0=关闭
 * @method array getCloudFrom() 获取云服务器类型数组
 * @method void setCloudFrom(array $CloudFrom) 设置云服务器类型数组
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMachineGeneralResponse extends AbstractModel
{
    /**
     * @var integer 资产总数
     */
    public $MachineCnt;

    /**
     * @var integer 腾讯云服务商机器数
     * @deprecated
     */
    public $TencentCloudMachineCnt;

    /**
     * @var integer 阿里云服务商机器数
     * @deprecated
     */
    public $AliCloudMachineCnt;

    /**
     * @var integer 百度云服务商机器数
     * @deprecated
     */
    public $BaiduCloudMachineCnt;

    /**
     * @var integer IDC机器数
     * @deprecated
     */
    public $IDCMachineCnt;

    /**
     * @var integer 其他云服务商机器数
     * @deprecated
     */
    public $OtherCloudMachineCnt;

    /**
     * @var integer 已防护机器数
     */
    public $ProtectMachineCnt;

    /**
     * @var integer 已防护基础版机器数
     */
    public $BaseMachineCnt;

    /**
     * @var integer 已防护专业版机器数
     */
    public $SpecialtyMachineCnt;

    /**
     * @var integer 已防护旗舰版机器数
     */
    public $FlagshipMachineCnt;

    /**
     * @var integer 存在风险的机器数
     */
    public $RiskMachineCnt;

    /**
     * @var integer 比较昨日风险机器数
     */
    public $CompareYesterdayRiskMachineCnt;

    /**
     * @var integer 比较昨日未防护机器数
     */
    public $CompareYesterdayNotProtectMachineCnt;

    /**
     * @var integer 比较昨日即将到期的机器数
     */
    public $CompareYesterdayDeadlineMachineCnt;

    /**
     * @var integer 即将到期的机器数
     */
    public $DeadlineMachineCnt;

    /**
     * @var integer 未防护机器数
     */
    public $NotProtectMachineCnt;

    /**
     * @var integer 已防护轻量机器数（Lighthouse机器）
     */
    public $LHGeneralDiscountCnt;

    /**
     * @var integer 比较昨日新增的主机数
     */
    public $CompareYesterdayMachineCnt;

    /**
     * @var integer 自动清理时间,最大720小时,最小0, 默认0 ,0=关闭
     */
    public $MachineDestroyAfterOfflineHours;

    /**
     * @var array 云服务器类型数组
     */
    public $CloudFrom;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $MachineCnt 资产总数
     * @param integer $TencentCloudMachineCnt 腾讯云服务商机器数
     * @param integer $AliCloudMachineCnt 阿里云服务商机器数
     * @param integer $BaiduCloudMachineCnt 百度云服务商机器数
     * @param integer $IDCMachineCnt IDC机器数
     * @param integer $OtherCloudMachineCnt 其他云服务商机器数
     * @param integer $ProtectMachineCnt 已防护机器数
     * @param integer $BaseMachineCnt 已防护基础版机器数
     * @param integer $SpecialtyMachineCnt 已防护专业版机器数
     * @param integer $FlagshipMachineCnt 已防护旗舰版机器数
     * @param integer $RiskMachineCnt 存在风险的机器数
     * @param integer $CompareYesterdayRiskMachineCnt 比较昨日风险机器数
     * @param integer $CompareYesterdayNotProtectMachineCnt 比较昨日未防护机器数
     * @param integer $CompareYesterdayDeadlineMachineCnt 比较昨日即将到期的机器数
     * @param integer $DeadlineMachineCnt 即将到期的机器数
     * @param integer $NotProtectMachineCnt 未防护机器数
     * @param integer $LHGeneralDiscountCnt 已防护轻量机器数（Lighthouse机器）
     * @param integer $CompareYesterdayMachineCnt 比较昨日新增的主机数
     * @param integer $MachineDestroyAfterOfflineHours 自动清理时间,最大720小时,最小0, 默认0 ,0=关闭
     * @param array $CloudFrom 云服务器类型数组
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
