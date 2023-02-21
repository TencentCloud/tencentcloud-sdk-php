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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DataSaEventPub
 *
 * @method string getTime() 获取时间
 * @method void setTime(string $Time) 设置时间
 * @method integer getEventType1() 获取安全事件1级分类
 * @method void setEventType1(integer $EventType1) 设置安全事件1级分类
 * @method integer getEventType2() 获取安全事件2级分类
 * @method void setEventType2(integer $EventType2) 设置安全事件2级分类
 * @method string getEventName() 获取安全事件名称
 * @method void setEventName(string $EventName) 设置安全事件名称
 * @method integer getLevel() 获取风险等级
 * @method void setLevel(integer $Level) 设置风险等级
 * @method integer getStatus() 获取安全事件状态
 * @method void setStatus(integer $Status) 设置安全事件状态
 * @method string getSrcIp() 获取攻击源ip
 * @method void setSrcIp(string $SrcIp) 设置攻击源ip
 * @method string getDstIp() 获取攻击目标ip
 * @method void setDstIp(string $DstIp) 设置攻击目标ip
 * @method integer getDstPort() 获取攻击目标端口
 * @method void setDstPort(integer $DstPort) 设置攻击目标端口
 * @method string getAsset() 获取受影响资产
 * @method void setAsset(string $Asset) 设置受影响资产
 * @method string getOldIdMd5() 获取私有字段和公有字段映射的原始采集数据唯一标识的MD5值
 * @method void setOldIdMd5(string $OldIdMd5) 设置私有字段和公有字段映射的原始采集数据唯一标识的MD5值
 */
class ListDataSaEventPub extends AbstractModel
{
    /**
     * @var string 时间
     */
    public $Time;

    /**
     * @var integer 安全事件1级分类
     */
    public $EventType1;

    /**
     * @var integer 安全事件2级分类
     */
    public $EventType2;

    /**
     * @var string 安全事件名称
     */
    public $EventName;

    /**
     * @var integer 风险等级
     */
    public $Level;

    /**
     * @var integer 安全事件状态
     */
    public $Status;

    /**
     * @var string 攻击源ip
     */
    public $SrcIp;

    /**
     * @var string 攻击目标ip
     */
    public $DstIp;

    /**
     * @var integer 攻击目标端口
     */
    public $DstPort;

    /**
     * @var string 受影响资产
     */
    public $Asset;

    /**
     * @var string 私有字段和公有字段映射的原始采集数据唯一标识的MD5值
     */
    public $OldIdMd5;

    /**
     * @param string $Time 时间
     * @param integer $EventType1 安全事件1级分类
     * @param integer $EventType2 安全事件2级分类
     * @param string $EventName 安全事件名称
     * @param integer $Level 风险等级
     * @param integer $Status 安全事件状态
     * @param string $SrcIp 攻击源ip
     * @param string $DstIp 攻击目标ip
     * @param integer $DstPort 攻击目标端口
     * @param string $Asset 受影响资产
     * @param string $OldIdMd5 私有字段和公有字段映射的原始采集数据唯一标识的MD5值
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("EventType1",$param) and $param["EventType1"] !== null) {
            $this->EventType1 = $param["EventType1"];
        }

        if (array_key_exists("EventType2",$param) and $param["EventType2"] !== null) {
            $this->EventType2 = $param["EventType2"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = $param["Asset"];
        }

        if (array_key_exists("OldIdMd5",$param) and $param["OldIdMd5"] !== null) {
            $this->OldIdMd5 = $param["OldIdMd5"];
        }
    }
}
