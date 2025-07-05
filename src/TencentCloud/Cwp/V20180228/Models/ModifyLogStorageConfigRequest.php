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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLogStorageConfig请求参数结构体
 *
 * @method boolean getIsModifyPeriod() 获取是否修改有效期（已废弃）
 * @method void setIsModifyPeriod(boolean $IsModifyPeriod) 设置是否修改有效期（已废弃）
 * @method array getType() 获取存储类型，string数组
 * @method void setType(array $Type) 设置存储类型，string数组
 * @method integer getPeriod() 获取日志存储时长，3640表示不限
 * @method void setPeriod(integer $Period) 设置日志存储时长，3640表示不限
 * @method string getGranularity() 获取日志存储时长单位，年year/月month/天day
 * @method void setGranularity(string $Granularity) 设置日志存储时长单位，年year/月month/天day
 */
class ModifyLogStorageConfigRequest extends AbstractModel
{
    /**
     * @var boolean 是否修改有效期（已废弃）
     */
    public $IsModifyPeriod;

    /**
     * @var array 存储类型，string数组
     */
    public $Type;

    /**
     * @var integer 日志存储时长，3640表示不限
     */
    public $Period;

    /**
     * @var string 日志存储时长单位，年year/月month/天day
     */
    public $Granularity;

    /**
     * @param boolean $IsModifyPeriod 是否修改有效期（已废弃）
     * @param array $Type 存储类型，string数组
     * @param integer $Period 日志存储时长，3640表示不限
     * @param string $Granularity 日志存储时长单位，年year/月month/天day
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
        if (array_key_exists("IsModifyPeriod",$param) and $param["IsModifyPeriod"] !== null) {
            $this->IsModifyPeriod = $param["IsModifyPeriod"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }
    }
}
