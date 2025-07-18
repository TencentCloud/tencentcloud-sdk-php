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
 * ControlDevice请求参数结构体
 *
 * @method integer getWorkspaceId() 获取工作空间id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间id
 * @method array getWIDSet() 获取设备wid，最大100个
 * @method void setWIDSet(array $WIDSet) 设置设备wid，最大100个
 * @method string getControlData() 获取控制内容
 * @method void setControlData(string $ControlData) 设置控制内容
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method boolean getIsSynchronized() 获取是否同步返回设备下控ack结果
 * @method void setIsSynchronized(boolean $IsSynchronized) 设置是否同步返回设备下控ack结果
 */
class ControlDeviceRequest extends AbstractModel
{
    /**
     * @var integer 工作空间id
     */
    public $WorkspaceId;

    /**
     * @var array 设备wid，最大100个
     */
    public $WIDSet;

    /**
     * @var string 控制内容
     */
    public $ControlData;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var boolean 是否同步返回设备下控ack结果
     */
    public $IsSynchronized;

    /**
     * @param integer $WorkspaceId 工作空间id
     * @param array $WIDSet 设备wid，最大100个
     * @param string $ControlData 控制内容
     * @param string $ApplicationToken 应用token
     * @param boolean $IsSynchronized 是否同步返回设备下控ack结果
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("WIDSet",$param) and $param["WIDSet"] !== null) {
            $this->WIDSet = $param["WIDSet"];
        }

        if (array_key_exists("ControlData",$param) and $param["ControlData"] !== null) {
            $this->ControlData = $param["ControlData"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("IsSynchronized",$param) and $param["IsSynchronized"] !== null) {
            $this->IsSynchronized = $param["IsSynchronized"];
        }
    }
}
