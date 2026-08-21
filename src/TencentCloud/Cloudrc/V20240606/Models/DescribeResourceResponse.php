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
namespace TencentCloud\Cloudrc\V20240606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResource返回参数结构体
 *
 * @method string getResourceId() 获取<p>资源ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID</p>
 * @method string getResourceAlias() 获取<p>资源别名</p>
 * @method void setResourceAlias(string $ResourceAlias) 设置<p>资源别名</p>
 * @method integer getUin() 获取<p>uin</p>
 * @method void setUin(integer $Uin) 设置<p>uin</p>
 * @method string getResourceType() 获取<p>资源类型</p>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型</p>
 * @method string getRegionCode() 获取<p>地域编码</p>
 * @method void setRegionCode(string $RegionCode) 设置<p>地域编码</p>
 * @method string getZoneCode() 获取<p>可用区编码</p>
 * @method void setZoneCode(string $ZoneCode) 设置<p>可用区编码</p>
 * @method string getPayMode() 获取<p>付费类型</p>
 * @method void setPayMode(string $PayMode) 设置<p>付费类型</p>
 * @method string getCreateTime() 获取<p>资源创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>资源创建时间</p>
 * @method string getExpireTime() 获取<p>资源过期时间</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>资源过期时间</p>
 * @method array getPrivateIpAddress() 获取<p>内网IP</p>
 * @method void setPrivateIpAddress(array $PrivateIpAddress) 设置<p>内网IP</p>
 * @method array getPublicIpAddress() 获取<p>外网IP</p>
 * @method void setPublicIpAddress(array $PublicIpAddress) 设置<p>外网IP</p>
 * @method string getProperties() 获取<p>资源属性</p>
 * @method void setProperties(string $Properties) 设置<p>资源属性</p>
 * @method array getTags() 获取<p>标签信息</p>
 * @method void setTags(array $Tags) 设置<p>标签信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeResourceResponse extends AbstractModel
{
    /**
     * @var string <p>资源ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>资源别名</p>
     */
    public $ResourceAlias;

    /**
     * @var integer <p>uin</p>
     */
    public $Uin;

    /**
     * @var string <p>资源类型</p>
     */
    public $ResourceType;

    /**
     * @var string <p>地域编码</p>
     */
    public $RegionCode;

    /**
     * @var string <p>可用区编码</p>
     */
    public $ZoneCode;

    /**
     * @var string <p>付费类型</p>
     */
    public $PayMode;

    /**
     * @var string <p>资源创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>资源过期时间</p>
     */
    public $ExpireTime;

    /**
     * @var array <p>内网IP</p>
     */
    public $PrivateIpAddress;

    /**
     * @var array <p>外网IP</p>
     */
    public $PublicIpAddress;

    /**
     * @var string <p>资源属性</p>
     */
    public $Properties;

    /**
     * @var array <p>标签信息</p>
     */
    public $Tags;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ResourceId <p>资源ID</p>
     * @param string $ResourceAlias <p>资源别名</p>
     * @param integer $Uin <p>uin</p>
     * @param string $ResourceType <p>资源类型</p>
     * @param string $RegionCode <p>地域编码</p>
     * @param string $ZoneCode <p>可用区编码</p>
     * @param string $PayMode <p>付费类型</p>
     * @param string $CreateTime <p>资源创建时间</p>
     * @param string $ExpireTime <p>资源过期时间</p>
     * @param array $PrivateIpAddress <p>内网IP</p>
     * @param array $PublicIpAddress <p>外网IP</p>
     * @param string $Properties <p>资源属性</p>
     * @param array $Tags <p>标签信息</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceAlias",$param) and $param["ResourceAlias"] !== null) {
            $this->ResourceAlias = $param["ResourceAlias"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("ZoneCode",$param) and $param["ZoneCode"] !== null) {
            $this->ZoneCode = $param["ZoneCode"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }

        if (array_key_exists("PublicIpAddress",$param) and $param["PublicIpAddress"] !== null) {
            $this->PublicIpAddress = $param["PublicIpAddress"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = $param["Properties"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
