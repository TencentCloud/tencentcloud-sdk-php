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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DB Custom 节点数据盘信息。
 *
 * @method string getDiskType() 获取<p>磁盘类型</p><p>枚举值：</p><ul><li>CLOUD_HSSD： 增强型云硬盘</li><li>LOCAL_NVME： 本地硬盘</li></ul>
 * @method void setDiskType(string $DiskType) 设置<p>磁盘类型</p><p>枚举值：</p><ul><li>CLOUD_HSSD： 增强型云硬盘</li><li>LOCAL_NVME： 本地硬盘</li></ul>
 * @method integer getDiskSize() 获取<p>磁盘大小</p><p>单位：GiB</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>磁盘大小</p><p>单位：GiB</p>
 * @method string getDiskName() 获取<p>磁盘名称</p><p>DataDisk 作为输入参数时，DiskName 无效。</p>
 * @method void setDiskName(string $DiskName) 设置<p>磁盘名称</p><p>DataDisk 作为输入参数时，DiskName 无效。</p>
 * @method boolean getEncrypt() 获取<p>数据盘是否加密</p><p>枚举值：</p><ul><li>false： 不加密</li><li>true： 加密</li></ul>
 * @method void setEncrypt(boolean $Encrypt) 设置<p>数据盘是否加密</p><p>枚举值：</p><ul><li>false： 不加密</li><li>true： 加密</li></ul>
 * @method string getDiskId() 获取<p>磁盘ID</p><p>入参限制：该参数目前仅用于 DescribeDBCustomNodes 等查询类接口的返回参数，不可用于 CreateDBCustomNodes 等写接口的入参。</p>
 * @method void setDiskId(string $DiskId) 设置<p>磁盘ID</p><p>入参限制：该参数目前仅用于 DescribeDBCustomNodes 等查询类接口的返回参数，不可用于 CreateDBCustomNodes 等写接口的入参。</p>
 * @method string getSnapshotId() 获取<p>数据盘快照ID</p><p>入参限制：选择的数据盘快照大小需小于数据盘大小</p>
 * @method void setSnapshotId(string $SnapshotId) 设置<p>数据盘快照ID</p><p>入参限制：选择的数据盘快照大小需小于数据盘大小</p>
 * @method string getClientDiskKey() 获取<p>自定义的数据盘标识（如 data / log / backup）</p>
 * @method void setClientDiskKey(string $ClientDiskKey) 设置<p>自定义的数据盘标识（如 data / log / backup）</p>
 */
class DataDisk extends AbstractModel
{
    /**
     * @var string <p>磁盘类型</p><p>枚举值：</p><ul><li>CLOUD_HSSD： 增强型云硬盘</li><li>LOCAL_NVME： 本地硬盘</li></ul>
     */
    public $DiskType;

    /**
     * @var integer <p>磁盘大小</p><p>单位：GiB</p>
     */
    public $DiskSize;

    /**
     * @var string <p>磁盘名称</p><p>DataDisk 作为输入参数时，DiskName 无效。</p>
     */
    public $DiskName;

    /**
     * @var boolean <p>数据盘是否加密</p><p>枚举值：</p><ul><li>false： 不加密</li><li>true： 加密</li></ul>
     */
    public $Encrypt;

    /**
     * @var string <p>磁盘ID</p><p>入参限制：该参数目前仅用于 DescribeDBCustomNodes 等查询类接口的返回参数，不可用于 CreateDBCustomNodes 等写接口的入参。</p>
     */
    public $DiskId;

    /**
     * @var string <p>数据盘快照ID</p><p>入参限制：选择的数据盘快照大小需小于数据盘大小</p>
     */
    public $SnapshotId;

    /**
     * @var string <p>自定义的数据盘标识（如 data / log / backup）</p>
     */
    public $ClientDiskKey;

    /**
     * @param string $DiskType <p>磁盘类型</p><p>枚举值：</p><ul><li>CLOUD_HSSD： 增强型云硬盘</li><li>LOCAL_NVME： 本地硬盘</li></ul>
     * @param integer $DiskSize <p>磁盘大小</p><p>单位：GiB</p>
     * @param string $DiskName <p>磁盘名称</p><p>DataDisk 作为输入参数时，DiskName 无效。</p>
     * @param boolean $Encrypt <p>数据盘是否加密</p><p>枚举值：</p><ul><li>false： 不加密</li><li>true： 加密</li></ul>
     * @param string $DiskId <p>磁盘ID</p><p>入参限制：该参数目前仅用于 DescribeDBCustomNodes 等查询类接口的返回参数，不可用于 CreateDBCustomNodes 等写接口的入参。</p>
     * @param string $SnapshotId <p>数据盘快照ID</p><p>入参限制：选择的数据盘快照大小需小于数据盘大小</p>
     * @param string $ClientDiskKey <p>自定义的数据盘标识（如 data / log / backup）</p>
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
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("ClientDiskKey",$param) and $param["ClientDiskKey"] !== null) {
            $this->ClientDiskKey = $param["ClientDiskKey"];
        }
    }
}
