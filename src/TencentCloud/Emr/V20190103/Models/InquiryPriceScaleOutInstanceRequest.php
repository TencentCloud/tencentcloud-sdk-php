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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTimeUnit() 获取时间单位。s:按量用例单位。m:包年包月用例单位
 * @method void setTimeUnit(string $TimeUnit) 设置时间单位。s:按量用例单位。m:包年包月用例单位
 * @method integer getTimeSpan() 获取时间长度。按量用例长度为3600。
 * @method void setTimeSpan(integer $TimeSpan) 设置时间长度。按量用例长度为3600。
 * @method integer getZoneId() 获取Zone ID
 * @method void setZoneId(integer $ZoneId) 设置Zone ID
 * @method integer getPayMode() 获取计费类型
 * @method void setPayMode(integer $PayMode) 设置计费类型
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getCoreCount() 获取扩容Core节点个数
 * @method void setCoreCount(integer $CoreCount) 设置扩容Core节点个数
 * @method integer getTaskCount() 获取扩容Task节点个数
 * @method void setTaskCount(integer $TaskCount) 设置扩容Task节点个数
 * @method string getCurrency() 获取货币种类
 * @method void setCurrency(string $Currency) 设置货币种类
 */

/**
 *InquiryPriceScaleOutInstance请求参数结构体
 */
class InquiryPriceScaleOutInstanceRequest extends AbstractModel
{
    /**
     * @var string 时间单位。s:按量用例单位。m:包年包月用例单位
     */
    public $TimeUnit;

    /**
     * @var integer 时间长度。按量用例长度为3600。
     */
    public $TimeSpan;

    /**
     * @var integer Zone ID
     */
    public $ZoneId;

    /**
     * @var integer 计费类型
     */
    public $PayMode;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 扩容Core节点个数
     */
    public $CoreCount;

    /**
     * @var integer 扩容Task节点个数
     */
    public $TaskCount;

    /**
     * @var string 货币种类
     */
    public $Currency;
    /**
     * @param string $TimeUnit 时间单位。s:按量用例单位。m:包年包月用例单位
     * @param integer $TimeSpan 时间长度。按量用例长度为3600。
     * @param integer $ZoneId Zone ID
     * @param integer $PayMode 计费类型
     * @param string $InstanceId 实例ID
     * @param integer $CoreCount 扩容Core节点个数
     * @param integer $TaskCount 扩容Task节点个数
     * @param string $Currency 货币种类
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CoreCount",$param) and $param["CoreCount"] !== null) {
            $this->CoreCount = $param["CoreCount"];
        }

        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }
    }
}
