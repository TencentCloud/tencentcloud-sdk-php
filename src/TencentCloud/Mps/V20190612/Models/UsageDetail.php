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
 * 广告配置及广告类型维度下的SSAI用量详情
 *
 * @method string getUniqId() 获取<p>广告配置uniq_id</p>
 * @method void setUniqId(string $UniqId) 设置<p>广告配置uniq_id</p>
 * @method string getChannelId() 获取<p>广告配置id</p>
 * @method void setChannelId(string $ChannelId) 设置<p>广告配置id</p>
 * @method string getChannelName() 获取<p>广告配置名称</p>
 * @method void setChannelName(string $ChannelName) 设置<p>广告配置名称</p>
 * @method string getAdType() 获取<p>广告类型</p>
 * @method void setAdType(string $AdType) 设置<p>广告类型</p>
 * @method integer getAdRequestSuccess() 获取<p>广告请求成功数</p>
 * @method void setAdRequestSuccess(integer $AdRequestSuccess) 设置<p>广告请求成功数</p>
 * @method integer getAdRequestFail() 获取<p>广告请求失败数</p>
 * @method void setAdRequestFail(integer $AdRequestFail) 设置<p>广告请求失败数</p>
 * @method integer getImpression() 获取<p>广告曝光数</p>
 * @method void setImpression(integer $Impression) 设置<p>广告曝光数</p>
 * @method integer getStart() 获取<p>广告开始播放数</p>
 * @method void setStart(integer $Start) 设置<p>广告开始播放数</p>
 * @method integer getFirstQuarter() 获取<p>广告播放到1/4处数</p>
 * @method void setFirstQuarter(integer $FirstQuarter) 设置<p>广告播放到1/4处数</p>
 * @method integer getMidpoint() 获取<p>广告播放到1/2处数</p>
 * @method void setMidpoint(integer $Midpoint) 设置<p>广告播放到1/2处数</p>
 * @method integer getThirdQuarter() 获取<p>广告播放到3/4处数</p>
 * @method void setThirdQuarter(integer $ThirdQuarter) 设置<p>广告播放到3/4处数</p>
 * @method integer getComplete() 获取<p>广告播放完成数</p>
 * @method void setComplete(integer $Complete) 设置<p>广告播放完成数</p>
 * @method float getAdMarkerTime() 获取<p>中贴广告标记时间</p>
 * @method void setAdMarkerTime(float $AdMarkerTime) 设置<p>中贴广告标记时间</p>
 * @method float getReplacedTime() 获取<p>中贴个性化替换时间</p>
 * @method void setReplacedTime(float $ReplacedTime) 设置<p>中贴个性化替换时间</p>
 * @method float getMidFillRate() 获取<p>中贴个性化广告填充率</p>
 * @method void setMidFillRate(float $MidFillRate) 设置<p>中贴个性化广告填充率</p>
 * @method integer getPreReqNum() 获取<p>前贴广告请求数</p>
 * @method void setPreReqNum(integer $PreReqNum) 设置<p>前贴广告请求数</p>
 * @method integer getPreReplacedNum() 获取<p>前贴广告替换数</p>
 * @method void setPreReplacedNum(integer $PreReplacedNum) 设置<p>前贴广告替换数</p>
 * @method float getPreReplaceRate() 获取<p>前贴广告替换率</p>
 * @method void setPreReplaceRate(float $PreReplaceRate) 设置<p>前贴广告替换率</p>
 * @method integer getADMarkerFound() 获取<p>在清单中发现了广告标记次数</p>
 * @method void setADMarkerFound(integer $ADMarkerFound) 设置<p>在清单中发现了广告标记次数</p>
 * @method integer getMakeAdsRequest() 获取<p>向ADS请求广告次数</p>
 * @method void setMakeAdsRequest(integer $MakeAdsRequest) 设置<p>向ADS请求广告次数</p>
 * @method integer getVASTResponse() 获取<p>从ADS收到VAST返回次数</p>
 * @method void setVASTResponse(integer $VASTResponse) 设置<p>从ADS收到VAST返回次数</p>
 * @method integer getFilledAvail() 获取<p>成功填充了广告次数</p>
 * @method void setFilledAvail(integer $FilledAvail) 设置<p>成功填充了广告次数</p>
 * @method integer getWarningNoAd() 获取<p>执行广告替换时遇到问题次数</p>
 * @method void setWarningNoAd(integer $WarningNoAd) 设置<p>执行广告替换时遇到问题次数</p>
 * @method integer getErrorAdsTimeout() 获取<p>ADS返回超时次数</p>
 * @method void setErrorAdsTimeout(integer $ErrorAdsTimeout) 设置<p>ADS返回超时次数</p>
 * @method integer getEmptyVASTResponse() 获取<p>ADS 返回了一个空的 VAST 响应次数</p>
 * @method void setEmptyVASTResponse(integer $EmptyVASTResponse) 设置<p>ADS 返回了一个空的 VAST 响应次数</p>
 * @method integer getEmptyVMAPResponse() 获取<p>ADS 返回了一个空的VMAP 响应次数</p>
 * @method void setEmptyVMAPResponse(integer $EmptyVMAPResponse) 设置<p>ADS 返回了一个空的VMAP 响应次数</p>
 * @method string getDate() 获取<p>日期</p>
 * @method void setDate(string $Date) 设置<p>日期</p>
 * @method string getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
 * @method string getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
 */
class UsageDetail extends AbstractModel
{
    /**
     * @var string <p>广告配置uniq_id</p>
     */
    public $UniqId;

    /**
     * @var string <p>广告配置id</p>
     */
    public $ChannelId;

    /**
     * @var string <p>广告配置名称</p>
     */
    public $ChannelName;

    /**
     * @var string <p>广告类型</p>
     */
    public $AdType;

    /**
     * @var integer <p>广告请求成功数</p>
     */
    public $AdRequestSuccess;

    /**
     * @var integer <p>广告请求失败数</p>
     */
    public $AdRequestFail;

    /**
     * @var integer <p>广告曝光数</p>
     */
    public $Impression;

    /**
     * @var integer <p>广告开始播放数</p>
     */
    public $Start;

    /**
     * @var integer <p>广告播放到1/4处数</p>
     */
    public $FirstQuarter;

    /**
     * @var integer <p>广告播放到1/2处数</p>
     */
    public $Midpoint;

    /**
     * @var integer <p>广告播放到3/4处数</p>
     */
    public $ThirdQuarter;

    /**
     * @var integer <p>广告播放完成数</p>
     */
    public $Complete;

    /**
     * @var float <p>中贴广告标记时间</p>
     */
    public $AdMarkerTime;

    /**
     * @var float <p>中贴个性化替换时间</p>
     */
    public $ReplacedTime;

    /**
     * @var float <p>中贴个性化广告填充率</p>
     */
    public $MidFillRate;

    /**
     * @var integer <p>前贴广告请求数</p>
     */
    public $PreReqNum;

    /**
     * @var integer <p>前贴广告替换数</p>
     */
    public $PreReplacedNum;

    /**
     * @var float <p>前贴广告替换率</p>
     */
    public $PreReplaceRate;

    /**
     * @var integer <p>在清单中发现了广告标记次数</p>
     */
    public $ADMarkerFound;

    /**
     * @var integer <p>向ADS请求广告次数</p>
     */
    public $MakeAdsRequest;

    /**
     * @var integer <p>从ADS收到VAST返回次数</p>
     */
    public $VASTResponse;

    /**
     * @var integer <p>成功填充了广告次数</p>
     */
    public $FilledAvail;

    /**
     * @var integer <p>执行广告替换时遇到问题次数</p>
     */
    public $WarningNoAd;

    /**
     * @var integer <p>ADS返回超时次数</p>
     */
    public $ErrorAdsTimeout;

    /**
     * @var integer <p>ADS 返回了一个空的 VAST 响应次数</p>
     */
    public $EmptyVASTResponse;

    /**
     * @var integer <p>ADS 返回了一个空的VMAP 响应次数</p>
     */
    public $EmptyVMAPResponse;

    /**
     * @var string <p>日期</p>
     */
    public $Date;

    /**
     * @var string <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @param string $UniqId <p>广告配置uniq_id</p>
     * @param string $ChannelId <p>广告配置id</p>
     * @param string $ChannelName <p>广告配置名称</p>
     * @param string $AdType <p>广告类型</p>
     * @param integer $AdRequestSuccess <p>广告请求成功数</p>
     * @param integer $AdRequestFail <p>广告请求失败数</p>
     * @param integer $Impression <p>广告曝光数</p>
     * @param integer $Start <p>广告开始播放数</p>
     * @param integer $FirstQuarter <p>广告播放到1/4处数</p>
     * @param integer $Midpoint <p>广告播放到1/2处数</p>
     * @param integer $ThirdQuarter <p>广告播放到3/4处数</p>
     * @param integer $Complete <p>广告播放完成数</p>
     * @param float $AdMarkerTime <p>中贴广告标记时间</p>
     * @param float $ReplacedTime <p>中贴个性化替换时间</p>
     * @param float $MidFillRate <p>中贴个性化广告填充率</p>
     * @param integer $PreReqNum <p>前贴广告请求数</p>
     * @param integer $PreReplacedNum <p>前贴广告替换数</p>
     * @param float $PreReplaceRate <p>前贴广告替换率</p>
     * @param integer $ADMarkerFound <p>在清单中发现了广告标记次数</p>
     * @param integer $MakeAdsRequest <p>向ADS请求广告次数</p>
     * @param integer $VASTResponse <p>从ADS收到VAST返回次数</p>
     * @param integer $FilledAvail <p>成功填充了广告次数</p>
     * @param integer $WarningNoAd <p>执行广告替换时遇到问题次数</p>
     * @param integer $ErrorAdsTimeout <p>ADS返回超时次数</p>
     * @param integer $EmptyVASTResponse <p>ADS 返回了一个空的 VAST 响应次数</p>
     * @param integer $EmptyVMAPResponse <p>ADS 返回了一个空的VMAP 响应次数</p>
     * @param string $Date <p>日期</p>
     * @param string $StartTime <p>开始时间</p>
     * @param string $EndTime <p>结束时间</p>
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
        if (array_key_exists("UniqId",$param) and $param["UniqId"] !== null) {
            $this->UniqId = $param["UniqId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("AdType",$param) and $param["AdType"] !== null) {
            $this->AdType = $param["AdType"];
        }

        if (array_key_exists("AdRequestSuccess",$param) and $param["AdRequestSuccess"] !== null) {
            $this->AdRequestSuccess = $param["AdRequestSuccess"];
        }

        if (array_key_exists("AdRequestFail",$param) and $param["AdRequestFail"] !== null) {
            $this->AdRequestFail = $param["AdRequestFail"];
        }

        if (array_key_exists("Impression",$param) and $param["Impression"] !== null) {
            $this->Impression = $param["Impression"];
        }

        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("FirstQuarter",$param) and $param["FirstQuarter"] !== null) {
            $this->FirstQuarter = $param["FirstQuarter"];
        }

        if (array_key_exists("Midpoint",$param) and $param["Midpoint"] !== null) {
            $this->Midpoint = $param["Midpoint"];
        }

        if (array_key_exists("ThirdQuarter",$param) and $param["ThirdQuarter"] !== null) {
            $this->ThirdQuarter = $param["ThirdQuarter"];
        }

        if (array_key_exists("Complete",$param) and $param["Complete"] !== null) {
            $this->Complete = $param["Complete"];
        }

        if (array_key_exists("AdMarkerTime",$param) and $param["AdMarkerTime"] !== null) {
            $this->AdMarkerTime = $param["AdMarkerTime"];
        }

        if (array_key_exists("ReplacedTime",$param) and $param["ReplacedTime"] !== null) {
            $this->ReplacedTime = $param["ReplacedTime"];
        }

        if (array_key_exists("MidFillRate",$param) and $param["MidFillRate"] !== null) {
            $this->MidFillRate = $param["MidFillRate"];
        }

        if (array_key_exists("PreReqNum",$param) and $param["PreReqNum"] !== null) {
            $this->PreReqNum = $param["PreReqNum"];
        }

        if (array_key_exists("PreReplacedNum",$param) and $param["PreReplacedNum"] !== null) {
            $this->PreReplacedNum = $param["PreReplacedNum"];
        }

        if (array_key_exists("PreReplaceRate",$param) and $param["PreReplaceRate"] !== null) {
            $this->PreReplaceRate = $param["PreReplaceRate"];
        }

        if (array_key_exists("ADMarkerFound",$param) and $param["ADMarkerFound"] !== null) {
            $this->ADMarkerFound = $param["ADMarkerFound"];
        }

        if (array_key_exists("MakeAdsRequest",$param) and $param["MakeAdsRequest"] !== null) {
            $this->MakeAdsRequest = $param["MakeAdsRequest"];
        }

        if (array_key_exists("VASTResponse",$param) and $param["VASTResponse"] !== null) {
            $this->VASTResponse = $param["VASTResponse"];
        }

        if (array_key_exists("FilledAvail",$param) and $param["FilledAvail"] !== null) {
            $this->FilledAvail = $param["FilledAvail"];
        }

        if (array_key_exists("WarningNoAd",$param) and $param["WarningNoAd"] !== null) {
            $this->WarningNoAd = $param["WarningNoAd"];
        }

        if (array_key_exists("ErrorAdsTimeout",$param) and $param["ErrorAdsTimeout"] !== null) {
            $this->ErrorAdsTimeout = $param["ErrorAdsTimeout"];
        }

        if (array_key_exists("EmptyVASTResponse",$param) and $param["EmptyVASTResponse"] !== null) {
            $this->EmptyVASTResponse = $param["EmptyVASTResponse"];
        }

        if (array_key_exists("EmptyVMAPResponse",$param) and $param["EmptyVMAPResponse"] !== null) {
            $this->EmptyVMAPResponse = $param["EmptyVMAPResponse"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
