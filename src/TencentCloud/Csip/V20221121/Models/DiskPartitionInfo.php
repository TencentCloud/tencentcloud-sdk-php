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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 磁盘分区信息
 *
 * @method string getName() 获取<p>分区名称</p>
 * @method void setName(string $Name) 设置<p>分区名称</p>
 * @method string getPath() 获取<p>挂载路径</p>
 * @method void setPath(string $Path) 设置<p>挂载路径</p>
 * @method float getPercent() 获取<p>使用百分比</p>
 * @method void setPercent(float $Percent) 设置<p>使用百分比</p>
 * @method integer getSize() 获取<p>分区大小(MB)</p>
 * @method void setSize(integer $Size) 设置<p>分区大小(MB)</p>
 * @method string getType() 获取<p>分区类型</p>
 * @method void setType(string $Type) 设置<p>分区类型</p>
 * @method integer getUsed() 获取<p>已使用(MB)</p>
 * @method void setUsed(integer $Used) 设置<p>已使用(MB)</p>
 */
class DiskPartitionInfo extends AbstractModel
{
    /**
     * @var string <p>分区名称</p>
     */
    public $Name;

    /**
     * @var string <p>挂载路径</p>
     */
    public $Path;

    /**
     * @var float <p>使用百分比</p>
     */
    public $Percent;

    /**
     * @var integer <p>分区大小(MB)</p>
     */
    public $Size;

    /**
     * @var string <p>分区类型</p>
     */
    public $Type;

    /**
     * @var integer <p>已使用(MB)</p>
     */
    public $Used;

    /**
     * @param string $Name <p>分区名称</p>
     * @param string $Path <p>挂载路径</p>
     * @param float $Percent <p>使用百分比</p>
     * @param integer $Size <p>分区大小(MB)</p>
     * @param string $Type <p>分区类型</p>
     * @param integer $Used <p>已使用(MB)</p>
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

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }
    }
}
