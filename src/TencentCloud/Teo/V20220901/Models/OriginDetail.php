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
<li>当 OriginType = IP_DOMAIN 时，该参数为 IPv4、IPv6 地址或域名；</li>
<li>当 OriginType = COS 时，该参数为 COS 桶的访问域名；</li>
<li>当 OriginType = AWS_S3，该参数为 S3 桶的访问域名；</li>
<li>当 OriginType = ORIGIN_GROUP 时，该参数为源站组 ID；</li>
<li>当 OriginType = VOD 时，该参数请填写云点播应用 ID ；</li>
 * @method void setOrigin(string $Origin) 设置源站地址，根据 OriginType 的取值分为以下情况：
<li>当 OriginType = IP_DOMAIN 时，该参数为 IPv4、IPv6 地址或域名；</li>
<li>当 OriginType = COS 时，该参数为 COS 桶的访问域名；</li>
<li>当 OriginType = AWS_S3，该参数为 S3 桶的访问域名；</li>
<li>当 OriginType = ORIGIN_GROUP 时，该参数为源站组 ID；</li>
<li>当 OriginType = VOD 时，该参数请填写云点播应用 ID ；</li>
 * @method string getBackupOrigin() 获取备用源站组 ID，该参数仅在 OriginType = ORIGIN_GROUP 且配置了备源站组时会生效。
 * @method void setBackupOrigin(string $BackupOrigin) 设置备用源站组 ID，该参数仅在 OriginType = ORIGIN_GROUP 且配置了备源站组时会生效。
 * @method string getOriginGroupName() 获取主源源站组名称，当 OriginType = ORIGIN_GROUP 时该参数会返回值。
 * @method void setOriginGroupName(string $OriginGroupName) 设置主源源站组名称，当 OriginType = ORIGIN_GROUP 时该参数会返回值。
 * @method string getBackOriginGroupName() 获取备用源站组名称，该参数仅当 OriginType = ORIGIN_GROUP 且配置了备用源站组时会生效。
 * @method void setBackOriginGroupName(string $BackOriginGroupName) 设置备用源站组名称，该参数仅当 OriginType = ORIGIN_GROUP 且配置了备用源站组时会生效。
 * @method string getPrivateAccess() 获取指定是否允许访问私有对象存储源站，该参数仅当源站类型OriginType = COS 或 AWS_S3 时会生效，取值有：
<li>on：使用私有鉴权；</li>
<li>off：不使用私有鉴权。</li>
不填写，默认值为 off。
 * @method void setPrivateAccess(string $PrivateAccess) 设置指定是否允许访问私有对象存储源站，该参数仅当源站类型OriginType = COS 或 AWS_S3 时会生效，取值有：
<li>on：使用私有鉴权；</li>
<li>off：不使用私有鉴权。</li>
不填写，默认值为 off。
 * @method array getPrivateParameters() 获取私有鉴权使用参数，该参数仅当源站类型 PrivateAccess = on 时会生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateParameters(array $PrivateParameters) 设置私有鉴权使用参数，该参数仅当源站类型 PrivateAccess = on 时会生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostHeader() 获取当前配置的回源 HOST 头。
 * @method void setHostHeader(string $HostHeader) 设置当前配置的回源 HOST 头。
 * @method integer getVodeoSubAppId() 获取MO 子应用 ID
 * @method void setVodeoSubAppId(integer $VodeoSubAppId) 设置MO 子应用 ID
 * @method string getVodeoDistributionRange() 获取MO 分发范围，取值有： <li>All：全部</li> <li>Bucket：存储桶</li>
 * @method void setVodeoDistributionRange(string $VodeoDistributionRange) 设置MO 分发范围，取值有： <li>All：全部</li> <li>Bucket：存储桶</li>
 * @method string getVodeoBucketId() 获取MO 存储桶 ID，分发范围(DistributionRange)为存储桶(Bucket)时必填
 * @method void setVodeoBucketId(string $VodeoBucketId) 设置MO 存储桶 ID，分发范围(DistributionRange)为存储桶(Bucket)时必填
 * @method string getVodOriginScope() 获取云点播回源范围，当 OriginType = VOD 时该参数会返回值。取值有:<li>all：当前源站对应的云点播应用内所有文件，默认值为 all；</li> <li>bucket：当前源站对应的云点播应用下指定某一个存储桶内的文件。通过参数 VodBucketId 来指定存储桶。
</li>
 * @method void setVodOriginScope(string $VodOriginScope) 设置云点播回源范围，当 OriginType = VOD 时该参数会返回值。取值有:<li>all：当前源站对应的云点播应用内所有文件，默认值为 all；</li> <li>bucket：当前源站对应的云点播应用下指定某一个存储桶内的文件。通过参数 VodBucketId 来指定存储桶。
</li>
 * @method string getVodBucketId() 获取云点播存储桶 ID，该参数当 OriginType = VOD 且 VodOriginScope = bucket 时必填。数据来源：云点播专业版应用下存储桶的存储 ID 。
 * @method void setVodBucketId(string $VodBucketId) 设置云点播存储桶 ID，该参数当 OriginType = VOD 且 VodOriginScope = bucket 时必填。数据来源：云点播专业版应用下存储桶的存储 ID 。
 */
class OriginDetail extends AbstractModel
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
<li>当 OriginType = IP_DOMAIN 时，该参数为 IPv4、IPv6 地址或域名；</li>
<li>当 OriginType = COS 时，该参数为 COS 桶的访问域名；</li>
<li>当 OriginType = AWS_S3，该参数为 S3 桶的访问域名；</li>
<li>当 OriginType = ORIGIN_GROUP 时，该参数为源站组 ID；</li>
<li>当 OriginType = VOD 时，该参数请填写云点播应用 ID ；</li>
     */
    public $Origin;

    /**
     * @var string 备用源站组 ID，该参数仅在 OriginType = ORIGIN_GROUP 且配置了备源站组时会生效。
     */
    public $BackupOrigin;

    /**
     * @var string 主源源站组名称，当 OriginType = ORIGIN_GROUP 时该参数会返回值。
     */
    public $OriginGroupName;

    /**
     * @var string 备用源站组名称，该参数仅当 OriginType = ORIGIN_GROUP 且配置了备用源站组时会生效。
     */
    public $BackOriginGroupName;

    /**
     * @var string 指定是否允许访问私有对象存储源站，该参数仅当源站类型OriginType = COS 或 AWS_S3 时会生效，取值有：
<li>on：使用私有鉴权；</li>
<li>off：不使用私有鉴权。</li>
不填写，默认值为 off。
     */
    public $PrivateAccess;

    /**
     * @var array 私有鉴权使用参数，该参数仅当源站类型 PrivateAccess = on 时会生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateParameters;

    /**
     * @var string 当前配置的回源 HOST 头。
     */
    public $HostHeader;

    /**
     * @var integer MO 子应用 ID
     * @deprecated
     */
    public $VodeoSubAppId;

    /**
     * @var string MO 分发范围，取值有： <li>All：全部</li> <li>Bucket：存储桶</li>
     * @deprecated
     */
    public $VodeoDistributionRange;

    /**
     * @var string MO 存储桶 ID，分发范围(DistributionRange)为存储桶(Bucket)时必填
     * @deprecated
     */
    public $VodeoBucketId;

    /**
     * @var string 云点播回源范围，当 OriginType = VOD 时该参数会返回值。取值有:<li>all：当前源站对应的云点播应用内所有文件，默认值为 all；</li> <li>bucket：当前源站对应的云点播应用下指定某一个存储桶内的文件。通过参数 VodBucketId 来指定存储桶。
</li>
     */
    public $VodOriginScope;

    /**
     * @var string 云点播存储桶 ID，该参数当 OriginType = VOD 且 VodOriginScope = bucket 时必填。数据来源：云点播专业版应用下存储桶的存储 ID 。
     */
    public $VodBucketId;

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
<li>当 OriginType = IP_DOMAIN 时，该参数为 IPv4、IPv6 地址或域名；</li>
<li>当 OriginType = COS 时，该参数为 COS 桶的访问域名；</li>
<li>当 OriginType = AWS_S3，该参数为 S3 桶的访问域名；</li>
<li>当 OriginType = ORIGIN_GROUP 时，该参数为源站组 ID；</li>
<li>当 OriginType = VOD 时，该参数请填写云点播应用 ID ；</li>
     * @param string $BackupOrigin 备用源站组 ID，该参数仅在 OriginType = ORIGIN_GROUP 且配置了备源站组时会生效。
     * @param string $OriginGroupName 主源源站组名称，当 OriginType = ORIGIN_GROUP 时该参数会返回值。
     * @param string $BackOriginGroupName 备用源站组名称，该参数仅当 OriginType = ORIGIN_GROUP 且配置了备用源站组时会生效。
     * @param string $PrivateAccess 指定是否允许访问私有对象存储源站，该参数仅当源站类型OriginType = COS 或 AWS_S3 时会生效，取值有：
<li>on：使用私有鉴权；</li>
<li>off：不使用私有鉴权。</li>
不填写，默认值为 off。
     * @param array $PrivateParameters 私有鉴权使用参数，该参数仅当源站类型 PrivateAccess = on 时会生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostHeader 当前配置的回源 HOST 头。
     * @param integer $VodeoSubAppId MO 子应用 ID
     * @param string $VodeoDistributionRange MO 分发范围，取值有： <li>All：全部</li> <li>Bucket：存储桶</li>
     * @param string $VodeoBucketId MO 存储桶 ID，分发范围(DistributionRange)为存储桶(Bucket)时必填
     * @param string $VodOriginScope 云点播回源范围，当 OriginType = VOD 时该参数会返回值。取值有:<li>all：当前源站对应的云点播应用内所有文件，默认值为 all；</li> <li>bucket：当前源站对应的云点播应用下指定某一个存储桶内的文件。通过参数 VodBucketId 来指定存储桶。
</li>
     * @param string $VodBucketId 云点播存储桶 ID，该参数当 OriginType = VOD 且 VodOriginScope = bucket 时必填。数据来源：云点播专业版应用下存储桶的存储 ID 。
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

        if (array_key_exists("OriginGroupName",$param) and $param["OriginGroupName"] !== null) {
            $this->OriginGroupName = $param["OriginGroupName"];
        }

        if (array_key_exists("BackOriginGroupName",$param) and $param["BackOriginGroupName"] !== null) {
            $this->BackOriginGroupName = $param["BackOriginGroupName"];
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

        if (array_key_exists("HostHeader",$param) and $param["HostHeader"] !== null) {
            $this->HostHeader = $param["HostHeader"];
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

        if (array_key_exists("VodOriginScope",$param) and $param["VodOriginScope"] !== null) {
            $this->VodOriginScope = $param["VodOriginScope"];
        }

        if (array_key_exists("VodBucketId",$param) and $param["VodBucketId"] !== null) {
            $this->VodBucketId = $param["VodBucketId"];
        }
    }
}
