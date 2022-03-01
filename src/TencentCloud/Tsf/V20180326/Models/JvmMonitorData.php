<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJvmMonitor查询jvm监控数据接口返回数据封装
 *
 * @method MemoryPicture getHeapMemory() 获取堆内存监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeapMemory(MemoryPicture $HeapMemory) 设置堆内存监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method MemoryPicture getNonHeapMemory() 获取非堆内存监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNonHeapMemory(MemoryPicture $NonHeapMemory) 设置非堆内存监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method MemoryPicture getEdenSpace() 获取伊甸园区监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEdenSpace(MemoryPicture $EdenSpace) 设置伊甸园区监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method MemoryPicture getSurvivorSpace() 获取幸存者区监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSurvivorSpace(MemoryPicture $SurvivorSpace) 设置幸存者区监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method MemoryPicture getOldSpace() 获取老年代监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldSpace(MemoryPicture $OldSpace) 设置老年代监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method MemoryPicture getMetaSpace() 获取元空间监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaSpace(MemoryPicture $MetaSpace) 设置元空间监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method ThreadPicture getThreadPicture() 获取线程监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThreadPicture(ThreadPicture $ThreadPicture) 设置线程监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getYoungGC() 获取youngGC增量监控图,一条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYoungGC(array $YoungGC) 设置youngGC增量监控图,一条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFullGC() 获取fullGC增量监控图,一条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullGC(array $FullGC) 设置fullGC增量监控图,一条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCpuUsage() 获取cpu使用率,一条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuUsage(array $CpuUsage) 设置cpu使用率,一条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClassCount() 获取加载类数,一条线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassCount(array $ClassCount) 设置加载类数,一条线
注意：此字段可能返回 null，表示取不到有效值。
 */
class JvmMonitorData extends AbstractModel
{
    /**
     * @var MemoryPicture 堆内存监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeapMemory;

    /**
     * @var MemoryPicture 非堆内存监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NonHeapMemory;

    /**
     * @var MemoryPicture 伊甸园区监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EdenSpace;

    /**
     * @var MemoryPicture 幸存者区监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SurvivorSpace;

    /**
     * @var MemoryPicture 老年代监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldSpace;

    /**
     * @var MemoryPicture 元空间监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaSpace;

    /**
     * @var ThreadPicture 线程监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThreadPicture;

    /**
     * @var array youngGC增量监控图,一条线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $YoungGC;

    /**
     * @var array fullGC增量监控图,一条线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullGC;

    /**
     * @var array cpu使用率,一条线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuUsage;

    /**
     * @var array 加载类数,一条线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassCount;

    /**
     * @param MemoryPicture $HeapMemory 堆内存监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
     * @param MemoryPicture $NonHeapMemory 非堆内存监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
     * @param MemoryPicture $EdenSpace 伊甸园区监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
     * @param MemoryPicture $SurvivorSpace 幸存者区监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
     * @param MemoryPicture $OldSpace 老年代监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
     * @param MemoryPicture $MetaSpace 元空间监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
     * @param ThreadPicture $ThreadPicture 线程监控图,三条线
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $YoungGC youngGC增量监控图,一条线
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FullGC fullGC增量监控图,一条线
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CpuUsage cpu使用率,一条线
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ClassCount 加载类数,一条线
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
        if (array_key_exists("HeapMemory",$param) and $param["HeapMemory"] !== null) {
            $this->HeapMemory = new MemoryPicture();
            $this->HeapMemory->deserialize($param["HeapMemory"]);
        }

        if (array_key_exists("NonHeapMemory",$param) and $param["NonHeapMemory"] !== null) {
            $this->NonHeapMemory = new MemoryPicture();
            $this->NonHeapMemory->deserialize($param["NonHeapMemory"]);
        }

        if (array_key_exists("EdenSpace",$param) and $param["EdenSpace"] !== null) {
            $this->EdenSpace = new MemoryPicture();
            $this->EdenSpace->deserialize($param["EdenSpace"]);
        }

        if (array_key_exists("SurvivorSpace",$param) and $param["SurvivorSpace"] !== null) {
            $this->SurvivorSpace = new MemoryPicture();
            $this->SurvivorSpace->deserialize($param["SurvivorSpace"]);
        }

        if (array_key_exists("OldSpace",$param) and $param["OldSpace"] !== null) {
            $this->OldSpace = new MemoryPicture();
            $this->OldSpace->deserialize($param["OldSpace"]);
        }

        if (array_key_exists("MetaSpace",$param) and $param["MetaSpace"] !== null) {
            $this->MetaSpace = new MemoryPicture();
            $this->MetaSpace->deserialize($param["MetaSpace"]);
        }

        if (array_key_exists("ThreadPicture",$param) and $param["ThreadPicture"] !== null) {
            $this->ThreadPicture = new ThreadPicture();
            $this->ThreadPicture->deserialize($param["ThreadPicture"]);
        }

        if (array_key_exists("YoungGC",$param) and $param["YoungGC"] !== null) {
            $this->YoungGC = [];
            foreach ($param["YoungGC"] as $key => $value){
                $obj = new CurvePoint();
                $obj->deserialize($value);
                array_push($this->YoungGC, $obj);
            }
        }

        if (array_key_exists("FullGC",$param) and $param["FullGC"] !== null) {
            $this->FullGC = [];
            foreach ($param["FullGC"] as $key => $value){
                $obj = new CurvePoint();
                $obj->deserialize($value);
                array_push($this->FullGC, $obj);
            }
        }

        if (array_key_exists("CpuUsage",$param) and $param["CpuUsage"] !== null) {
            $this->CpuUsage = [];
            foreach ($param["CpuUsage"] as $key => $value){
                $obj = new CurvePoint();
                $obj->deserialize($value);
                array_push($this->CpuUsage, $obj);
            }
        }

        if (array_key_exists("ClassCount",$param) and $param["ClassCount"] !== null) {
            $this->ClassCount = [];
            foreach ($param["ClassCount"] as $key => $value){
                $obj = new CurvePoint();
                $obj->deserialize($value);
                array_push($this->ClassCount, $obj);
            }
        }
    }
}
