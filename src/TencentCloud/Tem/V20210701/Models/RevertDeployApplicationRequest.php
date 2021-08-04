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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RevertDeployApplication请求参数结构体
 *
 * @method string getApplicationId() 获取需要回滚的服务id
 * @method void setApplicationId(string $ApplicationId) 设置需要回滚的服务id
 * @method string getEnvironmentId() 获取需要回滚的服务所在环境id
 * @method void setEnvironmentId(string $EnvironmentId) 设置需要回滚的服务所在环境id
 */
class RevertDeployApplicationRequest extends AbstractModel
{
    /**
     * @var string 需要回滚的服务id
     */
    public $ApplicationId;

    /**
     * @var string 需要回滚的服务所在环境id
     */
    public $EnvironmentId;

    /**
     * @param string $ApplicationId 需要回滚的服务id
     * @param string $EnvironmentId 需要回滚的服务所在环境id
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }
    }
}
