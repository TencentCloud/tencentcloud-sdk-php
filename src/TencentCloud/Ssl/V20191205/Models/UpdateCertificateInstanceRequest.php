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
 * UpdateCertificateInstance请求参数结构体
 *
 * @method string getOldCertificateId() 获取一键更新原证书ID， 查询绑定该证书的云资源然后进行证书更新
 * @method void setOldCertificateId(string $OldCertificateId) 设置一键更新原证书ID， 查询绑定该证书的云资源然后进行证书更新
 * @method array getResourceTypes() 获取需要部署的资源类型，参数值可选（小写）：clb、cdn、waf、live、ddos、teo、apigateway、vod、tke、tcb、tse
 * @method void setResourceTypes(array $ResourceTypes) 设置需要部署的资源类型，参数值可选（小写）：clb、cdn、waf、live、ddos、teo、apigateway、vod、tke、tcb、tse
 * @method string getCertificateId() 获取一键更新新证书ID，不传该则证书公钥和私钥必传
 * @method void setCertificateId(string $CertificateId) 设置一键更新新证书ID，不传该则证书公钥和私钥必传
 * @method array getRegions() 获取需要部署的地域列表（废弃）
 * @method void setRegions(array $Regions) 设置需要部署的地域列表（废弃）
 * @method array getResourceTypesRegions() 获取云资源需要部署的地域列表，支持地域的云资源类型必传，如：clb、tke、apigateway、waf、tcb、tse等
 * @method void setResourceTypesRegions(array $ResourceTypesRegions) 设置云资源需要部署的地域列表，支持地域的云资源类型必传，如：clb、tke、apigateway、waf、tcb、tse等
 * @method string getCertificatePublicKey() 获取证书公钥， 若上传证书公钥， 则CertificateId不用传
 * @method void setCertificatePublicKey(string $CertificatePublicKey) 设置证书公钥， 若上传证书公钥， 则CertificateId不用传
 * @method string getCertificatePrivateKey() 获取证书私钥，若上传证书公钥， 则CertificateId不用传
 * @method void setCertificatePrivateKey(string $CertificatePrivateKey) 设置证书私钥，若上传证书公钥， 则CertificateId不用传
 * @method integer getExpiringNotificationSwitch() 获取旧证书是否忽略到期提醒  0:不忽略通知。1:忽略通知，忽略OldCertificateId到期提醒
 * @method void setExpiringNotificationSwitch(integer $ExpiringNotificationSwitch) 设置旧证书是否忽略到期提醒  0:不忽略通知。1:忽略通知，忽略OldCertificateId到期提醒
 * @method boolean getRepeatable() 获取相同的证书是否允许重复上传，若选择上传证书， 则可以配置该参数
 * @method void setRepeatable(boolean $Repeatable) 设置相同的证书是否允许重复上传，若选择上传证书， 则可以配置该参数
 * @method boolean getAllowDownload() 获取是否允许下载，若选择上传证书， 则可以配置该参数
 * @method void setAllowDownload(boolean $AllowDownload) 设置是否允许下载，若选择上传证书， 则可以配置该参数
 * @method array getTags() 获取标签列表，若选择上传证书， 则可以配置该参数
 * @method void setTags(array $Tags) 设置标签列表，若选择上传证书， 则可以配置该参数
 * @method integer getProjectId() 获取项目 ID，若选择上传证书， 则可以配置该参数
 * @method void setProjectId(integer $ProjectId) 设置项目 ID，若选择上传证书， 则可以配置该参数
 */
class UpdateCertificateInstanceRequest extends AbstractModel
{
    /**
     * @var string 一键更新原证书ID， 查询绑定该证书的云资源然后进行证书更新
     */
    public $OldCertificateId;

    /**
     * @var array 需要部署的资源类型，参数值可选（小写）：clb、cdn、waf、live、ddos、teo、apigateway、vod、tke、tcb、tse
     */
    public $ResourceTypes;

    /**
     * @var string 一键更新新证书ID，不传该则证书公钥和私钥必传
     */
    public $CertificateId;

    /**
     * @var array 需要部署的地域列表（废弃）
     * @deprecated
     */
    public $Regions;

    /**
     * @var array 云资源需要部署的地域列表，支持地域的云资源类型必传，如：clb、tke、apigateway、waf、tcb、tse等
     */
    public $ResourceTypesRegions;

    /**
     * @var string 证书公钥， 若上传证书公钥， 则CertificateId不用传
     */
    public $CertificatePublicKey;

    /**
     * @var string 证书私钥，若上传证书公钥， 则CertificateId不用传
     */
    public $CertificatePrivateKey;

    /**
     * @var integer 旧证书是否忽略到期提醒  0:不忽略通知。1:忽略通知，忽略OldCertificateId到期提醒
     */
    public $ExpiringNotificationSwitch;

    /**
     * @var boolean 相同的证书是否允许重复上传，若选择上传证书， 则可以配置该参数
     */
    public $Repeatable;

    /**
     * @var boolean 是否允许下载，若选择上传证书， 则可以配置该参数
     */
    public $AllowDownload;

    /**
     * @var array 标签列表，若选择上传证书， 则可以配置该参数
     */
    public $Tags;

    /**
     * @var integer 项目 ID，若选择上传证书， 则可以配置该参数
     */
    public $ProjectId;

    /**
     * @param string $OldCertificateId 一键更新原证书ID， 查询绑定该证书的云资源然后进行证书更新
     * @param array $ResourceTypes 需要部署的资源类型，参数值可选（小写）：clb、cdn、waf、live、ddos、teo、apigateway、vod、tke、tcb、tse
     * @param string $CertificateId 一键更新新证书ID，不传该则证书公钥和私钥必传
     * @param array $Regions 需要部署的地域列表（废弃）
     * @param array $ResourceTypesRegions 云资源需要部署的地域列表，支持地域的云资源类型必传，如：clb、tke、apigateway、waf、tcb、tse等
     * @param string $CertificatePublicKey 证书公钥， 若上传证书公钥， 则CertificateId不用传
     * @param string $CertificatePrivateKey 证书私钥，若上传证书公钥， 则CertificateId不用传
     * @param integer $ExpiringNotificationSwitch 旧证书是否忽略到期提醒  0:不忽略通知。1:忽略通知，忽略OldCertificateId到期提醒
     * @param boolean $Repeatable 相同的证书是否允许重复上传，若选择上传证书， 则可以配置该参数
     * @param boolean $AllowDownload 是否允许下载，若选择上传证书， 则可以配置该参数
     * @param array $Tags 标签列表，若选择上传证书， 则可以配置该参数
     * @param integer $ProjectId 项目 ID，若选择上传证书， 则可以配置该参数
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
        if (array_key_exists("OldCertificateId",$param) and $param["OldCertificateId"] !== null) {
            $this->OldCertificateId = $param["OldCertificateId"];
        }

        if (array_key_exists("ResourceTypes",$param) and $param["ResourceTypes"] !== null) {
            $this->ResourceTypes = $param["ResourceTypes"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }

        if (array_key_exists("ResourceTypesRegions",$param) and $param["ResourceTypesRegions"] !== null) {
            $this->ResourceTypesRegions = [];
            foreach ($param["ResourceTypesRegions"] as $key => $value){
                $obj = new ResourceTypeRegions();
                $obj->deserialize($value);
                array_push($this->ResourceTypesRegions, $obj);
            }
        }

        if (array_key_exists("CertificatePublicKey",$param) and $param["CertificatePublicKey"] !== null) {
            $this->CertificatePublicKey = $param["CertificatePublicKey"];
        }

        if (array_key_exists("CertificatePrivateKey",$param) and $param["CertificatePrivateKey"] !== null) {
            $this->CertificatePrivateKey = $param["CertificatePrivateKey"];
        }

        if (array_key_exists("ExpiringNotificationSwitch",$param) and $param["ExpiringNotificationSwitch"] !== null) {
            $this->ExpiringNotificationSwitch = $param["ExpiringNotificationSwitch"];
        }

        if (array_key_exists("Repeatable",$param) and $param["Repeatable"] !== null) {
            $this->Repeatable = $param["Repeatable"];
        }

        if (array_key_exists("AllowDownload",$param) and $param["AllowDownload"] !== null) {
            $this->AllowDownload = $param["AllowDownload"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
