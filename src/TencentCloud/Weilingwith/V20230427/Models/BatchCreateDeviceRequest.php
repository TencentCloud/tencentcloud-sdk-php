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
 * BatchCreateDevice请求参数结构体
 *
 * @method integer getWorkspaceId() 获取工作空间Id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间Id
 * @method array getAddDeviceSet() 获取设备信息项

 * @method void setAddDeviceSet(array $AddDeviceSet) 设置设备信息项

 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 */
class BatchCreateDeviceRequest extends AbstractModel
{
    /**
     * @var integer 工作空间Id
     */
    public $WorkspaceId;

    /**
     * @var array 设备信息项

     */
    public $AddDeviceSet;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @param integer $WorkspaceId 工作空间Id
     * @param array $AddDeviceSet 设备信息项

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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("AddDeviceSet",$param) and $param["AddDeviceSet"] !== null) {
            $this->AddDeviceSet = [];
            foreach ($param["AddDeviceSet"] as $key => $value){
                $obj = new AddDeviceInfo();
                $obj->deserialize($value);
                array_push($this->AddDeviceSet, $obj);
            }
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }
    }
}
