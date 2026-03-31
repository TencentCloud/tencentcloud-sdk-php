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
namespace TencentCloud\Tds\V20220801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFinanceFraudUltimate返回参数结构体
 *
 * @method string getAppVersion() 获取<p>App版本信息</p>
 * @method void setAppVersion(string $AppVersion) 设置<p>App版本信息</p>
 * @method string getBrand() 获取<p>品牌</p>
 * @method void setBrand(string $Brand) 设置<p>品牌</p>
 * @method string getClientIp() 获取<p>客户端IP</p>
 * @method void setClientIp(string $ClientIp) 设置<p>客户端IP</p>
 * @method string getModel() 获取<p>机型</p>
 * @method void setModel(string $Model) 设置<p>机型</p>
 * @method string getNetworkType() 获取<p>网络类型</p>
 * @method void setNetworkType(string $NetworkType) 设置<p>网络类型</p>
 * @method string getPackageName() 获取<p>应用包名</p>
 * @method void setPackageName(string $PackageName) 设置<p>应用包名</p>
 * @method string getPlatform() 获取<p>平台（2-Android，3-iOS，4-H5，5-微信小程序）</p>
 * @method void setPlatform(string $Platform) 设置<p>平台（2-Android，3-iOS，4-H5，5-微信小程序）</p>
 * @method string getSystemVersion() 获取<p>系统版本</p>
 * @method void setSystemVersion(string $SystemVersion) 设置<p>系统版本</p>
 * @method string getSdkBuildNo() 获取<p>SDK版本号</p>
 * @method void setSdkBuildNo(string $SdkBuildNo) 设置<p>SDK版本号</p>
 * @method array getRiskInfos() 获取<p>实时风险信息</p>
 * @method void setRiskInfos(array $RiskInfos) 设置<p>实时风险信息</p>
 * @method array getHistRiskInfos() 获取<p>离线风险信息</p>
 * @method void setHistRiskInfos(array $HistRiskInfos) 设置<p>离线风险信息</p>
 * @method string getOpenid() 获取<p>设备匿名标识</p>
 * @method void setOpenid(string $Openid) 设置<p>设备匿名标识</p>
 * @method array getSceneRiskInfos() 获取<p>场景风险信息</p>
 * @method void setSceneRiskInfos(array $SceneRiskInfos) 设置<p>场景风险信息</p>
 * @method integer getSuggestionLevel() 获取<p>建议等级。1-极差，2-较差，3-中等，4-良好，5-优秀</p>
 * @method void setSuggestionLevel(integer $SuggestionLevel) 设置<p>建议等级。1-极差，2-较差，3-中等，4-良好，5-优秀</p>
 * @method string getUnionid() 获取<p>图灵盾统一ID</p>
 * @method void setUnionid(string $Unionid) 设置<p>图灵盾统一ID</p>
 * @method string getRiskCheckTimestamp() 获取<p>检测时间戳（毫秒）</p>
 * @method void setRiskCheckTimestamp(string $RiskCheckTimestamp) 设置<p>检测时间戳（毫秒）</p>
 * @method array getExtraInfos() 获取<p>额外信息</p>
 * @method void setExtraInfos(array $ExtraInfos) 设置<p>额外信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFinanceFraudUltimateResponse extends AbstractModel
{
    /**
     * @var string <p>App版本信息</p>
     */
    public $AppVersion;

    /**
     * @var string <p>品牌</p>
     */
    public $Brand;

    /**
     * @var string <p>客户端IP</p>
     */
    public $ClientIp;

    /**
     * @var string <p>机型</p>
     */
    public $Model;

    /**
     * @var string <p>网络类型</p>
     */
    public $NetworkType;

    /**
     * @var string <p>应用包名</p>
     */
    public $PackageName;

    /**
     * @var string <p>平台（2-Android，3-iOS，4-H5，5-微信小程序）</p>
     */
    public $Platform;

    /**
     * @var string <p>系统版本</p>
     */
    public $SystemVersion;

    /**
     * @var string <p>SDK版本号</p>
     */
    public $SdkBuildNo;

    /**
     * @var array <p>实时风险信息</p>
     */
    public $RiskInfos;

    /**
     * @var array <p>离线风险信息</p>
     */
    public $HistRiskInfos;

    /**
     * @var string <p>设备匿名标识</p>
     */
    public $Openid;

    /**
     * @var array <p>场景风险信息</p>
     */
    public $SceneRiskInfos;

    /**
     * @var integer <p>建议等级。1-极差，2-较差，3-中等，4-良好，5-优秀</p>
     */
    public $SuggestionLevel;

    /**
     * @var string <p>图灵盾统一ID</p>
     */
    public $Unionid;

    /**
     * @var string <p>检测时间戳（毫秒）</p>
     */
    public $RiskCheckTimestamp;

    /**
     * @var array <p>额外信息</p>
     */
    public $ExtraInfos;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AppVersion <p>App版本信息</p>
     * @param string $Brand <p>品牌</p>
     * @param string $ClientIp <p>客户端IP</p>
     * @param string $Model <p>机型</p>
     * @param string $NetworkType <p>网络类型</p>
     * @param string $PackageName <p>应用包名</p>
     * @param string $Platform <p>平台（2-Android，3-iOS，4-H5，5-微信小程序）</p>
     * @param string $SystemVersion <p>系统版本</p>
     * @param string $SdkBuildNo <p>SDK版本号</p>
     * @param array $RiskInfos <p>实时风险信息</p>
     * @param array $HistRiskInfos <p>离线风险信息</p>
     * @param string $Openid <p>设备匿名标识</p>
     * @param array $SceneRiskInfos <p>场景风险信息</p>
     * @param integer $SuggestionLevel <p>建议等级。1-极差，2-较差，3-中等，4-良好，5-优秀</p>
     * @param string $Unionid <p>图灵盾统一ID</p>
     * @param string $RiskCheckTimestamp <p>检测时间戳（毫秒）</p>
     * @param array $ExtraInfos <p>额外信息</p>
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

        if (array_key_exists("SceneRiskInfos",$param) and $param["SceneRiskInfos"] !== null) {
            $this->SceneRiskInfos = [];
            foreach ($param["SceneRiskInfos"] as $key => $value){
                $obj = new RiskInfo();
                $obj->deserialize($value);
                array_push($this->SceneRiskInfos, $obj);
            }
        }

        if (array_key_exists("SuggestionLevel",$param) and $param["SuggestionLevel"] !== null) {
            $this->SuggestionLevel = $param["SuggestionLevel"];
        }

        if (array_key_exists("Unionid",$param) and $param["Unionid"] !== null) {
            $this->Unionid = $param["Unionid"];
        }

        if (array_key_exists("RiskCheckTimestamp",$param) and $param["RiskCheckTimestamp"] !== null) {
            $this->RiskCheckTimestamp = $param["RiskCheckTimestamp"];
        }

        if (array_key_exists("ExtraInfos",$param) and $param["ExtraInfos"] !== null) {
            $this->ExtraInfos = [];
            foreach ($param["ExtraInfos"] as $key => $value){
                $obj = new ExtraInfo();
                $obj->deserialize($value);
                array_push($this->ExtraInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
