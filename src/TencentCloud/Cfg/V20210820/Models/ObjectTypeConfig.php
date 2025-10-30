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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对象类型配置
 *
 * @method string getKey() 获取主键
 * @method void setKey(string $Key) 设置主键
 * @method array getFields() 获取对象类型配置字段列表
 * @method void setFields(array $Fields) 设置对象类型配置字段列表
 */
class ObjectTypeConfig extends AbstractModel
{
    /**
     * @var string 主键
     */
    public $Key;

    /**
     * @var array 对象类型配置字段列表
     */
    public $Fields;

    /**
     * @param string $Key 主键
     * @param array $Fields 对象类型配置字段列表
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

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = [];
            foreach ($param["Fields"] as $key => $value){
                $obj = new ObjectTypeConfigFields();
                $obj->deserialize($value);
                array_push($this->Fields, $obj);
            }
        }
    }
}
