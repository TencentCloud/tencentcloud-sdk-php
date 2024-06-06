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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 加速域名源站信息。
 *
 * @method string getOriginType() 获取源站类型，取值有：
<li>IP_DOMAIN：IPV4、IPV6 或域名类型源站；</li>
<li>COS：腾讯云 COS 对象存储源站；</li>
<li>AWS_S3：AWS S3 对象存储源站；</li>
<li>ORIGIN_GROUP：源站组类型源站；</li>
 <li>VOD：云点播；</li>
<li>SPACE：源站卸载，当前仅白名单开放；</li>
<li>LB：负载均衡，当前仅白名单开放。</li>
 * @method void setOriginType(string $OriginType) 设置源站类型，取值有：
<li>IP_DOMAIN：IPV4、IPV6 或域名类型源站；</li>
<li>COS：腾讯云 COS 对象存储源站；</li>
<li>AWS_S3：AWS S3 对象存储源站；</li>
<li>ORIGIN_GROUP：源站组类型源站；</li>
 <li>VOD：云点播；</li>
<li>SPACE：源站卸载，当前仅白名单开放；</li>
<li>LB：负载均衡，当前仅白名单开放。</li>
 * @method string getOrigin() 获取源站地址，根据 OriginType 的取值分为以下情况：
<li>当 OriginType = IP_DOMAIN 时，该参数请填写 IPv4、IPv6 地址或域名；</li>
<li>当 OriginType = COS 时，该参数请填写 COS 桶的访问域名；</li>
<li>当 OriginType = AWS_S3，该参数请填写 S3 桶的访问域名；</li>
<li>当 OriginType = ORIGIN_GROUP 时，该参数请填写源站组 ID；</li>
<li>当 OriginType = VOD 时，该参数请填写云点播应用 ID ；</li>
<li>当 OriginType = LB 时，该参数请填写负载均衡实例 ID，该功能当前仅白名单开放；</li>
<li>当 OriginType = SPACE 时，该参数请填写源站卸载空间 ID，该功能当前仅白名单开放。</li>
 * @method void setOrigin(string $Origin) 设置源站地址，根据 OriginType 的取值分为以下情况：
<li>当 OriginType = IP_DOMAIN 时，该参数请填写 IPv4、IPv6 地址或域名；</li>
<li>当 OriginType = COS 时，该参数请填写 COS 桶的访问域名；</li>
<li>当 OriginType = AWS_S3，该参数请填写 S3 桶的访问域名；</li>
<li>当 OriginType = ORIGIN_GROUP 时，该参数请填写源站组 ID；</li>
<li>当 OriginType = VOD 时，该参数请填写云点播应用 ID ；</li>
<li>当 OriginType = LB 时，该参数请填写负载均衡实例 ID，该功能当前仅白名单开放；</li>
<li>当 OriginType = SPACE 时，该参数请填写源站卸载空间 ID，该功能当前仅白名单开放。</li>
 * @method string getBackupOrigin() 获取备用源站组 ID，该参数仅在 OriginType = ORIGIN_GROUP 时生效，该字段为旧版能力，调用后控制台无法进行配置修改，如需使用请提交工单咨询。
 * @method void setBackupOrigin(string $BackupOrigin) 设置备用源站组 ID，该参数仅在 OriginType = ORIGIN_GROUP 时生效，该字段为旧版能力，调用后控制台无法进行配置修改，如需使用请提交工单咨询。
 * @method string getPrivateAccess() 获取指定是否允许访问私有对象存储源站，该参数仅当源站类型 OriginType = COS 或 AWS_S3 时会生效，取值有：
<li>on：使用私有鉴权；</li>
<li>off：不使用私有鉴权。</li>
不填写时，默认值为off。
 * @method void setPrivateAccess(string $PrivateAccess) 设置指定是否允许访问私有对象存储源站，该参数仅当源站类型 OriginType = COS 或 AWS_S3 时会生效，取值有：
<li>on：使用私有鉴权；</li>
<li>off：不使用私有鉴权。</li>
不填写时，默认值为off。
 * @method array getPrivateParameters() 获取私有鉴权使用参数，该参数仅当源站类型 PrivateAccess = on 时会生效。
 * @method void setPrivateParameters(array $PrivateParameters) 设置私有鉴权使用参数，该参数仅当源站类型 PrivateAccess = on 时会生效。
 * @method integer getVodeoSubAppId() 获取VODEO 子应用 ID。该参数当 OriginType = VODEO 时必填。
 * @method void setVodeoSubAppId(integer $VodeoSubAppId) 设置VODEO 子应用 ID。该参数当 OriginType = VODEO 时必填。
 * @method string getVodeoDistributionRange() 获取VODEO 分发范围，该参数当 OriginType = VODEO 时必填。取值有： 
<li>All：当前应用下所有存储桶；</li> 
<li>Bucket：指定的某一个存储桶。</li>
 * @method void setVodeoDistributionRange(string $VodeoDistributionRange) 设置VODEO 分发范围，该参数当 OriginType = VODEO 时必填。取值有： 
<li>All：当前应用下所有存储桶；</li> 
<li>Bucket：指定的某一个存储桶。</li>
 * @method string getVodeoBucketId() 获取VODEO 存储桶 ID，该参数当 OriginType = VODEO 且 VodeoDistributionRange = Bucket 时必填。
 * @method void setVodeoBucketId(string $VodeoBucketId) 设置VODEO 存储桶 ID，该参数当 OriginType = VODEO 且 VodeoDistributionRange = Bucket 时必填。
 */
class OriginInfo extends AbstractModel
{
    /**
     * @var string 源站类型，取值有：
<li>IP_DOMAIN：IPV4、IPV6 或域名类型源站；</li>
<li>COS：腾讯云 COS 对象存储源站；</li>
<li>AWS_S3：AWS S3 对象存储源站；</li>
<li>ORIGIN_GROUP：源站组类型源站；</li>
 <li>VOD：云点播；</li>
<li>SPACE：源站卸载，当前仅白名单开放；</li>
<li>LB：负载均衡，当前仅白名单开放。</li>
     */
    public $OriginType;

    /**
     * @var string 源站地址，根据 OriginType 的取值分为以下情况：
<li>当 OriginType = IP_DOMAIN 时，该参数请填写 IPv4、IPv6 地址或域名；</li>
<li>当 OriginType = COS 时，该参数请填写 COS 桶的访问域名；</li>
<li>当 OriginType = AWS_S3，该参数请填写 S3 桶的访问域名；</li>
<li>当 OriginType = ORIGIN_GROUP 时，该参数请填写源站组 ID；</li>
<li>当 OriginType = VOD 时，该参数请填写云点播应用 ID ；</li>
<li>当 OriginType = LB 时，该参数请填写负载均衡实例 ID，该功能当前仅白名单开放；</li>
<li>当 OriginType = SPACE 时，该参数请填写源站卸载空间 ID，该功能当前仅白名单开放。</li>
     */
    public $Origin;

    /**
     * @var string 备用源站组 ID，该参数仅在 OriginType = ORIGIN_GROUP 时生效，该字段为旧版能力，调用后控制台无法进行配置修改，如需使用请提交工单咨询。
     */
    public $BackupOrigin;

    /**
     * @var string 指定是否允许访问私有对象存储源站，该参数仅当源站类型 OriginType = COS 或 AWS_S3 时会生效，取值有：
<li>on：使用私有鉴权；</li>
<li>off：不使用私有鉴权。</li>
不填写时，默认值为off。
     */
    public $PrivateAccess;

    /**
     * @var array 私有鉴权使用参数，该参数仅当源站类型 PrivateAccess = on 时会生效。
     */
    public $PrivateParameters;

    /**
     * @var integer VODEO 子应用 ID。该参数当 OriginType = VODEO 时必填。
     */
    public $VodeoSubAppId;

    /**
     * @var string VODEO 分发范围，该参数当 OriginType = VODEO 时必填。取值有： 
<li>All：当前应用下所有存储桶；</li> 
<li>Bucket：指定的某一个存储桶。</li>
     */
    public $VodeoDistributionRange;

    /**
     * @var string VODEO 存储桶 ID，该参数当 OriginType = VODEO 且 VodeoDistributionRange = Bucket 时必填。
     */
    public $VodeoBucketId;

    /**
     * @param string $OriginType 源站类型，取值有：
<li>IP_DOMAIN：IPV4、IPV6 或域名类型源站；</li>
<li>COS：腾讯云 COS 对象存储源站；</li>
<li>AWS_S3：AWS S3 对象存储源站；</li>
<li>ORIGIN_GROUP：源站组类型源站；</li>
 <li>VOD：云点播；</li>
<li>SPACE：源站卸载，当前仅白名单开放；</li>
<li>LB：负载均衡，当前仅白名单开放。</li>
     * @param string $Origin 源站地址，根据 OriginType 的取值分为以下情况：
<li>当 OriginType = IP_DOMAIN 时，该参数请填写 IPv4、IPv6 地址或域名；</li>
<li>当 OriginType = COS 时，该参数请填写 COS 桶的访问域名；</li>
<li>当 OriginType = AWS_S3，该参数请填写 S3 桶的访问域名；</li>
<li>当 OriginType = ORIGIN_GROUP 时，该参数请填写源站组 ID；</li>
<li>当 OriginType = VOD 时，该参数请填写云点播应用 ID ；</li>
<li>当 OriginType = LB 时，该参数请填写负载均衡实例 ID，该功能当前仅白名单开放；</li>
<li>当 OriginType = SPACE 时，该参数请填写源站卸载空间 ID，该功能当前仅白名单开放。</li>
     * @param string $BackupOrigin 备用源站组 ID，该参数仅在 OriginType = ORIGIN_GROUP 时生效，该字段为旧版能力，调用后控制台无法进行配置修改，如需使用请提交工单咨询。
     * @param string $PrivateAccess 指定是否允许访问私有对象存储源站，该参数仅当源站类型 OriginType = COS 或 AWS_S3 时会生效，取值有：
<li>on：使用私有鉴权；</li>
<li>off：不使用私有鉴权。</li>
不填写时，默认值为off。
     * @param array $PrivateParameters 私有鉴权使用参数，该参数仅当源站类型 PrivateAccess = on 时会生效。
     * @param integer $VodeoSubAppId VODEO 子应用 ID。该参数当 OriginType = VODEO 时必填。
     * @param string $VodeoDistributionRange VODEO 分发范围，该参数当 OriginType = VODEO 时必填。取值有： 
<li>All：当前应用下所有存储桶；</li> 
<li>Bucket：指定的某一个存储桶。</li>
     * @param string $VodeoBucketId VODEO 存储桶 ID，该参数当 OriginType = VODEO 且 VodeoDistributionRange = Bucket 时必填。
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
        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("BackupOrigin",$param) and $param["BackupOrigin"] !== null) {
            $this->BackupOrigin = $param["BackupOrigin"];
        }

        if (array_key_exists("PrivateAccess",$param) and $param["PrivateAccess"] !== null) {
            $this->PrivateAccess = $param["PrivateAccess"];
        }

        if (array_key_exists("PrivateParameters",$param) and $param["PrivateParameters"] !== null) {
            $this->PrivateParameters = [];
            foreach ($param["PrivateParameters"] as $key => $value){
                $obj = new PrivateParameter();
                $obj->deserialize($value);
                array_push($this->PrivateParameters, $obj);
            }
        }

        if (array_key_exists("VodeoSubAppId",$param) and $param["VodeoSubAppId"] !== null) {
            $this->VodeoSubAppId = $param["VodeoSubAppId"];
        }

        if (array_key_exists("VodeoDistributionRange",$param) and $param["VodeoDistributionRange"] !== null) {
            $this->VodeoDistributionRange = $param["VodeoDistributionRange"];
        }

        if (array_key_exists("VodeoBucketId",$param) and $param["VodeoBucketId"] !== null) {
            $this->VodeoBucketId = $param["VodeoBucketId"];
        }
    }
}
