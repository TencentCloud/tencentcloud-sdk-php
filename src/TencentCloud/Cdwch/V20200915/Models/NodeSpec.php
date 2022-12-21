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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建集群时的规格
 *
 * @method string getSpecName() 获取规格名称
 * @method void setSpecName(string $SpecName) 设置规格名称
 * @method integer getCount() 获取数量
 * @method void setCount(integer $Count) 设置数量
 * @method integer getDiskSize() 获取云盘大小
 * @method void setDiskSize(integer $DiskSize) 设置云盘大小
 */
class NodeSpec extends AbstractModel
{
    /**
     * @var string 规格名称
     */
    public $SpecName;

    /**
     * @var integer 数量
     */
    public $Count;

    /**
     * @var integer 云盘大小
     */
    public $DiskSize;

    /**
     * @param string $SpecName 规格名称
     * @param integer $Count 数量
     * @param integer $DiskSize 云盘大小
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

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}
