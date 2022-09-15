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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAuditConfig请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method integer getLogExpireDay() 获取审计日志保存时长。支持值包括：
7 - 一周
30 - 一个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年；
 * @method void setLogExpireDay(integer $LogExpireDay) 设置审计日志保存时长。支持值包括：
7 - 一周
30 - 一个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年；
 * @method boolean getCloseAudit() 获取是否关闭审计服务。可选值：true - 关闭审计服务；false - 不关闭审计服务。默认值为 false。
当关闭审计服务时，会删除用户的审计日志和文件，并删除该实例的所有审计策略。
CloseAudit、LogExpireDay必须至少提供一个，如果两个都提供则按照CloseAudit优先的逻辑处理。
 * @method void setCloseAudit(boolean $CloseAudit) 设置是否关闭审计服务。可选值：true - 关闭审计服务；false - 不关闭审计服务。默认值为 false。
当关闭审计服务时，会删除用户的审计日志和文件，并删除该实例的所有审计策略。
CloseAudit、LogExpireDay必须至少提供一个，如果两个都提供则按照CloseAudit优先的逻辑处理。
 * @method integer getHighLogExpireDay() 获取高频审计日志保存时长。支持值包括：
7 - 一周
30 - 一个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年；
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) 设置高频审计日志保存时长。支持值包括：
7 - 一周
30 - 一个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年；
 */
class ModifyAuditConfigRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var integer 审计日志保存时长。支持值包括：
7 - 一周
30 - 一个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年；
     */
    public $LogExpireDay;

    /**
     * @var boolean 是否关闭审计服务。可选值：true - 关闭审计服务；false - 不关闭审计服务。默认值为 false。
当关闭审计服务时，会删除用户的审计日志和文件，并删除该实例的所有审计策略。
CloseAudit、LogExpireDay必须至少提供一个，如果两个都提供则按照CloseAudit优先的逻辑处理。
     */
    public $CloseAudit;

    /**
     * @var integer 高频审计日志保存时长。支持值包括：
7 - 一周
30 - 一个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年；
     */
    public $HighLogExpireDay;

    /**
     * @param string $InstanceId 实例 ID。
     * @param integer $LogExpireDay 审计日志保存时长。支持值包括：
7 - 一周
30 - 一个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年；
     * @param boolean $CloseAudit 是否关闭审计服务。可选值：true - 关闭审计服务；false - 不关闭审计服务。默认值为 false。
当关闭审计服务时，会删除用户的审计日志和文件，并删除该实例的所有审计策略。
CloseAudit、LogExpireDay必须至少提供一个，如果两个都提供则按照CloseAudit优先的逻辑处理。
     * @param integer $HighLogExpireDay 高频审计日志保存时长。支持值包括：
7 - 一周
30 - 一个月；
180 - 六个月；
365 - 一年；
1095 - 三年；
1825 - 五年；
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("CloseAudit",$param) and $param["CloseAudit"] !== null) {
            $this->CloseAudit = $param["CloseAudit"];
        }

        if (array_key_exists("HighLogExpireDay",$param) and $param["HighLogExpireDay"] !== null) {
            $this->HighLogExpireDay = $param["HighLogExpireDay"];
        }
    }
}
