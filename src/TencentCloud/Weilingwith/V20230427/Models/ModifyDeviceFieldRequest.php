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
 * ModifyDeviceField请求参数结构体
 *
 * @method integer getWorkspaceId() 获取工作空间id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间id
 * @method array getSet() 获取设备自定义字段修改信息集合
 * @method void setSet(array $Set) 设置设备自定义字段修改信息集合
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 */
class ModifyDeviceFieldRequest extends AbstractModel
{
    /**
     * @var integer 工作空间id
     */
    public $WorkspaceId;

    /**
     * @var array 设备自定义字段修改信息集合
     */
    public $Set;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @param integer $WorkspaceId 工作空间id
     * @param array $Set 设备自定义字段修改信息集合
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

        if (array_key_exists("Set",$param) and $param["Set"] !== null) {
            $this->Set = [];
            foreach ($param["Set"] as $key => $value){
                $obj = new ModifyDeviceFieldInfo();
                $obj->deserialize($value);
                array_push($this->Set, $obj);
            }
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }
    }
}
