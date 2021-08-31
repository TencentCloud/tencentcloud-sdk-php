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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChangeRuleEventsIgnoreStatus请求参数结构体
 *
 * @method integer getIgnoreStatus() 获取忽略状态 0:取消忽略 ； 1:忽略
 * @method void setIgnoreStatus(integer $IgnoreStatus) 设置忽略状态 0:取消忽略 ； 1:忽略
 * @method array getRuleIdList() 获取检测项id数组
 * @method void setRuleIdList(array $RuleIdList) 设置检测项id数组
 * @method array getEventIdList() 获取事件id数组
 * @method void setEventIdList(array $EventIdList) 设置事件id数组
 */
class ChangeRuleEventsIgnoreStatusRequest extends AbstractModel
{
    /**
     * @var integer 忽略状态 0:取消忽略 ； 1:忽略
     */
    public $IgnoreStatus;

    /**
     * @var array 检测项id数组
     */
    public $RuleIdList;

    /**
     * @var array 事件id数组
     */
    public $EventIdList;

    /**
     * @param integer $IgnoreStatus 忽略状态 0:取消忽略 ； 1:忽略
     * @param array $RuleIdList 检测项id数组
     * @param array $EventIdList 事件id数组
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
        if (array_key_exists("IgnoreStatus",$param) and $param["IgnoreStatus"] !== null) {
            $this->IgnoreStatus = $param["IgnoreStatus"];
        }

        if (array_key_exists("RuleIdList",$param) and $param["RuleIdList"] !== null) {
            $this->RuleIdList = $param["RuleIdList"];
        }

        if (array_key_exists("EventIdList",$param) and $param["EventIdList"] !== null) {
            $this->EventIdList = $param["EventIdList"];
        }
    }
}
