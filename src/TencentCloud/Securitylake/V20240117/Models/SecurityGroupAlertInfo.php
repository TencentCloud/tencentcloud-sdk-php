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
namespace TencentCloud\Securitylake\V20240117\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 被归并的原始告警信息
 *
 * @method string getAlarmUuid() 获取告警Uuid
 * @method void setAlarmUuid(string $AlarmUuid) 设置告警Uuid
 * @method string getTimestamp() 获取告警生成时间
 * @method void setTimestamp(string $Timestamp) 设置告警生成时间
 */
class SecurityGroupAlertInfo extends AbstractModel
{
    /**
     * @var string 告警Uuid
     */
    public $AlarmUuid;

    /**
     * @var string 告警生成时间
     */
    public $Timestamp;

    /**
     * @param string $AlarmUuid 告警Uuid
     * @param string $Timestamp 告警生成时间
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
        if (array_key_exists("AlarmUuid",$param) and $param["AlarmUuid"] !== null) {
            $this->AlarmUuid = $param["AlarmUuid"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }
    }
}
