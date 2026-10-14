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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源规格描述信息
 *
 * @method string getName() 获取<p>规格名称，例如“SCH1&quot;</p>
 * @method void setName(string $Name) 设置<p>规格名称，例如“SCH1&quot;</p>
 * @method integer getCpu() 获取<p>cpu核数</p>
 * @method void setCpu(integer $Cpu) 设置<p>cpu核数</p>
 * @method integer getMem() 获取<p>内存大小，单位G</p>
 * @method void setMem(integer $Mem) 设置<p>内存大小，单位G</p>
 * @method string getType() 获取<p>分类标记，STANDARD/BIGDATA/HIGHIO分别表示标准型/大数据型/高IO</p>
 * @method void setType(string $Type) 设置<p>分类标记，STANDARD/BIGDATA/HIGHIO分别表示标准型/大数据型/高IO</p>
 * @method DiskSpec getSystemDisk() 获取<p>系统盘描述信息</p>
 * @method void setSystemDisk(DiskSpec $SystemDisk) 设置<p>系统盘描述信息</p>
 * @method DiskSpec getDataDisk() 获取<p>数据盘描述信息</p>
 * @method void setDataDisk(DiskSpec $DataDisk) 设置<p>数据盘描述信息</p>
 * @method integer getMaxNodeSize() 获取<p>最大节点数目限制</p>
 * @method void setMaxNodeSize(integer $MaxNodeSize) 设置<p>最大节点数目限制</p>
 * @method boolean getAvailable() 获取<p>是否可用，false代表售罄</p>
 * @method void setAvailable(boolean $Available) 设置<p>是否可用，false代表售罄</p>
 * @method string getComputeSpecDesc() 获取<p>规格描述信息</p>
 * @method void setComputeSpecDesc(string $ComputeSpecDesc) 设置<p>规格描述信息</p>
 * @method integer getInstanceQuota() 获取<p>cvm库存</p>
 * @method void setInstanceQuota(integer $InstanceQuota) 设置<p>cvm库存</p>
 * @method string getComputeGroupSuffix() 获取<p>计算组ID自定义后缀。1到8位小写字母、数字或连字符，首尾须为字母或数字；不传则随机生成8位后缀。最终计算组ID格式为实例ID-后缀，同时作为内核计算组名</p>
 * @method void setComputeGroupSuffix(string $ComputeGroupSuffix) 设置<p>计算组ID自定义后缀。1到8位小写字母、数字或连字符，首尾须为字母或数字；不传则随机生成8位后缀。最终计算组ID格式为实例ID-后缀，同时作为内核计算组名</p>
 */
class ResourceSpec extends AbstractModel
{
    /**
     * @var string <p>规格名称，例如“SCH1&quot;</p>
     */
    public $Name;

    /**
     * @var integer <p>cpu核数</p>
     */
    public $Cpu;

    /**
     * @var integer <p>内存大小，单位G</p>
     */
    public $Mem;

    /**
     * @var string <p>分类标记，STANDARD/BIGDATA/HIGHIO分别表示标准型/大数据型/高IO</p>
     */
    public $Type;

    /**
     * @var DiskSpec <p>系统盘描述信息</p>
     */
    public $SystemDisk;

    /**
     * @var DiskSpec <p>数据盘描述信息</p>
     */
    public $DataDisk;

    /**
     * @var integer <p>最大节点数目限制</p>
     */
    public $MaxNodeSize;

    /**
     * @var boolean <p>是否可用，false代表售罄</p>
     */
    public $Available;

    /**
     * @var string <p>规格描述信息</p>
     */
    public $ComputeSpecDesc;

    /**
     * @var integer <p>cvm库存</p>
     */
    public $InstanceQuota;

    /**
     * @var string <p>计算组ID自定义后缀。1到8位小写字母、数字或连字符，首尾须为字母或数字；不传则随机生成8位后缀。最终计算组ID格式为实例ID-后缀，同时作为内核计算组名</p>
     */
    public $ComputeGroupSuffix;

    /**
     * @param string $Name <p>规格名称，例如“SCH1&quot;</p>
     * @param integer $Cpu <p>cpu核数</p>
     * @param integer $Mem <p>内存大小，单位G</p>
     * @param string $Type <p>分类标记，STANDARD/BIGDATA/HIGHIO分别表示标准型/大数据型/高IO</p>
     * @param DiskSpec $SystemDisk <p>系统盘描述信息</p>
     * @param DiskSpec $DataDisk <p>数据盘描述信息</p>
     * @param integer $MaxNodeSize <p>最大节点数目限制</p>
     * @param boolean $Available <p>是否可用，false代表售罄</p>
     * @param string $ComputeSpecDesc <p>规格描述信息</p>
     * @param integer $InstanceQuota <p>cvm库存</p>
     * @param string $ComputeGroupSuffix <p>计算组ID自定义后缀。1到8位小写字母、数字或连字符，首尾须为字母或数字；不传则随机生成8位后缀。最终计算组ID格式为实例ID-后缀，同时作为内核计算组名</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new DiskSpec();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $this->DataDisk = new DiskSpec();
            $this->DataDisk->deserialize($param["DataDisk"]);
        }

        if (array_key_exists("MaxNodeSize",$param) and $param["MaxNodeSize"] !== null) {
            $this->MaxNodeSize = $param["MaxNodeSize"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("ComputeSpecDesc",$param) and $param["ComputeSpecDesc"] !== null) {
            $this->ComputeSpecDesc = $param["ComputeSpecDesc"];
        }

        if (array_key_exists("InstanceQuota",$param) and $param["InstanceQuota"] !== null) {
            $this->InstanceQuota = $param["InstanceQuota"];
        }

        if (array_key_exists("ComputeGroupSuffix",$param) and $param["ComputeGroupSuffix"] !== null) {
            $this->ComputeGroupSuffix = $param["ComputeGroupSuffix"];
        }
    }
}
