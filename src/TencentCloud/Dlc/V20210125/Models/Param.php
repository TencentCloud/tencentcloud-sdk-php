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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对指定参数的更新、增加、删除
 *
 * @method string getConfigItem() 获取参数key，例如：
 * @method void setConfigItem(string $ConfigItem) 设置参数key，例如：
 * @method string getConfigValue() 获取参数值
 * @method void setConfigValue(string $ConfigValue) 设置参数值
 * @method string getOperate() 获取下发操作，支持：ADD、DELETE、MODIFY
 * @method void setOperate(string $Operate) 设置下发操作，支持：ADD、DELETE、MODIFY
 */
class Param extends AbstractModel
{
    /**
     * @var string 参数key，例如：
     */
    public $ConfigItem;

    /**
     * @var string 参数值
     */
    public $ConfigValue;

    /**
     * @var string 下发操作，支持：ADD、DELETE、MODIFY
     */
    public $Operate;

    /**
     * @param string $ConfigItem 参数key，例如：
     * @param string $ConfigValue 参数值
     * @param string $Operate 下发操作，支持：ADD、DELETE、MODIFY
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
        if (array_key_exists("ConfigItem",$param) and $param["ConfigItem"] !== null) {
            $this->ConfigItem = $param["ConfigItem"];
        }

        if (array_key_exists("ConfigValue",$param) and $param["ConfigValue"] !== null) {
            $this->ConfigValue = $param["ConfigValue"];
        }

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }
    }
}
