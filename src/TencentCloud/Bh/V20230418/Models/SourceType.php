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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ioa用户源信息
 *
 * @method integer getSource() 获取账号组来源
 * @method void setSource(integer $Source) 设置账号组来源
 * @method string getType() 获取账号组来源类型
 * @method void setType(string $Type) 设置账号组来源类型
 * @method string getName() 获取账号组来源名称
 * @method void setName(string $Name) 设置账号组来源名称
 * @method string getTarget() 获取区分ioa原来和iam-mini
 * @method void setTarget(string $Target) 设置区分ioa原来和iam-mini
 */
class SourceType extends AbstractModel
{
    /**
     * @var integer 账号组来源
     */
    public $Source;

    /**
     * @var string 账号组来源类型
     */
    public $Type;

    /**
     * @var string 账号组来源名称
     */
    public $Name;

    /**
     * @var string 区分ioa原来和iam-mini
     */
    public $Target;

    /**
     * @param integer $Source 账号组来源
     * @param string $Type 账号组来源类型
     * @param string $Name 账号组来源名称
     * @param string $Target 区分ioa原来和iam-mini
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }
    }
}
