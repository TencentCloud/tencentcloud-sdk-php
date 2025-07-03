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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 元数据拆分存储Etcd配置
 *
 * @method array getResources() 获取k8s资源，支持核心资源，控制类资源，配置及敏感资源
 * @method void setResources(array $Resources) 设置k8s资源，支持核心资源，控制类资源，配置及敏感资源
 */
class EtcdOverrideConfig extends AbstractModel
{
    /**
     * @var array k8s资源，支持核心资源，控制类资源，配置及敏感资源
     */
    public $Resources;

    /**
     * @param array $Resources k8s资源，支持核心资源，控制类资源，配置及敏感资源
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
        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = $param["Resources"];
        }
    }
}
