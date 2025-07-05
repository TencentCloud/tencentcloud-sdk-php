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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警状态返回结构体
 *
 * @method string getStatusID() 获取告警状态ID
 * @method void setStatusID(string $StatusID) 设置告警状态ID
 * @method string getStatusName() 获取告警状态名称
 * @method void setStatusName(string $StatusName) 设置告警状态名称
 * @method string getStatusType() 获取告警状态类型
 * @method void setStatusType(string $StatusType) 设置告警状态类型
 */
class AlarmStatusData extends AbstractModel
{
    /**
     * @var string 告警状态ID
     */
    public $StatusID;

    /**
     * @var string 告警状态名称
     */
    public $StatusName;

    /**
     * @var string 告警状态类型
     */
    public $StatusType;

    /**
     * @param string $StatusID 告警状态ID
     * @param string $StatusName 告警状态名称
     * @param string $StatusType 告警状态类型
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
        if (array_key_exists("StatusID",$param) and $param["StatusID"] !== null) {
            $this->StatusID = $param["StatusID"];
        }

        if (array_key_exists("StatusName",$param) and $param["StatusName"] !== null) {
            $this->StatusName = $param["StatusName"];
        }

        if (array_key_exists("StatusType",$param) and $param["StatusType"] !== null) {
            $this->StatusType = $param["StatusType"];
        }
    }
}
