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
 * 查询用户信息条件
 *
 * @method string getPropertyKey() 获取属性key
 * @method void setPropertyKey(string $PropertyKey) 设置属性key
 * @method string getPropertyValue() 获取属性value
 * @method void setPropertyValue(string $PropertyValue) 设置属性value
 * @method boolean getLogic() 获取逻辑值，等于true，不等于false
 * @method void setLogic(boolean $Logic) 设置逻辑值，等于true，不等于false
 * @method string getOperateLogic() 获取操作逻辑符（支持> < = >= <=  != between）
 * @method void setOperateLogic(string $OperateLogic) 设置操作逻辑符（支持> < = >= <=  != between）
 */
class QueryUserFilter extends AbstractModel
{
    /**
     * @var string 属性key
     */
    public $PropertyKey;

    /**
     * @var string 属性value
     */
    public $PropertyValue;

    /**
     * @var boolean 逻辑值，等于true，不等于false
     */
    public $Logic;

    /**
     * @var string 操作逻辑符（支持> < = >= <=  != between）
     */
    public $OperateLogic;

    /**
     * @param string $PropertyKey 属性key
     * @param string $PropertyValue 属性value
     * @param boolean $Logic 逻辑值，等于true，不等于false
     * @param string $OperateLogic 操作逻辑符（支持> < = >= <=  != between）
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
        if (array_key_exists("PropertyKey",$param) and $param["PropertyKey"] !== null) {
            $this->PropertyKey = $param["PropertyKey"];
        }

        if (array_key_exists("PropertyValue",$param) and $param["PropertyValue"] !== null) {
            $this->PropertyValue = $param["PropertyValue"];
        }

        if (array_key_exists("Logic",$param) and $param["Logic"] !== null) {
            $this->Logic = $param["Logic"];
        }

        if (array_key_exists("OperateLogic",$param) and $param["OperateLogic"] !== null) {
            $this->OperateLogic = $param["OperateLogic"];
        }
    }
}
