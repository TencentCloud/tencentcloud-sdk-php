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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述如何数据转换

 *
 * @method array getOutputStructs() 获取描述如何数据转换
 * @method void setOutputStructs(array $OutputStructs) 设置描述如何数据转换
 */
class Transform extends AbstractModel
{
    /**
     * @var array 描述如何数据转换
     */
    public $OutputStructs;

    /**
     * @param array $OutputStructs 描述如何数据转换
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
        if (array_key_exists("OutputStructs",$param) and $param["OutputStructs"] !== null) {
            $this->OutputStructs = [];
            foreach ($param["OutputStructs"] as $key => $value){
                $obj = new OutputStructParam();
                $obj->deserialize($value);
                array_push($this->OutputStructs, $obj);
            }
        }
    }
}
