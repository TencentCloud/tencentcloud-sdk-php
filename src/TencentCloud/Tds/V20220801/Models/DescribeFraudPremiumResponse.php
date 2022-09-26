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
namespace TencentCloud\Tds\V20220801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFraudPremium返回参数结构体
 *
 * @method string getAppVersion() 获取App版本信息
 * @method void setAppVersion(string $AppVersion) 设置App版本信息
 * @method string getBrand() 获取品牌
 * @method void setBrand(string $Brand) 设置品牌
 * @method string getClientIp() 获取客户端IP
 * @method void setClientIp(string $ClientIp) 设置客户端IP
 * @method string getModel() 获取机型
 * @method void setModel(string $Model) 设置机型
 * @method string getNetworkType() 获取网络类型
 * @method void setNetworkType(string $NetworkType) 设置网络类型
 * @method string getPackageName() 获取应用包名
 * @method void setPackageName(string $PackageName) 设置应用包名
 * @method string getPlatform() 获取平台（2-Android，3-iOS，4-H5，5-微信小程序）
 * @method void setPlatform(string $Platform) 设置平台（2-Android，3-iOS，4-H5，5-微信小程序）
 * @method string getSystemVersion() 获取系统版本
 * @method void setSystemVersion(string $SystemVersion) 设置系统版本
 * @method string getSdkBuildNo() 获取SDK版本号
 * @method void setSdkBuildNo(string $SdkBuildNo) 设置SDK版本号
 * @method array getRiskInfos() 获取实时风险信息
 * @method void setRiskInfos(array $RiskInfos) 设置实时风险信息
 * @method array getHistRiskInfos() 获取离线风险信息
 * @method void setHistRiskInfos(array $HistRiskInfos) 设置离线风险信息
 * @method string getOpenid() 获取设备匿名标识
 * @method void setOpenid(string $Openid) 设置设备匿名标识
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFraudPremiumResponse extends AbstractModel
{
    /**
     * @var string App版本信息
     */
    public $AppVersion;

    /**
     * @var string 品牌
     */
    public $Brand;

    /**
     * @var string 客户端IP
     */
    public $ClientIp;

    /**
     * @var string 机型
     */
    public $Model;

    /**
     * @var string 网络类型
     */
    public $NetworkType;

    /**
     * @var string 应用包名
     */
    public $PackageName;

    /**
     * @var string 平台（2-Android，3-iOS，4-H5，5-微信小程序）
     */
    public $Platform;

    /**
     * @var string 系统版本
     */
    public $SystemVersion;

    /**
     * @var string SDK版本号
     */
    public $SdkBuildNo;

    /**
     * @var array 实时风险信息
     */
    public $RiskInfos;

    /**
     * @var array 离线风险信息
     */
    public $HistRiskInfos;

    /**
     * @var string 设备匿名标识
     */
    public $Openid;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AppVersion App版本信息
     * @param string $Brand 品牌
     * @param string $ClientIp 客户端IP
     * @param string $Model 机型
     * @param string $NetworkType 网络类型
     * @param string $PackageName 应用包名
     * @param string $Platform 平台（2-Android，3-iOS，4-H5，5-微信小程序）
     * @param string $SystemVersion 系统版本
     * @param string $SdkBuildNo SDK版本号
     * @param array $RiskInfos 实时风险信息
     * @param array $HistRiskInfos 离线风险信息
     * @param string $Openid 设备匿名标识
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("Brand",$param) and $param["Brand"] !== null) {
            $this->Brand = $param["Brand"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("SystemVersion",$param) and $param["SystemVersion"] !== null) {
            $this->SystemVersion = $param["SystemVersion"];
        }

        if (array_key_exists("SdkBuildNo",$param) and $param["SdkBuildNo"] !== null) {
            $this->SdkBuildNo = $param["SdkBuildNo"];
        }

        if (array_key_exists("RiskInfos",$param) and $param["RiskInfos"] !== null) {
            $this->RiskInfos = [];
            foreach ($param["RiskInfos"] as $key => $value){
                $obj = new RiskInfo();
                $obj->deserialize($value);
                array_push($this->RiskInfos, $obj);
            }
        }

        if (array_key_exists("HistRiskInfos",$param) and $param["HistRiskInfos"] !== null) {
            $this->HistRiskInfos = [];
            foreach ($param["HistRiskInfos"] as $key => $value){
                $obj = new RiskInfo();
                $obj->deserialize($value);
                array_push($this->HistRiskInfos, $obj);
            }
        }

        if (array_key_exists("Openid",$param) and $param["Openid"] !== null) {
            $this->Openid = $param["Openid"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
