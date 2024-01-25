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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTaskOutputRegistries请求参数结构体
 *
 * @method array getRegistries() 获取登记项列表
 * @method void setRegistries(array $Registries) 设置登记项列表
 */
class CreateTaskOutputRegistriesRequest extends AbstractModel
{
    /**
     * @var array 登记项列表
     */
    public $Registries;

    /**
     * @param array $Registries 登记项列表
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
        if (array_key_exists("Registries",$param) and $param["Registries"] !== null) {
            $this->Registries = [];
            foreach ($param["Registries"] as $key => $value){
                $obj = new CreateTaskOutputRegistry();
                $obj->deserialize($value);
                array_push($this->Registries, $obj);
            }
        }
    }
}
