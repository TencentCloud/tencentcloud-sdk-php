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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 该结构体用来传入告警的key，以更新告警的status
 *
 * @method string getAppId() 获取需要更改的用户appid
 * @method void setAppId(string $AppId) 设置需要更改的用户appid
 * @method string getType() 获取告警类别
 * @method void setType(string $Type) 设置告警类别
 * @method string getSubType() 获取告警子类别
 * @method void setSubType(string $SubType) 设置告警子类别
 * @method string getSource() 获取告警来源
 * @method void setSource(string $Source) 设置告警来源
 * @method string getName() 获取告警名称
 * @method void setName(string $Name) 设置告警名称
 * @method string getKey() 获取告警key
 * @method void setKey(string $Key) 设置告警key
 * @method string getDate() 获取时间
 * @method void setDate(string $Date) 设置时间
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 */
class NewAlertKey extends AbstractModel
{
    /**
     * @var string 需要更改的用户appid
     */
    public $AppId;

    /**
     * @var string 告警类别
     */
    public $Type;

    /**
     * @var string 告警子类别
     */
    public $SubType;

    /**
     * @var string 告警来源
     */
    public $Source;

    /**
     * @var string 告警名称
     */
    public $Name;

    /**
     * @var string 告警key
     */
    public $Key;

    /**
     * @var string 时间
     */
    public $Date;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @param string $AppId 需要更改的用户appid
     * @param string $Type 告警类别
     * @param string $SubType 告警子类别
     * @param string $Source 告警来源
     * @param string $Name 告警名称
     * @param string $Key 告警key
     * @param string $Date 时间
     * @param integer $Status 状态
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
