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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防护对象组的域名详情
 *
 * @method string getDomain() 获取防护对象组中绑定的域名
 * @method void setDomain(string $Domain) 设置防护对象组中绑定的域名
 * @method array getInstances() 获取防护对象组中绑定的域名对应所属的实例信息，一个域名可能存在多个实例中
 * @method void setInstances(array $Instances) 设置防护对象组中绑定的域名对应所属的实例信息，一个域名可能存在多个实例中
 */
class ProtectGroupDomainInfo extends AbstractModel
{
    /**
     * @var string 防护对象组中绑定的域名
     */
    public $Domain;

    /**
     * @var array 防护对象组中绑定的域名对应所属的实例信息，一个域名可能存在多个实例中
     */
    public $Instances;

    /**
     * @param string $Domain 防护对象组中绑定的域名
     * @param array $Instances 防护对象组中绑定的域名对应所属的实例信息，一个域名可能存在多个实例中
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = [];
            foreach ($param["Instances"] as $key => $value){
                $obj = new InstanceBriefInfo();
                $obj->deserialize($value);
                array_push($this->Instances, $obj);
            }
        }
    }
}
