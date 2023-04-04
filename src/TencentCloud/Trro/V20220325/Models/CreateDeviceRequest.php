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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDevice请求参数结构体
 *
 * @method string getProjectId() 获取创建设备所归属的项目ID
 * @method void setProjectId(string $ProjectId) 设置创建设备所归属的项目ID
 * @method string getDeviceId() 获取创建设备ID，项目内需要唯一，由小写英文字母、数字和下划线构成，长度不超过18
 * @method void setDeviceId(string $DeviceId) 设置创建设备ID，项目内需要唯一，由小写英文字母、数字和下划线构成，长度不超过18
 * @method string getDeviceName() 获取创建设备名称，长度小于24, 可包含中文、数字、英文字母和下划线
 * @method void setDeviceName(string $DeviceName) 设置创建设备名称，长度小于24, 可包含中文、数字、英文字母和下划线
 * @method string getDeviceType() 获取设备类型，field为现场设备（受控设备），remote为远端设备（操控设备），不填默认为field
 * @method void setDeviceType(string $DeviceType) 设置设备类型，field为现场设备（受控设备），remote为远端设备（操控设备），不填默认为field
 * @method string getDeviceToken() 获取设备认证口令，由大小写英文字母和数字构成，须为16位
 * @method void setDeviceToken(string $DeviceToken) 设置设备认证口令，由大小写英文字母和数字构成，须为16位
 */
class CreateDeviceRequest extends AbstractModel
{
    /**
     * @var string 创建设备所归属的项目ID
     */
    public $ProjectId;

    /**
     * @var string 创建设备ID，项目内需要唯一，由小写英文字母、数字和下划线构成，长度不超过18
     */
    public $DeviceId;

    /**
     * @var string 创建设备名称，长度小于24, 可包含中文、数字、英文字母和下划线
     */
    public $DeviceName;

    /**
     * @var string 设备类型，field为现场设备（受控设备），remote为远端设备（操控设备），不填默认为field
     */
    public $DeviceType;

    /**
     * @var string 设备认证口令，由大小写英文字母和数字构成，须为16位
     */
    public $DeviceToken;

    /**
     * @param string $ProjectId 创建设备所归属的项目ID
     * @param string $DeviceId 创建设备ID，项目内需要唯一，由小写英文字母、数字和下划线构成，长度不超过18
     * @param string $DeviceName 创建设备名称，长度小于24, 可包含中文、数字、英文字母和下划线
     * @param string $DeviceType 设备类型，field为现场设备（受控设备），remote为远端设备（操控设备），不填默认为field
     * @param string $DeviceToken 设备认证口令，由大小写英文字母和数字构成，须为16位
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("DeviceToken",$param) and $param["DeviceToken"] !== null) {
            $this->DeviceToken = $param["DeviceToken"];
        }
    }
}
