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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境变量选择
 *
 * @method string getKey() 获取健名
 * @method void setKey(string $Key) 设置健名
 * @method string getObjectName() 获取对象名
 * @method void setObjectName(string $ObjectName) 设置对象名
 * @method string getObjectType() 获取对象值
 * @method void setObjectType(string $ObjectType) 设置对象值
 */
class EnvValueSelector extends AbstractModel
{
    /**
     * @var string 健名
     */
    public $Key;

    /**
     * @var string 对象名
     */
    public $ObjectName;

    /**
     * @var string 对象值
     */
    public $ObjectType;

    /**
     * @param string $Key 健名
     * @param string $ObjectName 对象名
     * @param string $ObjectType 对象值
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("ObjectName",$param) and $param["ObjectName"] !== null) {
            $this->ObjectName = $param["ObjectName"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }
    }
}
