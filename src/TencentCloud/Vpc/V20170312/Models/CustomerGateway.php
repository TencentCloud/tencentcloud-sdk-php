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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对端网关
 *
 * @method string getCustomerGatewayId() 获取<p>用户网关唯一ID</p>
 * @method void setCustomerGatewayId(string $CustomerGatewayId) 设置<p>用户网关唯一ID</p>
 * @method string getCustomerGatewayName() 获取<p>网关名称</p>
 * @method void setCustomerGatewayName(string $CustomerGatewayName) 设置<p>网关名称</p>
 * @method string getIpAddress() 获取<p>公网地址</p>
 * @method void setIpAddress(string $IpAddress) 设置<p>公网地址</p>
 * @method string getCreatedTime() 获取<p>创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
 * @method integer getBgpAsn() 获取<p>BGP ASN。</p>
 * @method void setBgpAsn(integer $BgpAsn) 设置<p>BGP ASN。</p>
 * @method integer getVpnConnNum() 获取<p>关联通道数</p>
 * @method void setVpnConnNum(integer $VpnConnNum) 设置<p>关联通道数</p>
 * @method array getTagSet() 获取<p>标签信息</p>
 * @method void setTagSet(array $TagSet) 设置<p>标签信息</p>
 */
class CustomerGateway extends AbstractModel
{
    /**
     * @var string <p>用户网关唯一ID</p>
     */
    public $CustomerGatewayId;

    /**
     * @var string <p>网关名称</p>
     */
    public $CustomerGatewayName;

    /**
     * @var string <p>公网地址</p>
     */
    public $IpAddress;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var integer <p>BGP ASN。</p>
     */
    public $BgpAsn;

    /**
     * @var integer <p>关联通道数</p>
     */
    public $VpnConnNum;

    /**
     * @var array <p>标签信息</p>
     */
    public $TagSet;

    /**
     * @param string $CustomerGatewayId <p>用户网关唯一ID</p>
     * @param string $CustomerGatewayName <p>网关名称</p>
     * @param string $IpAddress <p>公网地址</p>
     * @param string $CreatedTime <p>创建时间</p>
     * @param integer $BgpAsn <p>BGP ASN。</p>
     * @param integer $VpnConnNum <p>关联通道数</p>
     * @param array $TagSet <p>标签信息</p>
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
        if (array_key_exists("CustomerGatewayId",$param) and $param["CustomerGatewayId"] !== null) {
            $this->CustomerGatewayId = $param["CustomerGatewayId"];
        }

        if (array_key_exists("CustomerGatewayName",$param) and $param["CustomerGatewayName"] !== null) {
            $this->CustomerGatewayName = $param["CustomerGatewayName"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("BgpAsn",$param) and $param["BgpAsn"] !== null) {
            $this->BgpAsn = $param["BgpAsn"];
        }

        if (array_key_exists("VpnConnNum",$param) and $param["VpnConnNum"] !== null) {
            $this->VpnConnNum = $param["VpnConnNum"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
