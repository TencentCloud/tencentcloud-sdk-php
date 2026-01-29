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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCertificateInstance请求参数结构体
 *
 * @method string getOldCertificateId() 获取<p>一键更新的旧证书ID。 通过查询该证书ID绑定的云资源，然后使用新证书对这些云资源进行更新</p>
 * @method void setOldCertificateId(string $OldCertificateId) 设置<p>一键更新的旧证书ID。 通过查询该证书ID绑定的云资源，然后使用新证书对这些云资源进行更新</p>
 * @method array getResourceTypes() 获取<p>需要部署的资源类型，参数值可选（小写）：clb、cdn、waf、live、ddos、teo、apigateway、vod、tke、tcb、tse、cos、mqtt、scf、tdmq、gaap</p>
 * @method void setResourceTypes(array $ResourceTypes) 设置<p>需要部署的资源类型，参数值可选（小写）：clb、cdn、waf、live、ddos、teo、apigateway、vod、tke、tcb、tse、cos、mqtt、scf、tdmq、gaap</p>
 * @method string getCertificateId() 获取<p>一键更新的新证书ID。 不传该参数，则公钥证书和私钥证书必传</p>
 * @method void setCertificateId(string $CertificateId) 设置<p>一键更新的新证书ID。 不传该参数，则公钥证书和私钥证书必传</p>
 * @method array getRegions() 获取<p>需要部署的地域列表（废弃）</p>
 * @method void setRegions(array $Regions) 设置<p>需要部署的地域列表（废弃）</p>
 * @method array getResourceTypesRegions() 获取<p>云资源需要部署的地域列表，支持地域的云资源类型必传，取值：clb、tke、apigateway、waf、tcb、tse、cos、mqtt、scf、tdmq</p>
 * @method void setResourceTypesRegions(array $ResourceTypesRegions) 设置<p>云资源需要部署的地域列表，支持地域的云资源类型必传，取值：clb、tke、apigateway、waf、tcb、tse、cos、mqtt、scf、tdmq</p>
 * @method string getCertificatePublicKey() 获取<p>公钥证书， 若上传公钥证书，那么私钥证书必传。  则CertificateId不用传</p>
 * @method void setCertificatePublicKey(string $CertificatePublicKey) 设置<p>公钥证书， 若上传公钥证书，那么私钥证书必传。  则CertificateId不用传</p>
 * @method string getCertificatePrivateKey() 获取<p>私钥证书，若上传私钥证书， 那么公钥证书必传；  则CertificateId不用传</p>
 * @method void setCertificatePrivateKey(string $CertificatePrivateKey) 设置<p>私钥证书，若上传私钥证书， 那么公钥证书必传；  则CertificateId不用传</p>
 * @method integer getExpiringNotificationSwitch() 获取<p>旧证书是否忽略到期提醒  0:不忽略通知。1:忽略通知，忽略OldCertificateId到期提醒</p>
 * @method void setExpiringNotificationSwitch(integer $ExpiringNotificationSwitch) 设置<p>旧证书是否忽略到期提醒  0:不忽略通知。1:忽略通知，忽略OldCertificateId到期提醒</p>
 * @method boolean getRepeatable() 获取<p>相同的证书是否允许重复上传，若选择上传公钥私钥证书， 则可以配置该参数。 若存在相同重复证书，则更新任务会失败</p>
 * @method void setRepeatable(boolean $Repeatable) 设置<p>相同的证书是否允许重复上传，若选择上传公钥私钥证书， 则可以配置该参数。 若存在相同重复证书，则更新任务会失败</p>
 * @method boolean getAllowDownload() 获取<p>是否允许下载，若选择上传公私钥证书， 则可以配置该参数</p>
 * @method void setAllowDownload(boolean $AllowDownload) 设置<p>是否允许下载，若选择上传公私钥证书， 则可以配置该参数</p>
 * @method array getTags() 获取<p>标签列表，若选择上传公私钥证书， 则可以配置该参数</p>
 * @method void setTags(array $Tags) 设置<p>标签列表，若选择上传公私钥证书， 则可以配置该参数</p>
 * @method integer getProjectId() 获取<p>项目 ID，若选择上传公私钥证书， 则可以配置该参数</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目 ID，若选择上传公私钥证书， 则可以配置该参数</p>
 */
class UpdateCertificateInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>一键更新的旧证书ID。 通过查询该证书ID绑定的云资源，然后使用新证书对这些云资源进行更新</p>
     */
    public $OldCertificateId;

    /**
     * @var array <p>需要部署的资源类型，参数值可选（小写）：clb、cdn、waf、live、ddos、teo、apigateway、vod、tke、tcb、tse、cos、mqtt、scf、tdmq、gaap</p>
     */
    public $ResourceTypes;

    /**
     * @var string <p>一键更新的新证书ID。 不传该参数，则公钥证书和私钥证书必传</p>
     */
    public $CertificateId;

    /**
     * @var array <p>需要部署的地域列表（废弃）</p>
     * @deprecated
     */
    public $Regions;

    /**
     * @var array <p>云资源需要部署的地域列表，支持地域的云资源类型必传，取值：clb、tke、apigateway、waf、tcb、tse、cos、mqtt、scf、tdmq</p>
     */
    public $ResourceTypesRegions;

    /**
     * @var string <p>公钥证书， 若上传公钥证书，那么私钥证书必传。  则CertificateId不用传</p>
     */
    public $CertificatePublicKey;

    /**
     * @var string <p>私钥证书，若上传私钥证书， 那么公钥证书必传；  则CertificateId不用传</p>
     */
    public $CertificatePrivateKey;

    /**
     * @var integer <p>旧证书是否忽略到期提醒  0:不忽略通知。1:忽略通知，忽略OldCertificateId到期提醒</p>
     */
    public $ExpiringNotificationSwitch;

    /**
     * @var boolean <p>相同的证书是否允许重复上传，若选择上传公钥私钥证书， 则可以配置该参数。 若存在相同重复证书，则更新任务会失败</p>
     */
    public $Repeatable;

    /**
     * @var boolean <p>是否允许下载，若选择上传公私钥证书， 则可以配置该参数</p>
     */
    public $AllowDownload;

    /**
     * @var array <p>标签列表，若选择上传公私钥证书， 则可以配置该参数</p>
     */
    public $Tags;

    /**
     * @var integer <p>项目 ID，若选择上传公私钥证书， 则可以配置该参数</p>
     */
    public $ProjectId;

    /**
     * @param string $OldCertificateId <p>一键更新的旧证书ID。 通过查询该证书ID绑定的云资源，然后使用新证书对这些云资源进行更新</p>
     * @param array $ResourceTypes <p>需要部署的资源类型，参数值可选（小写）：clb、cdn、waf、live、ddos、teo、apigateway、vod、tke、tcb、tse、cos、mqtt、scf、tdmq、gaap</p>
     * @param string $CertificateId <p>一键更新的新证书ID。 不传该参数，则公钥证书和私钥证书必传</p>
     * @param array $Regions <p>需要部署的地域列表（废弃）</p>
     * @param array $ResourceTypesRegions <p>云资源需要部署的地域列表，支持地域的云资源类型必传，取值：clb、tke、apigateway、waf、tcb、tse、cos、mqtt、scf、tdmq</p>
     * @param string $CertificatePublicKey <p>公钥证书， 若上传公钥证书，那么私钥证书必传。  则CertificateId不用传</p>
     * @param string $CertificatePrivateKey <p>私钥证书，若上传私钥证书， 那么公钥证书必传；  则CertificateId不用传</p>
     * @param integer $ExpiringNotificationSwitch <p>旧证书是否忽略到期提醒  0:不忽略通知。1:忽略通知，忽略OldCertificateId到期提醒</p>
     * @param boolean $Repeatable <p>相同的证书是否允许重复上传，若选择上传公钥私钥证书， 则可以配置该参数。 若存在相同重复证书，则更新任务会失败</p>
     * @param boolean $AllowDownload <p>是否允许下载，若选择上传公私钥证书， 则可以配置该参数</p>
     * @param array $Tags <p>标签列表，若选择上传公私钥证书， 则可以配置该参数</p>
     * @param integer $ProjectId <p>项目 ID，若选择上传公私钥证书， 则可以配置该参数</p>
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
