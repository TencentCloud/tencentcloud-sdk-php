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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DB Custom 节点机型信息。
 *
 * @method string getZone() 获取<p>可用区标识，如 ap-guangzhou-6</p>
 * @method void setZone(string $Zone) 设置<p>可用区标识，如 ap-guangzhou-6</p>
 * @method string getNodeType() 获取<p>机型标识</p><p>枚举值：</p><ul><li>DB.SA5.2XLARGE32： DB.SA5机型</li><li>DB.AT5.8XLARGE128： DB.AT5机型</li></ul>
 * @method void setNodeType(string $NodeType) 设置<p>机型标识</p><p>枚举值：</p><ul><li>DB.SA5.2XLARGE32： DB.SA5机型</li><li>DB.AT5.8XLARGE128： DB.AT5机型</li></ul>
 * @method string getNodeFamily() 获取<p>机型系列，如 DB.AT5、DB.SA5</p>
 * @method void setNodeFamily(string $NodeFamily) 设置<p>机型系列，如 DB.AT5、DB.SA5</p>
 * @method integer getCPU() 获取<p>CPU 核数</p><p>单位：核</p>
 * @method void setCPU(integer $CPU) 设置<p>CPU 核数</p><p>单位：核</p>
 * @method integer getMemory() 获取<p>内存大小</p><p>单位：GiB</p>
 * @method void setMemory(integer $Memory) 设置<p>内存大小</p><p>单位：GiB</p>
 * @method string getStatus() 获取<p>机型售卖状态</p><p>枚举值：</p><ul><li>SELL： 正常售卖</li><li>SOLD_OUT： 售罄</li></ul>
 * @method void setStatus(string $Status) 设置<p>机型售卖状态</p><p>枚举值：</p><ul><li>SELL： 正常售卖</li><li>SOLD_OUT： 售罄</li></ul>
 * @method array getSystemDiskTypes() 获取<p>该机型允许的系统盘类型列表（如 CLOUD_BSSD、CLOUD_HSSD）；</p>
 * @method void setSystemDiskTypes(array $SystemDiskTypes) 设置<p>该机型允许的系统盘类型列表（如 CLOUD_BSSD、CLOUD_HSSD）；</p>
 * @method array getDataDiskTypes() 获取<p>该机型允许的数据盘类型列表（如 CLOUD_BSSD、CLOUD_HSSD）；</p>
 * @method void setDataDiskTypes(array $DataDiskTypes) 设置<p>该机型允许的数据盘类型列表（如 CLOUD_BSSD、CLOUD_HSSD）；</p>
 */
class DBCustomNodeTypeInfo extends AbstractModel
{
    /**
     * @var string <p>可用区标识，如 ap-guangzhou-6</p>
     */
    public $Zone;

    /**
     * @var string <p>机型标识</p><p>枚举值：</p><ul><li>DB.SA5.2XLARGE32： DB.SA5机型</li><li>DB.AT5.8XLARGE128： DB.AT5机型</li></ul>
     */
    public $NodeType;

    /**
     * @var string <p>机型系列，如 DB.AT5、DB.SA5</p>
     */
    public $NodeFamily;

    /**
     * @var integer <p>CPU 核数</p><p>单位：核</p>
     */
    public $CPU;

    /**
     * @var integer <p>内存大小</p><p>单位：GiB</p>
     */
    public $Memory;

    /**
     * @var string <p>机型售卖状态</p><p>枚举值：</p><ul><li>SELL： 正常售卖</li><li>SOLD_OUT： 售罄</li></ul>
     */
    public $Status;

    /**
     * @var array <p>该机型允许的系统盘类型列表（如 CLOUD_BSSD、CLOUD_HSSD）；</p>
     */
    public $SystemDiskTypes;

    /**
     * @var array <p>该机型允许的数据盘类型列表（如 CLOUD_BSSD、CLOUD_HSSD）；</p>
     */
    public $DataDiskTypes;

    /**
     * @param string $Zone <p>可用区标识，如 ap-guangzhou-6</p>
     * @param string $NodeType <p>机型标识</p><p>枚举值：</p><ul><li>DB.SA5.2XLARGE32： DB.SA5机型</li><li>DB.AT5.8XLARGE128： DB.AT5机型</li></ul>
     * @param string $NodeFamily <p>机型系列，如 DB.AT5、DB.SA5</p>
     * @param integer $CPU <p>CPU 核数</p><p>单位：核</p>
     * @param integer $Memory <p>内存大小</p><p>单位：GiB</p>
     * @param string $Status <p>机型售卖状态</p><p>枚举值：</p><ul><li>SELL： 正常售卖</li><li>SOLD_OUT： 售罄</li></ul>
     * @param array $SystemDiskTypes <p>该机型允许的系统盘类型列表（如 CLOUD_BSSD、CLOUD_HSSD）；</p>
     * @param array $DataDiskTypes <p>该机型允许的数据盘类型列表（如 CLOUD_BSSD、CLOUD_HSSD）；</p>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeFamily",$param) and $param["NodeFamily"] !== null) {
            $this->NodeFamily = $param["NodeFamily"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SystemDiskTypes",$param) and $param["SystemDiskTypes"] !== null) {
            $this->SystemDiskTypes = $param["SystemDiskTypes"];
        }

        if (array_key_exists("DataDiskTypes",$param) and $param["DataDiskTypes"] !== null) {
            $this->DataDiskTypes = $param["DataDiskTypes"];
        }
    }
}
