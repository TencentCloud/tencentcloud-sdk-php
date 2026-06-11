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
 * @method string getSrcIp() 获取攻击来源ip
 * @method void setSrcIp(string $SrcIp) 设置攻击来源ip
 * @method string getEventLevel() 获取威胁等级
 * @method void setEventLevel(string $EventLevel) 设置威胁等级
 * @method string getBotLabel() 获取BOT标签
 * @method void setBotLabel(string $BotLabel) 设置BOT标签
 * @method integer getTimestamp() 获取变更时间
 * @method void setTimestamp(integer $Timestamp) 设置变更时间
 * @method string getCity() 获取地理位置
 * @method void setCity(string $City) 设置地理位置
 * @method integer getStartTime() 获取开始时间
 * @method void setStartTime(integer $StartTime) 设置开始时间
 * @method integer getEventCount() 获取关联事件数量
 * @method void setEventCount(integer $EventCount) 设置关联事件数量
 * @method integer getAttackCount() 获取攻击数量
 * @method void setAttackCount(integer $AttackCount) 设置攻击数量
 * @method string getMissUserName() 获取缺失参数名，当事件类型是缺失参数名，缺失参数名和密码时，返回此字段
 * @method void setMissUserName(string $MissUserName) 设置缺失参数名，当事件类型是缺失参数名，缺失参数名和密码时，返回此字段
 * @method array getAttackDetail() 获取当是水平越权和垂直越权时，返回此字段
 * @method void setAttackDetail(array $AttackDetail) 设置当是水平越权和垂直越权时，返回此字段
 * @method string getMissPassword() 获取缺失密码参数，当事件类型是缺失参数名，缺失参数名和密码时，返回此字段
 * @method void setMissPassword(string $MissPassword) 设置缺失密码参数，当事件类型是缺失参数名，缺失参数名和密码时，返回此字段
 */
class ApiSecAttackSource extends AbstractModel
{
    /**
     * @var string 攻击来源ip
     */
    public $SrcIp;

    /**
     * @var string 威胁等级
     */
    public $EventLevel;

    /**
     * @var string BOT标签
     */
    public $BotLabel;

    /**
     * @var integer 变更时间
     */
    public $Timestamp;

    /**
     * @var string 地理位置
     */
    public $City;

    /**
     * @var integer 开始时间
     */
    public $StartTime;

    /**
     * @var integer 关联事件数量
     */
    public $EventCount;

    /**
     * @var integer 攻击数量
     */
    public $AttackCount;

    /**
     * @var string 缺失参数名，当事件类型是缺失参数名，缺失参数名和密码时，返回此字段
     */
    public $MissUserName;

    /**
     * @var array 当是水平越权和垂直越权时，返回此字段
     */
    public $AttackDetail;

    /**
     * @var string 缺失密码参数，当事件类型是缺失参数名，缺失参数名和密码时，返回此字段
     */
    public $MissPassword;

    /**
     * @param string $SrcIp 攻击来源ip
     * @param string $EventLevel 威胁等级
     * @param string $BotLabel BOT标签
     * @param integer $Timestamp 变更时间
     * @param string $City 地理位置
     * @param integer $StartTime 开始时间
     * @param integer $EventCount 关联事件数量
     * @param integer $AttackCount 攻击数量
     * @param string $MissUserName 缺失参数名，当事件类型是缺失参数名，缺失参数名和密码时，返回此字段
     * @param array $AttackDetail 当是水平越权和垂直越权时，返回此字段
     * @param string $MissPassword 缺失密码参数，当事件类型是缺失参数名，缺失参数名和密码时，返回此字段
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
    }
}
