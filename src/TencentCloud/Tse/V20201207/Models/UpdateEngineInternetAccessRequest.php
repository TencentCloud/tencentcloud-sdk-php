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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateEngineInternetAccess请求参数结构体
 *
 * @method string getInstanceId() 获取引擎ID
 * @method void setInstanceId(string $InstanceId) 设置引擎ID
 * @method string getEngineType() 获取引擎类型
 * @method void setEngineType(string $EngineType) 设置引擎类型
 * @method boolean getEnableClientInternetAccess() 获取是否开启客户端公网访问，true开 false关
 * @method void setEnableClientInternetAccess(boolean $EnableClientInternetAccess) 设置是否开启客户端公网访问，true开 false关
 */
class UpdateEngineInternetAccessRequest extends AbstractModel
{
    /**
     * @var string 引擎ID
     */
    public $InstanceId;

    /**
     * @var string 引擎类型
     */
    public $EngineType;

    /**
     * @var boolean 是否开启客户端公网访问，true开 false关
     */
    public $EnableClientInternetAccess;

    /**
     * @param string $InstanceId 引擎ID
     * @param string $EngineType 引擎类型
     * @param boolean $EnableClientInternetAccess 是否开启客户端公网访问，true开 false关
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

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("EnableClientInternetAccess",$param) and $param["EnableClientInternetAccess"] !== null) {
            $this->EnableClientInternetAccess = $param["EnableClientInternetAccess"];
        }
    }
}
