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
 * SaEventPub请求参数结构体
 *
 * @method string getAsset() 获取受影响资产
 * @method void setAsset(string $Asset) 设置受影响资产
 * @method string getEventName() 获取安全事件名称
 * @method void setEventName(string $EventName) 设置安全事件名称
 * @method integer getEventType1() 获取安全事件1级分类，-1:未知 0:全部 1:攻击事件 2:侦查事件 3:僵木蠕毒 4:违规策略
 * @method void setEventType1(integer $EventType1) 设置安全事件1级分类，-1:未知 0:全部 1:攻击事件 2:侦查事件 3:僵木蠕毒 4:违规策略
 * @method integer getEventType2() 获取安全事件2级分类，-1:未知 0:全部 1:DDOS事件 2:Web攻击 3:木马 4:异地登录 5:密码破解
 * @method void setEventType2(integer $EventType2) 设置安全事件2级分类，-1:未知 0:全部 1:DDOS事件 2:Web攻击 3:木马 4:异地登录 5:密码破解
 * @method string getLevel() 获取风险等级，-1:未知 0:全部 1:低危 2:中危 3:高危 4:严重，可多选，如：1,2
 * @method void setLevel(string $Level) 设置风险等级，-1:未知 0:全部 1:低危 2:中危 3:高危 4:严重，可多选，如：1,2
 * @method integer getStatus() 获取安全事件状态，-1:未知 0:全部 1:待处理 2:已处理 3:误报 4:已忽略 5:已知晓 6:已信任
 * @method void setStatus(integer $Status) 设置安全事件状态，-1:未知 0:全部 1:待处理 2:已处理 3:误报 4:已忽略 5:已知晓 6:已信任
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method integer getOffset() 获取查询起始地址
 * @method void setOffset(integer $Offset) 设置查询起始地址
 * @method integer getLimit() 获取查询个数
 * @method void setLimit(integer $Limit) 设置查询个数
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getOldIdMd5() 获取私有字段和公有字段映射的原始采集数据唯一标识的MD5值
 * @method void setOldIdMd5(string $OldIdMd5) 设置私有字段和公有字段映射的原始采集数据唯一标识的MD5值
 */
class SaEventPubRequest extends AbstractModel
{
    /**
     * @var string 受影响资产
     */
    public $Asset;

    /**
     * @var string 安全事件名称
     */
    public $EventName;

    /**
     * @var integer 安全事件1级分类，-1:未知 0:全部 1:攻击事件 2:侦查事件 3:僵木蠕毒 4:违规策略
     */
    public $EventType1;

    /**
     * @var integer 安全事件2级分类，-1:未知 0:全部 1:DDOS事件 2:Web攻击 3:木马 4:异地登录 5:密码破解
     */
    public $EventType2;

    /**
     * @var string 风险等级，-1:未知 0:全部 1:低危 2:中危 3:高危 4:严重，可多选，如：1,2
     */
    public $Level;

    /**
     * @var integer 安全事件状态，-1:未知 0:全部 1:待处理 2:已处理 3:误报 4:已忽略 5:已知晓 6:已信任
     */
    public $Status;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var integer 查询起始地址
     */
    public $Offset;

    /**
     * @var integer 查询个数
     */
    public $Limit;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 私有字段和公有字段映射的原始采集数据唯一标识的MD5值
     */
    public $OldIdMd5;

    /**
     * @param string $Asset 受影响资产
     * @param string $EventName 安全事件名称
     * @param integer $EventType1 安全事件1级分类，-1:未知 0:全部 1:攻击事件 2:侦查事件 3:僵木蠕毒 4:违规策略
     * @param integer $EventType2 安全事件2级分类，-1:未知 0:全部 1:DDOS事件 2:Web攻击 3:木马 4:异地登录 5:密码破解
     * @param string $Level 风险等级，-1:未知 0:全部 1:低危 2:中危 3:高危 4:严重，可多选，如：1,2
     * @param integer $Status 安全事件状态，-1:未知 0:全部 1:待处理 2:已处理 3:误报 4:已忽略 5:已知晓 6:已信任
     * @param string $StartTime 开始时间
     * @param integer $Offset 查询起始地址
     * @param integer $Limit 查询个数
     * @param string $EndTime 结束时间
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
        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = $param["Asset"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventType1",$param) and $param["EventType1"] !== null) {
            $this->EventType1 = $param["EventType1"];
        }

        if (array_key_exists("EventType2",$param) and $param["EventType2"] !== null) {
            $this->EventType2 = $param["EventType2"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("OldIdMd5",$param) and $param["OldIdMd5"] !== null) {
            $this->OldIdMd5 = $param["OldIdMd5"];
        }
    }
}
