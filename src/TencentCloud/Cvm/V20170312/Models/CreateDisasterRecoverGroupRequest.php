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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDisasterRecoverGroup请求参数结构体
 *
 * @method string getName() 获取<p>分散置放群组名称，长度1-60个字符，支持中、英文。</p>
 * @method void setName(string $Name) 设置<p>分散置放群组名称，长度1-60个字符，支持中、英文。</p>
 * @method string getType() 获取<p>分散置放群组类型，取值范围：<br><li>HOST：物理机</li><li>SW：交换机</li><li>RACK：机架</li></p>
 * @method void setType(string $Type) 设置<p>分散置放群组类型，取值范围：<br><li>HOST：物理机</li><li>SW：交换机</li><li>RACK：机架</li></p>
 * @method string getClientToken() 获取<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。<br>更多详细信息请参阅：如何保证幂等性。</p>
 * @method void setClientToken(string $ClientToken) 设置<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。<br>更多详细信息请参阅：如何保证幂等性。</p>
 * @method integer getAffinity() 获取<p>置放群组的亲和度，在置放群组的实例会按该亲和度分布，亲和度的取值范围是：1-10，默认为1</p>
 * @method void setAffinity(integer $Affinity) 设置<p>置放群组的亲和度，在置放群组的实例会按该亲和度分布，亲和度的取值范围是：1-10，默认为1</p>
 * @method string getStrategy() 获取<p>置放群组类型，当前支持两种，分散置放群组和分区置放群组(灰度中)，取值范围：PARTITION：分区置放群组，SPREAD：分散置放群组，不传该值默认是分散置放群组。</p>
 * @method void setStrategy(string $Strategy) 设置<p>置放群组类型，当前支持两种，分散置放群组和分区置放群组(灰度中)，取值范围：PARTITION：分区置放群组，SPREAD：分散置放群组，不传该值默认是分散置放群组。</p>
 * @method integer getPartitionCount() 获取<p>分区置放群组的分区数量，取值范围：2-30，当置放群组类型是分区置放群组时传入(分区置放群组功能灰度中)。</p>
 * @method void setPartitionCount(integer $PartitionCount) 设置<p>分区置放群组的分区数量，取值范围：2-30，当置放群组类型是分区置放群组时传入(分区置放群组功能灰度中)。</p>
 * @method array getTagSpecification() 获取<p>标签描述列表。通过指定该参数可以绑定标签到置放群组。</p>
 * @method void setTagSpecification(array $TagSpecification) 设置<p>标签描述列表。通过指定该参数可以绑定标签到置放群组。</p>
 */
class CreateDisasterRecoverGroupRequest extends AbstractModel
{
    /**
     * @var string <p>分散置放群组名称，长度1-60个字符，支持中、英文。</p>
     */
    public $Name;

    /**
     * @var string <p>分散置放群组类型，取值范围：<br><li>HOST：物理机</li><li>SW：交换机</li><li>RACK：机架</li></p>
     */
    public $Type;

    /**
     * @var string <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。<br>更多详细信息请参阅：如何保证幂等性。</p>
     */
    public $ClientToken;

    /**
     * @var integer <p>置放群组的亲和度，在置放群组的实例会按该亲和度分布，亲和度的取值范围是：1-10，默认为1</p>
     */
    public $Affinity;

    /**
     * @var string <p>置放群组类型，当前支持两种，分散置放群组和分区置放群组(灰度中)，取值范围：PARTITION：分区置放群组，SPREAD：分散置放群组，不传该值默认是分散置放群组。</p>
     */
    public $Strategy;

    /**
     * @var integer <p>分区置放群组的分区数量，取值范围：2-30，当置放群组类型是分区置放群组时传入(分区置放群组功能灰度中)。</p>
     */
    public $PartitionCount;

    /**
     * @var array <p>标签描述列表。通过指定该参数可以绑定标签到置放群组。</p>
     */
    public $TagSpecification;

    /**
     * @param string $Name <p>分散置放群组名称，长度1-60个字符，支持中、英文。</p>
     * @param string $Type <p>分散置放群组类型，取值范围：<br><li>HOST：物理机</li><li>SW：交换机</li><li>RACK：机架</li></p>
     * @param string $ClientToken <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。<br>更多详细信息请参阅：如何保证幂等性。</p>
     * @param integer $Affinity <p>置放群组的亲和度，在置放群组的实例会按该亲和度分布，亲和度的取值范围是：1-10，默认为1</p>
     * @param string $Strategy <p>置放群组类型，当前支持两种，分散置放群组和分区置放群组(灰度中)，取值范围：PARTITION：分区置放群组，SPREAD：分散置放群组，不传该值默认是分散置放群组。</p>
     * @param integer $PartitionCount <p>分区置放群组的分区数量，取值范围：2-30，当置放群组类型是分区置放群组时传入(分区置放群组功能灰度中)。</p>
     * @param array $TagSpecification <p>标签描述列表。通过指定该参数可以绑定标签到置放群组。</p>
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

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("Affinity",$param) and $param["Affinity"] !== null) {
            $this->Affinity = $param["Affinity"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }
    }
}
