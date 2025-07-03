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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResizeInstanceDisks请求参数结构体
 *
 * @method string getInstanceId() 获取待操作的实例ID。可通过[ DescribeInstances ](https://cloud.tencent.com/document/api/213/15728)接口返回值中的`InstanceId`获取。
 * @method void setInstanceId(string $InstanceId) 设置待操作的实例ID。可通过[ DescribeInstances ](https://cloud.tencent.com/document/api/213/15728)接口返回值中的`InstanceId`获取。
 * @method array getDataDisks() 获取待扩容的数据盘配置信息，仅支持指定待扩容盘的目的容量。只支持扩容非弹性数据盘（[ DescribeDisks ](https://cloud.tencent.com/document/api/362/16315)接口返回值中的`Portable`为`false`表示非弹性）。数据盘容量单位：GiB。最小扩容步长：10GiB。关于数据盘类型的选择请参考[硬盘产品简介](https://cloud.tencent.com/document/product/362/2353)。可选数据盘类型受到实例类型`InstanceType`限制。另外允许扩容的最大容量也因数据盘类型的不同而有所差异。
<dx-alert infotype="explain" title="">您必须指定参数DataDisks与SystemDisk的其中一个，但不能同时指定。</dx-alert>
 * @method void setDataDisks(array $DataDisks) 设置待扩容的数据盘配置信息，仅支持指定待扩容盘的目的容量。只支持扩容非弹性数据盘（[ DescribeDisks ](https://cloud.tencent.com/document/api/362/16315)接口返回值中的`Portable`为`false`表示非弹性）。数据盘容量单位：GiB。最小扩容步长：10GiB。关于数据盘类型的选择请参考[硬盘产品简介](https://cloud.tencent.com/document/product/362/2353)。可选数据盘类型受到实例类型`InstanceType`限制。另外允许扩容的最大容量也因数据盘类型的不同而有所差异。
<dx-alert infotype="explain" title="">您必须指定参数DataDisks与SystemDisk的其中一个，但不能同时指定。</dx-alert>
 * @method boolean getForceStop() 获取是否对运行中的实例选择强制关机。建议对运行中的实例先手动关机，然后再扩容实例磁盘。取值范围：<br><li>true：表示在正常关机失败后进行强制关机</li><br><li>false：表示在正常关机失败后不进行强制关机</li><br><br>默认取值：false。<br><br>强制关机的效果等同于关闭物理计算机的电源开关。强制关机可能会导致数据丢失或文件系统损坏，请仅在服务器不能正常关机时使用。
 * @method void setForceStop(boolean $ForceStop) 设置是否对运行中的实例选择强制关机。建议对运行中的实例先手动关机，然后再扩容实例磁盘。取值范围：<br><li>true：表示在正常关机失败后进行强制关机</li><br><li>false：表示在正常关机失败后不进行强制关机</li><br><br>默认取值：false。<br><br>强制关机的效果等同于关闭物理计算机的电源开关。强制关机可能会导致数据丢失或文件系统损坏，请仅在服务器不能正常关机时使用。
 * @method SystemDisk getSystemDisk() 获取待扩容的系统盘配置信息，仅支持指定待扩容盘的目的容量。只支持扩容云盘。
<dx-alert infotype="explain" title="">您必须指定参数DataDisks与SystemDisk的其中一个，但不能同时指定。</dx-alert>
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置待扩容的系统盘配置信息，仅支持指定待扩容盘的目的容量。只支持扩容云盘。
<dx-alert infotype="explain" title="">您必须指定参数DataDisks与SystemDisk的其中一个，但不能同时指定。</dx-alert>
 * @method boolean getResizeOnline() 获取扩容云盘的方式是否为在线扩容。
 * @method void setResizeOnline(boolean $ResizeOnline) 设置扩容云盘的方式是否为在线扩容。
 */
class ResizeInstanceDisksRequest extends AbstractModel
{
    /**
     * @var string 待操作的实例ID。可通过[ DescribeInstances ](https://cloud.tencent.com/document/api/213/15728)接口返回值中的`InstanceId`获取。
     */
    public $InstanceId;

    /**
     * @var array 待扩容的数据盘配置信息，仅支持指定待扩容盘的目的容量。只支持扩容非弹性数据盘（[ DescribeDisks ](https://cloud.tencent.com/document/api/362/16315)接口返回值中的`Portable`为`false`表示非弹性）。数据盘容量单位：GiB。最小扩容步长：10GiB。关于数据盘类型的选择请参考[硬盘产品简介](https://cloud.tencent.com/document/product/362/2353)。可选数据盘类型受到实例类型`InstanceType`限制。另外允许扩容的最大容量也因数据盘类型的不同而有所差异。
<dx-alert infotype="explain" title="">您必须指定参数DataDisks与SystemDisk的其中一个，但不能同时指定。</dx-alert>
     */
    public $DataDisks;

    /**
     * @var boolean 是否对运行中的实例选择强制关机。建议对运行中的实例先手动关机，然后再扩容实例磁盘。取值范围：<br><li>true：表示在正常关机失败后进行强制关机</li><br><li>false：表示在正常关机失败后不进行强制关机</li><br><br>默认取值：false。<br><br>强制关机的效果等同于关闭物理计算机的电源开关。强制关机可能会导致数据丢失或文件系统损坏，请仅在服务器不能正常关机时使用。
     */
    public $ForceStop;

    /**
     * @var SystemDisk 待扩容的系统盘配置信息，仅支持指定待扩容盘的目的容量。只支持扩容云盘。
<dx-alert infotype="explain" title="">您必须指定参数DataDisks与SystemDisk的其中一个，但不能同时指定。</dx-alert>
     */
    public $SystemDisk;

    /**
     * @var boolean 扩容云盘的方式是否为在线扩容。
     */
    public $ResizeOnline;

    /**
     * @param string $InstanceId 待操作的实例ID。可通过[ DescribeInstances ](https://cloud.tencent.com/document/api/213/15728)接口返回值中的`InstanceId`获取。
     * @param array $DataDisks 待扩容的数据盘配置信息，仅支持指定待扩容盘的目的容量。只支持扩容非弹性数据盘（[ DescribeDisks ](https://cloud.tencent.com/document/api/362/16315)接口返回值中的`Portable`为`false`表示非弹性）。数据盘容量单位：GiB。最小扩容步长：10GiB。关于数据盘类型的选择请参考[硬盘产品简介](https://cloud.tencent.com/document/product/362/2353)。可选数据盘类型受到实例类型`InstanceType`限制。另外允许扩容的最大容量也因数据盘类型的不同而有所差异。
<dx-alert infotype="explain" title="">您必须指定参数DataDisks与SystemDisk的其中一个，但不能同时指定。</dx-alert>
     * @param boolean $ForceStop 是否对运行中的实例选择强制关机。建议对运行中的实例先手动关机，然后再扩容实例磁盘。取值范围：<br><li>true：表示在正常关机失败后进行强制关机</li><br><li>false：表示在正常关机失败后不进行强制关机</li><br><br>默认取值：false。<br><br>强制关机的效果等同于关闭物理计算机的电源开关。强制关机可能会导致数据丢失或文件系统损坏，请仅在服务器不能正常关机时使用。
     * @param SystemDisk $SystemDisk 待扩容的系统盘配置信息，仅支持指定待扩容盘的目的容量。只支持扩容云盘。
<dx-alert infotype="explain" title="">您必须指定参数DataDisks与SystemDisk的其中一个，但不能同时指定。</dx-alert>
     * @param boolean $ResizeOnline 扩容云盘的方式是否为在线扩容。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("ForceStop",$param) and $param["ForceStop"] !== null) {
            $this->ForceStop = $param["ForceStop"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("ResizeOnline",$param) and $param["ResizeOnline"] !== null) {
            $this->ResizeOnline = $param["ResizeOnline"];
        }
    }
}
