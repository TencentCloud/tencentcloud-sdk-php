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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSnapshot请求参数结构体
 *
 * @method string getDiskId() 获取<p>需要创建快照的云硬盘ID，可通过<a href="/document/product/362/16315">DescribeDisks</a>接口查询。</p>
 * @method void setDiskId(string $DiskId) 设置<p>需要创建快照的云硬盘ID，可通过<a href="/document/product/362/16315">DescribeDisks</a>接口查询。</p>
 * @method string getSnapshotName() 获取<p>快照名称，不传则新快照名称默认为“未命名”。</p>
 * @method void setSnapshotName(string $SnapshotName) 设置<p>快照名称，不传则新快照名称默认为“未命名”。</p>
 * @method string getDeadline() 获取<p>快照的到期时间，到期后该快照将会自动删除，需要传入UTC时间下的ISO-8601标准时间格式，例如:2022-01-08T09:47:55+00:00。到期时间最小可设置为一天后的当前时间。</p>
 * @method void setDeadline(string $Deadline) 设置<p>快照的到期时间，到期后该快照将会自动删除，需要传入UTC时间下的ISO-8601标准时间格式，例如:2022-01-08T09:47:55+00:00。到期时间最小可设置为一天后的当前时间。</p>
 * @method string getDiskBackupId() 获取<p>云硬盘备份点ID。传入此参数时，将通过备份点创建快照。备份点 ID 可以通过<a href="/document/product/362/80278">DescribeDiskBackups</a>接口查询。</p>
 * @method void setDiskBackupId(string $DiskBackupId) 设置<p>云硬盘备份点ID。传入此参数时，将通过备份点创建快照。备份点 ID 可以通过<a href="/document/product/362/80278">DescribeDiskBackups</a>接口查询。</p>
 * @method array getTags() 获取<p>快照绑定的标签。</p>
 * @method void setTags(array $Tags) 设置<p>快照绑定的标签。</p>
 * @method boolean getLocalSnap() 获取<p>是否创建极速快照。</p><p>极速快照数据存储在云硬盘所在的存储集群上，可实现秒级创建和回滚。该功能当前通过白名单控制开放。</p>
 * @method void setLocalSnap(boolean $LocalSnap) 设置<p>是否创建极速快照。</p><p>极速快照数据存储在云硬盘所在的存储集群上，可实现秒级创建和回滚。该功能当前通过白名单控制开放。</p>
 * @method string getDiskUsage() 获取<p>快照关联云硬盘类型, SYSTEM_DISK: 系统盘, DATA_DISK: 数据盘,非必填参数，不填时快照类型与云盘类型保持一致， 该参数基于某些场景用户需要将系统盘创建出数据盘快照共享使用。</p>
 * @method void setDiskUsage(string $DiskUsage) 设置<p>快照关联云硬盘类型, SYSTEM_DISK: 系统盘, DATA_DISK: 数据盘,非必填参数，不填时快照类型与云盘类型保持一致， 该参数基于某些场景用户需要将系统盘创建出数据盘快照共享使用。</p>
 */
class CreateSnapshotRequest extends AbstractModel
{
    /**
     * @var string <p>需要创建快照的云硬盘ID，可通过<a href="/document/product/362/16315">DescribeDisks</a>接口查询。</p>
     */
    public $DiskId;

    /**
     * @var string <p>快照名称，不传则新快照名称默认为“未命名”。</p>
     */
    public $SnapshotName;

    /**
     * @var string <p>快照的到期时间，到期后该快照将会自动删除，需要传入UTC时间下的ISO-8601标准时间格式，例如:2022-01-08T09:47:55+00:00。到期时间最小可设置为一天后的当前时间。</p>
     */
    public $Deadline;

    /**
     * @var string <p>云硬盘备份点ID。传入此参数时，将通过备份点创建快照。备份点 ID 可以通过<a href="/document/product/362/80278">DescribeDiskBackups</a>接口查询。</p>
     */
    public $DiskBackupId;

    /**
     * @var array <p>快照绑定的标签。</p>
     */
    public $Tags;

    /**
     * @var boolean <p>是否创建极速快照。</p><p>极速快照数据存储在云硬盘所在的存储集群上，可实现秒级创建和回滚。该功能当前通过白名单控制开放。</p>
     */
    public $LocalSnap;

    /**
     * @var string <p>快照关联云硬盘类型, SYSTEM_DISK: 系统盘, DATA_DISK: 数据盘,非必填参数，不填时快照类型与云盘类型保持一致， 该参数基于某些场景用户需要将系统盘创建出数据盘快照共享使用。</p>
     */
    public $DiskUsage;

    /**
     * @param string $DiskId <p>需要创建快照的云硬盘ID，可通过<a href="/document/product/362/16315">DescribeDisks</a>接口查询。</p>
     * @param string $SnapshotName <p>快照名称，不传则新快照名称默认为“未命名”。</p>
     * @param string $Deadline <p>快照的到期时间，到期后该快照将会自动删除，需要传入UTC时间下的ISO-8601标准时间格式，例如:2022-01-08T09:47:55+00:00。到期时间最小可设置为一天后的当前时间。</p>
     * @param string $DiskBackupId <p>云硬盘备份点ID。传入此参数时，将通过备份点创建快照。备份点 ID 可以通过<a href="/document/product/362/80278">DescribeDiskBackups</a>接口查询。</p>
     * @param array $Tags <p>快照绑定的标签。</p>
     * @param boolean $LocalSnap <p>是否创建极速快照。</p><p>极速快照数据存储在云硬盘所在的存储集群上，可实现秒级创建和回滚。该功能当前通过白名单控制开放。</p>
     * @param string $DiskUsage <p>快照关联云硬盘类型, SYSTEM_DISK: 系统盘, DATA_DISK: 数据盘,非必填参数，不填时快照类型与云盘类型保持一致， 该参数基于某些场景用户需要将系统盘创建出数据盘快照共享使用。</p>
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
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("DiskBackupId",$param) and $param["DiskBackupId"] !== null) {
            $this->DiskBackupId = $param["DiskBackupId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("LocalSnap",$param) and $param["LocalSnap"] !== null) {
            $this->LocalSnap = $param["LocalSnap"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }
    }
}
