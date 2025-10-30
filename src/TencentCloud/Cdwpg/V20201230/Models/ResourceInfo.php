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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源信息
 *
 * @method string getSpecName() 获取资源名称
 * @method void setSpecName(string $SpecName) 设置资源名称
 * @method integer getCount() 获取资源数
 * @method void setCount(integer $Count) 设置资源数
 * @method CBSSpecInfo getDiskSpec() 获取磁盘信息
 * @method void setDiskSpec(CBSSpecInfo $DiskSpec) 设置磁盘信息
 * @method string getType() 获取节点类型，cn 或dn
 * @method void setType(string $Type) 设置节点类型，cn 或dn
 */
class ResourceInfo extends AbstractModel
{
    /**
     * @var string 资源名称
     */
    public $SpecName;

    /**
     * @var integer 资源数
     */
    public $Count;

    /**
     * @var CBSSpecInfo 磁盘信息
     */
    public $DiskSpec;

    /**
     * @var string 节点类型，cn 或dn
     */
    public $Type;

    /**
     * @param string $SpecName 资源名称
     * @param integer $Count 资源数
     * @param CBSSpecInfo $DiskSpec 磁盘信息
     * @param string $Type 节点类型，cn 或dn
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
        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("DiskSpec",$param) and $param["DiskSpec"] !== null) {
            $this->DiskSpec = new CBSSpecInfo();
            $this->DiskSpec->deserialize($param["DiskSpec"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
