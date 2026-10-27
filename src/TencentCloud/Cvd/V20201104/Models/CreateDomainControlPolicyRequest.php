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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDomainControlPolicy请求参数结构体
 *
 * @method string getName() 获取<p>策略名称</p>
 * @method void setName(string $Name) 设置<p>策略名称</p>
 * @method string getDescription() 获取<p>策略描述</p>
 * @method void setDescription(string $Description) 设置<p>策略描述</p>
 * @method string getType() 获取<p>策略类型，取值范围[&quot;WHITE&quot;,&quot;BLACK&quot;]，WHITE - 白名单策略；BLACK - 黑名单策略；默认 值为BLACK</p>
 * @method void setType(string $Type) 设置<p>策略类型，取值范围[&quot;WHITE&quot;,&quot;BLACK&quot;]，WHITE - 白名单策略；BLACK - 黑名单策略；默认 值为BLACK</p>
 * @method array getDetailSet() 获取<p>域名控制规则详情</p>
 * @method void setDetailSet(array $DetailSet) 设置<p>域名控制规则详情</p>
 * @method array getIpDetailSet() 获取<p>IP控制规则详情</p>
 * @method void setIpDetailSet(array $IpDetailSet) 设置<p>IP控制规则详情</p>
 * @method array getInstanceIds() 获取<p>作用到的实例列表</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>作用到的实例列表</p>
 */
class CreateDomainControlPolicyRequest extends AbstractModel
{
    /**
     * @var string <p>策略名称</p>
     */
    public $Name;

    /**
     * @var string <p>策略描述</p>
     */
    public $Description;

    /**
     * @var string <p>策略类型，取值范围[&quot;WHITE&quot;,&quot;BLACK&quot;]，WHITE - 白名单策略；BLACK - 黑名单策略；默认 值为BLACK</p>
     */
    public $Type;

    /**
     * @var array <p>域名控制规则详情</p>
     */
    public $DetailSet;

    /**
     * @var array <p>IP控制规则详情</p>
     */
    public $IpDetailSet;

    /**
     * @var array <p>作用到的实例列表</p>
     */
    public $InstanceIds;

    /**
     * @param string $Name <p>策略名称</p>
     * @param string $Description <p>策略描述</p>
     * @param string $Type <p>策略类型，取值范围[&quot;WHITE&quot;,&quot;BLACK&quot;]，WHITE - 白名单策略；BLACK - 黑名单策略；默认 值为BLACK</p>
     * @param array $DetailSet <p>域名控制规则详情</p>
     * @param array $IpDetailSet <p>IP控制规则详情</p>
     * @param array $InstanceIds <p>作用到的实例列表</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DetailSet",$param) and $param["DetailSet"] !== null) {
            $this->DetailSet = [];
            foreach ($param["DetailSet"] as $key => $value){
                $obj = new DomainControlDetail();
                $obj->deserialize($value);
                array_push($this->DetailSet, $obj);
            }
        }

        if (array_key_exists("IpDetailSet",$param) and $param["IpDetailSet"] !== null) {
            $this->IpDetailSet = [];
            foreach ($param["IpDetailSet"] as $key => $value){
                $obj = new IpControlDetail();
                $obj->deserialize($value);
                array_push($this->IpDetailSet, $obj);
            }
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
