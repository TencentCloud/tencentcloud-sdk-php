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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApplication请求参数结构体
 *
 * @method string getInstanceId() 获取需要制作自定义应用的HAI实例ID
 * @method void setInstanceId(string $InstanceId) 设置需要制作自定义应用的HAI实例ID
 * @method string getApplicationName() 获取自定义应用的应用名称
 * @method void setApplicationName(string $ApplicationName) 设置自定义应用的应用名称
 * @method string getApplicationDescription() 获取自定义应用的描述
 * @method void setApplicationDescription(string $ApplicationDescription) 设置自定义应用的描述
 */
class CreateApplicationRequest extends AbstractModel
{
    /**
     * @var string 需要制作自定义应用的HAI实例ID
     */
    public $InstanceId;

    /**
     * @var string 自定义应用的应用名称
     */
    public $ApplicationName;

    /**
     * @var string 自定义应用的描述
     */
    public $ApplicationDescription;

    /**
     * @param string $InstanceId 需要制作自定义应用的HAI实例ID
     * @param string $ApplicationName 自定义应用的应用名称
     * @param string $ApplicationDescription 自定义应用的描述
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationDescription",$param) and $param["ApplicationDescription"] !== null) {
            $this->ApplicationDescription = $param["ApplicationDescription"];
        }
    }
}
