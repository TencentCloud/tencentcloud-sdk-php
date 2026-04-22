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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器额外配置
 *
 * @method string getJobAccessProxyType() 获取<p>计算作业代理访问类型，如Spark作业和RayCluster UI；不填写默认使用Internal</p><p>枚举值：</p><ul><li>Internal： 使用内网LB代理访问</li><li>Public： 使用公网LB代理访问</li><li>None： 不创建LB代理访问</li></ul>
 * @method void setJobAccessProxyType(string $JobAccessProxyType) 设置<p>计算作业代理访问类型，如Spark作业和RayCluster UI；不填写默认使用Internal</p><p>枚举值：</p><ul><li>Internal： 使用内网LB代理访问</li><li>Public： 使用公网LB代理访问</li><li>None： 不创建LB代理访问</li></ul>
 */
class ContainerExtraConf extends AbstractModel
{
    /**
     * @var string <p>计算作业代理访问类型，如Spark作业和RayCluster UI；不填写默认使用Internal</p><p>枚举值：</p><ul><li>Internal： 使用内网LB代理访问</li><li>Public： 使用公网LB代理访问</li><li>None： 不创建LB代理访问</li></ul>
     */
    public $JobAccessProxyType;

    /**
     * @param string $JobAccessProxyType <p>计算作业代理访问类型，如Spark作业和RayCluster UI；不填写默认使用Internal</p><p>枚举值：</p><ul><li>Internal： 使用内网LB代理访问</li><li>Public： 使用公网LB代理访问</li><li>None： 不创建LB代理访问</li></ul>
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
        if (array_key_exists("JobAccessProxyType",$param) and $param["JobAccessProxyType"] !== null) {
            $this->JobAccessProxyType = $param["JobAccessProxyType"];
        }
    }
}
