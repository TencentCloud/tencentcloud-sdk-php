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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ID:服务标识ID，Name:服务名称
 *
 * @method string getID() 获取服务标识
 * @method void setID(string $ID) 设置服务标识
 * @method string getName() 获取服务名称
 * @method void setName(string $Name) 设置服务名称
 * @method string getScene() 获取场景，云托管、云函数、aibuilder等
 * @method void setScene(string $Scene) 设置场景，云托管、云函数、aibuilder等
 */
class BindService extends AbstractModel
{
    /**
     * @var string 服务标识
     */
    public $ID;

    /**
     * @var string 服务名称
     */
    public $Name;

    /**
     * @var string 场景，云托管、云函数、aibuilder等
     */
    public $Scene;

    /**
     * @param string $ID 服务标识
     * @param string $Name 服务名称
     * @param string $Scene 场景，云托管、云函数、aibuilder等
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }
    }
}
