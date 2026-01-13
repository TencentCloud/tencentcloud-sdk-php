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
 * ModifyUserAuthority请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getModule() 获取分为知识库knowledge、数据源datasource、自定义场景scene
 * @method void setModule(string $Module) 设置分为知识库knowledge、数据源datasource、自定义场景scene
 * @method string getObjectId() 获取对象id,分为知识库id、数据源id、场景id
 * @method void setObjectId(string $ObjectId) 设置对象id,分为知识库id、数据源id、场景id
 * @method integer getUseScope() 获取作用范围：1仅自己使用，2指定用户，0全员
 * @method void setUseScope(integer $UseScope) 设置作用范围：1仅自己使用，2指定用户，0全员
 * @method array getAuthorityUins() 获取可使用的用户列表，UseScope=0/1,取值为[]
 * @method void setAuthorityUins(array $AuthorityUins) 设置可使用的用户列表，UseScope=0/1,取值为[]
 */
class ModifyUserAuthorityRequest extends AbstractModel
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
     * @var integer 作用范围：1仅自己使用，2指定用户，0全员
     */
    public $UseScope;

    /**
     * @var array 可使用的用户列表，UseScope=0/1,取值为[]
     */
    public $AuthorityUins;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Module 分为知识库knowledge、数据源datasource、自定义场景scene
     * @param string $ObjectId 对象id,分为知识库id、数据源id、场景id
     * @param integer $UseScope 作用范围：1仅自己使用，2指定用户，0全员
     * @param array $AuthorityUins 可使用的用户列表，UseScope=0/1,取值为[]
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

        if (array_key_exists("UseScope",$param) and $param["UseScope"] !== null) {
            $this->UseScope = $param["UseScope"];
        }

        if (array_key_exists("AuthorityUins",$param) and $param["AuthorityUins"] !== null) {
            $this->AuthorityUins = $param["AuthorityUins"];
        }
    }
}
