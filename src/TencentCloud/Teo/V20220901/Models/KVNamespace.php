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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KV 命名空间信息，包含命名空间的基本属性、存储容量使用情况以及被引用关系。KV 命名空间是边缘函数存储键值对数据的容器，可在边缘函数中通过绑定方式进行读写操作。
 *
 * @method string getNamespace() 获取命名空间名称。在同站点下具有唯一性。
 * @method void setNamespace(string $Namespace) 设置命名空间名称。在同站点下具有唯一性。
 * @method string getRemark() 获取命名空间描述。创建时填写的备注信息，用于说明命名空间的用途或业务含义。最大支持 256 个字符。
 * @method void setRemark(string $Remark) 设置命名空间描述。创建时填写的备注信息，用于说明命名空间的用途或业务含义。最大支持 256 个字符。
 * @method integer getCapacity() 获取KV 存储空间可用容量，单位为字节（Byte）。表示该命名空间可存储数据的最大容量上限，当前默认为 1 GB。
 * @method void setCapacity(integer $Capacity) 设置KV 存储空间可用容量，单位为字节（Byte）。表示该命名空间可存储数据的最大容量上限，当前默认为 1 GB。
 * @method integer getCapacityUsed() 获取KV 存储空间已用容量，单位为字节（Byte）。表示该命名空间当前已使用的存储空间大小。
 * @method void setCapacityUsed(integer $CapacityUsed) 设置KV 存储空间已用容量，单位为字节（Byte）。表示该命名空间当前已使用的存储空间大小。
 * @method array getReferences() 获取命名空间被引用实例的列表。展示当前命名空间被哪些边缘函数实例引用，以及引用的站点信息。若未被引用，则返回空数组。
 * @method void setReferences(array $References) 设置命名空间被引用实例的列表。展示当前命名空间被哪些边缘函数实例引用，以及引用的站点信息。若未被引用，则返回空数组。
 * @method string getCreatedOn() 获取命名空间的创建时间，遵循 ISO 8601 标准，格式为 YYYY-MM-DDThh:mm:ssZ（UTC 时间）。
 * @method void setCreatedOn(string $CreatedOn) 设置命名空间的创建时间，遵循 ISO 8601 标准，格式为 YYYY-MM-DDThh:mm:ssZ（UTC 时间）。
 * @method string getModifiedOn() 获取命名空间的最后修改时间，遵循 ISO 8601 标准，格式为 YYYY-MM-DDThh:mm:ssZ（UTC 时间）。
 * @method void setModifiedOn(string $ModifiedOn) 设置命名空间的最后修改时间，遵循 ISO 8601 标准，格式为 YYYY-MM-DDThh:mm:ssZ（UTC 时间）。
 */
class KVNamespace extends AbstractModel
{
    /**
     * @var string 命名空间名称。在同站点下具有唯一性。
     */
    public $Namespace;

    /**
     * @var string 命名空间描述。创建时填写的备注信息，用于说明命名空间的用途或业务含义。最大支持 256 个字符。
     */
    public $Remark;

    /**
     * @var integer KV 存储空间可用容量，单位为字节（Byte）。表示该命名空间可存储数据的最大容量上限，当前默认为 1 GB。
     */
    public $Capacity;

    /**
     * @var integer KV 存储空间已用容量，单位为字节（Byte）。表示该命名空间当前已使用的存储空间大小。
     */
    public $CapacityUsed;

    /**
     * @var array 命名空间被引用实例的列表。展示当前命名空间被哪些边缘函数实例引用，以及引用的站点信息。若未被引用，则返回空数组。
     */
    public $References;

    /**
     * @var string 命名空间的创建时间，遵循 ISO 8601 标准，格式为 YYYY-MM-DDThh:mm:ssZ（UTC 时间）。
     */
    public $CreatedOn;

    /**
     * @var string 命名空间的最后修改时间，遵循 ISO 8601 标准，格式为 YYYY-MM-DDThh:mm:ssZ（UTC 时间）。
     */
    public $ModifiedOn;

    /**
     * @param string $Namespace 命名空间名称。在同站点下具有唯一性。
     * @param string $Remark 命名空间描述。创建时填写的备注信息，用于说明命名空间的用途或业务含义。最大支持 256 个字符。
     * @param integer $Capacity KV 存储空间可用容量，单位为字节（Byte）。表示该命名空间可存储数据的最大容量上限，当前默认为 1 GB。
     * @param integer $CapacityUsed KV 存储空间已用容量，单位为字节（Byte）。表示该命名空间当前已使用的存储空间大小。
     * @param array $References 命名空间被引用实例的列表。展示当前命名空间被哪些边缘函数实例引用，以及引用的站点信息。若未被引用，则返回空数组。
     * @param string $CreatedOn 命名空间的创建时间，遵循 ISO 8601 标准，格式为 YYYY-MM-DDThh:mm:ssZ（UTC 时间）。
     * @param string $ModifiedOn 命名空间的最后修改时间，遵循 ISO 8601 标准，格式为 YYYY-MM-DDThh:mm:ssZ（UTC 时间）。
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = $param["Capacity"];
        }

        if (array_key_exists("CapacityUsed",$param) and $param["CapacityUsed"] !== null) {
            $this->CapacityUsed = $param["CapacityUsed"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new ComponentReference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }
    }
}
