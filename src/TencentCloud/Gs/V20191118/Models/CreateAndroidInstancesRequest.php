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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAndroidInstances请求参数结构体
 *
 * @method string getZone() 获取安卓实例可用区。
ap-guangzhou-3：广州三区
ap-shenzhen-1：深圳一区
ap-xian-ec-1：西安一区
ap-hangzhou-ec-1：杭州一区
 * @method void setZone(string $Zone) 设置安卓实例可用区。
ap-guangzhou-3：广州三区
ap-shenzhen-1：深圳一区
ap-xian-ec-1：西安一区
ap-hangzhou-ec-1：杭州一区
 * @method string getType() 获取安卓实例类型。
A1：单开
A2：双开
A3：三开
A4：四开
A5：五开
A6：六开
 * @method void setType(string $Type) 设置安卓实例类型。
A1：单开
A2：双开
A3：三开
A4：四开
A5：五开
A6：六开
 * @method integer getNumber() 获取当 HostSerialNumbers 不为空时，该参数表示每个宿主机要创建的安卓实例数量；
当 HostSerialNumbers 为空时，该参数表示要创建安卓实例的总数量，最大值为 100。
 * @method void setNumber(integer $Number) 设置当 HostSerialNumbers 不为空时，该参数表示每个宿主机要创建的安卓实例数量；
当 HostSerialNumbers 为空时，该参数表示要创建安卓实例的总数量，最大值为 100。
 * @method array getHostSerialNumbers() 获取宿主机 ID 列表。可以指定宿主机 ID 进行创建；也可以不指定由系统自动分配宿主机。
 * @method void setHostSerialNumbers(array $HostSerialNumbers) 设置宿主机 ID 列表。可以指定宿主机 ID 进行创建；也可以不指定由系统自动分配宿主机。
 * @method string getImageId() 获取镜像 ID。如果不填，将使用默认的系统镜像
 * @method void setImageId(string $ImageId) 设置镜像 ID。如果不填，将使用默认的系统镜像
 * @method array getLabels() 获取安卓实例标签列表
 * @method void setLabels(array $Labels) 设置安卓实例标签列表
 */
class CreateAndroidInstancesRequest extends AbstractModel
{
    /**
     * @var string 安卓实例可用区。
ap-guangzhou-3：广州三区
ap-shenzhen-1：深圳一区
ap-xian-ec-1：西安一区
ap-hangzhou-ec-1：杭州一区
     */
    public $Zone;

    /**
     * @var string 安卓实例类型。
A1：单开
A2：双开
A3：三开
A4：四开
A5：五开
A6：六开
     */
    public $Type;

    /**
     * @var integer 当 HostSerialNumbers 不为空时，该参数表示每个宿主机要创建的安卓实例数量；
当 HostSerialNumbers 为空时，该参数表示要创建安卓实例的总数量，最大值为 100。
     */
    public $Number;

    /**
     * @var array 宿主机 ID 列表。可以指定宿主机 ID 进行创建；也可以不指定由系统自动分配宿主机。
     */
    public $HostSerialNumbers;

    /**
     * @var string 镜像 ID。如果不填，将使用默认的系统镜像
     */
    public $ImageId;

    /**
     * @var array 安卓实例标签列表
     */
    public $Labels;

    /**
     * @param string $Zone 安卓实例可用区。
ap-guangzhou-3：广州三区
ap-shenzhen-1：深圳一区
ap-xian-ec-1：西安一区
ap-hangzhou-ec-1：杭州一区
     * @param string $Type 安卓实例类型。
A1：单开
A2：双开
A3：三开
A4：四开
A5：五开
A6：六开
     * @param integer $Number 当 HostSerialNumbers 不为空时，该参数表示每个宿主机要创建的安卓实例数量；
当 HostSerialNumbers 为空时，该参数表示要创建安卓实例的总数量，最大值为 100。
     * @param array $HostSerialNumbers 宿主机 ID 列表。可以指定宿主机 ID 进行创建；也可以不指定由系统自动分配宿主机。
     * @param string $ImageId 镜像 ID。如果不填，将使用默认的系统镜像
     * @param array $Labels 安卓实例标签列表
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("HostSerialNumbers",$param) and $param["HostSerialNumbers"] !== null) {
            $this->HostSerialNumbers = $param["HostSerialNumbers"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new AndroidInstanceLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
