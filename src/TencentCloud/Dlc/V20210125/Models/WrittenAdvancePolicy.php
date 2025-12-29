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
 * Smart Optimizer高级参数配置数据结构
 *
 * @method string getCompactEnable() 获取是否启用合并
 * @method void setCompactEnable(string $CompactEnable) 设置是否启用合并
 * @method string getDeleteEnable() 获取是否启用历史数据清理
 * @method void setDeleteEnable(string $DeleteEnable) 设置是否启用历史数据清理
 * @method integer getMinInputFiles() 获取合并最新文件数量
 * @method void setMinInputFiles(integer $MinInputFiles) 设置合并最新文件数量
 * @method integer getTargetFileSizeBytes() 获取合并文件目录文件大小
 * @method void setTargetFileSizeBytes(integer $TargetFileSizeBytes) 设置合并文件目录文件大小
 * @method integer getRetainLast() 获取保留过期时间的快照数量
 * @method void setRetainLast(integer $RetainLast) 设置保留过期时间的快照数量
 * @method integer getBeforeDays() 获取快照过期时间
 * @method void setBeforeDays(integer $BeforeDays) 设置快照过期时间
 * @method integer getExpiredSnapshotsIntervalMin() 获取快照过期执行周期
 * @method void setExpiredSnapshotsIntervalMin(integer $ExpiredSnapshotsIntervalMin) 设置快照过期执行周期
 * @method integer getRemoveOrphanIntervalMin() 获取移除孤立文件执行周期
 * @method void setRemoveOrphanIntervalMin(integer $RemoveOrphanIntervalMin) 设置移除孤立文件执行周期
 * @method string getCowCompactEnable() 获取是否开启COW表合并
 * @method void setCowCompactEnable(string $CowCompactEnable) 设置是否开启COW表合并
 * @method string getCompactStrategy() 获取文件合并策略
 * @method void setCompactStrategy(string $CompactStrategy) 设置文件合并策略
 * @method array getSortOrders() 获取sort合并策略的规则定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSortOrders(array $SortOrders) 设置sort合并策略的规则定义
注意：此字段可能返回 null，表示取不到有效值。
 */
class WrittenAdvancePolicy extends AbstractModel
{
    /**
     * @var string 是否启用合并
     */
    public $CompactEnable;

    /**
     * @var string 是否启用历史数据清理
     */
    public $DeleteEnable;

    /**
     * @var integer 合并最新文件数量
     */
    public $MinInputFiles;

    /**
     * @var integer 合并文件目录文件大小
     */
    public $TargetFileSizeBytes;

    /**
     * @var integer 保留过期时间的快照数量
     */
    public $RetainLast;

    /**
     * @var integer 快照过期时间
     */
    public $BeforeDays;

    /**
     * @var integer 快照过期执行周期
     */
    public $ExpiredSnapshotsIntervalMin;

    /**
     * @var integer 移除孤立文件执行周期
     */
    public $RemoveOrphanIntervalMin;

    /**
     * @var string 是否开启COW表合并
     */
    public $CowCompactEnable;

    /**
     * @var string 文件合并策略
     */
    public $CompactStrategy;

    /**
     * @var array sort合并策略的规则定义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SortOrders;

    /**
     * @param string $CompactEnable 是否启用合并
     * @param string $DeleteEnable 是否启用历史数据清理
     * @param integer $MinInputFiles 合并最新文件数量
     * @param integer $TargetFileSizeBytes 合并文件目录文件大小
     * @param integer $RetainLast 保留过期时间的快照数量
     * @param integer $BeforeDays 快照过期时间
     * @param integer $ExpiredSnapshotsIntervalMin 快照过期执行周期
     * @param integer $RemoveOrphanIntervalMin 移除孤立文件执行周期
     * @param string $CowCompactEnable 是否开启COW表合并
     * @param string $CompactStrategy 文件合并策略
     * @param array $SortOrders sort合并策略的规则定义
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("CompactEnable",$param) and $param["CompactEnable"] !== null) {
            $this->CompactEnable = $param["CompactEnable"];
        }

        if (array_key_exists("DeleteEnable",$param) and $param["DeleteEnable"] !== null) {
            $this->DeleteEnable = $param["DeleteEnable"];
        }

        if (array_key_exists("MinInputFiles",$param) and $param["MinInputFiles"] !== null) {
            $this->MinInputFiles = $param["MinInputFiles"];
        }

        if (array_key_exists("TargetFileSizeBytes",$param) and $param["TargetFileSizeBytes"] !== null) {
            $this->TargetFileSizeBytes = $param["TargetFileSizeBytes"];
        }

        if (array_key_exists("RetainLast",$param) and $param["RetainLast"] !== null) {
            $this->RetainLast = $param["RetainLast"];
        }

        if (array_key_exists("BeforeDays",$param) and $param["BeforeDays"] !== null) {
            $this->BeforeDays = $param["BeforeDays"];
        }

        if (array_key_exists("ExpiredSnapshotsIntervalMin",$param) and $param["ExpiredSnapshotsIntervalMin"] !== null) {
            $this->ExpiredSnapshotsIntervalMin = $param["ExpiredSnapshotsIntervalMin"];
        }

        if (array_key_exists("RemoveOrphanIntervalMin",$param) and $param["RemoveOrphanIntervalMin"] !== null) {
            $this->RemoveOrphanIntervalMin = $param["RemoveOrphanIntervalMin"];
        }

        if (array_key_exists("CowCompactEnable",$param) and $param["CowCompactEnable"] !== null) {
            $this->CowCompactEnable = $param["CowCompactEnable"];
        }

        if (array_key_exists("CompactStrategy",$param) and $param["CompactStrategy"] !== null) {
            $this->CompactStrategy = $param["CompactStrategy"];
        }

        if (array_key_exists("SortOrders",$param) and $param["SortOrders"] !== null) {
            $this->SortOrders = [];
            foreach ($param["SortOrders"] as $key => $value){
                $obj = new SortOrder();
                $obj->deserialize($value);
                array_push($this->SortOrders, $obj);
            }
        }
    }
}
