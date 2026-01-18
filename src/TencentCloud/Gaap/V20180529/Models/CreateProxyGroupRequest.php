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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProxyGroup请求参数结构体
 *
 * @method integer getProjectId() 获取<p>通道组所属项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>通道组所属项目ID</p>
 * @method string getGroupName() 获取<p>通道组别名</p>
 * @method void setGroupName(string $GroupName) 设置<p>通道组别名</p>
 * @method string getRealServerRegion() 获取<p>源站地域，参考接口 [https://cloud.tencent.com/document/api/608/36964] 返回参数RegionDetail中的RegionId</p>
 * @method void setRealServerRegion(string $RealServerRegion) 设置<p>源站地域，参考接口 [https://cloud.tencent.com/document/api/608/36964] 返回参数RegionDetail中的RegionId</p>
 * @method array getTagSet() 获取<p>标签列表</p>
 * @method void setTagSet(array $TagSet) 设置<p>标签列表</p>
 * @method array getAccessRegionSet() 获取<p>加速地域列表，包括加速地域名，及该地域对应的带宽和并发配置。</p>
 * @method void setAccessRegionSet(array $AccessRegionSet) 设置<p>加速地域列表，包括加速地域名，及该地域对应的带宽和并发配置。</p>
 * @method string getIPAddressVersion() 获取<p>IP版本，可取值：IPv4、IPv6，默认值IPv4</p>
 * @method void setIPAddressVersion(string $IPAddressVersion) 设置<p>IP版本，可取值：IPv4、IPv6，默认值IPv4</p>
 * @method string getPackageType() 获取<p>通道组套餐类型，可取值：Thunder、Accelerator，默认值Thunder</p>
 * @method void setPackageType(string $PackageType) 设置<p>通道组套餐类型，可取值：Thunder、Accelerator，默认值Thunder</p>
 * @method integer getHttp3Supported() 获取<p>该字段已废弃，当IPAddressVersion为IPv4时，所创建的通道组默认支持Http3.0；当为IPv6，默认不支持Http3.0。</p>
 * @method void setHttp3Supported(integer $Http3Supported) 设置<p>该字段已废弃，当IPAddressVersion为IPv4时，所创建的通道组默认支持Http3.0；当为IPv6，默认不支持Http3.0。</p>
 */
class CreateProxyGroupRequest extends AbstractModel
{
    /**
     * @var integer <p>通道组所属项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>通道组别名</p>
     */
    public $GroupName;

    /**
     * @var string <p>源站地域，参考接口 [https://cloud.tencent.com/document/api/608/36964] 返回参数RegionDetail中的RegionId</p>
     */
    public $RealServerRegion;

    /**
     * @var array <p>标签列表</p>
     */
    public $TagSet;

    /**
     * @var array <p>加速地域列表，包括加速地域名，及该地域对应的带宽和并发配置。</p>
     */
    public $AccessRegionSet;

    /**
     * @var string <p>IP版本，可取值：IPv4、IPv6，默认值IPv4</p>
     */
    public $IPAddressVersion;

    /**
     * @var string <p>通道组套餐类型，可取值：Thunder、Accelerator，默认值Thunder</p>
     */
    public $PackageType;

    /**
     * @var integer <p>该字段已废弃，当IPAddressVersion为IPv4时，所创建的通道组默认支持Http3.0；当为IPv6，默认不支持Http3.0。</p>
     */
    public $Http3Supported;

    /**
     * @param integer $ProjectId <p>通道组所属项目ID</p>
     * @param string $GroupName <p>通道组别名</p>
     * @param string $RealServerRegion <p>源站地域，参考接口 [https://cloud.tencent.com/document/api/608/36964] 返回参数RegionDetail中的RegionId</p>
     * @param array $TagSet <p>标签列表</p>
     * @param array $AccessRegionSet <p>加速地域列表，包括加速地域名，及该地域对应的带宽和并发配置。</p>
     * @param string $IPAddressVersion <p>IP版本，可取值：IPv4、IPv6，默认值IPv4</p>
     * @param string $PackageType <p>通道组套餐类型，可取值：Thunder、Accelerator，默认值Thunder</p>
     * @param integer $Http3Supported <p>该字段已废弃，当IPAddressVersion为IPv4时，所创建的通道组默认支持Http3.0；当为IPv6，默认不支持Http3.0。</p>
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
