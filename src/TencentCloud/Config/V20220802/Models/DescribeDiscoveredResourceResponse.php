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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDiscoveredResource返回参数结构体
 *
 * @method string getResourceId() 获取资源Id
 * @method void setResourceId(string $ResourceId) 设置资源Id
 * @method string getResourceType() 获取资源类型
 * @method void setResourceType(string $ResourceType) 设置资源类型
 * @method string getResourceName() 获取资源名
 * @method void setResourceName(string $ResourceName) 设置资源名
 * @method string getResourceRegion() 获取资源地域
 * @method void setResourceRegion(string $ResourceRegion) 设置资源地域
 * @method string getResourceZone() 获取资源可用区
 * @method void setResourceZone(string $ResourceZone) 设置资源可用区
 * @method string getConfiguration() 获取资源配置
 * @method void setConfiguration(string $Configuration) 设置资源配置
 * @method string getResourceCreateTime() 获取资源创建时间
 * @method void setResourceCreateTime(string $ResourceCreateTime) 设置资源创建时间
 * @method array getTags() 获取资源标签
 * @method void setTags(array $Tags) 设置资源标签
 * @method string getUpdateTime() 获取资源更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置资源更新时间
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDiscoveredResourceResponse extends AbstractModel
{
    /**
     * @var string 资源Id
     */
    public $ResourceId;

    /**
     * @var string 资源类型
     */
    public $ResourceType;

    /**
     * @var string 资源名
     */
    public $ResourceName;

    /**
     * @var string 资源地域
     */
    public $ResourceRegion;

    /**
     * @var string 资源可用区
     */
    public $ResourceZone;

    /**
     * @var string 资源配置
     */
    public $Configuration;

    /**
     * @var string 资源创建时间
     */
    public $ResourceCreateTime;

    /**
     * @var array 资源标签
     */
    public $Tags;

    /**
     * @var string 资源更新时间
     */
    public $UpdateTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ResourceId 资源Id
     * @param string $ResourceType 资源类型
     * @param string $ResourceName 资源名
     * @param string $ResourceRegion 资源地域
     * @param string $ResourceZone 资源可用区
     * @param string $Configuration 资源配置
     * @param string $ResourceCreateTime 资源创建时间
     * @param array $Tags 资源标签
     * @param string $UpdateTime 资源更新时间
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourceZone",$param) and $param["ResourceZone"] !== null) {
            $this->ResourceZone = $param["ResourceZone"];
        }

        if (array_key_exists("Configuration",$param) and $param["Configuration"] !== null) {
            $this->Configuration = $param["Configuration"];
        }

        if (array_key_exists("ResourceCreateTime",$param) and $param["ResourceCreateTime"] !== null) {
            $this->ResourceCreateTime = $param["ResourceCreateTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
