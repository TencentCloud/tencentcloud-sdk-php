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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志投递日志类型
 *
 * @method integer getLogType() 获取日志投递类型
 * @method void setLogType(integer $LogType) 设置日志投递类型
 * @method string getLogTypeName() 获取投递日志类型的名称
 * @method void setLogTypeName(string $LogTypeName) 设置投递日志类型的名称
 * @method string getLogTypeDesc() 获取投递日志类型的描述
 * @method void setLogTypeDesc(string $LogTypeDesc) 设置投递日志类型的描述
 */
class LogDeliveryType extends AbstractModel
{
    /**
     * @var integer 日志投递类型
     */
    public $LogType;

    /**
     * @var string 投递日志类型的名称
     */
    public $LogTypeName;

    /**
     * @var string 投递日志类型的描述
     */
    public $LogTypeDesc;

    /**
     * @param integer $LogType 日志投递类型
     * @param string $LogTypeName 投递日志类型的名称
     * @param string $LogTypeDesc 投递日志类型的描述
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
        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("LogTypeName",$param) and $param["LogTypeName"] !== null) {
            $this->LogTypeName = $param["LogTypeName"];
        }

        if (array_key_exists("LogTypeDesc",$param) and $param["LogTypeDesc"] !== null) {
            $this->LogTypeDesc = $param["LogTypeDesc"];
        }
    }
}
