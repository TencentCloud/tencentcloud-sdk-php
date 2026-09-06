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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDBCustomDisasterRecoverGroup请求参数结构体
 *
 * @method string getName() 获取<p>置放群组名称</p><p>入参限制：长度1-60个字符，支持中、英文</p>
 * @method void setName(string $Name) 设置<p>置放群组名称</p><p>入参限制：长度1-60个字符，支持中、英文</p>
 * @method string getType() 获取<p>置放群组类型</p><p>枚举值：</p><ul><li>HOST： 物理机</li></ul><p>默认值：HOST</p><p>当前仅支持物理机类型</p>
 * @method void setType(string $Type) 设置<p>置放群组类型</p><p>枚举值：</p><ul><li>HOST： 物理机</li></ul><p>默认值：HOST</p><p>当前仅支持物理机类型</p>
 * @method string getStrategy() 获取<p>置放群组策略</p><p>入参限制：当前仅支持分散置放群组</p><p>枚举值：</p><ul><li>SPREAD： 分散置放群组</li></ul><p>默认值：SPREAD</p>
 * @method void setStrategy(string $Strategy) 设置<p>置放群组策略</p><p>入参限制：当前仅支持分散置放群组</p><p>枚举值：</p><ul><li>SPREAD： 分散置放群组</li></ul><p>默认值：SPREAD</p>
 * @method integer getAffinity() 获取<p>置放群组的亲和度，在置放群组的实例会按该亲和度分布</p><p>取值范围：[1, 10]</p><p>默认值：1</p>
 * @method void setAffinity(integer $Affinity) 设置<p>置放群组的亲和度，在置放群组的实例会按该亲和度分布</p><p>取值范围：[1, 10]</p><p>默认值：1</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 * @method string getClientToken() 获取<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
 * @method void setClientToken(string $ClientToken) 设置<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
 */
class CreateDBCustomDisasterRecoverGroupRequest extends AbstractModel
{
    /**
     * @var string <p>置放群组名称</p><p>入参限制：长度1-60个字符，支持中、英文</p>
     */
    public $Name;

    /**
     * @var string <p>置放群组类型</p><p>枚举值：</p><ul><li>HOST： 物理机</li></ul><p>默认值：HOST</p><p>当前仅支持物理机类型</p>
     */
    public $Type;

    /**
     * @var string <p>置放群组策略</p><p>入参限制：当前仅支持分散置放群组</p><p>枚举值：</p><ul><li>SPREAD： 分散置放群组</li></ul><p>默认值：SPREAD</p>
     */
    public $Strategy;

    /**
     * @var integer <p>置放群组的亲和度，在置放群组的实例会按该亲和度分布</p><p>取值范围：[1, 10]</p><p>默认值：1</p>
     */
    public $Affinity;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @var string <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
     */
    public $ClientToken;

    /**
     * @param string $Name <p>置放群组名称</p><p>入参限制：长度1-60个字符，支持中、英文</p>
     * @param string $Type <p>置放群组类型</p><p>枚举值：</p><ul><li>HOST： 物理机</li></ul><p>默认值：HOST</p><p>当前仅支持物理机类型</p>
     * @param string $Strategy <p>置放群组策略</p><p>入参限制：当前仅支持分散置放群组</p><p>枚举值：</p><ul><li>SPREAD： 分散置放群组</li></ul><p>默认值：SPREAD</p>
     * @param integer $Affinity <p>置放群组的亲和度，在置放群组的实例会按该亲和度分布</p><p>取值范围：[1, 10]</p><p>默认值：1</p>
     * @param array $Tags <p>标签</p>
     * @param string $ClientToken <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("Affinity",$param) and $param["Affinity"] !== null) {
            $this->Affinity = $param["Affinity"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
