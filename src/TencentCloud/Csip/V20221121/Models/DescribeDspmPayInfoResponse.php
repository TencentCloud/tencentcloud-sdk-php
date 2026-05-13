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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDspmPayInfo返回参数结构体
 *
 * @method integer getAppID() 获取APPID
 * @method void setAppID(integer $AppID) 设置APPID
 * @method integer getOrderStatus() 获取订单状态 0未购买 1正常，2隔离，3销毁，6试用中，7到期
 * @method void setOrderStatus(integer $OrderStatus) 设置订单状态 0未购买 1正常，2隔离，3销毁，6试用中，7到期
 * @method integer getAssetNum() 获取已购数据库实例数量
 * @method void setAssetNum(integer $AssetNum) 设置已购数据库实例数量
 * @method float getLogStorage() 获取已购审计日志量（TB）
 * @method void setLogStorage(float $LogStorage) 设置已购审计日志量（TB）
 * @method integer getUsedAssetNum() 获取已使用数据库实例数量
 * @method void setUsedAssetNum(integer $UsedAssetNum) 设置已使用数据库实例数量
 * @method float getUsedLogStorage() 获取已使用审计日志量（TB）
 * @method void setUsedLogStorage(float $UsedLogStorage) 设置已使用审计日志量（TB）
 * @method integer getSqlTotal() 获取已购sql存储总量（单位百万）
 * @method void setSqlTotal(integer $SqlTotal) 设置已购sql存储总量（单位百万）
 * @method integer getSqlQps() 获取已购sql qps
 * @method void setSqlQps(integer $SqlQps) 设置已购sql qps
 * @method integer getPayMode() 获取支付模式，0-后付费 1-预付费
 * @method void setPayMode(integer $PayMode) 设置支付模式，0-后付费 1-预付费
 * @method integer getIsSelfBuy() 获取是否单独购买，1-单独购买，2-被其它账号共享
 * @method void setIsSelfBuy(integer $IsSelfBuy) 设置是否单独购买，1-单独购买，2-被其它账号共享
 * @method string getBeginTime() 获取订单开始时间
 * @method void setBeginTime(string $BeginTime) 设置订单开始时间
 * @method string getEndTime() 获取订单到期时间
 * @method void setEndTime(string $EndTime) 设置订单到期时间
 * @method integer getAutoRenew() 获取0-用户未设置,1-用户设置自动续费,2-用户设置不自动续费
 * @method void setAutoRenew(integer $AutoRenew) 设置0-用户未设置,1-用户设置自动续费,2-用户设置不自动续费
 * @method integer getTimeSpan() 获取订单时长
 * @method void setTimeSpan(integer $TimeSpan) 设置订单时长
 * @method string getTimeUnit() 获取时长单位
 * @method void setTimeUnit(string $TimeUnit) 设置时长单位
 * @method string getResourceId() 获取资源id
 * @method void setResourceId(string $ResourceId) 设置资源id
 * @method string getBetaEndTime() 获取公测结束时间
 * @method void setBetaEndTime(string $BetaEndTime) 设置公测结束时间
 * @method string getTimeNow() 获取系统当前时间
 * @method void setTimeNow(string $TimeNow) 设置系统当前时间
 * @method integer getIsShareToOther() 获取是否分享给其它账号，1-是，2-否
 * @method void setIsShareToOther(integer $IsShareToOther) 设置是否分享给其它账号，1-是，2-否
 * @method string getUin() 获取uin
 * @method void setUin(string $Uin) 设置uin
 * @method string getNickName() 获取昵称
 * @method void setNickName(string $NickName) 设置昵称
 * @method array getInquireData() 获取购买信息
 * @method void setInquireData(array $InquireData) 设置购买信息
 * @method string getVersion() 获取版本(专业版：professional 试用版：trial)
 * @method void setVersion(string $Version) 设置版本(专业版：professional 试用版：trial)
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDspmPayInfoResponse extends AbstractModel
{
    /**
     * @var integer APPID
     */
    public $AppID;

    /**
     * @var integer 订单状态 0未购买 1正常，2隔离，3销毁，6试用中，7到期
     */
    public $OrderStatus;

    /**
     * @var integer 已购数据库实例数量
     */
    public $AssetNum;

    /**
     * @var float 已购审计日志量（TB）
     */
    public $LogStorage;

    /**
     * @var integer 已使用数据库实例数量
     */
    public $UsedAssetNum;

    /**
     * @var float 已使用审计日志量（TB）
     */
    public $UsedLogStorage;

    /**
     * @var integer 已购sql存储总量（单位百万）
     */
    public $SqlTotal;

    /**
     * @var integer 已购sql qps
     */
    public $SqlQps;

    /**
     * @var integer 支付模式，0-后付费 1-预付费
     */
    public $PayMode;

    /**
     * @var integer 是否单独购买，1-单独购买，2-被其它账号共享
     */
    public $IsSelfBuy;

    /**
     * @var string 订单开始时间
     */
    public $BeginTime;

    /**
     * @var string 订单到期时间
     */
    public $EndTime;

    /**
     * @var integer 0-用户未设置,1-用户设置自动续费,2-用户设置不自动续费
     */
    public $AutoRenew;

    /**
     * @var integer 订单时长
     */
    public $TimeSpan;

    /**
     * @var string 时长单位
     */
    public $TimeUnit;

    /**
     * @var string 资源id
     */
    public $ResourceId;

    /**
     * @var string 公测结束时间
     */
    public $BetaEndTime;

    /**
     * @var string 系统当前时间
     */
    public $TimeNow;

    /**
     * @var integer 是否分享给其它账号，1-是，2-否
     */
    public $IsShareToOther;

    /**
     * @var string uin
     */
    public $Uin;

    /**
     * @var string 昵称
     */
    public $NickName;

    /**
     * @var array 购买信息
     */
    public $InquireData;

    /**
     * @var string 版本(专业版：professional 试用版：trial)
     */
    public $Version;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AppID APPID
     * @param integer $OrderStatus 订单状态 0未购买 1正常，2隔离，3销毁，6试用中，7到期
     * @param integer $AssetNum 已购数据库实例数量
     * @param float $LogStorage 已购审计日志量（TB）
     * @param integer $UsedAssetNum 已使用数据库实例数量
     * @param float $UsedLogStorage 已使用审计日志量（TB）
     * @param integer $SqlTotal 已购sql存储总量（单位百万）
     * @param integer $SqlQps 已购sql qps
     * @param integer $PayMode 支付模式，0-后付费 1-预付费
     * @param integer $IsSelfBuy 是否单独购买，1-单独购买，2-被其它账号共享
     * @param string $BeginTime 订单开始时间
     * @param string $EndTime 订单到期时间
     * @param integer $AutoRenew 0-用户未设置,1-用户设置自动续费,2-用户设置不自动续费
     * @param integer $TimeSpan 订单时长
     * @param string $TimeUnit 时长单位
     * @param string $ResourceId 资源id
     * @param string $BetaEndTime 公测结束时间
     * @param string $TimeNow 系统当前时间
     * @param integer $IsShareToOther 是否分享给其它账号，1-是，2-否
     * @param string $Uin uin
     * @param string $NickName 昵称
     * @param array $InquireData 购买信息
     * @param string $Version 版本(专业版：professional 试用版：trial)
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("OrderStatus",$param) and $param["OrderStatus"] !== null) {
            $this->OrderStatus = $param["OrderStatus"];
        }

        if (array_key_exists("AssetNum",$param) and $param["AssetNum"] !== null) {
            $this->AssetNum = $param["AssetNum"];
        }

        if (array_key_exists("LogStorage",$param) and $param["LogStorage"] !== null) {
            $this->LogStorage = $param["LogStorage"];
        }

        if (array_key_exists("UsedAssetNum",$param) and $param["UsedAssetNum"] !== null) {
            $this->UsedAssetNum = $param["UsedAssetNum"];
        }

        if (array_key_exists("UsedLogStorage",$param) and $param["UsedLogStorage"] !== null) {
            $this->UsedLogStorage = $param["UsedLogStorage"];
        }

        if (array_key_exists("SqlTotal",$param) and $param["SqlTotal"] !== null) {
            $this->SqlTotal = $param["SqlTotal"];
        }

        if (array_key_exists("SqlQps",$param) and $param["SqlQps"] !== null) {
            $this->SqlQps = $param["SqlQps"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("IsSelfBuy",$param) and $param["IsSelfBuy"] !== null) {
            $this->IsSelfBuy = $param["IsSelfBuy"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("BetaEndTime",$param) and $param["BetaEndTime"] !== null) {
            $this->BetaEndTime = $param["BetaEndTime"];
        }

        if (array_key_exists("TimeNow",$param) and $param["TimeNow"] !== null) {
            $this->TimeNow = $param["TimeNow"];
        }

        if (array_key_exists("IsShareToOther",$param) and $param["IsShareToOther"] !== null) {
            $this->IsShareToOther = $param["IsShareToOther"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("InquireData",$param) and $param["InquireData"] !== null) {
            $this->InquireData = [];
            foreach ($param["InquireData"] as $key => $value){
                $obj = new InquireInfo();
                $obj->deserialize($value);
                array_push($this->InquireData, $obj);
            }
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
