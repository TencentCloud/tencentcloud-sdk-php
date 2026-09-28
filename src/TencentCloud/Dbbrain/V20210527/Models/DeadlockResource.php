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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 死锁涉及的锁资源节点。Owners（持有边）+ Waiters（等待边）与 Transactions[].Processes[] 关联，构成完整死锁环。
 *
 * @method string getIndexName() 获取<p>锁资源对应的索引名。keylock/ridlock 尤为重要，可判断索引设计是否合理。</p>
 * @method void setIndexName(string $IndexName) 设置<p>锁资源对应的索引名。keylock/ridlock 尤为重要，可判断索引设计是否合理。</p>
 * @method string getPartitionId() 获取<p>分区 HoBT ID（从 Attributes.hobtid 抽出）。分区表死锁排查必需字段，可定位到具体物理分区。</p>
 * @method void setPartitionId(string $PartitionId) 设置<p>分区 HoBT ID（从 Attributes.hobtid 抽出）。分区表死锁排查必需字段，可定位到具体物理分区。</p>
 * @method array getWaiters() 获取<p>等待该锁资源的进程列表（死锁环的等待边）。</p>
 * @method void setWaiters(array $Waiters) 设置<p>等待该锁资源的进程列表（死锁环的等待边）。</p>
 * @method string getKind() 获取<p>锁资源类型。常见值：keylock / pagelock / objectlock / ridlock / applicationlock / exchangeEvent 等。</p>
 * @method void setKind(string $Kind) 设置<p>锁资源类型。常见值：keylock / pagelock / objectlock / ridlock / applicationlock / exchangeEvent 等。</p>
 * @method string getMode() 获取<p>锁模式。常见值：X（排他）/ U（更新）/ S（共享）/ IX / IU / RangeS-U / RangeX-X 等。</p>
 * @method void setMode(string $Mode) 设置<p>锁模式。常见值：X（排他）/ U（更新）/ S（共享）/ IX / IU / RangeS-U / RangeX-X 等。</p>
 * @method string getAssociatedObjectId() 获取<p>关联对象 ID（从 Attributes.associatedObjectId 抽出）。ObjectName 为空时可用于兜底定位对象。</p>
 * @method void setAssociatedObjectId(string $AssociatedObjectId) 设置<p>关联对象 ID（从 Attributes.associatedObjectId 抽出）。ObjectName 为空时可用于兜底定位对象。</p>
 * @method string getId() 获取<p>SQL Server 引擎内的锁资源指针，例如 lock26054644a80。环内节点唯一标识，串联 Owners/Waiters。</p>
 * @method void setId(string $Id) 设置<p>SQL Server 引擎内的锁资源指针，例如 lock26054644a80。环内节点唯一标识，串联 Owners/Waiters。</p>
 * @method string getObjectName() 获取<p>锁资源对应的数据库对象名，格式 &#39;数据库.架构.表&#39;，例如 tempdb.dbo.dl_a。applicationlock 无此字段。</p>
 * @method void setObjectName(string $ObjectName) 设置<p>锁资源对应的数据库对象名，格式 &#39;数据库.架构.表&#39;，例如 tempdb.dbo.dl_a。applicationlock 无此字段。</p>
 * @method array getOwners() 获取<p>持有该锁资源的进程列表（死锁环的持有边）。</p>
 * @method void setOwners(array $Owners) 设置<p>持有该锁资源的进程列表（死锁环的持有边）。</p>
 */
class DeadlockResource extends AbstractModel
{
    /**
     * @var string <p>锁资源对应的索引名。keylock/ridlock 尤为重要，可判断索引设计是否合理。</p>
     */
    public $IndexName;

    /**
     * @var string <p>分区 HoBT ID（从 Attributes.hobtid 抽出）。分区表死锁排查必需字段，可定位到具体物理分区。</p>
     */
    public $PartitionId;

    /**
     * @var array <p>等待该锁资源的进程列表（死锁环的等待边）。</p>
     */
    public $Waiters;

    /**
     * @var string <p>锁资源类型。常见值：keylock / pagelock / objectlock / ridlock / applicationlock / exchangeEvent 等。</p>
     */
    public $Kind;

    /**
     * @var string <p>锁模式。常见值：X（排他）/ U（更新）/ S（共享）/ IX / IU / RangeS-U / RangeX-X 等。</p>
     */
    public $Mode;

    /**
     * @var string <p>关联对象 ID（从 Attributes.associatedObjectId 抽出）。ObjectName 为空时可用于兜底定位对象。</p>
     */
    public $AssociatedObjectId;

    /**
     * @var string <p>SQL Server 引擎内的锁资源指针，例如 lock26054644a80。环内节点唯一标识，串联 Owners/Waiters。</p>
     */
    public $Id;

    /**
     * @var string <p>锁资源对应的数据库对象名，格式 &#39;数据库.架构.表&#39;，例如 tempdb.dbo.dl_a。applicationlock 无此字段。</p>
     */
    public $ObjectName;

    /**
     * @var array <p>持有该锁资源的进程列表（死锁环的持有边）。</p>
     */
    public $Owners;

    /**
     * @param string $IndexName <p>锁资源对应的索引名。keylock/ridlock 尤为重要，可判断索引设计是否合理。</p>
     * @param string $PartitionId <p>分区 HoBT ID（从 Attributes.hobtid 抽出）。分区表死锁排查必需字段，可定位到具体物理分区。</p>
     * @param array $Waiters <p>等待该锁资源的进程列表（死锁环的等待边）。</p>
     * @param string $Kind <p>锁资源类型。常见值：keylock / pagelock / objectlock / ridlock / applicationlock / exchangeEvent 等。</p>
     * @param string $Mode <p>锁模式。常见值：X（排他）/ U（更新）/ S（共享）/ IX / IU / RangeS-U / RangeX-X 等。</p>
     * @param string $AssociatedObjectId <p>关联对象 ID（从 Attributes.associatedObjectId 抽出）。ObjectName 为空时可用于兜底定位对象。</p>
     * @param string $Id <p>SQL Server 引擎内的锁资源指针，例如 lock26054644a80。环内节点唯一标识，串联 Owners/Waiters。</p>
     * @param string $ObjectName <p>锁资源对应的数据库对象名，格式 &#39;数据库.架构.表&#39;，例如 tempdb.dbo.dl_a。applicationlock 无此字段。</p>
     * @param array $Owners <p>持有该锁资源的进程列表（死锁环的持有边）。</p>
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
        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("PartitionId",$param) and $param["PartitionId"] !== null) {
            $this->PartitionId = $param["PartitionId"];
        }

        if (array_key_exists("Waiters",$param) and $param["Waiters"] !== null) {
            $this->Waiters = [];
            foreach ($param["Waiters"] as $key => $value){
                $obj = new WaiterItem();
                $obj->deserialize($value);
                array_push($this->Waiters, $obj);
            }
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("AssociatedObjectId",$param) and $param["AssociatedObjectId"] !== null) {
            $this->AssociatedObjectId = $param["AssociatedObjectId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ObjectName",$param) and $param["ObjectName"] !== null) {
            $this->ObjectName = $param["ObjectName"];
        }

        if (array_key_exists("Owners",$param) and $param["Owners"] !== null) {
            $this->Owners = [];
            foreach ($param["Owners"] as $key => $value){
                $obj = new OwnerItem();
                $obj->deserialize($value);
                array_push($this->Owners, $obj);
            }
        }
    }
}
