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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 默认kong路由，目前只在 LLM 模型 API相 关接口使用
 *
 * @method string getName() 获取<p>服务名字</p>
 * @method void setName(string $Name) 设置<p>服务名字</p>
 * @method string getID() 获取<p>服务ID</p>
 * @method void setID(string $ID) 设置<p>服务ID</p>
 * @method array getMethods() 获取<p>HTTP Method</p>
 * @method void setMethods(array $Methods) 设置<p>HTTP Method</p>
 * @method array getPaths() 获取<p>Http Path</p>
 * @method void setPaths(array $Paths) 设置<p>Http Path</p>
 */
class DefaultKongRoute extends AbstractModel
{
    /**
     * @var string <p>服务名字</p>
     */
    public $Name;

    /**
     * @var string <p>服务ID</p>
     */
    public $ID;

    /**
     * @var array <p>HTTP Method</p>
     */
    public $Methods;

    /**
     * @var array <p>Http Path</p>
     */
    public $Paths;

    /**
     * @param string $Name <p>服务名字</p>
     * @param string $ID <p>服务ID</p>
     * @param array $Methods <p>HTTP Method</p>
     * @param array $Paths <p>Http Path</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Methods",$param) and $param["Methods"] !== null) {
            $this->Methods = $param["Methods"];
        }

        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = $param["Paths"];
        }
    }
}
