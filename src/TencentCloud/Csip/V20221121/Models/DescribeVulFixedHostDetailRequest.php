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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulFixedHostDetail请求参数结构体
 *
 * @method integer getVulId() 获取<p>漏洞ID</p>
 * @method void setVulId(integer $VulId) 设置<p>漏洞ID</p>
 * @method string getInstanceId() 获取<p>主机实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>主机实例ID</p>
 * @method integer getOffset() 获取<p>分页偏移量，用于关联组件&amp;路径列表分页<br>取值范围：[0, +∞)<br>默认值：0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，用于关联组件&amp;路径列表分页<br>取值范围：[0, +∞)<br>默认值：0</p>
 * @method integer getLimit() 获取<p>每页返回数量，用于关联组件&amp;路径列表分页<br>取值范围：[1, 100]<br>默认值：10</p>
 * @method void setLimit(integer $Limit) 设置<p>每页返回数量，用于关联组件&amp;路径列表分页<br>取值范围：[1, 100]<br>默认值：10</p>
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 */
class DescribeVulFixedHostDetailRequest extends AbstractModel
{
    /**
     * @var integer <p>漏洞ID</p>
     */
    public $VulId;

    /**
     * @var string <p>主机实例ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>分页偏移量，用于关联组件&amp;路径列表分页<br>取值范围：[0, +∞)<br>默认值：0</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页返回数量，用于关联组件&amp;路径列表分页<br>取值范围：[1, 100]<br>默认值：10</p>
     */
    public $Limit;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @param integer $VulId <p>漏洞ID</p>
     * @param string $InstanceId <p>主机实例ID</p>
     * @param integer $Offset <p>分页偏移量，用于关联组件&amp;路径列表分页<br>取值范围：[0, +∞)<br>默认值：0</p>
     * @param integer $Limit <p>每页返回数量，用于关联组件&amp;路径列表分页<br>取值范围：[1, 100]<br>默认值：10</p>
     * @param array $MemberId 集团账号的成员id
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
