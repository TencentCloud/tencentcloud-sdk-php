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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProxyGroup请求参数结构体
 *
 * @method integer getProjectId() 获取通道组所属项目ID
 * @method void setProjectId(integer $ProjectId) 设置通道组所属项目ID
 * @method string getGroupName() 获取通道组别名
 * @method void setGroupName(string $GroupName) 设置通道组别名
 * @method string getRealServerRegion() 获取源站地域，参考接口DescribeDestRegions 返回参数RegionDetail中的RegionId
 * @method void setRealServerRegion(string $RealServerRegion) 设置源站地域，参考接口DescribeDestRegions 返回参数RegionDetail中的RegionId
 * @method array getTagSet() 获取标签列表
 * @method void setTagSet(array $TagSet) 设置标签列表
 * @method array getAccessRegionSet() 获取加速地域列表，包括加速地域名，及该地域对应的带宽和并发配置。
 * @method void setAccessRegionSet(array $AccessRegionSet) 设置加速地域列表，包括加速地域名，及该地域对应的带宽和并发配置。
 * @method string getIPAddressVersion() 获取IP版本，可取值：IPv4、IPv6，默认值IPv4
 * @method void setIPAddressVersion(string $IPAddressVersion) 设置IP版本，可取值：IPv4、IPv6，默认值IPv4
 * @method string getPackageType() 获取通道组套餐类型，可取值：Thunder、Accelerator，默认值Thunder
 * @method void setPackageType(string $PackageType) 设置通道组套餐类型，可取值：Thunder、Accelerator，默认值Thunder
 * @method integer getHttp3Supported() 获取该字段已废弃，当IPAddressVersion为IPv4时，所创建的通道组默认支持Http3.0；当为IPv6，默认不支持Http3.0。
 * @method void setHttp3Supported(integer $Http3Supported) 设置该字段已废弃，当IPAddressVersion为IPv4时，所创建的通道组默认支持Http3.0；当为IPv6，默认不支持Http3.0。
 */
class CreateProxyGroupRequest extends AbstractModel
{
    /**
     * @var integer 通道组所属项目ID
     */
    public $ProjectId;

    /**
     * @var string 通道组别名
     */
    public $GroupName;

    /**
     * @var string 源站地域，参考接口DescribeDestRegions 返回参数RegionDetail中的RegionId
     */
    public $RealServerRegion;

    /**
     * @var array 标签列表
     */
    public $TagSet;

    /**
     * @var array 加速地域列表，包括加速地域名，及该地域对应的带宽和并发配置。
     */
    public $AccessRegionSet;

    /**
     * @var string IP版本，可取值：IPv4、IPv6，默认值IPv4
     */
    public $IPAddressVersion;

    /**
     * @var string 通道组套餐类型，可取值：Thunder、Accelerator，默认值Thunder
     */
    public $PackageType;

    /**
     * @var integer 该字段已废弃，当IPAddressVersion为IPv4时，所创建的通道组默认支持Http3.0；当为IPv6，默认不支持Http3.0。
     */
    public $Http3Supported;

    /**
     * @param integer $ProjectId 通道组所属项目ID
     * @param string $GroupName 通道组别名
     * @param string $RealServerRegion 源站地域，参考接口DescribeDestRegions 返回参数RegionDetail中的RegionId
     * @param array $TagSet 标签列表
     * @param array $AccessRegionSet 加速地域列表，包括加速地域名，及该地域对应的带宽和并发配置。
     * @param string $IPAddressVersion IP版本，可取值：IPv4、IPv6，默认值IPv4
     * @param string $PackageType 通道组套餐类型，可取值：Thunder、Accelerator，默认值Thunder
     * @param integer $Http3Supported 该字段已废弃，当IPAddressVersion为IPv4时，所创建的通道组默认支持Http3.0；当为IPv6，默认不支持Http3.0。
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("RealServerRegion",$param) and $param["RealServerRegion"] !== null) {
            $this->RealServerRegion = $param["RealServerRegion"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("AccessRegionSet",$param) and $param["AccessRegionSet"] !== null) {
            $this->AccessRegionSet = [];
            foreach ($param["AccessRegionSet"] as $key => $value){
                $obj = new AccessConfiguration();
                $obj->deserialize($value);
                array_push($this->AccessRegionSet, $obj);
            }
        }

        if (array_key_exists("IPAddressVersion",$param) and $param["IPAddressVersion"] !== null) {
            $this->IPAddressVersion = $param["IPAddressVersion"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("Http3Supported",$param) and $param["Http3Supported"] !== null) {
            $this->Http3Supported = $param["Http3Supported"];
        }
    }
}
