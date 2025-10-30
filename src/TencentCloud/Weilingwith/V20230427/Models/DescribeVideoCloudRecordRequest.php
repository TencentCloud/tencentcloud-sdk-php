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
 * DescribeVideoCloudRecord请求参数结构体
 *
 * @method string getWID() 获取设备的唯一标识
 * @method void setWID(string $WID) 设置设备的唯一标识
 * @method integer getStartTime() 获取录像开始时间（s）
 * @method void setStartTime(integer $StartTime) 设置录像开始时间（s）
 * @method integer getEndTime() 获取录像结束时间（s）

 * @method void setEndTime(integer $EndTime) 设置录像结束时间（s）

 * @method integer getWorkspaceId() 获取工作空间Id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间Id
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 */
class DescribeVideoCloudRecordRequest extends AbstractModel
{
    /**
     * @var string 设备的唯一标识
     */
    public $WID;

    /**
     * @var integer 录像开始时间（s）
     */
    public $StartTime;

    /**
     * @var integer 录像结束时间（s）

     */
    public $EndTime;

    /**
     * @var integer 工作空间Id
     */
    public $WorkspaceId;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @param string $WID 设备的唯一标识
     * @param integer $StartTime 录像开始时间（s）
     * @param integer $EndTime 录像结束时间（s）

     * @param integer $WorkspaceId 工作空间Id
     * @param string $ApplicationToken 应用token
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
        if (array_key_exists("WID",$param) and $param["WID"] !== null) {
            $this->WID = $param["WID"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }
    }
}
