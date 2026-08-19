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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityGroupPolicy请求参数结构体
 *
 * @method string getProvider() 获取云厂商
 * @method void setProvider(string $Provider) 设置云厂商
 * @method string getAssetID() 获取资产ID
 * @method void setAssetID(string $AssetID) 设置资产ID
 * @method string getAssetType() 获取资产类型
 * @method void setAssetType(string $AssetType) 设置资产类型
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getSecurityGroupID() 获取安全组ID
 * @method void setSecurityGroupID(string $SecurityGroupID) 设置安全组ID
 */
class DescribeSecurityGroupPolicyRequest extends AbstractModel
{
    /**
     * @var string 云厂商
     */
    public $Provider;

    /**
     * @var string 资产ID
     */
    public $AssetID;

    /**
     * @var string 资产类型
     */
    public $AssetType;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string 安全组ID
     */
    public $SecurityGroupID;

    /**
     * @param string $Provider 云厂商
     * @param string $AssetID 资产ID
     * @param string $AssetType 资产类型
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $SecurityGroupID 安全组ID
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
        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("AssetID",$param) and $param["AssetID"] !== null) {
            $this->AssetID = $param["AssetID"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("SecurityGroupID",$param) and $param["SecurityGroupID"] !== null) {
            $this->SecurityGroupID = $param["SecurityGroupID"];
        }
    }
}
