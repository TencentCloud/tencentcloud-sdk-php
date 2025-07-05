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
namespace TencentCloud\Cloudhsm\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC对象
 *
 * @method string getVpcName() 获取Vpc名称
 * @method void setVpcName(string $VpcName) 设置Vpc名称
 * @method string getVpcId() 获取VpcId
 * @method void setVpcId(string $VpcId) 设置VpcId
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method boolean getIsDefault() 获取是否为默认VPC
 * @method void setIsDefault(boolean $IsDefault) 设置是否为默认VPC
 */
class Vpc extends AbstractModel
{
    /**
     * @var string Vpc名称
     */
    public $VpcName;

    /**
     * @var string VpcId
     */
    public $VpcId;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var boolean 是否为默认VPC
     */
    public $IsDefault;

    /**
     * @param string $VpcName Vpc名称
     * @param string $VpcId VpcId
     * @param string $CreatedTime 创建时间
     * @param boolean $IsDefault 是否为默认VPC
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
        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
