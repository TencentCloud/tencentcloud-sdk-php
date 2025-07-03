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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通用的参数
 *
 * @method string getKey() 获取key
 * @method void setKey(string $Key) 设置key
 * @method array getValues() 获取值列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValues(array $Values) 设置值列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class Arg extends AbstractModel
{
    /**
     * @var string key
     */
    public $Key;

    /**
     * @var array 值列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Values;

    /**
     * @param string $Key key
     * @param array $Values 值列表
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
