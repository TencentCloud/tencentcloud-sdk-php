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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecLogAlertMsg请求参数结构体
 *
 * @method array getType() 获取告警类型
日志储量告警: log_reserve_full
日志存储时间告警: log_save_day_limit
kafka实例/公网域名不可用: kafka_instance_domain_unavailable
kafka 用户名密码错误: kafka_user_passwd_wrong
kafka后台报错字段: kafka_field_wrong
 * @method void setType(array $Type) 设置告警类型
日志储量告警: log_reserve_full
日志存储时间告警: log_save_day_limit
kafka实例/公网域名不可用: kafka_instance_domain_unavailable
kafka 用户名密码错误: kafka_user_passwd_wrong
kafka后台报错字段: kafka_field_wrong
 */
class DescribeSecLogAlertMsgRequest extends AbstractModel
{
    /**
     * @var array 告警类型
日志储量告警: log_reserve_full
日志存储时间告警: log_save_day_limit
kafka实例/公网域名不可用: kafka_instance_domain_unavailable
kafka 用户名密码错误: kafka_user_passwd_wrong
kafka后台报错字段: kafka_field_wrong
     */
    public $Type;

    /**
     * @param array $Type 告警类型
日志储量告警: log_reserve_full
日志存储时间告警: log_save_day_limit
kafka实例/公网域名不可用: kafka_instance_domain_unavailable
kafka 用户名密码错误: kafka_user_passwd_wrong
kafka后台报错字段: kafka_field_wrong
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
