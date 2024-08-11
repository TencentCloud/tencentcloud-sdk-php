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
 * 组件重启策略
 *
 * @method string getName() 获取重启策略名。
 * @method void setName(string $Name) 设置重启策略名。
 * @method string getDisplayName() 获取策略展示名称。
 * @method void setDisplayName(string $DisplayName) 设置策略展示名称。
 * @method string getDescribe() 获取策略描述。
 * @method void setDescribe(string $Describe) 设置策略描述。
 * @method array getBatchSizeRange() 获取批量重启节点数可选范围。
 * @method void setBatchSizeRange(array $BatchSizeRange) 设置批量重启节点数可选范围。
 * @method string getIsDefault() 获取是否是默认策略。
 * @method void setIsDefault(string $IsDefault) 设置是否是默认策略。
 */
class RestartPolicy extends AbstractModel
{
    /**
     * @var string 重启策略名。
     */
    public $Name;

    /**
     * @var string 策略展示名称。
     */
    public $DisplayName;

    /**
     * @var string 策略描述。
     */
    public $Describe;

    /**
     * @var array 批量重启节点数可选范围。
     */
    public $BatchSizeRange;

    /**
     * @var string 是否是默认策略。
     */
    public $IsDefault;

    /**
     * @param string $Name 重启策略名。
     * @param string $DisplayName 策略展示名称。
     * @param string $Describe 策略描述。
     * @param array $BatchSizeRange 批量重启节点数可选范围。
     * @param string $IsDefault 是否是默认策略。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("BatchSizeRange",$param) and $param["BatchSizeRange"] !== null) {
            $this->BatchSizeRange = $param["BatchSizeRange"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
