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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryClientNodeMountCommand请求参数结构体
 *
 * @method string getClusterId() 获取客户端集群ID
 * @method void setClusterId(string $ClusterId) 设置客户端集群ID
 * @method array getClusterMountInfo() 获取集群挂载信息
 * @method void setClusterMountInfo(array $ClusterMountInfo) 设置集群挂载信息
 * @method string getFileSystemId() 获取文件系统id
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统id
 */
class QueryClientNodeMountCommandRequest extends AbstractModel
{
    /**
     * @var string 客户端集群ID
     */
    public $ClusterId;

    /**
     * @var array 集群挂载信息
     */
    public $ClusterMountInfo;

    /**
     * @var string 文件系统id
     */
    public $FileSystemId;

    /**
     * @param string $ClusterId 客户端集群ID
     * @param array $ClusterMountInfo 集群挂载信息
     * @param string $FileSystemId 文件系统id
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterMountInfo",$param) and $param["ClusterMountInfo"] !== null) {
            $this->ClusterMountInfo = [];
            foreach ($param["ClusterMountInfo"] as $key => $value){
                $obj = new ClusterMountAttr();
                $obj->deserialize($value);
                array_push($this->ClusterMountInfo, $obj);
            }
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }
    }
}
