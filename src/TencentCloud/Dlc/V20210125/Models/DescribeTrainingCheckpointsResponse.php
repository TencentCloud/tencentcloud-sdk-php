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
 * DescribeTrainingCheckpoints返回参数结构体
 *
 * @method array getItems() 获取<p>当前层级文件/目录列表</p>
 * @method void setItems(array $Items) 设置<p>当前层级文件/目录列表</p>
 * @method string getMountPath() 获取<p>当前挂载路径</p>
 * @method void setMountPath(string $MountPath) 设置<p>当前挂载路径</p>
 * @method string getSubPath() 获取<p>当前浏览的子路径</p>
 * @method void setSubPath(string $SubPath) 设置<p>当前浏览的子路径</p>
 * @method string getStorageType() 获取<p>存储类型：COS / CFS / CFS_TURBO / GOOSEFS</p>
 * @method void setStorageType(string $StorageType) 设置<p>存储类型：COS / CFS / CFS_TURBO / GOOSEFS</p>
 * @method string getStoragePath() 获取<p>存储路径（COS 桶路径或 CFS/GooseFSx 挂载路径）</p>
 * @method void setStoragePath(string $StoragePath) 设置<p>存储路径（COS 桶路径或 CFS/GooseFSx 挂载路径）</p>
 * @method string getMessage() 获取<p>错误或提示信息（仅在请求异常时有值）</p>
 * @method void setMessage(string $Message) 设置<p>错误或提示信息（仅在请求异常时有值）</p>
 * @method integer getSnapshotTimestamp() 获取<p>快照时间戳（仅 CFS/GooseFSx 存储时有值）</p>
 * @method void setSnapshotTimestamp(integer $SnapshotTimestamp) 设置<p>快照时间戳（仅 CFS/GooseFSx 存储时有值）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTrainingCheckpointsResponse extends AbstractModel
{
    /**
     * @var array <p>当前层级文件/目录列表</p>
     */
    public $Items;

    /**
     * @var string <p>当前挂载路径</p>
     */
    public $MountPath;

    /**
     * @var string <p>当前浏览的子路径</p>
     */
    public $SubPath;

    /**
     * @var string <p>存储类型：COS / CFS / CFS_TURBO / GOOSEFS</p>
     */
    public $StorageType;

    /**
     * @var string <p>存储路径（COS 桶路径或 CFS/GooseFSx 挂载路径）</p>
     */
    public $StoragePath;

    /**
     * @var string <p>错误或提示信息（仅在请求异常时有值）</p>
     */
    public $Message;

    /**
     * @var integer <p>快照时间戳（仅 CFS/GooseFSx 存储时有值）</p>
     */
    public $SnapshotTimestamp;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Items <p>当前层级文件/目录列表</p>
     * @param string $MountPath <p>当前挂载路径</p>
     * @param string $SubPath <p>当前浏览的子路径</p>
     * @param string $StorageType <p>存储类型：COS / CFS / CFS_TURBO / GOOSEFS</p>
     * @param string $StoragePath <p>存储路径（COS 桶路径或 CFS/GooseFSx 挂载路径）</p>
     * @param string $Message <p>错误或提示信息（仅在请求异常时有值）</p>
     * @param integer $SnapshotTimestamp <p>快照时间戳（仅 CFS/GooseFSx 存储时有值）</p>
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new SharedMountFileItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("MountPath",$param) and $param["MountPath"] !== null) {
            $this->MountPath = $param["MountPath"];
        }

        if (array_key_exists("SubPath",$param) and $param["SubPath"] !== null) {
            $this->SubPath = $param["SubPath"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("StoragePath",$param) and $param["StoragePath"] !== null) {
            $this->StoragePath = $param["StoragePath"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("SnapshotTimestamp",$param) and $param["SnapshotTimestamp"] !== null) {
            $this->SnapshotTimestamp = $param["SnapshotTimestamp"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
