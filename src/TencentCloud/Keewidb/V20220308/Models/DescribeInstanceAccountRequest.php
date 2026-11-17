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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceAccount请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID。</p>
 * @method integer getLimit() 获取<p>分页大小。</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 * @method void setLimit(integer $Limit) 设置<p>分页大小。</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 * @method integer getOffset() 获取<p>分页偏移量。</p><p>默认值：0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量。</p><p>默认值：0</p>
 */
class DescribeInstanceAccountRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>分页大小。</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移量。</p><p>默认值：0</p>
     */
    public $Offset;

    /**
     * @param string $InstanceId <p>实例ID。</p>
     * @param integer $Limit <p>分页大小。</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
     * @param integer $Offset <p>分页偏移量。</p><p>默认值：0</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
