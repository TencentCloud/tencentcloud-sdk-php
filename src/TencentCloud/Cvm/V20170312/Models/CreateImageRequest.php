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
 * CreateImage请求参数结构体
 *
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getInstanceId() 获取需要制作镜像的实例ID。基于实例创建镜像时，为必填参数。
 * @method void setInstanceId(string $InstanceId) 设置需要制作镜像的实例ID。基于实例创建镜像时，为必填参数。
 * @method string getImageDescription() 获取镜像描述
 * @method void setImageDescription(string $ImageDescription) 设置镜像描述
 * @method string getForcePoweroff() 获取是否执行强制关机以制作镜像。
取值范围：<br><li>TRUE：表示关机之后制作镜像<br><li>FALSE：表示开机状态制作镜像<br><br>默认取值：FALSE。<br><br>开机状态制作镜像，可能导致部分数据未备份，影响数据安全。
 * @method void setForcePoweroff(string $ForcePoweroff) 设置是否执行强制关机以制作镜像。
取值范围：<br><li>TRUE：表示关机之后制作镜像<br><li>FALSE：表示开机状态制作镜像<br><br>默认取值：FALSE。<br><br>开机状态制作镜像，可能导致部分数据未备份，影响数据安全。
 * @method string getSysprep() 获取创建Windows镜像时是否启用Sysprep。
取值范围：TRUE或FALSE，默认取值为FALSE。

关于Sysprep的详情请参考[链接](https://cloud.tencent.com/document/product/213/43498)。
 * @method void setSysprep(string $Sysprep) 设置创建Windows镜像时是否启用Sysprep。
取值范围：TRUE或FALSE，默认取值为FALSE。

关于Sysprep的详情请参考[链接](https://cloud.tencent.com/document/product/213/43498)。
 * @method array getDataDiskIds() 获取基于实例创建整机镜像时，指定包含在镜像里的数据盘ID
 * @method void setDataDiskIds(array $DataDiskIds) 设置基于实例创建整机镜像时，指定包含在镜像里的数据盘ID
 * @method array getSnapshotIds() 获取基于快照创建镜像，指定快照ID，必须包含一个系统盘快照。不可与InstanceId同时传入。
 * @method void setSnapshotIds(array $SnapshotIds) 设置基于快照创建镜像，指定快照ID，必须包含一个系统盘快照。不可与InstanceId同时传入。
 * @method boolean getDryRun() 获取检测本次请求的是否成功，但不会对操作的资源产生任何影响
 * @method void setDryRun(boolean $DryRun) 设置检测本次请求的是否成功，但不会对操作的资源产生任何影响
 * @method array getTagSpecification() 获取标签描述列表。通过指定该参数可以同时绑定标签到自定义镜像。
 * @method void setTagSpecification(array $TagSpecification) 设置标签描述列表。通过指定该参数可以同时绑定标签到自定义镜像。
 */
class CreateImageRequest extends AbstractModel
{
    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 需要制作镜像的实例ID。基于实例创建镜像时，为必填参数。
     */
    public $InstanceId;

    /**
     * @var string 镜像描述
     */
    public $ImageDescription;

    /**
     * @var string 是否执行强制关机以制作镜像。
取值范围：<br><li>TRUE：表示关机之后制作镜像<br><li>FALSE：表示开机状态制作镜像<br><br>默认取值：FALSE。<br><br>开机状态制作镜像，可能导致部分数据未备份，影响数据安全。
     */
    public $ForcePoweroff;

    /**
     * @var string 创建Windows镜像时是否启用Sysprep。
取值范围：TRUE或FALSE，默认取值为FALSE。

关于Sysprep的详情请参考[链接](https://cloud.tencent.com/document/product/213/43498)。
     */
    public $Sysprep;

    /**
     * @var array 基于实例创建整机镜像时，指定包含在镜像里的数据盘ID
     */
    public $DataDiskIds;

    /**
     * @var array 基于快照创建镜像，指定快照ID，必须包含一个系统盘快照。不可与InstanceId同时传入。
     */
    public $SnapshotIds;

    /**
     * @var boolean 检测本次请求的是否成功，但不会对操作的资源产生任何影响
     */
    public $DryRun;

    /**
     * @var array 标签描述列表。通过指定该参数可以同时绑定标签到自定义镜像。
     */
    public $TagSpecification;

    /**
     * @param string $ImageName 镜像名称
     * @param string $InstanceId 需要制作镜像的实例ID。基于实例创建镜像时，为必填参数。
     * @param string $ImageDescription 镜像描述
     * @param string $ForcePoweroff 是否执行强制关机以制作镜像。
取值范围：<br><li>TRUE：表示关机之后制作镜像<br><li>FALSE：表示开机状态制作镜像<br><br>默认取值：FALSE。<br><br>开机状态制作镜像，可能导致部分数据未备份，影响数据安全。
     * @param string $Sysprep 创建Windows镜像时是否启用Sysprep。
取值范围：TRUE或FALSE，默认取值为FALSE。

关于Sysprep的详情请参考[链接](https://cloud.tencent.com/document/product/213/43498)。
     * @param array $DataDiskIds 基于实例创建整机镜像时，指定包含在镜像里的数据盘ID
     * @param array $SnapshotIds 基于快照创建镜像，指定快照ID，必须包含一个系统盘快照。不可与InstanceId同时传入。
     * @param boolean $DryRun 检测本次请求的是否成功，但不会对操作的资源产生任何影响
     * @param array $TagSpecification 标签描述列表。通过指定该参数可以同时绑定标签到自定义镜像。
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
        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("ForcePoweroff",$param) and $param["ForcePoweroff"] !== null) {
            $this->ForcePoweroff = $param["ForcePoweroff"];
        }

        if (array_key_exists("Sysprep",$param) and $param["Sysprep"] !== null) {
            $this->Sysprep = $param["Sysprep"];
        }

        if (array_key_exists("DataDiskIds",$param) and $param["DataDiskIds"] !== null) {
            $this->DataDiskIds = $param["DataDiskIds"];
        }

        if (array_key_exists("SnapshotIds",$param) and $param["SnapshotIds"] !== null) {
            $this->SnapshotIds = $param["SnapshotIds"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }
    }
}
