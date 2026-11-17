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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjectEnvs请求参数结构体
 *
 * @method string getZoneId() 获取<p>Makers 站点 ID</p>
 * @method void setZoneId(string $ZoneId) 设置<p>Makers 站点 ID</p>
 * @method string getProjectId() 获取<p>项目 ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目 ID</p>
 * @method string getEnv() 获取<p>只返回该环境 slug 的变量</p>
 * @method void setEnv(string $Env) 设置<p>只返回该环境 slug 的变量</p>
 */
class DescribeProjectEnvsRequest extends AbstractModel
{
    /**
     * @var string <p>Makers 站点 ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>项目 ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>只返回该环境 slug 的变量</p>
     */
    public $Env;

    /**
     * @param string $ZoneId <p>Makers 站点 ID</p>
     * @param string $ProjectId <p>项目 ID</p>
     * @param string $Env <p>只返回该环境 slug 的变量</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }
    }
}
