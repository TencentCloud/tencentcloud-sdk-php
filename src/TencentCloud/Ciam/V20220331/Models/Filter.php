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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询条件
 *
 * @method string getKey() 获取key值
 * @method void setKey(string $Key) 设置key值
 * @method array getValues() 获取value值
 * @method void setValues(array $Values) 设置value值
 * @method boolean getLogic() 获取逻辑值
 * @method void setLogic(boolean $Logic) 设置逻辑值
 */
class Filter extends AbstractModel
{
    /**
     * @var string key值
     */
    public $Key;

    /**
     * @var array value值
     */
    public $Values;

    /**
     * @var boolean 逻辑值
     */
    public $Logic;

    /**
     * @param string $Key key值
     * @param array $Values value值
     * @param boolean $Logic 逻辑值
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

        if (array_key_exists("Logic",$param) and $param["Logic"] !== null) {
            $this->Logic = $param["Logic"];
        }
    }
}
