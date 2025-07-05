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
 * SmartOptimizerLifecyclePolicy
 *
 * @method string getLifecycleEnable() 获取生命周期启用
 * @method void setLifecycleEnable(string $LifecycleEnable) 设置生命周期启用
 * @method integer getExpiration() 获取过期时间
 * @method void setExpiration(integer $Expiration) 设置过期时间
 * @method boolean getDropTable() 获取是否删表
 * @method void setDropTable(boolean $DropTable) 设置是否删表
 * @method string getExpiredField() 获取过期字段
 * @method void setExpiredField(string $ExpiredField) 设置过期字段
 * @method string getExpiredFieldFormat() 获取过期字段格式
 * @method void setExpiredFieldFormat(string $ExpiredFieldFormat) 设置过期字段格式
 */
class SmartOptimizerLifecyclePolicy extends AbstractModel
{
    /**
     * @var string 生命周期启用
     */
    public $LifecycleEnable;

    /**
     * @var integer 过期时间
     */
    public $Expiration;

    /**
     * @var boolean 是否删表
     */
    public $DropTable;

    /**
     * @var string 过期字段
     */
    public $ExpiredField;

    /**
     * @var string 过期字段格式
     */
    public $ExpiredFieldFormat;

    /**
     * @param string $LifecycleEnable 生命周期启用
     * @param integer $Expiration 过期时间
     * @param boolean $DropTable 是否删表
     * @param string $ExpiredField 过期字段
     * @param string $ExpiredFieldFormat 过期字段格式
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
        if (array_key_exists("LifecycleEnable",$param) and $param["LifecycleEnable"] !== null) {
            $this->LifecycleEnable = $param["LifecycleEnable"];
        }

        if (array_key_exists("Expiration",$param) and $param["Expiration"] !== null) {
            $this->Expiration = $param["Expiration"];
        }

        if (array_key_exists("DropTable",$param) and $param["DropTable"] !== null) {
            $this->DropTable = $param["DropTable"];
        }

        if (array_key_exists("ExpiredField",$param) and $param["ExpiredField"] !== null) {
            $this->ExpiredField = $param["ExpiredField"];
        }

        if (array_key_exists("ExpiredFieldFormat",$param) and $param["ExpiredFieldFormat"] !== null) {
            $this->ExpiredFieldFormat = $param["ExpiredFieldFormat"];
        }
    }
}
