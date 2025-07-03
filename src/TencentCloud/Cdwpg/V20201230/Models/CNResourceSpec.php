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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生资源规格描述信息
 *
 * @method string getType() 获取节点类型
 * @method void setType(string $Type) 设置节点类型
 * @method string getSpecName() 获取机型
 * @method void setSpecName(string $SpecName) 设置机型
 * @method integer getCount() 获取节点个数
 * @method void setCount(integer $Count) 设置节点个数
 * @method CBSSpec getDiskSpec() 获取磁盘信息
 * @method void setDiskSpec(CBSSpec $DiskSpec) 设置磁盘信息
 */
class CNResourceSpec extends AbstractModel
{
    /**
     * @var string 节点类型
     */
    public $Type;

    /**
     * @var string 机型
     */
    public $SpecName;

    /**
     * @var integer 节点个数
     */
    public $Count;

    /**
     * @var CBSSpec 磁盘信息
     */
    public $DiskSpec;

    /**
     * @param string $Type 节点类型
     * @param string $SpecName 机型
     * @param integer $Count 节点个数
     * @param CBSSpec $DiskSpec 磁盘信息
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("DiskSpec",$param) and $param["DiskSpec"] !== null) {
            $this->DiskSpec = new CBSSpec();
            $this->DiskSpec->deserialize($param["DiskSpec"]);
        }
    }
}
