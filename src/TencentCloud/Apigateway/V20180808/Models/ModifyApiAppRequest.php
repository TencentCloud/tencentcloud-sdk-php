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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApiApp请求参数结构体
 *
 * @method string getApiAppId() 获取应用唯一 ID。
 * @method void setApiAppId(string $ApiAppId) 设置应用唯一 ID。
 * @method string getApiAppName() 获取修改的应用名称
 * @method void setApiAppName(string $ApiAppName) 设置修改的应用名称
 * @method string getApiAppDesc() 获取修改的应用描述
 * @method void setApiAppDesc(string $ApiAppDesc) 设置修改的应用描述
 */
class ModifyApiAppRequest extends AbstractModel
{
    /**
     * @var string 应用唯一 ID。
     */
    public $ApiAppId;

    /**
     * @var string 修改的应用名称
     */
    public $ApiAppName;

    /**
     * @var string 修改的应用描述
     */
    public $ApiAppDesc;

    /**
     * @param string $ApiAppId 应用唯一 ID。
     * @param string $ApiAppName 修改的应用名称
     * @param string $ApiAppDesc 修改的应用描述
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
        if (array_key_exists("ApiAppId",$param) and $param["ApiAppId"] !== null) {
            $this->ApiAppId = $param["ApiAppId"];
        }

        if (array_key_exists("ApiAppName",$param) and $param["ApiAppName"] !== null) {
            $this->ApiAppName = $param["ApiAppName"];
        }

        if (array_key_exists("ApiAppDesc",$param) and $param["ApiAppDesc"] !== null) {
            $this->ApiAppDesc = $param["ApiAppDesc"];
        }
    }
}
