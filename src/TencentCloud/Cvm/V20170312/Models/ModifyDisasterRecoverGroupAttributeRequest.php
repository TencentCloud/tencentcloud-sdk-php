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
 * ModifyDisasterRecoverGroupAttribute请求参数结构体
 *
 * @method string getDisasterRecoverGroupId() 获取<p>分散置放群组ID，可使用<a href="https://cloud.tencent.com/document/api/213/17810">DescribeDisasterRecoverGroups</a>接口获取。</p>
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) 设置<p>分散置放群组ID，可使用<a href="https://cloud.tencent.com/document/api/213/17810">DescribeDisasterRecoverGroups</a>接口获取。</p>
 * @method string getName() 获取<p>分散置放群组名称，长度1-60个字符，支持中、英文。</p>
 * @method void setName(string $Name) 设置<p>分散置放群组名称，长度1-60个字符，支持中、英文。</p>
 * @method integer getAffinity() 获取<p>分散置放群组的亲和度，在置放群组的实例会按该亲和度分布，亲和度的取值范围是：1-10。</p><p>取值范围：[1, 10]</p><p>调整只能从小调到大，不能从大调到小</p>
 * @method void setAffinity(integer $Affinity) 设置<p>分散置放群组的亲和度，在置放群组的实例会按该亲和度分布，亲和度的取值范围是：1-10。</p><p>取值范围：[1, 10]</p><p>调整只能从小调到大，不能从大调到小</p>
 */
class ModifyDisasterRecoverGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string <p>分散置放群组ID，可使用<a href="https://cloud.tencent.com/document/api/213/17810">DescribeDisasterRecoverGroups</a>接口获取。</p>
     */
    public $DisasterRecoverGroupId;

    /**
     * @var string <p>分散置放群组名称，长度1-60个字符，支持中、英文。</p>
     */
    public $Name;

    /**
     * @var integer <p>分散置放群组的亲和度，在置放群组的实例会按该亲和度分布，亲和度的取值范围是：1-10。</p><p>取值范围：[1, 10]</p><p>调整只能从小调到大，不能从大调到小</p>
     */
    public $Affinity;

    /**
     * @param string $DisasterRecoverGroupId <p>分散置放群组ID，可使用<a href="https://cloud.tencent.com/document/api/213/17810">DescribeDisasterRecoverGroups</a>接口获取。</p>
     * @param string $Name <p>分散置放群组名称，长度1-60个字符，支持中、英文。</p>
     * @param integer $Affinity <p>分散置放群组的亲和度，在置放群组的实例会按该亲和度分布，亲和度的取值范围是：1-10。</p><p>取值范围：[1, 10]</p><p>调整只能从小调到大，不能从大调到小</p>
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
        if (array_key_exists("DisasterRecoverGroupId",$param) and $param["DisasterRecoverGroupId"] !== null) {
            $this->DisasterRecoverGroupId = $param["DisasterRecoverGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Affinity",$param) and $param["Affinity"] !== null) {
            $this->Affinity = $param["Affinity"];
        }
    }
}
