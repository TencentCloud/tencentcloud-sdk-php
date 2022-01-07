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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateTarget请求参数结构体
 *
 * @method string getEventBusId() 获取事件集ID
 * @method void setEventBusId(string $EventBusId) 设置事件集ID
 * @method string getRuleId() 获取事件规则ID
 * @method void setRuleId(string $RuleId) 设置事件规则ID
 * @method string getTargetId() 获取事件目标ID
 * @method void setTargetId(string $TargetId) 设置事件目标ID
 * @method boolean getEnableBatchDelivery() 获取开启批量投递使能
 * @method void setEnableBatchDelivery(boolean $EnableBatchDelivery) 设置开启批量投递使能
 * @method integer getBatchTimeout() 获取批量投递最长等待时间
 * @method void setBatchTimeout(integer $BatchTimeout) 设置批量投递最长等待时间
 * @method integer getBatchEventCount() 获取批量投递最大事件条数
 * @method void setBatchEventCount(integer $BatchEventCount) 设置批量投递最大事件条数
 */
class UpdateTargetRequest extends AbstractModel
{
    /**
     * @var string 事件集ID
     */
    public $EventBusId;

    /**
     * @var string 事件规则ID
     */
    public $RuleId;

    /**
     * @var string 事件目标ID
     */
    public $TargetId;

    /**
     * @var boolean 开启批量投递使能
     */
    public $EnableBatchDelivery;

    /**
     * @var integer 批量投递最长等待时间
     */
    public $BatchTimeout;

    /**
     * @var integer 批量投递最大事件条数
     */
    public $BatchEventCount;

    /**
     * @param string $EventBusId 事件集ID
     * @param string $RuleId 事件规则ID
     * @param string $TargetId 事件目标ID
     * @param boolean $EnableBatchDelivery 开启批量投递使能
     * @param integer $BatchTimeout 批量投递最长等待时间
     * @param integer $BatchEventCount 批量投递最大事件条数
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
        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("EnableBatchDelivery",$param) and $param["EnableBatchDelivery"] !== null) {
            $this->EnableBatchDelivery = $param["EnableBatchDelivery"];
        }

        if (array_key_exists("BatchTimeout",$param) and $param["BatchTimeout"] !== null) {
            $this->BatchTimeout = $param["BatchTimeout"];
        }

        if (array_key_exists("BatchEventCount",$param) and $param["BatchEventCount"] !== null) {
            $this->BatchEventCount = $param["BatchEventCount"];
        }
    }
}
