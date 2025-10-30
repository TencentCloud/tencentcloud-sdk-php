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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCHDFSBindingProduct请求参数结构体
 *
 * @method string getMountPoint() 获取需要解绑的元数据加速桶名
 * @method void setMountPoint(string $MountPoint) 设置需要解绑的元数据加速桶名
 * @method string getBucketType() 获取桶的类型，分为cos和lakefs
 * @method void setBucketType(string $BucketType) 设置桶的类型，分为cos和lakefs
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method string getEngineName() 获取引擎名称，ProductName选择DLC产品时，必传此参数。其他产品可不传
 * @method void setEngineName(string $EngineName) 设置引擎名称，ProductName选择DLC产品时，必传此参数。其他产品可不传
 * @method array getVpcInfo() 获取vpc信息，ProductName选择other时，必传此参数
 * @method void setVpcInfo(array $VpcInfo) 设置vpc信息，ProductName选择other时，必传此参数
 */
class DeleteCHDFSBindingProductRequest extends AbstractModel
{
    /**
     * @var string 需要解绑的元数据加速桶名
     */
    public $MountPoint;

    /**
     * @var string 桶的类型，分为cos和lakefs
     */
    public $BucketType;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var string 引擎名称，ProductName选择DLC产品时，必传此参数。其他产品可不传
     */
    public $EngineName;

    /**
     * @var array vpc信息，ProductName选择other时，必传此参数
     */
    public $VpcInfo;

    /**
     * @param string $MountPoint 需要解绑的元数据加速桶名
     * @param string $BucketType 桶的类型，分为cos和lakefs
     * @param string $ProductName 产品名称
     * @param string $EngineName 引擎名称，ProductName选择DLC产品时，必传此参数。其他产品可不传
     * @param array $VpcInfo vpc信息，ProductName选择other时，必传此参数
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
        if (array_key_exists("MountPoint",$param) and $param["MountPoint"] !== null) {
            $this->MountPoint = $param["MountPoint"];
        }

        if (array_key_exists("BucketType",$param) and $param["BucketType"] !== null) {
            $this->BucketType = $param["BucketType"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("EngineName",$param) and $param["EngineName"] !== null) {
            $this->EngineName = $param["EngineName"];
        }

        if (array_key_exists("VpcInfo",$param) and $param["VpcInfo"] !== null) {
            $this->VpcInfo = [];
            foreach ($param["VpcInfo"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcInfo, $obj);
            }
        }
    }
}
