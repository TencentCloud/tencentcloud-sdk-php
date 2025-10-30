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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBatchModifyTagsStatus返回参数结构体
 *
 * @method array getFailedResources() 获取失败资源列表
 * @method void setFailedResources(array $FailedResources) 设置失败资源列表
 * @method string getStatus() 获取任务状态：
- running 运行中
- failed 失败
- done 成功
 * @method void setStatus(string $Status) 设置任务状态：
- running 运行中
- failed 失败
- done 成功
 * @method boolean getSyncSubresource() 获取是否同步集群内子资源标签
 * @method void setSyncSubresource(boolean $SyncSubresource) 设置是否同步集群内子资源标签
 * @method array getTags() 获取集群标签
 * @method void setTags(array $Tags) 设置集群标签
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBatchModifyTagsStatusResponse extends AbstractModel
{
    /**
     * @var array 失败资源列表
     */
    public $FailedResources;

    /**
     * @var string 任务状态：
- running 运行中
- failed 失败
- done 成功
     */
    public $Status;

    /**
     * @var boolean 是否同步集群内子资源标签
     */
    public $SyncSubresource;

    /**
     * @var array 集群标签
     */
    public $Tags;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $FailedResources 失败资源列表
     * @param string $Status 任务状态：
- running 运行中
- failed 失败
- done 成功
     * @param boolean $SyncSubresource 是否同步集群内子资源标签
     * @param array $Tags 集群标签
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
        if (array_key_exists("FailedResources",$param) and $param["FailedResources"] !== null) {
            $this->FailedResources = [];
            foreach ($param["FailedResources"] as $key => $value){
                $obj = new FailedResource();
                $obj->deserialize($value);
                array_push($this->FailedResources, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SyncSubresource",$param) and $param["SyncSubresource"] !== null) {
            $this->SyncSubresource = $param["SyncSubresource"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
