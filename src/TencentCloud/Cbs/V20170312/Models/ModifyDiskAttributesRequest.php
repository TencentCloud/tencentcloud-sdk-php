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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDiskAttributes请求参数结构体
 *
 * @method array getDiskIds() 获取一个或多个待操作的云硬盘ID，可以通过[DescribeDisks](/document/product/362/16315)接口查询。如果传入多个云盘ID，仅支持将所有云盘修改为同一属性。

 * @method void setDiskIds(array $DiskIds) 设置一个或多个待操作的云硬盘ID，可以通过[DescribeDisks](/document/product/362/16315)接口查询。如果传入多个云盘ID，仅支持将所有云盘修改为同一属性。

 * @method string getDiskName() 获取新的云硬盘名称。
 * @method void setDiskName(string $DiskName) 设置新的云硬盘名称。
 * @method boolean getPortable() 获取是否为弹性云盘，FALSE表示非弹性云盘，TRUE表示弹性云盘。仅支持非弹性云盘修改为弹性云盘。
 * @method void setPortable(boolean $Portable) 设置是否为弹性云盘，FALSE表示非弹性云盘，TRUE表示弹性云盘。仅支持非弹性云盘修改为弹性云盘。
 * @method integer getProjectId() 获取新的云硬盘项目ID，只支持修改弹性云盘的项目ID。通过[DescribeProject](/document/api/378/4400)接口查询可用项目及其ID。
 * @method void setProjectId(integer $ProjectId) 设置新的云硬盘项目ID，只支持修改弹性云盘的项目ID。通过[DescribeProject](/document/api/378/4400)接口查询可用项目及其ID。
 * @method boolean getDeleteWithInstance() 获取成功挂载到云主机后该云硬盘是否随云主机销毁，TRUE表示随云主机销毁，FALSE表示不随云主机销毁。仅支持按量计费云硬盘数据盘。
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) 设置成功挂载到云主机后该云硬盘是否随云主机销毁，TRUE表示随云主机销毁，FALSE表示不随云主机销毁。仅支持按量计费云硬盘数据盘。
 * @method string getDiskType() 获取变更云盘类型时，可传入该参数，表示变更的目标类型，取值范围：<br><li>CLOUD_PREMIUM：表示高性能云硬盘</li><li>CLOUD_SSD：表示SSD云硬盘。</li>当前不支持批量变更类型，即传入DiskType时，DiskIds仅支持传入一块云盘；<br>变更云盘类型时不支持同时变更其他属性。
具体说明请参考[调整云硬盘类型](https://cloud.tencent.com/document/product/362/32540)
 * @method void setDiskType(string $DiskType) 设置变更云盘类型时，可传入该参数，表示变更的目标类型，取值范围：<br><li>CLOUD_PREMIUM：表示高性能云硬盘</li><li>CLOUD_SSD：表示SSD云硬盘。</li>当前不支持批量变更类型，即传入DiskType时，DiskIds仅支持传入一块云盘；<br>变更云盘类型时不支持同时变更其他属性。
具体说明请参考[调整云硬盘类型](https://cloud.tencent.com/document/product/362/32540)
 * @method string getBurstPerformanceOperation() 获取开启/关闭云盘性能突发功能，取值范围： 
CREATE：开启
CANCEL：关闭
 * @method void setBurstPerformanceOperation(string $BurstPerformanceOperation) 设置开启/关闭云盘性能突发功能，取值范围： 
CREATE：开启
CANCEL：关闭
 */
class ModifyDiskAttributesRequest extends AbstractModel
{
    /**
     * @var array 一个或多个待操作的云硬盘ID，可以通过[DescribeDisks](/document/product/362/16315)接口查询。如果传入多个云盘ID，仅支持将所有云盘修改为同一属性。

     */
    public $DiskIds;

    /**
     * @var string 新的云硬盘名称。
     */
    public $DiskName;

    /**
     * @var boolean 是否为弹性云盘，FALSE表示非弹性云盘，TRUE表示弹性云盘。仅支持非弹性云盘修改为弹性云盘。
     */
    public $Portable;

    /**
     * @var integer 新的云硬盘项目ID，只支持修改弹性云盘的项目ID。通过[DescribeProject](/document/api/378/4400)接口查询可用项目及其ID。
     */
    public $ProjectId;

    /**
     * @var boolean 成功挂载到云主机后该云硬盘是否随云主机销毁，TRUE表示随云主机销毁，FALSE表示不随云主机销毁。仅支持按量计费云硬盘数据盘。
     */
    public $DeleteWithInstance;

    /**
     * @var string 变更云盘类型时，可传入该参数，表示变更的目标类型，取值范围：<br><li>CLOUD_PREMIUM：表示高性能云硬盘</li><li>CLOUD_SSD：表示SSD云硬盘。</li>当前不支持批量变更类型，即传入DiskType时，DiskIds仅支持传入一块云盘；<br>变更云盘类型时不支持同时变更其他属性。
具体说明请参考[调整云硬盘类型](https://cloud.tencent.com/document/product/362/32540)
     */
    public $DiskType;

    /**
     * @var string 开启/关闭云盘性能突发功能，取值范围： 
CREATE：开启
CANCEL：关闭
     */
    public $BurstPerformanceOperation;

    /**
     * @param array $DiskIds 一个或多个待操作的云硬盘ID，可以通过[DescribeDisks](/document/product/362/16315)接口查询。如果传入多个云盘ID，仅支持将所有云盘修改为同一属性。

     * @param string $DiskName 新的云硬盘名称。
     * @param boolean $Portable 是否为弹性云盘，FALSE表示非弹性云盘，TRUE表示弹性云盘。仅支持非弹性云盘修改为弹性云盘。
     * @param integer $ProjectId 新的云硬盘项目ID，只支持修改弹性云盘的项目ID。通过[DescribeProject](/document/api/378/4400)接口查询可用项目及其ID。
     * @param boolean $DeleteWithInstance 成功挂载到云主机后该云硬盘是否随云主机销毁，TRUE表示随云主机销毁，FALSE表示不随云主机销毁。仅支持按量计费云硬盘数据盘。
     * @param string $DiskType 变更云盘类型时，可传入该参数，表示变更的目标类型，取值范围：<br><li>CLOUD_PREMIUM：表示高性能云硬盘</li><li>CLOUD_SSD：表示SSD云硬盘。</li>当前不支持批量变更类型，即传入DiskType时，DiskIds仅支持传入一块云盘；<br>变更云盘类型时不支持同时变更其他属性。
具体说明请参考[调整云硬盘类型](https://cloud.tencent.com/document/product/362/32540)
     * @param string $BurstPerformanceOperation 开启/关闭云盘性能突发功能，取值范围： 
CREATE：开启
CANCEL：关闭
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
        if (array_key_exists("DiskIds",$param) and $param["DiskIds"] !== null) {
            $this->DiskIds = $param["DiskIds"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("Portable",$param) and $param["Portable"] !== null) {
            $this->Portable = $param["Portable"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("BurstPerformanceOperation",$param) and $param["BurstPerformanceOperation"] !== null) {
            $this->BurstPerformanceOperation = $param["BurstPerformanceOperation"];
        }
    }
}
