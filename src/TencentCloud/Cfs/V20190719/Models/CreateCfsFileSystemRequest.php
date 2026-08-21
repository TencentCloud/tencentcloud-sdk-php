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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCfsFileSystem请求参数结构体
 *
 * @method string getZone() 获取<p>可用区名称</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/213/15707?">查询可用区列表</a></p>
 * @method void setZone(string $Zone) 设置<p>可用区名称</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/213/15707?">查询可用区列表</a></p>
 * @method string getNetInterface() 获取<p>网络类型</p><p>枚举值：</p><ul><li><p>VPC： 私有网络</p></li><li><p>CCN： 云联网</p></li><li><p>通用标准型/性能型（含增强型）、吞吐型请选择VPC</p></li><li><p>Turbo标准型/性能型可选VPC或CCN</p></li><li><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS时无需传入，传入将被忽略。</p></li></ul>
 * @method void setNetInterface(string $NetInterface) 设置<p>网络类型</p><p>枚举值：</p><ul><li><p>VPC： 私有网络</p></li><li><p>CCN： 云联网</p></li><li><p>通用标准型/性能型（含增强型）、吞吐型请选择VPC</p></li><li><p>Turbo标准型/性能型可选VPC或CCN</p></li><li><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS时无需传入，传入将被忽略。</p></li></ul>
 * @method string getPGroupId() 获取<p>权限组 ID。权限组规定了一组可来访白名单及操作权限。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/582/38157">DescribeCfsPGroups</a></p><ul><li>pgroupbasic 为【默认权限组】，【默认权限组】允许所有IP地址访问及读写权限。 </li><li>注意：当 Scenario=AgentSandbox 时，即创建 AgentCFS ，必须传入 pgroupbasic【默认权限组】，传其他值报错。</li></ul>
 * @method void setPGroupId(string $PGroupId) 设置<p>权限组 ID。权限组规定了一组可来访白名单及操作权限。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/582/38157">DescribeCfsPGroups</a></p><ul><li>pgroupbasic 为【默认权限组】，【默认权限组】允许所有IP地址访问及读写权限。 </li><li>注意：当 Scenario=AgentSandbox 时，即创建 AgentCFS ，必须传入 pgroupbasic【默认权限组】，传其他值报错。</li></ul>
 * @method string getProtocol() 获取<p>文件系统协议类型</p><p>枚举值：</p><ul><li>NFS： 通用标准型（含增强型）、通用性能型（含增强型）支持创建此协议的实例</li><li>CIFS： 即SMB协议，仅部分可用区的通用标准型、吞吐型支持此协议。</li><li>TURBO： Turbo标准型/Turbo性能型/AgentCFS是支持创建此协议的实例</li></ul><p>默认值：NFS</p>
 * @method void setProtocol(string $Protocol) 设置<p>文件系统协议类型</p><p>枚举值：</p><ul><li>NFS： 通用标准型（含增强型）、通用性能型（含增强型）支持创建此协议的实例</li><li>CIFS： 即SMB协议，仅部分可用区的通用标准型、吞吐型支持此协议。</li><li>TURBO： Turbo标准型/Turbo性能型/AgentCFS是支持创建此协议的实例</li></ul><p>默认值：NFS</p>
 * @method string getStorageType() 获取<p>文件系统存储类型其中 SD 为通用标准型存储， HP为通用性能型存储， TB为Turbo标准型， TP 为Turbo性能型。</p><p>枚举值：</p><ul><li>SD： 通用标准型（含增强型）。通用标准型 version = v1.5，通用标准型（增强型） version = v3.1。</li><li>HP： 通用性能型（含增强型）。通用性能型 version = v1.5，通用性能型（增强型） version = v3.1。</li><li>TB： Turbo标准型</li><li>TP： Turbo性能型</li><li>THP： 吞吐型</li></ul><p>默认值：SD</p>
 * @method void setStorageType(string $StorageType) 设置<p>文件系统存储类型其中 SD 为通用标准型存储， HP为通用性能型存储， TB为Turbo标准型， TP 为Turbo性能型。</p><p>枚举值：</p><ul><li>SD： 通用标准型（含增强型）。通用标准型 version = v1.5，通用标准型（增强型） version = v3.1。</li><li>HP： 通用性能型（含增强型）。通用性能型 version = v1.5，通用性能型（增强型） version = v3.1。</li><li>TB： Turbo标准型</li><li>TP： Turbo性能型</li><li>THP： 吞吐型</li></ul><p>默认值：SD</p>
 * @method string getVpcId() 获取<p>私有网络（VPC） ID，若网络类型选择的是VPC，该字段为必填。</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/215/15778">查询VPC列表</a></p><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS 时无需传入，传入将被忽略。</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络（VPC） ID，若网络类型选择的是VPC，该字段为必填。</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/215/15778">查询VPC列表</a></p><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS 时无需传入，传入将被忽略。</p>
 * @method string getSubnetId() 获取<p>子网 ID，若网络类型选择的是VPC，该字段为必填。</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/215/15784">查询子网列表</a></p><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS 时无需传入，传入将被忽略。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网 ID，若网络类型选择的是VPC，该字段为必填。</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/215/15784">查询子网列表</a></p><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS 时无需传入，传入将被忽略。</p>
 * @method string getMountIP() 获取<p>指定IP地址，仅VPC网络支持；若不填写、将在该子网下随机分配 IP，Turbo系列当前不支持指定</p>
 * @method void setMountIP(string $MountIP) 设置<p>指定IP地址，仅VPC网络支持；若不填写、将在该子网下随机分配 IP，Turbo系列当前不支持指定</p>
 * @method string getFsName() 获取<p>用户自定义文件系统名称</p>
 * @method void setFsName(string $FsName) 设置<p>用户自定义文件系统名称</p>
 * @method boolean getEncrypted() 获取<p>文件系统是否加密，若留空则默认为不加密</p>
 * @method void setEncrypted(boolean $Encrypted) 设置<p>文件系统是否加密，若留空则默认为不加密</p>
 * @method array getResourceTags() 获取<p>文件系统标签</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>文件系统标签</p>
 * @method string getClientToken() 获取<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。用于保证请求幂等性的字符串失效时间为2小时。</p>
 * @method void setClientToken(string $ClientToken) 设置<p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。用于保证请求幂等性的字符串失效时间为2小时。</p>
 * @method string getCcnId() 获取<p>云联网ID， 若网络类型选择的是CCN，该字段为必填</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/215/19199">查询CCN列表</a></p><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS 时无需传入，传入将被忽略</p>
 * @method void setCcnId(string $CcnId) 设置<p>云联网ID， 若网络类型选择的是CCN，该字段为必填</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/215/19199">查询CCN列表</a></p><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS 时无需传入，传入将被忽略</p>
 * @method string getCidrBlock() 获取<p>云联网中CFS使用的网段， 若网络类型选择的是CCN，该字段为必填，且不能和Ccn中已经绑定的网段冲突</p><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS 时无需传入，传入将被忽略</p>
 * @method void setCidrBlock(string $CidrBlock) 设置<p>云联网中CFS使用的网段， 若网络类型选择的是CCN，该字段为必填，且不能和Ccn中已经绑定的网段冲突</p><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS 时无需传入，传入将被忽略</p>
 * @method integer getCapacity() 获取<p>文件系统容量，turbo系列必填</p><p>单位：GiB</p><p>Turbo标准型起售20TiB，即20480 GiB，扩容步长10TiB，即10240 GiB。Turbo性能型起售10TiB，即10240 GiB，扩容步长10TiB，即10240 GiB。</p>
 * @method void setCapacity(integer $Capacity) 设置<p>文件系统容量，turbo系列必填</p><p>单位：GiB</p><p>Turbo标准型起售20TiB，即20480 GiB，扩容步长10TiB，即10240 GiB。Turbo性能型起售10TiB，即10240 GiB，扩容步长10TiB，即10240 GiB。</p>
 * @method string getSnapshotId() 获取<p>文件系统快照 ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/582/80206">DescribeCfsSnapshots</a></p>
 * @method void setSnapshotId(string $SnapshotId) 设置<p>文件系统快照 ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/582/80206">DescribeCfsSnapshots</a></p>
 * @method string getAutoSnapshotPolicyId() 获取<p>定期快照策略 ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/582/80208">DescribeAutoSnapshotPolicies</a></p>
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) 设置<p>定期快照策略 ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/582/80208">DescribeAutoSnapshotPolicies</a></p>
 * @method boolean getEnableAutoScaleUp() 获取<p>是否开启自动扩容策略，仅turbo类型文件存储支持</p>
 * @method void setEnableAutoScaleUp(boolean $EnableAutoScaleUp) 设置<p>是否开启自动扩容策略，仅turbo类型文件存储支持</p>
 * @method string getCfsVersion() 获取<p>文件系统版本号。</p><p>枚举值：</p><ul><li>v1.5： 创建通用标准型/通用性能型文件系统</li><li>v3.1： 创建通用标准型（增强型）/通用性能型（增强型）文件系统，如需创建增强型，此为必填项。</li><li>v4.0： 创建Turbo标准型、Turbo性能型、吞吐型文件系统，非必填项</li></ul><p>创建通用标准型（增强型）、通用性能型（增强型）须加白主账号，如需使用请联系我们。</p>
 * @method void setCfsVersion(string $CfsVersion) 设置<p>文件系统版本号。</p><p>枚举值：</p><ul><li>v1.5： 创建通用标准型/通用性能型文件系统</li><li>v3.1： 创建通用标准型（增强型）/通用性能型（增强型）文件系统，如需创建增强型，此为必填项。</li><li>v4.0： 创建Turbo标准型、Turbo性能型、吞吐型文件系统，非必填项</li></ul><p>创建通用标准型（增强型）、通用性能型（增强型）须加白主账号，如需使用请联系我们。</p>
 * @method string getMetaType() 获取<p>turbo文件系统元数据类型</p><p>枚举值：</p><ul><li>basic： 创建标准版元数据。</li><li>enhanced： 创建增强版元数据</li></ul><p>详情参见<a href="https://cloud.tencent.com/document/product/582/116836">Turbo 文件系统元数据类型</a></p>
 * @method void setMetaType(string $MetaType) 设置<p>turbo文件系统元数据类型</p><p>枚举值：</p><ul><li>basic： 创建标准版元数据。</li><li>enhanced： 创建增强版元数据</li></ul><p>详情参见<a href="https://cloud.tencent.com/document/product/582/116836">Turbo 文件系统元数据类型</a></p>
 * @method string getScenario() 获取<p>业务场景。</p><p>枚举值：</p><ul><li>AgentSandbox： 创建 AgentCFS 时必传</li></ul>
 * @method void setScenario(string $Scenario) 设置<p>业务场景。</p><p>枚举值：</p><ul><li>AgentSandbox： 创建 AgentCFS 时必传</li></ul>
 */
class CreateCfsFileSystemRequest extends AbstractModel
{
    /**
     * @var string <p>可用区名称</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/213/15707?">查询可用区列表</a></p>
     */
    public $Zone;

    /**
     * @var string <p>网络类型</p><p>枚举值：</p><ul><li><p>VPC： 私有网络</p></li><li><p>CCN： 云联网</p></li><li><p>通用标准型/性能型（含增强型）、吞吐型请选择VPC</p></li><li><p>Turbo标准型/性能型可选VPC或CCN</p></li><li><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS时无需传入，传入将被忽略。</p></li></ul>
     */
    public $NetInterface;

    /**
     * @var string <p>权限组 ID。权限组规定了一组可来访白名单及操作权限。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/582/38157">DescribeCfsPGroups</a></p><ul><li>pgroupbasic 为【默认权限组】，【默认权限组】允许所有IP地址访问及读写权限。 </li><li>注意：当 Scenario=AgentSandbox 时，即创建 AgentCFS ，必须传入 pgroupbasic【默认权限组】，传其他值报错。</li></ul>
     */
    public $PGroupId;

    /**
     * @var string <p>文件系统协议类型</p><p>枚举值：</p><ul><li>NFS： 通用标准型（含增强型）、通用性能型（含增强型）支持创建此协议的实例</li><li>CIFS： 即SMB协议，仅部分可用区的通用标准型、吞吐型支持此协议。</li><li>TURBO： Turbo标准型/Turbo性能型/AgentCFS是支持创建此协议的实例</li></ul><p>默认值：NFS</p>
     */
    public $Protocol;

    /**
     * @var string <p>文件系统存储类型其中 SD 为通用标准型存储， HP为通用性能型存储， TB为Turbo标准型， TP 为Turbo性能型。</p><p>枚举值：</p><ul><li>SD： 通用标准型（含增强型）。通用标准型 version = v1.5，通用标准型（增强型） version = v3.1。</li><li>HP： 通用性能型（含增强型）。通用性能型 version = v1.5，通用性能型（增强型） version = v3.1。</li><li>TB： Turbo标准型</li><li>TP： Turbo性能型</li><li>THP： 吞吐型</li></ul><p>默认值：SD</p>
     */
    public $StorageType;

    /**
     * @var string <p>私有网络（VPC） ID，若网络类型选择的是VPC，该字段为必填。</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/215/15778">查询VPC列表</a></p><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS 时无需传入，传入将被忽略。</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网 ID，若网络类型选择的是VPC，该字段为必填。</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/215/15784">查询子网列表</a></p><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS 时无需传入，传入将被忽略。</p>
     */
    public $SubnetId;

    /**
     * @var string <p>指定IP地址，仅VPC网络支持；若不填写、将在该子网下随机分配 IP，Turbo系列当前不支持指定</p>
     */
    public $MountIP;

    /**
     * @var string <p>用户自定义文件系统名称</p>
     */
    public $FsName;

    /**
     * @var boolean <p>文件系统是否加密，若留空则默认为不加密</p>
     */
    public $Encrypted;

    /**
     * @var array <p>文件系统标签</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。用于保证请求幂等性的字符串失效时间为2小时。</p>
     */
    public $ClientToken;

    /**
     * @var string <p>云联网ID， 若网络类型选择的是CCN，该字段为必填</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/215/19199">查询CCN列表</a></p><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS 时无需传入，传入将被忽略</p>
     */
    public $CcnId;

    /**
     * @var string <p>云联网中CFS使用的网段， 若网络类型选择的是CCN，该字段为必填，且不能和Ccn中已经绑定的网段冲突</p><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS 时无需传入，传入将被忽略</p>
     */
    public $CidrBlock;

    /**
     * @var integer <p>文件系统容量，turbo系列必填</p><p>单位：GiB</p><p>Turbo标准型起售20TiB，即20480 GiB，扩容步长10TiB，即10240 GiB。Turbo性能型起售10TiB，即10240 GiB，扩容步长10TiB，即10240 GiB。</p>
     */
    public $Capacity;

    /**
     * @var string <p>文件系统快照 ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/582/80206">DescribeCfsSnapshots</a></p>
     */
    public $SnapshotId;

    /**
     * @var string <p>定期快照策略 ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/582/80208">DescribeAutoSnapshotPolicies</a></p>
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var boolean <p>是否开启自动扩容策略，仅turbo类型文件存储支持</p>
     */
    public $EnableAutoScaleUp;

    /**
     * @var string <p>文件系统版本号。</p><p>枚举值：</p><ul><li>v1.5： 创建通用标准型/通用性能型文件系统</li><li>v3.1： 创建通用标准型（增强型）/通用性能型（增强型）文件系统，如需创建增强型，此为必填项。</li><li>v4.0： 创建Turbo标准型、Turbo性能型、吞吐型文件系统，非必填项</li></ul><p>创建通用标准型（增强型）、通用性能型（增强型）须加白主账号，如需使用请联系我们。</p>
     */
    public $CfsVersion;

    /**
     * @var string <p>turbo文件系统元数据类型</p><p>枚举值：</p><ul><li>basic： 创建标准版元数据。</li><li>enhanced： 创建增强版元数据</li></ul><p>详情参见<a href="https://cloud.tencent.com/document/product/582/116836">Turbo 文件系统元数据类型</a></p>
     */
    public $MetaType;

    /**
     * @var string <p>业务场景。</p><p>枚举值：</p><ul><li>AgentSandbox： 创建 AgentCFS 时必传</li></ul>
     */
    public $Scenario;

    /**
     * @param string $Zone <p>可用区名称</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/213/15707?">查询可用区列表</a></p>
     * @param string $NetInterface <p>网络类型</p><p>枚举值：</p><ul><li><p>VPC： 私有网络</p></li><li><p>CCN： 云联网</p></li><li><p>通用标准型/性能型（含增强型）、吞吐型请选择VPC</p></li><li><p>Turbo标准型/性能型可选VPC或CCN</p></li><li><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS时无需传入，传入将被忽略。</p></li></ul>
     * @param string $PGroupId <p>权限组 ID。权限组规定了一组可来访白名单及操作权限。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/582/38157">DescribeCfsPGroups</a></p><ul><li>pgroupbasic 为【默认权限组】，【默认权限组】允许所有IP地址访问及读写权限。 </li><li>注意：当 Scenario=AgentSandbox 时，即创建 AgentCFS ，必须传入 pgroupbasic【默认权限组】，传其他值报错。</li></ul>
     * @param string $Protocol <p>文件系统协议类型</p><p>枚举值：</p><ul><li>NFS： 通用标准型（含增强型）、通用性能型（含增强型）支持创建此协议的实例</li><li>CIFS： 即SMB协议，仅部分可用区的通用标准型、吞吐型支持此协议。</li><li>TURBO： Turbo标准型/Turbo性能型/AgentCFS是支持创建此协议的实例</li></ul><p>默认值：NFS</p>
     * @param string $StorageType <p>文件系统存储类型其中 SD 为通用标准型存储， HP为通用性能型存储， TB为Turbo标准型， TP 为Turbo性能型。</p><p>枚举值：</p><ul><li>SD： 通用标准型（含增强型）。通用标准型 version = v1.5，通用标准型（增强型） version = v3.1。</li><li>HP： 通用性能型（含增强型）。通用性能型 version = v1.5，通用性能型（增强型） version = v3.1。</li><li>TB： Turbo标准型</li><li>TP： Turbo性能型</li><li>THP： 吞吐型</li></ul><p>默认值：SD</p>
     * @param string $VpcId <p>私有网络（VPC） ID，若网络类型选择的是VPC，该字段为必填。</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/215/15778">查询VPC列表</a></p><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS 时无需传入，传入将被忽略。</p>
     * @param string $SubnetId <p>子网 ID，若网络类型选择的是VPC，该字段为必填。</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/215/15784">查询子网列表</a></p><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS 时无需传入，传入将被忽略。</p>
     * @param string $MountIP <p>指定IP地址，仅VPC网络支持；若不填写、将在该子网下随机分配 IP，Turbo系列当前不支持指定</p>
     * @param string $FsName <p>用户自定义文件系统名称</p>
     * @param boolean $Encrypted <p>文件系统是否加密，若留空则默认为不加密</p>
     * @param array $ResourceTags <p>文件系统标签</p>
     * @param string $ClientToken <p>用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。用于保证请求幂等性的字符串失效时间为2小时。</p>
     * @param string $CcnId <p>云联网ID， 若网络类型选择的是CCN，该字段为必填</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/215/19199">查询CCN列表</a></p><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS 时无需传入，传入将被忽略</p>
     * @param string $CidrBlock <p>云联网中CFS使用的网段， 若网络类型选择的是CCN，该字段为必填，且不能和Ccn中已经绑定的网段冲突</p><p>当 Scenario=AgentSandbox 时，即创建 AgentCFS 时无需传入，传入将被忽略</p>
     * @param integer $Capacity <p>文件系统容量，turbo系列必填</p><p>单位：GiB</p><p>Turbo标准型起售20TiB，即20480 GiB，扩容步长10TiB，即10240 GiB。Turbo性能型起售10TiB，即10240 GiB，扩容步长10TiB，即10240 GiB。</p>
     * @param string $SnapshotId <p>文件系统快照 ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/582/80206">DescribeCfsSnapshots</a></p>
     * @param string $AutoSnapshotPolicyId <p>定期快照策略 ID</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/582/80208">DescribeAutoSnapshotPolicies</a></p>
     * @param boolean $EnableAutoScaleUp <p>是否开启自动扩容策略，仅turbo类型文件存储支持</p>
     * @param string $CfsVersion <p>文件系统版本号。</p><p>枚举值：</p><ul><li>v1.5： 创建通用标准型/通用性能型文件系统</li><li>v3.1： 创建通用标准型（增强型）/通用性能型（增强型）文件系统，如需创建增强型，此为必填项。</li><li>v4.0： 创建Turbo标准型、Turbo性能型、吞吐型文件系统，非必填项</li></ul><p>创建通用标准型（增强型）、通用性能型（增强型）须加白主账号，如需使用请联系我们。</p>
     * @param string $MetaType <p>turbo文件系统元数据类型</p><p>枚举值：</p><ul><li>basic： 创建标准版元数据。</li><li>enhanced： 创建增强版元数据</li></ul><p>详情参见<a href="https://cloud.tencent.com/document/product/582/116836">Turbo 文件系统元数据类型</a></p>
     * @param string $Scenario <p>业务场景。</p><p>枚举值：</p><ul><li>AgentSandbox： 创建 AgentCFS 时必传</li></ul>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NetInterface",$param) and $param["NetInterface"] !== null) {
            $this->NetInterface = $param["NetInterface"];
        }

        if (array_key_exists("PGroupId",$param) and $param["PGroupId"] !== null) {
            $this->PGroupId = $param["PGroupId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("MountIP",$param) and $param["MountIP"] !== null) {
            $this->MountIP = $param["MountIP"];
        }

        if (array_key_exists("FsName",$param) and $param["FsName"] !== null) {
            $this->FsName = $param["FsName"];
        }

        if (array_key_exists("Encrypted",$param) and $param["Encrypted"] !== null) {
            $this->Encrypted = $param["Encrypted"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = $param["Capacity"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("EnableAutoScaleUp",$param) and $param["EnableAutoScaleUp"] !== null) {
            $this->EnableAutoScaleUp = $param["EnableAutoScaleUp"];
        }

        if (array_key_exists("CfsVersion",$param) and $param["CfsVersion"] !== null) {
            $this->CfsVersion = $param["CfsVersion"];
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("Scenario",$param) and $param["Scenario"] !== null) {
            $this->Scenario = $param["Scenario"];
        }
    }
}
