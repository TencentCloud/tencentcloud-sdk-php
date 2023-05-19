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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeployCertificateInstance请求参数结构体
 *
 * @method string getCertificateId() 获取待部署的证书ID
 * @method void setCertificateId(string $CertificateId) 设置待部署的证书ID
 * @method array getInstanceIdList() 获取需要部署实例列表
 * @method void setInstanceIdList(array $InstanceIdList) 设置需要部署实例列表
 * @method string getResourceType() 获取部署的云资源类型
 * @method void setResourceType(string $ResourceType) 设置部署的云资源类型
 * @method integer getStatus() 获取部署云资源状态：
云直播：
-1：域名未关联证书。
1： 域名https已开启。
0： 域名https已关闭。
 * @method void setStatus(integer $Status) 设置部署云资源状态：
云直播：
-1：域名未关联证书。
1： 域名https已开启。
0： 域名https已关闭。
 */
class DeployCertificateInstanceRequest extends AbstractModel
{
    /**
     * @var string 待部署的证书ID
     */
    public $CertificateId;

    /**
     * @var array 需要部署实例列表
     */
    public $InstanceIdList;

    /**
     * @var string 部署的云资源类型
     */
    public $ResourceType;

    /**
     * @var integer 部署云资源状态：
云直播：
-1：域名未关联证书。
1： 域名https已开启。
0： 域名https已关闭。
     */
    public $Status;

    /**
     * @param string $CertificateId 待部署的证书ID
     * @param array $InstanceIdList 需要部署实例列表
     * @param string $ResourceType 部署的云资源类型
     * @param integer $Status 部署云资源状态：
云直播：
-1：域名未关联证书。
1： 域名https已开启。
0： 域名https已关闭。
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
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
