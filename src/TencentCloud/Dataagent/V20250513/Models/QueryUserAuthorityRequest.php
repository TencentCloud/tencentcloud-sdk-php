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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryUserAuthority请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getModule() 获取分为知识库knowledge、数据源datasource、自定义场景scene
 * @method void setModule(string $Module) 设置分为知识库knowledge、数据源datasource、自定义场景scene
 * @method string getObjectId() 获取对象id,分为知识库id、数据源id、场景id
 * @method void setObjectId(string $ObjectId) 设置对象id,分为知识库id、数据源id、场景id
 */
class QueryUserAuthorityRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 分为知识库knowledge、数据源datasource、自定义场景scene
     */
    public $Module;

    /**
     * @var string 对象id,分为知识库id、数据源id、场景id
     */
    public $ObjectId;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Module 分为知识库knowledge、数据源datasource、自定义场景scene
     * @param string $ObjectId 对象id,分为知识库id、数据源id、场景id
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

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("ObjectId",$param) and $param["ObjectId"] !== null) {
            $this->ObjectId = $param["ObjectId"];
        }
    }
}
