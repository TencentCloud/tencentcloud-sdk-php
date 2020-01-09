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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getGroupId() 获取告警接受组Id
 * @method void setGroupId(integer $GroupId) 设置告警接受组Id
 * @method string getGroupName() 获取告警接受组名称
 * @method void setGroupName(string $GroupName) 设置告警接受组名称
 * @method integer getChannel() 获取告警接受通道数(一个邮件或短信接收人为一个通道)
 * @method void setChannel(integer $Channel) 设置告警接受通道数(一个邮件或短信接收人为一个通道)
 * @method string getRemarks() 获取备注信息
 * @method void setRemarks(string $Remarks) 设置备注信息
 * @method string getCreateTime() 获取接受组创建时间
 * @method void setCreateTime(string $CreateTime) 设置接受组创建时间
 */

/**
 *告警接受组信息
 */
class AlarmGroupInfo extends AbstractModel
{
    /**
     * @var integer 告警接受组Id
     */
    public $GroupId;

    /**
     * @var string 告警接受组名称
     */
    public $GroupName;

    /**
     * @var integer 告警接受通道数(一个邮件或短信接收人为一个通道)
     */
    public $Channel;

    /**
     * @var string 备注信息
     */
    public $Remarks;

    /**
     * @var string 接受组创建时间
     */
    public $CreateTime;
    /**
     * @param integer $GroupId 告警接受组Id
     * @param string $GroupName 告警接受组名称
     * @param integer $Channel 告警接受通道数(一个邮件或短信接收人为一个通道)
     * @param string $Remarks 备注信息
     * @param string $CreateTime 接受组创建时间
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("Remarks",$param) and $param["Remarks"] !== null) {
            $this->Remarks = $param["Remarks"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
