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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteProjectParamDs请求参数结构体
 *
 * @method string getParamKey() 获取参数名
 * @method void setParamKey(string $ParamKey) 设置参数名
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 */
class DeleteProjectParamDsRequest extends AbstractModel
{
    /**
     * @var string 参数名
     */
    public $ParamKey;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @param string $ParamKey 参数名
     * @param string $ProjectId 项目id
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
        if (array_key_exists("ParamKey",$param) and $param["ParamKey"] !== null) {
            $this->ParamKey = $param["ParamKey"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
