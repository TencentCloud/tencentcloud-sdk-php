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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getApplicationId() 获取需要修改名称的应用实例ID
 * @method void setApplicationId(string $ApplicationId) 设置需要修改名称的应用实例ID
 * @method string getAppName() 获取需要修改的应用名称，需要URLEncode
 * @method void setAppName(string $AppName) 设置需要修改的应用名称，需要URLEncode
 */

/**
 *ModifyAppName请求参数结构体
 */
class ModifyAppNameRequest extends AbstractModel
{
    /**
     * @var string 需要修改名称的应用实例ID
     */
    public $ApplicationId;

    /**
     * @var string 需要修改的应用名称，需要URLEncode
     */
    public $AppName;
    /**
     * @param string $ApplicationId 需要修改名称的应用实例ID
     * @param string $AppName 需要修改的应用名称，需要URLEncode
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }
    }
}
