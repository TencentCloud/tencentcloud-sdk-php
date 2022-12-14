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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateImageCache请求参数结构体
 *
 * @method array getImages() 获取用于制作镜像缓存的容器镜像列表
 * @method void setImages(array $Images) 设置用于制作镜像缓存的容器镜像列表
 * @method string getSubnetId() 获取实例所属子网Id
 * @method void setSubnetId(string $SubnetId) 设置实例所属子网Id
 * @method string getVpcId() 获取实例所属VPC Id
 * @method void setVpcId(string $VpcId) 设置实例所属VPC Id
 * @method string getImageCacheName() 获取镜像缓存名称
 * @method void setImageCacheName(string $ImageCacheName) 设置镜像缓存名称
 * @method array getSecurityGroupIds() 获取安全组Id
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组Id
 * @method array getImageRegistryCredentials() 获取镜像仓库凭证数组
 * @method void setImageRegistryCredentials(array $ImageRegistryCredentials) 设置镜像仓库凭证数组
 * @method string getExistedEipId() 获取用来绑定容器实例的已有EIP
 * @method void setExistedEipId(string $ExistedEipId) 设置用来绑定容器实例的已有EIP
 * @method boolean getAutoCreateEip() 获取是否为容器实例自动创建EIP，默认为false。若传true，则此参数和ExistedEipIds互斥
 * @method void setAutoCreateEip(boolean $AutoCreateEip) 设置是否为容器实例自动创建EIP，默认为false。若传true，则此参数和ExistedEipIds互斥
 * @method EipAttribute getAutoCreateEipAttribute() 获取自动创建EIP的可选参数。若传此参数，则会自动创建EIP。
另外此参数和ExistedEipIds互斥
 * @method void setAutoCreateEipAttribute(EipAttribute $AutoCreateEipAttribute) 设置自动创建EIP的可选参数。若传此参数，则会自动创建EIP。
另外此参数和ExistedEipIds互斥
 * @method integer getImageCacheSize() 获取镜像缓存的大小。默认为20 GiB。取值范围参考[云硬盘类型](https://cloud.tencent.com/document/product/362/2353)中的高性能云盘类型的大小限制。
 * @method void setImageCacheSize(integer $ImageCacheSize) 设置镜像缓存的大小。默认为20 GiB。取值范围参考[云硬盘类型](https://cloud.tencent.com/document/product/362/2353)中的高性能云盘类型的大小限制。
 * @method integer getRetentionDays() 获取镜像缓存保留时间天数，过期将会自动清理，默认为0，永不过期。
 * @method void setRetentionDays(integer $RetentionDays) 设置镜像缓存保留时间天数，过期将会自动清理，默认为0，永不过期。
 * @method array getRegistrySkipVerifyList() 获取指定拉取镜像仓库的镜像时不校验证书。如["harbor.example.com"]。
 * @method void setRegistrySkipVerifyList(array $RegistrySkipVerifyList) 设置指定拉取镜像仓库的镜像时不校验证书。如["harbor.example.com"]。
 * @method array getRegistryHttpEndPointList() 获取指定拉取镜像仓库的镜像时使用 HTTP 协议。如["harbor.example.com"]。
 * @method void setRegistryHttpEndPointList(array $RegistryHttpEndPointList) 设置指定拉取镜像仓库的镜像时使用 HTTP 协议。如["harbor.example.com"]。
 * @method string getResolveConfig() 获取自定义制作镜像缓存过程中容器实例的宿主机上的 DNS。如：
"nameserver 4.4.4.4\nnameserver 8.8.8.8"
 * @method void setResolveConfig(string $ResolveConfig) 设置自定义制作镜像缓存过程中容器实例的宿主机上的 DNS。如：
"nameserver 4.4.4.4\nnameserver 8.8.8.8"
 */
class CreateImageCacheRequest extends AbstractModel
{
    /**
     * @var array 用于制作镜像缓存的容器镜像列表
     */
    public $Images;

    /**
     * @var string 实例所属子网Id
     */
    public $SubnetId;

    /**
     * @var string 实例所属VPC Id
     */
    public $VpcId;

    /**
     * @var string 镜像缓存名称
     */
    public $ImageCacheName;

    /**
     * @var array 安全组Id
     */
    public $SecurityGroupIds;

    /**
     * @var array 镜像仓库凭证数组
     */
    public $ImageRegistryCredentials;

    /**
     * @var string 用来绑定容器实例的已有EIP
     */
    public $ExistedEipId;

    /**
     * @var boolean 是否为容器实例自动创建EIP，默认为false。若传true，则此参数和ExistedEipIds互斥
     */
    public $AutoCreateEip;

    /**
     * @var EipAttribute 自动创建EIP的可选参数。若传此参数，则会自动创建EIP。
另外此参数和ExistedEipIds互斥
     */
    public $AutoCreateEipAttribute;

    /**
     * @var integer 镜像缓存的大小。默认为20 GiB。取值范围参考[云硬盘类型](https://cloud.tencent.com/document/product/362/2353)中的高性能云盘类型的大小限制。
     */
    public $ImageCacheSize;

    /**
     * @var integer 镜像缓存保留时间天数，过期将会自动清理，默认为0，永不过期。
     */
    public $RetentionDays;

    /**
     * @var array 指定拉取镜像仓库的镜像时不校验证书。如["harbor.example.com"]。
     */
    public $RegistrySkipVerifyList;

    /**
     * @var array 指定拉取镜像仓库的镜像时使用 HTTP 协议。如["harbor.example.com"]。
     */
    public $RegistryHttpEndPointList;

    /**
     * @var string 自定义制作镜像缓存过程中容器实例的宿主机上的 DNS。如：
"nameserver 4.4.4.4\nnameserver 8.8.8.8"
     */
    public $ResolveConfig;

    /**
     * @param array $Images 用于制作镜像缓存的容器镜像列表
     * @param string $SubnetId 实例所属子网Id
     * @param string $VpcId 实例所属VPC Id
     * @param string $ImageCacheName 镜像缓存名称
     * @param array $SecurityGroupIds 安全组Id
     * @param array $ImageRegistryCredentials 镜像仓库凭证数组
     * @param string $ExistedEipId 用来绑定容器实例的已有EIP
     * @param boolean $AutoCreateEip 是否为容器实例自动创建EIP，默认为false。若传true，则此参数和ExistedEipIds互斥
     * @param EipAttribute $AutoCreateEipAttribute 自动创建EIP的可选参数。若传此参数，则会自动创建EIP。
另外此参数和ExistedEipIds互斥
     * @param integer $ImageCacheSize 镜像缓存的大小。默认为20 GiB。取值范围参考[云硬盘类型](https://cloud.tencent.com/document/product/362/2353)中的高性能云盘类型的大小限制。
     * @param integer $RetentionDays 镜像缓存保留时间天数，过期将会自动清理，默认为0，永不过期。
     * @param array $RegistrySkipVerifyList 指定拉取镜像仓库的镜像时不校验证书。如["harbor.example.com"]。
     * @param array $RegistryHttpEndPointList 指定拉取镜像仓库的镜像时使用 HTTP 协议。如["harbor.example.com"]。
     * @param string $ResolveConfig 自定义制作镜像缓存过程中容器实例的宿主机上的 DNS。如：
"nameserver 4.4.4.4\nnameserver 8.8.8.8"
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
        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ImageCacheName",$param) and $param["ImageCacheName"] !== null) {
            $this->ImageCacheName = $param["ImageCacheName"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("ImageRegistryCredentials",$param) and $param["ImageRegistryCredentials"] !== null) {
            $this->ImageRegistryCredentials = [];
            foreach ($param["ImageRegistryCredentials"] as $key => $value){
                $obj = new ImageRegistryCredential();
                $obj->deserialize($value);
                array_push($this->ImageRegistryCredentials, $obj);
            }
        }

        if (array_key_exists("ExistedEipId",$param) and $param["ExistedEipId"] !== null) {
            $this->ExistedEipId = $param["ExistedEipId"];
        }

        if (array_key_exists("AutoCreateEip",$param) and $param["AutoCreateEip"] !== null) {
            $this->AutoCreateEip = $param["AutoCreateEip"];
        }

        if (array_key_exists("AutoCreateEipAttribute",$param) and $param["AutoCreateEipAttribute"] !== null) {
            $this->AutoCreateEipAttribute = new EipAttribute();
            $this->AutoCreateEipAttribute->deserialize($param["AutoCreateEipAttribute"]);
        }

        if (array_key_exists("ImageCacheSize",$param) and $param["ImageCacheSize"] !== null) {
            $this->ImageCacheSize = $param["ImageCacheSize"];
        }

        if (array_key_exists("RetentionDays",$param) and $param["RetentionDays"] !== null) {
            $this->RetentionDays = $param["RetentionDays"];
        }

        if (array_key_exists("RegistrySkipVerifyList",$param) and $param["RegistrySkipVerifyList"] !== null) {
            $this->RegistrySkipVerifyList = $param["RegistrySkipVerifyList"];
        }

        if (array_key_exists("RegistryHttpEndPointList",$param) and $param["RegistryHttpEndPointList"] !== null) {
            $this->RegistryHttpEndPointList = $param["RegistryHttpEndPointList"];
        }

        if (array_key_exists("ResolveConfig",$param) and $param["ResolveConfig"] !== null) {
            $this->ResolveConfig = $param["ResolveConfig"];
        }
    }
}
