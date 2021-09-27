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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产管理磁盘分区信息
 *
 * @method string getName() 获取分区名
 * @method void setName(string $Name) 设置分区名
 * @method integer getSize() 获取分区大小：单位G
 * @method void setSize(integer $Size) 设置分区大小：单位G
 * @method float getPercent() 获取分区使用率
 * @method void setPercent(float $Percent) 设置分区使用率
 * @method string getType() 获取文件系统类型
 * @method void setType(string $Type) 设置文件系统类型
 * @method string getPath() 获取挂载目录
 * @method void setPath(string $Path) 设置挂载目录
 * @method integer getUsed() 获取已使用空间：单位G
 * @method void setUsed(integer $Used) 设置已使用空间：单位G
 */
class AssetDiskPartitionInfo extends AbstractModel
{
    /**
     * @var string 分区名
     */
    public $Name;

    /**
     * @var integer 分区大小：单位G
     */
    public $Size;

    /**
     * @var float 分区使用率
     */
    public $Percent;

    /**
     * @var string 文件系统类型
     */
    public $Type;

    /**
     * @var string 挂载目录
     */
    public $Path;

    /**
     * @var integer 已使用空间：单位G
     */
    public $Used;

    /**
     * @param string $Name 分区名
     * @param integer $Size 分区大小：单位G
     * @param float $Percent 分区使用率
     * @param string $Type 文件系统类型
     * @param string $Path 挂载目录
     * @param integer $Used 已使用空间：单位G
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }
    }
}
