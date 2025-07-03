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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 病历质控
 *
 * @method boolean getHit() 获取病历是否有问题
 * @method void setHit(boolean $Hit) 设置病历是否有问题
 * @method string getCompleteness() 获取完整性问题
 * @method void setCompleteness(string $Completeness) 设置完整性问题
 * @method string getTimeliness() 获取及时性问题
 * @method void setTimeliness(string $Timeliness) 设置及时性问题
 * @method string getLogical() 获取逻辑性问题
 * @method void setLogical(string $Logical) 设置逻辑性问题
 */
class RecordQuality extends AbstractModel
{
    /**
     * @var boolean 病历是否有问题
     */
    public $Hit;

    /**
     * @var string 完整性问题
     */
    public $Completeness;

    /**
     * @var string 及时性问题
     */
    public $Timeliness;

    /**
     * @var string 逻辑性问题
     */
    public $Logical;

    /**
     * @param boolean $Hit 病历是否有问题
     * @param string $Completeness 完整性问题
     * @param string $Timeliness 及时性问题
     * @param string $Logical 逻辑性问题
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
        if (array_key_exists("Hit",$param) and $param["Hit"] !== null) {
            $this->Hit = $param["Hit"];
        }

        if (array_key_exists("Completeness",$param) and $param["Completeness"] !== null) {
            $this->Completeness = $param["Completeness"];
        }

        if (array_key_exists("Timeliness",$param) and $param["Timeliness"] !== null) {
            $this->Timeliness = $param["Timeliness"];
        }

        if (array_key_exists("Logical",$param) and $param["Logical"] !== null) {
            $this->Logical = $param["Logical"];
        }
    }
}
