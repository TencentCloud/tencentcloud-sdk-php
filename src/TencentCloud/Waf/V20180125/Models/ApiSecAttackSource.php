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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * api安全攻击源详情
 *
 * @method string getSrcIp() 获取<p>攻击来源ip</p>
 * @method void setSrcIp(string $SrcIp) 设置<p>攻击来源ip</p>
 * @method string getEventLevel() 获取<p>威胁等级</p>
 * @method void setEventLevel(string $EventLevel) 设置<p>威胁等级</p>
 * @method string getBotLabel() 获取<p>BOT标签</p>
 * @method void setBotLabel(string $BotLabel) 设置<p>BOT标签</p>
 * @method integer getTimestamp() 获取<p>变更时间</p>
 * @method void setTimestamp(integer $Timestamp) 设置<p>变更时间</p>
 * @method string getCity() 获取<p>地理位置</p>
 * @method void setCity(string $City) 设置<p>地理位置</p>
 * @method integer getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间</p>
 * @method integer getEventCount() 获取<p>关联事件数量</p>
 * @method void setEventCount(integer $EventCount) 设置<p>关联事件数量</p>
 * @method integer getAttackCount() 获取<p>攻击数量</p>
 * @method void setAttackCount(integer $AttackCount) 设置<p>攻击数量</p>
 * @method string getMissUserName() 获取<p>缺失参数名，当事件类型是缺失参数名，缺失参数名和密码时，返回此字段</p>
 * @method void setMissUserName(string $MissUserName) 设置<p>缺失参数名，当事件类型是缺失参数名，缺失参数名和密码时，返回此字段</p>
 * @method array getAttackDetail() 获取<p>当是水平越权和垂直越权时，返回此字段</p>
 * @method void setAttackDetail(array $AttackDetail) 设置<p>当是水平越权和垂直越权时，返回此字段</p>
 * @method string getMissPassword() 获取<p>缺失密码参数，当事件类型是缺失参数名，缺失参数名和密码时，返回此字段</p>
 * @method void setMissPassword(string $MissPassword) 设置<p>缺失密码参数，当事件类型是缺失参数名，缺失参数名和密码时，返回此字段</p>
 * @method string getEventDescription() 获取<p>事件描述</p>
 * @method void setEventDescription(string $EventDescription) 设置<p>事件描述</p>
 * @method string getEventDescriptionEng() 获取<p>事件描述(英文)</p>
 * @method void setEventDescriptionEng(string $EventDescriptionEng) 设置<p>事件描述(英文)</p>
 * @method ApiEventSample getSample() 获取<p>攻击样本</p>
 * @method void setSample(ApiEventSample $Sample) 设置<p>攻击样本</p>
 */
class ApiSecAttackSource extends AbstractModel
{
    /**
     * @var string <p>攻击来源ip</p>
     */
    public $SrcIp;

    /**
     * @var string <p>威胁等级</p>
     */
    public $EventLevel;

    /**
     * @var string <p>BOT标签</p>
     */
    public $BotLabel;

    /**
     * @var integer <p>变更时间</p>
     */
    public $Timestamp;

    /**
     * @var string <p>地理位置</p>
     */
    public $City;

    /**
     * @var integer <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var integer <p>关联事件数量</p>
     */
    public $EventCount;

    /**
     * @var integer <p>攻击数量</p>
     */
    public $AttackCount;

    /**
     * @var string <p>缺失参数名，当事件类型是缺失参数名，缺失参数名和密码时，返回此字段</p>
     */
    public $MissUserName;

    /**
     * @var array <p>当是水平越权和垂直越权时，返回此字段</p>
     */
    public $AttackDetail;

    /**
     * @var string <p>缺失密码参数，当事件类型是缺失参数名，缺失参数名和密码时，返回此字段</p>
     */
    public $MissPassword;

    /**
     * @var string <p>事件描述</p>
     */
    public $EventDescription;

    /**
     * @var string <p>事件描述(英文)</p>
     */
    public $EventDescriptionEng;

    /**
     * @var ApiEventSample <p>攻击样本</p>
     */
    public $Sample;

    /**
     * @param string $SrcIp <p>攻击来源ip</p>
     * @param string $EventLevel <p>威胁等级</p>
     * @param string $BotLabel <p>BOT标签</p>
     * @param integer $Timestamp <p>变更时间</p>
     * @param string $City <p>地理位置</p>
     * @param integer $StartTime <p>开始时间</p>
     * @param integer $EventCount <p>关联事件数量</p>
     * @param integer $AttackCount <p>攻击数量</p>
     * @param string $MissUserName <p>缺失参数名，当事件类型是缺失参数名，缺失参数名和密码时，返回此字段</p>
     * @param array $AttackDetail <p>当是水平越权和垂直越权时，返回此字段</p>
     * @param string $MissPassword <p>缺失密码参数，当事件类型是缺失参数名，缺失参数名和密码时，返回此字段</p>
     * @param string $EventDescription <p>事件描述</p>
     * @param string $EventDescriptionEng <p>事件描述(英文)</p>
     * @param ApiEventSample $Sample <p>攻击样本</p>
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
        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("EventLevel",$param) and $param["EventLevel"] !== null) {
            $this->EventLevel = $param["EventLevel"];
        }

        if (array_key_exists("BotLabel",$param) and $param["BotLabel"] !== null) {
            $this->BotLabel = $param["BotLabel"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("AttackCount",$param) and $param["AttackCount"] !== null) {
            $this->AttackCount = $param["AttackCount"];
        }

        if (array_key_exists("MissUserName",$param) and $param["MissUserName"] !== null) {
            $this->MissUserName = $param["MissUserName"];
        }

        if (array_key_exists("AttackDetail",$param) and $param["AttackDetail"] !== null) {
            $this->AttackDetail = $param["AttackDetail"];
        }

        if (array_key_exists("MissPassword",$param) and $param["MissPassword"] !== null) {
            $this->MissPassword = $param["MissPassword"];
        }

        if (array_key_exists("EventDescription",$param) and $param["EventDescription"] !== null) {
            $this->EventDescription = $param["EventDescription"];
        }

        if (array_key_exists("EventDescriptionEng",$param) and $param["EventDescriptionEng"] !== null) {
            $this->EventDescriptionEng = $param["EventDescriptionEng"];
        }

        if (array_key_exists("Sample",$param) and $param["Sample"] !== null) {
            $this->Sample = new ApiEventSample();
            $this->Sample->deserialize($param["Sample"]);
        }
    }
}
