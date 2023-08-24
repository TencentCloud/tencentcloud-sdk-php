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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRegisterCode请求参数结构体
 *
 * @method string getDescription() 获取注册码描述。
 * @method void setDescription(string $Description) 设置注册码描述。
 * @method string getInstanceNamePrefix() 获取注册实列名称前缀。
 * @method void setInstanceNamePrefix(string $InstanceNamePrefix) 设置注册实列名称前缀。
 * @method integer getRegisterLimit() 获取该注册码允许注册的实列数目。默认限制为10个。
 * @method void setRegisterLimit(integer $RegisterLimit) 设置该注册码允许注册的实列数目。默认限制为10个。
 * @method integer getEffectiveTime() 获取该注册码的有效时间，单位为小时。默认为4小时。
 * @method void setEffectiveTime(integer $EffectiveTime) 设置该注册码的有效时间，单位为小时。默认为4小时。
 * @method string getIpAddressRange() 获取该注册码限制tat_agent只能从IpAddressRange所描述公网出口进行注册。默认不做限制。
 * @method void setIpAddressRange(string $IpAddressRange) 设置该注册码限制tat_agent只能从IpAddressRange所描述公网出口进行注册。默认不做限制。
 */
class CreateRegisterCodeRequest extends AbstractModel
{
    /**
     * @var string 注册码描述。
     */
    public $Description;

    /**
     * @var string 注册实列名称前缀。
     */
    public $InstanceNamePrefix;

    /**
     * @var integer 该注册码允许注册的实列数目。默认限制为10个。
     */
    public $RegisterLimit;

    /**
     * @var integer 该注册码的有效时间，单位为小时。默认为4小时。
     */
    public $EffectiveTime;

    /**
     * @var string 该注册码限制tat_agent只能从IpAddressRange所描述公网出口进行注册。默认不做限制。
     */
    public $IpAddressRange;

    /**
     * @param string $Description 注册码描述。
     * @param string $InstanceNamePrefix 注册实列名称前缀。
     * @param integer $RegisterLimit 该注册码允许注册的实列数目。默认限制为10个。
     * @param integer $EffectiveTime 该注册码的有效时间，单位为小时。默认为4小时。
     * @param string $IpAddressRange 该注册码限制tat_agent只能从IpAddressRange所描述公网出口进行注册。默认不做限制。
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InstanceNamePrefix",$param) and $param["InstanceNamePrefix"] !== null) {
            $this->InstanceNamePrefix = $param["InstanceNamePrefix"];
        }

        if (array_key_exists("RegisterLimit",$param) and $param["RegisterLimit"] !== null) {
            $this->RegisterLimit = $param["RegisterLimit"];
        }

        if (array_key_exists("EffectiveTime",$param) and $param["EffectiveTime"] !== null) {
            $this->EffectiveTime = $param["EffectiveTime"];
        }

        if (array_key_exists("IpAddressRange",$param) and $param["IpAddressRange"] !== null) {
            $this->IpAddressRange = $param["IpAddressRange"];
        }
    }
}
