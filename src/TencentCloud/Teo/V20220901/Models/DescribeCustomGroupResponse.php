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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomGroup返回参数结构体
 *
 * @method string getGroupId() 获取<p>自定义组唯一标识 ID。</p>
 * @method void setGroupId(string $GroupId) 设置<p>自定义组唯一标识 ID。</p>
 * @method string getGroupName() 获取<p>自定义组名称。</p>
 * @method void setGroupName(string $GroupName) 设置<p>自定义组名称。</p>
 * @method string getGroupType() 获取<p>自定义组类型。</p><p>枚举值：</p><ul><li>TLSFingerprint： TLS 指纹组</li><li>UA： UA 组</li><li>Referer： Referer 组</li></ul>
 * @method void setGroupType(string $GroupType) 设置<p>自定义组类型。</p><p>枚举值：</p><ul><li>TLSFingerprint： TLS 指纹组</li><li>UA： UA 组</li><li>Referer： Referer 组</li></ul>
 * @method array getGroupItems() 获取<p>自定义组条目列表。</p>
 * @method void setGroupItems(array $GroupItems) 设置<p>自定义组条目列表。</p>
 * @method integer getGroupItemTotalCount() 获取<p>自定义组条目总数量。</p>
 * @method void setGroupItemTotalCount(integer $GroupItemTotalCount) 设置<p>自定义组条目总数量。</p>
 * @method integer getRefCount() 获取<p>自定义组被引用的次数。</p>
 * @method void setRefCount(integer $RefCount) 设置<p>自定义组被引用的次数。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCustomGroupResponse extends AbstractModel
{
    /**
     * @var string <p>自定义组唯一标识 ID。</p>
     */
    public $GroupId;

    /**
     * @var string <p>自定义组名称。</p>
     */
    public $GroupName;

    /**
     * @var string <p>自定义组类型。</p><p>枚举值：</p><ul><li>TLSFingerprint： TLS 指纹组</li><li>UA： UA 组</li><li>Referer： Referer 组</li></ul>
     */
    public $GroupType;

    /**
     * @var array <p>自定义组条目列表。</p>
     */
    public $GroupItems;

    /**
     * @var integer <p>自定义组条目总数量。</p>
     */
    public $GroupItemTotalCount;

    /**
     * @var integer <p>自定义组被引用的次数。</p>
     */
    public $RefCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $GroupId <p>自定义组唯一标识 ID。</p>
     * @param string $GroupName <p>自定义组名称。</p>
     * @param string $GroupType <p>自定义组类型。</p><p>枚举值：</p><ul><li>TLSFingerprint： TLS 指纹组</li><li>UA： UA 组</li><li>Referer： Referer 组</li></ul>
     * @param array $GroupItems <p>自定义组条目列表。</p>
     * @param integer $GroupItemTotalCount <p>自定义组条目总数量。</p>
     * @param integer $RefCount <p>自定义组被引用的次数。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("GroupItems",$param) and $param["GroupItems"] !== null) {
            $this->GroupItems = [];
            foreach ($param["GroupItems"] as $key => $value){
                $obj = new CustomGroupItem();
                $obj->deserialize($value);
                array_push($this->GroupItems, $obj);
            }
        }

        if (array_key_exists("GroupItemTotalCount",$param) and $param["GroupItemTotalCount"] !== null) {
            $this->GroupItemTotalCount = $param["GroupItemTotalCount"];
        }

        if (array_key_exists("RefCount",$param) and $param["RefCount"] !== null) {
            $this->RefCount = $param["RefCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
