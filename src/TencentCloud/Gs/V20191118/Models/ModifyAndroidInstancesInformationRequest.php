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
 * ModifyAndroidInstancesInformation请求参数结构体
 *
 * @method array getAndroidInstanceInformations() 获取安卓实例信息数据
 * @method void setAndroidInstanceInformations(array $AndroidInstanceInformations) 设置安卓实例信息数据
 */
class ModifyAndroidInstancesInformationRequest extends AbstractModel
{
    /**
     * @var array 安卓实例信息数据
     */
    public $AndroidInstanceInformations;

    /**
     * @param array $AndroidInstanceInformations 安卓实例信息数据
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
        if (array_key_exists("AndroidInstanceInformations",$param) and $param["AndroidInstanceInformations"] !== null) {
            $this->AndroidInstanceInformations = [];
            foreach ($param["AndroidInstanceInformations"] as $key => $value){
                $obj = new AndroidInstanceInformation();
                $obj->deserialize($value);
                array_push($this->AndroidInstanceInformations, $obj);
            }
        }
    }
}
