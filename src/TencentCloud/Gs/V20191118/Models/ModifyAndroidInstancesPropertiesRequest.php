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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAndroidInstancesProperties请求参数结构体
 *
 * @method array getAndroidInstanceIds() 获取安卓实例 ID 列表
 * @method void setAndroidInstanceIds(array $AndroidInstanceIds) 设置安卓实例 ID 列表
 * @method AndroidInstanceDevice getAndroidInstanceDevice() 获取安卓实例设备
 * @method void setAndroidInstanceDevice(AndroidInstanceDevice $AndroidInstanceDevice) 设置安卓实例设备
 * @method array getAndroidInstanceProperties() 获取安卓实例其它属性列表
 * @method void setAndroidInstanceProperties(array $AndroidInstanceProperties) 设置安卓实例其它属性列表
 */
class ModifyAndroidInstancesPropertiesRequest extends AbstractModel
{
    /**
     * @var array 安卓实例 ID 列表
     */
    public $AndroidInstanceIds;

    /**
     * @var AndroidInstanceDevice 安卓实例设备
     */
    public $AndroidInstanceDevice;

    /**
     * @var array 安卓实例其它属性列表
     */
    public $AndroidInstanceProperties;

    /**
     * @param array $AndroidInstanceIds 安卓实例 ID 列表
     * @param AndroidInstanceDevice $AndroidInstanceDevice 安卓实例设备
     * @param array $AndroidInstanceProperties 安卓实例其它属性列表
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
        if (array_key_exists("AndroidInstanceIds",$param) and $param["AndroidInstanceIds"] !== null) {
            $this->AndroidInstanceIds = $param["AndroidInstanceIds"];
        }

        if (array_key_exists("AndroidInstanceDevice",$param) and $param["AndroidInstanceDevice"] !== null) {
            $this->AndroidInstanceDevice = new AndroidInstanceDevice();
            $this->AndroidInstanceDevice->deserialize($param["AndroidInstanceDevice"]);
        }

        if (array_key_exists("AndroidInstanceProperties",$param) and $param["AndroidInstanceProperties"] !== null) {
            $this->AndroidInstanceProperties = [];
            foreach ($param["AndroidInstanceProperties"] as $key => $value){
                $obj = new AndroidInstanceProperty();
                $obj->deserialize($value);
                array_push($this->AndroidInstanceProperties, $obj);
            }
        }
    }
}
