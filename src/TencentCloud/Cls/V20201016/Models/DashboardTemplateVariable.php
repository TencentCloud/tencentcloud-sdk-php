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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 仪表盘订阅模板变量
 *
 * @method string getKey() 获取key的值
 * @method void setKey(string $Key) 设置key的值
 * @method array getValues() 获取key对应的values取值values
 * @method void setValues(array $Values) 设置key对应的values取值values
 */
class DashboardTemplateVariable extends AbstractModel
{
    /**
     * @var string key的值
     */
    public $Key;

    /**
     * @var array key对应的values取值values
     */
    public $Values;

    /**
     * @param string $Key key的值
     * @param array $Values key对应的values取值values
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
