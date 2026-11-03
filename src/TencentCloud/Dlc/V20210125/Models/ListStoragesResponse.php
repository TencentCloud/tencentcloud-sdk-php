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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListStorages返回参数结构体
 *
 * @method array getCFSFileSystems() 获取<p>CFS列表</p>
 * @method void setCFSFileSystems(array $CFSFileSystems) 设置<p>CFS列表</p>
 * @method array getCOSBuckets() 获取<p>COS列表</p>
 * @method void setCOSBuckets(array $COSBuckets) 设置<p>COS列表</p>
 * @method array getCFSTurboFileSystems() 获取<p>CFS Turbo 文件系统列表</p>
 * @method void setCFSTurboFileSystems(array $CFSTurboFileSystems) 设置<p>CFS Turbo 文件系统列表</p>
 * @method array getGooseFSClusters() 获取<p>GooseFS 集群列表（状态为 ACTIVE 的可用集群）</p>
 * @method void setGooseFSClusters(array $GooseFSClusters) 设置<p>GooseFS 集群列表（状态为 ACTIVE 的可用集群）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ListStoragesResponse extends AbstractModel
{
    /**
     * @var array <p>CFS列表</p>
     */
    public $CFSFileSystems;

    /**
     * @var array <p>COS列表</p>
     */
    public $COSBuckets;

    /**
     * @var array <p>CFS Turbo 文件系统列表</p>
     */
    public $CFSTurboFileSystems;

    /**
     * @var array <p>GooseFS 集群列表（状态为 ACTIVE 的可用集群）</p>
     */
    public $GooseFSClusters;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $CFSFileSystems <p>CFS列表</p>
     * @param array $COSBuckets <p>COS列表</p>
     * @param array $CFSTurboFileSystems <p>CFS Turbo 文件系统列表</p>
     * @param array $GooseFSClusters <p>GooseFS 集群列表（状态为 ACTIVE 的可用集群）</p>
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
        if (array_key_exists("CFSFileSystems",$param) and $param["CFSFileSystems"] !== null) {
            $this->CFSFileSystems = [];
            foreach ($param["CFSFileSystems"] as $key => $value){
                $obj = new CFSFileSystemInfo();
                $obj->deserialize($value);
                array_push($this->CFSFileSystems, $obj);
            }
        }

        if (array_key_exists("COSBuckets",$param) and $param["COSBuckets"] !== null) {
            $this->COSBuckets = [];
            foreach ($param["COSBuckets"] as $key => $value){
                $obj = new COSBucketInfo();
                $obj->deserialize($value);
                array_push($this->COSBuckets, $obj);
            }
        }

        if (array_key_exists("CFSTurboFileSystems",$param) and $param["CFSTurboFileSystems"] !== null) {
            $this->CFSTurboFileSystems = [];
            foreach ($param["CFSTurboFileSystems"] as $key => $value){
                $obj = new CFSTurboFileSystemInfo();
                $obj->deserialize($value);
                array_push($this->CFSTurboFileSystems, $obj);
            }
        }

        if (array_key_exists("GooseFSClusters",$param) and $param["GooseFSClusters"] !== null) {
            $this->GooseFSClusters = [];
            foreach ($param["GooseFSClusters"] as $key => $value){
                $obj = new GooseFSClustersInfo();
                $obj->deserialize($value);
                array_push($this->GooseFSClusters, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
