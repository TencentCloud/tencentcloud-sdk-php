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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDDoSAI请求参数结构体
 *
 * @method array getInstanceIdList() 获取资源实例ID列表
 * @method void setInstanceIdList(array $InstanceIdList) 设置资源实例ID列表
 * @method string getDDoSAI() 获取AI防护开关，取值[
on(开启)
off(关闭)
]
 * @method void setDDoSAI(string $DDoSAI) 设置AI防护开关，取值[
on(开启)
off(关闭)
]
 */
class CreateDDoSAIRequest extends AbstractModel
{
    /**
     * @var array 资源实例ID列表
     */
    public $InstanceIdList;

    /**
     * @var string AI防护开关，取值[
on(开启)
off(关闭)
]
     */
    public $DDoSAI;

    /**
     * @param array $InstanceIdList 资源实例ID列表
     * @param string $DDoSAI AI防护开关，取值[
on(开启)
off(关闭)
]
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
        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("DDoSAI",$param) and $param["DDoSAI"] !== null) {
            $this->DDoSAI = $param["DDoSAI"];
        }
    }
}
